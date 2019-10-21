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
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'roles' => 0
        ]);
        DB::table('users')->insert([
            'username' => 'member',
            'password' => Hash::make('member123'),
            'roles' => 1
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'password' => Hash::make('user123'),
            'roles' => 2
        ]);
    }
}
