<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="HAYAH Responsive web " />
    <title>HAYAH HOSPITAL "WEEK BY WEEK" </title>
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <!--  CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/style-starter.css')}}">
    <link href="{{asset('site/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate/animate.css')}}" rel="stylesheet">
    <style>
        /* Custom Styles */

        p{
            text-align: center;
        }

        h2 {
            color: white;
        }
        h1{
            text-align: center;
            font-weight: bold;
            background-color: rgba(176, 179, 182, 0.978);
            border-radius: 50px;
            color: deeppink;

        }
        h4{
            color: deeppink;
        }

        /* Custom Styles */
        .card {

            box-shadow: 0 4px 8px rgba(250, 245, 245, 0.1);
            height: 400px;
        }

        .card {
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for transform and box-shadow */
            position: relative;
        }

        .card:hover {
            transform: scale(1.1); /* Increase size by 10% */
            box-shadow: 0 4px 8px rgba(196, 13, 135, 0.1); /* Add shadow for depth */
            z-index: 1; /* Bring the card to the front */
        }

        .card-body {
            position: relative; /* Needed for z-index to work */
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
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

        .link a:hover {
            color: deeppink;
            transform: translateY(-5px);
        }

        .link a:hover::before {
            transform: scaleX(1);
        }
        .card-title{
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
        }
        #head{
            padding-top: 120px;
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
            <h1 style="margin-top: 140px;">Pregnancy Week By Week</h1><br>
            <div class="row" style="margin-top: 20px;" >
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="{{asset('site/pregnancy/images/pregnancy-week-40-mom_4x3 (1).jpg')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>

                        <p id="head">
                            Looking for a week-by-week guide to pregnancy? You're in luck! We've got loads of expert-approved info about each week and trimester,
                            including what's up with your growing baby and what changes to expect for yourself.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="link">
                    <a href="#first">First Trimester of Pregnancy</a>
                    <a href="#second">Second Trimester of Pregnancy</a>
                    <a href="#third">Third Trimester of Pregnancy</a>
                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->

        <h1 id="first">First Trimester Of Pregnancy</h1>
        <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-3 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-2-fertilization_4x3.png')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">2 Weeks Pregnant</h4>
                            <p class="card-text">
                                Ovulation may happen about two weeks after your last period began. If egg meets sperm,
                                you're on your way to being pregnant.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-3-blastocycst_4x3.png')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title">3 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 3 weeks after your last period-about 1 week after fertilization-
                                your baby is a tiny ball made up of several hundred cells that are multiplying quickly.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-4-yolk-sac_4x3.png')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">4 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 4 weeks, your baby is an embryo made up of two layers, and your primitive placenta is developing.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-5-amniotic-sac_4x3.png')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title">5 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 5 weeks, your tiny embryo is growing like crazy, and you may be noticing pregnancy discomforts like sore breasts and fatigue.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-6-webbed-hands_4x3.png')}}" class="card-img-top" alt="Image 6">
                        <div class="card-body">
                            <h4 class="card-title">6 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 6 weeks, your baby's heart has started beating. You may have morning sickness and sore breasts.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-7-tailbone_4x3.png')}}" class="card-img-top" alt="Image 7">
                        <div class="card-body">
                            <h4 class="card-title">7 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 7 weeks, your baby's eyes, nose, mouth, and ears are taking shape. You may need to pee constantly.   </p>
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-8-brain-nerve-cells_4x3.png')}}" class="card-img-top" alt="Image 8">
                        <div class="card-body">
                            <h4 class="card-title"> 8 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 8 weeks, your baby's hands and feet are sprouting webbed fingers and toes.
                                You may have nausea and fatigue. And you may make decisions about prenatal tests.  </p>
                        </div>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-9-finger-touch-pads_4x3.png')}}" class="card-img-top" alt="Image 9">
                        <div class="card-body">
                            <h4 class="card-title"> 9 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 9 weeks, your baby is starting to look more like a tiny human. You may have morning sickness and mood swings. </p>
                        </div>
                    </div>
                </div>
                <!-- Card 10 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-10-fingernails_4x3.png')}}" class="card-img-top" alt="Image 10">
                        <div class="card-body">
                            <h4 class="card-title"> 10 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 10 weeks, your baby has finished the most critical part of development! You might be ready for maternity clothes,
                                or at least some new bras.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 11 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-11-tooth-buds_4x3.png')}}" class="card-img-top" alt="Image 11">
                        <div class="card-body">
                            <h4 class="card-title"> 11 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 11 weeks pregnant, your baby's busy kicking and stretching. But you won't feel that for a while yet.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 12 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-12-eyelids_4x3.png')}}" class="card-img-top" alt="Image 12">
                        <div class="card-body">
                            <h4 class="card-title"> 12 Weeks Pregnant</h4>
                            <p class="card-text">
                                Your baby can curl those tiny toes and make sucking movements when you're 12 weeks pregnant. You may be having heartburn.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 13 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/pregnancy-week-13-fingerprints_4x3.png')}}" class="card-img-top" alt="Image 13">
                        <div class="card-body">
                            <h4 class="card-title"> 13 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 13 weeks pregnant,
                                you're in the last week of the first trimester. Your baby now has exquisite fingerprints and is almost 3 inches long.                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><hr><br>
        <h1 id="second">Second Trimester Of Pregnancy</h1>
        <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-3 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/14-weeks-pregnant_4x3 (1).png')}}" class="card-img-top" alt="Image 14">
                        <div class="card-body">
                            <h4 class="card-title"> 14 Weeks Pregnant</h4>
                            <p class="card-text">
                                Your baby is now making expressions with its tiny features.
                                At 14 weeks pregnant, you may be feeling more energetic and less nauseated.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/15-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 15">
                        <div class="card-body">
                            <h4 class="card-title">15 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 15 weeks, your baby can move her joints and is forming taste buds.
                                Have a stuffy nose? It's a surprising pregnancy side effect.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/16-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 16">
                        <div class="card-body">
                            <h4 class="card-title">16 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 16 weeks pregnant, you may be having less nausea and fewer mood swings. Your baby is heading into a growth spurt.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/17-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 17">
                        <div class="card-body">
                            <h4 class="card-title">17 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 17 weeks, your baby's skeleton is changing from soft cartilage to bone,
                                and the umbilical cord is growing stronger and thicker.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/18-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 18">
                        <div class="card-body">
                            <h4 class="card-title">18 Weeks Pregnant</h4>
                            <p class="card-text">
                                Your baby's genitals are developed enough to see on an ultrasound. Hungry?
                                An increase in appetite is normal at 18 weeks pregnant.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/19-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 19">
                        <div class="card-body">
                            <h4 class="card-title">19 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 19 weeks, hair is sprouting on your baby's scalp. If your sides are aching, it could be round ligament pain.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/20-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 20">
                        <div class="card-body">
                            <h4 class="card-title"> 20 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 20 weeks pregnant, you're at the halfway mark in your pregnancy - congrats! Your baby's taste buds are now working.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/21-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 21">
                        <div class="card-body">
                            <h4 class="card-title"> 21 Weeks Pregnant</h4>
                            <p class="card-text">
                                Feeling your baby move at 21 weeks pregnant? Those early flutters will turn into full-fledged kicks.
                                Cool fact: Your baby has eyebrows now.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 10 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/22-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 22">
                        <div class="card-body">
                            <h4 class="card-title"> 22 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 22 weeks, your baby may be able to hear your heartbeat. And your growing belly may be turning into a hand magnet.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 11 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/23-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 23">
                        <div class="card-body">
                            <h4 class="card-title"> 23 Weeks Pregnant</h4>
                            <p class="card-text">
                                Now that you're 23 weeks pregnant, your baby has a well-developed sense of movement.
                                Meanwhile, you may notice swelling in your ankles and feet.  </p>
                        </div>
                    </div>
                </div>
                <!-- Card 12 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/24-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 24">
                        <div class="card-body">
                            <h4 class="card-title"> 24 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 24 weeks, your baby is still long and lean -- but that will soon change.
                                And your growing uterus is now the size of a soccer ball.      </p>
                        </div>
                    </div>
                </div>
                <!-- Card 13 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/25-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 25">
                        <div class="card-body">
                            <h4 class="card-title"> 25 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 25 weeks, your little one is starting to add some baby fat and grow more hair.
                                Your hair may be looking extra lustrous, too.  </p>
                        </div>
                    </div>
                </div>
                <!-- Card 14 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/26-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 26">
                        <div class="card-body">
                            <h4 class="card-title"> 26 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 26 weeks, your baby is inhaling and exhaling small amounts of amniotic fluid.
                                This is good practice for breathing. </p>
                        </div>
                    </div>
                </div>
                <!-- Card 15 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/27-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 27">
                        <div class="card-body">
                            <h4 class="card-title"> 27 Weeks Pregnant</h4>
                            <p class="card-text">At 27 weeks pregnant, you may feel your baby hiccupping.
                                He's also opening and closing his eyes and even sucking his fingers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><hr><br>
        <h1 id="third">Third Trimester Of Pregnancy</h1>
        <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-3 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/28-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 28">
                        <div class="card-body">
                            <h4 class="card-title"> 28 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 28 weeks pregnant, you're starting your last trimester.
                                Your baby's eyes may be able to see light filtering in through your womb.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/29-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 29">
                        <div class="card-body">
                            <h4 class="card-title"> 29 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 29 weeks, your baby's muscles and lungs are maturing,
                                and her head is growing to make room for her developing brain.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/30-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 30">
                        <div class="card-body">
                            <h4 class="card-title">30 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 30 weeks, your baby weighs almost 3 pounds. You may be battling mood swings,
                                clumsiness, and fatigue.   </p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/31-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 31">
                        <div class="card-body">
                            <h4 class="card-title">31 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 31 weeks, your baby's strong kicks might be keeping you up at night.
                                You may be feeling Braxton Hicks contractions, too.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/32-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 32">
                        <div class="card-body">
                            <h4 class="card-title">32 Weeks Pregnant</h4>
                            <p class="card-text">
                                Your baby is plumping up! At 32 weeks pregnant, your expanding uterus may cause heartburn and shortness of breath.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/33-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 33">
                        <div class="card-body">
                            <h4 class="card-title">33 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 33 weeks pregnant, you might be waddling and having trouble getting comfy in bed.
                                Your baby weighs a little more than 4 pounds now.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/34-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 34">
                        <div class="card-body">
                            <h4 class="card-title"> 34 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 34 weeks, your baby's central nervous system and lungs are maturing. Dizziness and fatigue may be slowing you down.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/35-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 35">
                        <div class="card-body">
                            <h4 class="card-title"> 35 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 35 weeks, your baby is too snug in your womb to do a lot of somersaults,
                                but you'll still feel frequent movements.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 10 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/36-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 36">
                        <div class="card-body">
                            <h4 class="card-title"> 36 Weeks Pregnant</h4>
                            <p class="card-text">
                                Your baby is gaining about an ounce a day now that you're 36 weeks pregnant.
                                You may feel her "drop" down into your pelvis soon.  </p>
                        </div>
                    </div>
                </div>
                <!-- Card 11 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/37-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 37">
                        <div class="card-body">
                            <h4 class="card-title"> 37 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 37 weeks, your baby's brain and lungs are continuing to mature.
                                You may have more vaginal discharge and occasional contractions.  </p>
                        </div>
                    </div>
                </div>
                <!-- Card 12 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/38-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 38">
                        <div class="card-body">
                            <h4 class="card-title"> 38 Weeks Pregnant</h4>
                            <p class="card-text">
                                Your baby has a firm grasp,
                                which you'll soon be able to test in person! At 38 weeks pregnant, it's wise to watch for signs of preeclampsia. </p>
                        </div>
                    </div>
                </div>
                <!-- Card 13 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/39-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 39">
                        <div class="card-body">
                            <h4 class="card-title"> 39 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 39 weeks pregnant, your baby is full term and waiting to greet the world! If your water breaks,
                                call your healthcare provider.  </p>
                        </div>
                    </div>
                </div>
                <!-- Card 14 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/40-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 40">
                        <div class="card-body">
                            <h4 class="card-title"> 40 Weeks Pregnant</h4>
                            <p class="card-text">
                                At 40 weeks pregnant,
                                your baby is the size of a small pumpkin! Don't worry if you're still pregnant - it's common to go past your due date. </p>
                        </div>
                    </div>
                </div>
                <!-- Card 15 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('site/pregnancy/images/41-weeks-pregnant_4x3.png')}}" class="card-img-top" alt="Image 41">
                        <div class="card-body">
                            <h4 class="card-title"> 41 Weeks Pregnant</h4>
                            <p class="card-text">At 41 weeks pregnant, you'll go into labor or be induced soon.
                                Your baby should remain active right up until delivery.</p>
                        </div>
                    </div>
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

</body>

</html>