<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [];
        $titles = [
            'one category',
            'two category',
            'three category',
            'four category',
            'five category',
            'six category',
        ];

        foreach ($titles as $title) {
            $categories[] = [
                'name' => $title,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('categories')->insert($categories);
    }
}
