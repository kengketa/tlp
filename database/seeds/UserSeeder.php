<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin',
            'email'     =>  'admin@admin.com',
            'password'  => '$2y$10$cR/45hrg6ZVUHdNSrLTbdOBIpBEoaSl2bTU6FisVGGkOHBBjZ12Jy' //password
        ]);
        // $faker = Faker::create();
        // dd($faker->name);
        // // $user = User::factory()->make([
        // //     'name'  => $faker->name,
        // //     'email' => $faker->email,

        // // ]);
    }
}
