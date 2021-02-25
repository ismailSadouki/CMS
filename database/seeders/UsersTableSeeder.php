<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'id' => 1,
            'name' => "admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str::random(10),
            'role_id' => 1
        ]);

        DB::table('profiles')->insert(['user_id' => 1]);


        DB::table('users')->insert([
            'id' => 2,
            'name' => "user",
            'email' => "user@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str::random(10),
            'role_id' => 2

        ]);

        DB::table('profiles')->insert(['user_id' => 2]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => "user2",
            'email' => "user2@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str::random(10),
            'role_id' => 3

        ]);

        DB::table('profiles')->insert(['user_id' => 3]);

    }
}
