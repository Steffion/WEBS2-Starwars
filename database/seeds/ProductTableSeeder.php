<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 100;
        $categories = \App\Category::all()->toArray();

        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500),
                'description' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                'category' => $faker->randomElement($categories)['name'],
                'thumbnail' => base64_encode(file_get_contents($faker->image()))
            ]);
        }

//        DB::table('products')->insert([
//            'name' => 'Rogue One',
//            'price' => '20',
//            'description' => 'Hier de beschrijving van de product.',
//            'category' => 'movies',
//            'thumbnail' => 'http://google.nl/'
//        ]);
//        DB::table('products')->insert([
//            'name' => 'Rogue One',
//            'price' => '20',
//            'description' => 'Hier de beschrijving van de product.',
//            'category' => 'movies',
//            'thumbnail' => 'http://google.nl/'
//        ]);
//        DB::table('products')->insert([
//            'name' => 'Rogue One',
//            'price' => '20',
//            'description' => 'Hier de beschrijving van de product.',
//            'category' => 'movies',
//            'thumbnail' => 'http://google.nl/'
//        ]);
//        DB::table('products')->insert([
//            'name' => 'Rogue One',
//            'price' => '20',
//            'description' => 'Hier de beschrijving van de product.',
//            'category' => 'movies',
//            'thumbnail' => 'http://google.nl/'
//        ]);
//        DB::table('products')->insert([
//            'name' => 'Rogue One',
//            'price' => '20',
//            'description' => 'Hier de beschrijving van de product.',
//            'category' => 'movies',
//            'thumbnail' => 'http://google.nl/'
//        ]);
//        DB::table('products')->insert([
//            'name' => 'Rogue One',
//            'price' => '20',
//            'description' => 'Hier de beschrijving van de product.',
//            'category' => 'movies',
//            'thumbnail' => 'http://google.nl/'
//        ]);
//        DB::table('products')->insert([
//            'name' => 'Rogue One',
//            'price' => '20',
//            'description' => 'Hier de beschrijving van de product.',
//            'category' => 'movies',
//            'thumbnail' => 'http://google.nl/'
//        ]);
//        DB::table('products')->insert([
//            'name' => 'Rogue One',
//            'price' => '20',
//            'description' => 'Hier de beschrijving van de product.',
//            'category' => 'movies',
//            'thumbnail' => 'http://google.nl/'
//        ]);
//        DB::table('products')->insert([
//            'name' => 'Rogue One',
//            'price' => '20',
//            'description' => 'Hier de beschrijving van de product.',
//            'category' => 'movies',
//            'thumbnail' => 'http://google.nl/'
//        ]);
    }
}
