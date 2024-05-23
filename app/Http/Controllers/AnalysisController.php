<?php

namespace App\Http\Controllers;

use App\Models\Analysis_Result;
use App\Models\laboratory;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function index(){
        $analysisFromDB = Analysis_Result::all();
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


            // not completed
    public function search(){
        $search_text = $_GET['query'];
        $analysis = Analysis_Result::where('title','LIKE','%'.$search_text.'%')->get();
        return view('');
    }



                // not working
    Public function downloadPdf(string $id): \Illuminate\Http\Response
    {
        $analysis = Analysis_Result::findorfail($id);
        $data['analysis'] = $analysis;
        $pdf=Pdf::loadview('doctor.dashboard.report.pdf',$data);
//        return $pdf->stream();
        return $pdf->download('reports.pdf');

    }


}
