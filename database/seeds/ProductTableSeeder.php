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

        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500),
                'description' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                'category' => $faker->randomElement($array = array ('figures', 'clothes', 'movies', 'plushies')),
                'thumbnail' => $faker->imageUrl($width = 640, $height = 480)
            ]);
        }
    }
}
