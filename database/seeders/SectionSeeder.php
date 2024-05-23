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
        section::create(
            [
              'id' => '1',
              'name' => 'Obstetrics and Gynecology',
              'description'=>' Obstetrics: Provides prenatal care, labor and delivery services, and postnatal care for expectant mothers.
                                            Gynecology: Offers a range of services including routine examinations, gynecological surgeries,
                                            and treatments for women health issues'

            ]);
        section::create([
            'id'=>'2',
            'name'=>'Psychological Services',
                'description'=>'Psychological Counseling: Provides mental health support for expectant mothers, new mothers,
                                                         and families dealing with pregnancy-related stress, postpartum depression,
                                                         or other emotional challenges.'
            ]);
    }
}
