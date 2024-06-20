
@extends('mother.dashboard.BABY.parent')
@section('title','HAYAH HOSPITAL "DIET-and-FITNESS"')

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
            <h1 style="margin-top: 140px;"> Diet &Fitness</h1><br>
            <div class="row">
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="{{asset('site/pregnancy/images/th.jpg')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <p class="home">
                            A healthy pregnancy diet can do wonders for you and your baby. And exercise during pregnancy can boost your energy and your mood. There are plenty of great pregnancy-safe exercises, from prenatal yoga to swimming and weight training. You can probably continue your favorite pre-pregnancy workouts, but check in with your healthcare provider and make modifications if needed.
                            As far as your pregnancy diet, it's important to skip unsafe foods and eat nutritious meals and snacks. You can do it!
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="link">
                    <a href="#fitness">Fitness</a>
                    <a href="#nutrients">Pregnancy Nutrients</a>
                    <a href="#eating">Healthy Eating</a>
                    <a href="#food">The Best Foods</a>


                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- fitness-->
        <h1 id="fitness">Fitness</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/workout-preg-yoga-catcow-06_4x3.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Exercises and stretches to help with labor</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#fit1Content" aria-expanded="false" aria-controls="firstContent"> * Gravity exercises <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="fit1Content">
                                <div class=" card-body" >

                                    1- <strong>Walking</strong>: Walking during pregnancy is beneficial for increasing stamina and maintaining cardiovascular health. It's gentle on your joints and can help your baby descend due to the back-and-forth motion of your hips.<br/>
                                    2- <strong>Birth Ball Exercises</strong>:<br/>
                                    - <strong> Rocking</strong> : Sit on a birth ball and rock your pelvis forward and back, side to side, or in circles. This strengthens your abdomen and relieves pelvic and back pain.<br/>
                                    - <strong>Bouncing</strong>: Bounce up and down on a birth ball. This motion can assist your baby's descent during labor.<br/>
                                    - <strong>Replace Your Chair</strong>: Swap out your desk chair for a birth ball while working or use it while watching TV.

                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#fit2Content" aria-expanded="false" aria-controls="secondContent"> * Hip-opening exercises <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="fit2Content">
                                <div class=" card-body">
                                    - <strong>Squatting</strong>:<br/>
                                    - Stand with feet slightly more than hip-width apart, toes pointed outward.
                                    - Lower tailbone toward the floor, maintaining balance on heels.
                                    - Exhale while rising to standing position.<br/>
                                    - <strong>Butterfly stretch</strong>:<br/>
                                    - Sit with bottom on the floor, knees bent outward, soles of feet touching.
                                    - Lean forward with a straight back to feel stretch in inner thighs and lower back.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#fit3Content" aria-expanded="false" aria-controls="thirdContent"> * Back-stretching exercises <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="fit3Content">
                                <div class=" card-body">
                                    - <strong>Pelvic tilt</strong>:<br/>
                                    - Get on all fours, with hands shoulder-width apart and knees hip-width apart.
                                    - Inhale, tighten abdominal muscles, tuck buttocks under, and round back.
                                    - Exhale and return to neutral position, repeating slowly for 3-5 reps.<br/>
                                    - <strong>Back stretch</strong>:<br/>
                                    - Face a wall, bending forward until legs and upper body form a 90-degree angle.
                                    - Place hands against wall at shoulder level, press hands into wall, lean backward, hold for 5-10 seconds, and repeat 2-3 times.<br/>
                                    - <strong>Child's pose</strong>:<br/>
                                    - Sit on knees, open knees outward, lean forward, rest belly between legs.
                                    - Reach arms forward, rest forehead on floor for a gentle back stretch and hip opener.<br/>
                                    <a href="https://youtu.be/LympZqVz14s?si=lVn_Zgizm5HwpsKw"><strong>Prenatal yoga: Cat stretch pose</strong></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#fourth" class="card-link" data-toggle="collapse" data-target="#fit4Content" aria-expanded="false" aria-controls="thirdContent"> * Pelvic floor exercises <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="fit4Content">
                                <div class=" card-body">
                                    - <strong>Kegel exercises</strong>:<br/>
                                    - Identify pelvic floor muscles by interrupting urine flow.<br/>
                                    - Practice long, slow contractions: tighten for 5 sec, hold for 5 sec, relax for 5 sec.<br/>
                                    - Gradually increase to 10-15 contractions twice daily.<br/>
                                    - Perform quick flicks: squeeze for 2-3 sec, repeat 10-20 times, then work up to 40-60 contractions twice daily.<br/>
                                    - Ensure abdomen, buttocks, hips, and thighs remain still during exercises.<br/>
                                    - <strong>Perineal massage</strong>:<br/>
                                    - Massage tissue around back of vagina to aid stretching during childbirth.<br/>
                                    - Can be done at home in last weeks of pregnancy to reduce perineal trauma.

                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#fourth" class="card-link" data-toggle="collapse" data-target="#fit5Content" aria-expanded="false" aria-controls="thirdContent"> * Breathing exercises <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="fit5Content">
                                <div class=" card-body">
                                    - <strong>Deep, slow breathing:</strong><br/>
                                    - Close eyes to focus.<br/>
                                    - Inhale deeply through nose.<br/>
                                    - Exhale audibly through mouth in a sigh.<br/>
                                    - Release all body tension with each exhale.<br/>
                                    - Focus on relaxing different body parts with each breath out.<br/>
                                </div>
                            </div>
                        </li>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/EXX.jpeg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Exercising while pregnant: Signs to slow down or stop </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ex1Content" aria-expanded="false" aria-controls="firstContent"> * Signs you may be exercising too hard while pregnant <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ex1Content">
                                <div class=" card-body" >
                                    - <strong>Watch for signs of overexertion during pregnancy workouts:</strong><br/>
                                    - Unable to carry on a conversation due to breathlessness.<br/>
                                    - Feeling excessively tired or drained after exercise.<br/>
                                    - Experiencing pain during or after workouts, beyond normal soreness.<br/>
                                    - Muscle weakness affecting balance, elevated resting heart rate, frequent illness, mood changes, and sleep disturbances may also indicate overexertion.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#ex2Content" aria-expanded="false" aria-controls="secondContent"> * How to avoid overheating in pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ex2Content">
                                <div class=" card-body">
                                    - <strong>Watch for signs of overheating during exercise</strong>:<br/>
                                    excessive sweating, dizziness, headache, nausea, cramps, or racing heart.<br/>
                                    - Exercise indoors in well-ventilated, air-conditioned spaces or avoid midday outdoor workouts in hot climates.<br/>
                                    - Stay hydrated by drinking water before, during, and after exercise, and avoid high-heat activities like yoga in heated rooms, saunas, or hot tubs.<br/>
                                    - If experiencing symptoms of overheating, contact your healthcare provider and consider seeking cooler environments to prevent heat stress and dehydration.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#ex3Content" aria-expanded="false" aria-controls="thirdContent"> * Signs of a potential health problem or pregnancy complication <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ex3Content">
                                <div class=" card-body">
                                    - Stop exercising if you experience:<br/>
                                    - Vaginal bleeding, decreased fetal movement, persistent dizziness, or headache.<br/>
                                    - Fainting, heart palpitations, or chest pain.<br/>
                                    - Pain or swelling in the calf, which could indicate deep vein thrombosis.<br/>
                                    - Take a break and contact your healthcare provider immediately for evaluation and guidance.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#ex4Content" aria-expanded="false" aria-controls="thirdContent"> * Exercises to avoid during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ex4Content">
                                <div class=" card-body">
                                    - Avoid activities prone to hard falls: horseback riding, downhill skiing, snowboarding.<br/>
                                    - Steer clear of activities with sudden changes in direction, like racquet sports.<br/>
                                    - Skip high-contact sports such as soccer, basketball, boxing, and ice hockey.<br/>
                                    - Avoid scuba diving and exercising at altitudes over 6,000 feet.<br/>
                                    - After the first trimester, refrain from exercises lying flat on your back, like sit-ups, to maintain proper blood flow.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/run.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">Can you run while pregnant? </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#r1Content" aria-expanded="false" aria-controls="firstContent"> * Is running while pregnant safe? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="r1Content">
                                <div class=" card-body" >
                                    yes,but Before running during pregnancy, consult your healthcare provider to ensure safety, especially if you have medical conditions
                                    like heart or lung diseases, placenta previa, preeclampsia, anemia, or if you're carrying twins or multiples.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#r2Content" aria-expanded="false" aria-controls="secondContent"> * The benefits of running during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="r2Content">
                                <div class=" card-body">
                                    <strong>  Benefits of Running During Pregnancy:</strong><br/>
                                    - Reduced backaches, constipation, bloating, and swelling.<br/>
                                    - Better sleep, mood, and energy levels.<br/>
                                    - Strengthened heart and blood vessels.<br/>
                                    - Improved endurance, muscle tone, and overall fitness.<br/>
                                    - Supports healthy pregnancy weight gain and post-pregnancy weight loss.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#r3Content" aria-expanded="false" aria-controls="secondContent"> * Tips for running during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="r3Content">
                                <div class=" card-body">
                                    <strong>Running Tips for Each Trimester:</strong><br/>
                                    - <strong>Throughout pregnancy</strong>: Warm up, stay hydrated, stay cool, and protect your skin.<br/>
                                    - <strong>First trimester</strong>: Wear supportive shoes and bras that accommodate breast changes.<br/>
                                    - <strong>Second trimester</strong>: Mind balance, consider running path preferences, and use belly support if needed.<br/>
                                    - <strong>Third trimester</strong>: Pace may slow, take breaks if needed, and listen to your body. If experiencing contractions, stop, hydrate, and cool down; contact healthcare provider if contractions persist.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#r4Content" aria-expanded="false" aria-controls="secondContent"> * Signs to stop running during pregnancy<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="r4Content">
                                <div class=" card-body">
                                    - Pay attention to your body's signals and take breaks as needed.<br/>
                                    - Signs to ease up on exercise include joint or ligament pain, extreme exhaustion, prolonged muscle soreness, and breathlessness.<br/>
                                    - Stop exercising and contact your healthcare provider immediately if experiencing dizziness, fainting, headache, chest pain, contractions, vaginal bleeding, calf pain, or decreased fetal movement.<br/>
                                    - Don't hesitate to discuss any concerns with your healthcare provider.
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!--Pregnancy Nutrients-->
        <h1 id="nutrients">Pregnancy Nutrients</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/magni.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Magnesium during pregnancy</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ma1Content" aria-expanded="false" aria-controls="firstContent"> * Why you need magnesium during pregnancy<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ma1Content">
                                <div class=" card-body" >
                                    Magnesium is vital for both maternal and fetal health, supporting nerve, muscle function, and bone development.<br/> Adequate intake, readily achievable through a diverse diet, is crucial to prevent
                                    pregnancy complications like preterm labor, despite widespread deficiency among adults in the U.S.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#ma2Content" aria-expanded="false" aria-controls="d2Content"> * How much magnesium do pregnant women need? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ma2Content">
                                <div class=" card-body">
                                    During pregnancy, you need more magnesium than usual. Here are the details:<br/>

                                    <strong>Pregnant women 18 and under</strong> : 400 milligrams (mg) per day<br/>

                                    <strong> Pregnant women ages 19 to 30</strong>: 350 mg per day<br/>
                                    <strong> Pregnant women ages 31 to 50</strong> : 360 mg per day<br/>


                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#ma3Content" aria-expanded="false" aria-controls="thirdContent"> * Best foods with magnesium during pregnancy<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ma3Content">
                                <div class=" card-body">
                                    - Pumpkin seeds (1 oz, roasted): 156 mg<br/>
                                    - Chia seeds (1 oz): 111 mg<br/>
                                    - Almonds (1 oz, dry-roasted): 80 mg<br/>
                                    - Spinach (1/2 cup, boiled): 78 mg<br/>
                                    - Shredded wheat cereal (two large biscuits): 61 mg<br/>
                                    - Black beans (1/2 cup, cooked): 60 mg<br/>
                                    - Edamame (1 oz, shelled and cooked): 50 mg<br/>
                                    - Smooth peanut butter (2 tbsp): 49 mg<br/>
                                    - Potato (1, baked with skin): 43 mg<br/>
                                    - Brown rice (1/2 cup, cooked): 42 mg<br/>
                                    - Banana (1 medium): 32 mg<br/>
                                    - Farmed Atlantic salmon (3 oz, cooked): 26 mg<br/>
                                    - Avocado (1/2 cup, cubed): 22 mg.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#ma4Content" aria-expanded="false" aria-controls="thirdContent"> * Can you take magnesium supplements while pregnant?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ma4Content">
                                <div class=" card-body">
                                    While magnesium supplements aren't usually necessary during pregnancy due to the availability of this mineral in a diverse diet and prenatal vitamins, consult your healthcare provider if dietary intake is inadequate.<br/>
                                    Signs of deficiency include nausea, fatigue, muscle twitching, and irregular heartbeat; seek guidance if experiencing symptoms.
                                </div>
                            </div>
                        </li>
                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/milk.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> What's the best milk for pregnancy? </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#mi1Content" aria-expanded="false" aria-controls="l1Content"> * Cow's milk <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="mi1Content">
                                <div class=" card-body" >
                                    During pregnancy, cow's milk is recommended for its nutrient richness, especially calcium, vitamin D, and protein.<br/>
                                    Opt for low-fat varieties to manage saturated fat intake, avoiding raw milk due to bacterial contamination risks.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#mi2Content" aria-expanded="false" aria-controls="secondContent"> * Soy milk<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="mi2Content">
                                <div class=" card-body">
                                    Soy milk is a close alternative to cow's milk, with similar protein and fortified calcium content,
                                    though its natural compounds may inhibit calcium absorption. Opt for unsweetened varieties to manage sugar intake,
                                    making soy milk a favored choice among non-dairy options for pregnancy, according to some experts.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#mi3Content" aria-expanded="false" aria-controls="thirdContent"> * other <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="mi3Content">
                                <div class=" card-body">
                                    <strong>Almond milk :</strong><br/>
                                    Almond milk, an alternative to dairy and soy, offers lower protein but contains natural vitamin A and calcium,
                                    with fortified options available for added nutrition, making it suitable for those with dairy or soy allergies during pregnancy.<br/>
                                    <strong>Rice milk :</strong><br/>
                                    Rice milk, suitable for dairy, soy, and nut allergies, offers low protein, higher carbohydrates,
                                    and fortified vitamins like A and D, making it a potential alternative during pregnancy.<br/>
                                    <strong>Oat milk:</strong><br/>
                                    Oat milk, suitable for dairy, soy, and nut allergies, offers lower protein but higher carbohydrates,
                                    along with natural iron and B vitamins, often fortified with calcium, vitamins A, and D, making it
                                    a viable alternative during pregnancy,
                                    though those with gluten intolerance should ensure it's labeled gluten-free or make their own.


                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#mi4Content" aria-expanded="false" aria-controls="thirdContent"> * Nutrition tips for nondairy milk <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="mi4Content">
                                <div class=" card-body">
                                    Ensure adequate intake of calcium, vitamin D, and protein from alternative sources if relying on nondairy milk,
                                    especially for vegans or vegetarians during pregnancy; calcium-rich options include fortified juices,
                                    tofu, and leafy greens, while vitamin D sources include fatty fish and fortified cereals.

                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/ccc.jpg')}}"  class="card-img-top" alt="Image 2" >
                        <div class="card-body">
                            <h4 class="card-title"> Vitamin C during pregnancy</h4>


                        </div>

                    </div>
                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#vc1Content" aria-expanded="false" aria-controls="l1Content">  Why you need vitamin C during pregnancy<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="vc1Content">
                                <div class=" card-body" >
                                    Vitamin C is vital for collagen production, tissue repair, immune health, and iron absorption,
                                    crucial for both mother and baby during pregnancy. Deficiency signs include fatigue, gum inflammation,
                                    slow wound healing, and dry skin, emphasizing its importance for overall well-being.
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#vc2Content" aria-expanded="false" aria-controls="l1Content"> * How much vitamin C do pregnant women need?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="vc2Content">
                                <div class=" card-body" >
                                    - <strong>Pregnant women aged 18 and younger</strong> require 80 mg/day of vitamin C, while those aged 19 and older need 85 mg/day.<br/>
                                    -  <strong>Breastfeeding women aged 18 and younger</strong> should aim for 115 mg/day, and those aged 19 and older need 120 mg/day.<br/>
                                    - <strong>Nonpregnant women aged 18 and younger</strong> should consume 65 mg/day, while those aged 19 and older require 75 mg/day.<br/>
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#vc3Content" aria-expanded="false" aria-controls="l1Content"> * Best foods with vitamin C during pregnancy<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="vc3Content">
                                <div class=" card-body" >
                                    - 6 ounces of orange juice: 93 mg<br/>
                                    - 6 ounces of grapefruit juice: 70 mg<br/>
                                    - One medium kiwi: 64 mg<br/>
                                    - 1/2 cup of raw sweet green bell pepper: 60 mg<br/>
                                    - 1/2 cup of cooked broccoli: 51 mg<br/>
                                    - 1/2 cup of sliced strawberries: 49 mg<br/>
                                    - 1/2 medium grapefruit: 39 mg<br/>
                                    - One medium baked potato: 17 mg<br/>
                                    - One raw medium tomato: 17 mg<br/>
                                    - 1 cup of cooked spinach: 9 mg
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#vc4Content" aria-expanded="false" aria-controls="l1Content"> * Do you need a vitamin C supplement during pregnancy?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="vc4Content">
                                <div class=" card-body" >
                                    Meeting vitamin C needs through fruits, vegetables, and prenatal vitamins is typically sufficient during pregnancy, avoiding excessive supplementation. Maximum safe daily intake is 1800 mg for women aged 18 and younger, and 2000 mg for those 19 and older,
                                    with caution advised against large doses due to potential stomach upset and insufficient research on pregnancy outcomes.
                                </div>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <!-- Healthy Eating-->
        <h1 id="eating">Healthy Eating</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/eat.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> 11 foods and drinks to avoid during pregnancy</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#a1Content" aria-expanded="false" aria-controls="firstContent"> * 11 foods and drinks to avoid during pregnancy<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="a1Content">
                                <div class=" card-body" >
                                    1. Raw or undercooked meat, seafood, and poultry<br/>
                                    2. Runny or undercooked eggs<br/>
                                    3. Deli meats and prepared salads<br/>
                                    4. High-mercury fish<br/>
                                    5. Unpasteurized (raw) milk and soft cheese<br/>
                                    6. Food that's been sitting out too long<br/>
                                    7. Raw sprouts<br/>
                                    8. Unwashed produce<br/>
                                    9. Alcoholic beverages<br/>
                                    10. Fresh-squeezed juice<br/>
                                    11. Too much caffeine<br/>
                                    <a href="https://youtu.be/fCGCaTkGsXM?si=ZBrDs5c7ESZGSh53"><strong> read more here</strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/meals.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Meal planning during pregnancy </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#me1Content" aria-expanded="false" aria-controls="h1Content"> * A sample MyPlate pregnancy meal plan<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="me1Content">
                                <div class=" card-body" >
                                    - <strong>Grains:</strong> Aim for 7 ounces daily, with emphasis on whole grains like whole wheat bread or brown rice.<br/>
                                    - <strong>Fruits: </strong>Consume 2 cups daily, opting for fresh over canned or frozen, and choose varieties without added sugar.<br/>
                                    - <strong>Vegetables:</strong> Target 3 cups daily, varying colors for maximum nutrition; fresh vegetables are preferred but canned and frozen are also nutritious options.<br/>
                                    - <strong>Meat and beans:</strong> Include 6 ounces daily, choosing lean meats and limiting fish to 12 ounces per week to avoid excessive mercury exposure.<br/>
                                    - <strong> Dairy: </strong>Aim for 3 cups daily, including milk, yogurt, and cheese to meet calcium and protein needs.<br/>
                                    -  <strong>Fats and oils:</strong> Consume 6 teaspoons daily from healthy sources like oils, fatty fish, avocados, nuts, and seeds.<br/>
                                    - <strong>Discretionary calories:</strong> Budget 266 extra calories daily, ensuring they are accounted for within the overall calorie intake.<br/>
                                    - Aim for an average intake within the recommended ranges over the course of a week, adjusting as needed throughout pregnancy to meet changing nutritional needs and ensuring consistent, healthy weight gain.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#me2Content" aria-expanded="false" aria-controls="secondContent"> * Do these pregnancy meal plans work for everyone?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="me2Content">
                                <div class=" card-body">
                                    no,Consult your healthcare provider for personalized nutritional guidance if you're significantly overweight, underweight, a teenager, expecting multiples, or have gestational or pre-existing diabetes, to ensure optimal health for you and your baby. <br/>
                                    For gestational diabetes, a registered dietitian can help with meal planning and blood sugar management.
                                </div>
                        </li>

                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/salt.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> Salty foods during pregnancy </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#salt1Content" aria-expanded="false" aria-controls="h1Content"> * Why you need to eat salt during pregnancy  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="salt1Content">
                                <div class=" card-body" >
                                    "Revising Salt Recommendations: Moderate sodium intake crucial for fluid balance and vital bodily functions during pregnancy. <br/>
                                    Iodized salt essential for fetal brain development, emphasizing attention to sources for iodine intake."
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#salt2Content" aria-expanded="false" aria-controls="secondContent"> * Recommended salt intake during pregnancy<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="salt2Content">
                                <div class=" card-body">
                                    "Limiting Sodium Intake: Recommended maximum of 2,300 milligrams per day, with pregnant
                                    individuals often exceeding this, averaging 3,305 milligrams. Those with health conditions like diabetes, high blood pressure,
                                    or kidney disease should aim for 1,500 milligrams or less daily during pregnancy."
                                </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#salt3Content" aria-expanded="false" aria-controls="thirdContent"> * What happens if I eat too much salt in pregnancy?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="salt3Content">
                                <div class=" card-body">
                                    "Balancing Sodium Intake: Excessive salt consumption can strain kidneys, elevate blood pressure, and increase risk of gestational hypertension and preeclampsia.
                                    Aim for appropriate sodium levels to support pregnancy health, emphasizing quality sources."
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>



            </div>
        </div>
        <hr>

        <!-- The Best Foods-->
        <h1 id="food">The Best Foods</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/healthy.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> 10 healthy recipes for pregnancy</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#eat1Content" aria-expanded="false" aria-controls="firstContent"> * Pregnancy recipes<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="eat1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/kale-salad-with-dried-fruit-toasted-almonds_10412466"><strong> 1-Kale salad with dried fruit & toasted almonds</strong></a>  <br/>
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/frittata-with-chard-red-onion-feta_10412470"> <strong> 2-Frittata with chard, red onion & feta</strong></a>  <br/>
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/ratatouille-with-baked-eggs_10412479"><Strong>3-Ratatouille with baked eggs</Strong></a><br/>
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/pan-seared-salmon-with-lentils-leeks_10412487"> <strong> 4-Pan-seared salmon with lentils & leeks</strong></a> <br/>
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/steamed-cod-with-spring-veggies_10412489"> <strong>5-Steamed cod with spring veggies</strong></a><br/>
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/grilled-chicken-with-pumpkin-seed-pesto_10412491"><strong>6-Grilled chicken with pumpkin-seed pesto</strong></a><br/>
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/quinoa-with-shrimp-tomato-avocado_10412493"><strong>7-Quinoa with shrimp, tomato & avocado</strong></a><br/>
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/chicken-soup-with-farro-shiitake-mushrooms_10412494"><strong>8-Chicken soup with farro & shiitake mushrooms</strong></a><br/>
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/black-bean-sweet-potato-tacos-with-avocado_10412496"><strong>9-Black bean & sweet potato tacos with avocado</strong></a><br/>
                                    <a href="https://www.babycenter.com/pregnancy/diet-and-fitness/yellow-curry-with-chicken-spinach-butternut-squash_10412497"><strong>10-Yellow curry with chicken, spinach & butternut squash</strong></a><br/>
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/healthysnacks_4x3.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">10 healthy snacks for pregnancy </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sn1Content" aria-expanded="false" aria-controls="h1Content"> * healthy snacks <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sn1Content">
                                <div class=" card-body" >
                                    <strong>1. Apple and cheese</strong><br/>
                                    1 medium apple with hard cheese like cheddar, Monterey Jack, or Swiss<br/>
                                    <strong>2. Egg on an English muffin</strong><br/>
                                    1 egg (scrambled or fried) on an English muffin or toast<br/>
                                    <strong>3. Homemade trail mix</strong><br/>
                                    1/2 cup pumpkin seeds, 1/2 cup dried tart cherries, 1/2 cup raw almonds, and 1/2 cup dark chocolate chunks (makes 2 cups; 1/2 cup = 1 serving)<br/>
                                    <strong>4. Greek yogurt parfait</strong><br/>
                                    A small container of plain Greek yogurt topped with 1 cup blueberries and 2 tablespoons chopped walnuts<br/>
                                    <strong>5. Veggies or chips and guacamole</strong><br/>
                                    1/2 cup cucumber slices, 1/2 cup carrots, and 1/2 cup celery sticks with 1/4 cup guacamole<br/>
                                    <strong>6. Cottage cheese, fruit, and granola</strong><br/>
                                    A small bowl of 1 percent-fat cottage cheese topped with 1 cup of diced mango and 2 tablespoons of high-fiber granola<br/>
                                    <strong>7. Mashed avocado on crackers</strong><br/>
                                    Half an avocado spread onto 1 slice of rye crisp bread or crackers<br/>
                                    <strong>8. Tortilla with hummus and tomatoes</strong><br/>
                                    1 whole-grain tortilla or pita, 1/2 cup halved cherry tomatoes, and 1/4 cup hummus<br/>
                                    <strong>9. Toaster waffle with almond butter and pear</strong><br/>
                                    1 toasted, whole-wheat frozen waffle or slice of whole-wheat toast topped with 2 tablespoons almond butter and sliced pear<br/>
                                    <strong>10. Melon with lime</strong><br/>
                                    Watermelon or other melon with a squeeze of lime
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/121726301.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> What to eat when pregnant: The 12 best foods </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#eg1Content" aria-expanded="false" aria-controls="h1Content"> * Top Foods for Optimal Maternal and Fetal Health  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="eg1Content">
                                <div class=" card-body" >
                                    <strong>1-Eggs</strong>
                                    <strong>2-Salmon</strong> <br>
                                    <strong>3-Beans</strong> <br>
                                    <strong>4-Sweet potatoes</strong> <br>
                                    <strong>5-Whole grains</strong> <br>
                                    <strong>6-Walnuts</strong> <br>
                                    <strong>7-Greek yogurt</strong> <br>
                                    <strong>8-Broccoli and dark leafy greens</strong> <br>
                                    <strong>9-Lean meats and poultry</strong><br>
                                    <strong>10-Colorful fruits and veggies</strong> <br>
                                    <strong>11-Avocados</strong>    <br>
                                    <strong>12-Dried fruit</strong>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#tip2Content" aria-expanded="false" aria-controls="secondContent"> * Tips for a healthy pregnancy diet<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="tip2Content">
                                <div class=" card-body">
                                    1. Focus on protein, healthy fats, and essential nutrients like folic acid, iron, and calcium.<br/>
                                    2. Avoid overeating; minimal extra calories in first trimester, around 340 extra in second, and 450 extra in third.<br/>
                                    3. Stay away from risky foods, alcohol, and limit caffeine.<br/>
                                    4. Choose nutritious snacks over processed or sugary options.<br/>
                                    5. Manage discomfort with small, frequent meals.<br/>
                                    6. Adapt to baby's growth with smaller meal portions.<br/>
                                    7. Consider a tailored pregnancy meal plan for optimal nutrition.
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
