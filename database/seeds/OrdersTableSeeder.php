<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'customer_name' => 'Игорь',
                'email' => 'igor@gmail.com',
                'phone' => '123123123',
                'feedback' => 'Отзыв',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'customer_name' => 'Саша',
                'email' => 'sasha@gmail.com',
                'phone' => '321321321',
                'feedback' => 'Отзыв',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'customer_name' => 'Леша',
                'email' => 'lesha@gmail.com',
                'phone' => '213213213',
                'feedback' => 'Отзыв',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
