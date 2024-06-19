@extends('mother.dashboard.BABY.parent')
@section('title','HAYAH HOSPITAL "Relationships')

@section('content')



    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <style>
        p{
            text-align: center;

        }
        h2 {
            color: black;
        }
        h1{
            text-align: center;
            font-weight: bold;
            /* background-color: rgba(201, 201, 201, 0.978); */
            border-radius: 50px;
            color: deeppink;
            margin-top: 60px;

        }
        #labor{
            text-align: center;
            margin: 10px;
            color: deeppink;
        }
        h4{
            color: deeppink;
        }



        .card {
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for transform and box-shadow */
            position: relative;
            box-shadow: 0 4px 8px rgba(231, 225, 225, 0.1);
            height: 300px;
        }

        .card:hover {
            transform: scale(1.1); /* Increase size by 10% */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
            z-index: 1; /* Bring the card to the front */
        }

        .card-body {
            position: relative; /* Needed for z-index to work */
        }
        i{
            color: deeppink;

        }
        strong{
            color: deeppink;
            font-size: larger;
        }
        a{
            text-decoration: none;
        }
        .card-img-top {
            height: 205px;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        p.card-text{
            color: black;
            text-align: left;
        }

        .link {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 20px;
        }
        .link a {
            margin: 0 10px;
            padding: 10px 15px;
            border: 1px solid deeppink;
            border-radius: 25px;
            color:white;
            text-decoration: none;
            text-decoration: none;
            transition: color 0.3s, transform 0.3s;
            position: relative;
            overflow: hidden;
            font-size: large;
            text-align: center;
        }

        .link a::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: deeppink;
            transform: scaleX(.5);
            transition: transform 0.3s ease;
        }
        h6{
            color: deeppink;
            font-size: large;
            font-weight: 800;
        }
        .link a:hover {
            color: deeppink;
            transform: translateY(-5px);
        }

        .link a:hover::before {
            transform: scaleX(1);
        }

        .collapsible-links {
            list-style-type: none;
            padding: 0;
            margin-top: 25px;
            margin-left: 30px
        }

        .collapsible-links li {
            margin-bottom: 8px;
        }

        .card-link{
            color: white;
            font-weight: 400;
            font-size: medium;
        }
        .card-link:hover{
            color: deeppink;
        }
        .card-body{
            height: auto;
            border-radius: 5px;
            border: .5px solid rgb(215, 210, 210);
            color: whitesmoke;

        }


    </style>
</head>

<body>
<div id="loader-wrapper">
    <div id="loader"><div class="loader-inner"></div></div>
</div>
<div class="header-w3l">
    <!--header-->
    <header id="site-header" class="header-w3l fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <a class="navbar-brand" href="index.html">
                <img src="{{asset('site/bassets/images/logo2.png')}}" alt="logo"  style="height: 75px; width: 400px;" >

                </a>

                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link scroll" href="{{route('dashboard.mother',[Auth::guard('mother')->user()->id])}}">Home</a>
                        </li>

                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('service.show',[Auth::guard('mother')->user()->id])}}">Our Services</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('pregnancy.home')}}">pregnancy</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('baby.index')}}">Baby</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#">Family</a>
                        </li>

                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('contactus.show',[Auth::guard('mother')->user()->id])}}">contact us</a>
                        </li>

                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('login')}}">login</a>
                        </li>





                    </ul>

                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
</div>

<!--banner-content-->
<div class="banner-w3l-main">
    <div class="w3l-banner-content">

        <div class="container mt-5">
            <h1 style="margin-top: 150px;"> Schedules</h1><br>
            <div class="container mt-5">
                <div class="link">
                    <a href="#feed">Baby Sleep & Feeding Schedules</a>
                    <a href="#routine">Creating Your Baby's Routine</a>

                </div>
            </div>

        </div>

        <hr>
        <!-- container -->
        <!-- Baby Sleep & Feeding Schedules-->
        <h1 id="feed" >Baby Sleep & Feeding Schedules</h1><hr>
        <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/sample.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Baby sleep: 5 tips for daylight saving</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sam1Content" aria-expanded="false" aria-controls="firstContent"> -Learn more about how time changes may affect your baby's schedule. <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sam1Content">
                                <div class=" card-body" >

                                    <a href="https://youtube.com/shorts/wnD2t0S1ovQ?si=4q_vdAYPDB9P73B9"> <strong>Find out here..</strong></a>
                                </div>
                            </div>
                        </li>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/sample2.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Sample baby schedules for 1- and 2-month-olds </h4>
                            <p class="card-text">
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sam2Content" aria-expanded="false" aria-controls="firstContent"> -Feeding Your 1- and 2-Month-Old: Schedules and Tips  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sam2Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/schedules/sample-baby-schedules-for-1-and-2-month-olds_3657227"> <strong>Learn more ....</strong></a>
                                </div>
                            </div>
                        </li>



                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/sample3.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> How to survive daylight saving time with your baby or toddler </h4>
                            <p class="card-text">
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sam3Content" aria-expanded="false" aria-controls="firstContent"> -Navigating Daylight Saving Time and Jet Lag: Tips for Babies and Toddlers  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sam3Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/schedules/how-time-changes-vacations-and-temperament-will-affect-your_3657539"> <strong>Learn more ....</strong></a>
                                </div>
                            </div>
                        </li>



                    </ul>

                </div>

            </div>
        </div>

        <hr>
        <!--Creating Your Baby's Routine-->
        <h1 id="routine">Creating Your Baby's Routine</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/create.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Baby schedules: Why, when, and how to start a routine</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#create1Content" aria-expanded="false" aria-controls="firstContent"> -**Unlocking the Benefits of Baby Schedules: Starting, Establishing, and Sample Routines**<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="create1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/schedules/the-basics-of-baby-schedules-why-when-and-how-to-start-a-rou_3658352"><strong> Learn more Here....</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>


                </div>
            </div>
        </div>



    </div>
    <!-- //home page block1 -->



</div>
@endsection
