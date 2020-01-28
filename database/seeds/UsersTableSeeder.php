<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            'name' => 'Client',
            'email' => 'client@test.com',
            'password' => bcrypt('123qwe'),
        ],
        [
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('123qwe'),
        ]
    ]);
    }
}
