<?php

namespace App\Http\Controllers;

use App\Models\Analysis_Result;
use App\Models\laboratory;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function index(){
        $analysisFromDB = Analysis_Result::paginate(10);
        return view('lab_doctor.dashboard.all_analysis_reports' , ['allAnalysis' => $analysisFromDB]);
    }



    public function show($id)
    {
        $report = Analysis_Result::find($id);
        return view('lab_doctor.dashboard.analysis_report_details' , ['analysis' => $report]);
    }



    public function destroy($analysisId){
        $report = Analysis_Result::find($analysisId);
        $report->delete();

        //Analysis_Result::where('id' , $analysisId)->delete();

        return to_route('analysis.index');
    }



    public function delete($requestId){
        $request = laboratory::find($requestId);
        $request -> delete();

        return to_route('analysis.index');
    }


                //working
    Public function downloadPdf(string $id): \Illuminate\Http\Response
    {
        $tests=Analysis_Result::find($id);
        $data['analysis_results']=$tests->analysis_results;
        $pdf=Pdf::loadview('doctor.dashboard.analysisreport.pdf',$data,compact('tests'));
//        return $pdf->stream();
        return $pdf->download('TestReport.pdf');

    }


}
