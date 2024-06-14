<?php

namespace Database\Seeders;

use App\Models\appointment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('appointments')->delete();

//        for ($i = 1; $i <= 10; $i++) {
//            $mother = Mother::find(random_int(1, 3));
//
//            Appointment::create([
//                'mother_id' => $mother->id,
//                'doctor_id' => random_int(1, 2),
//                'date' => now()->addDays($i)->format('Y-m-d'),
//                'time' => '10:00:00',
//                'status' => 'pending',
//                'fee' => 100.00,
//                'type' => 'Uncertain',
//                'name' => $mother->name,
//                'email' => $mother->email,
//                'phone' => $mother->phone,
//            ]);
//        }
        appointment::factory()->count(20)->create();
    }


}
