<?php

use Carbon\Carbon;
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
        DB::table('users')->insert([
            'name' => 'Stef de Goey',
            'email' => 'stefdegoey@icloud.com',
            'password' => bcrypt('secret'),
            'isadmin' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Merel Kokkeler',
            'email' => 'kokkelermerel@gmail.com',
            'password' => bcrypt('secret'),
            'isadmin' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Not An Admin',
            'email' => 'fake-admin@avans.nl',
            'password' => bcrypt('secret'),
            'isadmin' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $faker = Faker\Factory::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => bcrypt('secret'),
                'isadmin' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
