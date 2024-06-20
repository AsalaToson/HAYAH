
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAH Doctor Dashboard</title>
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_3.css">




</head>

<body id="body">

<!-- main container-->
<div class="main" style="height: auto;">

    <!-- sidebar-->
    <div class="sidebar">
        <a href="#"><img src="{{asset('images/logo.png')}}" alt=""  width="200" height="100"></a>
        <ul>
            <li><a href="/doctor_dashboard" class="toggle-link"> <i class="fa-solid fa-house"></i>    Dashboard</a>





            <li><a href="#" class="toggle-link"><i class="fa-solid fa-calendar-check"></i> Upcoming Appointments</a>
                <ul class="sublist">
                    <li><a href="{{route('appointments.index')}}">All Appointments</a></li>

                </ul>
            </li>
{{--            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i> My patients</a>--}}
{{--                <ul class="sublist">--}}
{{--                    <li><a href="{{route('patients.index')}}">All patients</a></li>--}}

{{--                </ul>--}}
{{--            </li>--}}

            <li><a href="#" class="toggle-link">  <i class="fa-solid fa-clipboard"></i> Medical Reports</a>
                <ul class="sublist">
                    <li><a href="/record/create">Add Medical Report</a></li>
                    <li><a href="{{route('records.index')}}">All Medical Reports</a></li>
{{--                    <li><a href="#">Medical Report Details</a></li>--}}

{{--                    <li><a href="#">Edit Medical Report</a></li>--}}
                </ul>
            </li>
            <li><a href="#" class="toggle-link">  <i class="fa-solid fa-clipboard"></i> Analysis Reports</a>
                <ul class="sublist">
                    <li><a href="{{route('tests.index')}}">All Medical Reports</a></li>

                </ul>
            </li>


        </ul>
    </div>



    <div class="content">
        <div class="nav">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                                <p style="text-align: center;"> you have 3 notification</p><hr>
                                <a class="dropdown-item" href="#" style="height: 40px;"><i class="fa-solid fa-circle-exclamation"></i> Lorem ipsum dolor sit, officia placeat,</a>
                                <a class="dropdown-item" href="#" style="height: 40px;"><i class="fa-solid fa-circle-exclamation"></i> obcaecati aspernatur sequi nihil esse rem</a>
                                <a class="dropdown-item" href="#" style="height: 40px;"><i class="fa-solid fa-circle-exclamation"></i> obcaecati aspernatur sequi nihil esse rem </a>
                            </div>
                        </li>
                        <li class="nav-item-dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" >
                                <i class="fas fa-user" ></i>
                                {{Auth::guard('doctor')->user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="height: 150px; width: 200px;">
                                <a class="dropdown-item" href="{{route('profile.show')}}" ><i class="fa fa-user" aria-hidden="true"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="#" ><i class="fa fa-user" aria-hidden="true"></i>
                                    My schedule</a>
                                <a class="dropdown-item" href="#" ><i class="fa fa-cog" aria-hidden="true"></i>
                                    Settings</a>

                                <form id="logout-form" action="{{ route('logout.doctor') }}" method="POST" style="display: none;">
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
                        <h2 >{{App\Models\schedule::count()}} visits</h2>
                        <p>Lorem ipsum doculpa enim ipsam cum incidunt eius ullam necessitatibus.</p>
                    </div>

                </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid dashboard-container" >
                <!-- Row 1: Doctor Consultations, Successful Operations, and Medical Reports -->
                <div class="row">

                    <div class="col-md-4.5">
                        <div class="chart-container">
                            <h5>Successful Operations</h5>
                            <canvas id="successfulOperationsChart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="chart-container">
                            <h5>Medical Reports</h5>
                            <canvas id="medicalReportsChart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="chart-container">
                            <h5>Doctor Consultations</h5>
                            <canvas id="doctorConsultationsChart"></canvas>
                        </div>
                    </div>

                </div>
            </div>




</div>
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
        <script>

            // Doctor Consultations Chart
            const doctorConsultationsCtx = document.getElementById('doctorConsultationsChart').getContext('2d');
            const doctorConsultationsChart = new Chart(doctorConsultationsCtx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Consultations',
                        data: [120, 190, 300, 500, 230, 350],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
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
            // Medical Reports Chart
            const medicalReportsCtx = document.getElementById('medicalReportsChart').getContext('2d');
            const medicalReportsChart = new Chart(medicalReportsCtx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Reports',
                        data: [100, 120, 150, 200, 180, 160],
                        backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1
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
            // Successful Operations Chart
            const successfulOperationsCtx = document.getElementById('successfulOperationsChart').getContext('2d');
            const successfulOperationsChart = new Chart(successfulOperationsCtx, {
                type: 'pie',
                data: {
                    labels: ['Successful', 'Unsuccessful'],
                    datasets: [{
                        label: 'Operations',
                        data: [90, 10],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });

        </script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>













