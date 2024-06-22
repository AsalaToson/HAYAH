
@extends('mother.dashboard.BABY.parent')
@section('title','HAYAH HOSPITAL "YOUR BABY"')

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
            <h1  style="margin-top: 140px;">Your Baby</h1><br>
            <div class="row">
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="{{asset('site/pregnancy/images/yourbaby.jpg')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>

                        <p class="home">
                            Fetal development is truly miraculous. See how your baby grows in the womb and the stages of
                            fetal development from fertilized egg to full-grown baby. If you're having twins, check out our
                            amazing pictures of how fraternal twins develop side by side. And if you're wondering what cord blood banking is
                            – and whether it's something you'll do for your baby – we have information on benefits to consider.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="link">
                    <a href="#twins">Twins & More</a>
                    <a href="#fetal">Fetal Health & Development</a>
                    <a href="#cord">Cord Blood Banking</a>

                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- twins & more-->
        <h1 id="twins">Twins & More</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/twins.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Signs you’re having twins or multiples</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#t1Content" aria-expanded="false" aria-controls="firstContent"> *Are there early signs of twins? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="t1Content">
                                <div class=" card-body" >
                                    Early signs suggestive of a twin pregnancy, such as severe morning sickness and rapid weight gain,
                                    aren't definitive proof and can occur in singleton pregnancies, emphasizing the necessity of ultrasound confirmation.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#t2Content" aria-expanded="false" aria-controls="secondContent"> * When will you find out you're having twins? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="t2Content">
                                <div class=" card-body">
                                    First-trimester ultrasounds typically detect twins, but a pregnancy blood test
                                    can reveal twins early due to higher hCG levels; however, ultrasound confirmation is essential.
                                    Doppler for twin heartbeats isn't always reliable; ultrasound remains the most accurate confirmation method.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#t3Content" aria-expanded="false" aria-controls="thirdContent"> * The difference between fraternal and identical twins <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="t3Content">
                                <div class=" card-body">
                                    Identical twins share a single fertilized egg and have the same DNA, while fraternal twins develop from two separate fertilized eggs and may have different DNA.
                                    Ultrasound can provide clues, but genetic testing is the definitive way to determine twin type.
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Frequently asked questions: <i class=" fa fa-angle-double-down"></i></h6><hr>
                    <ul class="collapsible-links" style="list-style-type: circle;">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#tq1Content" aria-expanded="false" aria-controls="firstContent"> What are the symptoms of twins in the first trimester?  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="tq1Content">
                                <div class=" card-body" >
                                    Symptoms when you're pregnant with twins are typically the same as pregnancy symptoms with one baby.
                                    In the first trimester, you can expect fatigue, nausea, breast tenderness, and other symptoms.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#tq2Content" aria-expanded="false" aria-controls="secondContent"> What does a twin pregnancy feel like? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="tq2Content">
                                <div class=" card-body">
                                    Women who are expecting twins may have more severe pregnancy symptoms such as fatigue, nausea, and breast tenderness.
                                    During a twin pregnancy, you'll likely gain weight faster and start showing sooner.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#tq3Content" aria-expanded="false" aria-controls="thirdContent"> Can you tell you're pregnant with twins from a pregnancy test? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="tq3Content">
                                <div class=" card-body">
                                    No. While a twin pregnancy may create higher levels of the pregnancy hormone detected in tests (hCG), your pregnancy test won't measure this.
                                    Plus, high levels of hCG don't necessarily mean you're expecting twins. You'll need an ultrasound to find out for sure.
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/t2.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title">What are the chances of having twins? </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#ch1Content" aria-expanded="false" aria-controls="firstContent"> * What can increase my chances of having twins? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="ch1Content">
                                <div class=" card-body" >
                                    Fraternal twins result from two separate eggs fertilized by different sperm cells, while identical twins occur when one egg splits into two embryos; fertility treatments and factors like genetics,
                                    age, history of twins, number of pregnancies, race, and body type influence the likelihood of having twins.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#ch2Content" aria-expanded="false" aria-controls="secondContent"> *Which fertility treatments affect my chances of twins? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ch2Content">
                                <div class=" card-body">
                                    Fertility treatments like gonadotropins and IVF increase the likelihood of multiple pregnancies by stimulating ovulation or transferring multiple embryos, with IVF resulting in twin births ranging
                                    from 5.1% to 7.3% across different age groups; however, these treatments can be costly and may not be covered by insurance.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#ch3Content" aria-expanded="false" aria-controls="thirdContent"> * How common are twins and multiples? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="ch3Content">
                                <div class=" card-body">
                                    The U.S. saw 31 sets of twins per 1,000 live births in 2021, with a decline in triplet and higher-order multiple births, possibly due to improved fertility treatments focusing on transferring fewer embryos to reduce high-risk pregnancies. This shift addresses
                                    complications like preterm birth, low birth weight, and gestational diabetes associated with multiple pregnancies.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/Twins-12-Weeks_4x3.png')}}" class="card-img-top" alt="Image 3" >
                        <div class="card-body">
                            <h4 class="card-title">4 weeks pregnant with twins </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#tp1Content" aria-expanded="false" aria-controls="firstContent"> * Twin pregnancy symptoms at 4 weeks <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="tp1Content">
                                <div class=" card-body" >
                                    At 4 weeks, symptoms of a twin pregnancy are often similar to those of a single pregnancy,
                                    though they may be more intense. Symptoms include missed period, fatigue, nausea/vomiting, implantation bleeding,
                                    breast tenderness, and mood swings, but only an ultrasound later on can confirm a twin pregnancy.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#tp2Content" aria-expanded="false" aria-controls="secondContent"> * Twin baby development at 4 weeks <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="tp2Content">
                                <div class=" card-body">
                                    At 4 weeks, blastocysts implant into the uterine wall, developing into embryos with distinct layers. Twins can be identical (from one split fertilized egg) or fraternal (from two separate fertilized eggs),
                                    each potentially having their own placenta and amniotic sac, while yolk sacs provide early nourishment until the placenta develops..
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

        <hr>
        <!--Fetal Health & Development-->
        <h1 id="fetal">Fetal Health & Development</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/pp.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">When will my baby drop?</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#dr1Content" aria-expanded="false" aria-controls="firstContent"> * Baby dropping signs and symptoms <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="dr1Content">
                                <div class=" card-body" >
                                    Signs of your baby dropping into the pelvis include increased urination frequency,
                                    discomfort while walking, back pain, hemorrhoids, eased breathing, reduced heartburn,
                                    and a lower belly appearance, possibly accompanied by the loss of the mucus plug due to pressure on the cervix.<br/>
                                    <img src="{{asset('site/pregnancy/images/bc-lightening-logo_4x3.png')}}" alt="" style="width: 280px ; height: 350px;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#dr2Content" aria-expanded="false" aria-controls="d2Content"> * What does it feel like when my baby drops? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="dr2Content">
                                <div class=" card-body">
                                    Feeling a noticeable downward movement or increased pelvic pressure as your baby drops can
                                    indicate more space and relief from diaphragm pressure, but if experienced before 37 weeks,
                                    contact your healthcare provider to rule out preterm labor.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#dr3Content" aria-expanded="false" aria-controls="thirdContent"> * How long after my baby drops does labor start?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="dr3Content">
                                <div class=" card-body">
                                    Baby dropping (lightening) doesn't predict labor onset, which could still be weeks away. Other signs like mucus plug loss, water breaking, and contractions may signal impending labor,
                                    but their presence or absence doesn't guarantee immediate labor initiation.
                                </div>
                            </div>
                        </li>
                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/Feb-18-44_4x3.jpg')}}" class="card-img-top" alt="Image 2" >
                        <div class="card-body">
                            <h4 class="card-title">Fetal movement: When can you feel your baby move? </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#fe1Content" aria-expanded="false" aria-controls="l1Content"> *When do you start feeling your baby move? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="fe1Content">
                                <div class=" card-body" >
                                    Feeling your baby move typically occurs between 16 to 22 weeks, earlier for veteran moms and later
                                    for those with higher BMI. Partners may feel the baby kick a few weeks after the mother first feels it.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#fe2Content" aria-expanded="false" aria-controls="secondContent"> * What does baby movement feel like?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="fe2Content">
                                <div class=" card-body">
                                    Baby movements progress from faint flutters to stronger kicks, rolls,
                                    and jabs as pregnancy advances, with patterns becoming more recognizable; changes in
                                    movement types and intensity occur as the baby grows and adjusts position, continuing until and during labor.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#fe3Content" aria-expanded="false" aria-controls="thirdContent"> * When do you usually feel your baby move? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="fe3Content">
                                <div class=" card-body">
                                    Fetal movement patterns vary, with kicks becoming more noticeable later in the second trimester or early third trimester; there's no set number of
                                    movements per day, but any decrease in usual activity should prompt contacting a healthcare provider for assessment.
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" style="height: 300px;" >
                        <img src="{{asset('site/pregnancy/images/babbbb.jpg')}}" alt="" style="height: 200px;">
                        <div class="card-body">
                            <h4 class="card-title"> Inside pregnancy: Weeks 28 to 37</h4>


                        </div>

                    </div>
                    <ul class="collapsible-links"  >
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#v1Content" aria-expanded="false" aria-controls="l1Content">  Inside pregnancy: Weeks 28 to 37 <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="v1Content">
                                <div class=" card-body" >
                                    <a href="https://youtu.be/BIzb-IqF4i8?si=5fKiv4JJp4-UC_mC">  <strong>watch video here</strong></a>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <!-- Cord Blood Banking-->
        <h1 id="cord">Cord Blood Banking</h1><hr>
        <h1 id="cord"></h1>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/SciSource_FD9678_wide_credit.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> Cord blood banking reviews</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#co1Content" aria-expanded="false" aria-controls="firstContent"> * Cord Blood Registry (CBR) reviews <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="co1Content">
                                <div class=" card-body" >
                                    About CBR<br/>
                                    Established: 1992<br/>
                                    Lab and storage location: Tucson, Arizona<br/>
                                    Accreditation & certification: AABB, CLIA, ISO 9001:2015<br/>
                                    FDA Registered: yes<br/>
                                    Self-reported samples: 925,000+<br/>
                                    <a href="https://www.cordblood.com/"> read more here</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#co2Content" aria-expanded="false" aria-controls="d2Content"> * Americord reviews <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="co2Content">
                                <div class=" card-body">
                                    About Americord<br/>
                                    Established: 2008<br/>
                                    Lab and storage locations: New York City, New York & Brownsville, Indiana<br/>
                                    Accreditation & certification: AABB, CLIA<br/>
                                    FDA Registered: yes<br/>
                                    Self-reported samples: 35,000<br/>
                                    <a href="https://www.americordblood.com/">read more here</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#co3Content" aria-expanded="false" aria-controls="d2Content"> * Viacord reviews <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="co3Content">
                                <div class=" card-body">
                                    About ViaCord<br/>
                                    Established: 1993<br/>
                                    Lab and storage location: Hebron, Kentucky<br/>
                                    Accreditation & certification: American Association of Blood Banks (AABB), CLIA<br/>
                                    FDA Registered: yes<br/>
                                    Self-reported samples: 500,000+<br/>
                                    <a href="https://www.americordblood.com/">read more here</a>
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/mi.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">What is cord blood banking? </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#bl1Content" aria-expanded="false" aria-controls="h1Content"> * What is cord blood? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="bl1Content">
                                <div class=" card-body" >
                                    Cord blood, rich in stem cells, offers potential lifesaving treatments for various diseases.
                                    Ongoing research and clinical trials investigate its efficacy in conditions like autism and brain injury.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#bl2Content" aria-expanded="false" aria-controls="secondContent"> * What is cord blood banking?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="bl2Content">
                                <div class=" card-body">
                                    Cord blood banking: donate to public banks for general use or pay for private storage for family-specific needs.
                                </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#bl3Content" aria-expanded="false" aria-controls="thirdContent"> * Will collecting my baby's cord blood interfere with delivery? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="bl3Content">
                                <div class=" card-body">
                                    Cord blood collection, typically performed post-delivery by experienced professionals, is quick,
                                    painless, and compatible with most birth plans, including home births for private storage.
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/cost.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title"> How much does cord blood banking cost? </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#cost1Content" aria-expanded="false" aria-controls="h1Content"> * How much does cord blood banking cost?  <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="cost1Content">
                                <div class=" card-body" >
                                    Private cord blood banking involves processing fees of $1,350 to $2,350 and annual storage
                                    fees of $100 to $175, with payment plans available,
                                    including no-interest installments or longer-term financing options.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#cost2Content" aria-expanded="false" aria-controls="secondContent"> *How to make private banking  affordable<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="cost2Content">
                                <div class=" card-body">
                                    Public banking may be practical for families due to cost; some private banks offer discounts,
                                    while financial aid is available for specific medical conditions or clinical trial participation.
                                </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#cost3Content" aria-expanded="false" aria-controls="thirdContent"> * What to consider when comparing bank prices? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="cost3Content">
                                <div class=" card-body">
                                    Consider hidden costs like shipping fees and calculate the net cost over 20 years;
                                    prioritize quality over price, as cheaper options may compromise on essential services like cell transport protection.
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