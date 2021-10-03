<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crates', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->unique();

            $table->foreignId('container_id')
            ->constrained('containers')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crates');
    }
}
