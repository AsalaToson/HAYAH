
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAH</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- main container-->
<div class="main" style="height: auto;">

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
                                <i class="fas fa-user"> {{Auth::guard('admin')->user()->name}}  </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Settings</a>

                                <a class="dropdown-item" href="{{route('admin profile.index')}}">Profile</a>
                                <a class="dropdown-item" href="#">logout</a>
                            </div>

                                <a class="dropdown-item" href="edit profile">Profile</a>
                                <form action="{{ route('logout.admin') }}" method="POST">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>                            </div>

                        </li>
                    </ul>
                </div>
            </nav>



        </div>

        <h1>Home...</h1>
        <div class="inner_content">
            <div style="display: flex;">

                <div style="width: 350px; height: 200px; margin: 10px; background-color: whitesmoke  ; display: flex;">
                    <i class="fa-solid fa-clipboard" style="margin-top: 80px;  margin-left: 30px;"></i>
                    <div style="margin: 50px;">
                        <h2 >{{App\Models\doctor::count()}} Doctor</h2>
                        <p>Lorem ipsum doculpa enim ipsam cum incidunt eius ullam necessitatibus.</p>
                    </div>

                </div>
                <div style="width: 350px; height: 200px; margin: 10px; background-color: whitesmoke  ; display: flex;">
                    <i class=" fa fa-users" style="margin-top: 80px;  margin-left: 30px;"></i>
                    <div style="margin: 50px;">
                        <h2 >{{App\Models\User::count()}} Patient</h2>
                        <p>Lorem ipsum doculpa enim ipsam cum incidunt eius ullam necessitatibus.</p>
                    </div>

                </div>
                <div style="width: 350px; height: 200px; margin: 10px; background-color: whitesmoke  ; display: flex;">
                    <i class=" fa fa-users" style="margin-top: 80px;  margin-left: 30px;"></i>
                    <div style="margin: 50px;">
                        <h2 >{{App\Models\appointment::count()}} visits</h2>
                        <p>Lorem ipsum doculpa enim ipsam cum incidunt eius ullam necessitatibus.</p>
                    </div>

                </div>

            </div>


            <div class="container-fluid dashboard-container">


                <!-- Row 3: Medical Reports and Visits/Appointments -->
                <div class="row">
                    <div class="col-md-5 chart-container">
                        <h5>Patient Demographics</h5>
                        <canvas id="patientDemographicsChart"></canvas>
                    </div>
                    <div class="col-md-6 chart-container">
                        <h5>Admin Activity</h5>
                        <canvas id="adminActivityChart"></canvas>
                    </div>
                    <div class="col-md-6 chart-container">
                        <h5>Satisfied Patients</h5>
                        <canvas id="satisfiedPatientsChart"></canvas>
                    </div>
                </div>

            </div>

        </div>



</div>
<script>  // Satisfied Patients Chart
    const satisfiedPatientsCtx = document.getElementById('satisfiedPatientsChart').getContext('2d');
    const satisfiedPatientsChart = new Chart(satisfiedPatientsCtx, {
        type: 'bar',
        data: {
            labels: ['Satisfied', 'Neutral', 'Unsatisfied'],
            datasets: [{
                label: 'Patient Satisfaction',
                data: [85, 10, 5],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    // Patient Demographics Chart
    const patientDemographicsCtx = document.getElementById('patientDemographicsChart').getContext('2d');
    const patientDemographicsChart = new Chart(patientDemographicsCtx, {
        type: 'pie',
        data: {
            labels: ['Pregnant', 'Newborns', 'Adults', 'Seniors'],
            datasets: [{
                label: 'Demographics',
                data: [200, 150, 80, 20],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
    // Admin Activity Chart
    const adminActivityCtx = document.getElementById('adminActivityChart').getContext('2d');
    const adminActivityChart = new Chart(adminActivityCtx, {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'Tasks Completed',
                data: [50, 70, 80, 60],
                fill: false,
                borderColor: 'rgba(75, 192, 192, 1)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });




</script>





<script src="js/popper.min.js"></script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
</body>
</html>













