<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="HAYAH Responsive web " />
    <title> HAYAH HOSPITAL "Preparing For Baby" </title>
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('site/assets/css/style-starter.css')}}">
    <link href="{{asset('site/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href=""{{asset('site/css/main.css')}}">
    <link rel="stylesheet" href=""{{asset('site/css/bootstrap.css')}}">
    <link rel="stylesheet" href=""{{asset('site/assets/css/style-starter.css')}}">


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
            height: 200px;
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
                    <img  src="{{asset('site/assets/images/logo2.png')}}" alt="logo"  style="height: 75px; width: 400px;" >

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
            <h1 style="margin-top: 140px;"> Preparing For Baby</h1><br>
            <div class="row">
                <!-- Image Div -->
                <div class="col-md-6">
                    <img  src="{{asset('site/pregnancy/images/couplejpg.jpg')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <p class="home">
                            Preparing for a baby is one of the best parts of pregnancy. If you're having a baby shower, we have ideas for baby shower games,
                            activities, and favors. We also have tips on setting up your baby's nursery and making sure it's safe
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="link">
                    <a href="#shower">Baby Shower</a>
                    <a href="#nursery">Nursery</a>
                    <a href="#announcements">Announcements</a>
                    <a href="#prep">Baby Prep</a>
                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Baby Shower-->
        <h1 id="shower">Baby Shower</h1><hr>
        <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/shower.jpg')}}" class="card-img-top" alt="Image 1" style="height: 200px;">
                        <div class="card-body">
                            <h4 class="card-title">Baby shower planning</h4>
                            <p class="card-text">
                                ": Everything you need to know"
                            </p>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sh1Content" aria-expanded="false" aria-controls="firstContent"> * When to have a baby shower? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sh1Content">
                                <div class=" card-body" >

                                    Baby showers typically occur one or two months before the due date but can be scheduled earlier or even after the baby's arrival due to cultural or logistical reasons.<br/>
                                    The key is to coordinate with the parents-to-be, choose a suitable date, and ensure ample time for guests to shop from the registry.

                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#sh2Content" aria-expanded="false" aria-controls="secondContent"> * Who should host the baby shower <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="sh2Content">
                                <div class=" card-body">
                                    Traditionally, it was seen as impolite for family to host baby showers,
                                    but modern etiquette is more accepting, allowing anyone close to the parents-to-be to organize one, though it's still uncommon for the mom-to-be or grandparents-to-be to host.                        </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#sh3Content" aria-expanded="false" aria-controls="thirdContent"> * When to send baby shower invitations <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="sh3Content">
                                <div class=" card-body">
                                    Send out invitations at least three weeks in advance via mail, email, or social media event, including all essential details and the option to RSVP. <br/>
                                    Additionally, mentioning the shower theme and any baby registry information can be helpful for guests.
                                </div>
                            </div>
                        </li>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/fun.jpg')}}" class="card-img-top" alt="Image 2"  style="height: 200px;">
                        <div class="card-body">
                            <h4 class="card-title"> Fun ideas for your gender reveal party </h4>
                            <p class="card-text">
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#id1Content" aria-expanded="false" aria-controls="firstContent"> *  "Great Ideas"  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="id1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/pregnancy/preparing-for-baby/7-hot-ideas-for-your-gender-reveal-party_10365580"><strong>Find out here</strong></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#id2Content" aria-expanded="false" aria-controls="secondContent"> *  10 gender-reveal party ideas <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="id2Content">
                                <div class=" card-body">
                                    <a href="https://youtu.be/TqyrV77MCdc?si=yPqtKhUpkLKbcxM8"><strong>watch now!!</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>


            </div>
        </div>

        <hr>
        <!--Nursery-->
        <h1 id="nursery">Nursery</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/sleeep.jpg')}}" class="card-img-top" alt="Image 1"  style="height: 175px;">
                        <div class="card-body">
                            <h4 class="card-title">Tips for creating a safe nursery</h4>
                            <p class="card-text">
                                "Supporting Bonding and Equality in Parenting"
                            </p>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#bas1Content" aria-expanded="false" aria-controls="firstContent"> * Know the basics of crib safety<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="bas1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/pregnancy/preparing-for-baby/creating-a-safe-nursery-10-mistakes-to-avoid_10414382#slide_464992"><strong>HERE....</strong></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#bas2Content" aria-expanded="false" aria-controls="d2Content"> * Find safe nursery window treatments <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="bas2Content">
                                <div class=" card-body">

                                    <a href="https://www.babycenter.com/pregnancy/preparing-for-baby/creating-a-safe-nursery-10-mistakes-to-avoid_10414382#slide_464992"><strong>HERE....</strong></a>

                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#bas3Content" aria-expanded="false" aria-controls="thirdContent"> * Store toys safely<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="bas3Content">
                                <div class=" card-body">
                                    <a href="https://www.babycenter.com/pregnancy/preparing-for-baby/creating-a-safe-nursery-10-mistakes-to-avoid_10414382#slide_464992"><strong>HERE....</strong></a>


                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/rohh.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> DIY dream nursery: Small space</h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#mama1Content" aria-expanded="false" aria-controls="l1Content"> * Dream Nursery <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="mama1Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/Aei6Vz2-Vgw?si=3dY2r7J2LUWnhH_x"><strong>Watch Here...</strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/mul.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> DIY dream nursery: Multiple children</h4>

                        </div>
                    </div>
                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#nu1Content" aria-expanded="false" aria-controls="l1Content"> * " Personalized Spaces, Clutter-Free Environment"<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="nu1Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/rZ1bpEBK0QA?si=BLjTECkZ2ZWqrCOE"><strong>Watch Here ....</strong></a>
                                </div>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <!--Announcements-->
        <h1 id="announcements">Announcements</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/annn.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> Cute pregnancy announcement ideas to share your news</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ann1Content" aria-expanded="false" aria-controls="firstContent"> * Special ways to tell your partner you’re pregnant <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ann1Content">
                                <div class=" card-body" >
                                    1. Take the pregnancy test together for an immediate shared experience.<br/>
                                    2. Surprise them with a new parent T-shirt hanging in the closet.<br/>
                                    3. Spell out "Oh baby" or "I'm pregnant" on their favorite pizza.<br/>
                                    4. Plan a couple's photo shoot and reveal the news at the end for a captured reaction.<br/>
                                    5. Leave the positive pregnancy test in plain sight for an unmistakable announcement.<br/>
                                    6. Serve their coffee in a personalized mug with a surprise message at the bottom.<br/>
                                    7. Box up the positive test as a gift, adding a note with the due date for an extra touch.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ann2Content" aria-expanded="false" aria-controls="firstContent"> * Tips to tell your older children about a baby on the way <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ann2Content">
                                <div class=" card-body" >
                                    - Bring home balloons in blue, pink, or yellow to announce the news.<br/>
                                    - Gift big sibling T-shirts along with a matching onesie for the new baby.<br/>
                                    - Read "You Were the First" by Patricia MacLachlan to gently introduce the new baby.<br/>
                                    - Present a gift from the baby on the way, like a small toy or stuffed animal.<br/>
                                    - Announce the news with sidewalk chalk on the driveway, allowing big siblings to add their own artwork afterward.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ann3Content" aria-expanded="false" aria-controls="firstContent"> * Fun pregnancy announcement ideas for grandparents<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ann3Content">
                                <div class=" card-body" >
                                    - Give Grandma and Grandpa books or a custom photo book of family baby photos.<br/>
                                    - Frame a photo of the ultrasound for a cherished gift.<br/>
                                    - Order a personalized puzzle for them to discover the exciting news.<br/>
                                    - Gift matching T-shirts: "Promoted to Grandma" and "Promoted to Grandpa."<br/>
                                    - Write a heartfelt letter from the baby to show your thoughtfulness.<br/>
                                    - Present hand-knitted baby booties with a message about their return date.<br/>
                                    - Add a charm to Grandma's charm bracelet representing the new baby.<br/>
                                    - Gift Grandpa custom golf balls for his golfing enjoyment.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/partner.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Tips for sharing your pregnancy news with your partner</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#par1Content" aria-expanded="false" aria-controls="h1Content"> * When to tell your partner you are pregnant <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="par1Content">
                                <div class=" card-body" >
                                    - Timing of sharing pregnancy news depends on factors like relationship dynamics and personal preferences.<br/>
                                    - Choose a quiet, distraction-free setting for the conversation.<br/>
                                    - In-person sharing is preferred, but exceptions are okay for partners who are not locally available.<br/>
                                    - Be prepared for a range of emotions and prioritize open, honest communication.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#par2Content" aria-expanded="false" aria-controls="secondContent"> * How to tell a partner you’re pregnant after TTC<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="par2Content">
                                <div class=" card-body">
                                    - Positive pregnancy test can evoke mixed emotions.<br/>
                                    - Give partner space to process their feelings.<br/>
                                    - Use clear, direct phrases when sharing the news.<br/>
                                    - Be open to their reaction, even if unexpected.<br/>
                                    - Inform partner soon to allow time for celebration and preparation.
                                </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#par3Content" aria-expanded="false" aria-controls="secondContent"> * How to tell a partner you’re pregnant when TTC after having a miscarriage or loss <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="par3Content">
                                <div class=" card-body">
                                    - Pregnancy after loss or fertility struggles can evoke mixed emotions.<br/>
                                    - Create a safe space with your partner to discuss feelings and fears.<br/>
                                    - Discuss ways to support each other throughout the pregnancy.<br/>
                                    - Share the news creatively and prioritize self-care.<br/>
                                    - Regularly check in with each other and seek support from healthcare providers.
                                </div>
                        </li>

                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/llllll.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">8 ways to tell your partner you're pregnant</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#par4Content" aria-expanded="false" aria-controls="h1Content"> * "Creative Ways to Share the Pregnancy News with Your Partner"  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="par4Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/pm_KQeHBs1s?si=8-hxgWY1KoV3kJN5"> <strong>Find out more</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>



            </div>
        </div>
        <hr>

        <!-- Baby Prep-->
        <h1 id="prep">Baby Prep</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/nes.jpg')}}" class="card-img-top" alt="Image 4"  style="height: 175px;">
                        <div class="card-body">
                            <h4 class="card-title"> Nesting during pregnancy</h4>
                            <p class="card-text">
                                "Harnessing Third Trimester Energy for Baby Preparation"
                            </p>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#nest1Content" aria-expanded="false" aria-controls="firstContent"> * What is nesting? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="nest1Content">
                                <div class=" card-body" >
                                    - Nesting: Instinctual preparation of home for baby's arrival during pregnancy.<br/>
                                    - Involves bursts of energy, cleaning, organizing.<br/>
                                    - Not a medical condition, not diagnosed by healthcare providers.<br/>
                                    - Limited research, but pregnant women spend more time on home tasks.<br/>
                                    - Protective behaviors like being selective about company and staying close to home are common.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#nest2Content" aria-expanded="false" aria-controls="firstContent"> * When does nesting start? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="nest2Content">
                                <div class=" card-body" >
                                    - Nesting often peaks in the third trimester but can start as early as 24 weeks.<br/>
                                    - No medical evidence directly links nesting to imminent labor.<br/>
                                    - Some women nest months before their due date.<br/>
                                    - Nesting reflects preparation for the baby's arrival rather than a sign of impending labor.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#nest3Content" aria-expanded="false" aria-controls="firstContent"> * What to do while nesting during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="nest3Content">
                                <div class=" card-body" >
                                    - Nesting is a productive phase to tackle household tasks before the baby arrives.<br/>
                                    - Tasks range from practical chores to emotional preparation for parenthood.<br/>
                                    - Common tasks include meal prepping, shopping for baby items, organizing baby clothes, cleaning, stocking up on supplies, packing the hospital bag, and planning birth announcements.<br/>
                                    - Be mindful of not overdoing it, considering third-trimester exhaustion.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img  src="{{asset('site/pregnancy/images/final.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">5 things new parents can (and should) ask for from family and friends </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#way1Content" aria-expanded="false" aria-controls="h1Content"> * A Mother's Advice on Asking for Help with a New Baby <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="way1Content">
                                <div class=" card-body" >
                                    <strong>1. Food</strong> <br/>
                                    <strong>2. Diapers and more diapers!</strong> <br/>
                                    <strong>3. Babysitting</strong> <br/>
                                    <strong>4. Cleaning</strong><br/>
                                    <strong>5. Errands </strong><br/>
                                    <a href="https://www.babycenter.com/pregnancy/preparing-for-baby/5-things-new-parents-can-and-should-ask-for-from-family-and_41001530"> <strong>Find Out MOre....</strong></a>
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


<!-- footer -->
<section class="w3l-footer-29-main" >
    <div class="footer-29 py-5" style="margin-bottom: 0px;">
        <div class="container py-lg-4" >
            <div class="row footer-top-29" style="margin-top: 5px; ">
                <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                    <div class="footer-logo mb-3">
                        <a class="navbar-brand" href="index.html"><span class="fa fa-heartbeat"> </span> HAYAH</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit.</p>
                    <ul class="mt-3">
                        <li><a href="tel:+(21) 255 999 8888"><span class="fa fa-phone"></span> +(02) 123456789</a></li>
                        <li><a href="HAYAH@gmail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                                HAYAH</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">
                    <h6 class="footer-title-29">History</h6>
                    <ul >
                        <li ><a href="about.html">About Us</a></li>
                        <li><a href="blog.html"> Blog Posts</a></li>
                        <li><a href="services.html">Departments</a></li>
                        <li><a href="#careers"> Careers</a></li>
                        <li><a href="about.html">Team</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">Useful Links</h6>
                    <ul>
                        <li><a href="#terms">Terms of service</a></li>
                        <li><a href="#privacy"> Privacy policy</a></li>
                        <li><a href="#doc"> Documentation</a></li>
                        <li><a href="#support"> Support</a></li>
                        <li><a href="#components"> Components</a></li>
                        <li><a href="#changelog"> Changelog</a></li>
                    </ul>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">Subscribe to our Newsletter </h6>
                    <p>Enter your email and receive the latest news, updates and special offers from us.</p>

                    <form action="#" class="subscribe" method="post">
                        <input type="email" name="email" placeholder="Your Email Address" required="">
                        <button class="btn btn-style btn-primary w-100 mt-3">Subscibe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //footer -->

<!-- copyright -->
<section class="w3l-copyright">
    <div class="container">
        <div class="row bottom-copies" style="margin-top: 5px; margin-bottom: 0px;">
            <p class="col-lg-8 copy-footer-29" style="text-align: left; ">© 2024 Design By HAYAH Team <a
                    href="#" target="_blank">
                    HAYAH</a></p>

            <div class="col-lg-4 main-social-footer-29">
                <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
            </div>

        </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>
<!-- //copyright -->
<!--//footer-->
<!-- Template JavaScript -->
<script  src="{{asset('site/pregnancy/assets/js/jquery-3.3.1.min.js')}}"></script>
<script  src="{{asset('site/pregnancy/assets/js/theme-change.js')}}"></script>
<!-- owl carousel -->
<script  src="{{asset('site/pregnancy/assets/js/owl.carousel.js')}}"></script>
<!-- script for tesimonials carousel slider -->
<script>
    $(document).ready(function () {
        $("#owl-demo2").owlCarousel({
            loop: true,
            nav: false,
            margin: 50,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                },
                991: {
                    items: 2,
                    margin: 30,
                    nav: false
                },
                1080: {
                    items: 3,
                    nav: false
                }
            }
        })
    })
</script>
<!-- //script for tesimonials carousel slider -->
<!-- stats number counter-->
<script  src="{{asset('site/pregnancy/assets/js/jquery.waypoints.min.js')}}"></script>
<script  src="{{asset('site/pregnancy/assets/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!--//MENU-JS-->


<script  src="{{asset('site/pregnancy/assets/js/bootstrap.min.js')}}"></script>
<script  src="{{asset('site/pregnancy/js/jquery-3.7.1.min.js')}}"></script>
<script  src="{{asset('site/pregnancy/js/popper.min.js')}}"></script>
<script  src="{{asset('site/pregnancy/js/bootstrap.js')}}"></script>

</body>

</html>