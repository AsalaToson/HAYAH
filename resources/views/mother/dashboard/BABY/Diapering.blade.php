
@extends('mother.dashboard.BABY.parent')
@section('title','HAYAH HOSPITAL "Relationships')


@section('content')


    <!-- <link rel="stylesheet" href="css/style.css')}}"> -->

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
            margin-top: 50px;

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
                <a class="navbar-brand" href="{{route('dashboard.mother',[Auth::guard('web')->user()->id])}}">
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
            <h1 style="margin-top: 150px;">Diapering</h1><br>

            <div class="container mt-5">
                <div class="link">
                    <a href="#poop">Baby Poop 101</a>
                    <a href="#rash">Diaper Rash (birth to 12 mo.)</a>
                    <a href="#diaper">Diapering Basics</a>
                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Baby Poop 101-->
        <h1 id="poop">Baby Poop 101</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/diaperr.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Baby poop: Everything new parents need to know</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#poop" aria-expanded="false" aria-controls="firstContent"> *"Baby Poop 101: Understanding Variations, Colors, and When to Seek Help" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="poop">
                                <div class=" card-body" >

                                    <a href="https://www.babycenter.com/baby/diapering/baby-poop-guide_10319333"> <strong>-What does newborn poop look like? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/baby-poop-guide_10319333"> <strong>-Does breastfed baby poop look different than formula-fed poop? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/baby-poop-guide_10319333"> <strong>-How often should my baby poop? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/baby-poop-guide_10319333"> <strong>-Why is there mucus in baby poop? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/baby-poop-guide_10319333"> <strong>-Baby poop colors </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/baby-poop-guide_10319333"> <strong>-How does baby poop change once we start solids? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/baby-poop-guide_10319333"> <strong>-What changes in baby poop could signal a problem? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/baby-poop-guide_10319333"> <strong>-When should I call the doctor about my baby poop? </strong></a> <br>
                                </div>
                            </div>
                        </li>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                     <img src="{{asset('site/baby/images/pooop.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Is it normal that my newborn poops after every feeding? </h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#poop2Content" aria-expanded="false" aria-controls="firstContent"> *"Understanding Newborn Poop Frequency: What Normal and When to Worry" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="poop2Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/diapering/is-it-normal-for-my-baby-to-poop-after-every-feeding_3652446"> <strong>-How often should a newborn poop?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/is-it-normal-for-my-baby-to-poop-after-every-feeding_3652446"> <strong>-How long can a baby go without pooping?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/is-it-normal-for-my-baby-to-poop-after-every-feeding_3652446"> <strong>-Should I ever be worried about my baby pooping a lot?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/is-it-normal-for-my-baby-to-poop-after-every-feeding_3652446"> <strong>- If my baby is pooping a lot, are they more prone to diaper rash? </strong></a> <br>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/poop3.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title"> Baby poop guide: 11 types of baby poop </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#poop3" aria-expanded="false" aria-controls="firstContent"> * 12 Types of Baby Poop <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="poop3">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/8DfHwS01RVA?si=umuab43Nc8UJZyaK"> <strong> Watch Here....</strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!--Diaper Rash (birth to 12 mo.)-->
        <h1 id="rash">Diaper Rash (birth to 12 mo.)</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/rash.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Yeast diaper rash</h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#rash1Content" aria-expanded="false" aria-controls="firstContent"> *"Conquering Yeast Diaper Rash: Causes, Symptoms, Treatment, and Prevention Strategies"<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="rash1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/diapering/yeast-diaper-rash_10913"><strong>-Yeast diaper rash causes </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/yeast-diaper-rash_10913"><strong>-Yeast diaper rash symptoms </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/yeast-diaper-rash_10913"><strong>-Yeast diaper rash treatment </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/yeast-diaper-rash_10913"><strong>-What s the best way to keep my baby s bottom clean so it heals? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/yeast-diaper-rash_10913"><strong>-Can a yeast diaper rash be prevented? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/yeast-diaper-rash_10913"><strong>-Do cloth diapers help prevent a yeast diaper rash? </strong></a>
                                </div>
                            </div>
                        </li>
                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/rash2.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> How to treat diaper rash </h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#rash2Content" aria-expanded="false" aria-controls="l1Content"> *"Diaper Rash Demystified: Types, Causes, Symptoms, Treatment, and Duration" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="rash2Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/diapering/diaper-rash_81"> <strong>-What is diaper rash?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/diaper-rash_81"> <strong>-Types of diaper rash</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/diaper-rash_81"> <strong>-What causes diaper rash?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/diaper-rash_81"> <strong>-What does diaper rash look like?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/diaper-rash_81"> <strong>-How to treat diaper rash</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/diapering/diaper-rash_81"> <strong>-How long does diaper rash last?</strong></a> <br>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/momr.jpg')}}" alt="" height="230px">
                        <div class="card-body">
                            <h4 class="card-title">5 tips for treating diaper rash </h4>
                        </div>

                    </div>
                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#rash3Content" aria-expanded="false" aria-controls="l1Content">  watch Now <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="rash3Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/uBbFO3hadbg?si=A59q-RaGNAFI0yzz"> <strong>Find out here..</strong></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <!--Diapering Basics-->
        <h1 id="diaper">Diapering Basics</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src={{asset('site/baby/images/dadd.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title">Parents say: Difficult diaper changes </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#dad1Content" aria-expanded="false" aria-controls="firstContent"> -15 Strategies for Successful Potty Training <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="dad1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/diapering/parents-say-difficult-diaper-changes_10414746"> <strong>Find out here.. </strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/fff.webp')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">3 ways to change a diaper in public </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#dad2Content" aria-expanded="false" aria-controls="h1Content"> -5 things to keep in mind while changing a babys diaper in public <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="dad2Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/JJZh5eW53AI?si=MPYUoMqL_CCRaYwf"> <strong> Watch Here.. </strong></a>
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
