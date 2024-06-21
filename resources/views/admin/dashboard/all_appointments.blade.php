@extends('admin.parent')

@section('content')
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
                            <th>#</th>
                            <th>Mother Name</th>
                            <th>Doctor name</th>
                            <th>Section</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Appointment</th>
                            <th>Time</th>
                            <th>Note</th>
                            <th>Operations</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($appointments as $appointment)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$appointment->user->name}}</a></td>
                                <td>{{$appointment->doctor->name}}</td>
                                <td>{{$appointment->section->name}}</td>
                                <td>{{$appointment->phone}}</td>
                                <td>{{$appointment->email}}</td>
                                <td>{{$appointment->type}}</td>
                                <td>{{$appointment->appointment}}</td>
                                <td>{{$appointment->time}}</td>
                                <td>{{$appointment->notes}}</td>
                                <td>
                                    <button class="btn btn-sm btn-success" data-toggle="modal"
                                            data-target="#approval{{$appointment->id}}"><i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#Refusal{{$appointment->id}}"><i class="fas fa-remove-format"></i>
                                    </button>
                                </td>
                            </tr>
                            @include('admin.dashboard.appointment_approval')
                            @include('admin.dashboard.appointment_unapproval')
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

            <div class="container3">
                <!-- Delete Button with Delete Icon -->
                <button type="button" class="btn btn-danger" id="dbutton">
                    <i class="fas fa-trash-alt"></i> Delete
                </button>

                <!-- Edit Button with Edit Icon -->
                <button type="button" class="btn btn-primary" id="dbutton">
                    <i class="fas fa-edit"></i> Edit
                </button>
            </div>






        </div>

@endsection


