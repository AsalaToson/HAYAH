<?php

namespace Database\Seeders;

use App\Models\appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('appointments')->delete();
//        $appointments = [
//            ['name' => 'السبت'],
//            ['name' => 'الاحد'],
//            ['name' => 'الاثنين'],
//            ['name' => 'الثلاثاء'],
//            ['name' => 'الاربعاء'],
//            ['name' => 'الخميس'],
//            ['name' => 'الجمعة'],
//        ];
//        foreach ($appointments as $appointment) {
//            Appointment::create($appointment);
//        }
        for ($i = 1; $i <= 10; $i++) {
            appointment::create([
                'mother_id' => random_int(1, 3),
                'doctor_id' => random_int(1, 2),
                'date' => now()->addDays($i),
                'time' => '10:00:00',
                'status' => 'pending',
                'fee' => 100.00,
            ]);
        }
  }
}
