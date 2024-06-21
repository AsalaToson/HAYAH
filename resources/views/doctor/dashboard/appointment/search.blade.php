@extends('doctor.dashboard.parent')

@section('content')

    <div class="short" >
        <h3 class="dash"> Appointments </h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout">  / Upcoming Appointments / All Appointments </p></div>
    </div>

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

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        {{--                        <th></th>--}}
                        <th>Patient Name</th>
                        <th>patient Phone</th>
                        <th>Type</th>
                        <th>Email</th>
                        <th>Appointment</th>
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
                                <td>{{ $appointment->User->name }}</td>
                                {{--                                    <td>{{$appointment->mother_id}}</td> --}}
                                <td>{{ $appointment->User->phone }}</td>
                                {{--                                    <td>{{$appointment->doctor->name}} </td> --}}
                                <td>{{ $appointment->type }}</td>
                                <td>{{ $appointment->email }}</td>
                                <td>{{ $appointment->appointment }}</td>

                                <td>{{ $appointment->notes }}</td>
                                {{--                                    <td>{{$appointment->status}}</td> --}}
                                <td><div class="container3" style="display: flex;">
                                        <!-- Delete Button with Delete Icon -->
                                        {{--                                        <form action="{{route('appointments.destroy',$appointment->id)}}" method="POST">--}}
                                        {{--                                            @method('DELETE')--}}
                                        {{--                                            @csrf--}}
                                        {{--                                            <button type="button" class="btn btn-danger delete-button"  id="dbutton" >--}}
                                        {{--                                                <i class="fas fa-trash-alt"></i> Cancel--}}

                                        {{--                                            </button>--}}
                                        {{--                                        </form>--}}


                                        <button type="button" class="btn btn-danger test-button" data-bs-toggle="modal" data-bs-target="#transferModal" id="Tbutton">
                                            <i class="fas fa-search"></i> Test
                                        </button>

                                        <!-- Edit Button with Edit Icon -->
                                        <a href="{{route('lRecord.show',[$appointment->User->id])}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                                                <i class="fa fa-pencil" aria-hidden="true"></i>prescribe
                                            </button></a>
                                    </div></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>

                </table>
            </div>
        </div>

{{--        @include('doctor.dashboard.report.modal.create');--}}

    </div>




@endsection
