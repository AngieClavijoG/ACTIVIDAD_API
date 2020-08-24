<?php

use Illuminate\Database\Seeder;
use App\Profile;
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder
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
         $profile = Profile::create([
            'profile'=>$faker->jobTitle
         ]);
      }
   }
}