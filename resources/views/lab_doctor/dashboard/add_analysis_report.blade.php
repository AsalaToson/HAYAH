@extends('lab_doctor.dashboard.parent')

@section('content')

    <h1>Add Analysis Report</h1>
    <div class="inner_content">
      <h3>Add Analysis Report</h3><br>
      <hr>

      <form id="add-report-form" method="POST" action="{{route('analysis.store')}}" enctype="multipart/form-data">
          @csrf
        <div class="grid-container">
            <div class="form-group">
                <input type="hidden" name="mother_id" id="patient-id" value="{{$request->mother_id}}" required >
            </div>

            <div class="form-group">
                <input type="hidden" name="doctor_id" id="doctor-id" value="{{$request->doctor_id}}" required >
            </div>

            <div class="form-group">
              <input type="hidden" name="lab_id" id="lab_doctor-id" value="{{$request->labDoctor_id}}" required >
            </div>

            <div class="form-group">
                <input type="hidden" name="analysis_name" id="analysis-name" value="{{$request->description}}" required >
            </div>

        <div class="form-group">
          <label for="Report"> Report :</label><br/>
          <input type="file" name="photo" id="photo" required placeholder="choose file">
      </div>

    </div>

          <button type="submit">Add Analysis Report</button>

    </form>

  </div>

@endsection





