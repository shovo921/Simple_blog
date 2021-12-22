<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
               Post::create([
                'Title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'Meta_Title' => $faker->name,
                'Content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
