<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 50 ; $i++) { 
            //insert data ke table employees menggunakan Faker
            DB::table('employees')->insert([
                'employees_name' => $faker->name,
                'employees_jabatan' => $faker->jobTitle,
                'employees_umur' => $faker->numberBetween(25,40),
                'employees_alamat' => $faker->address
            ]);
        }
    }
}
