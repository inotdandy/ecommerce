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
        Product::factory()->create(30);
        Category::factory()->create(10);

        $categories = Category::all();

        Product::all()->each(function($product) use ($categories) {

            $product->categories()->attach($categories->random(2)->pluck('id')->get());
        });
    }
}
