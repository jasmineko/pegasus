<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TitlesController extends Controller
{
    public function index() {
        $titles = App\Title::all();
        return view('categories.index', compact('titles'));
    }
    public function news() {
        $titles = App\Title::all();
        return view('categories.news', compact('titles'));
    }
    public function series() {
        $titles = App\Title::all();
        return view('categories.series', compact('titles'));
    }
    public function dorama() {
        $titles = App\Title::all();
        return view('categories.dorama', compact('titles'));
    }
    public function cartoons() {
        $titles = App\Title::all();
        return view('categories.cartoons', compact('titles'));
    }
}
