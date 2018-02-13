<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => "Laptop's",
                'alias' => 'laptops',
                'logo' => '/uploads/categories/laptops.png',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Smartphones',
                'alias' => 'smartphones',
                'logo' => '/uploads/categories/smartphones.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Computers',
                'alias' => 'computers',
                'logo' => '/uploads/categories/computers.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
