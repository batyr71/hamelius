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
            'name' => "Полка",
        ]);
        DB::table('mebels')->insert([
            'name' => "Шкаф",
        ]);
        DB::table('mebels')->insert([
            'name' => "Коробка",
        ]);
    }
}
