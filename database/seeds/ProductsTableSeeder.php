<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Ноутбук',
                'alias' => 'Noytbyk',
                'price' => '600',
                'description' => 'Это современный ноутбук',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Смартфон',
                'alias' => 'Smartfon',
                'price' => '300',
                'description' => 'Это современный смартфон',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Компьютер',
                'alias' => 'Komputer',
                'price' => '800',
                'description' => 'Это современный компьютер',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
