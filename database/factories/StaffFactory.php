<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $departments = Department::pluck('id')->toArray(); // Lấy danh sách ID của các phòng ban
        return [
            'name' => $this->faker->name,
            'title' => $this->faker->jobTitle,
            'academic_rank' => $this->faker->randomElement(['GS', 'PGS', 'GV']),
            'degree' => $this->faker->randomElement(['ThS', 'TS', 'CN']),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'department_id' => $this->faker->randomElement($departments) // Chọn ngẫu nhiên một ID phòng ban
        ];
    }
}
