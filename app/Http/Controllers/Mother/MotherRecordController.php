<?php

namespace App\Http\Controllers\Mother;

use App\Http\Controllers\Controller;
use App\Models\record;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
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
        $mother=User::findorfail($id);
        $records=$mother->records;
        return view('mother.dashboard.report.show',compact('records','mother'));
    }
    public function Pdf(string $id): \Illuminate\Http\Response
    {
        $mother = User::findOrFail($id);
        $data['records'] = $mother->records;
        $data['mother'] = $mother;

        $pdf = PDF::loadView('doctor.dashboard.report.pdf', $data)
            ->setOptions([
                'dpi' => 150,
                'marginBottom' => 10,
                'marginLeft' => 10,
                'marginRight' => 10,
                'marginTop' => 10,
                'autoColumnWidth' => true,
//                'isHtml5ParserEnabled' => true,
//                'isRemoteEnabled' => true,
            ]);

        return $pdf->download('reports.pdf');
    }


}


