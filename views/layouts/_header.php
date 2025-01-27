<?php


?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title." - Iya Abbas Foundation"; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/iya/logo/iya_logo.JPG">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/gijgo.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/slicknav.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- <link rel="stylesheet" href="/assets/css/responsive.css"> -->
</head>

<body>

    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-phone"></i> +234 (816) 723-6629</a></li>
                                    <li><a href="mailto:info@iyaabbasfoundation.org" mailto="info@iyaabbasfoundation.org"> <i class="fa fa-envelope"></i>info@iyaabbasfoundation.org</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="/">
                                    <img src="/assets/img/iya/logo/iya_logo.JPG" style="width:70px;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/" <?php if ($page == 'home') echo 'style="color:#222222;"'; ?>>Home</a></li>
                                        <li><a href="#" <?php if (in_array($page, ['about-us', 'board-of-trustees', 'our-team'])) echo 'style="color:#222222;"'; ?>
                                         >Who We Are <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/about-us">About Us</a></li>
                                                <li><a href="/board-of-trustees">Board of Trustees</a></li>
                                                <li><a href="/our-team">Our Team</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" 
                                        <?php if (in_array($page, ['health', 'education', 'projects-supported'])) echo 'style="color:#222222;"'; ?>
                                        >Programes <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/health">Health</a></li>
                                                <li><a href="/education">Education</a></li>
                                                <li><a href="/projects-supported">Projects Supported</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"
                                        <?php if (in_array($page, ['annual-grants', 'discretionary-grants', 'partnerships'])) echo 'style="color:#222222;"'; ?>
                                        >Grant Making <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/annual-grants">Annual Grants</a></li>
                                                <li><a href="/discretionary-grants">Discretionary Grants</a></li>
                                                <li><a href="/partnerships">Partnerships</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"
                                        <?php if (in_array($page, ['blog', 'gallery'])) echo 'style="color:#222222;"'; ?>
                                        >Media Center <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/blog">blog</a></li>
                                                <li><a href="/gallery">Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contact"
                                        <?php if ($page == 'contact') echo 'style="color:#222222;"'; ?>
                                        >Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Donate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>