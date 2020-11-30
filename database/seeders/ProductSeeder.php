<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Directory;

use App\Models\Product;
use Carbon\Factory;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++){
 
            // insert data ke table products menggunakan Faker
            DB::table('products')->insert([
              'name' => $faker->name,
              'description' => $faker->sentence(20),
              'price' => $faker->numberBetween(25,50)
             ]);
   
  }
        //
        // factory(Product::class, 100)->create();
    }
}
