<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminEditController extends Controller
{
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $totalPosts = Post::count(); // Общее количество постов

        return view('admin.adminEdit', [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
            'totalPosts' => $totalPosts // Передаем общее количество
        ]);
    }

}
