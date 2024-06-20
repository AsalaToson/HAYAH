@extends('mother.dashboard.BABY.parent')
@section('title',' HAYAH HOSPITAL "Motherhood"')

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
            background-color: rgb(236, 228, 228);

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
                    <img src="{{asset('site/assets/images/logo2.png')}}" alt="logo"  style="height: 75px; width: 400px;" >

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
                            <a class="nav-link scroll" href="{{route('dashboard.mother',[Auth::guard('web')->user()->id])}}">Home</a>
                        </li>

                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('service.show',[Auth::guard('web')->user()->id])}}">Our Services</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('pregnancy.home')}}">pregnancy</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('baby.index')}}">Baby</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('family.home')}}">Family</a>
                        </li>

                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('contactus.show',[Auth::guard('web')->user()->id])}}">contact us</a>
                        </li>

                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('login.page')}}">login</a>
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
            <h1 style="margin-top: 150px; color: whitesmoke;">Motherhood</h1><br>
            <div class="container mt-5">
                <div class="link">
                    <a href="#mom">Life as a Mom</a>
                    <a href="#beauty">Beauty</a>
                    <a href="#emotional">Emotional Wellness</a>


                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Life as a Mom-->
        <h1 id="mom">Life as a Mom</h1><hr>
        <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/10.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">10 energy-boosting foods</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#mom1Content" aria-expanded="false" aria-controls="firstContent"> - 10 Energy-Boosting Foods to Keep You Going <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="mom1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>1-Eggs</strong></a> <br>
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>2-Oatmeal</strong></a> <br>
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>3-Apples</strong></a> <br>
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>4-Pumpkin</strong></a> <br>
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>5-Salmon</strong></a> <br>
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>6-Peanuts</strong></a> <br>
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>7-Trail mix</strong></a> <br>
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>8-Lentils</strong></a> <br>
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>9-Yogurt</strong></a> <br>
                                    <a href="https://www.babycenter.com/family/motherhood/10-energy-boosting-foods_10352389"> <strong>10-Hummus</strong></a> <br>
                                </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/lay.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> 40 ways to entertain your kids while lying down </h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#mom2Content" aria-expanded="false" aria-controls="firstContent"> - 40 Parent-Approved Activities to Entertain Kids While You Rest <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="mom2Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/family/motherhood/40-ways-to-entertain-your-kids-while-lying-down_10350158"> <strong>Find out more ...</strong></a>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/gamm.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">The unexpected gamer in the family: Mom </h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#game1Content" aria-expanded="false" aria-controls="firstContent"> - Gaming Habits Among Mom<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="game1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/family/motherhood/moms-video-games_41001392"> <strong>Learn More...</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!-- Beauty-->
        <h1 id="beauty">Beauty</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/Beauty.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Moms say: How to get ready fast</h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#be1Content" aria-expanded="false" aria-controls="firstContent"> -Tips for Managing Busy Family Life: <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="be1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/family/motherhood/moms-say-how-to-get-ready-fast_10338921"> <strong>Learn more ...</strong></a>

                                </div>
                            </div>
                        </li>

                    </ul>


                </div>
            </div>
        </div>
        <hr>
        <!-- Emotional Wellness-->
        <h1 id="emotional">Emotional Wellness</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/fear.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title">Top 5 parenting fears and what you can do about them </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#fearContent" aria-expanded="false" aria-controls="firstContent"> - Parenting Fears vs. Reality <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="fearContent">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/family/motherhood/top-5-parenting-fears-and-what-you-can-do-about-them_3656609"> <strong> Learn more...</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/self.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> The benefits of self-care for new and expecting parents </h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#question1Content" aria-expanded="false" aria-controls="h1Content"> - Importance, Strategies, and Tips <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="question1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/family/motherhood/the-benefits-of-self-care-for-new-and-expecting-parents_40007070"> <strong>Find out Here...</strong></a>
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
