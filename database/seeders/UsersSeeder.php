<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('users')->insert([
                'name' => "grigor",
                'email' => "admin@gmail.com",
                'is_admin' => 1,
                "password" => hash::make("ababab")
            ]);

            DB::table('users')->insert([
                'name' => "AADMIN",
                'email' => "else@gmail.com",
                "password" => hash::make("ababab")
            ]);
    }
}
