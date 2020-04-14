<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Post;

class PostsController extends Controller
{
    public function index() {
        return view('posts.index');
    }
    public function news() {
        return view('posts.news');
    }
    public function series() {
        return view('posts.series');
    }
    public function dorama() {
        return view('posts.dorama');
    }
    public function cartoons() {
        return view('posts.cartoons');
    }

}
