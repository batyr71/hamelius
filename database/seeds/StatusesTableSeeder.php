<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => "Новая заявка",
        ]);
        DB::table('statuses')->insert([
            'name' => "Выполнение",
        ]);
        DB::table('statuses')->insert([
            'name' => "Закрыто",
        ]);
    }
}
