@extends('doctor.dashboard.parent')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif
    <h1>All Appointments</h1>
    <div class="inner_content">
        <h3> Appointments list </h3><br>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-groups">
                        <label for="show-entries">Show Entries</label>
                        <select class="form-control" id="show-entries">
                            <option value="1">10</option>
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
                    <a href="{{ route('appointments.index') }}" class="btn btn-primary">All</a>
                    <a href="{{ route('appointments.month') }}" class="btn btn-primary">This Month</a>
                    <a href="{{ route('appointments.today') }}" class="btn btn-primary">Today</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
{{--                        <th></th>--}}
                        <th>patient Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Fee</th>
                        <th>Problem</th>
                        {{--                            <th>status</th> --}}
                        <th>operations</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if (isset($appointments))
                        @foreach ($appointments as $appointment)
                            <tr>
{{--                                <td><input type="checkbox"></td>--}}
                                <td>{{ $appointment->user->name }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ $appointment->fee }}</td>
                                <td>{{ $appointment->user->details }}</td>
                                {{--                                    <td>{{$appointment->status}}</td> --}}

                                <td>
                                    <a  href="#" data-toggle="modal" data-target="#laboratorie_conversion{{$appointment->id}}">
                                        <button type="button" class="btn btn-primary"  id="dbutton"><i class="text-warning fas fa-syringe" aria-hidden="true"></i>Test</button>

                                       </a>




                                    <!-- Edit Button with Edit Icon -->
                                    <a href="{{route('lRecord.show',[$appointment->user->id])}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                                            <i class="fa fa-pencil" aria-hidden="true"></i>prescribe
                                        </button></a>
                                </td>
                            </tr>

                            <!-- Modal -->
                            @include('doctor.dashboard.report.modal.create')

                        @endforeach
                    @endif

                    </tbody>

                </table>

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
        </div>



    </div>
@endsection
