
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
    <link rel="stylesheet" href=" ../../css/style.css">

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
            <li><a href="#" class="toggle-link"><i class="fas fa-user-md"></i>     Doctors</a>
                <ul class="sublist">
                    <li><a href="{{route('doctors.create')}}">Add Doctor</a></li>
                    <li><a href="pages/Doctor/doctor_details.html">Doctor Details</a></li>
                    <li><a href="{{route('doctors.index')}}">All Doctors</a></li>
                    <li><a href="pages/Doctor/edit_doctor.html">Edit Doctor</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i>   Patients</a>
                <ul class="sublist">
                    <li><a href="{{route('patients.create')}}">Add Patient</a></li>
                    <li><a href="pages/Patients/all_patients.html">Patient Details</a></li>
                    <li><a href="{{route('patients.index')}}">All Patient</a></li>
                    <li><a href="pages/Patients/edit_patient.html">Edit Patient</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i>Stuff</a>
                <ul class="sublist">
                    <li><a href="{{route('admins.create')}}">Add Stuff</a></li>
                    <li><a href="pages/Stuff/stuff_details.html">Stuff Details</a></li>
                    <li><a href="{{route('admins.index')}}">All Stuff</a></li>
                    <li><a href="pages/Stuff/edit_stuff.html">EditStuff</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fa-solid fa-calendar-check"></i> Appointments</a>
                <ul class="sublist">
                    <li><a href="pages/appointments/add_appointment_form.html">Add Appointment </a></li>
                    <li><a href="pages/appointments/appointment_details.html">Appointment Details</a></li>
                    <li><a href="pages/appointments/all_appointment.html">All Appointments</a></li>
                    <li><a href="pages/appointments/edit_appointment.html">Edit Appointment</a></li>
                </ul>
            </li>


            <li><a href="#" class="toggle-link">  <i class="fa-solid fa-clipboard"></i>Departments</a>
                <ul class="sublist">
                    <li><a href="{{route('sections.create')}}">Add department</a></li>
                    <li><a href="pages/Department/department_details.html">Department Details</a></li>
                    <li><a href="{{route('sections.index')}}">All Departments</a></li>
                    <li><a href="pages/Department/edit_department.html">Edit Department</a></li>
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
                    <li><a href="pages/Resources/resources_details.html">Resources Details</a></li>
                    <li><a href="{{route('resources.index')}}">All Resources</a></li>
                    <li><a href="pages/Resources/edit_resources.html">Edit Resources</a></li>
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

        <h1>Add Doctor</h1>
        <div class="inner_content">
            <h3>Add doctor</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('doctors.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="first-name">Doctor Name</label><br/>
                    <input type="text" id="first-name" name="name" required placeholder="Doctor name">
                </div>

                <!--<div class="form-group">
                    <label for="last-name">Specialization</label><br/>
                    <input type="text" id="last-name" name="section" required placeholder="Specialization">
                </div>-->

                <div class="form-group">
                    <label for="section-name">Specialization</label><br/>
                    <select name="section_id" >Specialization
                        <option value="" selected disabled>Specialization</option>
                        @foreach($section as $Section)
                            <option value="{{$Section->id}}">{{$Section->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="address">Age</label><br/>
                    <input type="text" id="address" name="age" required placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="phone">Phone </label><br/>
                    <input type="tel" id="phone" name="phone" required placeholder="phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br/>
                    <input type="email" id="email" name="email" required placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label><br/>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="doc_details">Doctor  Details</label><br/>
                    <input type="text" id="doc_details" name="details" required placeholder="Doctor Details" aria-setsize="30">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label><br/>
                    <input type="text" id="Address" name="address" required placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="Experience">Experience</label><br/>
                    <input type="text" id="Experience" name="experience" required placeholder="Experience">
                </div>

                <div class="form-group">
                    <label for="password">password</label><br/>
                    <input type="text" id="password" name="password" required placeholder="password">
                </div>


                <div class="form-group">
                    <label for="section-name">appointment</label><br/>
                    <select name="appointment" >appointment
                        <option value="" selected disabled>appointment</option>
                        @foreach($appointments as $appointment)
                            <option value="{{$appointment->name}}">{{$appointment->name}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label for="password">price</label><br/>
                    <input type="text" id="password" name="price" required placeholder="password">
                </div>

                <div class="form-group">
                    <label for="image">image</label><br/>
                    <input type="file" id="image" name="image" required placeholder="choose image" >
                </div>
                <br>

                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Add Doctor</button>
            </form>






        </div>

    </div>



</div>






<script src="../../js/popper.min.js"></script>
<script src="../../js/jquery-3.7.1.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="../../js/main.js"></script>
</body>
</html>













