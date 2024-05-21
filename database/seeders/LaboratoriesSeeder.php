<?php

namespace Database\Seeders;

use App\Models\laboratory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaboratoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        laboratory::factory()->count(20)->create();
    }
}
