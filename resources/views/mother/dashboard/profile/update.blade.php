
<!DOCTYPE HTML>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="Contact" />
    <title> Edit Profile</title>
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
          rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/style-starter.css')}}">
</head>

<body>
<!--header-->
<div class="header-w3l">
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <a class="navbar-brand" href="/">
              </a>

              <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
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
              <!-- //toggle switch for light and dark theme -->
            </nav>
          </div>
        </header>
        </div>
        <!-- //header -->

        <div class="breadcrumb-bg py-5  w3l-inner-page-breadcrumb">
          <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
            <h2 class="title pt-5">Edit Profile</h2>


            <ul class="breadcrumbs-custom-path mt-3 text-center">
              <li><a href="logged.html">Home</a></li>
              <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Edit </li>
            </ul>
          </div>
        </div>

      <!--//breadcrumb-bg-->
      <!-- banner bottom shape -->
      <div class="position-relative">
        <div class="shape overflow-hidden">
          <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
          </svg>
        </div>
      </div>
      <!-- banner bottom shape -->
      <!--/contact-->
      <section class="w3l-contact-2 py-5" id="contact">
        <div class="container py-lg-5 py-md-4 py-2">
          <div class="contact-grids d-grid">
            <div class="contact-right">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <form action="{{route('MProfile.update',$mother->id)}}" method="post" class="signin-form">
                  @csrf
                  @method('PUT')
                <div class="input-grids">
                    <label for="w3lName"> Name:</label> <br>
                  <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input"
                    required=""  value="{{ $mother->name }}" />
                    <label for="w3lAge"> Age:</label> <br>
                    <input type="text" name="w3lAge" id="w3lAge" placeholder="Your Age*" class="contact-input"
                    required=""   value="{{ $mother->age }}"/>
                    <label for="w3lAdress"> Adress:</label> <br>
                    <input type="text" name="w3lAdress" id="w3lAdress" placeholder="Your Address*" class="contact-input"
                    required=""   value="{{ $mother->address }}"/>
                    <label for="w3lSender"> Email:</label> <br>
                  <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input"
                    required=""  value="{{ $mother->email }}" />
                    <label for="w3lphone"> Phone Number:</label> <br>
                  <input type="tel" name="w3lphone" id="w3lphone" placeholder="Phone Number*" class="contact-input"
                    required=""   value="{{ $mother->phone}}"/>
                    <label for="w3limage"> Image:</label> <br>
                    <input type="file" name="w3limage" id="w3limage"  class="contact-input" alt="photo "    placeholder="choose image"
                    required="" /> <br>
                    @if($mother->image)
                        <img src="{{asset('Dashboard/mother/'.$mother->image)}}"
                             height="50px" width="50px" alt="">

                    @else
                        <img src="{{asset('Dashboard/image/mother/')}}" height="50px"
                             width="50px" alt="">
                    @endif


                <div class="w3l-submit text-lg-right" >
                <button class="btn btn-style btn-primary">edit</button>
                </div>
              </form>
            </div>
          </div>
      </section>

      <!-- footer -->
      <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
          <div class="container py-lg-4">
            <div class="row footer-top-29">
              <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                <div class="footer-logo mb-3">
                  <a class="navbar-brand" href="/mother_dashboard">HAYAH</a>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit.</p>
                <ul class="mt-3">
                  <li><a href="tel:+(21) 255 999 8888"><span class="fa fa-phone"></span> +(02) 123456789</a></li>
                  <li><a href="mailto:medick@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                      HAYAHA@gmail.com</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                <ul>
                  <h6 class="footer-title-29">History</h6>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#"> Blog Posts</a></li>
                  <li><a href="#">Departments</a></li>
                  <li><a href="#"> Careers</a></li>
                  <li><a href="#">Team</a></li>
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
                  <button class="btn btn-style btn-primary w-100 mt-3">Subscribe</button>
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


                    <script src="{{asset('site/assets/js/bootstrap.min.js')}}"></script>

</body>

</html>
