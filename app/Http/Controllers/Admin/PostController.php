<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Mews\Purifier\Purifier;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $newPost = new Post();

        $newPost->title = clean($request->postTitle);
        $newPost->short_description = clean($request->postShortDesc);
        $newPost->content = clean($request->postContent);
        $newPost->author = Auth::user()->name;
        $newPost->category_id = $request->postCategory;

        $newPost->save();

        return redirect(route('adminShowPost', $newPost->id));
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();

        return view('admin.blog.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $updatePost = Post::findOrFail($id);
        $updatePost->title = clean($request->postTitle);
        $updatePost->short_description = clean($request->postShortDesc);
        $updatePost->content = clean($request->postContent);
        $updatePost->author = Auth::user()->name;
        $updatePost->category_id = $request->postCategory;

        $updatePost->save();

        return redirect(route('adminShowPost', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        $removePost = Post::findOrFail($id);
        $removePost->delete();

        return redirect(route('adminAllPosts'));
    }
}
