<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $suffixName = ['t-shirt', 'hat', 'socks', 'jacket', 'pants', 'shoes'];

        $name = $this->faker->company . ' ' . Arr::random($suffixName);
        return [
            
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $this->faker->numberBetween(10000,10000),
            'description' => $this->faker->realText(360)
        ];
    }
}
