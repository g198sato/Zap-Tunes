<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GenreMaster;

class GenreMasterController extends Controller
{
    //全てのジャンル名を取得する
    public function get_all_genre_masters(){
        $all_genre_masters = GenreMaster::orderBy('genre_type_master_id')->get();
        
        return $all_genre_masters;
    }
}
