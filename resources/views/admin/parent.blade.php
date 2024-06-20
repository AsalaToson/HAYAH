
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAH Admin Dashboard</title>
    <link rel="icon" type="image/png" href="{{asset('../../images/logo.png')}}"/>
    <link rel="stylesheet" href="{{asset("../../css/bootstrap.css")}}">
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('../../css/style_3.css') }}">

    @yield('css')


</head>

<body id="body">

<!-- main container-->
<div class="main" style="height: auto;">

    <!-- sidebar-->
    <div class="sidebar">
        <a href="#"><img src="{{asset('../../images/logo.png')}}" alt="" width="200" height="100"></a>
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

        @yield('content')
    </div>
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



<script src="{{asset('../../js/popper.min.js')}}"></script>
<script src="{{asset('../../js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('../../js/bootstrap.js')}}"></script>
<script src="{{asset('../../js/main.js')}}"></script>
@yield('js')
</body>
</html>

