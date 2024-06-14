<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreRecordRequest;
use App\Models\User;
use App\Models\record;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $mothers = User::all();
        return view('doctor.dashboard.report.index',compact('mothers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $mother = User::find($id);
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
        $mother=User::findorfail($id);
        $records=$mother->records;
//       dd($records);
        return view('doctor.dashboard.report.show-all-records',compact('records','mother'));
    }
    Public function showLast($id)
    {
        $mother=User::find($id);
        $lastRecord=$mother->records()->latest()->first();
        $lastTest=$mother->analysis_results()->latest()->first();
        return view('doctor.dashboard.report.show',compact('lastRecord',"lastTest",'mother'));

    }
    Public function downloadPdf(string $id): \Illuminate\Http\Response
    {
        $mother=User::findorfail($id);
        $data['records']=$mother->records;
        $pdf=Pdf::loadview('doctor.dashboard.report.pdf',$data,compact('mother'));
//        return $pdf->stream();
        return $pdf->download('reports.pdf');

    }


    public function createRecord()
    {
        return view('doctor.dashboard.report.createRecord');

    }


    function search(Request $request){

        $mothers=User::where('name','like','%'.$request->input('query').'%')->get();
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
