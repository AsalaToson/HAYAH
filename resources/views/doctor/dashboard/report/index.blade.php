@extends('doctor.dashboard.parent')

@section('content')


    <div class="short" >
        <h3 class="dash"> All Analysis Reports </h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout">  / Medical Reports / All Medical Reports </p></div>
    </div>


    <div class="inner_content">

        <h3> Medical Reports list </h3><br>
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
                <form action="/rsearch" class="col-md-4">
                    <div class="form-groups">
                        <label for="search" id="Slabel">Search </label>
                        <input type="text"  name="query" class="form-control" id="search" placeholder="search.... ">
                    </div>
                </form>
            </div>
        </div>

        <div class="container2">

            <div class="table-responsive">
                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th> Patient Name </th>
                        <th> Patient Age</th>
{{--                        <th></th>--}}

                        <th>operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($mothers))
                        @foreach ($mothers as $mother)
                    <tr>
                        <td>{{$mother->name}} </td>
                        <td>{{$mother->age}}</td>

                        <td><div class="container3" style="display: flex;">
                                <!-- Delete Button with Delete Icon -->
{{--                                <button type="button" class="btn btn-danger delete-button"  id="dbutton" >--}}
{{--                                    <i class="fas fa-trash-alt"></i> Delete--}}

{{--                                </button>--}}

{{--                                <!-- Edit Button with Edit Icon -->--}}
{{--                                <a href="edit_medical_report.html"> <button type="button" class="btn btn-primary"  id="dbutton" >--}}
{{--                                        <i class="fas fa-edit"></i> Edit--}}
{{--                                    </button></a>--}}
{{--                                </button></a>--}}
                                <a href="{{route('records.show',[$mother->id])}}"> <button type="button" class="btn btn-secondary"  id="dbutton" >
                                        <i class="fas far fa-eye"></i> view
                                    </button></a>
                            </div></td>


                    </tr>
                        @endforeach
                    @endif
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
