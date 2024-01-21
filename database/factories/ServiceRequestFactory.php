<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceRequest>
 */
class ServiceRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ref'           => $this->faker->sentence(),
            'customer_id'   => 1,
            'division_id'   => 1,
            'date'          => $this->faker->date('Y-m-d'),
            'description'   => $this->faker->text(),
            'notes'         => $this->faker->text(),
            'address'       => $this->faker->address(),
        ];
    }
}
