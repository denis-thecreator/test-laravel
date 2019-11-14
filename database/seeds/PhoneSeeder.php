<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PhoneSeeder extends Seeder
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
            DB::table('phones')->insert([
                'nomor_telpon' => $faker->phoneNumber,
                'customers_id' => $i
            ]);
        }
    }
}
