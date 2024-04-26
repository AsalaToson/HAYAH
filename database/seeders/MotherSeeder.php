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
            'phone' =>'0101755603',
            'details' => '.',
            'address' => '.', ]);
        mother::create([
                'name' => 'Mother2',
                'email' => 'mother2@example.com',
                'password' => bcrypt('password2'),
                'age' => 35,
                'details' => 'Details for Mother 2',
                'phone' => '01166804539',
                'address' => 'Address for Mother 2',
            ]);

        mother::create([
            'name' => 'Mother 3',
            'email' => 'mother3@example.com',
            'password' => bcrypt('password3'),
            'age' => 28,
            'details' => 'Details for Mother 3',
            'phone' => '555555555',
            'address' => 'Address for Mother 3',
        ]);

    }
}
