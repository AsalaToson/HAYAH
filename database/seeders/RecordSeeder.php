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
        record::factory()->count(60)->create();
    }
}
