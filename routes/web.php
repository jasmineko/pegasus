<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('categories/dorama', 'TitlesController@dorama');
//Route::get('categories/cartoons', 'TitlesController@cartoons');

Route::get('/{title}', 'EpisodesController@list_episodes');

