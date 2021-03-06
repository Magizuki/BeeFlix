<?php

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
        // Run seeder
        $this->call(GenreTableSeeder::class);
        $this->call(MovieTableSeeder::class);
        $this->call(EpisodeTableSeeder::class);

    }
}
