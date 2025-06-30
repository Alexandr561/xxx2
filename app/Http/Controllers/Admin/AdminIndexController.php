<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class AdminIndexController extends Controller
{
    public function index(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(6);
        $totalPosts = Post::count(); // Общее количество постов

        return view('admin.adminIndex', [
            'posts' => $posts,
            'totalPosts' => $totalPosts // Передаем общее количество
        ]);
    }
}
