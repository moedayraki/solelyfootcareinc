<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solely Foot Care inc.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css?v1">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css?v2">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" href="css/sm.css?v1">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style>
        a {
            color: #000000 !important;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <div class="site-navbar-wrap">
            <div class="site-navbar site-navbar-target js-sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-4">
                            <h1 class="my-0 site-logo">

                                <a href="/"><img width="50%" class="img-fluid"
                                        src="images/dayrakiarts_5.png" /></a>
                            </h1>
                        </div>
                        <div class="col-6 col-md-8">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#"
                                            class="site-menu-toggle js-menu-toggle text-black">
                                            <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                                        </a></div>
                                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                                        <li><a href="#home-section" class="nav-link">Home</a></li>
                                        <li><a href="#what-we-do-section" class="nav-link">What We Do</a></li>
                                        <li><a href="#about-section" class="nav-link">About Us</a></li>
                                        <li><a href="#meet-the-team" class="nav-link">Meet the Team</a></li>
                                        <li><a href="#reviews" class="nav-link">Reviews</a></li>
                                        <li><a href="#gallery-section" class="nav-link">Our Gallery</a></li>
                                        <li><a href="/faq.html" target="_blank" class="nav-link">FAQ</a></li>
                                        <li><a href="#contact-section" class="nav-link">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="sm">
                                    <ul class="smlist">
                                        <li><a href="https://instagram.com/solelyfootcareinc?igshid=YmMyMTA2M2Y="
                                                target="_blank">
                                                <ion-icon name="logo-instagram"></ion-icon>
                                            </a></li>
                                        <li><a href="https://www.facebook.com/solelyfootcare/" target="_blank">
                                                <ion-icon name="logo-facebook"></ion-icon>
                                            </a></li>
                                        <li><a href="mailto:solelyfootcare@gmail.com" target="_blank">
                                                <ion-icon name="mail-outline"></ion-icon>
                                            </a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-blocks-cover" id="home-section">
            <div class="img-wrap">
                <div class="owl-carousel slide-one-item hero-slider">
                    <div class="slide">
                        <img src="images/dayrakiarts_1.jpg" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="images/dayrakiarts_2.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto align-self-center">
                        <div class="intro">
                            <div class="heading">
                                <a href="/"><img width="80%" class="img-fluid"
                                        style="padding-bottom: 30px;" src="images/dayrakiarts_5.png" /></a></h1>
                            </div>
                            <div class="text">
                                <p class="sub-text mb-5">Professional and Quality Care in a Safe, Clean and Accessible
                                    Environment.</p>
                                <p><a href="Tel:5192520237" target="_blank" class="btn btn-outline-black btn-md">Call
                                        Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section" id="what-we-do-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6 section-title">
                        <span class="sub-title mb-2 d-block">What We Do</span>
                        <h2 class="title text-black">We specialize in complete nursing foot care for anyone & everyone,
                            with or without underlying health conditions.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 ml-auto">
                        <div class="row">
                            @foreach ($services as $service)
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                    <div class="service h-100">
                                        <h3>{{ $service->name }}</h3>
                                        <p>Treatment length: {{ $service->length }}</p>
                                        <p><a href="#" data-toggle="modal"
                                                data-target="#modal-{{ $service->id }}" class="readmore">Learn
                                                more</a></p>
                                        @include('modals.service')
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section" id="about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5">
                        <img src="images/dayrakiarts_5.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 ml-auto section-title">
                        <span class="sub-title mb-2 d-block">Our Mission</span>
                        <h2 class="title text-black mb-3">About Us</h2>
                        <p class="mb-4">Solely Foot Care Inc. Is a locally owned and operated, nursing foot care
                            company offering state-of-the-art, professional care in two modern clinics with private
                            treatment areas. In addition we also offer mobile foot care throughout Windsor Essex County
                            for those who are unable to come into our clinic.
                            Our medical foot care treatments are performed by nurses who have a certification in foot
                            care, hold a current College of Nurses License and insurance through either the RPANO or
                            RNAO.
                            We provide the highest level of infection control by following the standards for
                            sterilization set out by IPAC Canada (Infection Prevention and Control Canada), this means
                            all tools are sterilized by autoclave.
                            At Solely Foot Care Inc. we believe strongly in collaborative care and work closely with
                            many doctors and health professionals in Windsor Essex to ensure you receive the best care.
                            We will always refer when needed or for a second opinion.
                            Our feet deserve the same attention as any other part of our bodies. When your feet feel
                            good, you feel good.</p>
                        <!--<div class="d-flex">-->
                        <!--    <ul class="list-unstyled ul-check success mr-5">-->
                        <!--        @foreach ($information as $info)
-->
                        <!--        <li class="col-md-6"><a style="cursor:pointer" data-toggle="modal"-->
                        <!--                data-target="#information-{{ $info->id }}">{{ $info->name }}</a>-->
                        <!--        </li>-->
                        <!--        @include('modals.information')-->
                        <!--        @if ($loop->index == floor($loop->count / 2))
-->
                        <!--    </ul>-->
                        <!--    <ul class="list-unstyled ul-check success">-->
                        <!--
@endif-->
                        <!--
@endforeach-->
                        <!--        {{-- <li><a style="cursor:pointer" data-toggle="modal" data-target="#taxincome">Tax-->
                        <!--                Income</a></li>-->
                        <!--        @include('modals.taxincome')-->
                        <!--        <li><a style="cursor:pointer" data-toggle="modal"-->
                        <!--                data-target="#cancelationpolicy">Cancelation Policy</a></li>-->
                        <!--        @include('modals.cancelationpolicy')-->
                        <!--    </ul>-->
                        <!--    <ul class="list-unstyled ul-check success">-->
                        <!--        <li><a style="cursor:pointer" data-toggle="modal" data-target="#payment">Payment</a>-->
                        <!--        </li>-->
                        <!--        @include('modals.payment')-->
                        <!--        <li><a style="cursor:pointer" data-toggle="modal"-->
                        <!--                data-target="#sterilization">Sterilization</a></li>-->
                        <!--        @include('modals.sterilization') --}}-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section" id="meet-the-team">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6 section-title">
                        <h2 class="title text-black">Meet The Team</h2>
                    </div>
                </div>
                <div class="row no-gutters">

                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="bg-white p-3 text-center rounded box"><img
                                        class="img-responsive rounded-circle"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpWvXdcjNuTkrkDCYKZRtWwZ-emiiDJdP6sUb7VRshRA&s"
                                        width="90">
                                    <h5 class="mt-3 name">Sarah</h5>
                                    <span class="work d-block">Owner, RPN, AFCN</span>
                                    {{-- <div class="mt-4 about">
                                        <span>is a long established fact that eader&nbsp; will be
                                            distracted by the readable content.
                                        </span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="bg-white p-3 text-center rounded box"><img
                                        class="img-responsive rounded-circle"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpWvXdcjNuTkrkDCYKZRtWwZ-emiiDJdP6sUb7VRshRA&s"
                                        width="90">
                                    <h5 class="mt-3 name">Jenne</h5>
                                    <span class="work d-block">Owner, RPN, AFCN</span>
                                    {{-- <div class="mt-4 about">
                                        <span>is a long established fact that eader&nbsp; will be
                                            distracted by the readable content.
                                        </span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="bg-white p-3 text-center rounded box"><img
                                        class="img-responsive rounded-circle"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpWvXdcjNuTkrkDCYKZRtWwZ-emiiDJdP6sUb7VRshRA&s"
                                        width="90">
                                    <h5 class="mt-3 name">Leigh</h5>
                                    <span class="work d-block">BScN, AFCN, Wound Care Nurse</span>
                                    {{-- <div class="mt-4 about">
                                        <span>is a long established fact that eader&nbsp; will be
                                            distracted by the readable content.
                                        </span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="bg-white p-3 text-center rounded box"><img
                                        class="img-responsive rounded-circle"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpWvXdcjNuTkrkDCYKZRtWwZ-emiiDJdP6sUb7VRshRA&s"
                                        width="90">
                                    <h5 class="mt-3 name">Melissa</h5>
                                    <span class="work d-block">Esthetician</span>
                                    {{-- <div class="mt-4 about">
                                        <span>is a long established fact that eader&nbsp; will be
                                            distracted by the readable content.
                                        </span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light" id="reviews">
            <div class="container">
                <div class="row mb-5 ">
                    <div class="col-md-7 section-title text-center mx-auto">
                        <span class="sub-title mb-2 d-block">Testimonials</span>
                        <h2 class="title text-black mb-3">What Our Clients Are Saying</h2>
                    </div>
                </div>
                <div class="row">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-3b27299e-4c0a-47ab-8989-c949d65f4c64"></div>
                </div>
            </div>
        </div>
        <div class="site-section" id="gallery-section">
            <div class="container">
                <div class="row mb-5 ">
                    <div class="col-md-7 section-title text-center mx-auto">
                        <span class="sub-title mb-2 d-block">Gallery</span>
                        <h2 class="title text-black mb-3">Stay Up to Date With Our Feed</h2>
                    </div>
                </div>
                <div class="row">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-38d5324f-118c-4859-8974-21bb19b59367"></div>
                </div>
            </div>
        </div>
        <div class="site-section" id="contact-section">
            <div class="container">
                <form action="/mail" method="post" class="contact-form">
                    @csrf
                    <div class="section-title text-center mb-5">
                        <span class="sub-title mb-2 d-block">Get In Touch</span>
                        <h2 class="title text-black">Contact Us</h2>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <input name="first_name" type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col-md-6">
                            <input name="last_name" type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <input name="email" type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <textarea name="message" class="form-control" name="" id="" cols="30" rows="10"
                                placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-black btn-md">Send Message</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="row mb-5">
                            <div class="col-12">
                                <h3 class="footer-heading mb-4">Locations</h3>
                                <p><a target="_blank"
                                        href="https://www.google.ca/maps/place/2441+Dougall+Ave,+Windsor,+ON+N8X+1T3/@42.2873615,-83.0253612,17z/data=!3m1!4b1!4m5!3m4!1s0x883b2c45a9bec00f:0x9f1cceb4fa3bab62!8m2!3d42.2873615!4d-83.0231672">2441
                                        Dougall Avenue</a>
                                    <br />Inside Compression Stocking & Bracing Centre
                                    <br />Location offers: Compression stocking and bracing products and PEMF
                                    Therapy.
                                    <br />
                                    <br /><a target="_blank"
                                        href="https://www.google.ca/maps/place/7875+Riverside+Dr+E,+Windsor,+ON+N8S+1E1/@42.339464,-82.9503752,17z/data=!3m1!4b1!4m5!3m4!1s0x8824d52988a2701f:0x28ee022d75e55e82!8m2!3d42.339464!4d-82.9481812">7875
                                        Riverside Drive East</a>
                                    <br />Inside Riverside Medical Centre: Dr. Patrick Smith office
                                    <br />Location offers: Family Practice, Walk-in clinic, X-ray clinic, Pharmacy,
                                    Blood laboratory, Massage therapy, Medical Cosmetics, IV Therapy, Compression
                                    stocking and bracing products
                                </p>
                            </div>
                        </div>



                    </div>
                    <div class="col-lg-3 ml-auto">

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Navigation</h3>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#home-section" class="smoothscroll">Home</a></li>
                                    <li><a href="#what-we-do-section" class="smoothscroll">What We Do</a></li>
                                    <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                                    <li><a href="#team-section" class="smoothscroll">Team</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <a href="https://www.facebook.com/solelyfootcare/?ref=page_internal"
                                class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/p/CEF_y-OhcVx/" class="pl-3 pr-3"><span
                                    class="icon-instagram"></span></a>
                        </div>
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This website is made <i
                                class="icon-code text-danger" aria-hidden="true"></i> by <a
                                href="https://dayrakiarts.com" target="_blank">dayrakiarts</a>
                        </p>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>

    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        window.onload = (event) => {
            document.getElementsByClassName('owl-nav')[0].style.display = "none";
        };
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
