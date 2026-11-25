<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wattsin Technologies Pvt Ltd</title>

    <!-- Third-Party Assets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ==========================================
            DESIGN SYSTEM & LUXURY VARIABLES
           ========================================== */
        :root {
            --primary-color: #0A192F;
            --primary-light: #172A45;
            --secondary-color: #FF6B00;
            --secondary-glow: rgba(255, 107, 0, 0.25);
            --bg-color: #F8FAFC;
            --heading-color: #0F172A;
            --body-text: #475569;
            --btn-color: #FF6B00;
            --btn-hover: #E05D00;
            --elastic-curve: cubic-bezier(0.34, 1.56, 0.64, 1);
            --smooth-curve: cubic-bezier(0.16, 1, 0.3, 1);
            --glass-bg: rgba(255, 255, 255, 0.85);
            --glass-border: rgba(255, 255, 255, 0.3);
            --shadow-sm: 0 4px 20px rgba(10, 25, 47, 0.05);
            --shadow-md: 0 12px 30px rgba(10, 25, 47, 0.08);
            --shadow-lg: 0 20px 40px rgba(10, 25, 47, 0.12);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-color);
            color: var(--body-text);
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }

        /* ==========================================
            1. TOPBAR
           ========================================== */
        .topbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            color: #E2E8F0;
            padding: 9px 0;
            font-size: 12.5px;
            font-weight: 500;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            position: relative;
            z-index: 1002;
        }

        .social-icons {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .social-icons a {
            color: #94A3B8;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s var(--smooth-curve);
            text-decoration: none;
            font-size: 11px;
        }

        .social-icons a:hover {
            color: #FFFFFF;
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px var(--secondary-glow);
        }

        .top-contact {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 24px;
        }

        .top-contact a {
            color: #E2E8F0;
            text-decoration: none;
            transition: all 0.3s var(--smooth-curve);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .top-contact a:hover {
            color: var(--secondary-color);
        }

        .top-contact i {
            color: var(--secondary-color);
            font-size: 12px;
        }

        /* ==========================================
            2. ULTRA-PREMIUM HEADER & NAVBAR
           ========================================== */
        #header {
            background: #FFFFFF;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-sm);
            transition: all 0.4s var(--smooth-curve);
        }

        #header.scrolled {
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow: var(--shadow-md);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .navbar {
            padding: 12px 0;
            transition: padding 0.3s var(--smooth-curve);
        }

        #header.scrolled .navbar {
            padding: 8px 0;
        }

        .navbar-brand {
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 48px;
            width: auto;
            object-fit: contain;
            transition: height 0.3s var(--smooth-curve);
        }

        #header.scrolled .navbar-brand img {
            height: 40px;
        }

        /* Centered Desktop Menu */
        .desktop-menu-wrapper {
            margin: 0 auto;
        }

        .navbar-nav {
            gap: 4px;
            align-items: center;
        }

        .navbar-nav .nav-link {
            padding: 10px 18px !important;
            font-weight: 600;
            color: var(--heading-color);
            font-size: 14px;
            letter-spacing: -0.1px;
            border-radius: 8px;
            position: relative;
            transition: all 0.3s var(--smooth-curve);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--secondary-color);
            background: rgba(255, 107, 0, 0.05);
        }

        .navbar-nav .nav-link i.fa-chevron-down {
            font-size: 10px;
            transition: transform 0.3s var(--smooth-curve);
        }

        .nav-item.dropdown:hover .nav-link i.fa-chevron-down {
            transform: rotate(180deg);
            color: var(--secondary-color);
        }

        /* Glass Floating Dropdown Cards */
        .dropdown-menu {
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 16px;
            padding: 10px;
            box-shadow: var(--shadow-lg);
            background: #FFFFFF;
            display: block;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px) scale(0.98);
            transition: all 0.3s var(--elastic-curve);
            min-width: 260px;
            margin-top: 10px;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
        }

        .dropdown-menu a {
            padding: 10px 16px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            color: var(--body-text);
            font-size: 13.5px;
            font-weight: 500;
            transition: all 0.25s var(--smooth-curve);
        }

        .dropdown-menu a i {
            font-size: 11px;
            color: var(--secondary-color);
            opacity: 0;
            transform: translateX(-8px);
            transition: all 0.25s var(--smooth-curve);
        }

        .dropdown-menu a:hover {
            background: rgba(255, 107, 0, 0.08);
            color: var(--secondary-color);
            padding-left: 20px;
            font-weight: 600;
        }

        .dropdown-menu a:hover i {
            opacity: 1;
            transform: translateX(0);
        }

        /* Modern Action CTA */
        .header-cta {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #FF852D 100%) !important;
            color: #FFFFFF !important;
            padding: 10px 22px !important;
            border-radius: 10px !important;
            font-weight: 700 !important;
            box-shadow: 0 4px 15px var(--secondary-glow);
            transition: all 0.3s var(--smooth-curve) !important;
        }

        .header-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px var(--secondary-glow) !important;
            background: linear-gradient(135deg, #E05D00 0%, var(--secondary-color) 100%) !important;
        }

        /* Elegant Hamburger Button */
        .navbar-toggler {
            border: none;
            background: rgba(10, 25, 47, 0.04);
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5px;
            cursor: pointer;
            transition: all 0.3s var(--smooth-curve);
            padding: 0;
            margin-left: auto;
        }

        .navbar-toggler:hover {
            background: rgba(255, 107, 0, 0.1);
        }

        .navbar-toggler span {
            height: 2.5px;
            width: 22px;
            background: var(--primary-color);
            border-radius: 4px;
            transition: all 0.3s var(--elastic-curve);
        }

        .navbar-toggler:hover span {
            background: var(--secondary-color);
        }

        .navbar-toggler span:nth-child(2) {
            width: 16px;
            align-self: flex-end;
            margin-right: 11px;
        }

        .navbar-toggler:hover span:nth-child(2) {
            width: 22px;
        }

        /* ==========================================
            3. LUXURY RIGHT-SIDE MOBILE DRAWER
           ========================================== */
        .mobileMenu {
            position: fixed;
            right: -380px;
            top: 0;
            width: 360px;
            max-width: 88vw;
            height: 100vh;
            background: #FFFFFF;
            z-index: 99999;
            box-shadow: -15px 0 40px rgba(10, 25, 47, 0.15);
            transition: right 0.45s var(--smooth-curve);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .mobileMenu.active {
            right: 0;
        }

        .menuHeader {
            padding: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #F1F5F9;
            background: #FFFFFF;
        }

        .menuHeader img {
            height: 38px;
            width: auto;
        }

        .closeMenu {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #F8FAFC;
            border: 1px solid #E2E8F0;
            color: var(--heading-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s var(--elastic-curve);
        }

        .closeMenu:hover {
            background: var(--secondary-color);
            color: #FFFFFF;
            border-color: var(--secondary-color);
            transform: rotate(90deg);
        }

        .menuContent {
            padding: 16px 20px;
            overflow-y: auto;
            flex-grow: 1;
        }

        .mobileMenu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mobileMenu li {
            margin-bottom: 6px;
        }

        .mobileMenu a,
        .menuToggle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 18px;
            border-radius: 12px;
            text-decoration: none;
            color: var(--heading-color);
            font-weight: 600;
            font-size: 14.5px;
            transition: all 0.3s var(--smooth-curve);
            cursor: pointer;
            background: transparent;
        }

        .mobileMenu a:hover,
        .menuToggle:hover {
            background: #F8FAFC;
            color: var(--secondary-color);
        }

        .mobileMenu ul ul {
            display: none;
            padding: 6px 0 6px 12px;
            margin-top: 4px;
            border-left: 2px solid rgba(255, 107, 0, 0.2);
            margin-left: 18px;
        }

        .mobileMenu ul ul a {
            padding: 10px 16px;
            font-size: 13.5px;
            font-weight: 500;
            color: var(--body-text);
        }

        .menuToggle i.fa-chevron-down {
            font-size: 11px;
            color: #94A3B8;
            transition: transform 0.3s var(--smooth-curve);
        }

        .menuToggle.open {
            color: var(--secondary-color);
            background: rgba(255, 107, 0, 0.05);
        }

        .menuToggle.open i.fa-chevron-down {
            transform: rotate(180deg);
            color: var(--secondary-color);
        }

        .menuFooter {
            padding: 20px;
            border-top: 1px solid #F1F5F9;
            background: #F8FAFC;
        }

        .menuFooter .btn-drawer-cta {
            width: 100%;
            background: var(--secondary-color);
            color: #FFFFFF;
            text-align: center;
            padding: 12px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            display: block;
            box-shadow: 0 4px 15px var(--secondary-glow);
            transition: all 0.3s var(--smooth-curve);
        }

        .menuFooter .btn-drawer-cta:hover {
            background: var(--btn-hover);
        }

        /* Backdrop Overlay */
        .overlay {
            position: fixed;
            inset: 0;
            background: rgba(10, 25, 47, 0.6);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            z-index: 99998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s var(--smooth-curve);
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* ==========================================
            4. FLOATING WHATSAPP WIDGET
           ========================================== */
        .whatsapp-widget-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .wa-popup-message {
            background: #FFFFFF;
            color: var(--heading-color);
            padding: 10px 18px;
            border-radius: 30px;
            box-shadow: var(--shadow-lg);
            font-size: 13px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #E2E8F0;
            opacity: 0;
            visibility: hidden;
            transform: translateX(15px) scale(0.95);
            transition: all 0.4s var(--elastic-curve);
        }

        .wa-popup-message.show {
            opacity: 1;
            visibility: visible;
            transform: translateX(0) scale(1);
        }

        .wa-popup-message i {
            color: #25D366;
            font-size: 16px;
        }

        .whatsapp-btn {
            width: 56px;
            height: 56px;
            background: #25D366;
            color: #FFFFFF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.35);
            text-decoration: none;
            position: relative;
            transition: all 0.3s var(--elastic-curve);
        }

        .whatsapp-btn:hover {
            color: #FFFFFF;
            transform: scale(1.1);
            box-shadow: 0 12px 30px rgba(37, 211, 102, 0.5);
        }

        .whatsapp-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50%;
            background: #25D366;
            z-index: -1;
            animation: waPulse 2s infinite;
        }

        @keyframes waPulse {
            0% { transform: scale(1); opacity: 0.7; }
            100% { transform: scale(1.6); opacity: 0; }
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1199px) {
            .desktop-menu-wrapper {
                display: none !important;
            }
        }

        @media (max-width: 768px) {
            .topbar {
                font-size: 11.5px;
            }
            .whatsapp-widget-container {
                bottom: 20px;
                right: 20px;
            }
            .whatsapp-btn {
                width: 48px;
                height: 48px;
                font-size: 24px;
            }
            .wa-popup-message {
                display: none; /* Hide floating popup text on smaller mobile screens for clean UI */
            }
        }
    </style>
</head>

<body>

<!-- TOPBAR -->
<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 d-none d-lg-block">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="top-contact">
                    <a href="tel:+919876543210">
                        <i class="fa fa-phone"></i> +91 63819 43623
                    </a>
                    <a href="mailto:info@wattsintech.com">
                        <i class="fa fa-envelope"></i> Info@wattsintechnologies.in
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- HEADER (GLASS STICKY NAVBAR) -->
<header id="header">
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="Wattsin Technologies Logo" style=" height:160px ; margin: -45px; " >
            </a>
<!-- Centered Desktop Navigation -->
            <div class="desktop-menu-wrapper d-none d-xl-flex">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            About Us <i class="fa fa-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="company-profile.php">Company Profile <i class="fa fa-arrow-right"></i></a>
                            <a href="mission and vision.php">Mission & Vision <i class="fa fa-arrow-right"></i></a>
                            <a href="Our Supporting Clients.php">Clients<i class="fa fa-arrow-right"></i></a>
                            <!-- <a href="core-values.php">Core Values <i class="fa fa-arrow-right"></i></a> -->
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="services.php">
                            Services </i>
                        </a>
                        <!-- <div class="dropdown-menu">
                            <a href="service-01.php">Commercial Building Works <i class="fa fa-arrow-right"></i></a>
                            <a href="service-02.php">Industrial Electrical <i class="fa fa-arrow-right"></i></a>
                            <a href="service-03.php">Electrical Panel Installation<i class="fa fa-arrow-right"></i></a>
                            <a href="service-04.php">Cable Laying & Termination<i class="fa fa-arrow-right"></i></a>
                            <a href="service-05.php">Lighting & Power Distribution<i class="fa fa-arrow-right"></i></a>
                            <a href="service-06.php">Earthing & Lightning<i class="fa fa-arrow-right"></i></a>
                            <a href="service-07.php">Testing, Commissioning <i class="fa fa-arrow-right"></i></a>
                            <a href="service-08.php">Electrical Renovation <i class="fa fa-arrow-right"></i></a>
                            <a href="#">Maintenance <i class="fa fa-arrow-right"></i></a>
                        </div> -->
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="projects.php">
                            Projects </i>
                        </a>
                        <!-- <div class="dropdown-menu">
                            <a href="#">Commercial Projects <i class="fa fa-arrow-right"></i></a>
                            <a href="#">Industrial Projects <i class="fa fa-arrow-right"></i></a>
                            <a href="#">Healthcare Projects <i class="fa fa-arrow-right"></i></a>
                            <a href="#">IT Projects <i class="fa fa-arrow-right"></i></a>
                            <a href="#">Retail Projects <i class="fa fa-arrow-right"></i></a>
                        </div> -->
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link" href="clients.php">
                            Clients <i class="fa fa-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#">Supporting Clients <i class="fa fa-arrow-right"></i></a>
                            <a href="#">Testimonials <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </li> -->

                    <li class="nav-item">
                        <a href="gallery.php" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact Us </a>
                    </li>

                </ul>
            </div>

            <!-- Desktop Action CTA -->
            <div class="d-none d-xl-block">
                <a href="contact.php" class="nav-link header-cta">Contact Us</a>
            </div>

            <!-- Mobile Hamburger Button (Right Aligned) -->
            <button class="navbar-toggler d-xl-none" type="button" id="mobileMenuOpenBtn" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </nav>
</header>

<!-- RIGHT-SIDE MOBILE DRAWER -->
<div class="mobileMenu" id="mobileMenuDrawer">
    <div class="menuHeader">
        <img src="assets/images/logo.png" alt="Wattsin Logo">
        <button class="closeMenu" id="mobileMenuCloseBtn" aria-label="Close menu">
            <i class="fa fa-times"></i>
        </button>
    </div>

    <div class="menuContent">
        <ul>
            <li><a href="index.php">Home</a></li>

            <li>
                <span class="menuToggle">
                    About Us <i class="fa fa-chevron-down"></i>
                </span>
                <ul>
                    <li><a href="company-profile.php">Company Profile <i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="mission and vision.php">Mission & Vision <i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="Our Supporting Clients.php">Clients<i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </li>

            <li>
    <a href="services.php">Services</a>
</li>

<li>
    <a href="projects.php">Projects</a>
</li>

            <!-- <li>
                <span class="menuToggle">
                    Clients <i class="fa fa-chevron-down"></i>
                </span>
                <ul>
                    <li><a href="#">Supporting Clients</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
            </li> -->

            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </div>

    <div class="menuFooter">
        <a href="contact.php" class="btn-drawer-cta">Contact Us</a>
    </div>
</div>

<div class="overlay" id="menuOverlay"></div>

<!-- FLOATING WHATSAPP WIDGET -->
<div class="whatsapp-widget-container">
    <div class="wa-popup-message" id="waPopupMsg">
        <i class="fa-solid fa-comment-dots"></i>
        <span>Need assistance? <strong>Enquire Now!</strong></span>
    </div>
    <a href="https://wa.me/916381943623?text=Hello%20Wattsin%20Technologies,%20I%20have%20an%20enquiry." target="_blank" class="whatsapp-btn" aria-label="Contact us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Header Blur & Dynamic Shadow Effect
    window.addEventListener("scroll", function() {
        const header = document.getElementById("header");
        if (window.scrollY > 30) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    $(document).ready(function () {
        /* Mobile Drawer Open/Close Logic */
        $('#mobileMenuOpenBtn').on('click', function () {
            $('#mobileMenuDrawer').addClass('active');
            $('#menuOverlay').addClass('active');
            $('body').css('overflow', 'hidden');
        });

        $('#mobileMenuCloseBtn, #menuOverlay').on('click', function () {
            $('#mobileMenuDrawer').removeClass('active');
            $('#menuOverlay').removeClass('active');
            $('body').css('overflow', 'auto');
        });

        /* Accordion-Style Mobile Submenu Toggle */
        $('.menuToggle').on('click', function () {
            const $submenu = $(this).next('ul');
            $('.menuToggle').not(this).removeClass('open').next('ul').slideUp(300);
            $(this).toggleClass('open');
            $submenu.slideToggle(300);
        });

        /* WhatsApp Interactive Tooltip Pulse */
        function triggerWaMessage() {
            const $msg = $('#waPopupMsg');
            $msg.addClass('show');
            setTimeout(function () {
                $msg.removeClass('show');
            }, 4500);
        }

        setTimeout(triggerWaMessage, 3000);
        setInterval(triggerWaMessage, 12000);
    });
</script>

</body>
</html>