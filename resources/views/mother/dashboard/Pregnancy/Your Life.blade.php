<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="HAYAH Responsive web " />
    <title> HAYAH HOSPITAL "Your Life" </title>
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
                    <img src="{{asset('site/pregnancy/../assets/images/logo2.png')}}" alt="logo"  style="height: 75px; width: 400px;" >

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
            <h1 style="margin-top: 140px;"> Your Life</h1><br>
            <div class="row">
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="{{asset('site/pregnancy/images/working.jpg')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <p class="home">
                            Your pregnancy will change your life in ways big and small – from how you work and travel to how you dress.
                            Pregnancy travel requires more planning, and working while pregnant may be a challenge due to pregnancy symptoms like nausea and fatigue. We have tips on coping with the rollercoaster of pregnancy emotions and information on handling depression during pregnancy if it crops up. And we haven't
                            forgotten about maternity clothes: We'll explain the secrets of maternity fashion and how maternity clothes sizes work.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="link">
                    <a href="#travel">Travel</a>
                    <a href="#work">Work & Career</a>
                    <a href="#life">Emotional Life</a>
                    <a href="#fashion">Beauty & Fashion</a>



                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Travel-->
        <h1 id="travel">Travel</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/travel.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Traveling while pregnant: Your complete guide</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#tr1Content" aria-expanded="false" aria-controls="firstContent"> * Is traveling while pregnant safe? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="tr1Content">
                                <div class=" card-body" >

                                    <strong>Yes ,</strong>Travel during pregnancy is generally safe if you're not close to your due date or experiencing complications. Consult your doctor, avoid high-risk destinations, and be mindful of activities. <br/>
                                    Flying is usually fine until around 36 weeks domestically; check with your doctor and airline for international travel.

                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#tr2Content" aria-expanded="false" aria-controls="secondContent"> * When to avoid pregnancy travel <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="tr2Content">
                                <div class=" card-body">
                                    1. Avoid travel during pregnancy if you have life-threatening conditions like placental abruption, preeclampsia, or are in preterm labor.<br/>
                                    2. Consult your doctor before travel if you have other high-risk conditions such as intrauterine growth restriction or placenta previa for personalized advice.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#tr3Content" aria-expanded="false" aria-controls="thirdContent"> * When to call your doctor while traveling <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="tr3Content">
                                <div class=" card-body">
                                    1. Call your doctor immediately if experiencing symptoms like vaginal bleeding,<br/> signs of pre-term labor,<br/> ruptured membranes, <br/>severe cramping, <br/>high blood pressure, <br/>severe nausea or vomiting,<br/> or COVID-19 symptoms while traveling or at home.<br/>
                                    2. Prompt medical attention is crucial for ensuring the safety of both mother and baby during pregnancy.
                                </div>
                            </div>
                        </li>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/motion.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Does pregnancy make me prone to motion sickness? </h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#mo1Content" aria-expanded="false" aria-controls="firstContent"> *  "Understanding the Connection Between Motion Sickness and Morning Sickness in Pregnancy"  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="mo1Content">
                                <div class=" card-body" >
                                    <strong>YES ,</strong>  Motion sickness during pregnancy, similar to morning sickness, is common, especially for those with a history of motion sickness.<br/> Strategies like sitting in the front seat, choosing a stable seat location, and snacking lightly before travel may help alleviate symptoms.
                                    Acupressure wristbands may offer relief, but their effectiveness is inconclusive.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#mo2Content" aria-expanded="false" aria-controls="secondContent"> * Can I take medications for motion sickness during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="mo2Content">
                                <div class=" card-body">
                                    <strong>To get relief from motion sickness</strong><br/>
                                    1. Over-the-counter drugs like dimenhydrinate (Dramamine) or diphenhydramine (Benadryl) can provide relief from motion sickness during pregnancy, but consult your doctor first.<br/>
                                    2. Avoid combining Dramamine and Benadryl, and discuss any prescription medications like scopolamine (Scopace) with your healthcare provider to assess potential risks and side effects during pregnancy.
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/drive.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">What should I do if I'm in a car accident while I'm pregnant? </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ac1Content" aria-expanded="false" aria-controls="firstContent"> * Importance of Immediate Medical Evaluation and Post-Trauma Care" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ac1Content">
                                <div class=" card-body" >
                                    1. After a car accident during pregnancy, seek immediate medical evaluation, even if you feel fine, to assess for potential injuries, particularly placental abruption.<br/>
                                    2. In the ER, you'll undergo examinations and monitoring, including obstetric exams and ultrasound, to ensure the well-being of both you and your baby; watch for symptoms like vaginal bleeding or decreased fetal movement afterward and seek medical attention if they occur.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#ac2Content" aria-expanded="false" aria-controls="secondContent"> * Safety tips for driving while pregnant<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ac2Content">
                                <div class=" card-body">
                                    1. Wear seat belt properly to prevent placental abruption.<br/>
                                    2. Avoid distracted driving.<br/>
                                    3. Ensure functional airbags and maintain safe distance from steering wheel.<br/>
                                    4. Carry emergency contact info.<br/>
                                    5. Consider pregnancy ID bracelet with medical details.<br/>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!--Work & Career-->
        <h1 id="work">Work & Career</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/baba.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Paternity leave: A guide for fathers and partners</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ba1Content" aria-expanded="false" aria-controls="firstContent"> * What is paternity leave?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ba1Content">
                                <div class=" card-body" >
                                    1. Paternity or partner leave allows fathers/partners to bond with their child and support the mother, fostering more equal division of parental responsibilities.<br/>
                                    2. Studies show benefits include improved bonding, reduced emotional strain for mothers, but the lack of a national paid family leave policy in the U.S. remains a challenge.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#ba2Content" aria-expanded="false" aria-controls="d2Content"> * How common is paternity leave? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ba2Content">
                                <div class=" card-body">
                                    -Challenges such as fear of job repercussions, financial concerns, and societal perceptions hinder paternity leave uptake,
                                    but evolving attitudes and policy changes are promoting inclusivity and encouraging more fathers to take time off for family.


                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#ba3Content" aria-expanded="false" aria-controls="thirdContent"> * How to prepare for paternity leave<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ba3Content">
                                <div class=" card-body">
                                    1. Consult your company's HR department early on to discuss leave options and give at least 30 days' notice for FMLA, considering whether to take leave simultaneously or staggered.<br/>
                                    2. Create a transition plan for colleagues, seek advice from coworkers who have taken paternity leave, and prioritize being present with your partner and new baby while sharing caregiving responsibilities and supporting your partner's recovery.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/mama.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Maternity leave: A guide for expecting moms</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#mama1Content" aria-expanded="false" aria-controls="l1Content"> * What is maternity leave? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="mama1Content">
                                <div class=" card-body" >
                                    1. Maternity leave is crucial for mothers to recover, adjust, and bond with their newborns, with studies linking it to improved health outcomes for both mother and baby.<br/>
                                    2. Despite benefits, the U.S. lacks a federally mandated paid family leave policy, highlighting the need for legislative action to support new parents.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#mama2Content" aria-expanded="false" aria-controls="secondContent"> * How long is maternity leave?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="mama2Content">
                                <div class=" card-body">
                                    1. Maternity leave duration varies based on available benefits and financial circumstances, ranging from a few days to up to a year, with the average in the U.S. being around 10 weeks.<br/>
                                    2. Despite FMLA offering up to 12 weeks of unpaid leave, many U.S. employees don't qualify or can't afford to take the full duration, leading to shorter maternity leaves, sometimes as brief as a few days or weeks.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#mama3Content" aria-expanded="false" aria-controls="thirdContent"> * How does maternity leave work if I'm self-employed? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="mama3Content">
                                <div class=" card-body">
                                    1. Self-employed individuals can opt for maternity leave with a private disability policy covering pregnancy and postpartum, alongside health insurance.<br/>
                                    2. Plan finances, communicate with clients about leave, and explore short-term disability options.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/worrr.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Maternity leave: A guide for expecting moms</h4>


                        </div>
                    </div>
                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#mwc1Content" aria-expanded="false" aria-controls="l1Content"> * Can you work while you're pregnant?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="mw1Content">
                                <div class=" card-body" >
                                    1. Most pregnant women can continue working, but adjustments may be necessary for strenuous jobs or exposure to harmful chemicals; understanding workplace rights and modifying tasks are essential.<br/>
                                    2. Physical modifications, breaks, and communication with healthcare providers are key for managing pregnancy symptoms and ensuring a safe work environment.
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#mwc2Content" aria-expanded="false" aria-controls="l1Content"> * Complications that might prevent you from working while pregnant<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="mw2Content">
                                <div class=" card-body" >
                                    1. Pregnancy complications such as preterm labor risk, high blood pressure, placenta previa, or intrauterine growth restriction may require reduced work hours or stopping work entirely.<br/>
                                    2. Depending on severity, doctors may prescribe pregnancy bed rest to manage complications, potentially inducing stress and anxiety that can lead to further complications.
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#vc3Content" aria-expanded="false" aria-controls="l1Content"> * How to handle pregnancy and work <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="vc3Content">
                                <div class=" card-body" >
                                    1. Notify HR of your pregnancy and explore maternity leave policies, considering additional family leave benefits.<br/>
                                    2. For morning sickness, prepare an office kit, consider sharing your pregnancy earlier for severe cases, and discuss accommodations with your boss.<br/>
                                    3. Pregnancy shouldn't hinder job performance; seek support from colleagues and take needed breaks. <br/>
                                    4. Discuss travel plans with your healthcare provider, carry medical records, and consider COVID-19 travel policies.<br/>
                                    5. Seek advice from experienced colleagues regarding maternity leave, productivity, and work-life balance, and inquire about flexible work arrangements.
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#vc4Content" aria-expanded="false" aria-controls="l1Content"> * How to stay comfortable at work during pregnancy<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="vc4Content">
                                <div class=" card-body" >
                                    1. Take breaks to rest and move around.<br/>
                                    2. Stretch to ease back pain.<br/>
                                    3. Wear comfy clothes and shoes.<br/>
                                    4. Stay hydrated and eat balanced meals.<br/>
                                    5. Adjust your workspace for comfort.<br/>
                                    6. Manage stress with relaxation techniques.<br/>
                                    7. Prioritize health without guilt.<br/>
                                    8. Accept help from co-workers.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <!--Emotional Life-->
        <h1 id="life">Emotional Life</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/pregnancy-anxiety-after-loss_4x3.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> How I managed my anxiety during pregnancy after miscarriage and loss</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#an1Content" aria-expanded="false" aria-controls="firstContent"> * The mental impact of previous pregnancy losses on healthy pregnancies<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="an1Content">
                                <div class=" card-body" >
                                    Experiencing pregnancy loss can lead to ongoing anxiety in future pregnancies,
                                    despite the low likelihood of recurrence. This emotional impact highlights the need for greater support and understanding for
                                    individuals facing challenges in conceiving and carrying a child.<br/>
                                    <strong>"Once you've experienced a pregnancy loss,
                                        the chances of having another miscarriage is just five percent, but that five percent may always be top of mind."</strong>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#an2Content" aria-expanded="false" aria-controls="firstContent"> * Signs of anxiety in pregnancy after loss<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="an2Content">
                                <div class=" card-body" >
                                    Experiencing anxiety during pregnancy is common, often manifesting as constant worry about the baby's well-being.<br/>
                                    Symptoms may include intrusive thoughts, changes in sleep patterns, racing heartbeat, and physical discomfort.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#an3Content" aria-expanded="false" aria-controls="firstContent"> * Its okay to not feel okay<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="an3Content">
                                <div class=" card-body" >
                                    Experiencing mixed emotions during pregnancy after a loss is normal, but seeking support from loved ones and healthcare providers can help manage anxiety.<br/>
                                    Despite challenges, there's hope for a brighter outcome, as illustrated by personal stories of resilience and eventual joy.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/tired.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Tired of being pregnant? You're not alone </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ti1Content" aria-expanded="false" aria-controls="h1Content"> * Is it normal to feel tired of being pregnant? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ti1Content">
                                <div class=" card-body" >
                                    <strong>YES ,</strong>It's normal for women to grow tired of pregnancy as it progresses,
                                    facing discomfort and inconvenience, such as frequent urination and physical changes, which can overshadow the initial excitement.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#ti2Content" aria-expanded="false" aria-controls="secondContent"> * Tips for dealing with feeling tired of being pregnant <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ti2Content">
                                <div class=" card-body">
                                    1. Redirect conversations away from pregnancy-related topics.<br/>
                                    2. Find support from other expectant mothers.<br/>
                                    3. Make the most of the time before your baby arrives by focusing on preparations and self-care.<br/>
                                    4. Be honest about your feelings and seek professional help if needed.<br/>
                                </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#ti3Content" aria-expanded="false" aria-controls="secondContent"> * Fun things to do when you're pregnant and bored <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ti3Content">
                                <div class=" card-body">
                                    1. Schedule lunch or phone dates with friends for post-baby catch-ups.<br/>
                                    2. Expand your knowledge by exploring new books or hobbies.<br/>
                                    3. Declutter and organize your living space for a stress-free environment.<br/>
                                    4. Treat yourself to a prenatal massage or other self-care activities.<br/>
                                    5. Prepare for post-baby life by setting up time-saving shortcuts like freezer meals.<br/>
                                    6. Stay active with doctor-approved exercise routines like walking or prenatal yoga.<br/>
                                    7. Engage in gardening to stay occupied and create a backyard retreat.<br/>
                                    8. Strengthen your relationship with your partner through quality time and romantic gestures.
                                </div>
                        </li>

                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/quia.jpg')}}" class="card-img-top" alt="Image 5" >
                        <div class="card-body">
                            <h4 class="card-title">Depression during pregnancy </h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#de1Content" aria-expanded="false" aria-controls="h1Content"> * When should I be worried about pregnancy depression? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="de1Content">
                                <div class=" card-body" >
                                    If persistent boredom or anxiety during pregnancy <strong>affects your functioning</strong>,<br/>
                                    - consult your healthcare provider as it could indicate depression. Symptoms include trouble concentrating, changes in eating and sleeping patterns, and feelings of worthlessness.<br/>
                                    - Untreated depression can impact prenatal care and baby's health, so seek support from a therapist or consider medication if necessary.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#salt2Content" aria-expanded="false" aria-controls="secondContent"> * Depression during pregnancy quiz<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="salt2Content">
                                <div class=" card-body">
                                    <a href="https://www.babycenter.com/pregnancy/your-life/pregnancy-depression-quiz_20000527"> <strong>Take it here</strong></a>
                        </li>

                    </ul>

                </div>



            </div>
        </div>
        <hr>

        <!-- Beauty & Fashion-->
        <h1 id="fashion">Beauty & Fashion</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/skin.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> Safe skin care during pregnancy</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#eat1Content" aria-expanded="false" aria-controls="firstContent"> * Are there skin products that I should avoid during pregnancy?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="eat1Content">
                                <div class=" card-body" >
                                    <strong> 1-Retinoids</strong>  <br/>
                                    <strong> 2-Hydroxy Acids</strong>  <br/>
                                    <strong> 3-Acne products</strong>  <br/>
                                    <strong> 4-Hair removers & minimizers</strong>  <br/>
                                    <strong> 5-Sunscreens</strong>  <br/>
                                    <strong> 6-Makeup</strong>  <br/>
                                    <strong> 7-Steroids</strong>  <br/>
                                    <a href="https://www.babycenter.com/pregnancy/your-life/safe-skin-care-during-pregnancy_1490031"><strong>learn more here...</strong></a>
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/husband.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Maternity photoshoot ideas and tips </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#pho1Content" aria-expanded="false" aria-controls="h1Content"> * How to get great maternity pictures <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="pho1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/pregnancy/your-life/maternity-picture-ideas_40008016"> <strong>Look Here...</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/clothes.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> Cute maternity clothes ideas for every pregnancy body type </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#eg1Content" aria-expanded="false" aria-controls="h1Content"> * Dressing for Every Body Shape <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="eg1Content">
                                <div class=" card-body" >
                                    <strong>1-If you're curvy or plus-size and pregnant</strong> <br/>
                                    <strong>2-If you're carrying low</strong> <br>
                                    <strong>3-If you're carrying high</strong> <br>
                                    <strong>4-If you're petite and pregnant</strong> <br>
                                    <a href="https://www.babycenter.com/pregnancy/your-life/pregnancy-body-types-and-how-to-dress-them_10406965"><strong>YOUR GUIDE HERE</strong></a> <br>

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