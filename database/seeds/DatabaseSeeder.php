<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
       // factory(\App\Address::class,50)->create();
       // factory(\App\User::class,100)->create();


        factory(\App\Meal::class,100)->create();

    }
}
