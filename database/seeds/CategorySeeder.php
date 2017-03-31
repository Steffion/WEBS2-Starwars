<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'figures'
        ]);

        DB::table('categories')->insert([
            'name' => 'clothes'
        ]);

        DB::table('categories')->insert([
            'name' => 'movies'
        ]);

        DB::table('categories')->insert([
            'name' => 'plushies'
        ]);
    }
}
