<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_name' => $this->faker->name,
            'employee_cpf' => $this->faker->unique()->numerify('###########'),
            'employee_email' => $this->faker->unique()->safeEmail,
            'unit_id' => \App\Models\Unit::factory(),
            'position_id' => \App\Models\Position::factory(),
        ];
    }
}
