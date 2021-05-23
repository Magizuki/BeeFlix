<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Table
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Reply 1988',
            'photo' => '/Assets/Drama/Reply1988_Cover.jpeg',
            'description' => 'Follows the lives of 5 families living on the same street in a neighbourhood called Ssangmundong in Seoul. It takes a nostalgic look back at the year 1988.',
            'rating' => '/Assets/Five_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Friends',
            'photo' => '/Assets/Drama/Friends_Cover.jpg',
            'description' => 'Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.',
            'rating' => '/Assets/Five_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Peaky Blinders',
            'photo' => '/Assets/Drama/PeakyBlinders_Cover.jpg',
            'description' => 'A gangster family epic set in 1900s England, centering on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby.',
            'rating' => '/Assets/Five_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'The Big Bang Theory',
            'photo' => '/Assets/Drama/TheBigBangTheory_Cover.jpg',
            'description' => 'A woman who moves into an apartment across the hall from two brilliant but socially awkward physicists shows them how little they know about life outside of the laboratory.',
            'rating' => '/Assets/Five_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Avatar The Last AirBender',
            'photo' => '/Assets/Kids/AvatarTheLastAirBender_Cover.jpg',
            'description' => 'In a war-torn world of elemental magic, a young boy reawakens to undertake a dangerous mystic quest to fulfill his destiny as the Avatar, and bring peace to the world.',
            'rating' => '/Assets/Five_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Avatar The Legend of Korra',
            'photo' => '/Assets/Kids/AvatarTheLegendOfKorra_Cover.jpg',
            'description' => 'Avatar Korra fights to keep Republic City safe from the evil forces of both the physical and spiritual worlds.',
            'rating' => '/Assets/Four_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Ben 10',
            'photo' => '/Assets/Kids/Ben10_Cover.jpg',
            'description' => 'The story of Ben Tennyson, a typical kid who becomes very atypical after he discovers the Omnitrix, a mysterious alien device with the power to transform the wearer into ten different alien species.',
            'rating' => '/Assets/Four_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Ben 10 Alien Force',
            'photo' => '/Assets/Kids/Ben10AlienForce_Cover.jpg',
            'description' => 'Fifteen-year-old Ben Tennyson must utilize the Omnitrix yet again in order to locate his missing Grandpa Max, accompanied by his cousin Gwen and former enemy Kevin 11.',
            'rating' => '/Assets/Four_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Breaking Bad',
            'photo' => '/Assets/TV Show/BreakingBad_Cover.jpg',
            'description' => 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family future',
            'rating' => '/Assets/Five_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Dark',
            'photo' => '/Assets/TV Show/Dark_Cover.jpg',
            'description' => 'A family saga with a supernatural twist, set in a German town, where the disappearance of two young children exposes the relationships among four families.',
            'rating' => '/Assets/Five_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Game of Thrones',
            'photo' => '/Assets/TV Show/GameofThrones_Cover.jpg',
            'description' => 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.',
            'rating' => '/Assets/Five_Star.png' 
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Money Heist',
            'photo' => '/Assets/TV Show/MoneyHeist_Cover.jpg',
            'description' => 'An unusual group of robbers attempt to carry out the most perfect robbery in Spanish history - stealing 2.4 billion euros from the Royal Mint of Spain.',
            'rating' => '/Assets/Five_Star.png' 
        ]);

    }
}
