<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = Faker\Factory::create();
//
//        $limit = 20;
//        $categories = \App\Category::all()->toArray();
//
//        for ($i = 0; $i < $limit; $i++) {
//            DB::table('products')->insert([
//                'name' => $faker->word,
//                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500),
//                'description' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
//                'category' => $faker->randomElement($categories)['name'],
//                'thumbnail' => base64_encode(file_get_contents($faker->image()))
//            ]);
//        }

        DB::table('products')->insert([
            'name' => 'Rogue One',
            'price' => '20',
            'description' => ' In a time of conflict, a group of unlikely heroes band together on a mission to steal the plans to the Death Star, the Empire’s ultimate weapon of destruction.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('www.indiewire.com/wp-content/uploads/2016/07/rogue-one-jyn-ersa-geared-up.jpg'))
        ]);

        DB::table('products')->insert([
            'name' => 'The Last Jedi',
            'price' => '20',
            'description' => 'Not available',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('http://hd-wall-papers.com/single/1504248-image-not-available.html'))
        ]);

        DB::table('products')->insert([
            'name' => 'The Force Awakens',
            'price' => '20',
            'description' => 'Thirty years after the defeat of the Empire, Luke Skywalker has vanished and a new threat has risen: The First Order, led by the mysterious Supreme Leader Snoke and his dark side enforcer, Kylo Ren.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://lumiere-a.akamaihd.net/v1/images/avco_payoff_1-sht_v7_lg_32e68793.jpeg'))
        ]);

        DB::table('products')->insert([
            'name' => 'Return Of The Jedi',
            'price' => '15',
            'description' => 'In the epic conclusion of the saga, the Empire prepares to crush the Rebellion with a more powerful Death Star while the Rebel fleet mounts a massive attack on the space station.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://lumiere-a.akamaihd.net/v1/images/Star-Wars-Return-Jedi-VI-Poster_a10501d2.jpeg'))
        ]);

        DB::table('products')->insert([
            'name' => 'The empire strikes back',
            'price' => '15',
            'description' => 'After the destruction of the Death Star, Imperial forces continue to pursue the Rebels.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://lumiere-a.akamaihd.net/v1/images/Star-Wars-Empire-Strikes-Back-V-Poster_878f7fce.jpeg'))
        ]);

        DB::table('products')->insert([
            'name' => 'A New Hope',
            'price' => '15',
            'description' => 'Nineteen years after the formation of the Empire, Luke Skywalker is thrust into the struggle of the Rebel Alliance when he meets Obi-Wan Kenobi, who has lived for years in seclusion on the desert planet of Tatooine. ',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://lumiere-a.akamaihd.net/v1/images/Star-Wars-New-Hope-IV-Poster_c217085b.jpeg'))
        ]);

        DB::table('products')->insert([
            'name' => 'Revenge Of The Sith',
            'price' => '15',
            'description' => 'Years after the onset of the Clone Wars, the noble Jedi Knights lead a massive clone army into a galaxy-wide battle against the Separatists.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https%3A//lumiere-a.akamaihd.net/v1/images/Star-Wars-Revenge-Sith-III-Poster_646108ce.jpeg'))
        ]);

        DB::table('products')->insert([
            'name' => 'Attack Of The Clones',
            'price' => '15',
            'description' => 'Ten years after the invasion of Naboo, the galaxy is on the brink of civil war.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://lumiere-a.akamaihd.net/v1/images/Star-Wars-Attack-Clones-II-Poster_53baa2e7.jpeg'))
        ]);

        DB::table('products')->insert([
            'name' => 'The Phantom Menace',
            'price' => '15',
            'description' => 'Stranded on the desert planet Tatooine after rescuing young Queen Amidala from the impending invasion of Naboo.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://lumiere-a.akamaihd.net/v1/images/Star-Wars-Phantom-Menace-I-Poster_3c1ff9eb.jpeg'))
        ]);
    }
}
