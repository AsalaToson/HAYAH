@extends('doctor.dashboard.parent')

@section('content')
<h1>Medical Report details</h1>
    <div class="inner_content">



                <h3>Personal Information</h3><br>
        <div class="dbody" style="display: flex; flex-direction: column;">
            <table style="width: 100%;">
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

    <h3>Medical Report details</h3><br>

                <table>
                    @if($lastRecord)


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
                    @else
                        <div class="alert alert-danger">
                            <p>{{ 'this patient has no medical records' }}</p></div>
                    @endif
                </table>

        @if($lastTest)
                                <h3>Test Results</h3>
<br>
            <p><b>Test Name:</b>{{$lastTest->analysis_Name}}</p>
            <!-- Add the image here -->
            <img src="{{ asset($lastTest->photo) }}" alt="Report Image" class="img-fluid mt-3">


        @else
        <div class="alert alert-danger">
            <p>{{ 'this patient has no test results' }}</p></div>

@endif
        <div>
            <a href="{{route('record.create',[$mother->id])}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                    <i class="fa fa-pencil" aria-hidden="true"></i>prescribe
                </button></a>
        </div>


@endsection
