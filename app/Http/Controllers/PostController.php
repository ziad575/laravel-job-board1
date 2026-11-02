<?php

namespace App\Http\Controllers;

use App\Models\Post;
   // at the top, under the namespace line
use App\Models\Comment;   // add at the top, under the namespace
class PostController extends Controller
{
public function index()
{
    $data = Post::all();

    return view('post.index', ['posts' => $data, 'pagetitle' => 'Blog']);
}   


    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post, 'pagetitle' => $post->title]);
    }

    public function create()
    {
        Post::create([
            'title' => 'New Post',
            'body' => 'This is a new post created using Eloquent ORM.',
            'author' => 'ziad',
            'published' => true,
        ]);

        return redirect('/blog');
    }
    public function delete()
{
    Comment::where('post_id', 3)->delete();   // remove the post's comments first
    Post::destroy(3);                         // then delete post 1

    return redirect('/blog');
}
}