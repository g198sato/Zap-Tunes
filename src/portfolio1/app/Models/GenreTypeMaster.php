<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreTypeMaster extends Model
{
    use HasFactory;

    public function genre_masters()
    {
      return $this->hasMany('App\Models\GenreMaster');
    }
}
