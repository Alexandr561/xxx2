<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class
AdminStoreController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',
            'category_id' => 'required|exists:categories,id', // Проверка, что категория существует
            'tags' => ''
        ]);
        $tags = $data['tags'] ??[];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);

//        return redirect()->route('posts.index');
        return redirect()->route('admin.show', $post->id);
    }
}

