<!doctype html>
<html lang="en">

<head>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> Jorem Belen | Portfolio </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- FAV AND ICONS   -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">
        <link rel="shortcut icon" href="/assets/images/apple-icon.png">
        <link rel="shortcut icon" sizes="72x72" href="/assets/images/apple-icon-72x72.png">
        <link rel="shortcut icon" sizes="114x114" href="/assets/images/apple-icon-114x114.png">

        <!-- Google Font-->
        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/plugins/css/bootstrap.min.css">
        <!-- Animate CSS-->
        <link rel="stylesheet" href="/assets/plugins/css/animate.css">
        <!-- Owl Carousel CSS-->
        <link rel="stylesheet" href="/assets/plugins/css/owl.css">
        <!-- Fancybox-->
        <link rel="stylesheet" href="/assets/plugins/css/jquery.fancybox.min.css">
        <!-- Custom CSS-->
        <link rel="stylesheet" href="/assets/css/styles.css">
        <link rel="stylesheet" href="/assets/css/responsive.css">

        <!-- Colors -->
        <link rel="alternate stylesheet" href="/assets/css/colors/blue.css" title="blue">
        <link rel="stylesheet" href="/assets/css/colors/defauld.css" title="defauld">
        <link rel="alternate stylesheet" href="/assets/css/colors/green.css" title="green">
        <link rel="alternate stylesheet" href="/assets/css/colors/blue-munsell.css" title="blue-munsell">
        <link rel="alternate stylesheet" href="/assets/css/colors/orange.css" title="orange">
        <link rel="alternate stylesheet" href="/assets/css/colors/purple.css" title="purple">
        <link rel="alternate stylesheet" href="/assets/css/colors/slate.css" title="slate">
        <link rel="alternate stylesheet" href="/assets/css/colors/yellow.css" title="yellow">
    </head>
    <body class="dark-vertion black-bg">
        <!-- Start Loader -->
        <div class="section-loader">
            <div class="loader">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- End Loader -->

        <!--
        ===================
           NAVIGATION
        ===================
        -->
        <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav wow fadeInUp" id="mh-header">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                        <a class="navbar-brand" href="#">
                            {{-- <img src="/assets/images/fedalon_logo.png" alt="" class="img-fluid"> --}}
                            <h2 class="ml-4">JOREB</h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-0 ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#mh-home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-about">About</a>
                                </li>
                                {{-- <li class="nav-item">
                                   <a class="nav-link" href="#mh-skills">Skills</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!--
        ===================
            HOME
        ===================
        -->
        <section class="mh-home" id="mh-home">
            <div class="home-ovimg">
                <div class="container">
                    <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                        <div class="col-sm-6">
                            <div class="mh-header-info">
                                <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <span>Hello I'm</span>
                                </div>

                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Jorem Belen</h2>
                                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">Laravel Fullstack Developer</h4>

                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">iam@joreb.net | jorembelen@gmail.com</a></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:">+966 509740359</a></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>Jubail, Saudi Arabia</address></li>
                                </ul>

                                <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://github.com/jorembelen"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <div class="img-border">
                                    <img src="/assets/images/joreb.png" alt=""  class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ==================
            ABOUT
        =================
        -->
        <section class="mh-about" id="mh-about">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <img src="/assets/images/ab-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-inner justify">
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">About Me</h2>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                I am a Laravel Developer with experience of various projects hosted on AWS and Hostgator.
                                I also have experience in large-scale application development with Laravel and Livewire on Ecommerce website with payment gateway using Dragonpay and Paypal.
                                I'm passionate for web application development with Object Oriented Programming and Relational Database Systems.
                            </p>
                            <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <ul>
                                    <li><span>html</span></li>
                                    <li><span>css</span></li>
                                    <li><span>php</span></li>
                                    <li><span>wordpress</span></li>
                                    <li><span>Javascript</span></li>
                                    <li><span>Livewire</span></li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--
        ===================
           PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <h3>Recent Portfolio</h3>
                    </div>
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>All Categories</span></li>
                                <li data-filter=".user-interface" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Safety Application</span></li>
                                <li data-filter=".monitoring" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><span>Sales | Asset | Expense</span></li>
                                <li data-filter=".mockup" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><span>Attendance | Password Manager</span></li>
                                <li data-filter=".ecom" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Ecommerce</span></li>
                                <li data-filter=".fms" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Facililty Management</span></li>
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <div class="portfolioContainer row">
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="/assets/images/apps/safety1.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Web Application for Safety Office</h5>
                                            <span class="sub-title">HSE Incident Report Monitoring</span>
                                            {{-- <a href="#" ></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>


                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 monitoring">
                                    <figure>
                                        <img src="/assets/images/apps/sales-monitoring.jpg" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Sales Monitoring Application</h5>
                                            <span class="sub-title">Daily Sales Monitoring</span>
                                            {{-- <a href="#"></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 monitoring">
                                    <figure>
                                        <img src="/assets/images/apps/expense-monitoring.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Expense Monitoring Application</h5>
                                            <span class="sub-title">Daily Expense Monitoring</span>
                                            {{-- <a href="#"></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 monitoring">
                                    <figure>
                                        <img src="/assets/images/apps/asset-monitoring.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Asset Management Application</h5>
                                            <span class="sub-title">Office Asset Monitoring App</span>
                                            {{-- <a href="#"></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 mockup">
                                    <figure>
                                        <img src="/assets/images/apps/attendance-monitoring.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Attendance using QR Code</h5>
                                            <span class="sub-title">Daily Attendance with QR Code</span>
                                            {{-- <a href="#"></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 mockup">
                                    <figure>
                                        <img src="/assets/images/apps/passman.jpg" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">PassMan</h5>
                                            <span class="sub-title">Password Manager App with 2FA</span>
                                            {{-- <a href="#"></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ecom">
                                    <figure>
                                        <img src="/assets/images/apps/ecommerce.jpg" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Multi Vendor Store</h5>
                                            <span class="sub-title">Ecommerce with Dashboard</span>
                                            {{-- <a href="#"></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ecom">
                                    <figure>
                                        <img src="/assets/images/apps/ecommerce2.jpg" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Ecommerce</h5>
                                            <span class="sub-title">Food Ordering App</span>
                                            {{-- <a href="#"></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ecom">
                                    <figure>
                                        <img src="/assets/images/apps/aztronorth.PNG" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Ecommerce</h5>
                                            <span class="sub-title">Aztronorth Auction</span>
                                            {{-- <a href="#"></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 fms">
                                    <figure>
                                        <img src="/assets/images/apps/fms.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">FMS</h5>
                                            <span class="sub-title">Facility Management System</span>
                                            {{-- <a href="#"></a> --}}
                                        </figcaption>
                                    </figure>
                                </div>
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>

        </section>



        <!--
        ===================
           FOOTER 1
        ===================
        -->
        <footer class="mh-footer" id="mh-contact">
            <div class="map-image image-bg">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Contact Me</h3>
                        </div>
                        <div class="col-sm-12 mh-footer-address">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                        <div class="each-icon">
                                            <i class="fa fa-location-arrow"></i>
                                        </div>
                                        <div class="each-info">
                                            <h4>Address</h4>
                                            <address>
                                                Jubail, Saudi Arabia
                                            </address>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                        <div class="each-icon">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div class="each-info">
                                            <h4>Email</h4>
                                            <a href="mailto:iam@joreb.net">jorembelen@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                        <div class="each-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="each-info">
                                            <h4>Phone</h4>
                                            <a href="callto:+966 509740359">+966 509740359 | +63 9279606333</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-left text-xs-center">
                                        <p>All right reserved JOREB @ <script>document.write(new Date().getFullYear())</script></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://github.com/jorembelen"><i class="fa fa-github"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <!--
    ==============
    * JS Files *
    ==============
    -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- jQuery -->
    <script src="/assets/plugins/js/jquery.min.js"></script>
    <!-- popper -->
    <script src="/assets/plugins/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="/assets/plugins/js/bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="/assets/plugins/js/owl.carousel.js"></script>
    <!-- validator -->
    <script src="/assets/plugins/js/validator.min.js"></script>
    <!-- wow -->
    <script src="/assets/plugins/js/wow.min.js"></script>
    <!-- mixin js-->
    <script src="/assets/plugins/js/jquery.mixitup.min.js"></script>
    <!-- circle progress-->
    <script src="/assets/plugins/js/circle-progress.js"></script>
    <!-- jquery nav -->
    <script src="/assets/plugins/js/jquery.nav.js"></script>
    <!-- Fancybox js-->
    <script src="/assets/plugins/js/jquery.fancybox.min.js"></script>
    <!-- isotope js-->
    <script src="/assets/plugins/js/isotope.pkgd.js"></script>
    <script src="/assets/plugins/js/packery-mode.pkgd.js"></script>

    <script src="/assets/js/custom-scripts.js"></script>

    </body>
</html>
