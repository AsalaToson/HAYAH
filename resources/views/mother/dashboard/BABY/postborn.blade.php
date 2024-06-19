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
            <h1 style="margin-top: 150px;">Postpartum Health</h1><br>

            <div class="container mt-5">
                <div class="link">
                    <a href="#post">Postpartum Weight & Body Image</a>
                    <a href="#comp">Postpartum Complications</a>
                    <a href="#recover">Recovering From Birth</a>
                    <a href="#dep">Postpartum Depression & Emotional Health</a>
                    <a href="#nut">Postpartum Nutrition</a>
                    <a href="#fit">Postpartum Fitness</a>

                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Postpartum Weight & Body Image-->
        <h1 id="post" style="margin-top: 60px;">Postpartum Weight & Body Image</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/weight gain.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Weight gain after pregnancy</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#gain1Content" aria-expanded="false" aria-controls="firstContent"> * Is it normal that I'm not losing weight after having a baby? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="gain1Content">
                                <div class=" card-body" >
                                    1. Six months postpartum, women typically retain an average of 11.8 pounds, with about half retaining more than 10 pounds and a quarter remaining 20 pounds heavier than pre-pregnancy.<br>
                                    2. Experts haven't definitively concluded if weight loss is harder after subsequent births; some studies show no difference, while others suggest weight gain between pregnancies may impact outcomes. <br>
                                    3. Concerns about postpartum weight are common, and it's crucial to understand that losing weight takes time after childbirth. <br>
                                    4. If you're gaining weight instead of retaining it post-pregnancy, consult your healthcare provider, as there may be underlying health issues requiring treatment. <br>                       </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#gain2Content" aria-expanded="false" aria-controls="secondContent"> * What can I do about my postpartum weight gain? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="gain2Content">
                                <div class=" card-body">
                                    <strong> Treatment for postpartum weight gain causes: </strong> <br>
                                    - Postpartum thyroiditis: Requires thyroid medication to balance levels. <br>
                                    - Postpartum depression: Treatable with antidepressants, therapy, and exercise; consult healthcare provider. <br>
                                    - Diabetes and PCOS: Managed through medication and lifestyle changes. <br>

                                    <strong>Post-baby weight loss tips:</strong> <br>
                                    - Consult healthcare provider for a healthy weight loss plan. <br>
                                    - Set realistic expectations and progress gradually. <br>
                                    - Wait for provider approval before dieting or exercising, especially if breastfeeding. <br>
                                    - Focus on healthy eating and regular exercise, including activities like walking. <br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#gain3Content" aria-expanded="false" aria-controls="thirdContent"> * What causes postpartum weight gain? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="gain3Content">
                                <div class=" card-body">
                                    <strong> Common postpartum conditions associated with weight gain:</strong> <br>
                                    - Postpartum thyroiditis: Can lead to hypothyroidism, characterized by weight gain along with fatigue, constipation, and other symptoms. <br>
                                    - Postpartum depression: Associated with weight retention due to changes in appetite and eating habits, along with mood symptoms like irritability and insomnia. <br>
                                    - Diabetes: Type 2 diabetes post-birth, especially after gestational diabetes, can lead to weight gain; management includes diet, exercise, and potential medication. <br>
                                    - PCOS: Polycystic ovary syndrome can cause weight gain due to hormonal imbalances and insulin resistance. <br>
                                    <strong>Factors increasing likelihood of weight retention:</strong> <br>
                                    - Excess pregnancy weight gain: Women exceeding recommended guidelines are more likely to retain weight postpartum. <br>
                                    - Obesity: Obese women have a higher risk of weight retention. <br>
                                    - Smoking cessation: Quitting smoking during pregnancy and postpartum can increase the risk of weight retention. <br>
                                    - Lack of sleep: Postpartum fatigue and inadequate sleep contribute to weight retention. <br>
                                    - Disrupted routine: Adjusting to motherhood may disrupt previous exercise and self-care routines, requiring time management and support for maintaining health.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#gain4Content" aria-expanded="false" aria-controls="thirdContent"> * How to feel good about your body after baby <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="gain4Content">
                                <div class=" card-body">
                                    <strong>  Tips for coping with postpartum weight struggles:</strong> <br>
                                    - Avoid comparing yourself to others, and treat yourself with kindness. <br>
                                    - Practice gratitude for your body's capabilities and prioritize self-care. <br>
                                    - Understand that postpartum weight loss may take six months to a year. <br>
                                    - Focus on enjoyable physical activities like walking, yoga, or dancing. <br>
                                    - Invest in clothes that fit your current body and pamper yourself with simple self-care rituals. <br>
                                    - Embrace the journey of motherhood and be gentle with yourself, remembering the gift of your baby.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/does.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Does breastfeeding help you lose weight? </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#lose1Content" aria-expanded="false" aria-controls="firstContent"> * Does breastfeeding make you lose weight? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="lose1Content">
                                <div class=" card-body" >
                                    <strong> Factors affecting postpartum weight loss while breastfeeding:</strong> <br>
                                    - Breastfeeding burns extra calories, potentially aiding weight loss by 500 to 700 calories per day. <br>
                                    - Conscientious dietary choices may contribute to weight loss for some breastfeeding moms. <br>
                                    - However, studies show mixed results; breastfeeding might not always lead to noticeable weight loss. <br>
                                    - Increased appetite from breastfeeding can lead to weight retention or gain if calorie intake exceeds expenditure. <br>
                                    - Challenges like sleep deprivation, postpartum fatigue, stress, depression, or thyroid issues can hinder weight loss efforts while breastfeeding.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#lose2Content" aria-expanded="false" aria-controls="secondContent"> * Is it safe to go on a diet while breastfeeding?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="lose2Content">
                                <div class=" card-body">
                                    <strong> Tips for safe weight loss while breastfeeding:</strong> <br>
                                    - Wait until at least two months postpartum to start dieting to ensure milk supply is established. <br>
                                    - Eat at least 1,800 calories per day and aim to lose no more than 1 pound per week. <br>
                                    - Diet should include a variety of nutrient-packed foods from all food groups. <br>
                                    - Incorporate moderate postpartum exercise, as it doesn't affect milk production or composition. <br>
                                    - Once baby starts eating solids at around 6 months, you can adjust calorie intake accordingly. <br>
                                    - Prioritize gradual weight loss with three wholesome meals, healthy snacks, moderate exercise, adequate sleep, and hydration.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#lose3Content" aria-expanded="false" aria-controls="thirdContent"> * Meal replacement shakes and breastfeeding <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="lose3Content">
                                <div class=" card-body">
                                    <strong> Considerations for breastfeeding moms regarding meal replacement shakes</strong> <br>
                                    - View meal replacement shakes as snacks, not meal substitutes, due to their limited nutrient content. <br>
                                    - While effective for weight loss in some cases, meal replacement shakes cannot replace the nutrients from a balanced diet, especially crucial for breastfeeding. <br>
                                    - High-protein content in meal replacement shakes may aid weight loss by controlling appetite and maintaining muscle mass. <br>
                                    - Focus on incorporating plenty of low-fat protein in a balanced diet to support safe weight loss while breastfeeding.
                                </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/cccc.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">Body changes after pregnancy </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#afterp1Content" aria-expanded="false" aria-controls="firstContent"> * Understanding the Long-Term Effects of Pregnancy on Your Body <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="afterp1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-pregnancy_10379846"> <strong> "Insights from OB-GYN Experts"</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!-- Postpartum Complications-->
        <h1 id="comp">Postpartum Complications</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/post1.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Warning signs of postpartum complications</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#post1Content" aria-expanded="false" aria-controls="firstContent"> * Postpartum Deaths and Preventive Measures <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="post1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-warning-signs_12257"> <strong>Severe headache</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-warning-signs_12257"> <strong>Dizziness or fainting</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-warning-signs_12257"> <strong>Changes in your vision</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-warning-signs_12257"> <strong>Fever</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-warning-signs_12257"> <strong>Trouble breathing</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-warning-signs_12257"> <strong>Overwhelming tiredness</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-warning-signs_12257"> <strong>Chest pain or rapid heartbeat</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-warning-signs_12257"> <strong>Severe swelling of hands or face</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-warning-signs_12257"> <strong>Severe belly pain</strong></a> <br>

                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/post2.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Postpartum recovery timeline </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#recover1Content" aria-expanded="false" aria-controls="l1Content"> * Navigating Physical and Mental Recovery After Childbirth <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="recover1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-recovery-timeline_40009380"><strong> One week postpartum</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-recovery-timeline_40009380"><strong> Two weeks postpartum</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-recovery-timeline_40009380"><strong> Six weeks postpartum</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-recovery-timeline_40009380"><strong> Six months postpartum</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-recovery-timeline_40009380"><strong> One year postpartum</strong></a> <br>

                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/skinnn.jpg')}}" alt="" height="170px">
                        <div class="card-body">
                            <h4 class="card-title">Postpartum skin changes</h4>


                        </div>

                    </div>
                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#skinn1Content" aria-expanded="false" aria-controls="l1Content">  "Unlocking Postpartum Skin: Insights into Changes, Care, and Recovery" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="skinn1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-skin-changes_40009344"> <strong>Why do postpartum skin changes occur?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-skin-changes_40009344"> <strong> What types of skin issues might I experience postpartum?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-skin-changes_40009344"> <strong> When can I expect postpartum skin changes to fade?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-skin-changes_40009344"> <strong> Are there any skincare products I should avoid while breastfeeding?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-skin-changes_40009344"> <strong> What are some safe ways to take care of my skin postpartum?</strong></a> <br>

                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <!--Recovering From Birth-->
        <h1 id="recover">Recovering From Birth</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/post3.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> Your postpartum checkup</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#up1Content" aria-expanded="false" aria-controls="firstContent"> * What is the six-week postpartum checkup? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="up1Content">
                                <div class=" card-body" >
                                    1. Comprehensive six-week postpartum checkup with OB or midwife. <br>
                                    2. Evaluates physical and emotional recovery, approves resumption of activities like exercise and sex. <br>
                                    3. Recommended within three weeks post-delivery; comprehensive checkup by 12 weeks. <br>
                                    4. Initial contact may be less comprehensive (e.g., phone call or virtual visit). <br>
                                    5. Urgent issues like excessive bleeding or potential infections require immediate attention. <br>
                                    6. Provider should be contacted promptly for concerns, irrespective of appointment timing.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#up2Content" aria-expanded="false" aria-controls="d2Content"> * Why is a postpartum checkup so important?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="up2Content">
                                <div class=" card-body">
                                    <strong> Importance of Postpartum Checkups:</strong> <br>

                                    1. Essential for provider to assess physical and emotional health. <br>
                                    2. Detects potential issues early, such as infections and mental health concerns. <br>
                                    3. Opportunity to discuss birth experience, recovery, and future pregnancies. <br>
                                    4. Addresses post-pregnancy discomforts and body changes. <br>
                                    5. Provides guidance on breastfeeding, birth control, exercise, sex, and returning to work. <br>
                                    6. Prepare questions and concerns beforehand. <br>
                                    7. Vital for individuals with past pregnancy complications to understand causes and future risks.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#up3Content" aria-expanded="false" aria-controls="d2Content"> * Questions to ask your healthcare provider at your six-week postpartum checkup <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="up3Content">
                                <div class=" card-body">
                                    <strong>Key questions for the postpartum visit:</strong> <br>
                                    1. Can you check for diastasis recti? <br>
                                    2. Can you refer me to a lactation consultant? <br>
                                    3. Can you refer me for pelvic floor therapy? <br>
                                    4. Why were certain procedures used during delivery? <br>
                                    5. Will past complications affect future births? <br>
                                    6. How might pregnancy-related conditions affect my health? <br>
                                    7. Recommendations for managing discomforts like constipation. <br>
                                    8. Suggestions for necessary supplements.

                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/questions.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> Your most common postpartum recovery questions, answered </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#question1Content" aria-expanded="false" aria-controls="h1Content"> * "Postpartum Recovery FAQs" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="question1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-childbirth_1456740"> <strong>1-How long is postpartum recovery?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-childbirth_1456740"> <strong>2-How long do you bleed after having a baby?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-childbirth_1456740"> <strong>3-When will my postpartum belly go away?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-childbirth_1456740"> <strong>4-When will I lose the baby weight?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-childbirth_1456740"> <strong>5-Will my vagina be the same postpartum?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-childbirth_1456740"> <strong>6-Are postpartum headaches normal?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-childbirth_1456740"> <strong>7-How can I take care of myself postpartum?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-childbirth_1456740"> <strong>8-When will I get my first postpartum period?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/body-changes-after-childbirth_1456740"> <strong>9-When is it safe to exercise postpartum?</strong></a> <br>


                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/exhusted.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> How to cope with postpartum fatigue: Tips for exhausted moms </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#fat1Content" aria-expanded="false" aria-controls="h1Content"> * What is postpartum fatigue?  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="fat1Content">
                                <div class=" card-body" >
                                    Postpartum Fatigue: Understanding Symptoms and Causes <br>

                                    - Common among new moms, affecting nearly two-thirds. <br>
                                    - Characterized by extreme tiredness, lack of energy, difficulty concentrating, and emotional strain. <br>
                                    - One study found 40% of new moms felt fatigued in the first ten days postpartum, decreasing to 11% after a year. <br>
                                    - Reasons include physical recovery from childbirth, round-the-clock care for the newborn, fragmented sleep, and hormonal changes during breastfeeding. <br>
                                    - Both breastfeeding and bottle-feeding moms can experience fatigue. <br>
                                    - Lack of support from partner, family, and friends can exacerbate exhaustion. <br>
                                    - Persistent fatigue may impact bonding with the newborn and increase the risk of postpartum depression.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#fat2Content" aria-expanded="false" aria-controls="secondContent"> * How long does postpartum fatigue last? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="fat2Content">
                                <div class=" card-body">
                                    <strong>  Factors influencing duration of postpartum fatigue:</strong> <br>
                                    - Varies for each individual. <br>
                                    - Can persist for months or even years. <br>
                                    - Depends on baby's sleep patterns and schedule adjustment. <br>
                                    - Influenced by amount of rest and support at home. <br>
                                    - Impact of additional responsibilities like work. <br>
                                    - Gradual improvement as baby establishes sleep routine. <br>
                                    - Importance of managing persistent fatigue.
                                </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#fat3Content" aria-expanded="false" aria-controls="thirdContent"> * What can I do to cope with postpartum fatigue? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="fat3Content">
                                <div class=" card-body">
                                    <strong> Strategies for Postpartum Fatigue:</strong> <br>

                                    1. Rest: Prioritize sleep and nap when possible. <br>
                                    2. Adjust goals: Ease up on chores to save energy. <br>
                                    3. Seek help: Enlist support from family or hire assistance. <br>
                                    4. Balanced diet: Choose energy-sustaining foods. <br>
                                    5. Chamomile tea: Calming effects aid sleep. <br>
                                    6. Warm showers: Relax muscles and calm the mind. <br>
                                    7. Lavender scent: Enhances sleep quality and bonding. <br>
                                    8. Hydration: Drink plenty of fluids, especially while breastfeeding. <br>
                                    9. Prenatal vitamins: Essential for recovery and breastfeeding. <br>
                                    10. Exercise: Start with gentle activities like short walks.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>


            </div>
        </div>
        <hr>
        <!--Postpartum Depression & Emotional Health-->
        <h1 id="dep">Postpartum Depression & Emotional Health</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/blues.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> The baby blues</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#blue1Content" aria-expanded="false" aria-controls="firstContent"> * What are the baby blues? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="blue1Content">
                                <div class=" card-body" >
                                    1. Comprehensive six-week postpartum checkup with OB or midwife. <br>
                                    2. Evaluates physical and emotional recovery, approves resumption of activities like exercise and sex. <br>
                                    3. Recommended within three weeks post-delivery; comprehensive checkup by 12 weeks. <br>
                                    4. Initial contact may be less comprehensive (e.g., phone call or virtual visit). <br>
                                    5. Urgent issues like excessive bleeding or potential infections require immediate attention. <br>
                                    6. Provider should be contacted promptly for concerns, irrespective of appointment timing.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#blue2Content" aria-expanded="false" aria-controls="d2Content"> * What are the most common baby blues symptoms? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="blue2Content">
                                <div class=" card-body" >
                                    <strong> Baby Blues Symptoms:</strong> <br>

                                    1. On edge, exhausted, and tearful. <br>
                                    2. Feelings of guilt during what should be a joyful time. <br>
                                    3. Sadness, anxiety, and feeling overwhelmed. <br>
                                    4. Mood swings, irritability, and restlessness. <br>

                                    <strong> Risk Factors:</strong> <br>

                                    1. History of depression, especially during pregnancy. <br>
                                    2. Family history of depression or mood disorders. <br>
                                    3. History of mood swings related to menstrual cycle.
                                </div>


                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#blue3Content" aria-expanded="false" aria-controls="d2Content"> * How to cope with the baby blues <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="blue3Content">
                                <div class=" card-body">
                                    <strong> Coping with Baby Blues:</strong> <br>

                                    1. Ask for help from partners, friends, or a postpartum doula. <br>
                                    2. Prioritize rest with short naps whenever possible. <br>
                                    3. Stay active with light exercise like walking. <br>
                                    4. Seek community support from other new moms. <br>
                                    5. Nourish yourself with snacks and water for energy and mood stability.

                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/dep.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> Postpartum depression (PPD) </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227" class="card-link" data-toggle="collapse" data-target="#dep1Content" aria-expanded="false" aria-controls="h1Content"> *  Navigating Postpartum Depression: Understanding, Support, and Recovery <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="dep1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227"> <strong> What is postpartum depression?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227"> <strong>How common is postpartum depression?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227"> <strong>What are the symptoms of postpartum depression?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227"> <strong>What causes postpartum depression?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227"> <strong>How long does postpartum depression last?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227"> <strong>What are the risk factors for postpartum depression?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227"> <strong>Is postpartum depression in men possible?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227"> <strong>What is the treatment for postpartum depression?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227"> <strong>How do I get help for postpartum depression?</strong></a> <br>


                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/ani.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Postpartum anxiety (PPA)</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ani1Content" aria-expanded="false" aria-controls="h1Content"> *  Unveiling Postpartum Anxiety: Coping Strategies and Support <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ani1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-anxiety_40009374"> <strong>What is postpartum anxiety?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-anxiety_40009374"> <strong> What are the most common postpartum anxiety symptoms?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-anxiety_40009374"> <strong>What causes postpartum anxiety?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-anxiety_40009374"> <strong>What's the treatment for postpartum anxiety?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-anxiety_40009374"> <strong>Can I have PPD and PPA at the same time?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-anxiety_40009374"> <strong>What is postpartum OCD?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-anxiety_40009374"> <strong>What is postpartum panic disorder?</strong></a> <br>

                                </div>
                            </div>
                        </li>


                    </ul>

                </div>


            </div>
        </div>
        <hr>

        <!--Postpartum Nutrition-->
        <h1 id="nut">Postpartum Nutrition</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/nut.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> The best postpartum foods for new moms</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#nut1Content" aria-expanded="false" aria-controls="firstContent"> *  A Guide to Postpartum Nutrition <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="nut1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-food-for-new-moms_40009352"> <strong> * Why is postpartum nutrition so important?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-food-for-new-moms_40009352"> <strong> * What nutrients do postpartum moms need most?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-food-for-new-moms_40009352"> <strong> * What are some great postpartum meals for new moms?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-food-for-new-moms_40009352"> <strong> * Are there any postpartum foods to avoid?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-food-for-new-moms_40009352"> <strong> * Do I need to take postpartum vitamins?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-food-for-new-moms_40009352"> <strong> * Tips for creating a healthy postpartum meal plan</strong></a> <br>

                                </div>
                            </div>
                        </li>


                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/nut2.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> Postpartum Diet Plan </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-depression-ppd_227" class="card-link" data-toggle="collapse" data-target="#nut2Content" aria-expanded="false" aria-controls="h1Content"> * 17 Powerful Foods For Postpartum Healing & Recovery <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="nut2Content">
                                <div class=" card-body" >
                                    <a href="https://www.romper.com/pregnancy/what-to-eat-postpartum"> <strong> Find out here</strong></a> <br>

                                </div>
                            </div>
                        </li>

                    </ul>

                </div>



            </div>
        </div>
        <hr>
        <!--Postpartum Fitness-->
        <h1 id="fit">Postpartum Fitness</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/belly.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> Everything you need to know about your post-pregnancy belly</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#fitt1Content" aria-expanded="false" aria-controls="firstContent"> * Why does my postpartum belly make me still look pregnant? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="fitt1Content">
                                <div class=" card-body" >
                                    - After childbirth, uterus contracts, and extra fluid is eliminated. <br>
                                    - Uterus takes 6-8 weeks to return to normal size. <br>
                                    - Post-pregnancy belly may take time to normalize. <br>
                                    - Body burns off stored fat with postpartum exercise. <br>
                                    - Adjusting to exercise routine takes time. <br>
                                    - Skin changes include linea nigra and stretch marks. <br>
                                    - C-section scars fade but may be embraced. <br>
                                    - Stretch marks fade in 6-12 months, linea nigra over a year. <br>
                                    - Stretch mark creams may help reduce visibility.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#fitt2Content" aria-expanded="false" aria-controls="firstContent"> * How long does it take for your postpartum belly to go away after birth? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="fitt2Content">
                                <div class=" card-body" >
                                    - Immediate tight stomach post-birth rare. <br>
                                    - "Pregnancy pouch" takes months to fade, may not fully disappear. <br>
                                    - "C-section pooch" shrinks with time, diet, exercise. <br>
                                    - Patience needed; abdomen took 9 months to stretch. <br>
                                    - Healthy eating, postpartum exercise, patience aid weight loss. <br>
                                    - Weight loss varies; breastfeeding may help but not guaranteed. <br>
                                    - Initial 15-pound weight loss common; gradual thereafter. <br>
                                    - Slow, steady weight loss recommended; avoid drastic calorie cuts. <br>
                                    - Balanced diet supports postpartum weight loss.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#fitt3Content" aria-expanded="false" aria-controls="firstContent"> * What can I do to get rid of my postpartum belly? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="fitt3Content">
                                <div class=" card-body" >
                                    - Exercise, diet, patience are vital for postpartum belly. <br>
                                    - Breastfeeding not significantly linked to weight loss. <br>
                                    - Postpartum exercise tones muscles, burns calories. <br>
                                    - Aerobic, core-focused exercises recommended. <br>
                                    - Ensure body readiness before starting exercise. <br>
                                    - Spot reduction not possible; focus on overall fitness. <br>
                                    - Cardio and core exercises beneficial. <br>
                                    - Clearance needed for exercise post-c-section. <br>
                                    - Diastasis recti may require attention and therapy. <br>
                                    - Belly wraps may aid in diastasis recti healing. <br>
                                    - Studies unclear on belly wraps' impact on weight loss. <br>
                                    - Consult provider before using belly wraps.
                                </div>
                            </div>
                        </li>


                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                    <img src="{{asset('site/baby/images/time.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> Postpartum exercise: When and how to get started</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#" class="card-link" data-toggle="collapse" data-target="#exx2Content" aria-expanded="false" aria-controls="h1Content"> * Navigating Postpartum Exercise: Guidelines, Plans, and Considerations<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="exx2Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-exercise-is-your-body-ready_196"> <strong>* When can I start working out after giving birth?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-exercise-is-your-body-ready_196"> <strong>* What are the guidelines for postpartum exercise?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-exercise-is-your-body-ready_196"> <strong>* What are some great postpartum workout plans for new moms?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-exercise-is-your-body-ready_196"> <strong>* When is it safe to start a postpartum ab workout?</strong></a> <br>
                                    <a href="https://www.babycenter.com/baby/postpartum-health/postpartum-exercise-is-your-body-ready_196"> <strong>* Are there any concerns about exercise and breastfeeding?</strong></a> <br>

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
