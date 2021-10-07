<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Container;

class ContainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Container::insert([
            ['code' => rand(1000, 2000), 'name' => 'container_1' , 'description' => 'description_1', 'created_at' => $now, 'updated_at' => $now],
            ['code' => rand(1000, 2000), 'name' => 'container_2' , 'description' => 'description_2', 'created_at' => $now, 'updated_at' => $now],
            ['code' => rand(1000, 2000), 'name' => 'container_3' , 'description' => 'description_3', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
