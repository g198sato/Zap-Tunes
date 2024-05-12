<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMaster extends Model
{
    use HasFactory;

    public function genre_type_masters()
    {
      return $this->belongsTo('App\Models\GenreTypeMaster', 'id');
    }

    // 中間テーブル
    public function songs()
    {
      return $this->belongsToMany('App\Models\Song');
    }
}
