<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public static function category($category) {
        return static::where('category', $category)->get();
    }

    public static function news() {
        return static::orderByRaw('release_date desc')->get();
    }

    public static function get_title($page_id){
        return static::select('name')->where('page_id', $page_id)->value('name');
    }
}
