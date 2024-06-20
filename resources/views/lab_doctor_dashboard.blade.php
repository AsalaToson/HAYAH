
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAH Lab Doctor Dashboard</title>
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

<body id="body" style="height: auto">

<!-- main container-->
<div class="main" style="height: auto;">

    <!-- sidebar-->
    <div class="sidebar" >
        <a href="#"><img src="{{asset('images/logo.png')}}" alt="" width="200" height="100"></a>
        <ul>
            <li><a href="#" class="toggle-link"> <i class="fa-solid fa-house"></i>    Dashboard</a>




            <li><a href="#" class="toggle-link"><i class="fa fa-medkit"></i> Analysis Requests</a>
                <ul class="sublist">
                    <li><a href="{{route('requests.index')}}"> All Requests</a></li>

                </ul>
            </li>


            <li><a href="#" class="toggle-link">  <i class="fa-solid fa-clipboard"></i> Analysis Reports</a>
                <ul class="sublist">
                    <li><a href="{{route('analysis.index')}}">All Analysis Reports</a></li>

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
                                {{Auth::guard('lab_doctor')->user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="height: 150px; width: 200px;">
                                <a class="dropdown-item" href="{{route('labProfile.show')}}" ><i class="fa fa-user" aria-hidden="true"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="#" ><i class="fa fa-user" aria-hidden="true"></i>
                                    My schedule</a>
                                <a class="dropdown-item" href="#" ><i class="fa fa-cog" aria-hidden="true"></i>
                                    Settings</a>

                                {{--             <a class="dropdown-item" href="#" ><i class="fa-solid fa-right-from-bracket"></i>--}}
                                {{--               logout</a>--}}

                                <form id="logout-form" action="{{ route('logout.lab_doctor') }}" method="POST" style="display: none;">
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


        <div class="short"  >
            <h3 class="dash"  >Quick Statistics</h3>
            <div class="top"> <i class="fa fa-home" ></i> <p  class="rout">  / Dashboard</p></div>
        </div>
        <div class="inner_content">

            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-3 dcard">
                        <div class="inner-card">
                            <img src="{{asset('images/medical-report.png')}}" alt="Image 1" >
                            <h4>120 Report</h4>
                        </div>
                    </div>
                    <div class="col-md-3 dcard " >
                        <div class="inner-card" style="background-color: rgb(254, 198, 207);">
                            <img src="{{asset('images/pregnancy.png')}}" alt="Image 2" >
                            <h4>200 Patient</h4>
                        </div>
                    </div>
                    <div class="col-md-3 dcard" >
                        <div class="inner-card" style="background-color: lightblue;">
                            <img src="{{asset('images/online-booking.png')}}" alt="Image 3" >
                            <h4>342 visits</h4>
                        </div>
                    </div>
                    <div class="col-md-3 dcard" >
                        <div class="inner-card" style="background-color: lightsalmon;">
                            <img src="{{asset('images/dollar.png')}}" alt="Image 3" >
                            <h4> <small style="color: rgb(104, 101, 101) ;font-weight: lighter; font-size: medium;">Total Revenue </small> <br> $6938</h4>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid dashboard-container">
                <!-- Row 2: Admin Activity and Lab Tests Conducted -->
                <div class="row">
                    <div class="col-md-6 chart-container " >
                        <h5 Style="font-weight: 400;">Visits and Appointments</h5>
                        <canvas id="visitsAppointmentsChart"></canvas>
                    </div>
                    <div class="col-md-5 chart-container">
                        <h5 Style="font-weight: 400;">Lab Tests Conducted</h5>
                        <canvas id="labTestsChart"></canvas>
                    </div>
                    <div class="col-md-6 chart-container">
                        <h5 Style="font-weight: 400;">Number of Patients (Last 5 Years)</h5>
                        <canvas id="patientCountChart"></canvas> </div>
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
                <h2 class="modal-title fs-5" id="exampleModalLabel">Search Here</h2>
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
    // Lab Tests Conducted Chart
    const labTestsCtx = document.getElementById('labTestsChart').getContext('2d');
    const labTestsChart = new Chart(labTestsCtx, {
        type: 'doughnut',
        data: {
            labels: ['Blood Tests', 'Ultrasounds', 'X-Rays', 'MRIs'],
            datasets: [{
                label: 'Lab Tests',
                data: [300, 150, 100, 50],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 205, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
    // Visits and Appointments Chart
    const visitsAppointmentsCtx = document.getElementById('visitsAppointmentsChart').getContext('2d');
    const visitsAppointmentsChart = new Chart(visitsAppointmentsCtx, {
        type: 'line',
        data: {
            labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6'],
            datasets: [{
                label: 'Visits',
                data: [120, 100, 140, 130, 110, 150],
                borderColor: 'rgba(54, 162, 235, 1)',
                tension: 0.1,
                fill: false
            }, {
                label: 'Appointments',
                data: [80, 90, 70, 100, 90, 80],
                borderColor: 'rgba(255, 99, 132, 1)',
                tension: 0.1,
                fill: false
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

    // Code for patient count chart
    const ctxPatientCount = document.getElementById('patientCountChart').getContext('2d');

    // Replace with your actual patient count data for the last 5 years
    const labelsPatientCount = ['2024', '2023', '2022', '2021', '2020'];
    const dataPatientCount = {
        labels: labelsPatientCount,
        datasets: [{
            label: 'Number of Patients',
            backgroundColor: 'rgba(92, 184, 92, 0.2)', // Green color for the chart
            borderColor: 'rgba(92, 184, 92, 1)',
            data: [1000, 1200, 1400, 1550, 1700] // Replace with your data
        }]
    };

    // Chart configuration (customize as needed)
    const configPatientCount = {
        type: 'bar', // You can choose 'line' or other chart types
        data: dataPatientCount,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    };

    // Create the patient count chart
    new Chart(ctxPatientCount, configPatientCount);


</script>



<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>













