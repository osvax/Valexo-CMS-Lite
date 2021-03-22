<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'parent_id' => $this->faker->randomDigit,
            'url' => $this->faker->randomElement(['/main','/blog','/category','/potfolio','/contacts']),
            'order' => $this->faker->randomDigit,
            'title' => $this->faker->title,
            'keywords' => $this->faker->title,
            'description' => $this->faker->text(200),
            'show' => $this->faker->boolean,
            'meny_type' => $this->faker->randomElement(['url','page','category']),
        ];
    }
}
