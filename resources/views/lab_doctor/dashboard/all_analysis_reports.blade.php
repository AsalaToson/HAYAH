@extends('lab_doctor.dashboard.parent')

@section('content')
      <h1>All Analyis Reports </h1>
      <div class="inner_content">
        <h3>Reports  list </h3><br>
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
              <div class="col-md-4">
                  <div class="form-groups">
                      <label for="search" id="Slabel">Search </label>
                      <input type="text" class="form-control" id="search" placeholder="search ">
                  </div>
              </div>
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
                    <th>Photo</th>
                    <th>operations</th>
                </tr>
            </thead>
            <tbody>

            @foreach($allAnalysis as $analysis)
                <tr>
                    <td>{{$analysis -> id}}</td>
                    <td>{{$analysis ->mother->name}}</td>
                    <td>{{$analysis ->doctor->name}}</td>
                    <td>{{$analysis -> analysis_Name}}</td>
                    <td> <img alt="" src="{{asset($analysis->photo)}}"></td>
                    <td><div class="container3" style="display: flex;">
                      <!-- Delete Button with Delete Icon -->

                            <form style="display: inline;" method="POST" action="{{route('analysis.destroy', $analysis->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="Submit" class="btn btn-danger delete-button"  id="dbutton" >
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>

                            <a href="{{route('details.show', $analysis->id)}}" class="btn btn-info">View</a>

                    </div>
                    </td>
      </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>

 <div class="pag">

    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#" class="active">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>

 </div>


    </div>
@endsection
