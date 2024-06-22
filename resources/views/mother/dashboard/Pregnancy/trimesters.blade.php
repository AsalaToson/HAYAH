<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="HAYAH Responsive web " />
    <title> HAYAH HOSPITAL "Trimesters" </title>
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <!--  CSS -->
    <link rel="stylesheet" href="../assets/css/style-starter.css">
    <link href="../css/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../animate/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style-starter.css">

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
            /*border: 1px solid #ff00d9;*/
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
                    <img src="../assets/images/logo2.png" alt="logo"  style="height: 75px; width: 400px;" >

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
                            <a class="nav-link scroll" href="{{asset('site/index.html')}}">Home</a>
                        </li>

                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('service.show',[Auth::guard('mother')->user()->id])}}">Our Services</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{asset('site/pregnancy/home.html')}}">pregnancy</a>
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
                            <a class="nav-link scroll" href="{{asset('site/login/login.html')}}">login</a>
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
            <h1 style="margin-top: 140px;">Trimesters</h1><br>
            <div class="row">
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="images/tri.jpg" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>

                        <p class="home">
                            Pregnancy trimesters mean that your pregnancy is divided into three phases: the first trimester,
                            second trimester, and third trimester. Each trimester is 13 or 14 weeks long to equal 40 weeks of pregnancy. The first trimester lasts until you're 13 weeks pregnant, the second trimester spans week 14 to week 27, and the third trimester starts the day you turn 28 weeks pregnant and lasts until week 40 –
                            though you're likely to deliver your baby a few weeks before or after that.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="link">
                    <a href="#First">First Trimester</a>
                    <a href="#Second">Second Trimester</a>
                    <a href="#Third">Third Trimester</a>

                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- First Trimester-->
        <h1 id="First">First Trimester</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="images/download (1).jpg" class="card-img-top" alt="Image 1" style="height: 170px;">
                        <div class="card-body">
                            <h4 class="card-title">Checklist: First trimester</h4>
                            <p class="card-text">

                                "First Trimester Pregnancy: Prioritizing Health and Wellness"                    </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#checkContent" aria-expanded="false" aria-controls="firstContent"> * 30 Things To Do In The First 13 Weeks of Pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="checkContent">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/Ur5p3C9YSe0?si=vQgZxrhHhnMSem7T"> <strong>Watch Here</strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="images/stages.jpg" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> First Trimester:Inside Pregnancy  </h4>
                            <p class="card-text">

                                "Baby Size from week 1 : 13"
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ins1Content" aria-expanded="false" aria-controls="firstContent"> *Video: Week By Week<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ins1Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/nEo06vTGgWE?si=RkSgh6A6D2bNee2t"> <strong>Week 4</strong></a> <br>
                                    <a href="https://youtu.be/SweS2IRqwPQ?si=FVYRwCrMscXlgxzU"> <strong>Week 5</strong></a> <br>
                                    <a href="https://youtu.be/N2UPjGxfkIY?si=W0fCBK0nsx48EzOC"> <strong>Week 6</strong></a> <br>
                                    <a href="https://youtu.be/SVB2PeX4ntM?si=OgGzRC37tOcZWYkb"> <strong>Week 7</strong></a> <br>
                                    <a href="https://youtu.be/6ny7V_Iu0tk?si=4lXW_DvQagmN7OAf"> <strong>Week 8</strong></a> <br>
                                    <a href="https://youtu.be/7Y9-BRU2x4k?si=i60wlSgi1TEALGRM"> <strong>Week 9</strong></a> <br>
                                    <a href="https://youtu.be/HLBiatFmGao?si=_0fwX1IvTkzFsjn2"> <strong>Week 10</strong></a> <br>
                                    <a href="https://youtu.be/qy400Tw8TCw?si=-PDLzaowoX8VnRLZ"> <strong>Week 11</strong></a> <br>
                                    <a href="https://youtu.be/umXS58_dzR0?si=7KmvcG1k8be9Jmz-"> <strong>Week 12</strong></a> <br>
                                    <a href="https://youtu.be/KCD59XRD6FU?si=Ld-gKpTFMsoTnEC7"> <strong>Week 13</strong></a> <br>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>


            </div>
        </div>
        <hr>
        <!-- Second Trimester-->
        <h1 id="Second">Second Trimesterr</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="images/OIP (3).jpg" class="card-img-top" alt="Image 1" style="height: 170px;">
                        <div class="card-body">
                            <h4 class="card-title">Checklist: Second trimester</h4>
                            <p class="card-text">

                                "Navigating the Second Trimester: Essential Tasks for Pregnancy"
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#check2Content" aria-expanded="false" aria-controls="firstContent"> *  Things To Do In The Second Trimester of Pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="check2Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/5I2mIbjpaac?si=3ptU9uvJBd4j6nMc"> <strong>Watch Here</strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="images/OIP (4).jpg" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> second Trimester:Inside Pregnancy  </h4>
                            <p class="card-text">

                                "Baby Size from week 14 : 27"
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ins2Content" aria-expanded="false" aria-controls="firstContent"> *Video: Week By Week<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ins2Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/K84JRdcZbAU?si=58s-6am9_z2Us2UG"> <strong>Week 14</strong></a> <br>
                                    <a href="https://youtu.be/uTI5V-ROTbA?si=B_EAEILbg3t5J_UA"> <strong>Week 15</strong></a> <br>
                                    <a href="https://youtu.be/Cs3f9wpjDKs?si=hKy0bKWAB3-gIvM0"> <strong>Week 16</strong></a> <br>
                                    <a href="https://youtu.be/EfiiXgvaezg?si=vojbRDKepkkqe38O"> <strong>Week 17</strong></a> <br>
                                    <a href="https://youtu.be/jmsShFKTOnY?si=f1507KG5qhV8nRpx"> <strong>Week 18</strong></a> <br>
                                    <a href="https://youtu.be/numK6ROaTVU?si=l15PXu715leWwAwV"> <strong>Week 19</strong></a> <br>
                                    <a href="https://youtu.be/XLyo343qyQs?si=AruzaW69DLps1pIh"> <strong>Week 20</strong></a> <br>
                                    <a href="https://youtu.be/-u5Di3lcA8A?si=fAvi1H9oo8ECXE9B"> <strong>Week 21</strong></a> <br>
                                    <a href="https://youtu.be/uD8jMRpI6M4?si=8rFLyZcFBwCdHoVC"> <strong>Week 22</strong></a> <br>
                                    <a href="https://youtu.be/sZ-ZtFOlHmw?si=agp-ZRB3plb7bpqi"> <strong>Week 23</strong></a> <br>
                                    <a href="https://youtu.be/F00k_m7_lfw?si=VeyoVl97RzkvJhXQ"> <strong>Week 24</strong></a> <br>
                                    <a href="https://youtu.be/azFEJq6vn6g?si=DmSDOGQfHC3U8-Df"> <strong>Week 25</strong></a> <br>
                                    <a href="https://youtu.be/b8LGk5tun7Q?si=vqDCvE2tt5yYkT3Y"> <strong>Week 26</strong></a> <br>
                                    <a href="https://youtu.be/BWLdj-2Xe58?si=J-Y4pWPxiiEx8buP"> <strong>Week 27</strong></a> <br>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>


            </div>
        </div>
        <hr>
        <!-- Third Trimester-->
        <h1 id="Third">Third Trimester</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="images/third-trimester-checklist-pin-600x1080.webp" class="card-img-top" alt="Image 1" >
                        <div class="card-body">
                            <h4 class="card-title">Checklist: Third trimester</h4>
                            <p class="card-text">
                                "Countdown to Baby"

                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#check3Content" aria-expanded="false" aria-controls="firstContent"> * "Preparing for Birth: Essential Third Trimester To-Do List" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="check3Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/bkNJpPks99c?si=fdvfh3ruRJQUou-o"> <strong>Watch Here</strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="images/R (2).jpg" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Third Trimester:Inside Pregnancy  </h4>
                            <p class="card-text">

                                "Baby Size from week 28 : 39"
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ins3Content" aria-expanded="false" aria-controls="firstContent"> *Video: Week By Week<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ins3Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/50Mx66lska4?si=ZnVo79Gie1oidpW0"> <strong>Week 28</strong></a> <br>
                                    <a href="https://youtu.be/_z30M4Oom3o?si=N_zUUekrS4Sxt1oh"> <strong>Week 29</strong></a> <br>
                                    <a href="https://youtu.be/EjnJWB9ZuzU?si=F_W-VZNbTtvLZG3B"> <strong>Week 30</strong></a> <br>
                                    <a href="https://youtu.be/asA9iJHSKoo?si=ThhKwDByAjcV6Jgb"> <strong>Week 31</strong></a> <br>
                                    <a href="https://youtu.be/IaO8jfqQ9Uk?si=9m1O1Th2VVG7xMkd"> <strong>Week 32</strong></a> <br>
                                    <a href="https://youtu.be/scVffR9MiLU?si=PokgBls-ZfOO1QZ8"> <strong>Week 33</strong></a> <br>
                                    <a href="https://youtu.be/zGMvEIoDdXE?si=s6jAxWRT8i3lxCpr"> <strong>Week 34</strong></a> <br>
                                    <a href="https://youtu.be/da5_oycSYuE?si=IlUpOtFQJMSgUxoC"> <strong>Week 35</strong></a> <br>
                                    <a href="https://youtu.be/MVSuyWmm85M?si=CFLRZyvkYXa-7YR7"> <strong>Week 36</strong></a> <br>
                                    <a href="https://youtu.be/yFbH0hhLi7Q?si=Luw22uOTy_UZMp_K"> <strong>Week 37</strong></a> <br>
                                    <a href="https://youtu.be/3iMh9Ia_QNo?si=xH-taO0GBYePyFoD"> <strong>Week 38</strong></a> <br>
                                    <a href="https://youtu.be/2iTkw4EQ9Aw?si=GVSG7Unve4ZqePYh"> <strong>Week 39</strong></a> <br>

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
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/theme-change.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.js"></script>
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
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
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


<script src="assets/js/bootstrap.min.js"></script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>

</html>