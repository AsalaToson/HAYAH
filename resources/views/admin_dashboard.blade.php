
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAH ADMIN Dashboard</title>
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style_3.css') }}">

</head>

<body id="body">

<!-- main container-->
<div class="main" style="height: auto;">

    <!-- sidebar-->
    <div class="sidebar">
        <a href="#"><img src="{{asset('images/logo.png')}}" alt=""  width="200" height="100"></a>
        <ul>
            <li><a href="/admin_dashboard" class="toggle-link"> <i class="fa-solid fa-house"></i>    Dashboard</a>

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

            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto" >
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="padding-top: 18px;"><i class="fa-solid fa-toggle-on" id="dark"></i>
                            </a>
                        </li>


                        <li class="nav-item">
                            <button class="nav-link btn btn-link" id="searchIcon" style="padding-top: 16px;"><i class="fa fa-search"></i></button>
                        </li>

                        <li class="nav-item dropdown" style="padding-top: 10px;">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >
                                <i class="fa fa-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 350px;" >
                                <p style="text-align: center;"> you have 2 notification</p><hr>
                                <a class="dropdown-item" href="#" style="height: 40px;"><i class="fa-solid fa-circle-exclamation"></i> you have new analysis request </a>
                                <a class="dropdown-item" href="#" style="height: 40px;"><i class="fa-solid fa-circle-exclamation"></i> update your profile</a>
                            </div>
                        </li>
                        <li class="nav-item-dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" >
                                <i class="fas fa-user" ></i>
                                {{Auth::guard('admin')->user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="height: 150px; width: 200px;">
                                <a class="dropdown-item" href="{{route('admin profile.index')}}" ><i class="fa fa-user" aria-hidden="true"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="#" ><i class="fa fa-user" aria-hidden="true"></i>
                                    My schedule</a>
                                <a class="dropdown-item" href="#" ><i class="fa fa-cog" aria-hidden="true"></i>
                                    Settings</a>

                                {{--             <a class="dropdown-item" href="#" ><i class="fa-solid fa-right-from-bracket"></i>--}}
                                {{--               logout</a>--}}

                                <form id="logout-form" action="{{ route('logout.admin') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket"></i> logout
                                </a>

                            </div>

                        </li>
                    </ul>
                </div>

            </nav>

        </div>

        <div class="short" >
            <h3 class="dash">Quick Statistics</h3>
            <div class="top"> <i class="fa fa-home" ></i> <p  class="rout">  / Dashboard</p></div>
        </div>

        <div class="inner_content">
            <div style="display: flex;">

            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-3 dcard">
                        <div class="inner-card" style="background-color: rgb(254, 198, 207);">
                            <img src="images/tasks.png" alt="Image 1"  >
                            <h4> 470  Task</h4>
                        </div>
                    </div>
                    <div class="col-md-3 dcard " >
                        <div class="inner-card" style="background-color: #fff5dd;">
                            <img src="images/pregnancy.png" alt="Image 2" >
                            <h4>6930 Patient</h4>
                        </div>
                    </div>
                    <div class="col-md-3 dcard" >
                        <div class="inner-card" style="background-color: #d3eaea;">
                            <img src="images/online-booking.png" alt="Image 3" >
                            <h4>15849 visits</h4>
                        </div>
                    </div>
                    <div class="col-md-3 dcard" >
                        <div class="inner-card" style="background-color: lightsalmon;">
                            <img src="images/dollar.png" alt="Image 3" >
                            <h4> <small style="color: rgb(104, 101, 101) ;font-weight: lighter; font-size: medium;">Total Revenue </small> <br> $99385</h4>

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
                        <!--modal-->

                        <!--modal-->

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel" style="color: black; background-color: transparent;">Search Here</h2>
                                        <button type="button" class="btn-close" aria-label="Close" id="closeModalButton"><i class="fa fa-times" aria-hidden="true"></i>
                                        </button>

                                    </div>
                                    <div class="modal-body">

                                        <form>
                                            <div class="form-group">
                                                <label for="searchInput">Search:</label>
                                                <input type="text" class="form-control" id="searchInput" placeholder="Search..." style="width: 400px;">
                                            </div>
                                            <button type="submit" class="btn btn-primary" style="padding: 1px; width: 100px; height: 40px;font-size: large;">Search</button>
                                            <button type="submit" class="btn btn-primary" style="padding: 1px; width: 100px; height: 40px;font-size: large;">Cancel</button>

                                        </form>
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













