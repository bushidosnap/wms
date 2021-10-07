<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Item::insert([
            ['code' => rand(1000, 2000), 'name' => 'item_1' , 'description' => 'description_1', 'type' => 'type_'.[1,2,3,4][array_rand([1,2,3,4])], 
            'image' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['code' => rand(1000, 2000), 'name' => 'item_2' , 'description' => 'description_2', 'type' => 'type_'.[1,2,3,4][array_rand([1,2,3,4])], 
            'image' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['code' => rand(1000, 2000), 'name' => 'item_3' , 'description' => 'description_3', 'type' => 'type_'.[1,2,3,4][array_rand([1,2,3,4])], 
            'image' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['code' => rand(1000, 2000), 'name' => 'item_4' , 'description' => 'description_4', 'type' => 'type_'.[1,2,3,4][array_rand([1,2,3,4])], 
            'image' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['code' => rand(1000, 2000), 'name' => 'item_5' , 'description' => 'description_5', 'type' => 'type_'.[1,2,3,4][array_rand([1,2,3,4])], 
            'image' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['code' => rand(1000, 2000), 'name' => 'item_6' , 'description' => 'description_6', 'type' => 'type_'.[1,2,3,4][array_rand([1,2,3,4])], 
            'image' => NULL, 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
