@extends('lab_doctor.dashboard.parent')

@section('content')

    <h1>Add Analysis Report</h1>
    <div class="inner_content">
      <h3>Add Analysis Report</h3><br>
      <hr>

      <form id="add-report-form">
        <div class="grid-container">
            <div class="form-group">
                <label for="patient-name">Patient Name</label><br/>
                <input type="text" id="patient-name" required placeholder="Patient Name">
            </div>

            <div class="form-group">
                <label for="patient-id">Patient ID</label><br/>
                <input type="text" id="patient-id" required placeholder="Patient ID">
            </div>

            <div class="form-group">
              <label for="doctor-Name">Doctor Name</label><br/>
              <input type="text" id="doctor-Name" required placeholder="Doctor-Name">
          </div>
            <div class="form-group">
              <label for="Report-name">Report Name</label><br/>
              <input type="text" id="Report-name" required placeholder="Report Name">
          </div>
        <div class="form-group">
          <label for="Report"></label><br/>
          <input type="file" id="report" required placeholder="choose file">
      </div>
    </div>
    </form>

    <button type="submit">Add Analysis Report</button>




  </div>
@endsection












