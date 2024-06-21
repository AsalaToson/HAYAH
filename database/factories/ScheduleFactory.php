<?php

namespace Database\Factories;

use App\Models\schedule;
use App\Models\doctor;
use App\Models\section;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = schedule::class;

    public function definition()
    {
        $mother = User::inRandomOrder()->first();
        $doctor = doctor::inRandomOrder()->first();
        $section=section::inRandomOrder()->first();
        return [
            'user_id' => $mother->id,
            'doctor_id' => $doctor->id,
                'section_id' => $section->id,
                'name' => $mother->name,
                'email' => $mother->email,
                'phone' => $mother->phone,
                'type' => $this->faker->randomElement(['Uncertain','Certain','Finished']),
                'appointment' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
                'time' => $this->faker->time(),
                'notes' => $this->faker->text,
        ];

    }
}
