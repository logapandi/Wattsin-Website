<?php include "includes/header.php"; ?>


<style>
        
        /* --- Premium Hero Section with 3-Color Gradient Overlay & Background Image --- */
        .service-hero {
            position: relative;
            width: 100%;
            height: 70vh;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background: url('assets/images/service-01-hero.png') no-repeat center center/cover;
        }

        /* 3-Color Gradient Overlay (Dark Blue -> Electric Blue -> Deep Orange/Amber tint) */
        .service-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                135deg, 
                rgba(5, 15, 35, 0.92) 0%, 
                rgba(14, 43, 92, 0.78) 50%, 
                rgba(245, 130, 32, 0.35) 100%
            );
            z-index: 1;
        }

        .hero-container {
            position: relative;
            z-index: 2;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- Breadcrumbs Styling --- */
        .breadcrumbs {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 25px;
            color: #cbd5e1;
        }

        .breadcrumbs a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .breadcrumbs a:hover {
            color: #f58220;
        }

        .breadcrumbs span.separator {
            color: #f58220;
            font-size: 12px;
        }

        .breadcrumbs span.current {
            color: #ffffff;
            font-weight: 600;
        }

        /* --- Hero Content & Typography --- */
        .hero-title-area {
            max-width: 800px;
        }

        .service-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 18px;
            background: rgba(245, 130, 32, 0.15);
            border: 1px solid #f58220;
            color: #f58220;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .service-hero h1 {
            font-size: clamp(32px, 5vw, 56px);
            font-weight: 700;
            line-height: 1.15;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .service-hero h1 span {
            color: #f58220;
        }

        .service-hero p {
            font-size: clamp(16px, 2vw, 18px);
            line-height: 1.6;
            color: #e2e8f0;
            margin-bottom: 35px;
            max-width: 650px;
        }

        /* --- Action Buttons --- */
        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 36px;
            background: #f58220;
            color: #ffffff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(245, 130, 32, 0.4);
        }

        .btn-primary:hover {
            background: #d46c14;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 130, 32, 0.6);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 36px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: #f58220;
            color: #f58220;
        }

        /* --- Mobile Responsive Queries --- */
        @media (max-width: 768px) {
            .service-hero {
                height: auto;
                padding: 80px 0;
            }

            .hero-container {
                width: 92%;
                padding: 0 10px;
            }

            .hero-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn-primary, .btn-secondary {
                width: 100%;
                justify-content: center;
            }
        }
    </style>


<section class="service-hero">

    <div class="hero-container">

        <!-- Breadcrumbs -->
        <nav class="breadcrumbs" aria-label="Breadcrumb">

            <a href="index.php">
                <i class="fa-solid fa-house"></i> Home
            </a>

            <span class="separator">
                <i class="fa-solid fa-chevron-right"></i>
            </span>

            <a href="services.php">
                Services
            </a>

            <span class="separator">
                <i class="fa-solid fa-chevron-right"></i>
            </span>

            <span class="current">
                Cable Laying &amp; Termination
            </span>

        </nav>


        <div class="hero-title-area">

            <div class="service-badge">
                <i class="fa-solid fa-cable-car"></i>
                Cable Installation Engineering
            </div>


            <h1>
                Cable Laying
                <span>&amp; Termination</span>
            </h1>


            <p>
                Deliver safe, organized, and reliable cable laying and
                termination solutions for commercial, industrial, and
                infrastructure projects with professional routing,
                glanding, termination, and connection practices.
            </p>


            <div class="hero-buttons">

                <a href="#quote" class="btn-primary">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    Get Free Project Quote
                </a>


                <a href="service-01.php" class="btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to Services
                </a>

            </div>

        </div>

    </div>

</section>

<!---############### Hero section end ################---->
<!-- =========================================================
     CABLE LAYING & TERMINATION
     LEFT STICKY MENU + RIGHT ONLY SCROLL
========================================================= -->

<section class="cable-work-section" id="cable-work">

    <div class="cable-work-container">

        <!-- =================================================
             LEFT SIDE - STICKY MENU
        ================================================= -->

        <aside class="cable-work-sidebar">

            <div class="cable-sidebar-inner">

                <div class="cable-eyebrow">
                    <span></span>
                    OUR SERVICES
                </div>

                <h2>
                    Cable Laying &
                    <em>Termination</em>
                </h2>

                <p class="cable-sidebar-description">
                    Complete cable installation solutions covering
                    cable laying, tray works, glanding, termination
                    and electrical testing.
                </p>


                <!-- =================================================
                     SIX SERVICE MENUS
                ================================================= -->

                <nav class="cable-work-menu"
                     aria-label="Cable Service Navigation">


                    <!-- 01 -->

                    <a href="#cw-01"
                       class="cw-menu active">

                        <span class="cw-menu-icon">
                            <i class="fa-solid fa-cable-car"></i>
                        </span>

                        <span class="cw-menu-content">

                            <small>01</small>

                            <strong>
                                Cable Laying
                            </strong>

                        </span>

                        <span class="cw-menu-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>

                    </a>


                    <!-- 02 -->

                    <a href="#cw-02"
                       class="cw-menu">

                        <span class="cw-menu-icon">
                            <i class="fa-solid fa-road"></i>
                        </span>

                        <span class="cw-menu-content">

                            <small>02</small>

                            <strong>
                                Underground Cable
                            </strong>

                        </span>

                        <span class="cw-menu-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>

                    </a>


                    <!-- 03 -->

                    <a href="#cw-03"
                       class="cw-menu">

                        <span class="cw-menu-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </span>

                        <span class="cw-menu-content">

                            <small>03</small>

                            <strong>
                                Cable Tray Works
                            </strong>

                        </span>

                        <span class="cw-menu-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>

                    </a>


                    <!-- 04 -->

                    <a href="#cw-04"
                       class="cw-menu">

                        <span class="cw-menu-icon">
                            <i class="fa-solid fa-circle-nodes"></i>
                        </span>

                        <span class="cw-menu-content">

                            <small>04</small>

                            <strong>
                                Cable Glanding
                            </strong>

                        </span>

                        <span class="cw-menu-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>

                    </a>


                    <!-- 05 -->

                    <a href="#cw-05"
                       class="cw-menu">

                        <span class="cw-menu-icon">
                            <i class="fa-solid fa-plug-circle-check"></i>
                        </span>

                        <span class="cw-menu-content">

                            <small>05</small>

                            <strong>
                                Cable Termination
                            </strong>

                        </span>

                        <span class="cw-menu-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>

                    </a>


                    <!-- 06 -->

                    <a href="#cw-06"
                       class="cw-menu">

                        <span class="cw-menu-icon">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </span>

                        <span class="cw-menu-content">

                            <small>06</small>

                            <strong>
                                Testing & Inspection
                            </strong>

                        </span>

                        <span class="cw-menu-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>

                    </a>

                </nav>


                <!-- TRUST BOX -->

                <div class="cw-trust-box">

                    <div class="cw-trust-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div>

                        <strong>
                            Safe & Reliable Work
                        </strong>

                        <span>
                            Professional electrical execution
                        </span>

                    </div>

                </div>

            </div>

        </aside>



        <!-- =================================================
             RIGHT SIDE - ONLY THIS AREA SCROLLS
        ================================================= -->

        <div class="cable-work-scroll"
             id="cableWorkScroll">


            <!-- =================================================
                 SECTION 01
            ================================================= -->

            <article class="cw-content-section"
                     id="cw-01">

                <div class="cw-image">

                    <img
                        src="https://static.vecteezy.com/system/resources/thumbnails/048/817/487/small/skilled-electrician-working-diligently-on-wiring-in-indoor-electrical-panel-during-daylight-hours-photo.jpeg"
                        alt="Professional electrical cable laying work"
                        loading="lazy"
                    >

                    <div class="cw-image-overlay"></div>

                    <div class="cw-image-label">

                        <i class="fa-solid fa-cable-car"></i>

                        Cable Installation

                    </div>

                </div>


                <div class="cw-content">

                    <span class="cw-number">
                        01
                    </span>

                    <div class="cw-label">
                        CABLE LAYING
                    </div>

                    <h3>
                        Professional Cable Laying for
                        <em>Reliable Electrical Networks</em>
                    </h3>

                    <p>
                        Wattsin Technologies provides professional
                        cable laying services for commercial buildings,
                        industrial complexes, factories, warehouses,
                        infrastructure projects, and other electrical
                        installations.
                    </p>

                    <p>
                        Our team focuses on proper cable routing,
                        support systems, accessibility, protection,
                        and site requirements to help create an
                        organized and dependable electrical network.
                    </p>


                    <div class="cw-feature-grid">

                        <div class="cw-feature">

                            <i class="fa-solid fa-route"></i>

                            <div>
                                <strong>
                                    Planned Cable Routing
                                </strong>

                                <span>
                                    Organized routes based on project
                                    and site requirements.
                                </span>
                            </div>

                        </div>


                        <div class="cw-feature">

                            <i class="fa-solid fa-shield-halved"></i>

                            <div>
                                <strong>
                                    Protected Installation
                                </strong>

                                <span>
                                    Cable installation with suitable
                                    protection and support.
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </article>



            <!-- =================================================
                 SECTION 02
            ================================================= -->

            <article class="cw-content-section"
                     id="cw-02">

                <div class="cw-image">

                    <img
                        src="https://www.landconstructions.com/wp-content/uploads/2022/06/Electrical-Cable-Installation.jpg"
                        alt="Underground electrical cable laying"
                        loading="lazy"
                    >

                    <div class="cw-image-overlay"></div>

                    <div class="cw-image-label">

                        <i class="fa-solid fa-road"></i>

                        Underground Cable

                    </div>

                </div>


                <div class="cw-content">

                    <span class="cw-number">
                        02
                    </span>

                    <div class="cw-label">
                        UNDERGROUND CABLE LAYING
                    </div>

                    <h3>
                        Safe Underground Cable Installation
                        for <em>Long-Term Performance</em>
                    </h3>

                    <p>
                        Underground cable laying is suitable for
                        projects where electrical cables need to be
                        routed below ground through prepared trenches
                        and protected installation paths.
                    </p>

                    <p>
                        Cable routes are planned according to site
                        conditions, electrical requirements,
                        accessibility, protection and future
                        maintenance considerations.
                    </p>


                    <div class="cw-feature-grid">

                        <div class="cw-feature">

                            <i class="fa-solid fa-road"></i>

                            <div>
                                <strong>
                                    Trench Installation
                                </strong>

                                <span>
                                    Suitable underground cable
                                    installation arrangements.
                                </span>
                            </div>

                        </div>


                        <div class="cw-feature">

                            <i class="fa-solid fa-shield"></i>

                            <div>
                                <strong>
                                    Cable Protection
                                </strong>

                                <span>
                                    Planned installation to protect
                                    cables from site conditions.
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </article>



            <!-- =================================================
                 SECTION 03
            ================================================= -->

            <article class="cw-content-section"
                     id="cw-03">

                <div class="cw-image">

                    <img
                        src="https://www.elconglobal.com/img/blog-images/warehouse-cable-management-cable-trays.jpg"
                        alt="Industrial cable tray installation"
                        loading="lazy"
                    >

                    <div class="cw-image-overlay"></div>

                    <div class="cw-image-label">

                        <i class="fa-solid fa-layer-group"></i>

                        Cable Tray Works

                    </div>

                </div>


                <div class="cw-content">

                    <span class="cw-number">
                        03
                    </span>

                    <div class="cw-label">
                        CABLE TRAY INSTALLATION
                    </div>

                    <h3>
                        Organized Cable Tray Systems for
                        <em>Efficient Cable Management</em>
                    </h3>

                    <p>
                        Cable tray installation provides structured
                        routes for electrical cables across commercial,
                        industrial, manufacturing and infrastructure
                        environments.
                    </p>

                    <p>
                        Suitable tray and support arrangements help
                        maintain organized cable routing while making
                        inspection, maintenance and future electrical
                        expansion easier.
                    </p>


                    <div class="cw-feature-grid">

                        <div class="cw-feature">

                            <i class="fa-solid fa-bars-staggered"></i>

                            <div>
                                <strong>
                                    Organized Routing
                                </strong>

                                <span>
                                    Structured cable routes for
                                    improved cable management.
                                </span>
                            </div>

                        </div>


                        <div class="cw-feature">

                            <i class="fa-solid fa-screwdriver-wrench"></i>

                            <div>
                                <strong>
                                    Secure Supports
                                </strong>

                                <span>
                                    Proper support arrangements for
                                    dependable installation.
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </article>



            <!-- =================================================
                 SECTION 04
            ================================================= -->

            <article class="cw-content-section"
                     id="cw-04">

                <div class="cw-image">

                    <img
                        src="https://www.difvan.com/wp-content/uploads/2026/06/cable-gland-earthing-industrial-panel.png"
                        alt="Electrical cable glanding work"
                        loading="lazy"
                    >

                    <div class="cw-image-overlay"></div>

                    <div class="cw-image-label">

                        <i class="fa-solid fa-circle-nodes"></i>

                        Cable Glanding

                    </div>

                </div>


                <div class="cw-content">

                    <span class="cw-number">
                        04
                    </span>

                    <div class="cw-label">
                        CABLE GLANDING
                    </div>

                    <h3>
                        Professional Cable Glanding for
                        <em>Secure Electrical Connections</em>
                    </h3>

                    <p>
                        Proper cable glanding is an important part of
                        electrical cable installation. Our technicians
                        provide organized cable entry and glanding
                        solutions according to project requirements.
                    </p>

                    <p>
                        The work focuses on cable preparation,
                        suitable gland installation, secure cable entry
                        and connection requirements for dependable
                        electrical systems.
                    </p>


                    <div class="cw-feature-grid">

                        <div class="cw-feature">

                            <i class="fa-solid fa-circle-check"></i>

                            <div>
                                <strong>
                                    Cable Preparation
                                </strong>

                                <span>
                                    Careful preparation before the
                                    termination process.
                                </span>
                            </div>

                        </div>


                        <div class="cw-feature">

                            <i class="fa-solid fa-link"></i>

                            <div>
                                <strong>
                                    Secure Cable Entry
                                </strong>

                                <span>
                                    Organized gland installation and
                                    cable entry arrangements.
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </article>



            <!-- =================================================
                 SECTION 05
            ================================================= -->

            <article class="cw-content-section"
                     id="cw-05">

                <div class="cw-image">

                    <img
                        src="https://www.rowse-automation.co.uk/static/images/blog/posts/X65JGWQqYC5oOhJQ.jpg"
                        alt="Electrical cable termination work"
                        loading="lazy"
                    >

                    <div class="cw-image-overlay"></div>

                    <div class="cw-image-label">

                        <i class="fa-solid fa-plug-circle-check"></i>

                        Cable Termination

                    </div>

                </div>


                <div class="cw-content">

                    <span class="cw-number">
                        05
                    </span>

                    <div class="cw-label">
                        CABLE TERMINATION
                    </div>

                    <h3>
                        Accurate Cable Termination for
                        <em>Reliable Connectivity</em>
                    </h3>

                    <p>
                        Wattsin Technologies provides cable termination
                        services for LT and HT power and control cable
                        applications according to project requirements.
                    </p>

                    <p>
                        Our technicians handle cable preparation,
                        connection, termination and inspection with
                        attention to organized workmanship and
                        dependable electrical connectivity.
                    </p>


                    <div class="cw-feature-grid">

                        <div class="cw-feature">

                            <i class="fa-solid fa-plug"></i>

                            <div>
                                <strong>
                                    Professional Termination
                                </strong>

                                <span>
                                    Proper cable connection for panels
                                    and electrical equipment.
                                </span>
                            </div>

                        </div>


                        <div class="cw-feature">

                            <i class="fa-solid fa-bolt"></i>

                            <div>
                                <strong>
                                    LT & HT Applications
                                </strong>

                                <span>
                                    Cable termination support for
                                    different electrical systems.
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </article>



            <!-- =================================================
                 SECTION 06
            ================================================= -->

            <article class="cw-content-section"
                     id="cw-06">

                <div class="cw-image">

                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4xtZihNEAG2HnsBZbWVADBMWWDw0zb-mkC_Uo2zS0jV8FSQ_qpiPwPF1n&s=10"
                        alt="Electrical cable testing and inspection"
                        loading="lazy"
                    >

                    <div class="cw-image-overlay"></div>

                    <div class="cw-image-label">

                        <i class="fa-solid fa-clipboard-check"></i>

                        Testing & Inspection

                    </div>

                </div>


                <div class="cw-content">

                    <span class="cw-number">
                        06
                    </span>

                    <div class="cw-label">
                        TESTING & INSPECTION
                    </div>

                    <h3>
                        Testing & Inspection for
                        <em>Dependable Electrical Performance</em>
                    </h3>

                    <p>
                        Cable installation does not end with laying
                        and termination. Inspection and testing help
                        verify that installed electrical connections
                        are ready for reliable system operation.
                    </p>

                    <p>
                        Our approach includes inspection of cable
                        routes, connections and termination work,
                        followed by required electrical checks before
                        commissioning.
                    </p>


                    <div class="cw-feature-grid">

                        <div class="cw-feature">

                            <i class="fa-solid fa-magnifying-glass"></i>

                            <div>
                                <strong>
                                    Installation Inspection
                                </strong>

                                <span>
                                    Review of cable routes and
                                    installation workmanship.
                                </span>
                            </div>

                        </div>


                        <div class="cw-feature">

                            <i class="fa-solid fa-circle-check"></i>

                            <div>
                                <strong>
                                    Commissioning Support
                                </strong>

                                <span>
                                    Required checks before electrical
                                    system operation.
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </article>


        </div>

    </div>

</section>



<style>

/* =========================================================
   GOOGLE FONTS
========================================================= */

@import url(
'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Poppins:wght@400;500;600;700&display=swap'
);


/* =========================================================
   MAIN SECTION
========================================================= */

.cable-work-section {

    position: relative;

    width: 100%;

    padding: 100px 0;

    background:
        linear-gradient(
            135deg,
            #ffffff 0%,
            #f8f9fa 100%
        );

}


/* =========================================================
   MAIN CONTAINER
========================================================= */

.cable-work-container {

    width: min(1380px, 92%);

    margin: 0 auto;

    display: grid;

    grid-template-columns: 350px minmax(0, 1fr);

    gap: 65px;

    align-items: start;

}


/* =========================================================
   LEFT SIDEBAR
   STAYS STICKY
========================================================= */

.cable-work-sidebar {

    position: sticky;

    top: 30px;

    height: calc(100vh - 60px);

    z-index: 20;

}


.cable-sidebar-inner {

    height: 100%;

    display: flex;

    flex-direction: column;

}


/* =========================================================
   SIDEBAR HEADING
========================================================= */

.cable-eyebrow {

    display: flex;

    align-items: center;

    gap: 10px;

    color: #f58220;

    font-family: "Poppins", sans-serif;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 2px;

    margin-bottom: 15px;

}


.cable-eyebrow span {

    width: 38px;

    height: 2px;

    background: #f58220;

    display: block;

}


.cable-work-sidebar h2 {

    margin: 0;

    color: #202936;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 44px;

    line-height: 1.08;

    font-weight: 600;

}


.cable-work-sidebar h2 em {

    display: block;

    color: #f58220;

    font-style: italic;

    font-weight: 500;

}


.cable-sidebar-description {

    color: #69727c;

    font-family: "Poppins", sans-serif;

    font-size: 13px;

    line-height: 1.8;

    margin: 17px 0 25px;

    max-width: 310px;

}


/* =========================================================
   MENU
========================================================= */

.cable-work-menu {

    display: flex;

    flex-direction: column;

    gap: 8px;

}


.cw-menu {

    position: relative;

    display: flex;

    align-items: center;

    gap: 12px;

    min-height: 61px;

    padding: 8px 13px;

    color: #4e5862;

    background: #ffffff;

    border: 1px solid #e3e6e9;

    border-radius: 13px;

    text-decoration: none;

    overflow: hidden;

    transition:
        .3s ease;

}


.cw-menu::before {

    content: "";

    position: absolute;

    left: 0;

    top: 0;

    bottom: 0;

    width: 0;

    background: #f58220;

    transition: .3s ease;

}


.cw-menu:hover {

    transform: translateX(4px);

    border-color:
        rgba(245,130,32,.4);

}


.cw-menu.active {

    color: #ffffff;

    background: #1b2937;

    border-color: #1b2937;

    box-shadow:
        0 12px 28px rgba(20,30,40,.15);

}


.cw-menu.active::before {

    width: 4px;

}


/* =========================================================
   MENU ICON
========================================================= */

.cw-menu-icon {

    width: 40px;

    height: 40px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #f58220;

    background: #fff1e5;

    border-radius: 10px;

    font-size: 14px;

}


.cw-menu.active .cw-menu-icon {

    color: #ffffff;

    background: #f58220;

}


/* =========================================================
   MENU TEXT
========================================================= */

.cw-menu-content {

    flex: 1;

    display: flex;

    flex-direction: column;

    gap: 2px;

}


.cw-menu-content small {

    color: #f58220;

    font-family: "Poppins", sans-serif;

    font-size: 8px;

    font-weight: 700;

    letter-spacing: 1px;

}


.cw-menu-content strong {

    color: inherit;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    line-height: 1.3;

    font-weight: 600;

}


.cw-menu-arrow {

    font-size: 10px;

    color: #8a929a;

}


.cw-menu.active .cw-menu-arrow {

    color: #f58220;

}


/* =========================================================
   TRUST BOX
========================================================= */

.cw-trust-box {

    display: flex;

    align-items: center;

    gap: 11px;

    margin-top: auto;

    padding: 14px;

    background: #fff7ef;

    border: 1px solid #f1dfcd;

    border-radius: 13px;

}


.cw-trust-icon {

    width: 40px;

    height: 40px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #ffffff;

    background: #f58220;

    border-radius: 10px;

    font-size: 14px;

}


.cw-trust-box strong {

    display: block;

    color: #28323d;

    font-family: "Poppins", sans-serif;

    font-size: 10px;

    font-weight: 600;

}


.cw-trust-box span {

    display: block;

    margin-top: 3px;

    color: #7b848c;

    font-family: "Poppins", sans-serif;

    font-size: 8px;

}


/* =========================================================
   RIGHT SIDE SCROLL CONTAINER
========================================================= */

.cable-work-scroll {

    height: calc(100vh - 60px);

    overflow-y: auto;

    overflow-x: hidden;

    padding-right: 12px;

    scroll-behavior: smooth;

    overscroll-behavior: contain;

    scrollbar-width: thin;

    scrollbar-color:
        #f58220 #eeeeee;

}


/* Chrome / Edge scrollbar */

.cable-work-scroll::-webkit-scrollbar {

    width: 7px;

}


.cable-work-scroll::-webkit-scrollbar-track {

    background: #eeeeee;

    border-radius: 20px;

}


.cable-work-scroll::-webkit-scrollbar-thumb {

    background: #f58220;

    border-radius: 20px;

}


/* =========================================================
   CONTENT SECTIONS
========================================================= */

.cw-content-section {

    background: #ffffff;

    border: 1px solid #e4e7ea;

    border-radius: 24px;

    overflow: hidden;

    margin-bottom: 45px;

    scroll-margin-top: 15px;

    box-shadow:
        0 15px 45px rgba(25,35,45,.07);

    transition:
        border-color .3s ease,
        box-shadow .3s ease;

}


.cw-content-section:last-child {

    margin-bottom: 20px;

}


.cw-content-section.section-active {

    border-color:
        rgba(245,130,32,.3);

    box-shadow:
        0 20px 55px rgba(245,130,32,.08);

}


/* =========================================================
   IMAGE
========================================================= */

.cw-image {

    position: relative;

    height: 350px;

    overflow: hidden;

}


.cw-image img {

    width: 100%;

    height: 100%;

    display: block;

    object-fit: cover;

    transition:
        transform .8s ease;

}


.cw-content-section:hover
.cw-image img {

    transform: scale(1.035);

}


.cw-image-overlay {

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            to top,
            rgba(8,20,32,.78),
            transparent 65%
        );

}


.cw-image-label {

    position: absolute;

    left: 25px;

    bottom: 22px;

    display: inline-flex;

    align-items: center;

    gap: 9px;

    padding: 10px 16px;

    color: #ffffff;

    background:
        rgba(20,31,42,.82);

    border: 1px solid
        rgba(255,255,255,.15);

    border-radius: 50px;

    backdrop-filter: blur(10px);

    font-family: "Poppins", sans-serif;

    font-size: 11px;

    font-weight: 600;

}


.cw-image-label i {

    color: #f58220;

}


/* =========================================================
   CONTENT BODY
========================================================= */

.cw-content {

    position: relative;

    padding: 45px 48px 48px;

}


.cw-number {

    position: absolute;

    top: 20px;

    right: 30px;

    color: rgba(245,130,32,.07);

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 100px;

    line-height: 1;

    font-weight: 700;

    pointer-events: none;

}


.cw-label {

    position: relative;

    z-index: 2;

    color: #f58220;

    font-family: "Poppins", sans-serif;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 2px;

    margin-bottom: 12px;

}


.cw-content h3 {

    position: relative;

    z-index: 2;

    color: #202936;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 38px;

    line-height: 1.15;

    font-weight: 600;

    margin: 0 0 20px;

    max-width: 850px;

}


.cw-content h3 em {

    color: #f58220;

    font-style: italic;

    font-weight: 500;

}


.cw-content p {

    color: #68717c;

    font-family: "Poppins", sans-serif;

    font-size: 14px;

    line-height: 1.9;

    margin: 0 0 14px;

    max-width: 850px;

}


/* =========================================================
   FEATURE CARDS
========================================================= */

.cw-feature-grid {

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 13px;

    margin-top: 28px;

}


.cw-feature {

    display: flex;

    align-items: flex-start;

    gap: 13px;

    padding: 16px;

    background: #fafafa;

    border: 1px solid #e5e8eb;

    border-radius: 13px;

    transition: .3s ease;

}


.cw-feature:hover {

    transform: translateY(-3px);

    border-color:
        rgba(245,130,32,.35);

    background: #fffaf6;

}


.cw-feature > i {

    width: 42px;

    height: 42px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #f58220;

    background: #fff0e3;

    border-radius: 10px;

    font-size: 14px;

}


.cw-feature strong {

    display: block;

    color: #303a45;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    font-weight: 600;

    line-height: 1.4;

}


.cw-feature span {

    display: block;

    color: #7a828b;

    font-family: "Poppins", sans-serif;

    font-size: 10px;

    line-height: 1.6;

    margin-top: 4px;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

    .cable-work-container {

        grid-template-columns: 290px minmax(0,1fr);

        gap: 35px;

    }


    .cable-work-sidebar h2 {

        font-size: 36px;

    }


    .cw-menu-content strong {

        font-size: 11px;

    }


    .cw-image {

        height: 300px;

    }


    .cw-content {

        padding: 38px;

    }


    .cw-content h3 {

        font-size: 33px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .cable-work-section {

        padding: 65px 0;

    }


    .cable-work-container {

        width: 91%;

        display: block;

    }


    /* =====================================================
       SIDEBAR NO LONGER FIXED ON MOBILE
    ===================================================== */

    .cable-work-sidebar {

        position: relative;

        top: auto;

        height: auto;

        margin-bottom: 25px;

    }


    .cable-work-sidebar h2 {

        font-size: 34px;

    }


    .cable-sidebar-description {

        font-size: 11px;

        line-height: 1.75;

        margin: 14px 0 20px;

    }


    /* =====================================================
       MOBILE HORIZONTAL MENU
    ===================================================== */

    .cable-work-menu {

        display: flex;

        flex-direction: row;

        overflow-x: auto;

        gap: 8px;

        padding: 3px 3px 12px;

        scrollbar-width: none;

        scroll-behavior: smooth;

    }


    .cable-work-menu::-webkit-scrollbar {

        display: none;

    }


    .cw-menu {

        flex: 0 0 auto;

        width: 190px;

        min-height: 58px;

    }


    .cw-menu-content strong {

        font-size: 10px;

    }


    .cw-trust-box {

        display: none;

    }


    /* =====================================================
       RIGHT SIDE BECOMES NORMAL PAGE SCROLL
    ===================================================== */

    .cable-work-scroll {

        height: auto;

        overflow: visible;

        padding-right: 0;

    }


    .cw-content-section {

        margin-bottom: 35px;

        border-radius: 19px;

        scroll-margin-top: 20px;

    }


    .cw-image {

        height: 235px;

    }


    .cw-image-label {

        left: 15px;

        bottom: 15px;

        padding: 8px 12px;

        font-size: 9px;

    }


    .cw-content {

        padding: 30px 20px 25px;

    }


    .cw-number {

        font-size: 65px;

        top: 17px;

        right: 18px;

    }


    .cw-label {

        font-size: 8px;

        letter-spacing: 1.5px;

    }


    .cw-content h3 {

        font-size: 28px;

        line-height: 1.15;

        margin-bottom: 17px;

    }


    .cw-content p {

        font-size: 11px;

        line-height: 1.8;

    }


    .cw-feature-grid {

        grid-template-columns: 1fr;

        gap: 9px;

        margin-top: 22px;

    }


    .cw-feature {

        padding: 12px;

    }


    .cw-feature > i {

        width: 35px;

        height: 35px;

        font-size: 11px;

    }


    .cw-feature strong {

        font-size: 10px;

    }


    .cw-feature span {

        font-size: 9px;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .cable-work-sidebar h2 {

        font-size: 30px;

    }


    .cw-menu {

        width: 175px;

    }


    .cw-image {

        height: 210px;

    }


    .cw-content h3 {

        font-size: 25px;

    }


    .cw-content p {

        font-size: 10px;

    }

}

</style>


<!---################ CTA Section ##############---->
<!-- =========================================================
     WATTSIN TECHNOLOGIES - PREMIUM CTA
========================================================= -->

<section class="wt-cta" id="quote">

    <div class="wt-cta-container">

        <!-- LEFT CONTENT -->

        <div class="wt-cta-content">

            <div class="wt-cta-label">
                <span></span>
                START YOUR PROJECT
                <span></span>
            </div>

            <h2>
                Need Reliable Electrical
                <em>Installation Solutions?</em>
            </h2>

            <p>
                Planning a commercial, industrial, or infrastructure
                electrical project? Wattsin Technologies provides
                professional electrical planning, installation,
                testing, commissioning, and project support tailored
                to your requirements.
            </p>


            <!-- TRUST POINTS -->

            <div class="wt-cta-points">

                <div class="wt-cta-point">

                    <i class="fa-solid fa-circle-check"></i>

                    <span>
                        Commercial & Industrial Projects
                    </span>

                </div>


                <div class="wt-cta-point">

                    <i class="fa-solid fa-circle-check"></i>

                    <span>
                        LT & HT Electrical Solutions
                    </span>

                </div>


                <div class="wt-cta-point">

                    <i class="fa-solid fa-circle-check"></i>

                    <span>
                        Professional Project Execution
                    </span>

                </div>

            </div>


            <!-- BUTTONS -->

            <div class="wt-cta-buttons">

                <a href="contact.php"
                   class="wt-cta-primary">

                    <i class="fa-solid fa-file-invoice"></i>

                    Get Free Project Quote

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a href="tel:+910000000000"
                   class="wt-cta-secondary">

                    <i class="fa-solid fa-phone"></i>

                    Talk to Our Team

                </a>

            </div>

        </div>


        <!-- RIGHT TRUST CARD -->

        <div class="wt-cta-trust-card">

            <div class="wt-cta-trust-icon">

                <i class="fa-solid fa-bolt"></i>

            </div>


            <div class="wt-cta-company">

                <strong>
                    Wattsin Technologies
                </strong>

                <span>
                    Electrical Engineering & Installation
                </span>

            </div>


            <div class="wt-cta-trust-line"></div>


            <div class="wt-cta-mini-items">

                <div>

                    <i class="fa-solid fa-shield-halved"></i>

                    <span>
                        Safety
                    </span>

                </div>


                <div>

                    <i class="fa-solid fa-gem"></i>

                    <span>
                        Quality
                    </span>

                </div>


                <div>

                    <i class="fa-solid fa-clock"></i>

                    <span>
                        Timely
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>



<style>

/* =========================================================
   GOOGLE FONT
========================================================= */

@import url(
'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Poppins:wght@400;500;600;700&display=swap'
);


/* =========================================================
   MAIN CTA
========================================================= */

.wt-cta {

    width: 100%;

    padding: 75px 0;

    background: #ffffff;

    font-family: "Poppins", sans-serif;

}


/* =========================================================
   MAIN CARD
========================================================= */

.wt-cta-container {

    position: relative;

    width: min(1150px, 92%);

    margin: auto;

    display: grid;

    grid-template-columns:
        minmax(0, 1fr) 290px;

    align-items: center;

    gap: 60px;

    padding: 50px 55px;

    background: #faf8f5;

    border: 1px solid #e8dfd6;

    border-radius: 22px;

    overflow: hidden;

}


/* Orange top accent */

.wt-cta-container::before {

    content: "";

    position: absolute;

    top: 0;

    left: 45px;

    width: 100px;

    height: 4px;

    background: #f58220;

    border-radius:
        0 0 10px 10px;

}


/* =========================================================
   LEFT CONTENT
========================================================= */

.wt-cta-content {

    position: relative;

    z-index: 2;

}


/* =========================================================
   LABEL
========================================================= */

.wt-cta-label {

    display: flex;

    align-items: center;

    gap: 10px;

    margin-bottom: 14px;

    color: #f58220;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 2px;

}


.wt-cta-label span {

    width: 28px;

    height: 2px;

    background: #f58220;

}


/* =========================================================
   HEADING
========================================================= */

.wt-cta h2 {

    margin: 0 0 18px;

    color: #29231e;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 40px;

    line-height: 1.15;

    font-weight: 600;

}


.wt-cta h2 em {

    display: block;

    color: #f58220;

    font-style: italic;

    font-weight: 500;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.wt-cta-content > p {

    max-width: 760px;

    margin: 0;

    color: #655f59;

    font-family: "Poppins", sans-serif;

    font-size: 14px;

    line-height: 1.85;

}


/* =========================================================
   TRUST POINTS
========================================================= */

.wt-cta-points {

    display: flex;

    flex-wrap: wrap;

    gap: 12px 25px;

    margin-top: 23px;

}


.wt-cta-point {

    display: flex;

    align-items: center;

    gap: 8px;

    color: #403a35;

    font-size: 12px;

    font-weight: 500;

}


.wt-cta-point i {

    color: #f58220;

    font-size: 14px;

}


/* =========================================================
   BUTTONS
========================================================= */

.wt-cta-buttons {

    display: flex;

    align-items: center;

    gap: 12px;

    margin-top: 28px;

}


.wt-cta-primary,
.wt-cta-secondary {

    min-height: 48px;

    padding: 0 20px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    border-radius: 8px;

    text-decoration: none;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    font-weight: 600;

    transition: all .3s ease;

}


/* Primary */

.wt-cta-primary {

    color: #ffffff;

    background: #f58220;

    border: 1px solid #f58220;

    box-shadow:
        0 8px 22px
        rgba(245,130,32,.18);

}


.wt-cta-primary:hover {

    color: #ffffff;

    background: #d96f13;

    border-color: #d96f13;

    transform: translateY(-3px);

}


.wt-cta-primary i:last-child {

    transition: .3s ease;

}


.wt-cta-primary:hover
i:last-child {

    transform: translateX(4px);

}


/* Secondary */

.wt-cta-secondary {

    color: #332d28;

    background: #ffffff;

    border: 1px solid #dcd2c9;

}


.wt-cta-secondary:hover {

    color: #f58220;

    border-color: #f58220;

    transform: translateY(-3px);

}


.wt-cta-secondary i {

    color: #f58220;

}


/* =========================================================
   RIGHT TRUST CARD
========================================================= */

.wt-cta-trust-card {

    padding: 25px;

    background: #ffffff;

    border: 1px solid #e4dbd2;

    border-radius: 17px;

    box-shadow:
        0 12px 35px
        rgba(45,35,25,.07);

}


/* Icon */

.wt-cta-trust-icon {

    width: 48px;

    height: 48px;

    display: flex;

    align-items: center;

    justify-content: center;

    margin-bottom: 16px;

    color: #ffffff;

    background: #f58220;

    border-radius: 12px;

    font-size: 18px;

}


/* Company */

.wt-cta-company strong {

    display: block;

    color: #2c2723;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 21px;

    line-height: 1.25;

    font-weight: 600;

}


.wt-cta-company span {

    display: block;

    margin-top: 5px;

    color: #756e67;

    font-size: 11px;

    line-height: 1.6;

}


/* Divider */

.wt-cta-trust-line {

    width: 100%;

    height: 1px;

    margin: 20px 0;

    background: #eee5dd;

}


/* =========================================================
   MINI TRUST
========================================================= */

.wt-cta-mini-items {

    display: flex;

    justify-content: space-between;

    gap: 12px;

}


.wt-cta-mini-items div {

    display: flex;

    align-items: center;

    gap: 7px;

}


.wt-cta-mini-items i {

    color: #f58220;

    font-size: 13px;

}


.wt-cta-mini-items span {

    color: #514b45;

    font-size: 11px;

    font-weight: 600;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .wt-cta-container {

        grid-template-columns: 1fr;

        gap: 35px;

        padding: 45px;

    }


    .wt-cta-trust-card {

        max-width: 380px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 576px) {

    .wt-cta {

        padding: 55px 0;

    }


    .wt-cta-container {

        width: 92%;

        display: block;

        padding: 38px 22px;

        border-radius: 17px;

    }


    .wt-cta-container::before {

        left: 25px;

        width: 70px;

        height: 3px;

    }


    .wt-cta-label {

        font-size: 9px;

        letter-spacing: 1.5px;

        gap: 7px;

    }


    .wt-cta-label span {

        width: 20px;

        height: 1px;

    }


    .wt-cta h2 {

        font-size: 30px;

        line-height: 1.16;

        margin-bottom: 16px;

    }


    .wt-cta-content > p {

        font-size: 12px;

        line-height: 1.8;

    }


    .wt-cta-points {

        flex-direction: column;

        gap: 10px;

        margin-top: 20px;

    }


    .wt-cta-point {

        font-size: 11px;

    }


    .wt-cta-point i {

        font-size: 13px;

    }


    .wt-cta-buttons {

        flex-direction: column;

        align-items: stretch;

        gap: 10px;

        margin-top: 25px;

    }


    .wt-cta-primary,
    .wt-cta-secondary {

        width: 100%;

        min-height: 48px;

        font-size: 11px;

    }


    .wt-cta-trust-card {

        margin-top: 30px;

        padding: 22px 18px;

    }


    .wt-cta-trust-icon {

        width: 44px;

        height: 44px;

        font-size: 16px;

    }


    .wt-cta-company strong {

        font-size: 19px;

    }


    .wt-cta-company span {

        font-size: 10px;

    }


    .wt-cta-mini-items span {

        font-size: 10px;

    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 380px) {

    .wt-cta h2 {

        font-size: 27px;

    }


    .wt-cta-content > p {

        font-size: 11px;

    }


    .wt-cta-point {

        font-size: 10px;

    }

}

</style>



<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {


        const scrollBox =
            document.getElementById(
                "cableWorkScroll"
            );


        const menuItems =
            document.querySelectorAll(
                ".cw-menu"
            );


        const contentSections =
            document.querySelectorAll(
                ".cw-content-section"
            );


        /* =====================================================
           CLICK MENU
        ===================================================== */

        menuItems.forEach(function (menu) {

            menu.addEventListener(
                "click",
                function (event) {

                    event.preventDefault();


                    const targetId =
                        this.getAttribute(
                            "href"
                        );


                    const target =
                        document.querySelector(
                            targetId
                        );


                    if (!target) return;


                    /* Desktop:
                       scroll ONLY right container */

                    if (
                        window.innerWidth > 767
                    ) {

                        scrollBox.scrollTo({

                            top:
                                target.offsetTop,

                            behavior:
                                "smooth"

                        });

                    }

                    /* Mobile:
                       normal page scroll */

                    else {

                        target.scrollIntoView({

                            behavior:
                                "smooth",

                            block:
                                "start"

                        });

                    }


                    setActiveMenu(this);

                }

            );

        });


        /* =====================================================
           ACTIVE MENU FUNCTION
        ===================================================== */

        function setActiveMenu(
            activeMenu
        ) {

            menuItems.forEach(
                function (menu) {

                    menu.classList.remove(
                        "active"
                    );

                }
            );


            activeMenu.classList.add(
                "active"
            );


            /* Mobile active tab positioning */

            if (
                window.innerWidth <= 767
            ) {

                activeMenu.scrollIntoView({

                    behavior:
                        "smooth",

                    inline:
                        "center",

                    block:
                        "nearest"

                });

            }

        }


        /* =====================================================
           DESKTOP SCROLL SPY
        ===================================================== */

        if (
            window.innerWidth > 767
        ) {

            const observer =
                new IntersectionObserver(

                    function (entries) {

                        entries.forEach(
                            function (entry) {

                                if (
                                    !entry.isIntersecting
                                ) {

                                    return;

                                }


                                const currentId =
                                    entry.target.id;


                                menuItems.forEach(
                                    function (menu) {

                                        if (
                                            menu.getAttribute(
                                                "href"
                                            )
                                            ===
                                            "#" +
                                            currentId
                                        ) {

                                            setActiveMenu(
                                                menu
                                            );

                                        }

                                    }
                                );


                                /* Active card */

                                contentSections.forEach(
                                    function (section) {

                                        section.classList.remove(
                                            "section-active"
                                        );

                                    }
                                );


                                entry.target.classList.add(
                                    "section-active"
                                );

                            }
                        );

                    },

                    {

                        root:
                            scrollBox,

                        threshold:
                            0.35,

                        rootMargin:
                            "-5% 0px -50% 0px"

                    }

                );


            contentSections.forEach(
                function (section) {

                    observer.observe(
                        section
                    );

                }
            );

        }


        /* =====================================================
           MOBILE SCROLL SPY
        ===================================================== */

        if (
            window.innerWidth <= 767
        ) {

            const mobileObserver =
                new IntersectionObserver(

                    function (entries) {

                        entries.forEach(
                            function (entry) {

                                if (
                                    entry.isIntersecting
                                ) {

                                    const currentId =
                                        entry.target.id;


                                    menuItems.forEach(
                                        function (menu) {

                                            if (
                                                menu.getAttribute(
                                                    "href"
                                                )
                                                ===
                                                "#" +
                                                currentId
                                            ) {

                                                setActiveMenu(
                                                    menu
                                                );

                                            }

                                        }
                                    );

                                }

                            }
                        );

                    },

                    {

                        threshold:
                            0.25,

                        rootMargin:
                            "-10% 0px -55% 0px"

                    }

                );


            contentSections.forEach(
                function (section) {

                    mobileObserver.observe(
                        section
                    );

                }
            );

        }

    }

);

</script>

<?php include "includes/footer.php"; ?>