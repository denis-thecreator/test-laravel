<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerRewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 50; $i++) { 
            DB::table('customer_reward')->insert([
                'customer_id' => $faker->numberBetween($min=1, $max=50),
                'reward_id' => $faker->numberBetween($min=1, $max=20)
            ]);
        }
    }
}
