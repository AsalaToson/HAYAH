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
            <h1 style="margin-top: 150px; color: whitesmoke;">Newborn Baby</h1><br>

            <div class="container mt-5">
                <div class="link">
                    <a href="#new">Newborn Baby Care & Feeding</a>
                    <a href="#sleep">Newborn Baby Sleep</a>
                    <a href="#Early">The Early Weeks</a>
                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Newborn Baby Care & Feeding-->
        <h1 id="new" style="margin-top: 100px;">Newborn Baby Care & Feeding</h1>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/newbornn.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title"> How to care for a newborn: Tips from parents</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#prepContent" aria-expanded="false" aria-controls="firstContent"> *  Expert Tips from Experienced Parents <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="prepContent">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/newborn-baby/parents-say-how-to-care-for-a-newborn-baby_9791"> <strong> * Prepare as much as you can ahead of time </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/parents-say-how-to-care-for-a-newborn-baby_9791"> <strong> * Ask for — and accept — help</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/parents-say-how-to-care-for-a-newborn-baby_9791"> <strong> * Accept visitors only when you're ready </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/parents-say-how-to-care-for-a-newborn-baby_9791"> <strong> * Rest up </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/parents-say-how-to-care-for-a-newborn-baby_9791"> <strong> * Go outside </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/parents-say-how-to-care-for-a-newborn-baby_9791"> <strong> * Know your limits </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/parents-say-how-to-care-for-a-newborn-baby_9791"> <strong> * Find supportive healthcare providers </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/parents-say-how-to-care-for-a-newborn-baby_9791"> <strong> * Trust your gut </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/parents-say-how-to-care-for-a-newborn-baby_9791"> <strong> * Tell yourself: This, too, shall pass </strong></a> <br>


                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/twinn.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title">Caring for newborn twins or multiples</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#twin1Content" aria-expanded="false" aria-controls="firstContent"> * How can I make caring for twins easier? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="twin1Content">
                                <div class=" card-body" >
                                    - Seek extra support beyond your partner for caring for twins. <br>
                                    - Plan ahead and arrange assistance for after the birth, like a nurse or postpartum doula. <br>
                                    - Communicate needs clearly to family and friends, setting boundaries if necessary. <br>
                                    - Relax standards and focus on baby care during the initial months. <br>
                                    - Accept help from others, especially with chores. <br>
                                    - Prioritize self-care and mental well-being to manage stress.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#twin2Content" aria-expanded="false" aria-controls="secondContent"> * Can I still breastfeed with twins? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="twin2Content">
                                <div class=" card-body">
                                    <strong>OF course</strong> <br>
                                    1. Feeding twins boosts milk production. <br>
                                    2. Experiment with nursing positions. <br>
                                    3. Simultaneous nursing can save time. <br>
                                    4. It may be necessary to adapt feeding approaches for each twin. <br>
                                    5. Flexibility is crucial in catering to individual needs.
                                </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#twin3Content" aria-expanded="false" aria-controls="thirdContent"> * How long a maternity leave should I plan on taking? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="twin3Content">
                                <div class=" card-body">
                                    1. Maternity leave varies by company and workplace environment. <br>
                                    2. The Family and Medical Leave Act offers up to 12 weeks of unpaid leave. <br>
                                    3. Smaller employers may be more flexible in negotiating leave. <br>
                                    4. No extra leave entitlement for multiples by law. <br>
                                    5. Discuss options with HR or your boss for extended leave or flexibility. <br>
                                    6. Decide based on what suits your family best.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/sugar.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title"> Sugar water for babies: When it's used and why </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sugar1Content" aria-expanded="false" aria-controls="firstContent"> * "Sugar Water for Babies: Understanding Its Uses and Risks" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sugar1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/newborn-baby/should-i-give-my-newborn-water-or-sugar-water_10012"> <strong> * Why is sugar water given to babies? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/should-i-give-my-newborn-water-or-sugar-water_10012"> <strong> * Does sugar water have benefits for babies?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/should-i-give-my-newborn-water-or-sugar-water_10012"> <strong> * Will my newborn get sugar water in the hospital?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/should-i-give-my-newborn-water-or-sugar-water_10012"> <strong> * What are the risks of sugar water for babies?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/should-i-give-my-newborn-water-or-sugar-water_10012"> <strong> * Can I give my baby sugar water at home? </strong></a> <br>

                                </div>
                            </div>
                        </li>


                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!--Newborn Baby Sleep-->
        <h1 id="sleep">Newborn Baby Sleep</h1>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/sssssssss.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">5 ways to get sleep with a newborn</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#neww1Content" aria-expanded="false" aria-controls="firstContent"> * "Surviving Sleep Deprivation: Strategies for New Parents" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="neww1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/newborn-baby/sleep-deprivation_7750"> <strong> 1-How to get sleep with a newborn</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/sleep-deprivation_7750"> <strong> 2-How to cope with sleep deprivation</strong></a>

                                </div>
                            </div>
                        </li>


                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/swaddle.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title">How to swaddle a baby </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sw1Content" aria-expanded="false" aria-controls="l1Content"> * "Swaddling 101: Safety, Technique, and Transitioning" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sw1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/newborn-baby/swaddling-your-baby_125"> <strong> 1- What is swaddling?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/swaddling-your-baby_125"> <strong> 2- How to swaddle a baby</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/swaddling-your-baby_125"> <strong> 3- Is swaddling safe?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/swaddling-your-baby_125"> <strong> 4- When to stop swaddling</strong></a> <br>

                                </div>
                            </div>
                        </li>


                    </ul>

                </div>


            </div>
        </div>
        <hr>
        <!-- The Early Weeks-->

        <h1 id="Early">The Early Weeks</h1>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/qwee.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title">Common questions about life with a newborn, answered</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#common1Content" aria-expanded="false" aria-controls="firstContent"> * Newborn Care FAQs <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="common1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/newborn-baby/solutions-to-new-parent-dilemmas_10346047"> <strong> * Should the house be quiet while my baby is sleeping?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/solutions-to-new-parent-dilemmas_10346047"> <strong> * Can I watch TV with my newborn in the room? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/solutions-to-new-parent-dilemmas_10346047"> <strong> * Is loud music bad for babies?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/solutions-to-new-parent-dilemmas_10346047"> <strong> * Should I give my baby a pacifier? </strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/solutions-to-new-parent-dilemmas_10346047"> <strong> * How do I shower with a newborn at home?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/solutions-to-new-parent-dilemmas_10346047"> <strong> * What's the best way to handle people who want to visit the baby?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/solutions-to-new-parent-dilemmas_10346047"> <strong> * A few myths about newborns, debunked </strong></a> <br>
                                </div>
                            </div>
                        </li>


                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/sts.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Benefits of skin-to-skin contact with your newborn </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sts1Content" aria-expanded="false" aria-controls="h1Content"> * "Skin-to-Skin Contact: The Power of Bonding and Benefits for Newborns" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sts1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/newborn-baby/benefits-of-skin-to-skin-contact-with-your-newborn_20005036"> <strong> 1-What is skin-to-skin contact?  </strong></a><br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/benefits-of-skin-to-skin-contact-with-your-newborn_20005036"> <strong> 2-What are the benefits of skin-to-skin contact?</strong></a><br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/benefits-of-skin-to-skin-contact-with-your-newborn_20005036"> <strong> 3-Skin-to-skin benefits for newborns:</strong></a><br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/benefits-of-skin-to-skin-contact-with-your-newborn_20005036"> <strong> 4-How does skin-to-skin contact help premature babies?</strong></a><br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/benefits-of-skin-to-skin-contact-with-your-newborn_20005036"> <strong> 5-What if I can't have skin-to-skin contact with my baby right after birth?</strong></a><br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/benefits-of-skin-to-skin-contact-with-your-newborn_20005036"> <strong> 6-Should dads do skin-to-skin?</strong></a><br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/benefits-of-skin-to-skin-contact-with-your-newborn_20005036"> <strong> 7-When to stop skin-to-skin contact</strong></a><br>
                                    <a href="https://www.babycenter.com/baby/newborn-baby/benefits-of-skin-to-skin-contact-with-your-newborn_20005036"> <strong> 8-Tips for doing skin-to-skin with your baby</strong></a><br>

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
@endsection
