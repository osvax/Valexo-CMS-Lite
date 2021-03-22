<?php

namespace Database\Factories;

use App\Models\Callback;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CallbackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Callback::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'status' => $this->faker->boolean,
            'ip' => $this->faker->ipv4,
            'order_page' => $this->faker->url,
            'text' => $this->faker->text(),
        ];
    }
}
