<?php

namespace Database\Seeders;

use App\Models\appointment;
use App\Models\doctor;
use App\Models\section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('doctors')->delete();
        //$section = section::all();
        doctor::create([
            'name' => 'asala toson',
            'email' => 'khaterasala21@gmail.com',
            'password' => bcrypt('123456789'),
            'age' => '21',
            'experience' => '3years',
            'phone' => '01017553080',
            'section_id' => '1',
            'price' => '50',
            'gender' => 'femele',
            'appointment' => 'الاحد',
            'details' => '.',
            'address' => '.',
        ]);
        //foreach ($doctors as $doctor) {
          //  doctor::create($doctor);
        //}
        //$doctors=doctor ::all();
        $appointments = appointment::all();


        doctor::all()->each(function ($doctor) use ($appointments) {
           $doctor->doctorappointments()->attach($appointments);
           // $doctor->doctorappointments()->attach($doctor->appointment);

       });


    }
}
