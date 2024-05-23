<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\laboratory;
use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index(){
        //$requestsFromDB = laboratory::all();
        //return view('lab_doctor.dashboard.all_requests' , ['requests' => $requestsFromDB]);
        $dataFromDB = customer::all();
        return view('search', ['customer' => $dataFromDB]);
    }


    function action(Request $request){
        /*
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if ($query != ''){
                $data = DB::table('laboratories')
                    ->where('description','like', '%'.$query.'%')
                    ->orWhere('id','like','%'.$query.'%')
                    ->orderBy('id','asc')
                    ->get();
            }else{
                $data = DB::table('laboratories')
                    ->orderBy('id', 'asc')
                    ->get();
            }
            $total_row = $data->count();
            if($total_row > 0){
                foreach ($data as $row){
                    $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->mother->name.'</td>
                        <td>'.$row->doctor->name.'</td>
                        <td>'.$row->description.'</td>
                    </tr>
                    ';
                }
            }else{
                $output = '
                <tr>
                    <td align="center" colspan="5"> No Data Found </td>
                </tr>
                ';
            }

            $data = array(
                'table_data' => $output,
                'total_data' => $total_row
            );

            echo json_encode($data);
            //return response()->json($data);

        }
        */

        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');

            try {
                if ($query != '') {
                    $data = DB::table('laboratories')
                        ->where('description', 'like', '%' . $query . '%')
                        ->orWhere('id', 'like', '%' . $query . '%')
                        ->orderBy('id', 'asc')
                        ->get();
                } else {
                    $data = DB::table('laboratories')
                        ->orderBy('id', 'asc')
                        ->get();
                }

                $total_row = $data->count();
                if ($total_row > 0) {
                    foreach ($data as $row) {
                        // Assuming mother and doctor are relationships
                        $motherName = isset($row->mother) ? $row->mother->name : 'N/A';
                        $doctorName = isset($row->doctor) ? $row->doctor->name : 'N/A';
                        $output .= '
                    <tr>
                        <td>' . $row->id . '</td>
                        <td>' . $motherName . '</td>
                        <td>' . $doctorName . '</td>
                        <td>' . $row->description . '</td>
                    </tr>
                    ';
                    }
                } else {
                    $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
                }

                $data = array(
                    'table_data' => $output,
                    'total_data' => $total_row
                );

                return response()->json($data);
            } catch (\Exception $e) {
                // Log the error message
                Log::error('Search action failed: ' . $e->getMessage());

                return response()->json([
                    'error' => 'An error occurred while processing your request.'
                ], 500);
            }
        }

        return response()->json(['error' => 'Invalid request.'], 400);

    }



    function search(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('tbl_customer')
                    ->where('CustomerName', 'like', '%'.$query.'%')
                    ->orWhere('Address', 'like', '%'.$query.'%')
                    ->orWhere('City', 'like', '%'.$query.'%')
                    ->orWhere('PostalCode', 'like', '%'.$query.'%')
                    ->orWhere('Country', 'like', '%'.$query.'%')
                    ->orderBy('CustomerID', 'desc')
                    ->get();

            }
            else
            {
                $data = DB::table('tbl_customer')
                    ->orderBy('CustomerID', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
        <tr>
         <td>'.$row->CustomerName.'</td>
         <td>'.$row->Address.'</td>
         <td>'.$row->City.'</td>
         <td>'.$row->PostalCode.'</td>
         <td>'.$row->Country.'</td>
        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }

}
