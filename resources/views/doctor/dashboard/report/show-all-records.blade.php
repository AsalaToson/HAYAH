@extends('doctor.dashboard.parent')

@section('content')
    <h1>Medical Report details</h1>
    <div class="inner_content">

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




        {{--                <h2>Test Results</h2>--}}
        {{--                <table>--}}
        {{--                    <tr>--}}
        {{--                        <th>Lab Test Results</th>--}}
        {{--                        <td><a href="#" class="lab-test-results">Click here to access</a></li></td>--}}
        {{--                    </tr>--}}
        {{--                    <tr>--}}
        {{--                        <th>Radiology Reports</th>--}}
        {{--                        <td><a href="#" class="lab-test-results">Click here to access</a></li></td>--}}
        {{--                    </tr>--}}

        {{--                </table>--}}


        {{--                --}}

        {{--                <table>--}}
        {{--                    <h2>Prescription</h2>--}}
        {{--                    <tr>--}}
        {{--                        <th>Previous Illnesses or Surgeries</th>--}}
        {{--                        <td>None</td>--}}
        {{--                    </tr>--}}
        {{--                    <tr>--}}
        {{--                        <th>Allergies</th>--}}
        {{--                        <td>Pollen, peanuts</td>--}}
        {{--                    </tr>--}}
        {{--                    <tr>--}}
        {{--                        <th>Medications</th>--}}
        {{--                        <td>Aspirin (2 tablets every 4 hours)</td>--}}
        {{--                    </tr>--}}
        {{--                </table>--}}

{{--        <table>--}}
{{--            <h2>Billing Information</h2>--}}
{{--            <tr>--}}
{{--                <th>Medical Bills</th>--}}
{{--                <td>100 LE</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th>Insurance Coverage</th>--}}
{{--                <td>60%</td>--}}
{{--            </tr>--}}

{{--        </table>--}}
        <a href= "{{route('record.pdf',[$mother->id])}}"  class="btn btn-primary" >Download</a>
        <a href="/doctor_dashboard" class="btn btn-primary">Home</a>
        </div>

@endsection
