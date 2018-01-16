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
                'vegan'=>$faker->word,
                'cashrout'=>$faker->word,
                'difficulty'=>$faker->word,
                'holidays'=>$faker->word,
                'time'=>$faker->word,
                'ingredients'=>$faker->sentence,
                'recipe' => $faker->paragraph,
                'country'=>$faker->word,
                'reply'=>$faker->sentence,
                'picture'=>$faker->sentence,
            ]);
        }
    }
}
