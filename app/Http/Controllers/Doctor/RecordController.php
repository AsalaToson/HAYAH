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

        $records = record::all();
        return view('doctor.dashboard.report.index',compact('records'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        $mother = mother::find($id);

        return view('doctor.dashboard.report.create', compact('mother'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecordRequest $request)
    {
        //

        $input=$request->all();

        $input['doctor_id'] = Auth::guard('doctor')->id();
        record::create($input);
        return redirect('/appointments')->with('success', 'Data inserted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $records=record::findorfail($id);
//        dd($records);
        if (!$records) {
            $message = "No record found for this mother.";
            return view('doctor.dashboard.report.show', compact('message'));
        }

        return view('doctor.dashboard.report.show',compact('records'));
    }
    Public function downloadPdf(string $id): \Illuminate\Http\Response
    {
        $records=record::findorfail($id);
        $data['records']=$records;
        $pdf=Pdf::loadview('doctor.dashboard.report.pdf',$data);
//        return $pdf->stream();
        return $pdf->download('report.pdf');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
