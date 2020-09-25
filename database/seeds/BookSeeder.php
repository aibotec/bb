<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create('id_ID');
 
         for($x = 1; $x <= 20; $x++){
  
    
             DB::table('book')->insert([
                'judul' => $faker->book,
                'penulis' => $faker->name,
                'penerbit' => $faker->company,
             ]);
  
         }
    }
}
