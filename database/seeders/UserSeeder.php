<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        User::create([
            'name' => 'Norhan',
            'email' => 'nourhanibrahimkook7@gmail.com',
            'password' => bcrypt('123456789'),
            'age' => '21',
            'phone' =>'0101755603',
            'details' => '.',
            'address' => '.', ]);
        User::create([
                'name' => 'Mother2',
                'email' => 'mother2@example.com',
                'password' => bcrypt('password2'),
                'age' => 35,
                'details' => 'Details for Mother 2',
                'phone' => '01166804539',
                'address' => 'Address for Mother 2',
            ]);

        User::create([
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
