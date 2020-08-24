<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      $faker=Faker::create();

      for($i=0;$i<=49;$i++){
         $employee = Employee::create([
            'names'=>$faker->name,
            'lastnames'=>$faker->lastname,
            'email'=>$faker->email,
            'phone'=>$faker->e164PhoneNumber,
            'address'=>$faker->address,
            'availability'=>$faker->boolean,
            'work_experience_id'=>$faker->biasedNumberBetween($min = 1, $max = 50),
            'profile_id'=>$faker->biasedNumberBetween($min = 1, $max = 50)
         ]);
      }
   }
}