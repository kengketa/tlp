<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $a=0;
        while ($a < 100) {
                Customer::create([
                    'name'   =>  $faker->name,
                    'email'  =>  $faker->email,
                    'tel'    =>  $faker->phoneNumber,
                    'address'=>  $faker->address,
                    'comment'=>  $faker->sentence()

                ]);
                $a++;
        }
    }
}
