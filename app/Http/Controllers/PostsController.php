<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PostsController extends Controller
{
    public function index() {
        $posts = App\Post::all();
        return view('posts.index', compact('posts'));
    }
    public function news() {
        $posts = App\Post::all();
        return view('posts.news', compact('posts'));
    }
    public function series() {
        $posts = App\Post::all();
        return view('posts.series', compact('posts'));
    }
    public function dorama() {
        $posts = App\Post::all();
        return view('posts.dorama', compact('posts'));
    }
    public function cartoons() {
        $posts = App\Post::all();
        return view('posts.cartoons', compact('posts'));
    }

}
