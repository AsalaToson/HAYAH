<?php

namespace App\Http\Controllers\Mother;

use App\Http\Controllers\Controller;
use App\Models\record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


//use App\Http\Controllers\Controller;
//use App\Models\record;
//use Barryvdh\DomPDF\Facade\Pdf;
//use Illuminate\Http\Request;

use App\Models\mother;

class MotherRecordController extends Controller
{
    public function show(string $id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother=mother::findorfail($id);
        $records=$mother->records;
        return view('mother.dashboard.report.show',compact('records','mother'));
    }
    public function downloadPdf(string $id): \Illuminate\Http\Response
    {
        $records = record::findorfail($id);
        $data['records'] = $records;
        $pdf = Pdf::loadview('mother.dashboard.report.pdf', $data);
        return $pdf->download('report.pdf');

    }

}


