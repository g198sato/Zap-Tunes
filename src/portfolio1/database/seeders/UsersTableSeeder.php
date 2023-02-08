<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
                'id'       => 1,
                'name'     => 'BGMer (アカウント1⃣)',
                'email'    => 'bgmer1@mail',
                'password' => '$2y$10$w1vEn0h9DYRMHwGvKrusXu75Q/1NyPcexKt6msGFNHoMHHKpeTTGy',
                'link'     => 'http://bgmer.net',
            ],
            [
                'id'       => 2,
                'name'     => 'BGMer (アカウント2⃣)',
                'email'    => 'bgmer2@mail',
                'password' => '$2y$10$w1vEn0h9DYRMHwGvKrusXu75Q/1NyPcexKt6msGFNHoMHHKpeTTGy',
                'link'     => 'https://www.youtube.com/@BGMer_net/featured',
            ],
            [
                'id'       => 3,
                'name'     => 'ゲストユーザ',
                'email'    => 'guest@mail',
                'password' => '$2y$10$lADKj47Si8LPQsPFPiN8UuVSLgFH5fKo5l/faTk2nYK/dOKeHvl3S',
                'link'     => NULL,
            ],
        ];

        foreach($params as $param){
            DB::table('users')->insert($param);
        }
    }
}
