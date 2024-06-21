@extends('doctor.dashboard.parent')

@section('content')

    <div class="short" >
        <h3 class="dash"> All Medical Reports </h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout">  / Analysis Reports / All Medical Reports </p></div>
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
                    <form action="/search" class="col-md-4">
                        <div class="form-groups">
                            <label for="search" id="Slabel">Search </label>
                            <input type="text" name="query" class="form-control" id="search">
                        </div>
                    </form>
                </div>
            </div>

            <div class="container2">
                <div class="row mb-3">
                    <div class="col-md-12 text-right">
                        <a href="{{ route('tests.index') }}" class="btn btn-primary">All</a>
                        <a href="{{ route('tests.month') }}" class="btn btn-primary">This Month</a>
                        <a href="{{ route('tests.today') }}" class="btn btn-primary">Today</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">

                        <thead>
                        <tr>
                            <th> Patient Name </th>
                            <th>Doctor Name</th>
                            <th>Test Name</th>
                            <th>Date</th>
                            <td>Operations</td>
                        </tr>
                        </thead>
                        <tbody>
                        @if (isset($requests))
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{$request->user->name}} </td>
                                    <td>{{$request->doctor->name}}</td>
                                    <td>{{$request->analysis_Name}}</td>
                                    <td>{{$request->created_at -> format('Y-m-d')}}</td>

                                    {{--                                    @if($request->doctor_id == Auth::guard('doctor')->user()->id)--}}
                                    <td><div class="container3" style="display: flex;">
{{--                                               <!-- Edit Button with Edit Icon -->--}}
{{--                                                 <a href="{{route('test.edit')}}"> <button type="button" class="btn btn-primary"  id="dbutton" >--}}
{{--                                                    <i class="fas fa-edit"></i> Edit--}}
{{--                                                  </button></a>--}}
{{--                                            @endif--}}
                                            <a href="{{route('tests.show',[$request->id])}}"> <button type="button" class="btn btn-secondary"  id="dbutton" >
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
