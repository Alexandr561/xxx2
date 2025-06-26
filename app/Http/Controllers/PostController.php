<?php

namespace App\Http\Controllers;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class
PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter);
        dd($posts);

        $posts = Post::paginate(5);
//        $tag = Tag::find(3);
//        dd($posts->tags);
        return view('pages.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $posts = Post::all();
        $tags = Tag::all();
        return view('pages.create', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
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
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('pages.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.edit', [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post, Request $request)
    {
        $data = $request->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);


        $tags = $data['tags'];
        unset($data['tags']);


        $post->update($data);
        $post->tags()->sync($tags);


        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function first_or_create()
    {

        $post = Post::firstOrCreate(
            [
                'title' => 'Новости технологи'  // критерий поиска
            ],
            [
                'content' => 'Содержание новости666',  // данные для создания
                'image' => 'image.jpeg',
                'likes' => rand(1, 100),
                'is_published' => true,
            ]
        );
        dump($post->content);
        dd('finished');
    }
}


