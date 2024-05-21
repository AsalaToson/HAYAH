<?php

namespace Database\Seeders;

use App\Models\Analysis_Result;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnalysisResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Analysis_Result::factory()->count(30)->create();

    }
}
