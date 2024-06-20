<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="HAYAH Responsive web " />
    <title> HAYAH HOSPITAL "Health & Safety" </title>
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
            margin: 0 5px;
            padding: 5px 5px;
            /*border: 1px solid #ff00d9;*/
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
            <h1 style="margin-top: 140px;"> Health & Safety</h1><br>
            <div class="row">
                <!-- Image Div -->
                <div class="col-md-6">
                    <img src="{{asset('site/pregnancy/images/doc.jpg')}}" class="img-fluid w-100 h-100" alt="Image Description">
                </div>

                <!-- Text Div -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <p class="home">
                            To have a healthy pregnancy, do your best to get good prenatal care right away.
                            Your healthcare provider will help you make decisions about prenatal genetic testing,
                            manage your pregnancy weight gain, and cope with any pregnancy complications.
                            It's important to call your provider if you have any signs of a miscarriage, such as bleeding, spotting,
                            or abdominal pain. If you have a high-risk pregnancy, you'll get extra care to help you have a
                            healthy pregnancy and baby
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="link">
                    <a href="#test">Tests & Screening</a>
                    <a href="#medi">Medications</a>
                    <a href="#care">Prenatal Care</a><br/>
                    <a href="#loss">Pregnancy Loss</a>
                    <a href="#health">Pregnancy Health</a>
                    <a href="#risk">High Risk Pregnancy</a>
                    <a href="#vaccines">Vaccines</a>
                    <a href="#weight">Weight Gain</a>
                    <a href="#complicate">Complications</a>

                </div>
            </div>

        </div>

        <hr><hr>
        <!-- container -->
        <!-- Tests & Screening-->
        <h1 id="test">Tests & Screening</h1><hr>
        <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/sex.jpg')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h4 class="card-title">When and how can I find out my baby's sex?</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#sex1Content" aria-expanded="false" aria-controls="firstContent"> * When and how can you find out your baby's sex?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="sex1Content">
                                <div class=" card-body" >

                                    During pregnancy, methods to determine the baby's sex include:<br/>

                                    1. IVF with sex selection: Accurate testing during in vitro fertilization.<br/>
                                    2. NIPT: Blood test detecting chromosomal conditions, revealing the baby's sex.<br/>
                                    3. CVS: Genetic test analyzing placental cells, revealing the baby's sex.<br/>
                                    4. Amniocentesis: Genetic test detecting defects and abnormalities, also revealing the baby's sex.<br/>
                                    5. Mid-pregnancy ultrasound: Observation of genitalia to determine the baby's sex, typically done between 18-22 weeks.

                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#sex2Content" aria-expanded="false" aria-controls="secondContent"> * Do gender predictor tests work?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="sex2Content">
                                <div class=" card-body">
                                    - Most gender predictor tests offer only a 50/50 chance of accuracy.<br/>
                                    - At-home kits claim accuracy but lack scientific evidence.<br/>
                                    - Urine-based kits generally lack predictive accuracy.<br/>
                                    - Healthcare providers offer more reliable methods.<br/>
                                    - "Gender" and "sex" are used interchangeably, though they represent distinct concepts.                    </div>
                        </li>



                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/urine.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Routine urine tests during pregnancy</h4>
                            <p class="card-text">
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#test1Content" aria-expanded="false" aria-controls="firstContent"> * Will I have a urine test at each prenatal visit <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="test1Content">
                                <div class=" card-body" >
                                    - Urine testing practices during pregnancy vary among providers.<br/>
                                    - Usually, a sample is taken at the first visit for analysis.<br/>
                                    - Some providers test at each visit, while others only test if symptoms arise.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#test2Content" aria-expanded="false" aria-controls="secondContent"> *  How to take a pregnancy urine test<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="test2Content">
                                <div class=" card-body">
                                    - Wash hands and use an antiseptic wipe to clean the vulva.<br/>
                                    - Urinate briefly into the toilet, then collect urine in the provided cup.<br/>
                                    - Avoid touching the inside of the cup with fingers.<br/>
                                    - Cap the cup and hand it to the medical assistant.<br/>
                                    - The assistant tests urine with a colored test stick and notes results for the healthcare provider.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#test3Content" aria-expanded="false" aria-controls="secondContent"> * What's my urine tested for?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="test3Content">
                                <div class=" card-body">
                                    - <strong>Sugar/Glucose:</strong><br/>
                                    - Occasional small amounts normal, elevated levels may indicate gestational diabetes.<br/>
                                    - Glucose test typically done between 24-28 weeks.<br/>

                                    - <strong> Protein: </strong><br/>
                                    - Excess protein signals UTI, kidney issues, or preeclampsia.<br/>
                                    - Blood pressure checked if protein present, further testing may include urine lab analysis or kidney function assessment.<br/>

                                    - <strong> Ketones: </strong><br/>
                                    - Produced during fat breakdown, sign of dehydration or low carb intake.<br>
                                    - Testing prompted by severe nausea/vomiting or weight loss.<br>
                                    - High levels with sugar in urine may indicate diabetes.<br>

                                    -  <strong>Bacteria and Blood Cells: </strong><br>
                                    - Urine screened for bacteria indicating UTI during first prenatal visit.<br>
                                    - UTIs, even symptomless, require treatment to prevent complications.<br>
                                    - Completing antibiotics crucial.<br>
                                    - Negative initial test lowers UTI risk later, except with chronic UTI history.<br>

                                    - <strong>Additional Blood Tests: </strong><br>
                                    - Conducted at first prenatal visit to assess various factors.
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/blood.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Routine blood tests during the first trimester of pregnancy</h4>
                            <p class="card-text">
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#blood1Content" aria-expanded="false" aria-controls="firstContent"> * Blood type, Rh factor, and antibody screening <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="blood1Content">
                                <div class=" card-body" >
                                    - At the first prenatal visit, blood type and Rh factor are checked.<br/>
                                    - Rh-negative individuals receive Rhogam shot during pregnancy and after birth if baby is Rh-positive.<br/>
                                    - Shot prevents antibody development, which could harm future pregnancies.<br/>
                                    - Blood checked for Rh antibodies and other antibodies affecting pregnancy, with monitoring if detected.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#blood2Content" aria-expanded="false" aria-controls="secondContent"> *  Other blood tests<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="blood2Content">
                                <div class=" card-body">
                                    1. <strong>CBC:</strong> Checks for anemia, infection, and blood clotting.<br/>
                                    2. <strong>Rubella:</strong> Tests immunity; vaccination if needed postpartum.<br/>
                                    3. <strong>Hepatitis B:</strong> Identifies carriers; protects baby if positive.<br/>
                                    4. <strong>Syphilis:</strong> Screens for STI; treatment if positive.<br/>
                                    5. <strong>HIV: </strong>Detects virus; reduces transmission risk.<br/>
                                    6. <strong>Additional Tests:</strong> Chickenpox immunity, diabetes risk, chromosomal abnormalities, genetic disorders, kidney/liver function for preeclampsia.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#blood3Content" aria-expanded="false" aria-controls="secondContent"> * When will I get the results of the blood tests?<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="blood3Content">
                                <div class=" card-body">
                                    - Test results take 1-2 weeks, discussed at next appointment.<br/>
                                    - Genetic screening results may come sooner.<br/>
                                    - Patient portals offer online access to results.<br/>
                                    - Prenatal test overview by trimester is available.
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>


            </div>
        </div>

        <hr>
        <!--Medications-->
        <h1 id="medi">Medications</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/pain.jpg')}}" class="card-img-top" alt="Image 1" style="height: 170px;">
                        <div class="card-body">
                            <h4 class="card-title">Round ligament pain in pregnancy</h4>
                            <p class="card-text">
                                "Causes and Relief Strategies for Pregnant Women"
                            </p>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#pain1Content" aria-expanded="false" aria-controls="firstContent"> * What is round ligament pain? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="pain1Content">
                                <div class=" card-body" >
                                    Round ligament pain in pregnancy arises from the stretching and thickening of
                                    the round ligaments supporting the growing uterus, causing occasional discomfort but posing no significant harm.<br>
                                    <img src="{{asset('site/pregnancy/images/Round-Ligament-Pain-FINAL-with-text_wide.jpg')}}" alt="" style="width: 280px; height: 200px;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#pain2Content" aria-expanded="false" aria-controls="d2Content"> * What does round ligament pain feel like? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="pain2Content">
                                <div class=" card-body">
                                    Round ligament pain manifests as sharp or stabbing sensations, triggered by movements like getting out of bed or coughing. It may also feel like tugging or pulling in the pelvic area, often following physical activity.<br/>
                                    The pain starts deep in the groin and moves outward along the bikini line toward the hips.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#third" class="card-link" data-toggle="collapse" data-target="#pain3Content" aria-expanded="false" aria-controls="thirdContent"> * How to get relief from round ligament pain <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="pain3Content">
                                <div class=" card-body">
                                    - Rest when pain occurs.<br/>
                                    - Maintain good posture.<br/>
                                    - Change positions for comfort.<br/>
                                    - Pace yourself during activities.<br/>
                                    - Massage the area gently.<br/>
                                    - Apply warmth with a water bottle or bath.<br/>
                                    - Consider a maternity support garment.<br/>
                                    - Consult provider for pain relief options like acetaminophen.

                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/]run.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Why does shortness of breath happen during pregnancy? </h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#short1Content" aria-expanded="false" aria-controls="l1Content"> * What causes shortness of breath during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="short1Content">
                                <div class=" card-body" >
                                    - Increased oxygen demand requires larger breaths.<br>
                                    - Growing uterus pressures the diaphragm.<br>
                                    - Weight gain adds strain on muscles for breathing.<br>
                                    - More blood production strains the heart and lungs.<br>
                                    - Health conditions like asthma can worsen breathlessness.<br>
                                    - Baby dropping before labor may offer relief.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#short2Content" aria-expanded="false" aria-controls="l1Content"> * What can I do if I have shortness of breath during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="short2Content">
                                <div class=" card-body" >
                                    - Take things slower during activity.<br>
                                    - Maintain good posture for optimal lung expansion.<br>
                                    - Use extra pillows to prop up in a semi-sitting position at night.<br>
                                    - Lift arms overhead to relieve pressure on rib cage and enhance oxygen intake.<br>
                                    - Be patient, as breathlessness typically improves after childbirth.
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/anti.jpg')}}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h4 class="card-title"> Are antibiotics safe to take during pregnancy? </h4>

                        </div>
                    </div>
                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#anti1Content" aria-expanded="false" aria-controls="l1Content"> * Can you take antibiotics while pregnant? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="anti1Content">
                                <div class=" card-body" >
                                    - Many antibiotics are safe during pregnancy, prescribed for bacterial infections.<br>
                                    - Healthcare providers weigh risks versus benefits before prescribing.<br>
                                    - Untreated illness can pose greater risks than antibiotic exposure.<br>
                                    - Safety depends on factors like dosage, duration, and pregnancy stage.
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#anti2Content" aria-expanded="false" aria-controls="l1Content"> * Safe antibiotics in pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="anti2Content">
                                <div class=" card-body" >
                                    - Safe antibiotics in pregnancy: penicillins, macrolides, cephalosporins, and metronidazole for specific infections.<br>
                                    - Studies on birth defects inconclusive due to multiple pregnancy factors.<br>
                                    - Likelihood of antibiotics causing problems for baby is low.
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#anti3Content" aria-expanded="false" aria-controls="l1Content"> * Antibiotics to avoid during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="anti3Content">
                                <div class=" card-body" >
                                    - Tetracycline, streptomycin, and ciprofloxacin avoided in pregnancy due to risks.<br>
                                    - Tetracycline can discolor teeth and affect bone development.<br>
                                    - Streptomycin may cause hearing loss in baby.<br>
                                    - Ciprofloxacin can lead to abnormal bone development in the unborn baby.
                                </div>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <!-- Prenatal Care-->
        <h1 id="care">Prenatal Care</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/wife.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> Midwife vs doctor: Which is right for you?</h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#wife1Content" aria-expanded="false" aria-controls="firstContent"> * Midwife vs ob-gyn: What to consider <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="wife1Content">
                                <div class=" card-body" >
                                    - Decide between obstetrician-gynecologist (ob-gyn), family physician, certified nurse-midwife (CNM), or direct-entry midwife based on preferences.<br>
                                    - Consider factors like pregnancy risk, birth location preference, and desired level of intervention.<br>
                                    - Midwives offer holistic care with fewer interventions and personalized support.<br>
                                    - Birth centers and home births are midwife options, hospitals offer epidural options and immediate medical intervention.<br>
                                    - Interview both midwives and doctors for decision-making.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#wife2Content" aria-expanded="false" aria-controls="firstContent"> * Midwife vs ob-gyn: What most women choose <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="wife2Content">
                                <div class=" card-body" >
                                    - Obstetricians are most common, but certified nurse-midwives (CNMs) are increasingly popular, attending 9.4% of US deliveries.<br>
                                    - Some practices offer both ob-gyns and midwives, and some have family physicians.<br>
                                    - Choose a provider who makes you comfortable, meets your individual needs, respects your wishes, and practices in the right setting for you.                        </div>
                            </div>
                        </li>


                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/ppp.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">What to expect from third trimester prenatal appointments</h4>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#care1Content" aria-expanded="false" aria-controls="h1Content"> * How often will you have prenatal appointments during the third trimester? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="care1Content">
                                <div class=" card-body" >
                                    - In the third trimester, prenatal appointments occur every two weeks from 28 to 36 weeks, then weekly until delivery.<br>
                                    - Some practices have multiple practitioners sharing the on-call schedule, so you may meet different providers as your due date approaches.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#second" class="card-link" data-toggle="collapse" data-target="#care2Content" aria-expanded="false" aria-controls="secondContent"> * What happens at your third trimester appointments? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse" id="care2Content">
                                <div class=" card-body">
                                    - Third trimester prenatal appointments involve routine checks like blood pressure, weight, and urine analysis.<br/>
                                    - Baby's heartbeat and fundal height are monitored, and ultrasounds may be ordered to assess growth and position.<br/>
                                    - Cervical checks may be done if past due date.<br/>
                                    - Rh-negative women receive Rh immune globulin injection.<br/>
                                    - Discussions cover symptoms, contractions, baby's movements, swelling, mood, sleep, and diet.
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <!-- Pregnancy Loss-->
        <h1 id="loss">Pregnancy Loss</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/miss.jpg')}}" class="card-img-top" alt="Image 4" >
                        <div class="card-body">
                            <h4 class="card-title"> Miscarriage: Signs, symptoms, and causes </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#miss1Content" aria-expanded="false" aria-controls="firstContent"> * What is a miscarriage? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="miss1Content">
                                <div class=" card-body" >
                                    Miscarriage, or spontaneous abortion, is common, with 10-20% of pregnancies ending this way, predominantly in the first trimester.<br>
                                    Risk decreases with pregnancy progression, with only a small percentage occurring after 12 weeks.<br>
                                    Additionally, up to 50% of fertilized eggs may be lost before or during implantation, termed as a chemical pregnancy.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#miss2Content" aria-expanded="false" aria-controls="firstContent"> * Signs & causes of miscarriage<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="miss2Content">
                                <div class=" card-body" >
                                    <strong> Signs of Miscarriage:</strong><br>
                                    - Bleeding or spotting<br>
                                    - Abdominal pain<br>

                                    <strong> Causes of Miscarriage:</strong><br>
                                    - Chromosomal abnormalities in the fertilized embryo<br>
                                    - Problems during early development<br>
                                    - Blighted ovum or early pregnancy loss<br>

                                    <strong>Additional Information:</strong><br>
                                    - Miscarriage not caused by stress, exercise, or sex<br>
                                    - Positive pregnancy tests may occur despite empty gestational sacs<br>
                                    - Cause of miscarriage often remains unknown
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#miss3Content" aria-expanded="false" aria-controls="firstContent"> * Treatment for miscarriage<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="miss3Content">
                                <div class=" card-body" >
                                    Treatment options for miscarriage: <br>

                                    1. Wait for tissue to pass naturally or opt for a surgical procedure called suction dilation and curettage (D&C).<br>

                                    2. Consider safety concerns, genetic testing, and Rh-negative blood type.<br>

                                    3. Suction D&C procedure involves fasting, speculum insertion, cervix cleaning, dilation, sedation, local anesthesia, tissue suction, and curette scraping.<br>

                                    4. Procedure duration: about 15 to 20 minutes, tissue removal takes less than ten minutes.<br>
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/recover.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Understanding and recovering from a stillbirth </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#still1Content" aria-expanded="false" aria-controls="h1Content"> * What is stillbirth? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="still1Content">
                                <div class=" card-body" >
                                    Stillbirth is the loss of a baby in the womb at or after 20 weeks of pregnancy,<br>
                                    Most stillbirths occur before labor starts, but some happen during labor and delivery.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#still2Content" aria-expanded="false" aria-controls="h1Content"> * Signs of stillbirth <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="still2Content">
                                <div class=" card-body" >
                                    - Absence of fetal movement is a common sign of stillbirth.<br>
                                    - Diagnosis can occur during a prenatal appointment when no heartbeat is detected using a Doppler device.<br>
                                    - Ultrasound confirms fetal demise.<br>
                                    - Further tests like blood tests and amniocentesis may be suggested to identify potential causes.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#still3Content" aria-expanded="false" aria-controls="h1Content"> * Conceiving again after a stillbirth<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="still3Content">
                                <div class=" card-body" >
                                    - Most women who experience stillbirth can have healthy pregnancies later.<br>
                                    - Knowing the cause of stillbirth helps assess the risk of recurrence.<br>
                                    - Conditions like lupus, chronic hypertension, or diabetes, and complications increase the risk.<br>
                                    - Anxiety about future pregnancies is common; coping strategies exist.<br>
                                    - Consult healthcare provider before trying to conceive again.<br>
                                    - Specialists like maternal-fetal medicine doctors and genetic counselors can provide additional support.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/che.jpg')}}" class="card-img-top" alt="Image 5" >
                        <div class="card-body">
                            <h4 class="card-title">What is a chemical pregnancy? </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#che1Content" aria-expanded="false" aria-controls="h1Content"> * What is a chemical pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="che1Content">
                                <div class=" card-body" >
                                    - Chemical pregnancy occurs very early, often before the fifth week of pregnancy.<br>
                                    - It may result in a faintly positive pregnancy test due to hCG production despite incomplete implantation.<br>
                                    - Not considered a clinical pregnancy as it lacks visible signs like a gestational sac or fetal heartbeat.<br>
                                    - Referred to as a biochemical pregnancy or chemical miscarriage.<br>
                                    - Between 8 to 33 percent of all pregnancies and 18 to 22 percent of IVF pregnancies are chemical pregnancies.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#che2Content" aria-expanded="false" aria-controls="h1Content"> * Signs & causes of a chemical pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="che2Content">
                                <div class=" card-body" >
                                    <strong> Signs:</strong><br>
                                    Late period, faint positive test, occasional cramping, no typical pregnancy symptoms.<br>
                                    <strong>Causes:</strong><br>
                                    Chromosomal abnormalities, hormone level issues, ectopic pregnancy, uterine abnormalities.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#che3Content" aria-expanded="false" aria-controls="h1Content"> * Can I get pregnant after a chemical pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="che3Content">
                                <div class=" card-body" >
                                    <strong>absolutely ,</strong>Chemical pregnancies indicate fertility and increase the likelihood of a successful pregnancy in the future.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>




            </div>
        </div>


        <!-- Pregnancy Health-->
        <h1 id="health">Pregnancy Health</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/water.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> How much water should I drink while pregnant? </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#water1Content" aria-expanded="false" aria-controls="firstContent"> * Health benefits of drinking water <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="water1Content">
                                <div class=" card-body" >
                                    <strong> Drinking water during pregnancy:</strong><br>
                                    1. Supports body functions like digestion and hormone production.<br>
                                    2. Is crucial due to increased metabolism and blood volume.<br>
                                    3. Reduces swelling and fluid retention.<br>
                                    4. Prevents constipation and hemorrhoids.<br>
                                    5. Lowers the risk of UTIs by flushing out bacteria.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#water2Content" aria-expanded="false" aria-controls="firstContent"> * How much water to drink while pregnant <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="water2Content">
                                <div class=" card-body" >
                                    - Aim for about 10 cups of water daily during pregnancy, adjusting based on activity levels and weather.<br>
                                    - Check urine color and thirst levels for hydration status.<br>
                                    - Plain water is best, but other beverages and water-rich foods also contribute.<br>
                                    - Limit sugary drinks and caffeine.<br>
                                    - Increase water intake gradually, especially if experiencing morning sickness in the first trimester.<br>
                                    - Maintain consistent hydration throughout the second trimester due to increased blood volume.<br>
                                    - Stay well-hydrated in the third trimester to prevent issues like dehydration-induced contractions.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#water3Content" aria-expanded="false" aria-controls="firstContent"> * Signs and symptoms of dehydration <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="water3Content">
                                <div class=" card-body" >
                                    - Dehydration signs: extreme thirst, reduced urination, dark urine, fatigue, confusion, dizziness.<br>
                                    - Seek medical help for severe dehydration: inability to retain fluids, disorientation, excessive sleepiness, bloody or black bowel movements, or prolonged diarrhea over 24 hours.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/clean.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Is it safe to use cleaning products while pregnant? </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#clean1Content" aria-expanded="false" aria-controls="h1Content"> * "Safe Cleaning Practices During Pregnancy" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="clean1Content">
                                <div class=" card-body" >
                                    Cleaning During Pregnancy: Safety Tips<br>
                                    - Most household cleaners are safe, but avoid heavy-duty ones and air fresheners.<br>
                                    - Frequent use of bleach-based sprays may increase respiratory risks for children.<br>
                                    - Skip dry cleaning to avoid harmful solvents.<br>
                                    - Opt for non-toxic products or make your own with baking soda and vinegar.<br>
                                    - Follow label instructions, ventilate rooms, wear gloves, and avoid mixing cleaning products.<br>
                                    - Seek help for heavy cleaning tasks if needed.<br>
                                    - Discuss workplace safety if handling hazardous chemicals.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/well.jpg')}}" class="card-img-top" alt="Image 5" >
                        <div class="card-body">
                            <h4 class="card-title">I'm pregnant: What do I do now? </h4>
                            <p class="card-text">
                                "Preparing to Meet Your Baby"
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#now1Content" aria-expanded="false" aria-controls="h1Content"> * Start with the pregnancy basics<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="now1Content">
                                <div class=" card-body" >
                                    Preparing for Pregnancy:<br>
                                    1. Calculate due date.<br>
                                    2. Choose prenatal care provider.<br>
                                    3. Schedule first prenatal appointment.<br>
                                    4. Decide when/how to announce pregnancy.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#now2Content" aria-expanded="false" aria-controls="h1Content"> * Plan ahead before you have your baby <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="now2Content">
                                <div class=" card-body" >
                                    First Trimester To-Do List:<br>
                                    1. Plan finances for baby expenses.<br>
                                    2. Brainstorm baby names.<br>
                                    3. Explore name inspiration lists and tools.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#now3Content" aria-expanded="false" aria-controls="h1Content"> * Take care of your body and baby <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="now3Content">
                                <div class=" card-body" >
                                    <strong> Pregnancy Health Essentials:</strong><br>
                                    1. Prioritize health with folic acid, prenatal vitamins, healthy diet, moderate exercise, and sufficient sleep.<br>
                                    2. Avoid harmful substances and activities like alcohol, smoking, certain foods, and medications.<br>
                                    3. Prepare for common early pregnancy symptoms and body changes.<br>
                                    4. Monitor baby's development weekly for motivation and awareness.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>




            </div>
        </div>

        <!-- High Risk Pregnancy-->
        <h1 id="risk">High Risk Pregnancy</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/animia.jpg')}}" class="card-img-top" alt="Image 4" style="height: 170px;">
                        <div class="card-body">
                            <h4 class="card-title"> Anemia in pregnancy </h4>
                            <p class="card-text">
                                "Preventing and Treating Anemia in Pregnancy"
                            </p>
                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#an1Content" aria-expanded="false" aria-controls="firstContent"> * What is anemia in pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="an1Content">
                                <div class=" card-body" >
                                    Pregnancy increases the risk of anemia, especially iron deficiency anemia (IDA), which occurs when the body lacks enough iron to produce sufficient red blood cells.<br>
                                    WHO estimates one-third of women of reproductive age and 40% of pregnant women globally are affected.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#an2content" aria-expanded="false" aria-controls="firstContent"> * Symptoms of anemia in pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="an2Content">
                                <div class=" card-body" >
                                    1. Fatigue and weakness, often unnoticed if mild.<br>
                                    2. Headache, dizziness, or lightheadedness.<br>
                                    3. Hair loss, cravings for nonfood items (pica), or ice chewing.<br>
                                    4. Leg cramps, restless legs syndrome.<br>
                                    5. Palpitations, rapid heartbeat, chest pain.<br>
                                    6. Irritability, poor concentration.<br>
                                    7. Nail and tongue abnormalities.<br>
                                    8. Blue-white eye color, pale complexion.<br>
                                    9. Shortness of breath, sore tongue, mouth ulcers.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#an3Content" aria-expanded="false" aria-controls="firstContent"> * Tips for taking your iron supplement <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="an3Content">
                                <div class=" card-body" >
                                    1. Take with a snack to reduce nausea.<br>
                                    2. Pair with vitamin C for absorption.<br>
                                    3. Avoid dairy, spinach, caffeine, soy, and whole grains.<br>
                                    4. Separate from antacids or calcium supplements.<br>
                                    5. Consider alternate forms or prescription options.<br>
                                    6. Prevent constipation with hydration and prunes.<br>
                                    7. Use stool softeners if needed.<br>
                                    8. Mix liquid supplements with water or juice.<br>
                                    9. Store properly and out of reach of children.<br>
                                    10. Contact provider for unusual stool appearance.                        </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/dropdown.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Are mental breakdowns normal during pregnancy? </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#drop1Content" aria-expanded="false" aria-controls="h1Content"> * What is a mental breakdown in pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="drop1Content">
                                <div class=" card-body" >
                                    Understanding Perinatal Mood and Anxiety Disorders (PMADs):<br>
                                    1. "Mental breakdown" refers to experiencing a PMAD during pregnancy.<br>
                                    2. PMADs affect about 1 in 5 pregnant women, including anxiety, depression, OCD, PTSD, and panic disorder.<br>
                                    3. Symptoms involve significant distress and feeling unable to cope.<br>
                                    4. Treatment by a mental health professional is crucial for managing PMADs effectively.
                                </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#drop2Content" aria-expanded="false" aria-controls="h1Content"> * Symptoms of a mental breakdown during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="drop2Content">
                                <div class=" card-body" >
                                    1. Anxiety or panic.<br>
                                    2. Loss of appetite.<br>
                                    3. Difficulty sleeping.<br>
                                    4. Fatigue.<br>
                                    5. Inability to manage daily activities.<br>
                                    6. Irritability or anger.<br>
                                    7. Sadness.<br>
                                    8. Trouble concentrating.<br>
                                    Different for each person, these symptoms are intense and distinguish a Perinatal Mood and Anxiety Disorder (PMAD) from normal pregnancy anxiety.
                                </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#drop3Content" aria-expanded="false" aria-controls="h1Content"> * What to do about mental breakdowns during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="drop3Content">
                                <div class=" card-body" >
                                    1. Seek help from professionals or helplines.<br>
                                    2. Use grounding techniques like deep breathing.<br>
                                    3. Consider therapy and safe medication.<br>
                                    4. Seek support from loved ones and groups.<br>
                                    5. Establish care with providers beforehand.<br>
                                    6. Follow a balanced diet, prioritize Mediterranean.<br>
                                    7. Stay active and maintain a sleep routine.<br>
                                    8. Take breaks from information overload.<br>
                                    9. Enjoy activities that bring joy.<br>
                                    10. Practice mindfulness.<br>
                                    11. Lean on loved ones and ask for help when needed.
                                </div>
                        </li>
                    </ul>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/anixiety.jpg')}}" class="card-img-top" alt="Image 5" style="height: 155px;">
                        <div class="card-body">
                            <h4 class="card-title"> How to cope with anxiety during pregnancy </h4>
                            <p class="card-text">
                                "Managing Pregnancy-Related Anxiety: Steps for Coping"
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#anix1Content" aria-expanded="false" aria-controls="h1Content"> * What causes anxiety during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="anix1Content">
                                <div class=" card-body" >
                                    Factors Contributing to Anxiety During Pregnancy:<br>
                                    1. Common issue, especially for women.<br>
                                    2. Up to one in five women may experience anxiety disorder during or after pregnancy.<br>
                                    3. Pregnancy and postpartum are vulnerable times.<br>
                                    4. Worsening factors include hormonal changes, sleep issues, past trauma, pregnancy complications, and various concerns.<br>
                                    5. Rarely, other health conditions can exacerbate anxiety symptoms.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#anix2Content" aria-expanded="false" aria-controls="h1Content"> * Pregnancy anxiety symptoms <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="anix2Content">
                                <div class=" card-body" >
                                    1. Constant feelings of worry, tension, or doom.<br>
                                    2. Feeling on edge.<br>
                                    3. Chest or stomach pains.<br>
                                    4. Dizziness.<br>
                                    5. Chronic headaches.<br>
                                    6. Nausea.<br>
                                    7. Intermittently rapid heartbeat.<br>
                                    8. Trouble falling or staying asleep.<br>
                                    9. Panic attacks: intense fear accompanied by physical symptoms.<br>
                                    10. Teeth grinding.<br>
                                    <strong>Additional Mental Health Issues:</strong><br>
                                    1. Anxiety often coincides with depression.<br>
                                    2. Obsessive-Compulsive Disorder (OCD) may emerge, involving intrusive thoughts and repetitive actions or rituals.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#anix3Content" aria-expanded="false" aria-controls="h1Content"> * Treatment options for pregnancy anxiety <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="anix3Content">
                                <div class=" card-body" >
                                    <strong>1. Talk Therapy:</strong><br>
                                    - Effective, especially Cognitive Behavioral Therapy (CBT).<br>
                                    - Discuss thoughts, emotions, and reactions.<br>
                                    - Learn new coping strategies.<br>

                                    <strong>2. Medication:</strong><br>
                                    - Approach cautiously; consult provider.<br>
                                    - Some SSRIs considered safe.<br>
                                    - Benzodiazepines used sparingly due to risks.<br>

                                    <strong>3. Consultation:</strong><br>
                                    - Always consult provider before medication or supplements.<br>
                                    - Avoid abrupt medication changes.<br>

                                    <strong> 4. Herbal Remedies:</strong><br>
                                    - Generally avoid unless advised by provider.<br>
                                    - Limited research; potential risks.<br>
                                    - Supplements not FDA-approved.<br>

                                    <strong> 5. Caution:</strong><br>
                                    - Herbal remedies may not be safe.<br>
                                    - Supplements may lack regulation.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>




            </div>
        </div>

        <!-- Vaccines-->
        <h1 id="vaccines">Vaccines</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/coviid.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> No, the COVID vaccine doesn't cause infertility </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#cov1Content" aria-expanded="false" aria-controls="firstContent"> * Does the COVID-19 vaccine affect fertility? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="cov1Content">
                                <div class=" card-body" >
                                    COVID Vaccines and Fertility:<br>
                                    1. No evidence of fertility impact.<br>
                                    2. Studies support vaccine safety.<br>
                                    3. Pregnancies occurred during trials.<br>
                                    4. CDC reports no issues post-vaccination.<br>
                                    5. Over 5.6B vaccinated without fertility concerns.<br>
                                    6. Experts advise vaccination for pregnant individuals.<br>
                                    7. CDC stresses vaccination importance.<br>
                                    8. ACOG strongly recommends vaccination for pregnant women.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#cov2content" aria-expanded="false" aria-controls="firstContent"> * Can male fertility be affected by COVID vaccination? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="cov2Content">
                                <div class=" card-body" >
                                    COVID Vaccine and Male Fertility:<br>
                                    1. COVID vaccine doesn't impact male fertility.<br>
                                    2. Studies show no changes to sperm post-vaccination.<br>
                                    3. Evidence suggests vaccine preserves reproductive potential.<br>
                                    4. COVID infection may affect male fertility.<br>
                                    5. Importance of vaccination to avoid infection.<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#cov3Content" aria-expanded="false" aria-controls="firstContent"> * When should I get the COVID vaccine if I'm trying to conceive? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="cov3Content">
                                <div class=" card-body" >
                                    1. Recommended for those trying to conceive.<br>
                                    2. Guards against COVID illness during pregnancy.<br>
                                    3. Lowers risk of preterm birth and complications.<br>
                                    4. Pregnant women at higher risk of severe illness.<br>
                                    5. ACOG advises vaccination in any trimester.<br>
                                    6. Vaccination shown to reduce pregnancy complications.<br>
                                    7. Consult doctor for vaccination status.<br>
                                    8. Safe to receive with flu shot and Tdap vaccine.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/safee.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">Is it safe to get vaccinated during pregnancy? </h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#vacc1Content" aria-expanded="false" aria-controls="h1Content"> * Are vaccines safe during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="vacc1Content">
                                <div class=" card-body" >
                                    1. Pregnancy vaccines pass antibodies to protect the baby.<br>
                                    2. Some vaccines aren't recommended due to live viruses or lack of safety data.<br>
                                    3. Certain vaccines may be used if benefits outweigh risks, especially for high-risk situations or travel.<br>
                                </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#vacc2Content" aria-expanded="false" aria-controls="h1Content"> * Recommended vaccines during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="vacc2Content">
                                <div class=" card-body" >
                                    1. Flu Vaccine: Protects against severe flu, reduces hospitalization risk, and passes protection to baby.<br>
                                    2. Tdap Vaccine: Guards against tetanus, diphtheria, and whooping cough, protecting newborns.<br>
                                    3. COVID-19 Vaccine: Shields pregnant women and babies from severe illness, extensively studied and safe.<br>
                                    4. RSV Vaccine (Abrysvo): Approved for pregnant women, prevents RSV-related illness in newborns.<br>
                                </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#vacc3Content" aria-expanded="false" aria-controls="h1Content"> * Vaccines to avoid during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="vacc3Content">
                                <div class=" card-body" >
                                    1. MMR Vaccine: Avoid during pregnancy due to risk of rubella infection.<br>
                                    2. Chickenpox Vaccine: Not recommended during pregnancy. Wait a month after vaccination before trying to conceive.<br>
                                    3. HPV Vaccine: Delay remainder of series until after pregnancy if started before conception.
                                </div>
                        </li>
                    </ul>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/regist.jpg')}}" class="card-img-top" alt="Image 5" style="height: 170px;">
                        <div class="card-body">
                            <h4 class="card-title"> What you should know about pregnancy exposure registries </h4>
                            <p class="card-text">
                                "How to Help Future Moms-to-Be"
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#re1Content" aria-expanded="false" aria-controls="reContent"> * What are pregnancy exposure registries? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="re1Content">
                                <div class=" card-body" >
                                    Pregnancy exposure registries track how prescription medications or vaccines affect pregnant women and their babies,
                                    collecting data throughout pregnancy and sometimes beyond to understand safety and risks.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#re2Content" aria-expanded="false" aria-controls="h1Content"> * Why are pregnancy exposure registries important? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="re2Content">
                                <div class=" card-body" >
                                    Pregnancy exposure registries collect data on how medications or vaccines affect pregnant women and their babies, filling the gap left by their exclusion from clinical trials.<br>
                                    This helps provide valuable information for healthcare decisions during pregnancy.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#re3Content" aria-expanded="false" aria-controls="h1Content"> * Why should you consider joining a pregnancy exposure registry? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="re3Content">
                                <div class=" card-body" >

                                    Sharing your experience with taking medication or vaccines during pregnancy can help future mothers navigate
                                    their own decisions, easing their stress and providing valuable insights.

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>




            </div>
        </div>

        <!-- Weight Gain-->
        <h1 id="weight">Weight Gain</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/hungerrr.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> Pregnancy hunger: How to handle increased appetite in pregnancy </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#hun1Content" aria-expanded="false" aria-controls="firstContent"> * When pregnancy hunger starts and peaks <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="hun1Content">
                                <div class=" card-body" >
                                    - First trimester: Nausea and vomiting may decrease appetite. Weight gain is typically 3 to 5 pounds.<br/>
                                    - Second trimester (after week 14): Relief from morning sickness, increased appetite due to baby's growth.<br/>
                                    - Third trimester: Hunger may decrease as baby crowds internal organs. Still need more calories; opt for smaller, frequent meals.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#hun2content" aria-expanded="false" aria-controls="firstContent"> * How to handle increased appetite in pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="hun2Content">
                                <div class=" card-body" >
                                    - Eat every three hours to avoid excessive hunger.<br>
                                    - Prioritize foods rich in protein, fiber, and healthy fats.<br>
                                    - Avoid nutritionally empty foods and drinks with added sugar.<br>
                                    - Stay hydrated by drinking eight to twelve 8-ounce cups of water per day.<br>
                                    - Differentiate between hunger, thirst, stress, and boredom.<br>
                                    - Aim for 7 to 9 hours of sleep per night to regulate hunger hormones.<br>
                                    - Eat slowly and mindfully, avoiding distractions like TV or phones.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#hun3Content" aria-expanded="false" aria-controls="firstContent"> * Satisfying your pregnancy hunger <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="hun3Content">
                                <div class=" card-body" >
                                    - Prioritize vegetables, fruits, whole grains, low-fat dairy, and protein-rich foods.<br>
                                    - Use avocado as a spread, add diced fruit to yogurt or salads.<br>
                                    - Cook quinoa for various dishes or baked goods.<br>
                                    - Increase vegetable content in stir-fries.<br>
                                    - Substitute ground turkey or lentils for beef.<br>
                                    - Add roasted chickpeas to salads for crunch.
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/weight.jpg')}}" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h4 class="card-title">How to avoid gaining too much weight during pregnancy</h4>


                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#wei1Content" aria-expanded="false" aria-controls="h1Content"> * "Managing Pregnancy Weight Gain" <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="wei1Content">
                                <div class=" card-body" >
                                    1-Start pregnancy at a healthy weight if possible <br>
                                    2-Eat balanced meals and refuel often <br>
                                    3-Drink up (water, that is) <br>
                                    4-Make your cravings constructive <br>
                                    5-Choose complex carbs <br>
                                    6-Start a simple walking routine <br>
                                    7-If you're already moving, don't stop <br>
                                    8-Breastfeed if you can.
                                </div>
                        </li>


                    </ul>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/gain.jpg')}}" class="card-img-top" alt="Image 5" style="height: 170px;">
                        <div class="card-body">
                            <h4 class="card-title"> Eating disorders and pregnancy</h4>
                            <p class="card-text">
                                "Navigating Eating Disorders During Pregnancy: Risks and Challenges"
                            </p>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#dis1Content" aria-expanded="false" aria-controls="reContent"> * How common are eating disorders during pregnancy? <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="dis1Content">
                                <div class=" card-body" >
                                    - Estimated 5% of women have an eating disorder during pregnancy. <br>
                                    - Breakdown: <br>
                                    - Anorexia nervosa: 0.1 to 0.3% <br>
                                    - Bulimia nervosa: 0.2% <br>
                                    - Binge eating disorder: 4.8% <br>
                                    - Purging disorder: 0.1%
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#dis2Content" aria-expanded="false" aria-controls="h1Content"> * Risks of eating disorders during pregnancy <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="dis2Content">
                                <div class=" card-body" >
                                    - All types of eating disorders during pregnancy raise the risk of complications. <br>
                                    - Anorexia nervosa (AN) may lead to hyperemesis, anemia, preterm birth, delivering a low-birth-weight baby, and other issues. <br>
                                    - Binge eating disorder (BED) can result in excessive weight gain, gestational diabetes, high blood pressure, miscarriage, and other risks. <br>
                                    - Bulimia nervosa (BN) increases the likelihood of excessive weight gain, miscarriage, preterm birth, and other complications. <br>
                                    - Other specified feeding or eating disorders (OSFED) pose similar risks, including an increased risk of hyperemesis and preterm birth.
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#dis3Content" aria-expanded="false" aria-controls="h1Content"> * How to get help for a pregnancy eating disorder <i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="dis3Content">
                                <div class=" card-body" >

                                    - Seek help for a pregnancy eating disorder, ideally before pregnancy. <br>
                                    - Adequate weight gain during pregnancy can reduce complications. <br>
                                    - Be honest with healthcare providers about eating struggles. <br>
                                    - A supportive team of experts can provide necessary support. <br>
                                    - Pregnancy can inspire positive changes in managing an eating disorder for a healthier future.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>




            </div>
        </div>

        <!-- Complications-->
        <h1 id="complicate">Complications</h1><hr>
        <div class="container mt-5">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-6 mb-4" style="text-align: center;" >
                    <div class="card" >
                        <img src="{{asset('site/pregnancy/images/com.jpg')}}" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h4 class="card-title"> 9 pregnancy complications to be aware of </h4>

                        </div>
                    </div>

                    <ul class="collapsible-links">
                        <li>
                            <a href="#first" class="card-link" data-toggle="collapse" data-target="#com1Content" aria-expanded="false" aria-controls="firstContent"> * "Understanding and Addressing Serious Complications"<i class=" fa fa-angle-down"></i></a>
                            <div class="collapse"  id="com1Content">
                                <div class=" card-body" >
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong>1-Miscarriage</strong></a> <br>
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong>2. Ectopic pregnancy</strong></a>      <br>
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong>3. Gestational diabetes</strong></a> <br>
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong>4. Preeclampsia and gestational hypertension</strong></a>   <br>
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong>5. Placental abruption</strong></a>       <br>
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong>6. Placenta previa</strong></a>  <br>
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong>7. Low amniotic fluid </strong></a> <br>
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong>8. Depression</strong></a>  <br>
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong>9. Premature labor and birth</strong></a> <br>
                                    <a href="https://www.babycenter.com/pregnancy/health-and-safety/pregnancy-complications-to-watch-out-for_10316818"> <strong> Learn More About Comlications</strong></a>

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
