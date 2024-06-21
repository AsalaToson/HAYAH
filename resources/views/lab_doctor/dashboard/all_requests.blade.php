@extends('lab_doctor.dashboard.parent')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            @if(session('name'))
                -> {{ session('name') }}
            @endif
        </div>
    @endif
    <div class="short" >
        <h3 class="dash">All Requests</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p class="rout"> / Analysis Requests / All Requests </p></div>
        </div>

      <div class="inner_content">
        <h3>Requests list </h3>
          <br>
          <h3 align="center"> {{App\Models\laboratory::count()}} Analysis Requests </h3>
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
            <table class="table">
                <thead>
                    <tr>

                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>Doctor Name</th>
                        <th>Analysis Name</th>
                        <th>Time of request</th>
                        <th>operations</th>
                    </tr>
                </thead>
                <tbody>

                @php
                    $number = 1;
                @endphp

                @foreach($requests as $request)

                    <tr>
                        <td>{{$number++}}</td>
                        <td>{{$request ->User->name}} </td>
                        <td>{{$request ->doctor->name}}</td>
                        <td>{{$request -> description}}</td>
                        <td>{{$request -> created_at -> format('h:i:s A')}}</td>

                        <td>
                            <div class="container3" style="display: flex;">

                                <a href="{{route('add_analysis.create' , $request->id)}}"> <button type="button" class="btn btn-primary" id="dbutton"  >
                                        <i class=" fa fa-search" aria-hidden="true"></i> Analyze </button></a>

                                <form style="display: inline;" method="POST" action="{{route('request.destroy', $request->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="Submit"   id="donebutton" style="   margin: 7px;

                                    width: 100px;
                                    padding: 8px;"  >
                                        <i class="fa fa-check-circle"></i> Done
                                    </button>
                                </form>

                            </div>
                        </td>

                @endforeach

                </tbody>
            </table>

        </div>
          <br>
    </div>
          <!-- Pagination Links -->
          <div class="pagination">
              {{ $requests->links() }}
          </div>

    </div>

@endsection
