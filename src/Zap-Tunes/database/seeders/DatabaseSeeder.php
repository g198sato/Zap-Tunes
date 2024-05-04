<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(GenreMasterSongTableSeeder::class);
        $this->call(GenreTypeMastersTableSeeder::class);
        $this->call(GenreMastersTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
    }
}
