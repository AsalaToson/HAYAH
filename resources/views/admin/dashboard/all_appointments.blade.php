
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAH</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../../css/style.css">

</head>

<body>

<!-- main container-->
<div class="main">

    <!-- sidebar-->
    <div class="sidebar">
        <a href="#"><img src="images/logo.png" alt="" width="200" height="100"></a>
        <ul>
            <li><a href="#" class="toggle-link"> <i class="fa-solid fa-house"></i>    Dashboard</a>

            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-user-md"></i>     Doctors</a>
                <ul class="sublist">
                    <li><a href="{{route('doctors.create')}}">Add Doctor</a></li>
                    <li><a href="{{route('doctors.index')}}">All Doctors</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i>   Patients</a>
                <ul class="sublist">
                    <li><a href="{{route('patients.create')}}">Add Patient</a></li>
                    <li><a href="{{route('patient.index2')}}">All Patient</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i>Stuff</a>
                <ul class="sublist">
                    <li><a href="{{route('admins.create')}}">Add Stuff</a></li>
                    <li><a href="{{route('admins.index')}}">All Stuff</a></li>
                </ul>
            </li>

            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i>Lab Doctors</a>
                <ul class="sublist">
                    <li><a href="{{route('lab_doctors.create')}}">Add Lab Doctors</a></li>
                    <li><a href="{{route('lab_doctors.index')}}">All Lab Doctors</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fa-solid fa-calendar-check"></i> Appointments</a>
                <ul class="sublist">
                    <li><a href="{{route('AppointmentMother.display')}}">Add Appointment </a></li>
                    <li><a href="{{route('AppointmentMother.index')}}">All Appointments</a></li>
                </ul>
            </li>


            <li><a href="#" class="toggle-link">  <i class="fa-solid fa-clipboard"></i>Departments</a>
                <ul class="sublist">
                    <li><a href="{{route('sections.create')}}">Add department</a></li>
                    <li><a href="{{route('sections.index')}}">All Departments</a></li>
                </ul>
            </li>
            <!-- <li><a href="#" class="toggle-link">  <i class="fa-solid fa-clipboard"></i>Analysis Report</a>
              <ul class="sublist">
                <li><a href="#">Add Analysis Report</a></li>
                <li><a href="#">Analysis Report Details</a></li>
                <li><a href="#">All Analysis Report</a></li>
                <li><a href="#">Edit Analysis Report</a></li>
              </ul>
            </li> -->
            <li><a href="#" class="toggle-link"><i class="fa-solid fa-heart-pulse"></i>  Resources</a>
                <ul class="sublist">
                    <li><a href="{{route('resources.create')}}">Add Resources</a></li>
                    <li><a href="{{route('resources.index')}}">All Resources</a></li>
                </ul>
            </li>

        </ul>
    </div>





    <div class="content">

        <div class="nav">
            <nav class="navbar navbar-expand-lg ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-sun"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-moon"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="edit profile">Profile</a>
                                <a class="dropdown-item" href="#">logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>



        </div>

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
                                <td>{{$appointment->name}}</a></td>
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

    </div>



</div>




<script src="../../js/popper.min.js"></script>
<script src="../../js/jquery-3.7.1.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="../../js/main.js"></script>
</body>
</html>


