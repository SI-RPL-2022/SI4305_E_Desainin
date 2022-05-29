<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
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
            'username' => 'admin',
            'email' => 'admin@desainin.com',
            'phonenumber' => '081234567890',
            'password' => Hash::make('admin'),
            'is_admin' => true
        ]);

        User::create([
            'fullname' => 'Naufal Aqil Himawan',
            'username' => 'naufalaqil',
            'email' => 'himawannaufal59@gmail.com',
            'phonenumber' => '087741702385',
            'password' => Hash::make('password'),
        ]);

        // Post::create([
        //     'user_id' => '1',
        //     'title' => 'Welcome to Desainin!',
        //     'body' => 'Hi! Welcome to Desainin. The best place to find the best portfolio. Feel free to share your best portfolio with us! :)'
        // ]);
    }
}
