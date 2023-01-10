<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;
     
     
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_id' => random_int(1, 3),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'postal' => $this->faker->postcode,
            'address' => $this->faker->address,
            'birthdate' => $this->faker->dateTimeBetween('-90 years', '-18 years'),
            'phone' => $this->faker->phoneNumber,
            'kramer_flag' => 0,
        ];
    }
}