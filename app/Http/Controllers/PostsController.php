<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
//        $post = \DB::table('posts')->where('slug', $slug)->first();
//
//        if (! $post) {
//            abort(404);
//        }
//
//        return view('post', [
//            'post' => $post
//        ])

        $posts = [
            'my-first-post' => 'Hello, this is my first blog post!',
            'my-second-post' => 'Now I am getting the hang of this blogging thing.'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'Sorry, that post was not found.');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
