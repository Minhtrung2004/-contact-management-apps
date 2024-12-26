<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
*/
class DepartmentFactory extends Factory
{
    use HasFactory;
    /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'code' => $this->faker->unique()->randomNumber(5),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->companyEmail,
            'website' => $this->faker->url,
            'address' => $this->faker->address,
        ];
    }
}
