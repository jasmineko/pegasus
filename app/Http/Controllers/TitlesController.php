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
        $titles = App\Title::news();
        return view('categories.news', compact('titles'));
    }
    public function category($category) {
        $titles = App\Title::category($category);
        return view('categories.titles', compact('titles', 'category'));
    }
}
