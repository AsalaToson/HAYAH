<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="HAYAH Responsive web " />
    <title> HAYAH HOSPITAL "Relationships" </title>
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <!--  CSS -->
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
            margin: 0 5px;
            padding: 5px 5px;
            /* border: 1px solid #ff00d9; */
            border-radius: 25px;
            color:white;
            text-decoration: none;
            text-decoration: none;
            transition: color 0.3s, transform 0.3s;
            position: relative;
            overflow: hidden;
            text-align: center;
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
                            <a class="nav-link scroll" href="#">Home</a>
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
            <h1 style="margin-top: 140px;">Relationships</h1><br>
            <div class="row">
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="{{asset('site/pregnancy/images/relajpg.jpg')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>

                        <p class="home">
                            Pregnancy changes relationships, but there are lots of good ways to keep your partner involved in your pregnancy and your baby's birth.
                            Your partner may be acting weird – and even having bizarre dreams – but it's all part of the journey toward parenthood.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="link">
                    <a href="#partner">For Partners</a>
                    <a href="#relation">Pregnancy & Relationships</a>

                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- For Partners-->
        <h1 id="partner">For Partners</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/Support.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title"> How to support a woman in labor: A childbirth cheat sheet for partners</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#supp1Content" aria-expanded="false" aria-controls="firstContent"> * Know how to recognize the signs of labor <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="supp1Content">
                                <div class=" card-body" >
                                    - Braxton Hicks contractions are common in late pregnancy. <br>
                                    - They are typically painless tightening sensations. <br>
                                    - True labor signs include: <br>
                                    1. Water breaking, resulting in a trickle or gush of fluid. <br>
                                    2. Persistent lower back pain resembling a crampy, premenstrual feeling. <br>
                                    3. Contractions occurring at regular intervals, becoming stronger and longer. <br>
                                    4. Passing of the mucus plug from the cervix. <br>
                                    - These signs indicate that labor may be imminent or progressing.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#supp2Content" aria-expanded="false" aria-controls="secondContent"> * Know what to expect during labor <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="supp2Content">
                                <div class=" card-body">
                                    Prepare for labor by attending childbirth classes and understanding the three stages: <br>
                                    1. First stage: Early, active, and transition phases. <br>
                                    2. Second stage: Pushing and birth. <br>
                                    3. Third stage: Delivery of the placenta. <br>
                                    Be familiar with what to expect during each stage to support your partner effectively.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#supp3Content" aria-expanded="false" aria-controls="thirdContent"> * Be flexible with the birth plan <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="supp3Content">
                                <div class=" card-body">
                                    - Discuss childbirth plans early <br>
                                    - Create a birth plan together <br>
                                    - Be flexible during labor <br>
                                    - Prioritize partner's well-being
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#supp4Content" aria-expanded="false" aria-controls="thirdContent"> * more advices <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="supp4Content">
                                <div class=" card-body">
                                    <a href="https://www.babycenter.com/pregnancy/relationships/a-childbirth-cheat-sheet-for-dads-to-be_8244"> <strong> Find Out More</strong> </a>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/R (3).jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title">Labor and delivery: Four ways a partner can help </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#help1Content" aria-expanded="false" aria-controls="firstContent"> * learn four ways you can help. <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="help1Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/2uEG24kBLSc?si=yfstVWoOaQxdhIhR">  <strong>Watch Here</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/kick.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">When will my partner feel the baby kick? </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#feel1Content" aria-expanded="false" aria-controls="firstContent"> * "Feeling Baby's Movements: When Partners Can Join the Experience"<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="feel1Content">
                                <div class=" card-body" >
                                    Baby's movements felt by partner: Weeks 20-24 <br>
                                    Partner can place hand on belly to feel <br>
                                    Variations in timing due to factors like abdominal thickness <br>
                                    Unique experiences for each pregnancy <br>
                                    Movements may become visible externally over time
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!--Pregnancy & Relationships-->
        <h1 id="relation">Pregnancy & Relationships</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/relationnn.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">How to plan the best babymoon so you can relax before your baby comes</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#rela1Content" aria-expanded="false" aria-controls="firstContent"> * What is a babymoon? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="rela1Content">
                                <div class=" card-body" >
                                    - A babymoon is a pre-baby vacation. <br>
                                    - It's a final getaway before parenthood. <br>
                                    - Couples can use it for romantic time together. <br>
                                    - It's also a chance to celebrate family milestones. <br>
                                    - Activities during a babymoon range from bonding to relaxation or adventure.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#rela2Content" aria-expanded="false" aria-controls="d2Content"> * Babymoon do's and don'ts <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="rela2Content">
                                <div class=" card-body">
                                    For a successful babymoon: <br>
                                    - Consider weather conditions. <br>
                                    - Avoid overexertion. <br>
                                    - Seek adventure if up for it. <br>
                                    - Keep it simple if desired. <br>
                                    - Day trips are convenient. <br>
                                    - Choose destinations with good food options. <br>
                                    - Enjoy time with loved ones if desired. <br>
                                    - Opt for the second trimester.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/ddddd.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Domestic violence and pregnancy </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#dom1Content" aria-expanded="false" aria-controls="l1Content"> * How common is domestic violence in pregnancy?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="dom1Content">
                                <div class=" card-body" >
                                    - Domestic violence crosses all demographics, affecting individuals regardless of age, race, religion, or socioeconomic status. <br>
                                    - Victims often don't report abuse due to shame, self-blame, or fear. <br>
                                    - Domestic violence is a top cause of injury to women aged 15 to 44 in the U.S., resulting in three deaths daily. <br>
                                    - Quick recognition and seeking help are vital. <br>
                                    - Federal and state laws aim to prosecute offenders and support victims, but more action is needed.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#dom2Content" aria-expanded="false" aria-controls="secondContent"> * Can my pregnancy reform an abusive partner? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="dom2Content">
                                <div class=" card-body">
                                    - Pregnancy is unlikely to change an abusive partner's behavior <br>
                                    - Stress during pregnancy can trigger domestic violence <br>
                                    - Promises of change from an abuser should be approached with caution <br>
                                    - Abuse often follows a cycle: tension builds, violence occurs, followed by a honeymoon phase <br>
                                    - Abusers commonly blame their victims, leading victims to believe the abuse is their fault
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#dom3Content" aria-expanded="false" aria-controls="thirdContent"> * What are the effects of domestic violence on babies? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="dom3Content">
                                <div class=" card-body">
                                    - Domestic violence during pregnancy poses risks to both mother and baby. <br>
                                    - Abusers may restrict access to prenatal care, leading to potential health complications. <br>
                                    - Prolonged stress from abuse can result in heart disease, high blood pressure, and mental health issues for the mother. <br>
                                    - Children in abusive households face a heightened risk of abuse and long-term psychological problems. <br>
                                    - Witnessing violence can lead to children developing violent tendencies or entering abusive relationships later in life.
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/OIP (5).jpg')}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title"> How to help your partner understand what it really feels like to be pregnant</h4>
                            <p class="card-text">
                            </p>
                        </div>
                    </div>
                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#helppContent" aria-expanded="false" aria-controls="l1Content">  A DIY Guide to Understanding Pregnancy Togethe<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="helppContent">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/d2s5XeTdpwc?si=ESLUReHezpNUJZEh"> <strong> watch video here</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <hr>
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
<script src="{{asset('site/pregnancy/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('site/pregnancy/assets/js/theme-change.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('site/pregnancy/assets/js/owl.carousel.js')}}"></script>
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
<script src="{{asset('site/pregnancy/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('site/pregnancy/assets/js/jquery.countup.js')}}"></script>
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


<script src="{{asset('site/pregnancy/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/pregnancy/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('site/pregnancy/js/popper.min.js')}}"></script>
<script src="{{asset('site/pregnancy/js/bootstrap.js')}}"></script>

</body>

</html>
