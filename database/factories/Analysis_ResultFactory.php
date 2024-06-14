<?php

namespace Database\Factories;

use App\Models\Analysis_Result;
use App\Models\doctor;
use App\Models\lab_doctor;
use App\Models\laboratory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Analysis_Result>
 */
class Analysis_ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Analysis_Result::class;

    public function definition()
    {
        $mother = User::inRandomOrder()->first();
        $lab_doctor = lab_doctor::inRandomOrder()->first();
        $doctor = doctor::inRandomOrder()->first();
        return [
            'User_id' => $mother->id,
            'labDoctor_id' => $lab_doctor->id,
            'doctor_id' => $doctor->id,
            'analysis_Name' => $this->faker->randomElement([ 'Blood Test',
                'Urine Test',
                'Thyroid Test',
                'Pregnancy Test',
                'Cholesterol Test',
                'Glucose Test',
                'Liver Function Test',
                'Kidney Function Test',]),
            'test_date' => $this->getRandomTestDate(),
            'photo' => $this->faker->imageUrl,
        ];
    }
    private function getRandomTestDate(): Carbon
    {
        $startDate = Carbon::now()->subMonths(6)->startOfDay();
        $endDate = Carbon::now()->endOfDay();
        return Carbon::createFromTimestamp(
            mt_rand($startDate->timestamp, $endDate->timestamp)
        );
    }
}
