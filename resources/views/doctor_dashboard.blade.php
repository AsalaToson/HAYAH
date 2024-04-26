
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAH Doctor Dashboard</title>
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">



</head>

<body id="body">

<!-- main container-->
<div class="main">

    <!-- sidebar-->
    <div class="sidebar">
        <a href="#"><img src="images/logo.png" alt="" width="200" height="100"></a>
        <ul>
            <li><a href="#" class="toggle-link"> <i class="fa-solid fa-house"></i>    Dashboard</a>





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
{{--                    <li><a href="#">Add Medical Report</a></li>--}}
                    <li><a href="{{route('records.index')}}">All Medical Reports</a></li>
{{--                    <li><a href="#">Medical Report Details</a></li>--}}

{{--                    <li><a href="#">Edit Medical Report</a></li>--}}
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
                                </i></a>
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
                                <a class="dropdown-item" href="edit profile" style="height: 40px;"><i class="fa-solid fa-circle-exclamation"></i> obcaecati aspernatur sequi nihil esse rem</a>
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
                                <a class="dropdown-item" href="doc_schedule.html" ><i class="fa fa-user" aria-hidden="true"></i>
                                    My schedule</a>
                                <a class="dropdown-item" href="#" ><i class="fa fa-cog" aria-hidden="true"></i>
                                    Settings</a>

                                <a class="dropdown-item" href="#" ><i class="fa-solid fa-right-from-bracket"></i>
                                    logout</a>


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
                    <i class="fa-solid fa-clipboard" style="margin-top: 80px;  margin-left: 30px;"></i></i>
                    <div style="margin: 50px;">
                        <h2 >340 Report</h2>
                        <p>Lorem ipsum doculpa enim ipsam cum incidunt eius ullam necessitatibus.</p>
                    </div>

                </div>
                <div style="width: 350px; height: 200px; margin: 10px; background-color: whitesmoke  ; display: flex;">
                    <i class=" fa fa-users" style="margin-top: 80px;  margin-left: 30px;"></i>
                    <div style="margin: 50px;">
                        <h2 >120 Appointment</h2>
                        <p>Lorem ipsum doculpa enim ipsam cum incidunt eius ullam necessitatibus.</p>
                    </div>

                </div>
                <div style="width: 350px; height: 200px; margin: 10px; background-color: whitesmoke  ; display: flex;">
                    <i class=" fa fa-users" style="margin-top: 80px;  margin-left: 30px;"></i>
                    <div style="margin: 50px;">
                        <h2 >120 visits</h2>
                        <p>Lorem ipsum doculpa enim ipsam cum incidunt eius ullam necessitatibus.</p>
                    </div>

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
                <h2 class="modal-title fs-5" id="exampleModalLabel" style="color: black; background-color: none;">Search Here</h2>
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





<script src="js/popper.min.js"></script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
</body>
</html>













