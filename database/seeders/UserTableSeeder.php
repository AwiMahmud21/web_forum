<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            //admin
            [
                'name' => 'Awi',
                'email' => 'awi@gmail.com',
                'password' => Hash::make('123'),
                'address' => 'Bukulasa',
                'phone_number' => '082190082622',
                'role' => 'admin',
                'status' => 'active',
            ],
            
            //user
            [
                'name' => 'Riko',
                'email' => 'riko@gmail.com',
                'password' => Hash::make('123'),
                'address' => 'Sofifi',
                'phone_number' => '082190001101',
                'role' => 'user',
                'status' => 'active',
            ]

        ]);
    }
}