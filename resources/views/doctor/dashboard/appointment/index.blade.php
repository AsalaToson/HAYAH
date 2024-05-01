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
                <div class="col-md-4">
                    <div class="form-groups">
                        <label for="search" id="Slabel">Search </label>
                        <input type="text" class="form-control" id="search">
                    </div>
                </div>
            </div>
        </div>

        <div class="container2">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
{{--                        <th></th>--}}
                        <th>Patient ID</th>
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
                                <td>{{ $appointment->mother->id }}</td>
                                {{--                                    <td>{{$appointment->mother_id}}</td> --}}
                                <td>{{ $appointment->mother->name }}</td>
                                {{--                                    <td>{{$appointment->doctor->name}} </td> --}}
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ $appointment->fee }}</td>

                                <td>{{ $appointment->mother->details }}</td>
                                {{--                                    <td>{{$appointment->status}}</td> --}}


                                <td><div class="dropdown">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-primary btn-sm" data-toggle="dropdown" type="button"><i class="fas fa-caret-down mr-1"></i></button>
                                        <div class="dropdown-menu tx-13">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#laboratorie_conversion{{$appointment->id}}"><i class="text-warning fas fa-syringe"></i>&nbsp;&nbsp;Transfer to Lab</a>
                                        </div>
                                    </div>


                                    <!-- Edit Button with Edit Icon -->
                                    <a href="{{route('records.show',[$appointment->mother->id])}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                                            <i class="fa fa-pencil" aria-hidden="true"></i>prescribe
                                        </button></a>
                                    </td>
                            </tr>

                            <!-- Modal -->
                            @include('doctor.dashboard.report.modal.create2')

                        @endforeach
                    @endif

                    </tbody>

                </table>
            </div>
        </div>



    </div>
@endsection
