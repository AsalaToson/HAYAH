<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>HAYAH Doctors</title>

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

    <link href="{{asset('site/css/flaticon.css')}}" rel="stylesheet" />

    <!-- PLUGINS STYLESHEET -->
    <link href="{{asset('site/css/menu.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('site/css/jquery.datetimepicker.min.css')}}"rel="stylesheet" />

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
                    src="{{asset('site/assets/images/logo2.png')}}"
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
                ><i class="fas fa-map-marker-alt"></i>
                  Egypt - Cairo
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
                                    <a href="/mother_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Meet the Doctors
                                </li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">Meet the Doctors</h4>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- END BREADCRUMB -->

    <!-- DOCTORS-3
          ============================================= -->
    <section
        id="doctors-3"
        class="bg-lightgrey wide-60 doctors-section division"
    >
        <div class="container">
            <div class="row">
                <!-- DOCTOR #1 -->
                @foreach($doctors as $doctor)

                <div class="col-md-6 col-lg-4">
                    <div class="doctor-2">
                        <!-- Doctor Photo -->
                        <div class="hover-overlay">
                            <img
                                class="img-fluid"
                                src="{{asset('Dashboard/image/doctors/'.$doctor->image)}}"
                                alt="doctor-foto"

                            />
                        </div>

                        <!-- Doctor Meta -->
                        <div class="doctor-meta">
                            <h5 class="h5-xs blue-color">{{$doctor->name}}</h5>
                            <span>{{$doctor->section->name}}</span>

                            <!-- Button -->
                            <a
                                class="btn btn-sm btn-blue blue-hover mt-15"
                                href="{{route("doctor.show",$doctor->id)}}"
                                title=""
                            >View More Info</a
                            >
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- END DOCTOR #1 -->

{{--                <!-- DOCTOR #2 -->--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <div class="doctor-2">--}}
{{--                        <!-- Doctor Photo -->--}}
{{--                        <div class="hover-overlay">--}}
{{--                            <img--}}
{{--                                class="img-fluid"--}}
{{--                                src="{{asset('images/doctor-2.jpg')}}"--}}
{{--                                alt="doctor-foto"--}}
{{--                            />--}}
{{--                        </div>--}}

{{--                        <!-- Doctor Meta -->--}}
{{--                        <div class="doctor-meta">--}}
{{--                            <h5 class="h5-xs blue-color">Hannah Harper D.M.</h5>--}}
{{--                            <span>Anesthesiologist</span>--}}

{{--                            <!-- Button -->--}}
{{--                            <a--}}
{{--                                class="btn btn-sm btn-blue blue-hover mt-15"--}}
{{--                                href="doctor-1.html"--}}
{{--                                title=""--}}
{{--                            >View More Info</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END DOCTOR #2 -->--}}

{{--                <!-- DOCTOR #3 -->--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <div class="doctor-2">--}}
{{--                        <!-- Doctor Photo -->--}}
{{--                        <div class="hover-overlay">--}}
{{--                            <img--}}
{{--                                class="img-fluid"--}}
{{--                                src="{{asset('images/doctor-3.jpg')}}"--}}
{{--                                alt="doctor-foto"--}}
{{--                            />--}}
{{--                        </div>--}}

{{--                        <!-- Doctor Meta -->--}}
{{--                        <div class="doctor-meta">--}}
{{--                            <h5 class="h5-xs blue-color">Matthew Anderson D.M.</h5>--}}
{{--                            <span>Cardiology</span>--}}

{{--                            <!-- Button -->--}}
{{--                            <a--}}
{{--                                class="btn btn-sm btn-blue blue-hover mt-15"--}}
{{--                                href="doctor-1.html"--}}
{{--                                title=""--}}
{{--                            >View More Info</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END DOCTOR #3 -->--}}

{{--                <!-- DOCTOR #4 -->--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <div class="doctor-2">--}}
{{--                        <!-- Doctor Photo -->--}}
{{--                        <div class="hover-overlay">--}}
{{--                            <img--}}
{{--                                class="img-fluid"--}}
{{--                                src="{{asset('images/doctor-4.jpg')}}"--}}
{{--                                alt="doctor-foto"--}}
{{--                            />--}}
{{--                        </div>--}}

{{--                        <!-- Doctor Meta -->--}}
{{--                        <div class="doctor-meta">--}}
{{--                            <h5 class="h5-xs blue-color">Megan Coleman D.M.</h5>--}}
{{--                            <span>Neurosurgeon</span>--}}

{{--                            <!-- Button -->--}}
{{--                            <a--}}
{{--                                class="btn btn-sm btn-blue blue-hover mt-15"--}}
{{--                                href="doctor-1.html"--}}
{{--                                title=""--}}
{{--                            >View More Info</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END DOCTOR #4 -->--}}

{{--                <!-- DOCTOR #5 -->--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <div class="doctor-2">--}}
{{--                        <!-- Doctor Photo -->--}}
{{--                        <div class="hover-overlay">--}}
{{--                            <img--}}
{{--                                class="img-fluid"--}}
{{--                                src="{{asset('images/doctor-5.jpg')}}"--}}
{{--                                alt="doctor-foto"--}}
{{--                            />--}}
{{--                        </div>--}}

{{--                        <!-- Doctor Meta -->--}}
{{--                        <div class="doctor-meta">--}}
{{--                            <h5 class="h5-xs blue-color">Robert Peterson D.M.</h5>--}}
{{--                            <span>Allergist</span>--}}

{{--                            <!-- Button -->--}}
{{--                            <a--}}
{{--                                class="btn btn-sm btn-blue blue-hover mt-15"--}}
{{--                                href="doctor-1.html"--}}
{{--                                title=""--}}
{{--                            >View More Info</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END DOCTOR #5 -->--}}

{{--                <!-- DOCTOR #6 -->--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <div class="doctor-2">--}}
{{--                        <!-- Doctor Photo -->--}}
{{--                        <div class="hover-overlay">--}}
{{--                            <img--}}
{{--                                class="img-fluid"--}}
{{--                                src="{{asset('images/doctor-6.jpg')}}"--}}
{{--                                alt="doctor-foto"--}}
{{--                            />--}}
{{--                        </div>--}}

{{--                        <!-- Doctor Meta -->--}}
{{--                        <div class="doctor-meta">--}}
{{--                            <h5 class="h5-xs blue-color">Joshua Elledge D.M.</h5>--}}
{{--                            <span>Orthopaedics</span>--}}

{{--                            <!-- Button -->--}}
{{--                            <a--}}
{{--                                class="btn btn-sm btn-blue blue-hover mt-15"--}}
{{--                                href="doctor-1.html"--}}
{{--                                title=""--}}
{{--                            >View More Info</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END DOCTOR #6 -->--}}

{{--                <!-- DOCTOR #7 -->--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <div class="doctor-2">--}}
{{--                        <!-- Doctor Photo -->--}}
{{--                        <div class="hover-overlay">--}}
{{--                            <img--}}
{{--                                class="img-fluid"--}}
{{--                                src="{{asset('images/doctor-3.jpg')}}"--}}
{{--                                alt="doctor-foto"--}}
{{--                            />--}}
{{--                        </div>--}}

{{--                        <!-- Doctor Meta -->--}}
{{--                        <div class="doctor-meta">--}}
{{--                            <h5 class="h5-xs blue-color">Matthew Anderson D.M.</h5>--}}
{{--                            <span>Cardiology</span>--}}

{{--                            <!-- Button -->--}}
{{--                            <a--}}
{{--                                class="btn btn-sm btn-blue blue-hover mt-15"--}}
{{--                                href="doctor-1.html"--}}
{{--                                title=""--}}
{{--                            >View More Info</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END DOCTOR #7 -->--}}

{{--                <!-- DOCTOR #8 -->--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <div class="doctor-2">--}}
{{--                        <!-- Doctor Photo -->--}}
{{--                        <div class="hover-overlay">--}}
{{--                            <img--}}
{{--                                class="img-fluid"--}}
{{--                                src="{{asset('images/doctor-1.jpg')}}"--}}
{{--                                alt="doctor-foto"--}}
{{--                            />--}}
{{--                        </div>--}}

{{--                        <!-- Doctor Meta -->--}}
{{--                        <div class="doctor-meta">--}}
{{--                            <h5 class="h5-xs blue-color">Jonathan Barnes D.M.</h5>--}}
{{--                            <span>Chief Medical Officer</span>--}}

{{--                            <!-- Button -->--}}
{{--                            <a--}}
{{--                                class="btn btn-sm btn-blue blue-hover mt-15"--}}
{{--                                href="doctor-1.html"--}}
{{--                                title=""--}}
{{--                            >View More Info</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END DOCTOR #8 -->--}}

{{--                <!-- DOCTOR #9 -->--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <div class="doctor-2">--}}
{{--                        <!-- Doctor Photo -->--}}
{{--                        <div class="hover-overlay">--}}
{{--                            <img--}}
{{--                                class="img-fluid"--}}
{{--                                src="images/doctor-2.jpg"--}}
{{--                                alt="doctor-foto"--}}
{{--                            />--}}
{{--                        </div>--}}

{{--                        <!-- Doctor Meta -->--}}
{{--                        <div class="doctor-meta">--}}
{{--                            <h5 class="h5-xs blue-color">Hannah Harper D.M.</h5>--}}
{{--                            <span>Anesthesiologist</span>--}}

{{--                            <!-- Button -->--}}
{{--                            <a--}}
{{--                                class="btn btn-sm btn-blue blue-hover mt-15"--}}
{{--                                href="doctor-1.html"--}}
{{--                                title=""--}}
{{--                            >View More Info</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END DOCTOR #9 -->--}}
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- END DOCTORS-3 -->

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

                                <!--
                                                    <li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>
                                                    <li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
                                                    <li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
                                                    <li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
                                                    <li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
                                                    -->
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
<script src="{{asset('site/js/sticky.js')}}"></script>
<script src="{{asset('site/js/materialize.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/wow.js')}}"></script>

<!-- Custom Script -->
<script src="{{asset('site/js/custom.js')}}"></script>

<script>
    new WOW().init();
</script>

<script src="{{asset('site/js/changer.js')}}"></script>
</body>
</html>