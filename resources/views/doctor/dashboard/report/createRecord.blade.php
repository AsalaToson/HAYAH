
@extends('doctor.dashboard.parent')

@section('content')
    <h1>Add Medical Report</h1>

    <div class="inner_content">
        <div class="col-12">
            @if (isset($message))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p></div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
        <h3>Add Medical Report</h3><br>
        <hr>
        <form id="add-patient-form" action="{{ route('records.store') }}" method="POST">
            @csrf



            {{--            <div class="form-group">--}}
            {{--                <label for="patient-name"> patient Name</label><br />--}}
            {{--                <input type="text" id="patient-name" name="" placeholder=" Patient Name"--}}
            {{--                       value="{{ $mother->name }}">--}}
            {{--            </div>--}}
            {{--            <form id="add-patient-form">--}}
            <div class="form-group">
                <label for="patient-id"> patient ID</label><br />
                <input type="text" id="patient-id" name="mother_id" placeholder=" Patient ID">
            </div>
            {{--                    <form id="add-patient-form"> --}}
            {{--                        <div class="form-group"> --}}
            {{--                            <label for="blood-type"> Age</label><br /> --}}
            {{--                            <input type="text" id="age" name="age" required placeholder=" patient Age"> --}}
            {{--                        </div> --}}
            {{--                        <form id="add-patient-form"> --}}
            {{--                            <div class="form-group"> --}}
            {{--                                <label for="blood-type"> Blood type</label><br /> --}}
            {{--                                <input type="text" id="blood-type" name="" required placeholder=" Blood-type"> --}}
            {{--                            </div> --}}
            {{--                            <form id="add-patient-form"> --}}
            {{--                                <div class="form-group"> --}}
            {{--                                    <label for="chronic"> Chronic Diseases</label><br /> --}}
            {{--                                    <input type="text" id="chronic" name="" required placeholder=" Chronic Diseases"> --}}
            {{--                                </div> --}}
            {{--                                <form id="add-patient-form"> --}}
            {{--                                    <div class="form-group"> --}}
            {{--                                        <label for="allergies"> Allergies</label><br /> --}}
            {{--                                        <input type="text" id="allergies" name="allergies" required placeholder=" Allergies"> --}}
            {{--                                    </div> --}}
            {{--                                    <form id="add-patient-form"> --}}
            {{--                                        <div class="form-group"> --}}
            {{--                                            <label for="history"> surgical History</label><br /> --}}
            {{--                                            <input type="text" id="history" name="history" required placeholder=" Surgical History"> --}}
            {{--                                        </div> --}}
            <form id="add-patient-form">
                <div class="form-group">
                    <label for="blood_pressure"> Blood pressure</label><br />
                    <input type="text" id="blood_pressure" name="blood_pressure" placeholder=" Blood Pressure" value="{{old("blood_pressure")}}">
                </div>
                <form id="add-patient-form">
                    <div class="form-group">
                        <label for="Weight"> Weight</label><br />
                        <input   type="text" id="Weight" name="Weight" value="{{old("Weight")}}" placeholder= "Patient Weight " >
                    </div>
                    <form id="add-patient-form">
                        <div class="form-group">
                            <label for="sugar"> Sugar Rate</label><br />
                            <input type="text" id="sugar" name="sugar_rate" value="{{old("sugar_rate")}}" placeholder=" Sugar Rate" >
                        </div>
                        {{--                                                    <form id="add-patient-form"> --}}
                        {{--                                                        <div class="form-group"> --}}
                        {{--                                                            <label for="pregnancy"> Pregnancy Date</label><br /> --}}
                        {{--                                                            <input type="text" id="pregnancy" name="pregnancy" required placeholder=" Pregnancy Date"> --}}
                        {{--                                                        </div> --}}
                        <form id="add-patient-form">
                            <div class="form-group">
                                <label for="size"> Baby size</label><br />
                                <input type="text" id="size" name="baby_size" value="{{old("baby_size")}}" placeholder=" Baby Size">
                            </div>
                            {{--                                                            <form id="add-patient-form"> --}}
                            {{--                                                                <div class="form-group"> --}}
                            {{--                                                                    <label for="baby-age"> Baby Age</label><br /> --}}
                            {{--                                                                    <input type="text" id="baby-age" name="baby-age" required placeholder=" Baby Age"> --}}
                            {{--                                                                </div> --}}
                            <br>
                            <form id="add-patient-form">
                                <div class="form-group">
                                    <label for="medications"> Medications</label><br />
                                    <textarea id="medications" rows="10" cols="30" name="medication" placeholder=" Medication"></textarea>
                                </div>


                                {{--                                                                    <form id="add-patient-form"> --}}
                                {{--                                                                        <div class="form-group"> --}}
                                {{--                                                                            <label for="first-name"> Report description</label><br /> --}}
                                {{--                                                                            <input type="text" id="Medical Report" name="Medical Report" required placeholder=" Medical Report Description"> --}}
                                {{--                                                                        </div> --}}

                                <br>


                                <div class="form-group">
                                    <input type="checkbox" id="checkbox1" name="confirmation" >
                                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                                </div><br>


                                <button type="submit">Add Medical Report</button>
                            </form>
                        </form>
                    </form>
                </form>
            </form>
        </form>
        {{--        @endif--}}

    </div>


@endsection
