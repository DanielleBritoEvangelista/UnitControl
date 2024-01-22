<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EmployeePosition;

class EmployeePositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position_id' => $this->faker->numberBetween(1, 10),
            'employee_id' => $this->faker->unique()->numberBetween(1, 100),
            'performance_note' => $this->faker->randomElement(['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
        ];
    }
}
