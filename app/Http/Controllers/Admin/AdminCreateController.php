<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class
AdminCreateController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $posts = Post::all();
        $tags = Tag::all();
        $totalPosts = Post::count(); // Общее количество постов

        return view('admin.adminCreate', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'totalPosts' => $totalPosts // Передаем общее количество
        ]);
    }
}


