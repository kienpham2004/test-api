<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'user_name' => 'phamkien',
                'email' => 'phamkien20041998@gmail.com',
                'password' => '123456',
                'phone' => '0123456789',
            ],
            [
                'user_name' => 'daovannha',
                'email' => 'daovannha@gmail.com',
                'password' => '123456789',
                'phone' => '12637123871823',
            ],
            [
                'user_name' => 'thangminhhoang',
                'email' => 'minhthang@gmail.com',
                'password' => '123456789',
                'phone' => '12637123871823',
            ],
            [
                'user_name' => 'daiphung',
                'email' => 'daiphung@gmail.com',
                'password' => '123456789',
                'phone' => '12637123871823',
            ]
        ]);
    }
}
