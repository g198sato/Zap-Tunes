<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GenreMasterSongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            [
                'id'      => 1,
                'song_id' => 1,
                'genre_master_id' => 1,
            ],
            [
                'id'      => 2,
                'song_id' => 1,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 3,
                'song_id' => 2,
                'genre_master_id' => 1,
            ],
            [
                'id'      => 4,
                'song_id' => 2,
                'genre_master_id' => 5,
            ],
            [
                'id'      => 5,
                'song_id' => 3,
                'genre_master_id' => 1,
            ],
            [
                'id'      => 6,
                'song_id' => 3,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 7,
                'song_id' => 4,
                'genre_master_id' => 1,
            ],
            [
                'id'      => 8,
                'song_id' => 4,
                'genre_master_id' => 6,
            ],
            [
                'id'      => 9,
                'song_id' => 5,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 10,
                'song_id' => 6,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 11,
                'song_id' => 6,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 12,
                'song_id' => 7,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 13,
                'song_id' => 7,
                'genre_master_id' => 5,
            ],
            [
                'id'      => 14,
                'song_id' => 8,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 15,
                'song_id' => 8,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 16,
                'song_id' => 9,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 17,
                'song_id' => 9,
                'genre_master_id' => 6,
            ],
            [
                'id'      => 18,
                'song_id' => 10,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 19,
                'song_id' => 10,
                'genre_master_id' => 5,
            ],
            [
                'id'      => 20,
                'song_id' => 11,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 21,
                'song_id' => 11,
                'genre_master_id' => 8,
            ],
            [
                'id'      => 22,
                'song_id' => 12,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 23,
                'song_id' => 12,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 24,
                'song_id' => 13,
                'genre_master_id' => 2,
            ],
            [
                'id'      => 25,
                'song_id' => 13,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 26,
                'song_id' => 14,
                'genre_master_id' => 2,
            ],
            [
                'id'      => 27,
                'song_id' => 14,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 28,
                'song_id' => 15,
                'genre_master_id' => 2,
            ],
            [
                'id'      => 29,
                'song_id' => 15,
                'genre_master_id' => 3,
            ],
            [
                'id'      => 30,
                'song_id' => 15,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 31,
                'song_id' => 16,
                'genre_master_id' => 2,
            ],
            [
                'id'      => 32,
                'song_id' => 16,
                'genre_master_id' => 3,
            ],
            [
                'id'      => 33,
                'song_id' => 16,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 34,
                'song_id' => 16,
                'genre_master_id' => 8,
            ],
            [
                'id'      => 35,
                'song_id' => 17,
                'genre_master_id' => 2,
            ],
            [
                'id'      => 36,
                'song_id' => 17,
                'genre_master_id' => 5,
            ],
            [
                'id'      => 38,
                'song_id' => 18,
                'genre_master_id' => 2,
            ],
            [
                'id'      => 39,
                'song_id' => 18,
                'genre_master_id' => 6,
            ],
            [
                'id'      => 40,
                'song_id' => 19,
                'genre_master_id' => 3,
            ],
            [
                'id'      => 41,
                'song_id' => 19,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 42,
                'song_id' => 20,
                'genre_master_id' => 2,
            ],
            [
                'id'      => 43,
                'song_id' => 20,
                'genre_master_id' => 3,
            ],
            [
                'id'      => 44,
                'song_id' => 21,
                'genre_master_id' => 3,
            ],
            [
                'id'      => 45,
                'song_id' => 21,
                'genre_master_id' => 8,
            ],
            [
                'id'      => 46,
                'song_id' => 22,
                'genre_master_id' => 5,
            ],
            [
                'id'      => 47,
                'song_id' => 22,
                'genre_master_id' => 9,
            ],
            [
                'id'      => 48,
                'song_id' => 23,
                'genre_master_id' => 2,
            ],
            [
                'id'      => 49,
                'song_id' => 23,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 50,
                'song_id' => 23,
                'genre_master_id' => 9,
            ],
            [
                'id'      => 51,
                'song_id' => 24,
                'genre_master_id' => 5,
            ],
            [
                'id'      => 52,
                'song_id' => 24,
                'genre_master_id' => 6,
            ],
            [
                'id'      => 53,
                'song_id' => 24,
                'genre_master_id' => 9,
            ],
            [
                'id'      => 54,
                'song_id' => 25,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 55,
                'song_id' => 25,
                'genre_master_id' => 9,
            ],
            [
                'id'      => 56,
                'song_id' => 26,
                'genre_master_id' => 1,
            ],
            [
                'id'      => 57,
                'song_id' => 26,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 58,
                'song_id' => 26,
                'genre_master_id' => 7,
            ],
            [
                'id'      => 60,
                'song_id' => 27,
                'genre_master_id' => 1,
            ],
            [
                'id'      => 61,
                'song_id' => 27,
                'genre_master_id' => 5,
            ],
            [
                'id'      => 62,
                'song_id' => 27,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 63,
                'song_id' => 28,
                'genre_master_id' => 4,
            ],
            [
                'id'      => 64,
                'song_id' => 28,
                'genre_master_id' => 7,
            ],

        ];

        foreach($params as $param){
            DB::table('genre_master_song')->insert($param);
        }
    }
}
