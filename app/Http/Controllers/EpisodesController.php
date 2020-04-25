<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class EpisodesController extends Controller
{
    public function list_episodes($title) {
        $episodes = App\Episode::episodes_by_title($title);
        $title = App\Title::get_title($title);
        return view('pages.episodes', compact('episodes', 'title'));
    }
}
