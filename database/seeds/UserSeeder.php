<?php

use Faker\Generator as Faker;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->email();

            //stringa per password fake
            $string = '12345678';
            //che poi viene criptata da Hash::make
            $newUser->password = Hash::make($string);

            $newUser->save();
        }
    }
}
