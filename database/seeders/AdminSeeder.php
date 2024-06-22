<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->delete();
        admin::create([
            'name' => 'asala',
            'email' => 'khaterasala21@gmail.com',
            'password' => bcrypt('123456789'),
            'age' => '21',
            'experience' => '3years',
            'phone' => '01017553080',

        ]);

        admin::create([
            'name' => 'ahmed',
            'email' => 'ahmed@gmail.com',
            'password' => bcrypt('123456789'),
            'age' => '30',
            'experience' => '4years',
            'phone' => '01017553080',

        ]);

        admin::create([
            'name' => 'mohamed',
            'email' => 'mohamed@gmail.com',
            'password' => bcrypt('123456789'),
            'age' => '33',
            'experience' => '3years',
            'phone' => '01017551234',

        ]);
    }
}
