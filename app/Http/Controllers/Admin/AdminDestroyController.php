<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminDestroyController extends Controller
{
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.index');
    }
}
