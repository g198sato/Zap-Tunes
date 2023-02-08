<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
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
                'id'        => 1,
                'song_name' => '新しい旅路',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 66,
            ],
            [
                'id'        => 2,
                'song_name' => '細胞の復讐',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 0,
            ],
            [
                'id'        => 3,
                'song_name' => '並走ハピネス',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 48,
            ],
            [
                'id'        => 4,
                'song_name' => '喧嘩神輿',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 60,
            ],
            [
                'id'        => 5,
                'song_name' => '孤独のハイウェイ',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 59,
            ],
            [
                'id'        => 6,
                'song_name' => '遊星の開拓者',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 38,
            ],
            [
                'id'        => 7,
                'song_name' => 'メタバースの原罪',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 56,
            ],
            [
                'id'        => 8,
                'song_name' => 'スターライトパフェ',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 31,
            ],
            [
                'id'        => 9,
                'song_name' => '孤独の鳥居',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 27,
            ],
            [
                'id'        => 10,
                'song_name' => 'デビルハザード',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 72,
            ],
            [
                'id'        => 11,
                'song_name' => '眠れる世界樹',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 55,
            ],
            [
                'id'        => 12,
                'song_name' => 'キッズキッチンカー',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 51,
            ],
            [
                'id'        => 13,
                'song_name' => 'あなたのために',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 0,
            ],
            [
                'id'        => 14,
                'song_name' => '周遊エディフィス',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 48,
            ],
            [
                'id'        => 15,
                'song_name' => 'スノージングル',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 20,
            ],
            [
                'id'        => 16,
                'song_name' => '観劇のお誘い',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 23,
            ],
            [
                'id'        => 17,
                'song_name' => '不気味な街角',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 0,
            ],
            [
                'id'        => 18,
                'song_name' => '悠久庭園',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 0,
            ],
            [
                'id'        => 19,
                'song_name' => 'ギャングスター',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 16,
            ],
            [
                'id'        => 20,
                'song_name' => '小鹿のステップ',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 46,
            ],
            [
                'id'        => 21,
                'song_name' => 'J4U - Liquid Bed 11PM',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 13,
            ],
            [
                'id'        => 22,
                'song_name' => '毎日がサスペンス',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 0,
            ],
            [
                'id'        => 23,
                'song_name' => 'きみはやりとげた',
                'user_id'   => 2,
                'plays'     => 0,
                'highlight' => 65,
            ],
            [
                'id'        => 24,
                'song_name' => 'いざ尋常に',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 30,
            ],
            [
                'id'        => 25,
                'song_name' => '奪還作戦',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 32,
            ],
            [
                'id'        => 26,
                'song_name' => 'グルーヴコースター',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 45,
            ],
            [
                'id'        => 27,
                'song_name' => 'ドラゴンスレイヤー',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 22,
            ],
            [
                'id'        => 28,
                'song_name' => 'Hello World',
                'user_id'   => 1,
                'plays'     => 0,
                'highlight' => 45,
            ],
        ];

        foreach($params as $param){
            DB::table('songs')->insert($param);
        }
    }
}
