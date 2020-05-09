<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TitlesController@index');
Route::get('categories/news', 'TitlesController@news');
Route::get('categories/{category}', 'TitlesController@category');

Route::get('/{title}', 'EpisodesController@show_episode');

Route::get('/{title}/S{season}E{episode}', 'EpisodesController@show_episode');

Route::get('/pages/search', function () {
    $title = $_GET['title'];
    $items = \App\Title::where([
        ['name', 'LIKE', '%' . $title . '%'],
    ])->get();

    return view('pages.search', compact('items'));
});