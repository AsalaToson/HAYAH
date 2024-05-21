<?php

namespace Database\Factories;

use App\Models\doctor;
use App\Models\mother;
use App\Models\record;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = record::class;

    public function definition(): array
    {
        $mother = mother::inRandomOrder()->first();
        $doctor = doctor::inRandomOrder()->first();

        return [
            'blood_pressure' => $this->faker->numberBetween(100, 160) . '/' . $this->faker->numberBetween(60, 100),
            'baby_size' => $this->faker->randomElement(['Small', 'Average', 'Large']),
            'Weight' => $this->faker->randomFloat(2, 50, 100),
            'sugar_rate' => $this->faker->numberBetween(80, 120),
            'medication' => $this->faker->sentence,
            'doctor_id' => $doctor->id,
            'mother_id' => $mother->id,
        ];
    }
}
