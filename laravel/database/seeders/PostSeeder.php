<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => "Nobody" ,
            'body' => "Mkvdaria" ,
            'author' => "Derek Kolstad" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "Inception" ,
            'body' => "Leonardo DiCaprio" ,
            'author' => "Christopher Nolan" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "John Wick" ,
            'body' => "Keanu Reeves" ,
            'author' => "Derek Kolstad" ,
            'active' => 0
        ]);
        Post::create([
            'title' => "The Equalizer" ,
            'body' => "Denzel Washington" ,
            'author' => "Michael Sloan" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "Scent of a Woman" ,
            'body' => "Al Pacino" ,
            'author' => "Giovanni Arpino" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "Once Upon a Time... in Hollywood" ,
            'body' => "Brad Pitt" ,
            'author' => "Quentin Tarantino" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "The Green Mile" ,
            'body' => "John Coffey" ,
            'author' => "Stephen King" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "Django" ,
            'body' => "Samuel L. Jackson" ,
            'author' => "Quentin Tarantino" ,
            'active' => 0
        ]);
        Post::create([
            'title' => "Inglourious Basterds" ,
            'body' => "Christoph Waltz" ,
            'author' => "Quentin Tarantino" ,
            'active' => 0
        ]);
    }
}
