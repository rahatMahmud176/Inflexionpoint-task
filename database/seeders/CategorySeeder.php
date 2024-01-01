<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create(); 
        
        for ($i=0; $i < 5; $i++) { 
            Category::updateOrCreate([
                'name'  => $faker->word(),
            ]);
        }
        
    }
}
