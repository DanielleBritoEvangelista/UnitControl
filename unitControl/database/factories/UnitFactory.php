<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Unit;

class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'unit_name' => $this->faker->company,
            'corporate_reason' => $this->faker->sentence,
            'cnpj' => $this->faker->numerify('##############'),
        ];
    }
}