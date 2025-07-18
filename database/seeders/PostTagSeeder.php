<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $tags = Tag::all();

        // Каждый пост получает 2-3 случайных тега
        $posts->each(function ($post) use ($tags) {
            $post->tags()->attach(
                $tags->random(rand(2, 3))->pluck('id')->toArray()
            );
        });
    }
}
