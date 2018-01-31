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
                'logo' => 'http://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c05512472.png',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Smartphones',
                'alias' => 'smartphones',
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTopSCTGA1L__9_LmozshKwkdliSrWv3pXHMyl5vA3vU99v-i_C',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Computers',
                'alias' => 'computers',
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLyg5e_vtytdDLvAbzScRwSBSuHLqgg1ars5tZ2XPddqhaUM6k',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
