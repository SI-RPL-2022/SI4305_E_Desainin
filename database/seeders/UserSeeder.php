<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fullname' => 'admin',
            'email' => 'admin@desainin.com',
            'phonenumber' => '081234567890',
            'password' => Hash::make('admin'),
            'is_admin' => true
        ]);

        User::create([
            'fullname' => 'Naufal Aqil Himawan',
            'email' => 'himawannaufal59@gmail.com',
            'phonenumber' => '087741702385',
            'password' => Hash::make('password'),
        ]);
    }
}
