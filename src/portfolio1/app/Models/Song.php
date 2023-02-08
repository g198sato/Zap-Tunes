<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'song_name',
        'genre_id',
        'highlight',
        'plays',
    ];

    public function users()
    {
      return $this->belongsTo('App\Models\User', 'id');
    }


    /*
    中間テーブルsong_genremasterを使用するために廃止
    public function genres()
    {
      return $this->hasMany('App\Models\Genre');
    }
    */

    //中間テーブル
    public function genre_masters()
    {
      return $this->belongsToMany('App\Models\GenreMaster');
    }
}
