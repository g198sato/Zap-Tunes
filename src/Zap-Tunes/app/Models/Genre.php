<?php

/*
中間テーブルsong_genremasterを使用するために廃止

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_id',
        'genre_master_id',
    ];

    public function songs()
    {
      return $this->belongsTo('App\Models\Song', 'id');
    }

    public function genre_masters()
    {
      return $this->belongsTo('App\Models\GenreMaster', 'id');
    }
}
*/