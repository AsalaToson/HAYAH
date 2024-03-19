<?php

namespace Database\Seeders;

use App\Models\doctor;
use App\Models\section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sections')->delete();
        section::create([
            'id' => '1',
        'name' => 'قسم النسا',

        ]);
    }
}
