<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                // 'id' => ,
                'name' => 'shraddha',
                'password' => 'shraddha@123',
                'email' => 'shraddha@gmail.com'
            ],
            [
                // 'id' => 2,
                'name' => 'atharva',
                'password' => 'atharva@123',
                'email' => 'atharva@gmail.com'
            ],
            [
                // 'id' => 3,
                'name' => 'tejal',
                'password' => 'tejal@123',
                'email' => 'tejal@gmail.com'
            ],
            [
                // 'id' => 4,
                'name' => 'kalpana',
                'password' => 'kalpana@123',
                'email' => 'kalpana@gmail.com'
            ],
            [
                // 'id' => 5,
                'name' => 'priya',
                'password' => 'priya@123',
                'email' => 'priya@gmail.com'
            ],
            [
                // 'id' => 6,
                'name' => 'roshni',
                'password' => 'roshni@123',
                'email' => 'roshni@gmail.com'
            ],
            [
                // 'id' => 7,
                'name' => 'ketaki',
                'password' => 'ketaki@123',
                'email' => 'ketaki@gmail.com'
            ],
            [
                // 'id' => 8,
                'name' => 'johnken',
                'password' => 'johnken@123',
                'email' => 'johnken@gmail.com'
            ],
            [
                // 'id' => 9,
                'name' => 'shreya',
                'password' => 'shreya@123',
                'email' => 'shreya@gmail.com'
            ],
            [
                // 'id' => 10,
                'name' => 'karen',
                'password' => 'karen@123',
                'email' => 'karen@gmail.com'
            ]
        ]);
    }
}
