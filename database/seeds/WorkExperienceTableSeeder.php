<?php

use Illuminate\Database\Seeder;
use App\WorkExperience;
use Faker\Factory as Faker;

class WorkExperienceTableSeeder extends Seeder
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
         $WExperience = WorkExperience::create([
            'company'=>$faker->company,
            'activities'=>$faker->catchPhrase,
            'contract_starting_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
            'contract_end_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
            'profile_id'=>$faker->biasedNumberBetween($min = 1, $max = 50)
         ]);
      }  
   }
}