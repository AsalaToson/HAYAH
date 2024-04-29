<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function index(){
        return view('lab_doctor.dashboard.add_analysis_report');
    }


    public function show(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('lab_doctor.dashboard.all_analysis_reports');
    }


    public function show2(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('lab_doctor.dashboard.analysis_report_details');
    }


}
