<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreRecordRequest;
use App\Models\User;
use App\Models\record;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $mothers = User::all();
        return view('doctor.dashboard.report.index',compact('mothers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother = User::find($id);
        return view('doctor.dashboard.report.create', compact('mother'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecordRequest $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $input = $request->all();
        $input['doctor_id'] = Auth::guard('doctor')->id();
        record::create($input);
        return redirect('/appointments')->with('success', 'Data inserted successfully!');
    }


    public function show(string $id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother=User::findorfail($id);
        $records=$mother->records;
//       dd($records);
        return view('doctor.dashboard.report.show-all-records',compact('records','mother'));
    }
    Public function showLast($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother = User::where('id', $id)->firstOrFail();
        $lastRecord=$mother->records()->latest()->first();
        $lastTest=$mother->analysis_results()->latest()->first();
        return view('doctor.dashboard.report.show',compact('lastRecord',"lastTest",'mother'));

    }
    public function downloadPdf(string $id): \Illuminate\Http\Response
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

    public function createRecord(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mothers=User::all();
        return view('doctor.dashboard.report.createRecord',compact('mothers'));

    }


    function search(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

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
