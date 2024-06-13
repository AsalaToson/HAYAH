<?php

namespace Database\Seeders;

use App\Models\lab_doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('lab_doctors')->delete();
        //$section = section::all();
        lab_doctor::create([
            'name' => 'Youssef Khaled',
            'email' => 'youssef@gmail.com',
            'password' => bcrypt('123456789'),
            'age' => '21',
            'phone' => '01017553080',
            'gender' => 'male',
            'address' => '.',
            'experience' => '2 years',
        ]);
    }
}
