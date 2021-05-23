<?php

use Illuminate\Database\Seeder;

class EpisodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Table

        //Reply 1988
        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'Hand in Hand',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'The One Thing you are mistaken about me',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'Not Guilty If you are rich, guilty if you are poor',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'Cannot Help-Ing',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'Ready for Winter',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'One Warm Word',
            'episode' => 'Episode 6'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'First Snow Is Coming',
            'episode' => 'Episode 7'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'To You',
            'episode' => 'Episode 8'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'Crossing the line',
            'episode' => 'Episode 9'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 1,
            'title' => 'Memory',
            'episode' => 'Episode 10'
        ]);

        //Friends
         DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The One After Joey and Rachel Kiss',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The One Where Ross Is Fine',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The one with Ross Tan',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The One With the Cake',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The One Whre Rachel Sister Babysits',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The One with Ross Grant',
            'episode' => 'Episode 6'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The One with the Home Study',
            'episode' => 'Episode 7'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The One with the Late Thanksgiving',
            'episode' => 'Episode 8'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The One with the Birth Mother',
            'episode' => 'Episode 9'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'title' => 'The One Where Chandler Gets Caught',
            'episode' => 'Episode 10'
        ]);

        //PeakyBlinders
        DB::table('episodes')->insert([
            'movie_id' => 3,
            'title' => 'Black Tuesday',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'title' => 'Black Cats',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'title' => 'Strategy',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'title' => 'The Loop',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'title' => 'The Shock',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'title' => 'Mr. Jones',
            'episode' => 'Episode 6'
        ]);

        //The Big Bang Theory
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The Conjugal Configuration',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The Wedding Gift Wormhole',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The Procreation Calculation',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The Tam Turbulence',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The Planetarium Collision',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The Imitation Perturbation',
            'episode' => 'Episode 6'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The Grant Allocation Derivation',
            'episode' => 'Episode 7'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The Consummation Deviation',
            'episode' => 'Episode 8'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The Citation Negation',
            'episode' => 'Episode 9'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'title' => 'The VCR Illumination',
            'episode' => 'Episode 10'
        ]);
        
        //Avatar The Last Airbender
        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'The Awakening',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'The Headband',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'The Painted Lady',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'Sokka Master',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'The Beach',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'The Avatar and the Fire Lord',
            'episode' => 'Episode 6'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'The Runaway',
            'episode' => 'Episode 7'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'The Puppetmaster',
            'episode' => 'Episode 8'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'The Nightmares and Daydreams',
            'episode' => 'Episode 9'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'title' => 'The Western Air Temple',
            'episode' => 'Episode 10'
        ]);

        //Avatar Legend of Korra
        DB::table('episodes')->insert([
            'movie_id' => 6,
            'title' => 'After All These Years',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 6,
            'title' => 'Korra Alone',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 6,
            'title' => 'The Coronation',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 6,
            'title' => 'The Calling',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 6,
            'title' => 'Enemy at the Gates',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 6,
            'title' => 'The Battle of Zaofu',
            'episode' => 'Episode 6'
        ]);

        //Ben 10
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'title' => 'Perfect Day',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 7,
            'title' => 'Divided We Stand',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 7,
            'title' => 'Do not Drink the Water',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 7,
            'title' => 'Big Fat Alien Wedding',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 7,
            'title' => 'Ben 4 Good Buddy',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 7,
            'title' => 'Ready to Rumble',
            'episode' => 'Episode 6'
        ]);

        //Ben 10 Alien Force
        DB::table('episodes')->insert([
            'movie_id' => 8,
            'title' => 'Inferno',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 8,
            'title' => 'Simple',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 8,
            'title' => 'Singlehanded',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 8,
            'title' => 'If All Else Fails',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 8,
            'title' => 'Ghost Town',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 8,
            'title' => 'Trade Off',
            'episode' => 'Episode 6'
        ]);

        //BreakingBad
        DB::table('episodes')->insert([
            'movie_id' => 9,
            'title' => 'Pilot',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 9,
            'title' => 'Cat is in the Bag',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 9,
            'title' => 'And the bag is in the river',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 9,
            'title' => 'Cancer Man',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 9,
            'title' => 'Gray Matter',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 9,
            'title' => 'Crazy Handful of Nothing',
            'episode' => 'Episode 6'
        ]);

        //Dark
        DB::table('episodes')->insert([
            'movie_id' => 10,
            'title' => 'Secrets',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 10,
            'title' => 'Lies',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 10,
            'title' => 'Past and Present',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 10,
            'title' => 'Double Lives',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 10,
            'title' => 'Truths',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 10,
            'title' => 'Sic Mundus Creatus Est',
            'episode' => 'Episode 6'
        ]);

        //Game of Thrones
        DB::table('episodes')->insert([
            'movie_id' => 11,
            'title' => 'Winter is Coming',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 11,
            'title' => 'The Kingsroad',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 11,
            'title' => 'Lord Snow',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 11,
            'title' => 'Cripples, Bastards, and Broken Things',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 11,
            'title' => 'The Wolf and The Lion',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 11,
            'title' => 'Golden Crown',
            'episode' => 'Episode 6'
        ]);

        //Money Heist
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'title' => 'Efectuar lo acordado',
            'episode' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'title' => 'Imprudencias letales',
            'episode' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'title' => 'Errar al disparar',
            'episode' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'title' => 'Caballo de Troya',
            'episode' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'title' => 'El dia de la marmota',
            'episode' => 'Episode 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'title' => 'La calida Guerra Fria',
            'episode' => 'Episode 6'
        ]);


    }
}
