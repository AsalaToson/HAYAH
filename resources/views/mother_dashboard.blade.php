<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="HAYAH Responsive web " />
    <title>HAYAH HOSPITAL CARE </title>
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <!--  CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/style-starter.css')}}">
    <link href="{{asset('site/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('site/animate/animate.css')}}" rel="stylesheet">

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
                            <a class="nav-link scroll" href="#Home">Home</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#About Us">About Us</a>
                        </li>

                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">

                            <a class="nav-link scroll" href="{{route('service.show',[Auth::guard('web')->user()->id])}}">Our Services</a>



                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#">pregnancy</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#">Baby</a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#">Family</a>
                        </li>

                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">

                            <a class="nav-link scroll" href="{{route('contactus.show',[Auth::guard('web')->user()->id])}}">contact us</a>
                        </li>


                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="{{route('chatify')}}">Community Chating </a>




                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" aria-haspopup="true">
                                <i class="fa fa-user"></i>

                                {{Auth::guard('web')->user()->name}}




                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown2" style="height: 150px; width: 200px; display: none;" id="dropdownContent">
                                <a class="dropdown-item" href="{{route('MProfile.show')}}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>

                                 <a class="dropdown-item" href="{{route('record.show',[Auth::guard('web')->user()->id])}}"><i class="fa fa-file" aria-hidden="true"></i> Medical Report</a>



                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout.user') }}" method="POST">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>                            </div>
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
<!-- header -->
<!--banner-content-->
<div class="banner-w3l-main">
    <div class="w3l-banner-content">
        <div class="container">
            <div class="bannerhny-info text-center">
                <h6 class="title-subhny mb-2">HAYAH</h6>
                <h3 class="">Your Journy. Our Care.</h3>
                <a class="btn btn-style btn-white mt-sm-5 mt-4" href="#">
                    Read More</a>
            </div>
        </div>
    </div>
    <!-- home page block1 -->
    <section class="home-services pt-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fa fa-users"></span>
                            </div>
                            <div class="info">
                                <p>Protect</p>
                                <h4><a href="#url">Qualified Team</a></h4>
                            </div>
                        </div>
                        <p class="mt-3">Our Qualified Team ensures your safety and well-being through expert care and personalized attention.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fa fa-shield"></span>
                            </div>
                            <div class="info">
                                <p>Help</p>
                                <h4><a href="#url">Quality Service</a></h4>

                            </div>
                        </div>
                        <p class="mt-3"> Our quality service is dedicated to assisting you with compassionate care and professional expertise.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="info">
                                <p>World</p>
                                <h4><a href="#url">Global Work</a></h4>

                            </div>
                        </div>
                        <p class="mt-3">Our global work reaches across borders, making a positive impact on maternal and newborn health worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //home page block1 -->
</div>
<!--//w3l-banner-content-->

<!-- banner bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- banner bottom shape -->

<!--/w3l-content-1-->
<div class="w3l-content-1 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row w3l-content-inf mt-lg-5 pt-lg-5">
            <div class="col-lg-5 w3l-content-left mt-lg-4">
                <h6 class="title-subhny mb-2" id="About Us">About Us</h6>
                <h3 class="title-w3l mb-4">Changing the way you receive healthcare.</h3>
            </div>
            <div class="col-lg-7 w3l-content-right pl-lg-5 mt-lg-4">
                <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">We're a leading maternity hospital serving the community for 20 years. Committed to exceptional care, our skilled team offers comprehensive services from prenatal to neonatal care.
                <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">With a focus on excellence and compassion, we use state-of-the-art facilities
                    to support expectant mothers and newborns, while also engaging in community outreach and education.
                </p>
                </p>
                <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="#">
                    Read More</a>
            </div>
        </div>
    </div>
</div>
<!--//w3l-content-1-->
<!-- /w3l-content-2-->
<div class="w3l-content-2 py-5">
    <div class="container py-md-5 py-2">
        <div class="row whybox-wrap">
            <div class="col-lg-6 whybox-wrap-left">
                <div class="title-content text-left">
                    <h6 class="title-subhny">Extraordinary Services</h6>
                    <h3 class="title-w3l mb-sm-5 mb-4 pb-2">Why You Should Choose HAYAH?.</h3>
                </div>

                <div class="whybox-wrap-grid mb-4">
                    <div class="icon">
                        <span class="fa fa-calendar"></span>
                    </div>
                    <div class="info">
                        <h4><a href="#url">20 Years Of Experience</a></h4>
                        <p class="mt-3">With 20 years of experience, we've become experts in maternity care, supporting thousands of mothers with trust and compassion,
                            and ensuring the health of both mother and baby. </p>
                    </div>
                </div>
                <div class="whybox-wrap-grid mb-4">
                    <div class="icon">
                        <span class="fa fa-pencil-square-o"></span>
                    </div>
                    <div class="info">
                        <h4><a href="#url">Free Consultation</a></h4>
                        <p class="mt-3">Schedule a complimentary session with our experienced team to discuss your pregnancy,
                            address any concerns, and explore our services tailored to your needs." </p>
                    </div>
                </div>
                <div class="whybox-wrap-grid mb-4">
                    <div class="icon">
                        <span class="fa fa-shield"></span>
                    </div>
                    <div class="info">
                        <h4><a href="#url">100% Guranteed</a></h4>
                        <p class="mt-3">We stand by our commitment to excellence in care, ensuring your satisfaction with our services.. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 whybox-wrap-right pl-lg-5 position-relative mt-lg-0 mt-4">
                <img src=" {{asset('site/assets/images/image.png')}}" alt="" class="img-fluid radius-image">

            </div>
        </div>

    </div>
</div>
<!-- //w3l-content-2-->
<!-- /w3l-content-4-->
<section class="w3l-content-4 py-5" id="features">
    <div class="content-4-main py-lg-5 py-md-4">
        <div class="container">
            <div class="title-content text-center">
                <h6 class="title-subhny">Extraordinary Services</h6>
                <h3 class="title-w3l mb-sm-5 mb-4 pb-lg-2">Our Services.</h3>
            </div>
            <div class="content-info-in row">
                <div class="content-left col-lg-6">
                    <div class="row content4-right-grids mb-sm-5 mb-4">
                        <div class="col-lg-2 col-3 content4-right-icon">
                            <div class="content4-icon icon-clr1">
                                <span class="fa fa-american-sign-language-interpreting"></span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-9 content4-right-info pl-4">
                            <h6><a href="#">Prenatal Care</a></h6>
                            <p>Regular check-ups to monitor the health of the mother and fetus.<br/>
                                Ultrasound scans to monitor fetal growth and development.</p>
                        </div>
                    </div>
                    <div class="row content4-right-grids mb-sm-5 mb-4">
                        <div class="col-lg-2 col-3 content4-right-icon">
                            <div class="content4-icon icon-clr2">
                                <span class="fa fa-superpowers"></span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-9 content4-right-info pl-4">
                            <h6><a href="#url">Medical analysis</a></h6>
                            <p>We have a medical analysis department at the highest level.</p>
                        </div>
                    </div>
                    <div class="row content4-right-grids mb-sm-5 mb-4">
                        <div class="col-lg-2 col-3 content4-right-icon">
                            <div class="content4-icon icon-clr2">
                                <span class="fa fa-snowflake-o"></span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-9 content4-right-info pl-4">
                            <h6><a href="#url">Postnatal Care</a></h6>
                            <p>Monitoring mother and baby's health after delivery.
                                Breastfeeding support and guidance.<br/>
                                Postpartum check-ups for the mother</p>
                        </div>
                    </div>
                </div>
                <div class="content-right col-lg-6 pl-lg-4 mt-lg-0 mt-2">
                    <div class="row content4-right-grids mb-sm-5 mb-4">
                        <div class="col-lg-2 col-3 content4-right-icon">
                            <div class="content4-icon icon-clr3">
                                <span class="fa fa-building-o"></span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-9 content4-right-info pl-4">
                            <h6><a href="#url">Family Planning and Contraception</a></h6>
                            <p>Counseling on birth control methods.<br/>
                                Insertion and removal of contraceptive devices like IUDs.</p>
                        </div>
                    </div>
                    <div class="row content4-right-grids mb-sm-5 mb-4">
                        <div class="col-lg-2 col-3 content4-right-icon">
                            <div class="content4-icon icon-clr4">
                                <span class="fa fa-heartbeat"></span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-9 content4-right-info pl-4">
                            <h6><a href="#url"> Nutritional Counseling</a></h6>
                            <p>Diet plans tailored to pregnancy and postpartum nutritional needs.</p>
                        </div>
                    </div>
                    <div class="row content4-right-grids">
                        <div class="col-lg-2 col-3 content4-right-icon">
                            <div class="content4-icon icon-clr4">
                                <span class="fa fa-laptop"></span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-9 content4-right-info pl-4">
                            <h6><a href="#url"> Psychological Support</a></h6>
                            <p>Counseling and support for emotional well-being during pregnancy and postpartum period</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //w3l-content-4-->

<!-- stats -->
<section class="w3l-stats py-lg-0 py-5" id="stats">
    <div class="gallery-inner container py-lg-0 py-3">
        <div class="row stats-con">
            <div class="col-lg-3 col-6 stats_info counter_grid">
                <span class="fa fa-users"></span>
                <p class="counter">100</p>
                <h4>Expert Doctors</h4>
            </div>
            <div class="col-lg-3 col-6 stats_info counter_grid1">
                <span class="fa fa-laptop"></span>
                <p class="counter">50</p>
                <h4>Health Programs</h4>
            </div>
            <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
                <span class="fa fa-smile-o"></span>
                <p class="counter">10000</p>
                <h4>Happy Clients</h4>
            </div>
            <div class="col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5">
                <span class="fa fa-trophy"></span>
                <p class="counter">400</p>
                <h4>Success Meets</h4>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<!--/Our Vision-->
<section class="w3l-blog py-5" id="blog">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center">
            <h6 class="title-subhny text-center">Latest News</h6>
            <h3 class="title-w3l pb-sm-o pb-2 text-center">Our Vision</h3>
        </div>
        <p> "Our vision is to be a top maternity hospital, offering compassionate and innovative care to empower expectant mothers and ensure the well-being of every mother and newborn. We aim to set high standards in
            obstetric and gynecological healthcare through collaboration and continuous improvement, making a positive impact in our community."</p>
        <h3 class="title-w3l pb-sm-o pb-2 text-center">Our Mission</h3>
        <p>- Provide exceptional maternity care</p>
        <p>- Support expectant mothers with compassion and expertise</p>
        <p>- Innovate in obstetric and gynecological healthcare.</p>
        <p>- Educate mothers with relevant information and resources</p>
        <p>- Promote maternal and newborn health through personalized services .</p>
    </div>
</section>
<!--Our Vision-->
<!-- /w3l-content-3-->
<section class="w3l-content-3 py-5">
    <!-- /content-6-section -->
    <div class="content-3-info py-3">
        <div class="container py-lg-4">
            <div class="row appointment-formw3">
                <div class="col-lg-6 welcome-left">
                    <h6 class="title-subhny mb-2">Free Appointment</h6>
                    <h3 class="title-w3l two mb-3">Make an Appointment</h3>
                    <p class="mb-3">
                        We believe in providing the best possible care to all our existing patients and welcomenew patients to
                        sample.</p>
                    <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio adipisicing.</p>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="contact.html">
                        Contact Us</a>
                </div>
                <div class="col-lg-6 free-appointment pl-lg-5 mt-5">
                    <div class="appointment-form">
                        <form  action="{{route('MotherAppointment.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="fields-grid">
                                <div class="styled-input">
                                    <div class="appointment-form-field">
                                        <input type="text" name="name" placeholder="Full Name" required="">
                                    </div>
                                </div>
                                <div class="styled-input">
                                    <div class="appointment-form-field">
                                        <input type="email" name="email" placeholder="Enter Email" required="">
                                    </div>
                                </div>
                                <div class="styled-input">
                                    <div class="appointment-form-field">
                                        <input type="text" name="phone" placeholder="Enter Number" required="">
                                    </div>
                                </div>
                                <div class="styled-input">
                                    <div class="appointment-form-field">
                                        <input type="date" name="appointment" placeholder="Set a Date" required="">
                                    </div>
                                </div>
{{--                                <div class="styled-input">--}}
{{--                                    <div class="appointment-form-field">--}}
{{--                                        <select id="department" required="Specialization">--}}
{{--                                            <option value="">Specialization*</option>--}}
{{--                                            <option value="">Obstetrics and Gynecology </option>--}}
{{--                                            <option value="">Psychological Services</option>--}}
{{--                                            <option value="">Neonatal Intensive Care Unit (NICU)</option>--}}
{{--                                            <option value="">Nutrition and Dietetics</option>--}}
{{--                                            <option value="">Pediatric and Neonatology </option>--}}
{{--                                            <option value="">Family Planning and Contraception</option>--}}
{{--                                            <option value="">Diagnostic Services</option>--}}
{{--                                            <option value="">Physical Therapy and Rehabilitation</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="appointment-form-field">
{{--                                    <label for="section-name">Specialization</label><br/>--}}
                                    <select name="section_id" >Specialization
                                        <option value="" selected disabled>Specialization</option>
                                        @foreach($section as $Section)
                                            <option value="{{$Section->id}}">{{$Section->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


{{--                                <div class="styled-input">--}}
{{--                                    <div class="appointment-form-field">--}}
{{--                                        <select id="doctor" required="Select Doctor">--}}
{{--                                            <option value="">Select Doctor</option>--}}
{{--                                            <option value="">Doctor 1</option>--}}
{{--                                            <option value="">Doctor 2</option>--}}
{{--                                            <option value="">Doctor 3</option>--}}
{{--                                            <option value="">Doctor 4</option>--}}
{{--                                            <option value="">Doctor 5</option>--}}
{{--                                            <option value="">Doctor 6</option>--}}
{{--                                            <option value="">Doctor 7</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="appointment-form-field">
{{--                                    <label for="section-name">doctor</label><br/>--}}
                                    <select name="doctor_id" required="Select Doctor">
                                        <option value="" selected disabled>Doctor</option>
                                        @foreach($doctor as $Doctor)
                                            <option value="{{$Doctor->id}}">{{$Doctor->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <style>

                                    .note-box textarea {
                                        width: 200%;
                                        height: 200px;
                                        padding: 10px;
                                        border: 1px solid #ccc;
                                        border-radius: 5px;
                                        font-size: 16px;
                                        resize: none;
                                    }
                                </style>

                                <div class="note-box">
                                    <h4>Write your notes</h4>
                                    <textarea placeholder="Type your notes here..." name="notes"></textarea>
                                </div>

                            </div>
                            <div class="appointment-btn text-lg-right">
                                <button type="submit" class="btn btn-style btn-primary mt-4">Book Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //w3l-content-3-->
<!-- testimonials section -->
<section class="w3l-clients w3l-test pb-5" id="testimonials">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 pt-2 pb-lg-5">
            <div class="title-content text-center">
                <h6 class="title-subhny text-center">Happy Clients</h6>
                <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">What Our Clients Say</h3>
            </div>
            <div id="owl-demo2" class="owl-carousel owl-theme mt-4 py-md-2 mb-md-4">
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Pellen tesque libero ut justo</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{asset('site/assets/images/team1.jpg')}}" class="img-responsive"
                                                                    alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Johnson william</h3>
                                <p class="identity">Example City</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{asset('site/assets/images/team2.jpg')}}" class="img-responsive"
                                                                    alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Alexander sakura</h3>
                                <p class="identity">Example City</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Pellen tesque libero ut justo</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{asset('site/assets/images/team3.jpg')}}" class="img-responsive"
                                                                    alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>John wilson</h3>
                                <p class="identity">Example City</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{asset('site/assets/images/team2.jpg')}}" class="img-responsive"
                                                                    alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Julia sakura</h3>
                                <p class="identity">Example City</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Pellen tesque libero ut justo</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{asset('site/assets/images/team3.jpg')}}" class="img-responsive"
                                                                    alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>John wilson</h3>
                                <p class="identity">Example City</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet.</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{asset('site/assets/images/team2.jpg')}}" class="img-responsive"
                                                                    alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Julia sakura</h3>
                                <p class="identity">Example City</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonials section -->

<!-- footer -->
<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
        <div class="container py-lg-4">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                    <div class="footer-logo mb-3">
                        <a class="navbar-brand" href="index.html"><span class="fa fa-heartbeat"></span>HAYAH</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit.</p>
                    <ul class="mt-3">
                        <li><a href="tel:+(21) 255 999 8888"><span class="fa fa-phone"></span> +(02) 123456789</a></li>
                        <li><a href="HAYAH@gmail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                                HAYAH</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                    <ul>
                        <h6 class="footer-title-29">History</h6>
                        <li><a href="about.html">About Us</a></li>
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
        <div class="row bottom-copies">
            <p class="col-lg-8 copy-footer-29">© 2024 Design By HAYAH Team <a
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
<script src="{{asset('site/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('site/assets/js/theme-change.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('site/assets/js/owl.carousel.js')}}"></script>
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
<script src="{{asset('site/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.countup.js')}}"></script>
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
<script>
    $(document).ready(function() {
        // Hide dropdown by default
        $('#dropdownContent').hide();

        // Toggle dropdown on click
        $('#navbarDropdown2').click(function(event) {
            event.preventDefault();
            $('#dropdownContent').toggle();
        });

        // Hide dropdown when clicking outside
        $(document).click(function(event) {
            if (!$(event.target).closest('.dropdown').length) {
                $('#dropdownContent').hide();
            }
        });
    });

    function logout() {
        // Your logout functionality here
    }
</script>

<script src="{{asset('site/assets/js/bootstrap.min.js')}}"></script>

</body>

</html>
