<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as FakerFactory; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create(); 
        $allCategories = Category::all();

        
    for ($i=0; $i < 25; $i++) { 

        Product::updateOrCreate([
            'name'     => $faker->word(),
            'price'    => rand(500,1000),
            'quantity' => rand(1,5),
        ])->categories()->sync($allCategories->random()->id);
    }
        
        


    }
}
