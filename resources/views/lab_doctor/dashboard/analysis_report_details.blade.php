@extends('lab_doctor.dashboard.parent')

@section('content')


    <div class="short" >
        <h3 class="dash">Analysis Report Details</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p class="rout"> / Analysis Report / All Reports / Report Details </p></div>
    </div>
    <!-- <div class="inner_content">
      <h3>Report Details</h3><br>
      <hr>
      <div class="dbody" style="display: flex;" >
        <table style="height: 100%;">

          <tr>
              <th>Patient ID</th>
              <td>45</td>
          </tr>
          <tr>
              <th>patient Name</th>
              <td>sara</td>
          </tr>
          <tr>
            <th>Doctor Name</th>
            <td>sara</td>
        </tr>
          <tr>
              <th>Report Name</th>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Quae ea maxime adipisci dignissimos tempora
                </td>
          </tr>

      </table>

      </div>
      <a href="#"> <button type="button" class="btn btn-close"  id="dbutton" >
        <i class="fa fa-download" aria-hidden="true"></i>
        PDF
    </button></a>
  </button></a>


    </div> -->
    <div class="inner_content">
      <h3>Report Details</h3>
      <br>
      <hr>
      <div class="dbody" style="display: flex; flex-direction: column;">
          <table style="height: 100%;">

              <tr>
                  <th>Patient ID</th>
                  <td>{{$analysis -> id}}</td>
              </tr>
              <tr>
                  <th>Patient Name</th>
                  <td>{{$analysis -> User->name}}</td>
              </tr>
              <tr>
                  <th>Doctor Name</th>
                  <td>{{$analysis -> doctor->name}}</td>
              </tr>
              <tr>
                  <th>Report Name</th>
                  <td>{{$analysis -> analysis_Name}}</td>
              </tr>
          </table>

          <!-- Add the image here -->
          <img src="{{asset($analysis->photo)}}" alt="Report Image" class="img-fluid mt-3">

      </div>
      <a href="{{route('LTest.pdf',[$analysis -> id])}}">
          <button type="button" class="btn btn-close" id="dbutton">
              <i class="fa fa-download" aria-hidden="true"></i>
              PDF
          </button>
      </a>
  </div>


@endsection











