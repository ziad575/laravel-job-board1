<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;

class TagController extends Controller
{
    
public function index()
{
    $tags = Tag::all();

    return view('tag.index', ['tags' => $tags, 'pagetitle' => 'Tags']);
}
    public function create()
    {
        Tag::create(['title' => 'my new project here']);

        return redirect('/tags');
    }
    public function testManyToMany()
{
    $tag = Tag::first();    // first tag that exists
    $post = Post::first();  // first post that exists

    if (!$tag || !$post) {
        return 'Create a tag (/tags/create) and a post (/blog/create) first.';
    }

    $tag->posts()->attach([$post->id]);

    return response()->json([
        'tag' => $tag->title,
        'posts' => $tag->posts,
    ]);

   
   
   }
}