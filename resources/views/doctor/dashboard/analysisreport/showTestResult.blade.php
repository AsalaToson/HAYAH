@extends('doctor.dashboard.parent')

@section('content')
    <h1>Medical Analysis Results</h1>
    <div class="inner_content">

        <hr>
        <h3>Medical Analysis Results</h3>
        <div class="profile" style="display: flex;" >
            <div class="profileData">
                <h2>{{$mother->name}}</h2>
                @if ($tests)
                    @foreach ($tests as $test)
                <p><b>Date:</b>{{$test->created_at}}</p>
                <p><b>Doctor Name:</b>{{$test->doctor->name}}</p>
{{--                <p><b>Lab Doctor Name:</b>{{$test->lab_doctor->name}}</p>--}}
                <p><b>Analysis Name:</b>{{$test->analysis_Name}}</p>
                        <img alt="" src="{{asset('app/public/'.$test->photo)}}">

                    @endforeach
                @else
                    <div class="alert alert-danger">
                        <p>{{ 'this patient has no medical records' }}</p></div>
                @endif
            </div>


        </div>
{{--        <div class="inner_content">--}}

{{--            <h3>Medical Analysis Results</h3><br>--}}
{{--            <p></p>--}}

{{--            <table class="stable">--}}
{{--                <tr class="str">--}}
{{--                    <th class="sth">Date</th>--}}
{{--                    <th class="sth">Doctor Name</th>--}}
{{--                    <th class="sth">Lab Doctor Name</th>--}}
{{--                    <th class="sth">Analysis Name</th>--}}

{{--                </tr>--}}

{{--                @if ($tests)--}}
{{--                    @foreach ($tests as $test)--}}
{{--                        <tr class="str">--}}
{{--                            <td class="std">{{$test->created_at}}</td>--}}
{{--                            <td class="std">{{$test->doctor->name}}</td>--}}
{{--                            <td class="std">{{$test->lab_doctor->name}}</td>--}}
{{--                            <td class="std">{{$test->analysis_Name}}</td>--}}



{{--                        </tr>--}}

{{--                    @endforeach--}}
{{--                @else--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <p>{{ 'this patient has no medical records' }}</p></div>--}}
{{--                @endif--}}

{{--            </table><br>--}}




{{--            <a href= "{{route('record.pdf',[$mother->id])}}"  class="btn btn-primary" >Download</a>--}}
            <a href="/doctor_dashboard" class="btn btn-primary">Home</a>
        </div>

@endsection
