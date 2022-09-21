<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\License>
 */
class LicenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $licenses_types = ['New','ReNew','Upgradation'];
        return [
            //
            'name' => fake()->name(),
            'father_name' => fake()->name(),
            'license_no' => fake()->unique()->numberBetween(9999999999,999999999999),
            'cnic' => fake()->unique()->numberBetween(1000000000000,9999999999999),
            'address' => fake()->address(),
            'license_type' => fake()->randomElement($licenses_types),
            'issue_date' => fake()->date(),
            'exp_date' => fake()->date(),
            'other_info' => fake()->paragraph(),

        ];
    }
}
