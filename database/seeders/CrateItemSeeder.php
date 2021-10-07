<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CrateItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        DB::table('crate_item')->insert([
            [
                'crate_id' => 1,
                'item_id' => 1,
                'qty' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'crate_id' => 1,
                'item_id' => 2,
                'qty' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'crate_id' => 1,
                'item_id' => 3,
                'qty' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'crate_id' => 2,
                'item_id' => 2,
                'qty' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'crate_id' => 2,
                'item_id' => 4,
                'qty' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'crate_id' => 3,
                'item_id' => 3,
                'qty' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]]);
    }
}
