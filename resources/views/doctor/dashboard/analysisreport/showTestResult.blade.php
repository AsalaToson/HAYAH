@extends('doctor.dashboard.parent')

@section('content')

    <div class="short" >
        <h3 class="dash">Analysis Report  Details</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p class="rout"> / Analysis Report/ All Reports / Report Details </p></div>
    </div>

    <div class="inner_content">
        <h3>Report Details</h3>
        <br>
        <hr>
        <div class="dbody" style="display: flex; flex-direction: column;">
            <table style="height: 100%;">
                <tr>
                    <th>Patient Name</th>
                    <td>{{$tests->user->name}}</td>
                </tr>
                <tr>
                    <th>Test Date</th>
                    <td>{{$tests->created_at}}</td>
                </tr>
                <tr>
                    <th>Doctor Name</th>
                    <td>{{$tests->doctor->name}}</td>
                </tr>
                <tr>
                    <th>Analysis Name</th>
                    <td>{{$tests->analysis_Name}}
                    </td>
                </tr>
            </table>
            <br>
          <h3>Test Result</h3>
            <!-- Add the image here -->
            <img src="{{ asset($tests->photo) }}" alt="Report Image" class="img-fluid mt-3">

        </div>
        <a href="{{route('test.pdf',[$tests->user->id])}}">
            <button type="button" class="btn btn-close" id="dbutton">
                <i class="fa fa-download" aria-hidden="true"></i>
                PDF
            </button>
        </a>
        <a href="/doctor_dashboard"  class="btn btn-primary"  id="dbutton">Home</a>

    </div>

{{--    </div>--}}

{{--    <h1>Medical Analysis Results</h1>--}}
{{--    <div class="inner_content">--}}

{{--        <hr>--}}
{{--        <h3>Medical Analysis Results</h3>--}}
{{--        <div class="profile" style="display: flex;" >--}}
{{--            <div class="profileData">--}}
{{--                <h2>{{$tests->user->name}}</h2>--}}
{{--                <p><b>Date:</b>{{$tests->created_at}}</p>--}}
{{--                <p><b>Doctor Name:</b>{{$tests->doctor->name}}</p>--}}
{{--                <p><b>Lab Doctor Name:</b>{{$test->lab_doctor->name}}</p>--}}
{{--                <p><b>Analysis Name:</b>{{$tests->analysis_Name}}</p>--}}
{{--                    <h1>Anlaysis Report</h1>--}}

{{--                        <!-- Add the image here -->--}}
{{--                        <img src="{{ asset($tests->photo) }}" alt="Report Image" style="padding-top: 10px;--}}
{{--        width: 50%;--}}
{{--        " class="img-fluid mt-3">--}}

{{--                    </div>--}}
{{--                    <a href="#">--}}
{{--                        <button type="button" class="btn btn-close" id="dbutton">--}}
{{--                            <i class="fa fa-download" aria-hidden="true"></i>--}}
{{--                            PDF--}}
{{--                        </button>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}


{{--    </div>--}}




@endsection
