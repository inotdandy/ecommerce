<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(20)->create();
        Category::factory()->count(5)->create();

        $categories = Category::all();

        Product::all()->each(function($product) use ($categories) {

            $product->categories()->attach($categories->random(2)->pluck('id')->toArray());
        });
    }
}
