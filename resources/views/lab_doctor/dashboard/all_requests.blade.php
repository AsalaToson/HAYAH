@extends('lab_doctor.dashboard.parent')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif
      <h1>All Requests</h1>
      <div class="inner_content">
        <h3>Requests list </h3><br>
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
                  <div class="panel-body">
                      <input type="text" class="form-control" name="search" id="search" placeholder="search ...">
                  </div>
              </div>
          </div>
      </div>

      <div class="container2">

        <div class="table-responsive">

            <h3 align="center">Total Data : <span id="total_records"></span></h3>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>

                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>Doctor Name</th>
                        <th>Analysis Name</th>
                        <th>operations</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($requests as $request)
                    <tr>

                        <td>{{$request -> id}}</td>
                        <td>{{$request ->mother->name}} </td>
                        <td>{{$request ->doctor->name}}</td>
                        <td>{{$request -> description}}</td>

                        <td><div class="container3" style="display: flex;">

                          <a href="{{route('add_analysis.create' , $request->id)}}"> <button type="button" class="btn btn-primary" id="dbutton"  >
                            <i class=" fa fa-search" aria-hidden="true"></i> Analyze </button></a>

                                <form style="display: inline;" method="POST" action="{{route('request.destroy', $request->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="Submit" class="btn btn-danger delete-button"  id="dbutton" >
                                        <i class="fas fa-trash-alt"></i> Done
                                    </button>
                                </form>

                        </div></td>
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

<script>

    $(document).ready(function(){

        /*
        $(document).on('keyup','#search' , function(){
            var query = $(this).val();
            fetch_request_data(query);
        });

         */

        fetch_request_data();

        function fetch_request_data(query = '')
        {
            $.ajax({
                url:"{{route('live_search.search')}}",
                method:'GET',
                //data:{query:query},
                data: {
                    query: query,
                    _token: "{{ csrf_token() }}"
                },
                dataType:'json',
                success:function(data){
                    $('tbody').html(data.table_data);
                    $('#total_records').text(data.total_data);
                }
            })
        }

        $(document).on('keyup','#search' , function(){
            var query = $(this).val();
            fetch_request_data(query);
        });


    });

</script>
