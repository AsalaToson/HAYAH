@extends('lab_doctor.dashboard.parent')

@section('content')
    <div class="short" >
        <h3 class="dash">All Requests</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p class="rout"> / Analysis Reports / All Analysis Report </p></div>
    </div>
      <div class="inner_content">
        <h3>Reports  list </h3>
          <br>
          <h3 align="center"> {{App\Models\Analysis_Result::count()}} Analysis Report </h3>
          <br>
        <hr>
        <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="form-groups">
                      <label for="show-entries">Show Entries</label>
                      <select class="form-control" id="show-entries">
                          <option value="1" >10</option>
                          <option value="2">20</option>
                          <option value="3">30</option>
                          <option value="4">40</option>
                          <option value="5">50</option>
                      </select>
                  </div>
              </div>

                      <form action="#" class="col-md-4">
                          <div class="form-groups">
                              <label for="search" id="Slabel">Search </label>
                              <input type="text" name="query" class="form-control" id="search">
                          </div>
                      </form>
          </div>
      </div>
      <div class="container2">

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Report Name</th>
                    <th>Analysis Date</th>
                    <th>operations</th>
                </tr>
            </thead>
            <tbody>

            @php
                $number = 1;
            @endphp

            @foreach($allAnalysis as $analysis)
                <tr>
                    <td>{{$number++}}</td>
                    <td>{{$analysis ->User->name}}</td>
                    <td>{{$analysis ->doctor->name}}</td>
                    <td>{{$analysis -> analysis_Name}}</td>
                    <td>{{$analysis -> created_at -> format('Y-m-d')}}</td>
                    @php
                      //  <td> <img alt="" src="{{asset($analysis->photo)}}"></td>  to show the analysis report
                    @endphp


                    <td>
                        <div class="container3" style="display: flex; align-items: center">

                            <a href="{{route('details.show' , $analysis->id)}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                                    <i class="fas far fa-eye" aria-hidden="true"></i> view
                                </button></a>

                      <!-- Delete Button with Delete Icon -->

                            <form style="display: inline;" method="POST" action="{{route('analysis.destroy', $analysis->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="Submit"  id="donebutton" style="   margin: 7px;

                                    width: 100px;
                                    padding: 8px;"  >
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>

          <!-- Pagination Links -->
          <div class="pagination">
              {{ $allAnalysis->links() }}
          </div>


    </div>
@endsection
