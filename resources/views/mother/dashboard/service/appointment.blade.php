<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>HAYAH Appointment</title>

    <!-- FAVICON AND TOUCH ICONS  -->

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
                    src="{{asset('site/assets/images/logo2.png"
                    width="180"
                    height="40"
                    alt="mobile-logo')}}"
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
                            src=" {{asset('site/assets/images/logo2.png')}}"
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
                            <a href="#">Make an Appointment</a>
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
                                <li class="breadcrumb-item active" aria-current="page">
                                    Appointment
                                </li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">Appointment</h4>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- END BREADCRUMB -->

    <!-- APPOINTMENT PAGE
          ============================================= -->
    <div
        id="appointment-page"
        class="wide-60 appointment-page-section division"
    >
        <div class="container">
            <div class="row">
                <!-- SERVICE DETAILS -->
                <div class="col-lg-8">
                    <div class="txt-block pr-30">
                        <!-- Title -->
                        <h3 class="h3-md steelblue-color">Book an Appointment</h3>

                        <!-- Text -->
                        <p>
                            "Booking with us is quick and hassle-free. Choose a convenient time for your appointment,
                            and our friendly team will take care of the rest. Schedule now and take the first step towards better health!"
                        </p>

                        <!-- APPOINTMENT FORM -->
                        <div id="appointment-form-holder" class="text-center">
                            <form name="appointmentform" class="row appointment-form" action="{{route('MotherAppointment.store')}}" method="post">
                                @csrf
                                @method('POST')
                                <!-- Form Select -->
                                <div
                                    id="input-department"
                                    class="col-md-12 input-department"
                                >
                                    <select
                                        id="inlineFormCustomSelect1"
                                        name="section_id"
                                        class="custom-select department"
                                        required
                                    >
                                        <option value="" selected disabled>Specialization</option>
                                        @foreach($section as $Section)
                                            <option value="{{$Section->id}}">{{$Section->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <!-- Form Select -->
                                <div id="input-doctor" class="col-md-12 input-doctor">
                                    <select
                                        id="inlineFormCustomSelect2"
                                        name="doctor_id"
                                        class="custom-select doctor"
                                        required
                                    >
                                        <option value="" selected disabled>Doctor</option>
                                        @foreach($doctor as $Doctor)
                                            <option value="{{$Doctor->id}}">{{$Doctor->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Form Select -->
{{--                                <div id="input-patient" class="col-md-12 input-patient">--}}
{{--                                    <select--}}
{{--                                        id="inlineFormCustomSelect3"--}}
{{--                                        name="patient"--}}
{{--                                        class="custom-select patient"--}}
{{--                                        required--}}
{{--                                    >--}}
{{--                                        <option value="">Have You Visited Us Before?*</option>--}}
{{--                                        <option>New Patient</option>--}}
{{--                                        <option>Returning Patient</option>--}}
{{--                                        <option>Other</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

                                <!-- Contact Form Input -->
                                <div id="input-date" class="col-lg-12">
                                    <input
                                        id="datetimepicker"
                                        type="date"
                                        name="appointment"
                                        class="form-control date"
                                        placeholder="Appointment Date"
                                        required
                                    />
                                </div>


                                <!-- Time Slot Field -->
                                <div id="input-time-slot" class="col-lg-12">
                                    <select id="time-slot" name="time-slot" class="form-control select-time" required>
                                        <option value="" disabled selected>Choose a time slot</option>
                                        <option value="09:00-10:00">09:00 AM - 10:00 AM</option>
                                        <option value="10:00-11:00">10:00 AM - 11:00 AM</option>
                                        <option value="11:00-12:00">11:00 AM - 12:00 PM</option>
                                        <option value="12:00-13:00">12:00 PM - 01:00 PM</option>
                                        <option value="13:00-14:00">01:00 PM - 02:00 PM</option>
                                        <option value="14:00-15:00">02:00 PM - 03:00 PM</option>
                                        <option value="15:00-16:00">03:00 PM - 04:00 PM</option>
                                        <option value="16:00-17:00">04:00 PM - 05:00 PM</option>
                                    </select>
                                </div>

                                <!-- Contact Form Input -->
                                <div id="input-name" class="col-lg-12">
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control name"
                                        placeholder="Enter Your Name*"
                                        required
                                    />
                                </div>

                                <div id="input-email" class="col-lg-12">
                                    <input
                                        type="text"
                                        name="email"
                                        class="form-control email"
                                        placeholder="Enter Your Email*"
                                        required
                                    />
                                </div>

                                <div id="input-phone" class="col-lg-12">
                                    <input
                                        type="tel"
                                        name="phone"
                                        class="form-control phone"
                                        placeholder="Enter Your Phone Number*"
                                        required
                                    />
                                </div>

                                <div id="input-message" class="col-lg-12 input-message">
                      <textarea
                          class="form-control message"
                          name="notes"
                          rows="6"
                          placeholder="Your Message ..."
                      ></textarea>
                                </div>

                                <!-- Contact Form Button -->
                                <div class="col-lg-12 form-btn">
                                    <button
                                        type="submit"
                                        class="btn btn-blue blue-hover submit"
                                    >
                                        Request an Appointment
                                    </button>
                                </div>

                                <!-- Contact Form Message -->
                                <div class="col-lg-12 appointment-form-msg text-center">
                                    <div class="sending-msg">
                                        <span class="loading"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END APPOINTMENT FORM -->

                        <!-- Text -->
                        <p class="p-sm grey-color mb-30">
                            " You'll receive a confirmation,
                            and our team will be ready to welcome you at your chosen time. We look forward to providing you with excellent care!"
                        </p>
                    </div>
                </div>
                <!-- END SERVICE DETAILS -->

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
                </aside>
                <!-- END SIDEBAR -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- END APPOINTMENT PAGE -->

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
@livewireScripts
