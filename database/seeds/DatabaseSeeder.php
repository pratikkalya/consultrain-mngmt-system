<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();

        User::create([
            'name' => 'Pratik Kalya',
            'email' => 'pratik@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'user_type'=> 'admin',
        ]);

        User::create([
            'name' => 'Arunava Chowdhury',
            'email' => 'arunava@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'user_type'=> 'admin',
        ]);

        User::create([
            'name' => 'Sandeep',
            'email' => 'sandeep@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'user_type'=> 'employee',
        ]);

        User::create([
            'name' => 'Silpi',
            'email' => 'silpi@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'user_type'=> 'employee',
        ]);

        User::create([
            'name' => 'Suman',
            'email' => 'suman@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'user_type'=> 'employee',
        ]);

        User::create([
            'name' => 'Dwipraj',
            'email' => 'rishu@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'user_type'=> 'employee',
        ]);

        User::create([
            'name' => 'Pritam',
            'email' => 'pritam@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'user_type'=> 'employee',
        ]);

        User::create([
            'name' => 'Rahul',
            'email' => 'rahul@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'user_type'=> 'employee',
        ]);
    }
}
