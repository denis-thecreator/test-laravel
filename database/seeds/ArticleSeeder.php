<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 10; $i++) { 
            DB::table('articles')->insert([
                'judul' => $faker->realText($maxNbChars=20, $indexSize=2)
            ]);
        }
    }
}
