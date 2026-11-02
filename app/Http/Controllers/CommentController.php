<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('post')->get();

        return view('comment.index', [
            'comments' => $comments,
            'pagetitle' => 'Comments',
        ]);
    }

    public function create()
    {
        $post = Post::first();   // needs at least one post (visit /blog/create first)

        Comment::create([
            'author' => 'Ziad',
            'content' => 'This is a test comment',
            'post_id' => 3,
        ]);

        return redirect('/comments');
    }
}