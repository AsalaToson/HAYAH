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
            'id'=>'1',
            'name'=>'Children`s Development',
            'description'=>' The Child Development Program at Children`s National Hospital evaluates children from birth to 1 years of age who are at risk for,
            or are exhibiting, neurodevelopmental delays or differences. We assess conditions ranging from birth-related complications to motor or language delays,
            as well as behavioral problems or differences.'
        ]);

        section::create(
            [
                'id' => '2',
                'name' => 'Obstetrics and Gynecology',
                'description'=>' Obstetrics: Provides prenatal care, labor and delivery services, and postnatal care for expectant mothers.
                                            Gynecology: Offers a range of services including routine examinations, gynecological surgeries,
                                            and treatments for women health issues'

            ]);
        section::create([
            'id'=>'3',
            'name'=>'Psychological Services',
            'description'=>'Psychological Counseling: Provides mental health support for expectant mothers, new mothers,
                                                         and families dealing with pregnancy-related stress, postpartum depression,
                                                         or other emotional challenges.'
        ]);
        section::create([
            'id'=>'4',
            'name'=>'Nutrition Department',
            'description'=>'Nutrition is a critical part of health and development. Better nutrition is related to improved infant, child and maternal health,
            stronger immune systems, safer pregnancy and childbirth, lower risk of non-communicable diseases (such as diabetes and cardiovascular disease),
             and longevity. Healthy children learn better.'
        ]);

        section::create([
            'id'=>'5',
            'name'=>'Department of Early Childhood Education',
            'description'=>'We prepare, nurture, and support early childhood education professionals. We work with national and international early childhood educators and researchers in various professional, community and academic activities.'
        ]);
    }
}
