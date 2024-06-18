<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>HAYAH Services</title>

    <!-- GOOGLE FONTS -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Lato:400,700,900"
        rel="stylesheet"
    />

    <!-- BOOTSTRAP CSS -->
    <link href="{{asset('site/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- FONT ICONS -->

    <link
        href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        rel="stylesheet"
        crossorigin="anonymous"
    />
    <link href="{{asset("site/css/flaticon.css")}}" rel="stylesheet" />
    <!-- PLUGINS STYLESHEET -->
    <link href="{{asset('site/css/menu.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/jquery.datetimepicker.min.css')}}" rel="stylesheet" />

    <!-- TEMPLATE CSS -->
    <link href="{{asset('site/css/style.css')}}" rel="stylesheet" />

    <!-- RESPONSIVE CSS -->
    <link href="{{asset('site/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
<!-- PRELOADER SPINNER
    ============================================= -->
<div id="loader-wrapper">
    <div id="loader"><div class="loader-inner"></div></div>
</div>

<!-- PAGE CONTENT
    ============================================= -->
<div id="page" class="page">
    <!-- HEADER
          ============================================= -->
    <header id="header" class="header">
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <span class="smllogo"
            ><img
                    src="{{asset('site/images/logo-grey.png')}}"
                    width="180"
                    height="40"
                    alt="mobile-logo"
                /></span>
            <a href="tel:123456789" class="callusbtn"
            ><i class="fas fa-phone"></i
                ></a>
        </div>

        <!-- HEADER STRIP -->
        <div class="headtoppart bg-blue clearfix">
            <div class="headerwp clearfix">
                <!-- Address -->
                <div class="headertopleft">
                    <div class="address clearfix">
                <span
                ><i class="fas fa-map-marker-alt"></i>Egypt- Cairo

                </span>
                        <a href="tel:123456789" class="callusbtn"
                        ><i class="fas fa-phone"></i>(+02)123456</a
                        >
                    </div>
                </div>

                <!-- Social Links -->
                <div class="headertopright">
                    <a class="googleicon" title="Google" href="#"
                    ><i class="fab fa-google"></i>
                        <span class="mobiletext02">Google</span></a
                    >
                    <a class="linkedinicon" title="Linkedin" href="#"
                    ><i class="fab fa-linkedin-in"></i>
                        <span class="mobiletext02">Linkedin</span></a
                    >
                    <a class="twittericon" title="Twitter" href="#"
                    ><i class="fab fa-twitter"></i>
                        <span class="mobiletext02">Twitter</span></a
                    >
                    <a class="facebookicon" title="Facebook" href="#"
                    ><i class="fab fa-facebook-f"></i>
                        <span class="mobiletext02">Facebook</span></a
                    >
                    <a class="lang" href="#">العربيه</a>
                </div>
            </div>
        </div>
        <!-- END HEADER STRIP -->

        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">
                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                <div class="desktoplogo">
                    <a href="#hero-1"
                    ><img
                            src="{{asset('site/assets/images/logo2.png')}}"

                            width="180"
                            height="40"
                            alt="header-logo"
                        /></a>
                </div>

                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list">
                        <!-- DROPDOWN MENU -->
                        <li aria-haspopup="true">
                            <a href="/mother_dashboard">Home</a>
                        </li>
                        <!-- END DROPDOWN MENU -->

                        <!-- PAGES -->
                        <li aria-haspopup="true">
                            <a href="{{route('doctors.show',$mother->id)}}">Doctors</a>

                            <!-- End wsmegamenu -->
                        </li>
                        <!-- END PAGES -->

                        <!-- HALF MENU -->
                        <li aria-haspopup="true">
                            <a href="{{route('departments.show',$mother->id)}}">Departments </a>
                        </li>
                        <!-- END HALF MENU -->

                        <!-- NAVIGATION MENU BUTTON -->
                        <li class="nl-simple header-btn" aria-haspopup="true">
                            <a href="{{route('appointment.show',$mother->id)}}">Make an Appointment</a>
                        </li>
                    </ul>
                </nav>
                <!-- END MAIN MENU -->
            </div>
        </div>
        <!-- END NAVIGATION MENU -->
    </header>
    <!-- END HEADER -->

    <!-- BREADCRUMB
          ============================================= -->
    <div id="breadcrumb" class="division">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-holder">
                        <!-- Breadcrumb Nav -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a >Our Services</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Service Single
                                </li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">Service Single </h4>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- END BREADCRUMB -->

    <!-- SERVICE DETAILS
          ============================================= -->
    <div id="service-page" class="wide-60 service-page-section division">
        <div class="container">
            <div class="row">
                <!-- SERVICE CONTENT -->
                <div class="col-lg-8">
                    <div class="s2-page pr-30 mb-40">
                        <!-- Title -->
                        <h3 class="h3-md blue-color">Magnetic Resonance Imaging</h3>
                        <h4 class="h4-sm blue-color">
                            Maecenas gravida porttitor nunc, magna luctus tempor viverra
                            cubilia laoreet augue
                        </h4>

                        <!-- Text -->
                        <p>
                            Primis cubilia laoreet augue vitae laoreet augue in cubilia
                            risus auctor tempus dolor feugiat, felis lacinia risus auctor
                            id viverra dolor congue ipsum mauris iaculis luctus placerat
                            massa magna cursus amet quisque an aliquet. Feugiat primis in
                            ultrice ligula risus auctor
                        </p>

                        <!-- Text -->
                        <p>
                            Ligula risus auctor tempus dolor feugiat, felis lacinia risus
                            interdum auctor id viverra dolor iaculis luctus bibendum
                            luctus neque rhoncus ipsum tempor varius iaculis at luctus
                            neque rhoncus ipsum tempor varius cubilia laoreet augue vitae
                            laoreet augue undo cubilia feugiat suscipit emper lacus
                        </p>

                        <!-- Image -->
                        <div class="content-block-img text-center">
                            <img
                                class="img-fluid"
                                src="{{asset('site/assets/images/sss.jpg')}}"
                                alt="content-image"
                            />
                        </div>

                        <!-- Text -->
                        <p>
                            Ligula risus auctor tempus dolor feugiat, felis lacinia risus
                            interdum auctor id viverra dolor iaculis luctus bibendum
                            luctus neque rhoncus ipsum tempor varius iaculis at luctus
                            neque rhoncus ipsum tempor varius cubilia laoreet augue vitae
                            laoreet augue undo cubilia feugiat suscipit emper lacus
                        </p>

                        <!-- Options List -->
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- Option #1 -->
                                <div class="box-list m-top-15">
                                    <div class="box-list-icon blue-color">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <p>
                                        Nemo ipsam egestas volute turpis dolores quaerat massa
                                        suscipit, luctus neque
                                    </p>
                                </div>

                                <!-- Option #2 -->
                                <div class="box-list">
                                    <div class="box-list-icon blue-color">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <p>
                                        Magna massa suscipit, luctus neque purus and ipsum neque
                                        dolor primis
                                    </p>
                                </div>

                                <!-- Option #3 -->
                                <div class="box-list">
                                    <div class="box-list-icon blue-color">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <p>An enim nullam tempor at pretium blandit</p>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <!-- Option #4 -->
                                <div class="box-list">
                                    <div class="box-list-icon blue-color">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <p>
                                        Magna massa suscipit, luctus neque purus and ipsum neque
                                        dolor primis luctus
                                    </p>
                                </div>

                                <!-- Option #5 -->
                                <div class="box-list m-top-15">
                                    <div class="box-list-icon blue-color">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <p>An enim nullam tempor at pretium blandit</p>
                                </div>

                                <!-- Option #6 -->
                                <div class="box-list">
                                    <div class="box-list-icon blue-color">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <p>
                                        Magna massa suscipit, luctus neque purus and ipsum neque
                                        dolor at tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Options List -->

                        <!-- Small Title -->
                        <h5 class="h5-md blue-color">
                            Rhoncus ipsum tempor varius iaculis
                        </h5>

                        <!-- CONTENT BOX #1 -->
                        <div class="box-list">
                            <div class="box-list-icon">
                                <i class="fas fa-genderless"></i>
                            </div>
                            <p>
                                Fringilla risus nec, luctus mauris orci auctor purus euismod
                                pretium purus pretium ligula rutrum tempor sapien at pretium
                                luctus ligula rutrum luctus risus ultrice lacinia risus
                                auctor id viverra dolor congue ipsum mauris iaculis luctus
                                placerat massa magna cursus amet
                            </p>
                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="box-list">
                            <div class="box-list-icon">
                                <i class="fas fa-genderless"></i>
                            </div>
                            <p>
                                Quaerat sodales sapien undo euismod purus a blandit pretium
                            </p>
                        </div>

                        <!-- CONTENT BOX #3 -->
                        <div class="box-list">
                            <div class="box-list-icon">
                                <i class="fas fa-genderless"></i>
                            </div>
                            <p>
                                Nemo ipsam egestas volute turpis dolores ut aliquam quaerat
                                sodales sapien undo pretium purus feugiat dolor impedit
                                magna purus pretium gravida donec quisque an aliquet
                            </p>
                        </div>

                        <!-- Picing Table -->
                        <div class="pricing-table">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bronchoscopy</td>
                                    <td>From <span>$1340.00</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Parathyroid Scan</td>
                                    <td>From <span>$765.00</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Echocardiography</td>
                                    <td>From <span>$1075.00</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Full Blood Picture</td>
                                    <td>From <span>$950.00</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>CT & Ultrasound Diagnostic</td>
                                    <td>From <span>$885.00</span></td>
                                </tr>
                                <tr class="last-tr">
                                    <th scope="row">6</th>
                                    <td>MRI & X-Ray</td>
                                    <td>From <span>$1050.00</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Text -->
                        <p>
                            Primis cubilia laoreet augue vitae laoreet augue in cubilia
                            risus auctor tempus dolor feugiat, felis lacinia risus auctor
                            id viverra dolor congue ipsum mauris iaculis luctus placerat
                            massa magna cursus amet quisque an aliquet. Feugiat primis in
                            ultrice ligula risus auctor
                        </p>

                        <!-- Text -->
                        <p>
                            Ligula risus auctor tempus dolor feugiat, felis lacinia risus
                            interdum auctor id viverra dolor iaculis luctus bibendum
                            luctus neque rhoncus ipsum tempor varius iaculis at luctus
                            neque rhoncus ipsum tempor varius cubilia laoreet augue vitae
                            laoreet augue undo cubilia feugiat suscipit
                        </p>+++++++++++++++++++++++++++++

                        <!-- Button -->
{{--                        <a href="{{route('appointment.show',[Auth::guard('user')->user()->id])}}" class="btn btn-blue blue-hover"--}}
                        >Book an Appointment</a
                        >
                    </div>
                </div>
                <!-- END SERVICE CONTENT -->

                <!-- SIDEBAR -->
                <aside id="sidebar" class="col-lg-4">
                    <!-- TEXT WIDGET -->
                    <div id="txt-widget" class="sidebar-div mb-50">
                        <!-- Title -->
                        <h5 class="h5-sm steelblue-color">The Heart Of Hospital</h5>

                        <!-- Head of Clinic -->
                        <div
                            class="txt-widget-unit mb-15 clearfix d-flex align-items-center"
                        >
                            <!-- Avatar -->
                            <div class="txt-widget-avatar">
                                <img
                                    src="{{asset('site/images/head-of-clinic.jpg')}}"
                                    alt="testimonial-avatar"
                                />
                            </div>

                            <!-- Data -->
                            <div class="txt-widget-data">
                                <h5 class="h5-md steelblue-color">Dr. Jonathan Barnes</h5>
                                <span>Chief Medical Officer, Founder</span>
                                <p class="blue-color">1-800-1234-567</p>
                            </div>
                        </div>
                        <!-- End Head of Clinic -->

                        <!-- Text -->
                        <p class="p-sm">
                            "Our Chief Medical Officer and Founder is a seasoned expert in women's healthcare,
                            leading with dedication and vision. Their commitment to excellence sets the standard for our hospital's care."
                        </p>

                        <!-- Button -->
                        <a href="about.html" class="btn btn-blue blue-hover"
                        >Learn More</a
                        >
                    </div>
                    <!-- END TEXT WIDGET -->

                    <!-- SIDEBAR TABLE -->
                    <div class="sidebar-table blue-table sidebar-div mb-50">
                        <!-- Title -->
                        <h5 class="h5-md">Working Time</h5>

                        <!-- Text -->
                        <p class="p-sm">
                            Porta semper lacus cursus, feugiat primis ultrice ligula risus
                            auctor at tempus feugiat dolor lacinia cursus nulla vitae
                            massa
                        </p>

                        <!-- Table -->
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Mon – Wed</td>
                                <td>-</td>
                                <td class="text-right">9:00 AM - 7:00 PM</td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>-</td>
                                <td class="text-right">9:00 AM - 6:30 PM</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>-</td>
                                <td class="text-right">9:00 AM - 6:00 PM</td>
                            </tr>
                            <tr class="last-tr">
                                <td>Sun - Sun</td>
                                <td>-</td>
                                <td class="text-right">CLOSED</td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- Title -->
                        <h5 class="h5-xs">Need a personal health plan?</h5>

                        <!-- Text -->
                        <p class="p-sm">
                            Porta semper lacus cursus, and feugiat primis ultrice ligula
                            at risus auctor
                        </p>
                    </div>
                    <!-- END SIDEBAR TABLE -->

                    <!-- SIDEBAR TIMETABLE -->
                    <div class="sidebar-timetable sidebar-div mb-50">
                        <!-- Title -->
                        <h5 class="h5-md mb-20">Doctors Timetable</h5>

                        <!-- Text -->
                        <p class="p-sm">
                            Porta semper lacus cursus, feugiat primis ultrice ligula risus
                            auctor at tempus feugiat dolor lacinia cursus nulla vitae
                            massa
                        </p>

                        <!-- Button -->
                        <a href="about.html" class="btn btn-blue blue-hover mt-10"
                        >View Timetable</a
                        >
                    </div>
                    <!-- END SIDEBAR TABLE -->
                </aside>
                <!-- END SIDEBAR -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- END SERVICE DETAILS -->

    <!-- TESTIMONIALS-2
          ============================================= -->
    <section
        id="reviews-2"
        class="bg-lightgrey wide-100 reviews-section division"
    >
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">
                    <!-- Title 	-->
                    <h3 class="h3-md steelblue-color">What Our Patients Say</h3>

                    <!-- Text -->
                    <p>
                        Aliquam a augue suscipit, luctus neque purus ipsum neque dolor
                        primis libero at tempus, blandit posuere ligula varius congue
                        cursus porta feugiat
                    </p>
                </div>
            </div>
            <!-- END SECTION TITLE -->

            <!-- TESTIMONIALS CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme reviews-holder">
                        <!-- TESTIMONIAL #1 -->
                        <div class="review-2">
                            <div class="review-txt text-center">
                                <!-- Quote -->
                                <div class="quote">
                                    <img src="{{asset('site/images/quote.png')}}" alt="quote-img" />
                                </div>

                                <!-- Author Avatar -->
                                <div class="testimonial-avatar">
                                    <img
                                        src="{{asset('site/images/review-author-1.jpg')}}"
                                        alt="testimonial-avatar"
                                    />
                                </div>

                                <!-- Testimonial Text -->
                                <p>
                                    Etiam sapien sem at sagittis congue an augue massa varius
                                    egestas a suscipit magna undo tempus aliquet porta vitae
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-author">
                                    <h5 class="h5-sm">Scott Boxer</h5>
                                    <span>Programmer</span>
                                </div>
                            </div>
                        </div>
                        <!--END  TESTIMONIAL #1 -->

                        <!-- TESTIMONIAL #2 -->
                        <div class="review-2">
                            <div class="review-txt text-center">
                                <!-- Quote -->
                                <div class="quote">
                                    <img src="{{asset('site/images/quote.png')}}" alt="quote-img" />
                                </div>

                                <!-- Author Avatar -->
                                <div class="testimonial-avatar">
                                    <img
                                        src="{{asset('site/images/review-author-2.jpg')}}"
                                        alt="testimonial-avatar"
                                    />
                                </div>

                                <!-- Testimonial Text -->
                                <p>
                                    Mauris donec ociis magnisa a sapien etiam sapien congue
                                    augue egestas et ultrice vitae purus diam integer congue
                                    magna ligula egestas
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-author">
                                    <h5 class="h5-sm">Penelopa Peterson</h5>
                                    <span>Project Manager</span>
                                </div>
                            </div>
                        </div>
                        <!-- END TESTIMONIAL #2 -->

                        <!-- TESTIMONIAL #3 -->
                        <div class="review-2">
                            <div class="review-txt text-center">
                                <!-- Quote -->
                                <div class="quote">
                                    <img src="{{asset('site/images/quote.png')}}" alt="quote-img" />
                                </div>

                                <!-- Author Avatar -->
                                <div class="testimonial-avatar">
                                    <img
                                        src="{{asset('site/images/review-author-3.jpg')}}"
                                        alt="testimonial-avatar"
                                    />
                                </div>

                                <!-- Testimonial Text -->
                                <p>
                                    At sagittis congue augue an egestas magna ipsum vitae
                                    purus ipsum primis undo cubilia laoreet augue
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-author">
                                    <h5 class="h5-sm">M.Scanlon</h5>
                                    <span>Photographer</span>
                                </div>
                            </div>
                        </div>
                        <!-- END TESTIMONIAL #3 -->

                        <!-- TESTIMONIAL #4 -->
                        <div class="review-2">
                            <div class="review-txt text-center">
                                <!-- Quote -->
                                <div class="quote">
                                    <img src="{{asset('site/images/quote.png')}}" alt="quote-img" />
                                </div>

                                <!-- Author Avatar -->
                                <div class="testimonial-avatar">
                                    <img
                                        src="{{asset('site/images/review-author-4.jpg')}}"
                                        alt="testimonial-avatar"
                                    />
                                </div>

                                <!-- Testimonial Text -->
                                <p>
                                    Mauris donec ociis magnis sapien etiam sapien congue augue
                                    pretium ligula a lectus aenean magna mauris
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-author">
                                    <h5 class="h5-sm">Jeremy Kruse</h5>
                                    <span>Graphic Designer</span>
                                </div>
                            </div>
                        </div>
                        <!-- END TESTIMONIAL #4 -->

                        <!-- TESTIMONIAL #5 -->
                        <div class="review-2">
                            <div class="review-txt text-center">
                                <!-- Quote -->
                                <div class="quote">
                                    <img src="{{asset('site/images/quote.png')}}" alt="quote-img" />
                                </div>

                                <!-- Author Avatar -->
                                <div class="testimonial-avatar">
                                    <img
                                        src="{{asset('site/images/review-author-5.jpg')}}"
                                        alt="testimonial-avatar"
                                    />
                                </div>

                                <!-- Testimonial Text -->
                                <p>
                                    An augue in cubilia laoreet magna suscipit egestas magna
                                    ipsum at purus ipsum primis in augue ulta ligula egestas
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-author">
                                    <h5 class="h5-sm">Evelyn Martinez</h5>
                                    <span>Senior UX/UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <!-- END TESTIMONIAL #5 -->

                        <!-- TESTIMONIAL #6 -->
                        <div class="review-2">
                            <div class="review-txt text-center">
                                <!-- Quote -->
                                <div class="quote">
                                    <img src="{{asset('site/images/quote.png')}}" alt="quote-img" />
                                </div>

                                <!-- Author Avatar -->
                                <div class="testimonial-avatar">
                                    <img
                                        src="{{asset('site/images/review-author-6.jpg')}}"
                                        alt="testimonial-avatar"
                                    />
                                </div>

                                <!-- Testimonial Text -->
                                <p>
                                    An augue cubilia laoreet undo magna at risus suscipit
                                    egestas magna an ipsum ligula vitae and purus ipsum primis
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-author">
                                    <h5 class="h5-sm">Dan Hodges</h5>
                                    <span>Internet Surfer</span>
                                </div>
                            </div>
                        </div>
                        <!-- END TESTIMONIAL #6 -->

                        <!-- TESTIMONIAL #7 -->
                        <div class="review-2">
                            <div class="review-txt text-center">
                                <!-- Quote -->
                                <div class="quote">
                                    <img src="{{asset('site/images/quote.png')}}" alt="quote-img" />
                                </div>

                                <!-- Author Avatar -->
                                <div class="testimonial-avatar">
                                    <img
                                        src="{{asset('site/images/review-author-7.jpg')}}"
                                        alt="testimonial-avatar"
                                    />
                                </div>

                                <!-- Testimonial Text -->
                                <p>
                                    Augue egestas volutpat egestas augue in cubilia laoreet
                                    magna suscipit luctus and dolor blandit vitae
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-author">
                                    <h5 class="h5-sm">Isabel M.</h5>
                                    <span>SEO Manager</span>
                                </div>
                            </div>
                        </div>
                        <!-- END TESTIMONIAL #7 -->

                        <!-- TESTIMONIAL #8 -->
                        <div class="review-2">
                            <div class="review-txt text-center">
                                <!-- Quote -->
                                <div class="quote">
                                    <img src="{{asset('site/images/quote.png')}}" alt="quote-img" />
                                </div>

                                <!-- Author Avatar -->
                                <div class="testimonial-avatar">
                                    <img
                                        src="{{asset('site/images/review-author-8.jpg')}}"
                                        alt="testimonial-avatar"
                                    />
                                </div>

                                <!-- Testimonial Text -->
                                <p>
                                    Augue egestas volutpat egestas augue in cubilia laoreet
                                    magna suscipit luctus and dolor blandit vitae
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-author">
                                    <h5 class="h5-sm">Alex Ross</h5>
                                    <span>Patient</span>
                                </div>
                            </div>
                        </div>
                        <!-- END TESTIMONIAL #8 -->

                        <!-- TESTIMONIAL #9-->
                        <div class="review-2">
                            <div class="review-txt text-center">
                                <!-- Quote -->
                                <div class="quote">
                                    <img src="{{asset('site/images/quote.png')}}" alt="quote-img" />
                                </div>

                                <!-- Author Avatar -->
                                <div class="testimonial-avatar">
                                    <img
                                        src="{{asset('site/images/review-author-9.jpg')}}"
                                        alt="testimonial-avatar"
                                    />
                                </div>

                                <!-- Testimonial Text -->
                                <p>
                                    Augue egestas volutpat egestas augue in cubilia laoreet
                                    magna suscipit luctus magna dolor neque vitae
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-author">
                                    <h5 class="h5-sm">Alisa Milano</h5>
                                    <span>Housewife</span>
                                </div>
                            </div>
                        </div>
                        <!-- END TESTIMONIAL #9 -->
                    </div>
                </div>
            </div>
            <!-- END TESTIMONIALS CONTENT -->
        </div>
        <!-- End container -->
    </section>
    <!-- END TESTIMONIALS-2 -->

    <!-- BANNER-5
          ============================================= -->
    <section id="banner-5" class="pt-100 banner-section division">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">
                    <!-- Title 	-->
                    <h3 class="h3-md steelblue-color">
                        Certified and Experienced Doctors
                    </h3>

                    <!-- Text -->
                    <p>
                        Aliquam a augue suscipit, luctus neque purus ipsum neque dolor
                        primis libero at tempus, blandit posuere ligula varius congue
                        cursus porta feugiat
                    </p>
                </div>
            </div>
            <!-- BANNER IMAGE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-5-img wow fadeInUp" data-wow-delay="0.4s">
                        <img
                            class="img-fluid"
                            src="{{asset('site/images/image-07.png')}}"
                            alt="banner-image"
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- End container -->
    </section>
    <!-- END BANNER-5 -->
    <!-- FOOTER-1
          ============================================= -->
    <footer id="footer-1" class="bg-image wide-40 footer division">
        <div class="container">
            <!-- FOOTER CONTENT -->
            <div class="row">
                <!-- FOOTER INFO -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-info mb-40">
                        <!-- Footer Logo -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80  pixels) -->
                        <img
                            src="{{asset('site/assets/images/logo2.png')}}"
                            width="180"
                            height="40"
                            alt="footer-logo"
                        />

                        <!-- Text -->
                        <p class="p-sm mt-20">
                            Aliquam orci nullam tempor sapien gravida donec an enim ipsum
                            porta justo at velna auctor congue
                        </p>

                        <!-- Social Icons -->
                        <div class="footer-socials-links mt-20">
                            <ul class="foo-socials text-center clearfix">
                                <li>
                                    <a href="#" class="ico-facebook"
                                    ><i class="fab fa-facebook-f"></i
                                        ></a>
                                </li>
                                <li>
                                    <a href="#" class="ico-twitter"
                                    ><i class="fab fa-twitter"></i
                                        ></a>
                                </li>
                                <li>
                                    <a href="#" class="ico-google-plus"
                                    ><i class="fab fa-google-plus-g"></i
                                        ></a>
                                </li>
                                <li>
                                    <a href="#" class="ico-tumblr"
                                    ><i class="fab fa-tumblr"></i
                                        ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FOOTER CONTACTS -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-box mb-40">
                        <!-- Title -->
                        <h5 class="h5-xs">Our Location</h5>

                        <!-- Address -->
                        <p>121 King Street, Melbourne,</p>
                        <p>Victoria 3000 Australia</p>

                        <!-- Email -->
                        <p class="foo-email mt-20">
                            E:
                            <a href="mailto:yourdomain@mail.com">hello@yourdomain.com</a>
                        </p>

                        <!-- Phone -->
                        <p>P: +12 9 8765 4321</p>
                    </div>
                </div>

                <!-- FOOTER WORKING HOURS -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-box mb-40">
                        <!-- Title -->
                        <h5 class="h5-xs">Working Time</h5>

                        <!-- Working Hours -->
                        <p class="p-sm">Mon - Wed - <span>9:00 AM - 7:00 PM</span></p>
                        <p class="p-sm">Thursday - <span>9:00 AM - 6:30 PM</span></p>
                        <p class="p-sm">Friday - <span>9:00 AM - 6:00 PM</span></p>
                        <p class="p-sm">Sat - Sun - <span>Closed</span></p>
                    </div>
                </div>

                <!-- FOOTER PHONE NUMBER -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-box mb-40">
                        <!-- Title -->
                        <h5 class="h5-xs">Emergency Cases</h5>

                        <!-- Footer List -->
                        <h5 class="h5-xl blue-color">1-800-123-4560</h5>

                        <!-- Text -->
                        <p class="p-sm mt-15">
                            Aliquam orci nullam undo tempor sapien gravida donec enim
                            ipsum porta justo velna aucto magna
                        </p>
                    </div>
                </div>
            </div>
            <!-- END FOOTER CONTENT -->

            <!-- FOOTER COPYRIGHT -->
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-12">
                        <p class="footer-copyright">
                            &copy; 2024 <span>HAYAH</span>. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container -->
    </footer>
    <!-- END FOOTER-1 -->
</div>
<!-- END PAGE CONTENT -->

<!-- EXTERNAL SCRIPTS
    ============================================= -->
<script src="{{asset('site/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/modernizr.custom.js')}}"></script>
<script src="{{asset('site/js/jquery.easing.js')}}"></script>
<script src="{{asset('site/js/jquery.appear.js')}}"></script>
<script src="{{asset('site/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('site/js/menu.js')}}"></script>
<script src="{{asset('site/js/sticky.js')}}"></script>
<script src="{{asset('site/js/jquery.scrollto.js')}}"></script>
<script src="{{asset('site/js/materialize.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('site/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('site/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('site/js/hero-form.js')}}"></script>
<script src="{{asset('site/js/contact-form.js')}}"></script>
<script src="{{asset('site/js/comment-form.js')}}"></script>
<script src="{{asset('site/js/appointment-form.js')}}"></script>
<script src="{{asset('site/js/jquery.datetimepicker.full.js')}}"></script>
<script src="{{asset('site/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('site/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('site/js/wow.js')}}"></script>

<!-- Custom Script -->
<script src="{{asset('site/js/custom.js')}}"></script>

<script>
    new WOW().init();
</script>

<script src="{{asset('site/js/changer.js')}}"></script>
<script defer src="{{asset('site/js/styleswitch.js')}}"></script>
</body>
</html>
