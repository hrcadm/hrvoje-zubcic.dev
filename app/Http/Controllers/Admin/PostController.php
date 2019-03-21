<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function showAllPosts()
    {
        return true;
    }

    public function newPost()
    {
        return true;
    }
}
