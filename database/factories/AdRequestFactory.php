<?php

namespace Database\Factories;

use App\AdPlatform;
use App\AdRequestStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdRequest>
 */
class AdRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'platform' => fake()->randomElement(AdPlatform::cases()),
            'status' => fake()->randomElement(AdRequestStatus::cases()),
            'post' => fake()->url()
        ];
    }
}
