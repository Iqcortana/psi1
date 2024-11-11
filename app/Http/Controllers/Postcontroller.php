<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class Postcontroller extends Controller
{
    
    //closures posts dan single post diambil dari routes/web.php
    public function index() {
        return view('posts', [
            'posts' => Post::latest()->paginate(12) // gapake get() lagi
        ]); //tambahin filter request yg prosesnya dari model Post
    }

    public function show(Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }
}