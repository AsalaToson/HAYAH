<?php

namespace Database\Factories;

use App\Models\doctor;
use App\Models\lab_doctor;
use App\Models\laboratory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\laboratory>
 */
class laboratoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = laboratory::class;

    public function definition()
    {
        $mother = User::inRandomOrder()->first();
        $doctor = doctor::inRandomOrder()->first();
        $lab_doctor = lab_doctor::inRandomOrder()->first();

        return [
            'description' => $this->generateDescription(),
            'user_id' => $mother->id,
            'doctor_id' => $doctor->id,
            'labDoctor_id' => $lab_doctor->id,
        ];
    }

    private function generateDescription(): string
    {
        $testNames = [
            'Blood Test',
            'Urine Test',
            'Thyroid Test',
            'Pregnancy Test',
            'Cholesterol Test',
            'Glucose Test',
            'Liver Function Test',
            'Kidney Function Test',
        ];

        $description = '';
        for ($i = 0; $i < random_int(1, 3); $i++) {
            $description .= $testNames[array_rand($testNames)] . "\n";
        }

        return $description;
    }
}
