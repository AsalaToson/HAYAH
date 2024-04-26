<?php

namespace Database\Seeders;

use App\Models\mother;
use App\Models\record;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('records')->delete();
        record::create([
        'mother_id' => 1,
                'bloodPressure' => 120,
                'weight' => 65.5,
                'babySize' => 'Normal',

                'sugarRate' => 80,
                'medication' => 'None',
//                'confirmation' => 1,
                'doctor_id' => 1,]);
    }
}
