<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'заголовок1',
                'alias' => 'zagolovok1',
                'intro' => 'интро1',
                'content' => 'контент1',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'заголовок2',
                'alias' => 'zagolovok2',
                'intro' => 'интро2',
                'content' => 'контент2',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'заголовок3',
                'alias' => 'zagolovok3',
                'intro' => 'интро3',
                'content' => 'контент3',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
