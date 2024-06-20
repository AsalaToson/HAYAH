@extends('mother.dashboard.BABY.parent')
@section('title','HAYAH HOSPITAL "Relationships')

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
            <h1 style="margin-top: 150px;">Crying & Colic</h1><br>

            <div class="container mt-5">
                <div class="link">
                    <a href="#sooth">Soothing Your Baby</a>
                    <a href="#cry">Why Babies Cry</a>

                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Soothing Your Baby-->
        <h1 id="sooth">Soothing Your Baby</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/paci.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title"> When to introduce a pacifier: Pros and cons </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#paci1Content" aria-expanded="false" aria-controls="firstContent"> -The Pacifier Dilemma: When, Why, and How to Use One for Your Baby <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="paci1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/crying-colic/pacifiers-pros-cons-and-smart-ways-to-use-them_128"> <strong> find out here</strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/thumb.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title">Should I try to stop my baby from sucking their thumb? </h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#thumb1Content" aria-expanded="false" aria-controls="firstContent"> - Know the answer <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="thumb1Content">
                                <div class=" card-body" >
                                    <strong>NO,</strong> <br>
                                    Thumb-sucking is a natural self-soothing behavior in babies and usually isn't harmful. <br>
                                    Most children stop on their own as they develop other ways to comfort themselves.
                                    However, if thumb-sucking continues past age 3 or 4, consult a dentist to avoid potential dental issues.
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/stop.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">When should babies stop using pacifiers? </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#stop1Content" aria-expanded="false" aria-controls="firstContent"> -Pacifier Weaning: When and How to Do It <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="stop1Content">
                                <div class=" card-body" >
                                    <strong>-When to Wean:</strong> No strict rules. The AAP recommends waiting until 12 months to reduce SIDS risk. Many children stop on their own by ages 2-4. <br>
                                    <strong> -Reasons to Wean:</strong> <br>
                                    - Ear Infections: Pacifiers can worsen ear infections. <br>
                                    - Dental Issues: Prolonged use can affect teeth and jaw alignment. <br>
                                    - Speech Development: Can hinder babbling and talking. <br>

                                    <strong>Weaning Methods:</strong> <br>
                                    - Cold Turkey:Immediate removal. <br>
                                    - Gradual Reduction: Limit to naps and bedtime, then phase out. <br>
                                    - Alternatives:Offer a stuffed animal or blanket for comfort (not for babies under 1 year old).
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!--Why Babies Cry-->
        <h1 id="cry">Why Babies Cry</h1><hr>
        <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/Cryy.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">7 reasons babies cry and how to soothe them</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#cry1Content" aria-expanded="false" aria-controls="firstContent"> - Find out....  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="cry1Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/IDG20VjVZmA?si=AATKEhpB_7FSC24j"> <strong>Watch here...</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/cry2.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> What to do when your baby's crying for no reason </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#cry2Content" aria-expanded="false" aria-controls="l1Content"> - Tips and Solutions <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="cry2Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/crying-colic/what-to-do-when-your-baby-cries-for-no-reason_10320516"> <strong>Find Out more...</strong></a>
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
