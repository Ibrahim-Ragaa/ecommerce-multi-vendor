<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table([
            // Admin
            [
                'first_name'  =>  'admin',
                'last_name'   =>  'admin',
                'username'    =>  'admin',
                'email'       =>  'admin@laravel.com',
                'password'    =>  Hash::make('12345678'),
                'role'        =>  'admin',
                'status'      =>  'active',
            ],
            // Vendor
            [
                'first_name'  =>  'vendor_1',
                'last_name'   =>  'vendor_1',
                'username'    =>  'vendor_1',
                'email'       =>  'vendor_1@laravel.com',
                'password'    =>  Hash::make('12345678'),
                'role'        =>   'vendor',
                'status'      =>  'active',
            ],
            // User
            [
                'first_name'  =>  'user_1',
                'last_name'   =>  'user_1',
                'username'    =>  'user_1',
                'email'       =>  'user_1@laravel.com',
                'password'    =>  Hash::make('12345678'),
                'role'        =>  'user',
                'status'      =>  'active',
            ],
        ]);
    }
}
