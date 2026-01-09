<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOREB</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/line-awesome/1.3.0/css/line-awesome.min.css') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/smooth-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>
<body class="home5-page">
    <video class="body-overlay" muted autoplay loop>
        <source src="{{ asset('assets/images/video5.mp4') }}" type="video/mp4">
    </video>

    <div class="page-loader">
        <div class="bounceball"></div>
    </div>

    <span class="icon-menu">
        <span class="bar"></span>
        <span class="bar"></span>
    </span>


    <div class="responsive-sidebar-menu">
        <div class="overlay"></div>
        <div class="sidebar-menu-inner">
            <div class="menu-wrap">
                <p>Menu</p>
                <ul class="menu scroll-nav-responsive d-flex">
                    <li>
                        <a class="scroll-to" href="#home">
                            <i class="las la-home"></i> <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#about">
                            <i class="lar la-user"></i> <span>About</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="scroll-to" href="#resume">
                            <i class="las la-briefcase"></i> <span>Resume</span>
                        </a>
                    </li> --}}
                    <li>
                        <a class="scroll-to" href="#services">
                            <i class="las la-stream"></i> <span>Services</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="scroll-to" href="#skills">
                            <i class="las la-shapes"></i> <span>Skills</span>
                        </a>
                    </li> --}}
                    <li>
                        <a class="scroll-to" href="#portfolio">
                            <i class="las la-grip-vertical"></i> <span>Portfolios</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="scroll-to" href="#testimonial">
                            <i class="lar la-comment"></i> <span>Testimonial</span>
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a class="scroll-to" href="#contact">
                            <i class="las la-envelope"></i> <span>Contact</span>
                        </a>
                    </li> --}}
                </ul>
            </div>

            <div class="sidebar-social">
                <p>Social</p>
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="lab la-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <ul class="menu scroll-nav d-flex">
        <li>
            <a class="scroll-to" href="#home">
                <span>Home</span> <i class="las la-home"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#about">
                <span>About</span> <i class="lar la-user"></i>
            </a>
        </li>
        {{-- <li>
            <a class="scroll-to" href="#resume">
                <span>Resume</span> <i class="las la-briefcase"></i>
            </a>
        </li> --}}
        <li>
            <a href="#services">
                <span>Services</span> <i class="las la-stream"></i>
            </a>
        </li>
        {{-- <li>
            <a class="scroll-to" href="#skills">
                <span>Skills</span> <i class="las la-shapes"></i>
            </a>
        </li> --}}
        <li>
            <a class="scroll-to" href="#portfolio">
                <span>Portfolios</span> <i class="las la-grip-vertical"></i>
            </a>
        </li>
        {{-- <li>
            <a class="scroll-to" href="#testimonial">
                <span>Testimonial</span> <i class="lar la-comment"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#contact">
                <span>Contact</span> <i class="las la-envelope"></i>
            </a>
        </li> --}}
    </ul>

    <div class="left-sidebar">
        <div class="sidebar-header d-flex align-items-center justify-content-between">
            {{-- <img src="assets/images/logo.png" alt="Logo"> --}}
            <h3 class="text-light">JOREB</h3>
            <span class="designation">Laravel Fullstack Developer</span>
        </div>
        <img class="me" src="/assets2/images/joreb.png" alt="Me">
        <h2 class="email">jorembelen@gmail.com</h2>
        <h2 class="address">Jubail, Saudi Arabia</h2>
        <p class="copyright">&copy; All right reserved JOREB @ <script>document.write(new Date().getFullYear())</script></p>
        <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
            <li>
                <a href="#"><i class="lab la-twitter"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com/joremb1/" target="_blank" rel="noopener noreferrer"><i class="lab la-facebook"></i></a>
            </li>
            <li>
                <a href="#"><i class="lab la-instagram"></i></a>
            </li>
            <li>
                <a href="https://github.com/jorembelen/" target="_blank" rel="noopener noreferrer"><i class="lab la-github"></i></a>
            </li>
        </ul>
        <a href="#" class="theme-btn">
            <i class="las la-envelope"></i> Hire Me!
        </a>
    </div>

    <main class="drake-main">
        <div id="smooth-wrapper">
            <div id="smooth-content">

                <div class="left-sidebar">
                    <div class="sidebar-header d-flex align-items-center justify-content-between">
                        <h3 class="text-light">JOREB</h3>
                        <span class="designation">Laravel Fullstack Developer</span>
                    </div>
                    <img class="me" src="{{ asset('assets2/images/joreb.png') }}" alt="Me">
                    <h2 class="email">jorembelen@gmail.com</h2>
                    <h2 class="address">Jubail, Saudi Arabia</h2>
                    <p class="copyright">&copy; All right reserved JOREB @ <script>document.write(new Date().getFullYear())</script></p>
                    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
                        <li>
                            <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="lab la-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/jorembelen/"><i class="lab la-github"></i></a>
                        </li>
                    </ul>
                    <a href="#" class="theme-btn">
                        <i class="las la-envelope"></i> Hire Me!
                    </a>
                </div>

                <section class="hero-section page-section scroll-to-page" id="home">

                    <div class="custom-container">
                        <div class="hero-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-home"></i> Home
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Hi I'm <span>JOREM</span>, Laravel Fullstack Developer</h1>
                            </div>
                            <p class="scroll-animation" data-animation="fade_from_bottom">If you're looking for a Laravel developer who can help you take your project to the next level, I'd love to chat.</p>
                            <a href="#portfolio" 
                                class="go-to-project-btn scroll-to scroll-animation" 
                                data-animation="rotate_up">
                                <img src="{{ asset('assets/images/round-text.png') }}" alt="">
                                <i class="las la-arrow-down"></i>
                            </a>
        
                            <div class="facts d-flex">
                                <div class="left scroll-animation" data-animation="fade_from_left">
                                    <h1>3+</h1>
                                    <p>Years of <br>Experience</p>
                                </div>
                                <div class="right scroll-animation" data-animation="fade_from_right">
                                    <h1>20+</h1>
                                    <p>projects  <br>completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        
                <section class="about-area page-section scroll-to-page" id="about">
                    <div class="custom-container">
                        <div class="about-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="lar la-user"></i> About
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Transforming Ideas into <br>
                                    Seamless <span>Web Experiences</span></h1>
                            </div>
                            <p class="scroll-animation text-justify" data-animation="fade_from_bottom">
                                I am a passionate Laravel developer specializing in building responsive web applications. 
                                With a strong foundation in Livewire, I bring interactivity and seamless user experiences to life. 
                                I thrive on creating beautiful, functional websites that exceed expectations. Join me on this journey 
                                as we turn your ideas into captivating digital solutions.
                            </p>
                        </div>
                    </div>
                </section>
        
        
        
        
                <section class="services-area page-section scroll-to-page" id="services">
                    <div class="custom-container">
                        <div class="services-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-stream"></i> Services
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Specializations</span></h1>
                            </div>
        
                            <div class="services-items">
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-code"></i>
                                    <h2>Development</h2>
                                    <p>I build website go live with Laravel on live server using Shared Hosting like Hostgator and VPS on AWS and Digital Ocean.</p>
                                    <span class="projects">20+ Projects</span>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section>
        
        
        
        
                <section class="portfolio-area page-section scroll-to-page" id="portfolio">
                    <div class="custom-container">
                        <div class="portfolio-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-grip-vertical"></i> portfolio
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Featured <span>Projects</span></h1>
                            </div>
        
                            <div class="row portfolio-items">
                                <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-full">
                                        <div class="portfolio-item-inner">
                                            <a href="{{ asset('assets2/images/apps/aztronorth.PNG') }}" data-lightbox="example-1">
                                                <img src="{{ asset('assets2/images/apps/aztronorth2.PNG') }}" alt="Portfolio">
                                            </a>
                                            
                                            <x-list></x-list>
                                        
                                        </div>
                                        <h2><a href="#">Ecommerce - Auction with Multi Vendor Platform</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="{{ asset('assets2/images/apps/safety1.png') }}" data-lightbox="example-1">
                                                <img src="{{ asset('assets2/images/apps/safety2.png') }}" alt="Portfolio">
                                            </a>
        
                                            <x-list></x-list>

                                        </div>
                                        <h2><a href="#">HSE Incident Report Monitoring</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="{{ asset('assets2/images/apps/sales.PNG') }}" data-lightbox="example-1">
                                                <img src="{{ asset('assets2/images/apps/sales.PNG') }}" alt="Portfolio">
                                            </a>
        
                                            <x-list></x-list>

                                        </div>
                                        <h2><a href="#">Sales Monitoring Application</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="{{ asset('assets2/images/apps/apartment2.png') }}" data-lightbox="example-1">
                                                <img src="{{ asset('assets2/images/apps/apartment1.png') }}" alt="Portfolio">
                                            </a>
        
                                            <x-list></x-list>

                                        </div>
                                        <h2><a href="#">Apartment Monitoring App</a></h2>
                                    </div>
                                </div>
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="{{ asset('assets2/images/apps/parking.png') }}" data-lightbox="example-1">
                                                <img src="{{ asset('assets2/images/apps/parking.png') }}" alt="Portfolio">
                                            </a>
        
                                            <x-list></x-list>

                                        </div>
                                        <h2><a href="#">Parking Management App</a></h2>
                                    </div>
                                </div>

                                <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="{{ asset('assets2/images/apps/fms.png') }}" data-lightbox="example-1">
                                                <img src="{{ asset('assets2/images/apps/fms2.png') }}" alt="Portfolio">
                                            </a>
        
                                         <x-list></x-list>

                                        </div>
                                        <h2><a href="#">Facility Management System</a></h2>
                                    </div>
                                </div>

                            </div>
        
                        </div>
                    </div>
                </section>
        
            </div>
        </div>
    </main>
    

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/color.js') }}"></script>
</body>

</html>