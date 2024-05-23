@extends('doctor.dashboard.parent')

@section('content')
    <h1>Medical Analysis Results</h1>
    <div class="inner_content">

        <hr>
        <h3>Medical Analysis Results</h3>
        <div class="profile" style="display: flex;" >
            <div class="profileData">
                <h2>{{$tests->mother->name}}</h2>
                <p><b>Date:</b>{{$tests->created_at}}</p>
                <p><b>Doctor Name:</b>{{$tests->doctor->name}}</p>
{{--                <p><b>Lab Doctor Name:</b>{{$test->lab_doctor->name}}</p>--}}
                <p><b>Analysis Name:</b>{{$tests->analysis_Name}}</p>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <img alt="" src="{{asset('storage/app/public/images/'.$tests->photo)}}">
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>

            <a href="/doctor_dashboard" class="btn btn-primary">Home</a>
        </div>

@endsection
