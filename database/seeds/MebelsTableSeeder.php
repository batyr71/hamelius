<?php

use Illuminate\Database\Seeder;

class MebelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mebels')->insert([
            'name' => "полка",
        ]);
        DB::table('mebels')->insert([
            'name' => "шкаф",
        ]);
        DB::table('mebels')->insert([
            'name' => "коробка",
        ]);
    }
}
