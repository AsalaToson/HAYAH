@extends('doctor.dashboard.parent')

@section('content')
<h1>Medical Report details</h1>
<div class="inner_content">
    <div class="inner_content">
        @if (isset($message))
            <div class="alert alert-danger">

                <p>{{ $message }}</p></div>
        @else

                        <a href="{{route('record.create',[$mother->id])}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>prescribe
                            </button></a>
                        </div>

                <h3>Personal Information</h3><br>


                        <label>Patient Name :</label><br>
                        <p>{{$lastRecord->mother->name}}</p>

                       <label>Patient Age :</label><br>
                       <p>{{$lastRecord->mother->age}}</p>

                        <label>Contact Details :</label><br>
                        <p>{{$lastRecord->mother->phone}}<br>{{$lastRecord->mother->email}}</p>
    <h3>Medical Report details</h3><br>

                <table>
{{--                    @if (isset($records))--}}
{{--                        @foreach ($records as $record)--}}


                    <tr>
                                <th>Blood pressure</th>
                                <td>{{$lastRecord->blood_pressure}}</td>
                            </tr>
                            <tr>
                                <th>Baby Size</th>
                                <td>{{$lastRecord->baby_size}}</td>
                            </tr>
                    <tr>
                        <th>Sugar Rate</th>
                        <td>{{$lastRecord->sugar_rate}}</td>
                    </tr>
                    <tr>
                        <th>Weight</th>
                        <td>{{$lastRecord->Weight}}</td>
                    </tr>


                            <tr>
                                <th>Medications</th>
                                <td>{{$lastRecord->medication}}</td>
                            </tr>
{{--                        @endforeach--}}
{{--                    @endif--}}
                </table>
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




    @endif
@endsection
