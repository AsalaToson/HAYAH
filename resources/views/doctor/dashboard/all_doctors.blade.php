
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
        <a href="#"><img src="../../images/logo.png" alt="" width="200" height="100"></a>
        <ul>
            <li><a href="../../dashboard.html" class="toggle-link"> <i class="fa-solid fa-house"></i>    Dashboard</a>

            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-user-md"></i>      Doctors</a>
                <ul class="sublist">
                    <li><a href="add_doctor_form.html">Add Doctor</a></li>
                    <li><a href="doctor_details.html">Doctor Details</a></li>
                    <li><a href="all_doctors.html">All Doctors</a></li>
                    <li><a href="edit_doctor.html">Edit Doctor</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i>      Patients</a>
                <ul class="sublist">
                    <li><a href="../Patients/add_patient_form.html">Add Patient</a></li>
                    <li><a href="../Patients/patient_details.html">Patient Details</a></li>
                    <li><a href="../Patients/all_patients.html">All Patient</a></li>
                    <li><a href="../Patients/edit_patient.html">Edit Patient</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i>     Stuff</a>
                <ul class="sublist">
                    <li><a href="../Stuff/add_stuff_form.html">Add Stuff</a></li>
                    <li><a href="../Stuff/stuff_details.html">Stuff Details</a></li>
                    <li><a href="../Stuff/all_stuff.html">All Stuff</a></li>
                    <li><a href="../Stuff/edit_stuff.html">EditStuff</a></li>
                </ul>
            </li>

            <li><a href="#" class="toggle-link"><i class="fa-solid fa-calendar-check"></i> Appointments</a>
                <ul class="sublist">
                    <li><a href="../appointments/add_appointment_form.html">Add Appointment </a></li>
                    <li><a href="../appointments/appointment_details.html">Appointment Details</a></li>
                    <li><a href="../appointments/all_appointment.html">All Appointments</a></li>
                    <li><a href="../appointments/edit_appointment.html">Edit Appointment</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link">  <i class="fa-solid fa-clipboard"></i>Departments</a>
                <ul class="sublist">
                    <li><a href="../Department/add_department_form.html">Add Department</a></li>
                    <li><a href="../Department/department_details.html">Department Details</a></li>
                    <li><a href="../Department/all_departments.html">All Departments</a></li>
                    <li><a href="../Department/edit_department.html">Edit department</a></li>
                </ul>
            </li>
            <!-- <li><a href="#" class="toggle-link"><i class="fa-solid fa-clipboard"></i>  Analysis Report</a>
              <ul class="sublist">
                <li><a href="#">Add Analysis Report</a></li>
                <li><a href="#">Analysis Report Details</a></li>
                <li><a href="#">All Analysis Report</a></li>
                <li><a href="#">Edit Analysis Report</a></li>
              </ul>
            </li> -->
            <li><a href="#" class="toggle-link"><i class="fa-solid fa-heart-pulse"></i>  Resources</a>
                <ul class="sublist">
                    <li><a href="../Resources/add_resources_form.html">Add Resources</a></li>
                    <li><a href="../Resources/resources_details.html">Resources Details</a></li>
                    <li><a href="../Resources/all_resources.html">All Resources</a></li>
                    <li><a href="../Resources/edit_resources.html">Edit Resources</a></li>
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

        <h1>All Doctors</h1>
        <div class="inner_content">
            <h3> Doctor list </h3><br>
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
                            <th></th>
                            <th>Doctor ID</th>
                            <th>Doctor Name</th>
                            <th>Experience(in years)</th>
                            <th>Phone</th>
                            <th>Specialization</th>
                            <th>price</th>
                            <th>age</th>
                            <th>gender</th>
                            <th>appointment</th>
                        </tr>
                        </thead>
                        <tbody>
                             @foreach($doctors as $Doctors)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{$Doctors->id}}</td>
                            <td>{{$Doctors->name}}</td>
                            <td>{{$Doctors->experience}}</td>
                            <td>{{$Doctors->phone}}</td>
                            <td>{{$Doctors->section->name}}</td>
                            <td>{{$Doctors->price}}</td>
                            <td>{{$Doctors->age}}</td>
                            <td>{{$Doctors->gender}}</td>
                            <td>{{$Doctors->appointment}}</td>
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













