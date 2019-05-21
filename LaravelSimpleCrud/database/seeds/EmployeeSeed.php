<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for($i=0;$i<10000;$i++){
            DB::table('employees')->insert([
                'name'=>$faker->name,
                'last_name'=>$faker->lastName,
                'date_of_birth'=>$faker->date(),
                'salary'=>$faker->numberBetween(5000,20000),
                'if_employed'=>$faker->numberBetween(0,1),
                'date_of_employ'=>$faker->date(),
                'country'=>$faker->country
            ]);
        }
    }
}
