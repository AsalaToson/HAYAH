@extends('mother.dashboard.BABY.parent')
@section('title','HAYAH HOSPITAL "Relationships')


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
            <h1 style="margin-top: 150px;"> Breastfeeding</h1><br>

            <div class="container mt-5">
                <div class="link">
                    <a href="#nursing">Nursing Problems & Solutions</a>
                    <a href="#basics">Breastfeeding Basics</a>
                    <a href="#pump">Breast Pumping & Bottle Feeding</a>
                    <a href="#weaning">Weaning</a>



                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Nursing Problems & Solutions-->
        <h1 id="nursing">Nursing Problems & Solutions</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/boost.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">How to handle common breastfeeding problems</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#feed1Content" aria-expanded="false" aria-controls="firstContent"> * Why is breastfeeding so hard? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="feed1Content">
                                <div class=" card-body" >
                                    - Breastfeeding can be smooth or challenging, with various complications. <br>
                                    - Challenges may include latch difficulties, milk supply issues, pain, or infection. <br>
                                    - Despite challenges, the health benefits of breastfeeding for both mom and baby are significant. <br>
                                    - Overcoming breastfeeding hurdles is tiring but worthwhile. <br>
                                    - Seek help and support from healthcare providers or lactation consultants for breastfeeding problems.


                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#feed2Content" aria-expanded="false" aria-controls="secondContent"> * Does breastfeeding hurt? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="feed2Content">
                                <div class=" card-body">
                                    - Breastfeeding should not be painful; discomfort indicates an issue. <br>
                                    - Painful letdown may result from producing too much milk, clogged ducts, mastitis, or thrush. <br>
                                    - Nipple vasospasm can cause burning or stabbing pain due to restricted blood flow; warmth and avoiding caffeine may help. <br>
                                    - Teething may lead to changes in latch or biting; anticipate and unlatch during biting. <br>
                                    - Sensitive nipples can result from pregnancy, menstrual period, or breast surgeries; ensure a good latch to avoid pain. <br>
                                    - Postpartum cramping during breastfeeding is normal due to uterine contractions; breathing exercises and pain relievers can help.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#feed3Content" aria-expanded="false" aria-controls="thirdContent"> * Common breastfeeding problems <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="feed3Content">
                                <div class=" card-body">
                                    - Sore, cracked, or bleeding nipples can result from a poor latch, yeast infection, or other causes. Seek help from a provider or lactation consultant. <br>
                                    - Painful letdown, nipple vasospasm, teething, and sensitive nipples are common discomforts during breastfeeding, with various management strategies available. <br>
                                    - Engorgement, clogged milk ducts, milk blebs, and mastitis are issues that can arise due to breastfeeding; nursing, massage, and warm compresses can help alleviate symptoms. <br>
                                    - Dysphoric milk ejection reflex (D-MER) and leaking breasts are additional challenges some women may experience while breastfeeding. <br>
                                    - Low milk supply, thrush, difficulty transitioning between breast and bottle, breast preference, nursing strikes, tongue-tie, and gassy baby are other potential breastfeeding issues to be aware of and address as needed.
                                </div>
                            </div>
                        </li>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/feed.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> How to boost your breast milk supply</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#boost1Content" aria-expanded="false" aria-controls="firstContent"> *   Managing Low Milk Supply: Strategies and Solutions for Breastfeeding Mothers <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="boost1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/breastfeeding/how-to-increase-milk-supply_8487"> <strong> * How can I tell if I need to produce more breast milk?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/how-to-increase-milk-supply_8487"> <strong> * What causes low milk supply?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/how-to-increase-milk-supply_8487"> <strong> * How can I increase my breast milk supply?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/how-to-increase-milk-supply_8487"> <strong> * Are there medications I can take to increase my milk supply?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/how-to-increase-milk-supply_8487"> <strong> * Are there foods I can eat to increase milk supply?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/how-to-increase-milk-supply_8487"> <strong> * Can herbs like fenugreek increase my milk supply?</strong></a> <br>

                                </div>
                            </div>
                        </li>



                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/feed2.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">How long to breastfeed a newborn or older baby at each feeding</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#long1Content" aria-expanded="false" aria-controls="firstContent"> * Breastfeeding Duration: Guidelines for Newborns and Older Babies <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="long1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/breastfeeding/is-it-normal-for-my-baby-to-breastfeed-for-only-a-few-minute_3652436"> <strong> * How long should I breastfeed my baby each time?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/is-it-normal-for-my-baby-to-breastfeed-for-only-a-few-minute_3652436"> <strong> * How long should a newborn nurse?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/is-it-normal-for-my-baby-to-breastfeed-for-only-a-few-minute_3652436"> <strong> * What if my newborn is eating every hour?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/is-it-normal-for-my-baby-to-breastfeed-for-only-a-few-minute_3652436"> <strong> * Is a 10-minute feed long enough for a newborn?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/is-it-normal-for-my-baby-to-breastfeed-for-only-a-few-minute_3652436"> <strong> * How long should an older baby breastfeed?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/is-it-normal-for-my-baby-to-breastfeed-for-only-a-few-minute_3652436"> <strong> * How long should you breastfeed on each side?</strong></a> <br>

                                </div>
                            </div>
                        </li>


                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!--Breastfeeding Basics-->
        <h1 id="basics">Breastfeeding Basics</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/tips.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Tips for a healthy breastfeeding diet</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#tip1Content" aria-expanded="false" aria-controls="firstContent"> *  Nutritional Recommendations for Breastfeeding Mothers <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="tip1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/breastfeeding/diet-for-a-healthy-breastfeeding-mom_3565"> <strong> * Do I need extra calories while breastfeeding?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/diet-for-a-healthy-breastfeeding-mom_3565"> <strong> * What are some of the best foods for breastfeeding?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/diet-for-a-healthy-breastfeeding-mom_3565"> <strong> * I'm a vegetarian or vegan – can I still breastfeed?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/diet-for-a-healthy-breastfeeding-mom_3565"> <strong> * How much water should I drink while breastfeeding?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/diet-for-a-healthy-breastfeeding-mom_3565"> <strong> * Do I need to take vitamins while breastfeeding?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/diet-for-a-healthy-breastfeeding-mom_3565"> <strong> * What are the foods to avoid while breastfeeding?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/diet-for-a-healthy-breastfeeding-mom_3565"> <strong> * Is it safe to have spicy foods while breastfeeding?</strong></a> <br>

                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/pos.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Good positions for breastfeeding</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#pos1Content" aria-expanded="false" aria-controls="l1Content"> * Breastfeeding positions <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="pos1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/breastfeeding/good-positions-for-breastfeeding_8784"> <strong> * The cradle hold </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/good-positions-for-breastfeeding_8784"> <strong> * The crossover or cross-cradle hold </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/good-positions-for-breastfeeding_8784"> <strong> * The clutch or football hold </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/good-positions-for-breastfeeding_8784"> <strong> * The side-lying position</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/good-positions-for-breastfeeding_8784"> <strong> * The koala hold</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/good-positions-for-breastfeeding_8784"> <strong> * The laid-back hold </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/good-positions-for-breastfeeding_8784"> <strong> * The post-cesarean laid-back hold</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/good-positions-for-breastfeeding_8784"> <strong> * The twin hold </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/good-positions-for-breastfeeding_8784"> <strong> * Tips for every nursing position</strong></a> <br>

                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/tricks.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> The 14 best breastfeeding tips and tricks </h4>


                        </div>
                    </div>
                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#trick1Content" aria-expanded="false" aria-controls="l1Content"> *  Essential Tips for Successful Breastfeeding Journey <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="trick1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Prepare ahead of time </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Stock up on breastfeeding supplies</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Set up a cozy nursing spot</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Know what's safe and what's not</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Breastfeed right away </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Get a good latch</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Watch your baby, not the clock</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Don't suffer in silence</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Try different positions</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Be persistent </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * But don't beat yourself up </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Take care of yourself </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/tips-from-breastfeeding-veterans_8478"> <strong> * Maintain your milk supply</strong></a> <br>

                                </div>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <!--Breast Pumping & Bottle Feeding-->
        <h1 id="pump">Breast Pumping & Bottle Feeding</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/bottle.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> How to bottle-feed your newborn</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#bottle1Content" aria-expanded="false" aria-controls="firstContent"> * Bottle-feeding a newborn<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="bottle1Content">
                                <div class=" card-body" >
                                    - Introduce bottle feeding immediately for exclusively pumping or formula feeding. <br>
                                    - Wait until 3 weeks old for combination feeding, but earlier introduction is okay. <br>
                                    - Feed on demand, recognizing hunger cues. <br>
                                    - Offer 1-2 ounces every 2-3 hours initially, increasing to 2-3 ounces every 3-4 hours. <br>
                                    - Wake newborn for feeding if they fall asleep or sleep longer than 4 hours.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#bottle2Content" aria-expanded="false" aria-controls="firstContent"> * How to bottle-feed your baby <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="bottle2Content">
                                <div class=" card-body" >
                                    - Hold your baby at a 45-degree angle during bottle-feeding to reduce gas. <br>
                                    - Ensure the nipple is completely filled with formula or breast milk. <br>
                                    - Burp your baby if they seem uncomfortable during feeding. <br>
                                    - Watch out for noisy sucking sounds, which may indicate excess air intake. <br>
                                    - Avoid propping the bottle; always hold it for your baby. <br>
                                    - Consider paced bottle feeding to prevent overfeeding, using a slow-flow nipple. <br>
                                    - Take breaks every 20-30 seconds and watch for signs of fullness in your baby. <br>
                                    - Allow your baby to stop feeding when they show signs of being full.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#bottle3Content" aria-expanded="false" aria-controls="firstContent"> * Common bottle-feeding questions <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="bottle3Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/breastfeeding/bottle-feeding-basics_752">  <strong>Find out here</strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/botle.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> How to get your baby to take a bottle </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#bott1Content" aria-expanded="false" aria-controls="h1Content"> *  Bottle-Feeding Tips for Breastfed Babies <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="bott1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/breastfeeding/introducing-your-breastfed-baby-to-the-bottle-or-cup_473"> <strong> * When to introduce the bottle to your breastfed baby </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/introducing-your-breastfed-baby-to-the-bottle-or-cup_473"> <strong> *  How to bottle feed a baby</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/introducing-your-breastfed-baby-to-the-bottle-or-cup_473"> <strong> * What to do if your baby won't take a bottle </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/introducing-your-breastfed-baby-to-the-bottle-or-cup_473"> <strong> * If your baby is still refusing the bottle </strong></a> <br>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>




            </div>
        </div>
        <hr>

        <!-- Weaning-->
        <h1 id="weaning">Weaning</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/feeding.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> Weaning: When and how to stop breastfeeding</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#wean1Content" aria-expanded="false" aria-controls="firstContent"> * Transitioning Away from Breastfeeding: A Guide to Weaning Your Baby <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="wean1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/breastfeeding/weaning-when-and-how-to-stop-breastfeeding_3272"> <strong> * What is weaning?  </strong></a>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/weaning-when-and-how-to-stop-breastfeeding_3272"> <strong> *  When to stop breastfeeding</strong></a>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/weaning-when-and-how-to-stop-breastfeeding_3272"> <strong> * How to stop breastfeeding </strong></a>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/weaning-when-and-how-to-stop-breastfeeding_3272"> <strong> * How to wean off pumping </strong></a>
                                    <a href="https://www.babycenter.com/baby/breastfeeding/weaning-when-and-how-to-stop-breastfeeding_3272"> <strong> * Weaning tips </strong></a>

                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/baby/images/weaning.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Baby Weaning: Guidance and Advice </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#wean2Content" aria-expanded="false" aria-controls="h1Content"> * "Say Goodbye to Bottles: Tips for Successful Weaning from Fellow Parents" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="wean2Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/ddEgS8ambqA?si=YnTpkoC5iR6-ISUV"> <strong>Look Here...</strong></a>
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
