<?php

use Illuminate\Database\Seeder;
use App\Recipes;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipes::truncate();

        $faker = \Faker\Factory::create();


        for ($i = 0; $i < 30; $i++) {
            Recipes::create([
                'reply' => $faker->sentence,
                'recipe' => $faker->paragraph,
            ]);
        }
    }
}
