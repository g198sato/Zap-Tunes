<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GenreTypeMastersTableSeeder extends Seeder
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
                'id'         => 1,
                'genre_type' => '音楽ジャンル',
            ],
            [
                'id'         => 2,
                'genre_type' => '楽器',
            ],
            [
                'id'         => 3,
                'genre_type' =>'雰囲気',
            ]
        ];

        foreach($params as $param){
            DB::table('genre_type_masters')->insert($param);
        }
    }
}
