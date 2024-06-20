<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="HAYAH Responsive web " />
    <title>HAYAH HOSPITAL "FAMILY" </title>
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
          rel="stylesheet">



    <!--  CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/style-starter.css')}}">
    <link href="{{asset('site/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('site/animate/animate.css')}}" rel="stylesheet">

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
            margin-top: 0px;
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
        <div class="container mt-5">
            <div class="row">
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="{{asset('site/family/images/family.jfif')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>You & Your Family</h2><br>
                        <p>
                            Becoming a parent, especially the first time, is no easy endeavor. As much as you want parenting advice, you also need good ideas for nurturing your own grown-up relationships, dealing with sleep deprivation, making the decision whether to be a stay-at-home mom or a working mom,
                            finding new recipes, traveling with kids, getting in shape, and deciding on more kids.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h2>You & Your Family topics</h2><hr>
        <!-- container -->
        <div class="container mt-5" >
            <div class="row" style="margin-top: 10px;">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="{{route('family.Motherhood')}}"><img src="{{asset('site/family/images/motherhhod.jfif')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('family.Motherhood')}}" id="title"><h5 class="card-title">Motherhood</h5></a>
                        </div>
                    </div>
                    <ul>
                        <li><a href="{{route('family.Motherhood')}}#mom" class="card-link">Life as a Mom</a></li>
                        <li><a href="{{route('family.Motherhood')}}#beauty" class="card-link">Beauty</a></li>
                        <li><a href="{{route('family.Motherhood')}}#emotional" class="card-link">Emotional Wellness</a></li>
                    </ul>
                    <a href="{{route('family.Motherhood')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('family.Motherhood')}}"><img src="{{asset('site/family/images/father.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('family.Motherhood')}}" id="title"><h5 class="card-title">Fatherhood</h5></a>

                        </div>
                    </div>
                    <ul>
                        <li><a href="{{route('family.Fatherhood')}}#advice" class="card-link">Advice for New Dads</a></li>
                        <li><a href="{{route('family.Fatherhood')}}#dad" class="card-link">Being a Good Dad</a></li>
                    </ul>
                    <a href="{{route('family.Fatherhood')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('family.Siblings')}}"><img src="{{asset('site/family/images/sibling.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('family.Siblings')}}" id="title"><h6 class="card-title">Siblings</h6></a>

                        </div>

                    </div>
                    <ul>
                        <li><a href="{{route('family.Siblings')}}#siblings" class="card-link">Having Another Baby</a></li>
                        <li><a href="{{route('family.Siblings')}}#coping" class="card-link">Coping With Two or More</a></li>
                    </ul>
                    <a href="{{route('family.Siblings')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
                </div>

                <!-- Card 4-->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('family.Staying')}}"><img src="{{asset('site/family/images/par.jpg')}}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{route('family.Staying')}}" id="title"><h5 class="card-title">Working or Staying Home</h5></a>

                        </div>
                    </div>
                    <ul>
                        <li><a href="{{route('family.Staying')}}#stay" class="card-link">Stay-at-Home Parents</a></li>
                        <li><a href="{{route('family.Staying')}}#work" class="card-link">Working Parents</a></li>
                    </ul>
                    <a href="{{route('family.Staying')}}" id="see"><button class="btn btn-custom btn-sm" >See All <i class=" fa fa-angle-double-right"></i></button></a>
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
                        <a class="navbar-brand" href=""><span class="fa fa-heartbeat"> </span> HAYAH</a>
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
                        <li ><a href="">About Us</a></li>
                        <li><a href=""> Blog Posts</a></li>
                        <li><a href="">Departments</a></li>
                        <li><a href=""> Careers</a></li>
                        <li><a href="">Team</a></li>
                        <li><a href="">Contact us</a></li>
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

<script src="{{asset('site/family/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('site/family/js/theme-change.js')}}"></script>
<!-- owl carousel -->

<script src="{{asset('site/family/assets/js/owl.carousel.js')}}"></script>
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
<script src="{{asset('site/family/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('site/family/assets/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->
<!-- disable body scroll which navbar is in active -->
<script>

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

<script src="{{asset('site/family/assets/js/bootstrap.min.js')}}"></script>
</body>

</html>
