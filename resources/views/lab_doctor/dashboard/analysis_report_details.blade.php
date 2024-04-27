@extends('lab_doctor.dashboard.parent')

@section('content')

      <h1>Analysis Report  Details</h1>
      <div class="inner_content">
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



      </div>
@endsection
