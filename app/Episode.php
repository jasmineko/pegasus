<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Episode extends Model
{
    public static function episodes_by_title($title) {
        return static::where('title', $title)->get();
    }

    public static function episodes_by_season($episodes, $season) {
        return $episodes->where('season', $season)->sortByDesc('episode_no');
    }

    public static function get_episode_link($ep_id) {
        return DB::table('mirrors')->where('id', $ep_id)->pluck('mirror')->first();
    }

    public static function get_episode_id($t, $s, $e) {
        return static::where([['title', '=', $t], ['season', '=', $s], ['episode_no', '=', $e]])->pluck('id')->first();
    }
}
