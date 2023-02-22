<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Song;
use App\Models\Genre;

class SongController extends Controller
{
    //曲の再生完了時・nextボタン押下時，指定された条件に合致する曲の中で
    //再生数が最も少ない曲のデータを取得する
    public function next(Request $request){

        $next_song =  Song::select('songs.*', 'genre_master_song.genre_master_id', 'users.name', 'users.link')
                            ->join('genre_master_song', 'songs.id', '=', 'genre_master_song.song_id')
                            ->join('users' , 'user_id' , '=', 'users.id')
                            ->where('genre_master_id', '=', $request->selected_genre_id)
                            ->whereNotIn('songs.id', $request->except)
                            ->get()
                            ->sortBy('plays')
                            ->first();

        //再生数の更新
        if(isset($next_song)){
            $next_song->plays++;
            $next_song->save();
        }
        else{
            $next_song = null;
        }


        return $next_song;
    }

    //ページがロードされた時，再生数が最も少ない曲のデータを取得する
    public function mounted(){
        $next_song =  Song::select('songs.*', 'genre_master_song.genre_master_id', 'users.name', 'users.link')
                            ->join('genre_master_song', 'songs.id', '=', 'genre_master_song.song_id')
                            ->join('users' , 'user_id' , '=', 'users.id')
                            ->get()
                            ->sortBy('plays')
                            ->first();

        //再生数の更新
        $next_song->plays++;
        $next_song->save();

        return $next_song;
    }
}
