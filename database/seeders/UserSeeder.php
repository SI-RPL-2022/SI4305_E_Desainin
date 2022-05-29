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

        Post::create([
            'user_id' => '2',
            'title' => 'Portfolio 1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad deserunt repellendus dicta possimus? Sunt, odit voluptates
            perferendis blanditiis dolores illo.'
        ]);

        Post::create([
            'user_id' => '2',
            'title' => 'Portfolio 2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime libero reprehenderit amet ducimus, voluptatem
            voluptatibus culpa placeat atque laborum quam!'
        ]);

        Post::create([
            'user_id' => '2',
            'title' => 'Portfolio 3',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloremque aliquam provident qui quis a possimus.
            Cum iusto voluptatem commodi!'
        ]);

        Post::create([
            'user_id' => '2',
            'title' => 'Portfolio 4',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sed omnis ullam adipisci nisi delectus dolores veniam,
            sunt consequuntur quia!'
        ]);

        Post::create([
            'user_id' => '2',
            'title' => 'Portfolio 5',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, adipisci pariatur? Accusamus illum nam libero
            architecto cupiditate enim, reprehenderit quo.'
        ]);
    }
}
