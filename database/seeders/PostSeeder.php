<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $titles = [
            'Новости технологий',
            'Спортивные события',
            'Модные тенденции',
            'Книжные новинки',
            'Домашний уют',
            'Автомобили будущего',
            'Здоровый образ жизни',
            'Кулинарные рецепты',
            'Путешествия по миру',
            'Финансовые советы'
        ];

        foreach ($titles as $title) {
            $posts[] = [
//                'category_id' => rand(1, 5), // Случайная категория от 1 до 5
                'title' => $title,
                'content' => 'Краткое описание поста ' . $title,
//                'text' => 'Полный текст поста о ' . $title . '. ' . Str::random(200),
                'image' => 'image.jpeg',
                'likes' => rand(1, 100),
                'is_published' => '1',
                'category_id' => rand(1,6),
//                'slug' => Str::slug($title),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
