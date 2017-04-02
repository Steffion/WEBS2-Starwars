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
//
//
// MOVIES
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


// PLUSHIES
        DB::table('products')->insert([
            'name' => 'Rey',
            'price' => '10',
            'description' => ' 10 inch ',
            'category' => 'plushies',
            'thumbnail' => base64_encode(file_get_contents('http://www.theforcegifts.com/img/prods/B017Y8RD0K.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'Chewie',
            'price' => '12',
            'description' => ' 10 inch ',
            'category' => 'plushies',
            'thumbnail' => base64_encode(file_get_contents('https://images-na.ssl-images-amazon.com/images/I/71QeOg9t2xL._SL1500_.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'Bundle',
            'price' => '40',
            'description' => '10 inch ',
            'category' => 'plushies',
            'thumbnail' => base64_encode(file_get_contents('https://media1.popsugar-assets.com/files/thumbor/VwNTGn8hdlOiIfmerEb2izRrbZw/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/upl1/1/15111/01_2008/e21c45bd815a0a5f_star-wars-stuffed-animals.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'Yoda',
            'price' => '11',
            'description' => '10 inch ',
            'category' => 'plushies',
            'thumbnail' => base64_encode(file_get_contents('http://www.hallmark.com/dw/image/v2/AALB_PRD/on/demandware.static/-/Sites-hallmark-master/default/dw6ae386ce/images/finished-goods/itty-bitty-yoda-stuffed-animal-root-1kid3238_1470_1.jpg?sfrm=jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'R2D2',
            'price' => '10',
            'description' => ' 10 inch ',
            'category' => 'plushies',
            'thumbnail' => base64_encode(file_get_contents('http://www.entertainmentearth.com/images/AUTOIMAGES/UT00239Jlg.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'BB8',
            'price' => '20',
            'description' => ' 10 inch ',
            'category' => 'plushies',
            'thumbnail' => base64_encode(file_get_contents('http://www.hallmark.com/dw/image/v2/AALB_PRD/on/demandware.static/-/Sites-hallmark-master/default/dw8d301383/images/finished-goods/itty-bittys-star-wars-bb8-stuffed-animal-root-1kdd1084_1470_1.jpg?sfrm=jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'Darth Vader',
            'price' => '8',
            'description' => '10 inch',
            'category' => 'plushies',
            'thumbnail' => base64_encode(file_get_contents('http://76.my/Malaysia/changi-airport-special-edition-star-wars-plush-toy-darth-vader-j-depot-1602-11-j_depot@11.jpg' ))
         ]);
        DB::table('products')->insert([
            'name' => 'Bundle',
            'price' => '100',
            'description' => '10 inch each',
            'category' => 'plushies',
            'thumbnail' => base64_encode(file_get_contents('https://www.silverkris.com/sites/default/files/2015/1511-starwars-635.jpg' ))
        ]);

        // FIGURES

        DB::table('products')->insert([
            'name' => 'Storm Trooper',
            'price' => '20',
            'description' => '12 inch',
            'category' => 'figures',
            'thumbnail' => base64_encode(file_get_contents('https://dyn0.media.forbiddenplanet.com/products/112907a.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'Chewbacca',
            'price' => '20',
            'description' => '12 inch',
            'category' => 'figures',
            'thumbnail' => base64_encode(file_get_contents('http://images.fun.com/products/34910/1-1/star-wars-episode-7-chewbacca-black-series-action-figure.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'Bundle',
            'price' => '50',
            'description' => '12 inch',
            'category' => 'figures',
            'thumbnail' => base64_encode(file_get_contents('http://images.brickset.com/news/swconstraction2.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'Darth Vader',
            'price' => '20',
            'description' => '11 inch',
            'category' => 'figures',
            'thumbnail' => base64_encode(file_get_contents('https://images-na.ssl-images-amazon.com/images/I/91cs1G8oLPL._SL1500_.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'Han Solo',
            'price' => '20',
            'description' => '11 inch',
            'category' => 'figures',
            'thumbnail' => base64_encode(file_get_contents('https://i5.walmartimages.ca/images/Enlarge/445/6_2/999999-630509394456_2.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'C3PO',
            'price' => '20',
            'description' => '11 inch',
            'category' => 'figures',
            'thumbnail' => base64_encode(file_get_contents('http://www.entertainmentearth.com/images/AUTOIMAGES/BA77974lg.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'R2D2',
            'price' => '20',
            'description' => '11 inch',
            'category' => 'figures',
            'thumbnail' => base64_encode(file_get_contents('https://www.hasbro.com/common/productimages/en_GB/4da6b67c50569047f51a5fe1c1604c0f/4DA7A7F150569047F5A773DB9F4502ED.jpg' ))
        ]);
        DB::table('products')->insert([
            'name' => 'Jabba The Hut',
            'price' => '30',
            'description' => '13 inch',
            'category' => 'figures',
            'thumbnail' => base64_encode(file_get_contents('http://tvandfilmtoys.com/wp-content/uploads/2009/11/slaveleia_top.jpg' ))
        ]);


    }

}
