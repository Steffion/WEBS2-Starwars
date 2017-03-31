<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => bcrypt('secret'),
            ]);
        }

        DB::table('users')->insert([
            'name' => 'Stef de Goey',
            'email' => 'stefdegoey@icloud.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Merel Kokkeler',
            'email' => 'kokkelermerel@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
