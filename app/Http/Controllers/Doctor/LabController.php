<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
//use App\Models\laboratorie;
use App\Models\Analysis_Result;
use App\Models\laboratory;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LabController extends Controller
{
    //

    public function store(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validate([
            'description' => 'required|string',
            'doctor_id' => 'required|exists:doctors,id',
            'user_id' => 'required|exists:users,id',
        ]);
        laboratory::create([
                'description'=>$request->input('description'),
                'doctor_id'=>$request->input('doctor_id'),
                'user_id'=>$request->input('user_id'),]
        );

        return redirect('/appointments')->with('success', 'Data inserted successfully!');
    }
    public function index()
    {
        $requests = Analysis_Result::all();
        return view('doctor.dashboard.analysisreport.view',compact('requests'));

    }
    public function month()
    {
        $currentMonth = date('m');
        $requests = Analysis_Result::where('test_date', 'like', '%' . $currentMonth . '%')->get();
        return view('doctor.dashboard.analysisreport.view', compact('requests'));
    }

    public function today()
    {
        $currentDate = date('Y-m-d');
        $requests = Analysis_Result::where('test_date', $currentDate)->get();
        return view('doctor.dashboard.analysisreport.view', compact('requests'));
    }
    public function show(string $id)
    {
        $tests=Analysis_Result::find($id);
        return view('doctor.dashboard.analysisreport.showTestResult',compact('tests'));
    }
    public function editTest()
    {
        return view('doctor.dashboard.analysisreport.updateRequest');

    }
    function search(Request $request){

        $requests=Analysis_Result::where('user_id','like','%'.$request->input('query').'%')->get();
        return view('doctor.dashboard.analysisreport.search',compact("requests"));
    }
    Public function downloadPdf(string $id): \Illuminate\Http\Response
    {
        $tests=Analysis_Result::find($id);
        $data['analysis_results']=$tests->analysis_results;
        $pdf=Pdf::loadview('doctor.dashboard.analysisreport.pdf',$data,compact('tests'));
        return $pdf->stream();
//        return $pdf->download('TestReport.pdf');

    }
}
