<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GenreMastersTableSeeder extends Seeder
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
                'genre_name' => 'ロック',
                'genre_type_master_id' => 1,
            ],
            [
                'id'      => 2,
                'genre_name' => 'ピアノ',
                'genre_type_master_id' => 2,
            ],
            [
                'id'      => 3,
                'genre_name' => 'ジャズ',
                'genre_type_master_id' => 1,
            ],
            [
                'id'      => 4,
                'genre_name' => '楽しい',
                'genre_type_master_id' => 3,
            ],
            [
                'id'      => 5,
                'genre_name' => '緊張',
                'genre_type_master_id' => 3,
            ],
            [
                'id'      => 6,
                'genre_name' => '和風',
                'genre_type_master_id' => 1,
            ],
            [
                'id'      => 7,
                'genre_name' => 'エレクトロ',
                'genre_type_master_id' => 1,
            ],
            [
                'id'      => 8,
                'genre_name' => 'チル',
                'genre_type_master_id' => 3,
            ],
            [
                'id'      => 9,
                'genre_name' => 'オーケストラ',
                'genre_type_master_id' => 2,
            ],
        ];

        foreach($params as $param){
            DB::table('genre_masters')->insert($param);
        }
    }
}
