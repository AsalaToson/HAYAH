@extends('lab_doctor.dashboard.parent')

@section('content')

    <div class="short" >
        <h3 class="dash">Add Analysis Report</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p class="rout"> / Analysis Report / Add Report</p></div>
    </div>

    <div class="inner_content">
        <h3>Add Analysis Report</h3><br>
        <hr>

        <!-- <form id="add-report-form">
          <div class="grid-container">
              <div class="form-group">
                  <input type="hidden" id="patient-name" required placeholder="Patient Name">
              </div>

              <div class="form-group">
                  <input type="hidden" id="patient-id" required placeholder="Patient ID">
              </div>

              <div class="form-group">
                <input type="hidden" id="doctor-Name" required placeholder="Doctor-Name">
            </div>

          <div class="form-group">
            <label for="Report"> Report :</label><br/>
            <input type="file" id="report" required placeholder="choose file">
        </div>
      </div>
      </form>

      <button type="submit">Add Analysis Report</button> -->

        <div class="container">
            <div class="form-container">
                <h5>File Upload</h5>
                <form id="add-report-form"  action="{{route('analysis.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="user_id" id="mother-id" class="form-control" required value="{{$request->user_id}}">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="user_name" id="mother-name" class="form-control" value="{{$request->User->name}}" required>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="doctor_id" id="doctor-id" value="{{$request->doctor_id}}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="lab_id" id="lab_doctor-id" value="{{$request->labDoctor_id}}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="analysis_name" id="analysis-name" value="{{$request->description}}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="report">Report:</label><br/>
                        <div class="upload-box" onclick="document.getElementById('report').click();">
                            <i class="fa-solid fa-cloud-upload-alt"></i>
                            <p>Drag files to upload or click to browse</p>
                            <input type="file" name="photo" id="report" class="form-control-file" style="display:none;" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Add Analysis Report</button>
                </form>
            </div>

        </div>

    </div>

@endsection
