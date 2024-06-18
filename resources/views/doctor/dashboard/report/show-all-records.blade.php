@extends('doctor.dashboard.parent')

@section('content')
    <h1>Medical Report details</h1>
    <div class="inner_content">
        <div style="display: flex; justify-content: space-between; margin-bottom: 20px; ">
            <img src="{{asset('site/assets/images/logo2.png')}}" alt="1" style="height: 75px; width: 200px;">
            <div style="display: flex;"><img src="{{asset("../site/assets/images/care.png")}}" alt="2" style="height: 75px; width: 80px;">
                <h3 style="text-align: center;"> Mother Care <br>Hospital Mangaement System</h3></div>
        </div>

        <hr>
        <h3>Personal Information</h3>
        <div class="profile" style="display: flex;" >
            @if ($mother->image)
                <img width="400px" height="350"  src="{{ asset('Dashboard/image/mothers/'.$mother->image) }}" alt="Profile Image">
            @else
                <img src="" alt="profileimage" style="height: 200px; width: 300px">
            @endif
                <div class="dbody" style="display: flex; flex-direction: column;">
                    <table style="height: 100%;">
                        <tr>
                            <th>Patient Name</th>
                            <td>{{$mother->name}}</td>
                        </tr>
                        <tr>
                            <th>Patient Age</th>
                            <td>{{$mother->age}}</td>
                        </tr>
                        <tr>
                            <th>Patient Phone</th>
                            <td>{{$mother->phone}}</td>
                        </tr>
                        <tr>
                            <th>Contact Details</th>
                            <td>{{$mother->phone}}<br>{{$mother->email}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>



        <div class="inner_content">

            <h3>Medical Report details</h3><br>
            <p></p>

            <table class="stable">
                <tr class="str">
                    <th class="sth">Date</th>
                    <th class="sth">Doctor Name</th>
                    <th class="sth">Blood Pressure</th>
                    <th class="sth">Baby Size</th>
                    <th class="sth">Weight</th>
                    <th class="sth">Sugar Rate</th>
                    <th class="sth">Medication</th>

                </tr>

                @if ($records)
                    @foreach ($records as $record)
                <tr class="str">
                    <td class="std">{{$record->created_at}}</td>
                    <td class="std">{{$record->doctor->name}}</td>
                    <td class="std">{{$record->blood_pressure}}</td>
                    <td class="std">{{$record->baby_size}}</td>
                    <td class="std">{{$record->Weight}}</td>
                    <td class="std">{{$record->sugar_rate}}</td>
                    <td class="std">{{$record->medication}}</td>


                </tr>

                    @endforeach
                @else
                    <div class="alert alert-danger">
                        <p>{{ 'this patient has no medical records' }}</p></div>
                @endif

            </table><br>




        <a href= "{{route('record.pdf',[$mother->id])}}"  class="btn btn-primary" >Download</a>
        <a href="/doctor_dashboard" class="btn btn-primary">Home</a>
        </div>
    </div>
@endsection
