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
    <link rel="stylesheet" href="assets/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/smooth-scrollbar.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body class="home5-page">
    <video class="body-overlay" muted autoplay loop>
        <source src="assets/images/video5.mp4" type="video/mp4">
    </video>

    <div class="page-loader">
        <div class="bounceball"></div>
    </div>

    <span class="icon-menu">
        <span class="bar"></span>
        <span class="bar"></span>
    </span>

    {{-- <div class="global-color">
        <span class="setting-toggle">
            <i class="las la-cog"></i>
        </span>
        <div class="inner">
            <div class="overlay"></div>
            <div class="global-color-option">
                <span class="close-settings">
                    <i class="las la-times"></i>
                </span>
                <h2>Configuration</h2>
                <div class="global-color-option-inner">
                    <p>Colors</p>
                    <div class="color-boxed">
                        <a href="#" class="clr-active" onclick="color1();"></a>
                        <a href="#" onclick="color2();"></a>
                        <a href="#" onclick="color3();"></a>
                        <a href="#" onclick="color4();"></a>
                        <a href="#" onclick="color5();"></a>
                        <a href="#" onclick="color6();"></a>
                        <a href="#" onclick="color7();"></a>
                        <a href="#" onclick="color8();"></a>
                    </div>

                    <p>THREE DIMENSIONAL SHAPES</p>
                    <ul class="themes">
                        <li><a href="home1.html">Earth Lines Sphere</a></li>
                        <li><a href="home2.html">3D Abstract Ball</a></li>
                        <li><a href="home3.html">Water Waves</a></li>
                        <li><a href="home4.html">Liquids Wavy</a></li>
                        <li><a href="home6.html">Solid Color</a></li>
                        <li class="active"><a href="home5.html">Simple Strings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

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
                    <img class="me" src="/assets2/images/joreb.png" alt="Me">
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
                                    <i class="las la-home"></i> Introduce
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Hi I'm <span>JOREM</span>, Laravel Fullstack Developer</h1>
                            </div>
                            <p class="scroll-animation" data-animation="fade_from_bottom">If you're looking for a Laravel developer who can help you take your project to the next level, I'd love to chat.</p>
                            <a href="#portfolio" 
                                class="go-to-project-btn scroll-to scroll-animation" 
                                data-animation="rotate_up">
                                <img src="assets/images/round-text.png" alt="">
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
        
        
                {{-- <section class="skills-area page-section scroll-to-page" id="skills">
                    <div class="custom-container">
                        <div class="skills-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-shapes"></i> my skills
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Advantages</span></h1>
                            </div>
        
                            <div class="row skills text-center">
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/figma.png" alt="Figma">
                                            <h1 class="percent">92%</h1>
                                        </div>
                                        <p class="name">Figma</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/framer.png" alt="Framer">
                                            <h1 class="percent">85%</h1>
                                        </div>
                                        <p class="name">Framer</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/webflow.png" alt="Webflow">
                                            <h1 class="percent">80%</h1>
                                        </div>
                                        <p class="name">Webflow</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/react.png" alt="React">
                                            <h1 class="percent">90%</h1>
                                        </div>
                                        <p class="name">React</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/wordpress.png" alt="WordPress">
                                            <h1 class="percent">86%</h1>
                                        </div>
                                        <p class="name">WordPress</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/laravel.png" alt="Laravel/PHP">
                                            <h1 class="percent">70%</h1>
                                        </div>
                                        <p class="name">Laravel/PHP</p>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section> --}}
        
        
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
                                            <a href="/assets2/images/apps/aztronorth.PNG" data-lightbox="example-1">
                                                <img src="/assets2/images/apps/aztronorth2.PNG" alt="Portfolio">
                                            </a>
                                            
                                            <x-list></x-list>
                                        
                                        </div>
                                        <h2><a href="#">Ecommerce - Auction with Multi Vendor Platform</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="/assets2/images/apps/safety1.png" data-lightbox="example-1">
                                                <img src="/assets2/images/apps/safety2.png" alt="Portfolio">
                                            </a>
        
                                            <x-list></x-list>

                                        </div>
                                        <h2><a href="#">HSE Incident Report Monitoring</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="/assets2/images/apps/sales.PNG" data-lightbox="example-1">
                                                <img src="/assets2/images/apps/sales.PNG" alt="Portfolio">
                                            </a>
        
                                            <x-list></x-list>

                                        </div>
                                        <h2><a href="#">Sales Monitoring Application</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="/assets2/images/apps/apartment2.png" data-lightbox="example-1">
                                                <img src="/assets2/images/apps/apartment1.png" alt="Portfolio">
                                            </a>
        
                                            <x-list></x-list>

                                        </div>
                                        <h2><a href="#">Apartment Monitoring App</a></h2>
                                    </div>
                                </div>
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="/assets2/images/apps/parking.png" data-lightbox="example-1">
                                                <img src="/assets2/images/apps/parking.png" alt="Portfolio">
                                            </a>
        
                                            <x-list></x-list>

                                        </div>
                                        <h2><a href="#">Parking Management App</a></h2>
                                    </div>
                                </div>

                                <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="/assets2/images/apps/fms.png" data-lightbox="example-1">
                                                <img src="/assets2/images/apps/fms2.png" alt="Portfolio">
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
        
        
                {{-- <section class="testimonial-area page-section scroll-to-page" id="testimonial">
                    <div class="custom-container">
                        <div class="testimonial-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="lar la-comment"></i> testimonial
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Trusted by <span>Hundered Clients</span></h1>
                            </div>
        
                            <div class="testimonial-slider-wrap scroll-animation" data-animation="fade_from_bottom">
                                <div class="owl-carousel testimonial-slider owl-theme">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-inner">
                                            <div class="author d-flex align-items-center">
                                                <img src="assets/images/testimonial-1.jpg" alt="testinomial">
                                                <div class="right">
                                                    <h3>Paublo Dybala</h3>
                                                    <p class="designation">CEO of <span>IBM Global</span></p>
                                                </div>
                                            </div>
                                            <p>“Drake - A Developer with the creativity, professional and 
                                                master of code. Much more than what i'm expect. 
                                                High quality product & flexiable price. Recommended!.”</p>
        
                                            <a href="#" class="project-btn">Project</a>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-inner">
                                            <div class="author d-flex align-items-center">
                                                <img src="assets/images/testimonial-2.jpg" alt="testinomial">
                                                <div class="right">
                                                    <h3>Christina Morillo</h3>
                                                    <p class="designation">Product Management of <span>Invision App Inc</span></p>
                                                </div>
                                            </div>
                                            <p>“Drake was a real pleasure to work with and we look 
                                                forward to working with him again. He's definitely the kind of 
                                                designer that you can trust with any project from A-Z.”</p>
        
                                            <a href="#" class="project-btn">Project</a>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-inner">
                                            <div class="author d-flex align-items-center">
                                                <img src="assets/images/testimonial-3.jpg" alt="testinomial">
                                                <div class="right">
                                                    <h3>Phil Foden</h3>
                                                    <p class="designation">Director of <span>Envato LLC</span></p>
                                                </div>
                                            </div>
                                            <p>“Extremely profressional and fast service!. Drake is a master
                                                of code and he also very creative. We done 3 projects with
                                                him and certain will continue.”</p>
        
                                            <a href="#" class="project-btn">Project</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-footer-nav">
                                    <div class="testimonial-nav d-flex align-items-center">
                                        <button class="prev"><i class="las la-angle-left"></i></button>
                                        <div id="testimonial-slide-count"></div>
                                        <button class="next"><i class="las la-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
        
                            <div class="clients-logos">
                                <h4 class="scroll-animation" data-animation="fade_from_bottom">work with 60+ brands worldwide</h4>
                                <div class="row align-items-center">
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                        <img src="assets/images/client-1.png" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                        <img src="assets/images/client-2.png" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                        <img src="assets/images/client-3.png" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                        <img src="assets/images/client-4.png" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                        <img src="assets/images/client-5.png" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                        <img src="assets/images/client-6.png" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                        <img src="assets/images/client-7.png" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                        <img src="assets/images/client-8.png" alt="client">
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section> --}}
        
        
                {{-- <section class="pricing-area page-section scroll-to-page" id="pricing">
                    <div class="custom-container">
                        <div class="pricing-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-dollar-sign"></i> pricing
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Pricing</span></h1>
                            </div>
        
                            <div class="pricing-table-items">
                                <div class="row">
                                    <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                                        <div class="pricing-table">
                                            <div class="pricing-table-header">
                                                <div class="top d-flex justify-content-between align-items-start">
                                                    <h4>basic</h4>
                                                    <p class="text-right">Have design ready to build?<br>
                                                        or small budget</p>
                                                </div>
                                                <h1>$49 <span>/ hours</span></h1>
                                            </div>
                                            <ul class="feature-lists">
                                                <li>Need your wireframe</li>
                                                <li>Design with Figma, Framer</li>
                                                <li>Implement with Webflow, React, WordPress, Laravel/PHP</li>
                                                <li>Remote/Online</li>
                                                <li>Work in business days, no weekend.</li>
                                                <li>Support 6 months</li>
                                            </ul>
                                            <a href="#" class="theme-btn">pick this package</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                                        <div class="pricing-table">
                                            <div class="pricing-table-header">
                                                <div class="top d-flex justify-content-between align-items-start">
                                                    <h4>premium</h4>
                                                    <p class="text-right">Not have any design?<br>
                                                        Leave its for me</p>
                                                </div>
                                                <h1>$99 <span>/ hours</span></h1>
                                            </div>
                                            <ul class="feature-lists">
                                                <li>Don't need wireframe or anything</li>
                                                <li>Design with Figma, Framer from scratch</li>
                                                <li>Implement with Webflow, React, WordPress, Laravel/PHP</li>
                                                <li>Remote/Online</li>
                                                <li>Work with both weekend</li>
                                                <li>Support 12 months</li>
                                                <li>Your project alway be priority</li>
                                                <li>Customer care gifts</li>
                                            </ul>
                                            <a href="#" class="theme-btn">pick this package</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="info scroll-animation" data-animation="fade_from_bottom">
                                    Don't find any package match with your plan!<br>
                                    Want to setup a new tailor-made package for only you?. <a href="#">Contact Us</a>
                                </p>
                            </div>
        
                        </div>
                    </div>
                </section> --}}


                {{-- <section class="contact-area page-section scroll-content" id="contact">
                    <div class="custom-container">
                        <div class="contact-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-dollar-sign"></i> contact
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Let's Work <span>Together!</span></h1>
                            </div>
                            <h3 class="scroll-animation" data-animation="fade_from_bottom">hello@drake.design</h3>
                            <p id="required-msg">* Marked fields are required to fill.</p>

                            <form class="contact-form scroll-animation" data-animation="fade_from_bottom" method="POST" action="https://wpriverthemes.com/HTML/drake/mailer.php">
                                <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="full-name">full Name <sup>*</sup></label>
                                            <input type="text" name="full-name" id="full-name" placeholder="Your Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="email">Email <sup>*</sup></label>
                                            <input type="email" name="email" id="email" placeholder="Your email adress">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="phone-number">phone <span>(optional)</span></label>
                                            <input type="text" name="phone-number" id="phone-number" placeholder="Your number phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="subject">subject <sup>*</sup></label>
                                            <select name="subject" id="subject">
                                                <option value="">Select a subject</option>
                                                <option value="subject1">Subject 1</option>
                                                <option value="subject2">Subject 2</option>
                                                <option value="subject3">Subject 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <label for="budget">your budget <span>(optional)</span></label>
                                            <input type="number" name="budget" id="budget" placeholder="A range budget for your project">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <label for="message">message</label>
                                            <textarea name="message" id="message" placeholder="Wrire your message here ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group upload-attachment">
                                            <div>
                                                <label for="upload-attachment">
                                                    <i class="las la-cloud-upload-alt"></i> add an attachment
                                                    <input type="file" name="file" id="upload-attachment">
                                                </label>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group submit-btn-wrap">
                                            <button class="theme-btn" name="submit" type="submit" id="submit-form">send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </section> --}}
            </div>
        </div>
    </main>
    

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    
    <script src="assets/js/main.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/color.js"></script>
</body>

</html>