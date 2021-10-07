<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Crate;

class CratesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Crate::insert([
            ['code' => rand(1000, 2000), 'container_id' => 1, 'name' => 'crate_1' , 'description' => 'description_1', 'created_at' => $now, 'updated_at' => $now],
            ['code' => rand(1000, 2000), 'container_id' => 1, 'name' => 'crate_2' , 'description' => 'description_2', 'created_at' => $now, 'updated_at' => $now],
            ['code' => rand(1000, 2000), 'container_id' => 2, 'name' => 'crate_3' , 'description' => 'description_3', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
