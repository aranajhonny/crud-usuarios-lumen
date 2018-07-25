<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$password = Hash::make("admin");
    	$faker = Faker::create();
        foreach (range(1, 10) as $index) {
           DB::table('users')->insert([
            'username' => $faker->userName,
            'first_name' =>  $faker->firstName,
            'second_name' => $faker->lastName,
            'address' => $faker->city,
            'phone' =>  $faker->phoneNumber,
            'email' => str_random(8).'@gmail.com',
            'password' => $password,
        ]);
    	} 
    	DB::table('users')->insert([
            'username' => "admin",
            'first_name' => $faker->firstName,
            'second_name' => $faker->lastName,
            'address' => $faker->city,
            'phone' =>  $faker->phoneNumber,
            'email' => str_random(8).'@gmail.com',
            'password' => $password,
        ]);
	}
}
