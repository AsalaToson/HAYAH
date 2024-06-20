
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="HAYAH Responsive web " />
    <title>HAYAH HOSPITAL "PREGNANCY" </title>
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <!--  CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/style-starter.css')}}">
    <link href="{{asset('site/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate/animate.css')}}" rel="stylesheet">
    <style>
        .row{
            margin-top: 200px;
            margin-bottom: 60px;

        }

        p{
            text-align: center;
        }h2{
             color: white;
             font-weight: bold;
             text-align: center;

         }
        .card a img{
            width: 320px;
            border-radius: 15px;
            height: 250px;
            object-fit: cover;
        }
        .card{
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 4px 8px rgba(247, 245, 245, 0.1);
            padding-left: 10px;
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for transform and box-shadow */
            position: relative;
        }
        .card:hover {
            transform: scale(1.1); /* Increase size by 10% */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
            z-index: 1; /* Bring the card to the front */
        }
        .card-title{
            color: whitesmoke;
            font-size: 1.2rem;
            text-align: center;
            padding: 15px;
        }
        .card-body {
            position: relative; /* Needed for z-index to work */
        }
        ul{
            margin-top: 10px;
        }
        ul li{
            margin-bottom: 10px;
        }
        ul li a{
            color: white;
            margin-left: 20px;
        }
        ul li a:hover{
            color: deeppink;
        }
        .see{
            text-decoration: none;
            color:deeppink;
            text-align: center;
        }

        .btn-custom {
            background-color: transparent;
            border: 1px solid gray;
            color: pink;
            font-size: medium;
            width: 80%;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Add transition for background-color and transform */
            border-radius: 25px;
            padding: 10px 15px;
            text-align: center;
            display: block;
            height: 40px;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color:rgb(242, 96, 174) ;
            color: #fff;
            transform: scale(1.08); /* Increase size by 5% on hover */
        }

        .btn-custom .fa {
            margin-left: 5px; /* Add some margin to the right of the icon */
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
        <div class="container mt-5" >
            <div class="row"  >
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="{{asset('site/pregnancy/images/R.jpg')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Pregnancy</h2><br>
                        <p>
                            Welcome to pregnancy! This is the start of an incredible journey. To help you along, we offer info on
                            pregnancy aches and pains, weight gain and nutrition, what's safe during pregnancy and what's not, pregnancy stages,
                            labor and delivery, and more — plus how to sift through all those baby names to find the perfect one.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr >
        <h2>Pregnancy Topics</h2><hr>
        <!-- container -->
        <div class="container mt-5">
            <div class="row" style="margin-top: 10px;">

                <!-- Card 1 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('pregnancy.weekbyweek')}}"><img src="{{asset('site/pregnancy/images/pregnancy-week-40-mom_4x3 (1).jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('pregnancy.weekbyweek')}}" id="title"><h6 class="card-title">pregnancy week by week</h6></a>

                        </div>

                    </div>
                    <ul>
                        <li><a href="{{route('pregnancy.weekbyweek')}}" class="card-link">First Trimester of Pregnancy</a></li>
                        <li><a href="{{route('pregnancy.weekbyweek')}}" class="card-link">Second Trimester of Pregnancy</a></li>
                        <li><a href="{{route('pregnancy.weekbyweek')}}" class="card-link">Third Trimester of Pregnancy</a></li>
                    </ul>
                    <a href="{{route('pregnancy.weekbyweek')}}" class="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="{{route('pregnancy.yourBody')}}"><img src="{{asset('site/pregnancy/images/blobid1661920818080.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('pregnancy.yourBody')}}" id="title"><h5 class="card-title">Your Body</h5></a>
                        </div>
                    </div>
                    <ul>
                        <li><a href="{{route('pregnancy.yourBody')}}" class="card-link">Symptoms</a></li>
                        <li><a href="{{route('pregnancy.yourBody')}}" class="card-link">Labor & Delivery</a></li>
                        <li><a href="{{route('pregnancy.yourBody')}}" class="card-link">Sleep</a></li>
                        <li><a href="{{route('pregnancy.yourBody')}}" class="card-link">Early Signs of Pregnancy</a></li>
                    </ul>
                    <a href="{{route('pregnancy.yourBody')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('pregnancy.yourbaby')}}"><img src="{{asset('site/pregnancy/images/yourbaby.jpg')}}" class="card-img-top" alt="Image 1" ></a>
                        <div class="card-body">
                            <a href="{{route('pregnancy.yourbaby')}}" id="title"><h5 class="card-title">Your Baby</h5></a>

                        </div>
                    </div>
                    <ul>
                        <li><a href="{{route('pregnancy.yourbaby')}}#twin" class="card-link">Twins & More</a></li>
                        <li><a href="{{route('pregnancy.yourbaby')}}#fetal" class="card-link">Fetal Health & Development</a></li>
                        <li><a href="{{route('pregnancy.yourbaby')}}#cord" class="card-link">Cord Blood Banking</a></li>
                    </ul>
                    <a href="{{route('pregnancy.yourbaby')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class="fa fa-angle-double-right"></i></button></a>
                </div>
                <!-- Card 4-->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('pregnancy.diet')}}"><img src="{{asset('site/pregnancy/images/th.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('pregnancy.diet')}}" id="title"><h5 class="card-title">Diet&Fitness</h5></a>

                        </div>
                    </div>
                    <ul>
                        <li><a href="{{route('pregnancy.diet')}}#fitness" class="card-link">Fitness</a></li>
                        <li><a href="{{route('pregnancy.diet')}}#nutrients" class="card-link">Pregnancy Nutrients</a></li>
                        <li><a href="{{route('pregnancy.diet')}}#eating" class="card-link">Healthy Eating</a></li>
                        <li><a href="{{route('pregnancy.diet')}}#food" class="card-link">The Best Foods</a></li>
                    </ul>
                    <a href="{{route('pregnancy.diet')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('pregnancy.Your Life')}}"><img src="{{asset('site/pregnancy/images/working.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('pregnancy.Your Life')}}" id="title"><h5 class="card-title">Your Life</h5></a>

                        </div>
                    </div>
                    <ul>
                        <li><a href="{{route('pregnancy.Your Life')}}#travel" class="card-link">Travel</a></li>
                        <li><a href="{{route('pregnancy.Your Life')}}#work" class="card-link">Work & Career</a></li>
                        <li><a href="{{route('pregnancy.Your Life')}}#life" class="card-link">Emotional Life</a></li>
                        <li><a href="{{route('pregnancy.Your Life')}}#fashion" class="card-link">Beauty & Fashion</a></li>
                    </ul>
                    <a href="{{route('pregnancy.Your Life')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>
                <!-- Card 6 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('pregnancy.PreparingForBaby')}}"><img src="{{asset('site/pregnancy/images/couplejpg.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('pregnancy.PreparingForBaby')}}" id="title"><h5 class="card-title">Preparing For Baby</h5></a>

                        </div>
                    </div>
                    <ul>
                        <li><a href="{{route('pregnancy.PreparingForBaby')}}#shower" class="card-link">Baby Shower</a></li>
                        <li><a href="{{route('pregnancy.PreparingForBaby')}}#nursery" class="card-link">Nursery</a></li>
                        <li><a href="{{route('pregnancy.PreparingForBaby')}}#announcements" class="card-link">Announcements</a></li>
                        <li><a href="{{route('pregnancy.PreparingForBaby')}}#prep" class="card-link">Baby Prep</a></li>
                    </ul>
                    <a href="{{route('pregnancy.PreparingForBaby')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>

                <!-- Card 7 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('pregnancy.Health')}}"><img src="{{asset('site/pregnancy/images/doc.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('pregnancy.Health')}}" id="title"><h5 class="card-title">Health & Safety</h5></a>

                        </div>
                    </div>
                    <ul>
                        <li><a href="{{route('pregnancy.Health')}}#test" class="card-link">Tests & Screening</a></li>
                        <li><a href="{{route('pregnancy.Health')}}#medi" class="card-link">Medications</a></li>
                        <li><a href="{{route('pregnancy.Health')}}#loss" class="card-link">Pregnancy Loss</a></li>
                        <li><a href="{{route('pregnancy.Health')}}#care" class="card-link">Prenatal Care</a></li>
                        <li><a href="{{route('pregnancy.Health')}}#health" class="card-link">Pregnancy Health</a></li>
                        <li><a href="{{route('pregnancy.Health')}}#risk" class="card-link">High Risk Pregnancy</a></li>
                        <li><a href="{{route('pregnancy.Health')}}#vaccines" class="card-link">Vaccines</a></li>
                        <li><a href="{{route('pregnancy.Health')}}#weight" class="card-link">Weight Gain</a></li>
                        <li><a href="{{route('pregnancy.Health')}}#complicate" class="card-link">Complications</a></li>
                    </ul>
                    <a href="{{route('pregnancy.Health')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>
                <!-- Card 8 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="#"><img src="{{asset('site/pregnancy/images/tri.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="trimesters.html" id="title"><h5 class="card-title">Trimesters</h5></a>

                        </div>
                    </div>
                    <ul>
                        <li><a href="trimesters.html#First" class="card-link">First Trimester</a></li>
                        <li><a href="trimesters.html#Second" class="card-link">Second Trimester</a></li>
                        <li><a href="trimesters.html#Third" class="card-link">Third Trimester</a></li>
                    </ul>
                    <a href="trimesters.html" id="see"><button class="btn btn-custom btn-sm">See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>
                <!-- Card 9 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="#"><img src="{{asset('site/pregnancy/images/relajpg.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="relation.html" id="title"><h5 class="card-title">Relationships</h5></a>

                        </div>
                    </div>
                    <ul>
                        <li><a href="relation.html#partner" class="card-link">For Partners</a></li>
                        <li><a href="relation.html#relation" class="card-link">Pregnancy & Relationships</a></li>
                    </ul>
                    <a href="relation.html" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>

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
<script src="{{asset('site/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('site/assets/js/theme-change.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('site/assets/js/owl.carousel.js')}}"></script>
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
<script src="{{asset('site/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.countup.js')}}"></script>
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


<script src="{{asset('site/assets/js/bootstrap.min.js')}}"></script>

</body>

</html>
