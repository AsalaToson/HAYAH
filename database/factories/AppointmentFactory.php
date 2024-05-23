<?php

namespace Database\Factories;

use App\Models\appointment;
use App\Models\doctor;
use App\Models\mother;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = appointment::class;

    public function definition()
    {
        $mother = mother::inRandomOrder()->first();
        $doctor = doctor::inRandomOrder()->first();

        return [
            'mother_id' => $mother->id,
            'doctor_id' => $doctor->id,
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'status' => 'pending',
            'fee' => $this->faker->randomFloat(2, 0, 100),
//            'type' => $this->faker->randomElement(['Uncertain', 'Certain', 'Deadline expired']),
//            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
        ];

    }
}
