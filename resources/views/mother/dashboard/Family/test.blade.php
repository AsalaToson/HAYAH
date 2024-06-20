@extends('mother.dashboard.BABY.parent')
@section('title',' HAYAH HOSPITAL "Staying"')

@section('content')

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
                            <a class="nav-link scroll" href="{{route('family.home')}}">Family</a>
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
            <h1 style="margin-top: 150px;"> Working or Staying Home</h1><br>
            <div class="container mt-5">
                <div class="link">
                    <a href="#stay">Stay-at-Home Parents</a>
                    <a href="#work">Working Parents</a>

                </div>
            </div>

        </div>

        <hr>
        <!-- container -->
        <!-- Stay-at-Home Parents-->
        <h1 id="stay" style="margin-top: 50px;">Stay-at-Home Parents</h1><hr>
        <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/stayy.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Thinking about being a stay-at-home parent? Here's what to consider</h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#stay1Content" aria-expanded="false" aria-controls="firstContent"> - Prevalence, Pros and Cons, and Considerations <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="stay1Content">
                                <div class=" card-body" >

                                    <a href="https://www.babycenter.com/family/working-or-staying-home/staying-at-home-pros-and-cons_6025"> <strong>Find out here..</strong></a>
                                </div>
                            </div>
                        </li>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/ppp.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Navigating life as a stay-at-home parent </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#par2Content" aria-expanded="false" aria-controls="firstContent"> - Thriving as a Stay-at-Home Parent: Addressing Common Concerns and Finding Balance  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="par2Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/family/working-or-staying-home/stay-at-home-parents-overview_5959"> <strong>Learn more ....</strong></a>
                                </div>
                            </div>
                        </li>



                    </ul>

                </div>


            </div>
        </div>

        <hr>
        <!--Working Parents-->
        <h1 id="work">Working Parents</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/babyy.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">How to work from home with a baby or toddler</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#work1Content" aria-expanded="false" aria-controls="firstContent"> - Balancing Work and Parenting: Tips for Success<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="work1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/family/working-or-staying-home/successful-strategies-for-working-at-home_4177"><strong> Find Out Here....</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>


                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/family/images/fam.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">What I wish I'd known about juggling work and family</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#work2Content" aria-expanded="false" aria-controls="firstContent"> -  Managing Parenthood and Work: Key Strategies <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="work2Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/family/working-or-staying-home/what-i-wish-id-known-about-juggling-work-and-family_1475813"><strong> Find Out Here....</strong></a>
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
