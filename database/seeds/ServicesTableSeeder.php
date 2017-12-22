<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => "установка мебели",
        ]);
        DB::table('services')->insert([
            'name' => "ремонт мебели",
        ]);

    }
}
