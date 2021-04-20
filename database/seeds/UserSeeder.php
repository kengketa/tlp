<?php

use Illuminate\Database\Seeder;
use App\User;

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
    }
}
