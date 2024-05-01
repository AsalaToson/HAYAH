<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreRecordRequest;
use App\Models\mother;
use App\Models\record;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $mothers = mother::all();
        return view('doctor.dashboard.report.index',compact('mothers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $mother = mother::find($id);
        return view('doctor.dashboard.report.create', compact('mother'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecordRequest $request)
    {
        $input = $request->all();
        $input['doctor_id'] = Auth::guard('doctor')->id();
        record::create($input);
        return redirect('/appointments')->with('success', 'Data inserted successfully!');
    }


    public function show(string $id)
    {
        $mother=mother::findorfail($id);
        $records=$mother->records;
//       dd($records);
        return view('doctor.dashboard.report.show-all-records',compact('records','mother'));
    }
    Public function showLast($id)
    {
        $mother=mother::find($id);
        $lastRecord=$mother->records()->latest()->first();
        if(!$lastRecord){
            $message="No records found for this mother.";
            return view('doctor.dashboard.report.create', compact('message','mother'));
        }
        return view('doctor.dashboard.report.show',compact('lastRecord','mother'));

    }
    Public function downloadPdf(string $id): \Illuminate\Http\Response
    {
        $records=record::findorfail($id);
        $data['records']=$records;
        $pdf=Pdf::loadview('doctor.dashboard.report.pdf',$data);
//        return $pdf->stream();
        return $pdf->download('reports.pdf');

    }


    public function createRecord()
    {
        return view('doctor.dashboard.report.createRecord');

    }


    function search(Request $request){

        $mothers=mother::where('name','like','%'.$request->input('query').'%')->get();
        return view('doctor.dashboard.report.search',compact("mothers"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
