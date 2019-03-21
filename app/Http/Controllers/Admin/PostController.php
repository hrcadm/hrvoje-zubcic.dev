<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function showAllPosts()
    {
        $posts = Post::all();

        return view('admin.blog.index', compact('posts'));
    }

    public function newPost()
    {
        return view('admin.blog.create');
    }
}
