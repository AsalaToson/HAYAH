<?php

namespace Database\Seeders;

use App\Models\mother;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mothers')->delete();
        mother::create([
            'name' => 'asala',
            'email' => 'khaterasala21@gmail.com',
            'password' => bcrypt('123456789'),
            'age' => '21',
            'phone' => '01017553080',
            'gender' => 'femele',
            'details' => '.',
            'address' => '.',
        ]);
    }
}
