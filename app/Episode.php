<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public static function episodes_by_title($title) {
        return static::where('title', $title)->get();
    }

    public static function episodes_by_season($episodes, $season) {
        return $episodes->where('season', $season)->sortByDesc('episode_no');
    }
}
