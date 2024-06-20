@extends('mother.dashboard.BABY.parent')
@section('title',' HAYAH HOSPITAL "Fatherhood"')

@section('content')

    <!-- <link rel="stylesheet" href="css/style.css')}}"> -->

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
            height:200px;
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
            <h1 style="margin-top: 140px;">Your Body</h1><br>
            <div class="row">
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="{{asset('site/pregnancy/images/blobid1661920818080.jpg')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>

                        <p>
                            Early pregnancy symptoms like nausea, breast tenderness, and fatigue may have been your first signs of pregnancy. For some women, pregnancy symptoms start even before a missed period – though they're more likely to surface later. Your body changes so much during pregnancy, inside and out: Find out what to expect from conception until labor and delivery,
                            see the best pregnancy sleeping positions, and learn which pregnancy symptoms warrant a call to your healthcare provider.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="link">
                    <a href="#Symptoms">Symptoms</a>
                    <a href="#labor">Labor & Delivery</a>
                    <a href="#Early">Early Signs of Pregnancy</a>
                    <a href="#sleep">sleep</a>
                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Symptoms-->
        <h1 id="Symptoms">Symptoms</h1>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/OIP (1).jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Why your pregnant belly feels tight and heavy</h4>
                            <!-- <p class="card-text" >
                                it's usually because your uterus is expanding to accommodate your growing baby.
                            </p> -->
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#firstContent" aria-expanded="false" aria-controls="firstContent"> * How does a pregnant belly feel in early pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="firstContent">
                                <div class=" card-body" >
                                    In early pregnancy, a pregnant belly may feel soft, slightly bloated, and may have a sense of tightness due to digestive changes. Visible changes, like a larger belly,
                                    usually become noticeable later in the first trimester or early in the second trimester.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#secondContent" aria-expanded="false" aria-controls="secondContent"> * When does your belly start feeling hard during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="secondContent">
                                <div class=" card-body">
                                    In pregnancy, the belly usually starts feeling firm in the second or third trimester as the uterus grows and presses against the abdomen. This firmness can be accompanied by mild cramping. Factors like height and body size can affect how and when the belly becomes hard. Gas can also contribute to belly hardness due to hormonal changes.
                                    Managing gas through exercise, diet, and medications can help alleviate discomfort.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#thirdContent" aria-expanded="false" aria-controls="thirdContent"> * My pregnant belly feels tight and heavy – what gives? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="thirdContent">
                                <div class=" card-body">
                                    In pregnancy, stomach tightness is normal, especially towards the end when the belly feels
                                    heavy and tight like a watermelon. This is due to the baby's growth and uterus expansion, causing stretched skin and itchiness. Pressure on internal organs may lead to breathing difficulties and more bathroom trips. Stomach tightening may be Braxton Hicks contractions, while sharp pains could be round ligament pain.
                                    Severe cramping or pain may signal complications like preterm labor or placental issues.
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Frequently asked questions: <i class=" fa fa-angle-double-down"></i></h6><hr>
                    <ul class="collapsible-links" style="list-style-type: circle;">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#fContent" aria-expanded="false" aria-controls="firstContent"> Is it normal to feel stomach tightening during pregnancy?   <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="fContent">
                                <div class=" card-body" >
                                    Yes, feeling stomach tightening during pregnancy is very normal.
                                    It happens as your body changes to accommodate your growing baby, and as your body prepares for labor.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#sContent" aria-expanded="false" aria-controls="secondContent">What causes stomach tightening during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="sContent">
                                <div class=" card-body">
                                    Stomach tightening during pregnancy can be caused by your expanding uterus,
                                    Braxton Hicks contractions, or labor contractions towards the end of pregnancy.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#tContent" aria-expanded="false" aria-controls="thirdContent"> Why does my stomach feel tight in late pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="tContent">
                                <div class=" card-body">
                                    Your growing belly and baby often cause a sensation of stomach tightening late in pregnancy. At this point, your uterus is crowding your internal organs and pushing up against your abdominal wall. If the tightening sensation isn't painful, but comes and goes, you may be having Braxton Hicks contractions.
                                    If you're feeling regular, painful stomach tightening late in pregnancy, it could be labor
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#foContent" aria-expanded="false" aria-controls="thirdContent">Can your stomach tighten without contractions? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="foContent">
                                <div class=" card-body">
                                    Yes. You may feel like your stomach is tightening as your uterus takes up more space, pushes against your abdomen, and stretches the skin on your belly.
                                    You can also feel stomach tightening from Braxton Hicks, which aren't true labor contractions.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/spot.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title">Spotting during pregnancy </h4>
                            <!-- <p class="card-text">

                                Spotting during pregnancy, especially in the first trimester, is common and often not serious.
                            </p>
                             -->
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#s1Content" aria-expanded="false" aria-controls="firstContent"> * Is it normal to have spotting during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="s1Content">
                                <div class=" card-body" >
                                    Light bleeding or spotting during pregnancy, common in early pregnancy, should prompt you to inform your doctor, even if it stops. While often minor, it can indicate serious issues like ectopic pregnancy or miscarriage. Medical tests may be needed.
                                    If bleeding is severe or accompanied by intense pain and you cannot reach your doctor, seek immediate medical attention.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#s2Content" aria-expanded="false" aria-controls="secondContent"> * What's the difference between spotting and bleeding during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="s2Content">
                                <div class=" card-body">
                                    Spotting during pregnancy is very light bleeding, similar to the beginning or end of a period, with small drops of blood on underwear, ranging from pink to red to brown. It's common in the first three months and may require wearing a panty liner or pad.
                                    Heavy bleeding can signal a problem and should be reported to your doctor promptly.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#s3Content" aria-expanded="false" aria-controls="thirdContent"> * Early pregnancy bleeding: What causes it? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="s3Content">
                                <div class=" card-body">
                                    Causes of light spotting or bleeding in early pregnancy include implantation bleeding, subchorionic hematoma, miscarriage, ectopic pregnancy, molar pregnancy, and infections such as chlamydia, gonorrhea, herpes, yeast infection, and trichomoniasis. Spotting after sex or a pelvic exam can also occur due to increased blood flow to the cervix or cervical polyps.
                                    Prompt medical attention is needed if bleeding is accompanied by abdominal pain or other concerning symptoms.
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Frequently asked questions: <i class=" fa fa-angle-double-down"></i></h6><hr>
                    <ul class="collapsible-links" style="list-style-type: circle;">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#q1Content" aria-expanded="false" aria-controls="firstContent">  What causes second or third trimester bleeding?   <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="q1Content">
                                <div class=" card-body" >
                                    Light bleeding later in pregnancy may be due to harmless causes like inflammation or cervical polyps.
                                    "Show," bloody discharge before delivery, signals the cervix preparing for labor. However,
                                    heavy bleeding warrants immediate medical attention and could indicate placental problems, late miscarriage,
                                    or preterm labor, characterized by symptoms like abdominal pain, contractions, and pelvic pressure.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#q2Content" aria-expanded="false" aria-controls="secondContent">How much bleeding during pregnancy is normal? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="q2Content">
                                <div class=" card-body">
                                    Light bleeding in pregnancy, especially during implantation, is common. However,
                                    bleeding can occur at any stage for various reasons. Inform your provider about any bleeding, as some causes can be serious.
                                    Heavier or persistent bleeding requires immediate medical attention to safeguard both your health and your baby's.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#q3Content" aria-expanded="false" aria-controls="thirdContent"> When should I call my doctor about spotting or bleeding during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="q3Content">
                                <div class=" card-body">
                                    Any bleeding in pregnancy should prompt a call to your doctor, especially if it's heavy or persistent.
                                    Provide details about the bleeding and
                                    any accompanying symptoms. RH-negative individuals experiencing bleeding should seek a Rhogam shot.
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/Haniger-DSC_5553_wide.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">Cramping during pregnancy </h4>
                            <!-- <p class="card-text">
                                Cramps during pregnancy are often nothing to worry about.
                                But if the pain is severe or you have other symptoms, cramping may signal a problem..
                            </p> -->
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#c1Content" aria-expanded="false" aria-controls="firstContent"> * Are cramps during pregnancy normal? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="c1Content">
                                <div class=" card-body" >
                                    Occasional mild cramps in pregnancy are normal, but severe or persistent cramps with other symptoms may signal a problem.
                                    Early pregnancy cramping and bleeding could indicate complications like infection, ectopic pregnancy, or miscarriage. Later in pregnancy, cramps might be harmless or indicate preterm labor or placental issues.
                                    Contact your healthcare provider if cramping persists, is severe, or is accompanied by other concerning symptoms.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#c2Content" aria-expanded="false" aria-controls="secondContent"> * Miscarriage <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="c2Content">
                                <div class=" card-body">
                                    Miscarriage, the loss of a pregnancy within the first 20 weeks,
                                    presents symptoms like vaginal bleeding, abdominal cramps, and passing tissue from the vagina. Contact your provider immediately if you have signs of miscarriage, particularly severe pain or heavy bleeding.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#c3Content" aria-expanded="false" aria-controls="thirdContent"> *Cramping in the second and third trimester <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="c3Content">
                                <div class=" card-body">


                                    1. Normal Causes: Expanding uterus, round ligament pain, and Braxton Hicks contractions.<br/>
                                    2. Serious Causes: Placental abruption, preterm labor, and urinary tract infections.<br/>
                                    3. Other Conditions: Ectopic pregnancy, gallstones, and preeclampsia.<br/>
                                    4. Consult Your Doctor: If you're concerned about symptoms, seek medical advice.<br/>
                                    5. Stay Informed: Be aware of warning signs during pregnancy. 😊🤰🏻
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Frequently asked questions: <i class=" fa fa-angle-double-down"></i></h6><hr>
                    <ul class="collapsible-links" style="list-style-type: circle;">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#cq1Content" aria-expanded="false" aria-controls="firstContent">  Is there anything I can do to relieve cramps during pregnancy?   <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="cq1Content">
                                <div class=" card-body" >

                                    1. Move Around: Gentle exercises can help with gas pain and constipation.<br/>
                                    2. Warm Bath or Shower: Soothe discomfort.<br/>
                                    3. Bend Toward Pain: Find relief.<br/>
                                    4. Stay Hydrated: Drink plenty of fluids.<br/>
                                    5. Lie Down: May alleviate Braxton Hicks contraction pain.<br/>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#cq2Content" aria-expanded="false" aria-controls="secondContent">When to call the doctor for cramps during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="cq2Content">
                                <div class=" card-body">
                                    <img src="{{asset('site/pregnancy/images/Ab-Cramping-Decision-Tree-750x1954.gif')}}" alt="cramb" style="width: 300px; height: 400px;">
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>

        <hr>

        <h1 id="labor">Labor& Delivery</h1>

        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/iStock-922691860_wide.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Cervical dilation and effacementy</h4>
                            <!-- <p class="card-text">

                                Learn about the stages of dilation and effacement,
                                what they mean for your labor and delivery, and common symptoms at each phase       </p> -->
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#d1Content" aria-expanded="false" aria-controls="firstContent"> * What is dilation? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="d1Content">
                                <div class=" card-body" >
                                    Dilation is the gradual opening of the cervix during labor to allow the baby to pass through the birth canal. It begins before labor starts and progresses from fully closed to 10 centimeters.
                                    Active labor typically starts around 6 centimeters dilation and lasts until full dilation, which usually takes hours.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#d2Content" aria-expanded="false" aria-controls="d2Content"> * What is effacement? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="d2Content">
                                <div class=" card-body">
                                    * Definition: Effacement involves the cervix shortening and becoming thinner.<br/>
                                    * Progression: It ranges from 0% (not effaced) to 100% (fully effaced).<br/>
                                    *Timing: Effacement can take weeks, days, or hours.<br/>
                                    *Labor Transition: Once fully effaced and dilated to 10 centimeters, labor enters the pushing stage.<br/>
                                    effacement is an essential part of the birthing process!
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#d3Content" aria-expanded="false" aria-controls="thirdContent"> *When will my cervix start to dilate and efface?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="d3Content">
                                <div class=" card-body">
                                    Cervical dilation and effacement vary for each individual, especially in first pregnancies.
                                    Effacement may occur before dilation, or both processes may happen gradually over days or weeks. Healthcare providers monitor cervix progress during labor using their fingers. However, even with some dilation and effacement, labor may not start immediately.
                                    Signs of labor, besides cervical changes, indicate when it's time to go to the hospital or birth center.
                                </div>
                            </div>
                        </li>
                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/baed7a75699012aaf099a776617dcd25.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title">Recognizing the signs of labor </h4>
                            <!-- <p class="card-text">

                                Early signs of labor can start days or even weeks before the big event.
                                                    </p>
                         -->
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#l1Content" aria-expanded="false" aria-controls="l1Content"> * What is labor? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="l1Content">
                                <div class=" card-body" >
                                    Labor is the process of delivering your baby and placenta from your uterus through your vagina. It typically occurs between 38 and 41 weeks of pregnancy.
                                    It involves three stages: cervical dilation and effacement, descent and birth of the baby, and delivery of the placenta.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#l2Content" aria-expanded="false" aria-controls="secondContent"> *Early signs of labor <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="l2Content">
                                <div class=" card-body">
                                    In the days or weeks leading up to labor, you may notice signs indicating its approach.
                                    These include "lightening" where your baby drops lower into your pelvis, loss of the mucus plug, or a "bloody show" of discharge tinged with blood. Changes in cervical dilation and effacement can also occur, along with more frequent Braxton Hicks contractions. Some women experience a nesting instinct, while others may have diarrhea or nausea. However,
                                    these signs can vary greatly among individuals and may not always indicate immediate labor.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#l3Content" aria-expanded="false" aria-controls="thirdContent"> * Signs of labor <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="l3Content">
                                <div class=" card-body">
                                    Signs of labor include regular contractions that become increasingly stronger and more frequent,
                                    along with back pain or pelvic pressure. Another sign is the rupture of membranes, commonly known as your water breaking, which may occur before contractions start. Preterm labor, before 37 weeks, can also exhibit similar symptoms, such as increased vaginal discharge, bleeding, abdominal pain, or contractions. If you experience any of these signs, especially before 37 weeks,
                                    contact your doctor or midwife immediately for further evaluation.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/GettyImages-1171128932.jpg')}}" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h4 class="card-title">Membrane sweep: One way to get your labor started </h4>
                            <!-- <p class="card-text">
                                Membrane stripping  is a procedure done to help induce labor
                                    if you're full term and your cervix is already somewhat dilated.
                            </p> -->
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#m1Content" aria-expanded="false" aria-controls="firstContent"> *What is a membrane sweep? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="m1Content">
                                <div class=" card-body" >
                                    A membrane sweep, or stripping, is a procedure done in the doctor's office where the practitioner manually separates the amniotic sac from the lower part of the uterus by sweeping a finger through the cervix.
                                    This can release prostaglandins, which may help ripen the cervix and induce contractions.
                                    <img src="{{asset('site/pregnancy/images/bc-induction-sweeping-of-membranes-logo_4x3.jpg')}}" alt="" style="width :300px;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#m2Content" aria-expanded="false" aria-controls="secondContent"> * When would I need a membrane sweep? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="m2Content">
                                <div class=" card-body">
                                    Membrane stripping may be recommended if you're nearing or past your due date to help kickstart labor. Prolonged pregnancies beyond 41 or 42 weeks can pose risks to both you and your baby, such as decreased placental function, potentially leading to complications like stillbirth. If there are concerns
                                    about you or your baby's well-being, your practitioner may suggest interventions like a C-section or expedited induction.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#m3Content" aria-expanded="false" aria-controls="thirdContent"> *Are membrane sweeps safe? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="m3Content">
                                <div class=" card-body">
                                    Yes, membrane stripping is safe when it's done at full term (39 to 41 weeks). Researchers have found that women who have a
                                    membrane sweep aren’t more likely than other women to end up having a C-section or other complications.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#m4Content" aria-expanded="false" aria-controls="thirdContent"> *What should I expect after a membrane sweep? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="m4Content">
                                <div class=" card-body">
                                    After the membrane sweep, you typically go home and wait for labor to start, usually within the next couple days. You may have some spotting and cramping during this time. However,
                                    if you’re having a lot of bleeding or pain, call your practitioner or go to the hospital.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <hr>
        <!-- Early Signs of Pregnancy-->

        <h1 id="Early">Early Signs of Pregnancy</h1>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/Feb-18-66_wide.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title">When will my pregnancy start to show?</h4>
                            <!-- <p class="card-text">

                                If it's your first pregnancy, or even if it isn't,you will know the answer      </p> -->
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#p1Content" aria-expanded="false" aria-controls="firstContent"> * When do you start showing in pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="p1Content">
                                <div class=" card-body" >
                                    *when you start showing during pregnancy can vary* based on individual factors. Here are the key points:<br/>

                                    1-Timing: Most women typically start showing between *late in the first trimester and midway into the second trimester*, which is around **12 to 20 weeks**[1] [3] [4].<br/>
                                    2-Factors Influencing Showing:<br/>
                                    - *First Pregnancy: If it's your first pregnancy, you'll likely notice the first signs of a bump early in the *second trimester*, between *weeks 12 and 16*.<br/>
                                    - *Second Pregnancy: If you've been pregnant before, you might develop a baby bump in the *first trimester* after your first pregnancy.<br/>
                                    - *Twins or More: Expecting twins or more? You might start showing even before the end of your *first trimester*.<br/>
                                    - *Abdominal Bloating: Sometimes what you think is a baby bump could be due to abdominal bloating caused by hormonal changes.<br/>
                                    Remember, every pregnancy is unique, so consult with your doctor if you have any concerns about your pregnancy timeline[1]. 😊
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#p2Content" aria-expanded="false" aria-controls="d2Content"> * Should I be worried if I haven't started showing yet? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="p2Content">
                                <div class=" card-body">
                                    Not showing in the second trimester is normal and doesn't necessarily mean your baby is too small. Your healthcare provider will monitor your baby's growth through fundal height measurements and ultrasounds if needed.
                                    Smaller-than-expected babies receive extra monitoring to ensure their well-being.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/ddc-thumbnail_4x3.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Pregnancy Due Date </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#h1Content" aria-expanded="false" aria-controls="h1Content"> * How is my due date calculated? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="h1Content">
                                <div class=" card-body" >
                                    There are several methods to determine your due date:<br/>
                                    1-First day of your last period: Counting 40 weeks from the first day of your last menstrual period (LMP), which is the most common method.<br/>

                                    2-Conception date: If you know precisely when you conceived, you can calculate your due date based on that date.<br/>

                                    3-IVF transfer date: For pregnancies conceived through IVF, the due date can be calculated from the embryo transfer date.<br/>

                                    4-Ultrasound scan: Early ultrasounds can help determine the due date more accurately than other methods, especially if the LMP is uncertain or if there are risk factors.<br/>
                                    Each method has its advantages and limitations, and healthcare providers may use different approaches based on individual circumstances.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#h2Content" aria-expanded="false" aria-controls="secondContent"> *Can my due date change?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="h2Content">
                                <div class=" card-body">
                                    Your healthcare provider may adjust your due date based on measurements from a first-trimester ultrasound if your baby's size doesn't align with the expected gestational age. This is especially common if you have irregular menstrual cycles, making conception date uncertain.
                                    They'll measure your baby during the ultrasound to determine a more accurate due date.
                                </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#h3Content" aria-expanded="false" aria-controls="thirdContent"> * How likely am I to give birth on my due date? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="h3Content">
                                <div class=" card-body">
                                    Due date calculations are approximate. Only 1 in 20 women deliver on their due date. Labor can happen any day within two weeks before
                                    or after the due date. For more on pregnancy timing, check out our pregnancy timing chart.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>


            </div>
        </div>
        <hr>
        <!-- sleep-->
        <h1 id="sleep">Sleep</h1>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/sleep.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title">What's the best sleeping position during pregnancy?</h4>
                            <!-- <p class="card-text">

                                Are you a back, tummy, or side sleeper? Find out whether your preferred sleeping position is safe during pregnancy      </p> -->
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sl1Content" aria-expanded="false" aria-controls="firstContent"> *I'm not a side sleeper. How can I make the switch to sleeping on my side? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sl1Content">
                                <div class=" card-body" >
                                    If you're used to sleeping on your back or tummy, you might try to make the transition to your side early in your pregnancy, while sleeping in general isn't uncomfortable. As you get bigger, you can:<br/>
                                    Use pillows under your belly, between your legs, and behind your back.<br/>
                                    Lean back against a pillow while on your side<br/>
                                    Lie in a half-sitting position, propped up against some pillows, which can be helpful if you suffer from heartburn.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#sl2Content" aria-expanded="false" aria-controls="d2Content"> * Is one side better than the other for sleeping during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="sl2Content">
                                <div class=" card-body">
                                    Some caregivers will suggest that you sleep on your left side in particular, because it's thought that blood flow is better to the heart, uterus, kidney, and baby when you're on your left side. Sleeping on your left side also keeps pressure off your big vein (inferior vena cava),
                                    which brings blood from your legs back up to your heart and keeps your circulation going.
                                    But there's no scientific evidence that the left is better than the right. So feel free to shift from side to side.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#sl3Content" aria-expanded="false" aria-controls="d2Content"> * Is it safe to sleep on my back during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="sl3Content">
                                <div class=" card-body">
                                    It's safe to sleep on your back during the first trimester, but as your uterus grows heavier, it's best to avoid this position. Back sleeping can compress the inferior vena cava, affecting blood flow to the placenta and causing discomfort for you, like dizziness or shortness of breath.
                                    Switching to your side is recommended to prevent such issues and discomfort. If you accidentally wake up on your back, just change position and go back to sleep.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#sl4Content" aria-expanded="false" aria-controls="d2Content"> * Is it safe to sleep on my stomach during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="sl4Content">
                                <div class=" card-body">
                                    Yes. Tender breasts and a growing belly may soon make sleeping on your stomach uncomfortable, but you can sleep face down for as long as it suits you.
                                    If you're used to sleeping on your stomach and want to continue, try using a donut-shaped pillow to support your growing belly. Some women find this allows them to sleep comfortably on their stomach.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#sl5Content" aria-expanded="false" aria-controls="d2Content"> * How to sleep when pregnant <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="sl5Content">
                                <div class=" card-body">
                                    Pregnancy symptoms like frequent urination, nausea, heartburn, and restless legs can make sleep challenging. Strategies include reducing caffeine, adjusting fluid intake, having a light snack before bed, and using relaxation techniques. Establishing a bedtime routine and maintaining a consistent sleep schedule can also help.
                                    If sleep troubles persist, consult your provider about safe sleep medications during pregnancy.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/food.jpg')}}" class="card-img-top" alt="Image 6">
                        <div class="card-body">
                            <h4 class="card-title">Waking up hungry: How to handle pregnancy hunger pains </h4>
                            <!-- <p class="card-text">
                                Appetite changes are par for the course in pregnancy, thanks to hormones and
                                increased metabolism.
                            </p> -->

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#fo1Content" aria-expanded="false" aria-controls="h1Content"> * Why am I waking up hungry during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="fo1Content">
                                <div class=" card-body" >
                                    Pregnancy hunger is real, and hormonal changes can cause fluctuating signals of hunger and fullness,
                                    leading to nighttime hunger. Your metabolism increases during pregnancy to support your baby's growth,
                                    requiring extra calories. In the second trimester, aim for about 340 extra calories per day, and in the third trimester,
                                    around 450 extra calories per day.
                                    Choose nutrient-dense, filling foods to satisfy hunger without excessive weight gain.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#fo2Content" aria-expanded="false" aria-controls="secondContent"> * How to deal with late-night pregnancy hunger pains <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="fo2Content">
                                <div class=" card-body">
                                    To curb nighttime hunger during pregnancy:<br/>

                                    1-Don't go to bed hungry: Add fiber-rich foods like fruits, vegetables, and whole grains to your dinner to stay full longer and prevent constipation.<br/>
                                    2-Snack smartly: Keep healthy options like hard-boiled eggs, fresh fruits, and cottage cheese in your fridge for midnight snacks to satisfy hunger without succumbing to junk food cravings.<br/>

                                    3-Limit processed foods: Opt for whole-grain options and fresh fruits over processed counterparts to avoid disrupting hunger-suppressing hormones.<br/>

                                    4-Stay hydrated-: Drink plenty of water throughout the day to stay full and support your body's increased needs during pregnancy, but try to limit intake closer to bedtime to minimize bathroom trips.<br/>

                                    5-Avoid heartburn triggers: Steer clear of fried, fatty, citrus, peppermint, and soda before bed to prevent nighttime heartburn or indigestion, which can disrupt sleep.
                                </div>
                        </li>

                    </ul>

                </div>
                <!--card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/sick.jpg')}}" class="card-img-top" alt="Image 6">
                        <div class="card-body">
                            <h4 class="card-title"> Morning sickness at night </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#si1Content" aria-expanded="false" aria-controls="h1Content"> *What causes morning sickness at night? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="si1Content">
                                <div class=" card-body" >
                                    Nausea and vomiting during pregnancy, commonly known as morning sickness, can occur at any time of the day,
                                    not just in the morning. It typically peaks around nine weeks gestation. The exact cause is uncertain but
                                    may involve rapidly rising hormone levels,
                                    increased sensitivity to smells, a sensitive gastrointestinal tract, and genetic factors.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#si2Content" aria-expanded="false" aria-controls="secondContent"> * How long does pregnancy nausea at night last? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="si2Content">
                                <div class=" card-body">
                                    Most women experience relief from pregnancy-related nausea, including morning sickness at night,
                                    by about 14 to 20 weeks of pregnancy. Some may continue to feel queasy throughout pregnancy. Discuss symptoms
                                    with your healthcare provider for evaluation and possible relief options, including safe medications.
                                    They'll assess for dehydration, appropriate weight gain, and rule out severe conditions like hyperemesis gravidarum.
                                </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#si3Content" aria-expanded="false" aria-controls="secondContent"> * Remedies for morning sickness at night <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="si3Content">
                                <div class=" card-body">
                                    <a href="https://youtu.be/atcbFTD_XQM"> <strong> click here to know them</strong></a>
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
