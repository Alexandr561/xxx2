<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class
AdminShowController extends Controller
{
    public function show(Post $post)
    {

        return view('pages.admin.show', [
            'post' => $post,
            'postsCount' => Post::count() // Добавляем подсчет постов
        ]);
    }
}

