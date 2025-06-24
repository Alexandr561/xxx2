<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Очистка таблиц перед заполнением
//        DB::table('users')->truncate();
//        DB::table('categories')->truncate();
        DB::table('posts')->truncate();
        DB::table('categories')->truncate();

        $this->call([
            CategorySeeder::class, // Добавлен вызов вашего сидера
            PostSeeder::class,      // Затем посты
            TagSeeder::class, // Подключаем наш сидер
            PostTagSeeder::class // Связывает их
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
