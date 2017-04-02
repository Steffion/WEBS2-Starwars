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
//        $limit = 100;
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

//        for ($i = 0; $i < $limit; $i++) {
//            DB::table('products')->insert([
//                'name' => $faker->word,
//                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500),
//                'description' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
//                'category' =>'movies',
//                'thumbnail' => base64_encode(file_get_contents( link ))
//            ]);
//        }
        DB::table('products')->insert([
            'name' => 'Rogue One',
            'price' => '20',
            'description' => ' In a time of conflict, a group of unlikely heroes band together on a mission to steal the plans to the Death Star, the Empire’s ultimate weapon of destruction.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('http://www.indiewire.com/wp-content/uploads/2016/07/rogue-one-jyn-ersa-geared-up.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'The Last Jedi',
            'price' => '20',
            'description' => 'Pre order!',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('http://pictures.dealer.com/s/subaruofkeenesne/0959/af3e7d14a3bd9c0abd60bd74b743c43ex.jpg'))
        ]);
        DB::table('products')->insert([
            'name' => 'The Force Awakens',
            'price' => '20',
            'description' => 'Thirty years after the defeat of the Empire, Luke Skywalker has vanished and a new threat has risen: The First Order, led by the mysterious Supreme Leader Snoke and his dark side enforcer, Kylo Ren.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('http://gogreenbk.org/wp-content/uploads/2016/07/Star-Wars-The-Force-Awakens-home-video-header.jpg'))
        ]);

        DB::table('products')->insert([
            'name' => 'Return Of The Jedi',
            'price' => '15',
            'description' => 'In the epic conclusion of the saga, the Empire prepares to crush the Rebellion with a more powerful Death Star while the Rebel fleet mounts a massive attack on the space station.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://i.ytimg.com/vi/MYD_xxY5wEI/hqdefault.jpg'))
        ]);
        DB::table('products')->insert([
            'name' => 'The empire strikes back',
            'price' => '15',
            'description' => 'After the destruction of the Death Star, Imperial forces continue to pursue the Rebels.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://i.ytimg.com/vi/xESiohGGP7g/hqdefault.jpg'))
        ]);
        DB::table('products')->insert([
            'name' => 'A New Hope',
            'price' => '15',
            'description' => 'Nineteen years after the formation of the Empire, Luke Skywalker is thrust into the struggle of the Rebel Alliance when he meets Obi-Wan Kenobi, who has lived for years in seclusion on the desert planet of Tatooine. ',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://i.ytimg.com/vi/aRvrSCB8s1s/maxresdefault.jpg'))
        ]);
        DB::table('products')->insert([
            'name' => 'Revenge Of The Sith',
            'price' => '15',
            'description' => 'Years after the onset of the Clone Wars, the noble Jedi Knights lead a massive clone army into a galaxy-wide battle against the Separatists.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('http://the-indie-pendent.com/wp-content/uploads/2015/08/Star-Wars-Episode-III-Revenge-of-the-Sith.jpg'))
        ]);
        DB::table('products')->insert([
            'name' => 'Attack Of The Clones',
            'price' => '15',
            'description' => 'Ten years after the invasion of Naboo, the galaxy is on the brink of civil war.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('http://thescruffynerfherder.com/wp-content/uploads/2015/12/Clones.jpg'))
        ]);
        DB::table('products')->insert([
            'name' => 'The Phantom Menace',
            'price' => '15',
            'description' => 'Stranded on the desert planet Tatooine after rescuing young Queen Amidala from the impending invasion of Naboo.',
            'category' => 'movies',
            'thumbnail' => base64_encode(file_get_contents('https://i.ytimg.com/vi/Xv5OAeerXzs/hqdefault.jpg'))
        ]);
    }
}
