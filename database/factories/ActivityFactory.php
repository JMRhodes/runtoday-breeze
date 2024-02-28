<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ActivityFactory extends Factory {
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'user_id'  => 1,
            'activity' => 'run',
            'distance' => $this->faker->randomFloat( 2, 1, 6 ),
            'duration' => '20:00',
            'date'     => $this->faker->dateTimeBetween('-6 week')
        ];
    }
}
