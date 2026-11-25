<?php include "includes/header.php"; ?>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


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
                Electrical Panel Installation
            </span>

        </nav>


        <div class="hero-title-area">

            <div class="service-badge">
                <i class="fa-solid fa-server"></i>
                Electrical Panel Engineering
            </div>


            <h1>
                Electrical Panel
                <span>Installation</span>
            </h1>


            <p>
                Deliver safe, reliable, and professionally installed electrical
                panel systems for commercial, industrial, and infrastructure
                projects with organized power distribution and dependable
                electrical performance.
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
     ELECTRICAL PANEL INSTALLATION - PREMIUM SERVICE SECTION
     Heading: Playfair Display + Italic Orange
     Content: Normal Poppins Font
     Fully Mobile Responsive
========================================================= -->

<section class="panel-service-section">

    <div class="panel-service-container">

        <!-- =================================================
             LEFT CONTENT
        ================================================= -->

        <div class="panel-service-content">

            <!-- Section Label -->
            <div class="panel-section-label">
                <span></span>
                ELECTRICAL PANEL SOLUTIONS
            </div>


            <!-- Main Heading -->
            <h2>
                Professional Electrical Panel
                <em>Installation</em>
            </h2>


            <!-- Description -->
            <p class="panel-intro">
                Electrical panels are at the heart of a reliable power
                distribution system. At
                <strong>Wattsin Technologies Private Limited</strong>,
                we provide professional electrical panel installation
                solutions designed for safe, organized, and efficient
                power management across commercial, industrial, and
                infrastructure projects.
            </p>


            <p class="panel-intro second">
                Our team handles panel installation, electrical
                connections, cable termination, testing, and commissioning
                based on project requirements, electrical loads, equipment
                needs, and site conditions.
            </p>


            <!-- =================================================
                 SERVICE SOLUTIONS
            ================================================= -->

            <div class="panel-solutions-grid">


                <!-- LT PANEL -->
                <div class="panel-solution-card">

                    <div class="panel-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>

                    <div class="panel-card-content">

                        <h3>
                            LT Panel Installation
                        </h3>

                        <p>
                            Reliable low-tension panel installation for
                            commercial buildings, offices, retail spaces,
                            and industrial facilities.
                        </p>

                    </div>

                </div>


                <!-- HT PANEL -->
                <div class="panel-solution-card">

                    <div class="panel-icon">
                        <i class="fa-solid fa-plug-circle-bolt"></i>
                    </div>

                    <div class="panel-card-content">

                        <h3>
                            HT Panel Installation
                        </h3>

                        <p>
                            Professional high-tension electrical panel
                            solutions for high-capacity power distribution
                            requirements.
                        </p>

                    </div>

                </div>


                <!-- MCC PANEL -->
                <div class="panel-solution-card">

                    <div class="panel-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>

                    <div class="panel-card-content">

                        <h3>
                            MCC Panel Installation
                        </h3>

                        <p>
                            Motor Control Centre panel installation for
                            industrial machinery, production equipment,
                            and motor-driven systems.
                        </p>

                    </div>

                </div>


                <!-- DISTRIBUTION BOARD -->
                <div class="panel-solution-card">

                    <div class="panel-icon">
                        <i class="fa-solid fa-diagram-project"></i>
                    </div>

                    <div class="panel-card-content">

                        <h3>
                            Distribution Boards
                        </h3>

                        <p>
                            Organized distribution boards designed for
                            safe and efficient power distribution across
                            different areas.
                        </p>

                    </div>

                </div>


                <!-- TESTING -->
                <div class="panel-solution-card">

                    <div class="panel-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <div class="panel-card-content">

                        <h3>
                            Testing & Commissioning
                        </h3>

                        <p>
                            Electrical panels are inspected, tested, and
                            commissioned before being placed into operation.
                        </p>

                    </div>

                </div>


                <!-- TERMINATION -->
                <div class="panel-solution-card">

                    <div class="panel-icon">
                        <i class="fa-solid fa-link"></i>
                    </div>

                    <div class="panel-card-content">

                        <h3>
                            Cable Connection & Termination
                        </h3>

                        <p>
                            Proper cable routing, glanding, termination,
                            and connection for reliable panel operation.
                        </p>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 CTA BUTTONS
            ================================================= -->

            <div class="panel-service-cta">

                <a href="#quote" class="panel-primary-btn">

                    <span>
                        Discuss Your Panel Requirement
                    </span>

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a href="contact.php" class="panel-secondary-btn">

                    <i class="fa-regular fa-message"></i>

                    <span>
                        Send Enquiry
                    </span>

                </a>

            </div>

        </div>


        <!-- =================================================
             RIGHT IMAGE
        ================================================= -->

        <div class="panel-service-visual">

            <div class="panel-image-wrapper">

                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaLDqnZ9_K1sktMmeEDMHYDpr3iQsTPRWn5IBXQAzyTKuR0IKx72y8K6QT&s=10"
                    alt="Professional Electrical Panel Installation"
                    loading="lazy"
                >


                <!-- Image Overlay -->
                <div class="panel-image-overlay"></div>


                <!-- =================================================
                     FLOATING TRUST CARD
                ================================================= -->

                <div class="panel-trust-card">

                    <div class="panel-trust-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div>

                        <strong>
                            Safe & Reliable
                        </strong>

                        <span>
                            Electrical Panel Solutions
                        </span>

                    </div>

                </div>


                <!-- =================================================
                     BOTTOM PROJECT CARD
                ================================================= -->

                <div class="panel-project-card">

                    <div class="panel-project-icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>

                    <div>

                        <strong>
                            Professional Installation
                        </strong>

                        <span>
                            Testing • Termination • Commissioning
                        </span>

                    </div>

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
    'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Poppins:wght@400;500;600;700&display=swap'
);


/* =========================================================
   MAIN SECTION
========================================================= */

.panel-service-section {

    position: relative;

    width: 100%;

    padding: 110px 0;

    background:
        linear-gradient(
            135deg,
            #ffffff 0%,
            #fafafa 55%,
            #f7f8f9 100%
        );

    overflow: hidden;

}


/* Decorative Orange Glow */

.panel-service-section::before {

    content: "";

    position: absolute;

    width: 430px;
    height: 430px;

    left: -240px;
    top: 80px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(245,130,32,.10),
            transparent 70%
        );

    pointer-events: none;

}


.panel-service-section::after {

    content: "";

    position: absolute;

    width: 350px;
    height: 350px;

    right: -180px;
    bottom: -150px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(245,130,32,.08),
            transparent 70%
        );

    pointer-events: none;

}


/* =========================================================
   CONTAINER
========================================================= */

.panel-service-container {

    position: relative;

    z-index: 2;

    width: min(1380px, 91%);

    margin: auto;

    display: grid;

    grid-template-columns:
        minmax(0, 1.05fr)
        minmax(420px, .95fr);

    gap: 75px;

    align-items: center;

}


/* =========================================================
   SECTION LABEL
========================================================= */

.panel-section-label {

    display: flex;

    align-items: center;

    gap: 12px;

    margin-bottom: 18px;

    color: #f58220;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 2.5px;

}


.panel-section-label span {

    width: 42px;

    height: 2px;

    background: #f58220;

    border-radius: 10px;

}


/* =========================================================
   MAIN HEADING
   ONLY HEADING = FANCY FONT
========================================================= */

.panel-service-content h2 {

    margin: 0 0 24px;

    max-width: 760px;

    color: #202838;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: clamp(42px, 4vw, 65px);

    line-height: 1.05;

    font-weight: 600;

    letter-spacing: -1.5px;

}


/* Orange Italic Heading */

.panel-service-content h2 em {

    display: inline-block;

    color: #f58220;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-style: italic;

    font-weight: 500;

}


/* =========================================================
   NORMAL CONTENT FONT
========================================================= */

.panel-intro {

    max-width: 750px;

    margin: 0 0 15px;

    color: #69707b;

    font-family: "Poppins", sans-serif;

    font-size: 15px;

    font-style: normal;

    font-weight: 400;

    line-height: 1.85;

}


.panel-intro strong {

    color: #273444;

    font-family: "Poppins", sans-serif;

    font-weight: 600;

}


/* =========================================================
   SERVICE GRID
========================================================= */

.panel-solutions-grid {

    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 14px;

    margin-top: 32px;

}


/* =========================================================
   SERVICE CARD
========================================================= */

.panel-solution-card {

    display: flex;

    align-items: flex-start;

    gap: 15px;

    padding: 19px 17px;

    background: rgba(255,255,255,.86);

    border: 1px solid #e8eaed;

    border-radius: 16px;

    box-shadow:
        0 8px 25px rgba(25,35,50,.045);

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        border-color .35s ease;

}


/* Card Hover */

.panel-solution-card:hover {

    transform: translateY(-5px);

    border-color: rgba(245,130,32,.35);

    box-shadow:
        0 18px 40px rgba(25,35,50,.10);

}


/* =========================================================
   CARD ICON
========================================================= */

.panel-icon {

    flex: 0 0 46px;

    width: 46px;
    height: 46px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 13px;

    color: #f58220;

    background:
        linear-gradient(
            135deg,
            #fff5ec,
            #fffaf6
        );

    border: 1px solid rgba(245,130,32,.20);

    font-size: 17px;

    transition: .35s ease;

}


/* Icon Hover */

.panel-solution-card:hover .panel-icon {

    color: #ffffff;

    background: #f58220;

    transform:
        rotate(-5deg)
        scale(1.05);

}


/* =========================================================
   CARD TITLE
   NORMAL FONT
========================================================= */

.panel-card-content h3 {

    margin: 1px 0 5px;

    color: #252b36;

    font-family: "Poppins", sans-serif;

    font-size: 15px;

    line-height: 1.35;

    font-weight: 600;

    letter-spacing: 0;

}


/* =========================================================
   CARD DESCRIPTION
   NORMAL FONT
========================================================= */

.panel-card-content p {

    margin: 0;

    color: #777e87;

    font-family: "Poppins", sans-serif;

    font-size: 11.5px;

    font-style: normal;

    font-weight: 400;

    line-height: 1.6;

}


/* =========================================================
   CTA
========================================================= */

.panel-service-cta {

    display: flex;

    align-items: center;

    flex-wrap: wrap;

    gap: 12px;

    margin-top: 30px;

}


/* Both Buttons */

.panel-primary-btn,
.panel-secondary-btn {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 12px;

    min-height: 50px;

    padding: 0 22px;

    border-radius: 50px;

    text-decoration: none;

    font-family: "Poppins", sans-serif;

    font-size: 13px;

    font-style: normal;

    font-weight: 600;

    letter-spacing: 0;

    transition: .3s ease;

}


/* Primary Button */

.panel-primary-btn {

    color: #ffffff;

    background: #f58220;

    box-shadow:
        0 10px 25px rgba(245,130,32,.25);

}


.panel-primary-btn:hover {

    color: #ffffff;

    background: #dc6e10;

    transform: translateY(-3px);

}


.panel-primary-btn i {

    transition: .3s ease;

}


.panel-primary-btn:hover i {

    transform: translateX(4px);

}


/* Secondary Button */

.panel-secondary-btn {

    color: #273444;

    background: #ffffff;

    border: 1px solid #e1e4e8;

}


.panel-secondary-btn:hover {

    color: #f58220;

    border-color: #f58220;

    transform: translateY(-2px);

}


/* =========================================================
   RIGHT IMAGE
========================================================= */

.panel-service-visual {

    position: relative;

}


.panel-image-wrapper {

    position: relative;

    min-height: 640px;

    overflow: hidden;

    border-radius: 35px;

    background: #e9ecef;

    box-shadow:
        0 30px 70px rgba(24,35,48,.15);

}


/* Image Border */

.panel-image-wrapper::before {

    content: "";

    position: absolute;

    z-index: 3;

    inset: 0;

    border-radius: 35px;

    border: 1px solid rgba(255,255,255,.5);

    pointer-events: none;

}


/* Image */

.panel-image-wrapper img {

    width: 100%;

    height: 100%;

    min-height: 640px;

    object-fit: cover;

    object-position: center;

    display: block;

    transition: transform .8s ease;

}


.panel-image-wrapper:hover img {

    transform: scale(1.04);

}


/* =========================================================
   IMAGE OVERLAY
========================================================= */

.panel-image-overlay {

    position: absolute;

    z-index: 1;

    inset: 0;

    background:
        linear-gradient(
            to top,
            rgba(13,25,37,.65) 0%,
            rgba(13,25,37,.05) 45%,
            transparent 70%
        );

}


/* =========================================================
   TRUST CARD
========================================================= */

.panel-trust-card {

    position: absolute;

    z-index: 5;

    top: 30px;

    left: -30px;

    display: flex;

    align-items: center;

    gap: 13px;

    padding: 15px 20px;

    min-width: 235px;

    background:
        rgba(255,255,255,.94);

    border-radius: 15px;

    box-shadow:
        0 15px 40px rgba(0,0,0,.15);

    backdrop-filter: blur(10px);

}


/* Trust Icon */

.panel-trust-icon {

    width: 43px;
    height: 43px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 12px;

    color: #ffffff;

    background: #f58220;

    font-size: 17px;

}


/* Trust Title */

.panel-trust-card strong {

    display: block;

    color: #242b35;

    font-family: "Poppins", sans-serif;

    font-size: 13px;

    font-style: normal;

    font-weight: 600;

}


/* Trust Description */

.panel-trust-card span {

    display: block;

    margin-top: 2px;

    color: #858b94;

    font-family: "Poppins", sans-serif;

    font-size: 10px;

    font-style: normal;

    font-weight: 400;

}


/* =========================================================
   BOTTOM PROJECT CARD
========================================================= */

.panel-project-card {

    position: absolute;

    z-index: 5;

    left: 30px;

    right: 30px;

    bottom: 30px;

    display: flex;

    align-items: center;

    gap: 14px;

    padding: 17px 20px;

    background:
        rgba(20,31,43,.86);

    border: 1px solid rgba(255,255,255,.18);

    border-radius: 16px;

    backdrop-filter: blur(12px);

}


/* Project Icon */

.panel-project-icon {

    width: 44px;
    height: 44px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 12px;

    color: #f58220;

    background: rgba(245,130,32,.13);

    border: 1px solid rgba(245,130,32,.3);

}


/* Project Title */

.panel-project-card strong {

    display: block;

    color: #ffffff;

    font-family: "Poppins", sans-serif;

    font-size: 13px;

    font-style: normal;

    font-weight: 600;

}


/* Project Description */

.panel-project-card span {

    display: block;

    margin-top: 3px;

    color: rgba(255,255,255,.6);

    font-family: "Poppins", sans-serif;

    font-size: 10px;

    font-style: normal;

    font-weight: 400;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

    .panel-service-container {

        grid-template-columns: 1fr;

        gap: 55px;

    }


    .panel-service-content {

        max-width: 900px;

        margin: auto;

    }


    .panel-service-visual {

        max-width: 850px;

        width: 100%;

        margin: auto;

    }


    .panel-image-wrapper {

        min-height: 580px;

    }


    .panel-image-wrapper img {

        min-height: 580px;

    }


    .panel-trust-card {

        left: 25px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .panel-service-section {

        padding: 70px 0;

    }


    .panel-service-container {

        width: 90%;

        gap: 40px;

    }


    /* Label */

    .panel-section-label {

        gap: 8px;

        font-size: 9px;

        letter-spacing: 1.6px;

        margin-bottom: 14px;

    }


    .panel-section-label span {

        width: 25px;

        height: 1.5px;

    }


    /* Main Heading */

    .panel-service-content h2 {

        margin-bottom: 19px;

        font-size: 38px;

        line-height: 1.08;

        letter-spacing: -.7px;

    }


    /* Normal Paragraph */

    .panel-intro {

        font-size: 12.5px;

        line-height: 1.8;

        font-style: normal;

        margin-bottom: 12px;

    }


    /* Grid */

    .panel-solutions-grid {

        grid-template-columns: 1fr;

        gap: 11px;

        margin-top: 25px;

    }


    /* Cards */

    .panel-solution-card {

        gap: 12px;

        padding: 15px;

        border-radius: 14px;

    }


    /* Icons */

    .panel-icon {

        flex: 0 0 42px;

        width: 42px;

        height: 42px;

        border-radius: 11px;

        font-size: 15px;

    }


    /* Card Titles */

    .panel-card-content h3 {

        font-family: "Poppins", sans-serif;

        font-size: 14px;

        font-weight: 600;

    }


    /* Card Content */

    .panel-card-content p {

        font-family: "Poppins", sans-serif;

        font-size: 10.5px;

        font-weight: 400;

        line-height: 1.55;

        font-style: normal;

    }


    /* CTA */

    .panel-service-cta {

        flex-direction: column;

        align-items: stretch;

        margin-top: 24px;

    }


    .panel-primary-btn,
    .panel-secondary-btn {

        width: 100%;

        min-height: 48px;

        font-family: "Poppins", sans-serif;

        font-size: 12px;

        font-style: normal;

    }


    /* Image */

    .panel-image-wrapper {

        min-height: 450px;

        border-radius: 24px;

    }


    .panel-image-wrapper img {

        min-height: 450px;

    }


    /* Trust Card */

    .panel-trust-card {

        top: 18px;

        left: 15px;

        min-width: auto;

        padding: 11px 14px;

        gap: 9px;

        border-radius: 12px;

    }


    .panel-trust-icon {

        width: 36px;

        height: 36px;

        border-radius: 9px;

        font-size: 14px;

    }


    .panel-trust-card strong {

        font-size: 11px;

    }


    .panel-trust-card span {

        font-size: 8px;

    }


    /* Bottom Card */

    .panel-project-card {

        left: 15px;

        right: 15px;

        bottom: 15px;

        padding: 12px 14px;

        gap: 10px;

        border-radius: 13px;

    }


    .panel-project-icon {

        width: 36px;

        height: 36px;

        border-radius: 9px;

        font-size: 13px;

    }


    .panel-project-card strong {

        font-size: 10px;

    }


    .panel-project-card span {

        font-size: 8px;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .panel-service-section {

        padding: 55px 0;

    }


    .panel-service-container {

        width: 91%;

    }


    /* Heading */

    .panel-service-content h2 {

        font-size: 32px;

        line-height: 1.1;

    }


    /* Normal Paragraph */

    .panel-intro {

        font-size: 11.5px;

        line-height: 1.75;

    }


    /* Card */

    .panel-solution-card {

        padding: 13px;

    }


    .panel-card-content h3 {

        font-size: 13px;

    }


    .panel-card-content p {

        font-size: 9.5px;

        line-height: 1.55;

    }


    /* Image */

    .panel-image-wrapper {

        min-height: 390px;

        border-radius: 20px;

    }


    .panel-image-wrapper img {

        min-height: 390px;

    }

}

</style>


<!---################### Our installation process ###################----->
<!-- =========================================================
     ELECTRICAL PANEL INSTALLATION PROCESS
     PREMIUM RESPONSIVE SECTION
========================================================= -->

<section class="panel-process-section">

    <div class="panel-process-container">

        <!-- =================================================
             SECTION HEADER
        ================================================= -->

        <div class="panel-process-header">

            <div class="panel-process-label">
                <span></span>
                OUR INSTALLATION PROCESS
            </div>

            <h2>
                Planned Installation.
                <em>Tested Systems.</em>
                Reliable Performance.
            </h2>

            <p class="panel-process-intro">
                A properly installed electrical panel requires more than
                simply positioning the panel and connecting cables.
                We follow a structured installation process to ensure
                that electrical connections, cable routing, safety,
                and system performance are properly coordinated.
            </p>

        </div>


        <!-- =================================================
             PROCESS TIMELINE
        ================================================= -->

        <div class="panel-process-grid">


            <!-- 01 -->
            <div class="panel-process-card">

                <div class="process-number">
                    01
                </div>

                <div class="process-icon">
                    <i class="fa-solid fa-magnifying-glass-chart"></i>
                </div>

                <div class="process-content">

                    <h3>
                        Project & Load Assessment
                    </h3>

                    <p>
                        We understand the project requirements,
                        electrical loads, equipment requirements,
                        and panel application.
                    </p>

                </div>

            </div>


            <!-- 02 -->
            <div class="panel-process-card">

                <div class="process-number">
                    02
                </div>

                <div class="process-icon">
                    <i class="fa-solid fa-pen-ruler"></i>
                </div>

                <div class="process-content">

                    <h3>
                        Installation Planning
                    </h3>

                    <p>
                        Panel positioning, cable entry, routing,
                        access, and connection requirements are
                        planned according to site conditions.
                    </p>

                </div>

            </div>


            <!-- 03 -->
            <div class="panel-process-card">

                <div class="process-number">
                    03
                </div>

                <div class="process-icon">
                    <i class="fa-solid fa-server"></i>
                </div>

                <div class="process-content">

                    <h3>
                        Panel Installation
                    </h3>

                    <p>
                        Electrical panels are positioned and installed
                        with attention to stability, accessibility,
                        safety, and proper alignment.
                    </p>

                </div>

            </div>


            <!-- 04 -->
            <div class="panel-process-card">

                <div class="process-number">
                    04
                </div>

                <div class="process-icon">
                    <i class="fa-solid fa-cable-car"></i>
                </div>

                <div class="process-content">

                    <h3>
                        Cable Routing & Termination
                    </h3>

                    <p>
                        Incoming and outgoing cables are properly
                        routed, glanded, terminated, and connected.
                    </p>

                </div>

            </div>


            <!-- 05 -->
            <div class="panel-process-card">

                <div class="process-number">
                    05
                </div>

                <div class="process-icon">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>

                <div class="process-content">

                    <h3>
                        Electrical Inspection
                    </h3>

                    <p>
                        Panel connections and installation workmanship
                        are checked before energization.
                    </p>

                </div>

            </div>


            <!-- 06 -->
            <div class="panel-process-card">

                <div class="process-number">
                    06
                </div>

                <div class="process-icon">
                    <i class="fa-solid fa-circle-check"></i>
                </div>

                <div class="process-content">

                    <h3>
                        Testing & Commissioning
                    </h3>

                    <p>
                        Required electrical checks are carried out
                        before commissioning to help ensure reliable
                        system operation.
                    </p>

                </div>

            </div>

        </div>


        <!-- =================================================
             WHY THIS APPROACH
        ================================================= -->

        <div class="panel-benefits-section">

            <div class="panel-benefits-content">

                <div class="panel-process-label">
                    <span></span>
                    WHY THIS APPROACH MATTERS
                </div>

                <h2>
                    Built for Safer,
                    <em>Reliable Performance</em>
                </h2>

                <p>
                    A professionally planned electrical panel
                    installation can help provide better organization,
                    safer operation, easier maintenance, and reliable
                    equipment connections throughout the facility.
                </p>

            </div>


            <!-- Benefits -->

            <div class="panel-benefits-grid">


                <div class="panel-benefit-card">

                    <div class="benefit-icon">
                        <i class="fa-solid fa-diagram-project"></i>
                    </div>

                    <span>
                        Organized Power Distribution
                    </span>

                </div>


                <div class="panel-benefit-card">

                    <div class="benefit-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <span>
                        Safer Electrical Operation
                    </span>

                </div>


                <div class="panel-benefit-card">

                    <div class="benefit-icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>

                    <span>
                        Easier Maintenance Access
                    </span>

                </div>


                <div class="panel-benefit-card">

                    <div class="benefit-icon">
                        <i class="fa-solid fa-route"></i>
                    </div>

                    <span>
                        Better Cable Management
                    </span>

                </div>


                <div class="panel-benefit-card">

                    <div class="benefit-icon">
                        <i class="fa-solid fa-plug-circle-check"></i>
                    </div>

                    <span>
                        Reliable Equipment Connections
                    </span>

                </div>


                <div class="panel-benefit-card">

                    <div class="benefit-icon">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>

                    <span>
                        Improved Operational Efficiency
                    </span>

                </div>


                <div class="panel-benefit-card">

                    <div class="benefit-icon">
                        <i class="fa-solid fa-arrows-up-to-line"></i>
                    </div>

                    <span>
                        Future Electrical Expansion
                    </span>

                </div>

            </div>

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

.panel-process-section {

    position: relative;

    width: 100%;

    padding: 50px 0;

    background:
        linear-gradient(
            135deg,
            #ffffff 0%,
            #fafafa 55%,
            #f6f7f8 100%
        );

    overflow: hidden;

}


/* Decorative Glow */

.panel-process-section::before {

    content: "";

    position: absolute;

    width: 450px;
    height: 450px;

    top: -180px;
    right: -180px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(245,130,32,.09),
            transparent 70%
        );

    pointer-events: none;

}


.panel-process-section::after {

    content: "";

    position: absolute;

    width: 350px;
    height: 350px;

    bottom: -180px;
    left: -180px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(245,130,32,.07),
            transparent 70%
        );

    pointer-events: none;

}


/* =========================================================
   CONTAINER
========================================================= */

.panel-process-container {

    position: relative;

    z-index: 2;

    width: min(1280px, 91%);

    margin: auto;

}


/* =========================================================
   HEADER
========================================================= */

.panel-process-header {

    max-width: 850px;

    margin: 0 auto 65px;

    text-align: center;

}


/* Label */

.panel-process-label {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 12px;

    margin-bottom: 18px;

    color: #f58220;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 2.5px;

}


.panel-process-label span {

    width: 38px;

    height: 2px;

    background: #f58220;

    border-radius: 10px;

}


/* Main Heading */

.panel-process-header h2 {

    margin: 0 0 25px;

    color: #202838;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: clamp(40px, 4vw, 62px);

    line-height: 1.08;

    font-weight: 600;

    letter-spacing: -1.3px;

}


.panel-process-header h2 em {

    color: #f58220;

    font-style: italic;

    font-weight: 500;

}


/* Intro */

.panel-process-intro {

    max-width: 780px;

    margin: auto;

    color: #69717b;

    font-family: "Poppins", sans-serif;

    font-size: 14px;

    font-weight: 400;

    line-height: 1.9;

}


/* =========================================================
   PROCESS GRID
========================================================= */

.panel-process-grid {

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 22px;

    position: relative;

}


/* =========================================================
   PROCESS CARD
========================================================= */

.panel-process-card {

    position: relative;

    padding: 32px 27px 30px;

    min-height: 260px;

    background: #ffffff;

    border: 1px solid #e7e9ec;

    border-radius: 22px;

    overflow: hidden;

    box-shadow:
        0 12px 35px rgba(20,30,40,.055);

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        border-color .35s ease;

}


/* Orange Top Line */

.panel-process-card::before {

    content: "";

    position: absolute;

    left: 0;
    top: 0;

    width: 0;
    height: 3px;

    background: #f58220;

    transition: width .4s ease;

}


.panel-process-card:hover::before {

    width: 100%;

}


.panel-process-card:hover {

    transform: translateY(-7px);

    border-color:
        rgba(245,130,32,.30);

    box-shadow:
        0 22px 50px rgba(20,30,40,.11);

}


/* =========================================================
   NUMBER
========================================================= */

.process-number {

    position: absolute;

    top: 15px;
    right: 20px;

    color: #f1f2f4;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 58px;

    line-height: 1;

    font-weight: 700;

    transition: .35s ease;

}


.panel-process-card:hover .process-number {

    color: rgba(245,130,32,.14);

}


/* =========================================================
   ICON
========================================================= */

.process-icon {

    width: 54px;
    height: 54px;

    display: flex;

    align-items: center;
    justify-content: center;

    margin-bottom: 22px;

    border-radius: 15px;

    color: #f58220;

    background:
        linear-gradient(
            135deg,
            #fff4e9,
            #fffaf6
        );

    border: 1px solid
        rgba(245,130,32,.20);

    font-size: 19px;

    transition: .35s ease;

}


.panel-process-card:hover .process-icon {

    color: #ffffff;

    background: #f58220;

    transform:
        translateY(-2px)
        rotate(-4deg);

}


/* =========================================================
   PROCESS CONTENT
========================================================= */

.process-content {

    position: relative;

    z-index: 2;

}


/* Card Title */

.process-content h3 {

    margin: 0 0 10px;

    color: #252b36;

    font-family: "Poppins", sans-serif;

    font-size: 16px;

    line-height: 1.4;

    font-weight: 600;

}


/* Card Description */

.process-content p {

    margin: 0;

    color: #777f89;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    line-height: 1.75;

    font-weight: 400;

}


/* =========================================================
   BENEFITS SECTION
========================================================= */

.panel-benefits-section {

    display: grid;

    grid-template-columns:
        minmax(300px, .75fr)
        minmax(0, 1.25fr);

    gap: 65px;

    align-items: center;

    margin-top: 85px;

    padding: 55px;

    background: #202838;

    border-radius: 30px;

    overflow: hidden;

    position: relative;

}


/* Orange Accent */

.panel-benefits-section::after {

    content: "";

    position: absolute;

    width: 240px;
    height: 240px;

    right: -100px;
    bottom: -120px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(245,130,32,.28),
            transparent 70%
        );

}


/* Benefits Content */

.panel-benefits-content {

    position: relative;

    z-index: 2;

}


/* Benefits Label */

.panel-benefits-content .panel-process-label {

    justify-content: flex-start;

    margin-bottom: 15px;

}


.panel-benefits-content h2 {

    margin: 0 0 17px;

    color: #ffffff;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: clamp(32px, 3vw, 46px);

    line-height: 1.12;

    font-weight: 600;

}


.panel-benefits-content h2 em {

    display: inline;

    color: #f58220;

    font-style: italic;

    font-weight: 500;

}


.panel-benefits-content p {

    margin: 0;

    color: rgba(255,255,255,.68);

    font-family: "Poppins", sans-serif;

    font-size: 12.5px;

    line-height: 1.8;

    font-weight: 400;

}


/* =========================================================
   BENEFITS GRID
========================================================= */

.panel-benefits-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 12px;

}


/* Benefit Card */

.panel-benefit-card {

    display: flex;

    align-items: center;

    gap: 12px;

    min-height: 65px;

    padding: 12px 15px;

    background:
        rgba(255,255,255,.07);

    border: 1px solid
        rgba(255,255,255,.10);

    border-radius: 13px;

    transition: .3s ease;

}


.panel-benefit-card:hover {

    background:
        rgba(245,130,32,.12);

    border-color:
        rgba(245,130,32,.35);

    transform: translateX(4px);

}


/* Benefit Icon */

.benefit-icon {

    flex: 0 0 38px;

    width: 38px;
    height: 38px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 10px;

    color: #f58220;

    background:
        rgba(245,130,32,.12);

    font-size: 14px;

}


/* Benefit Text */

.panel-benefit-card span {

    color: rgba(255,255,255,.88);

    font-family: "Poppins", sans-serif;

    font-size: 11px;

    line-height: 1.45;

    font-weight: 500;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1050px) {

    .panel-process-grid {

        grid-template-columns:
            repeat(2, 1fr);

    }


    .panel-benefits-section {

        grid-template-columns: 1fr;

        gap: 35px;

        padding: 45px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .panel-process-section {

        padding: 70px 0;

    }


    .panel-process-container {

        width: 90%;

    }


    /* Header */

    .panel-process-header {

        margin-bottom: 40px;

    }


    .panel-process-label {

        gap: 8px;

        margin-bottom: 13px;

        font-size: 9px;

        letter-spacing: 1.6px;

    }


    .panel-process-label span {

        width: 25px;

        height: 1.5px;

    }


    .panel-process-header h2 {

        margin-bottom: 18px;

        font-size: 35px;

        line-height: 1.1;

        letter-spacing: -.6px;

    }


    .panel-process-intro {

        font-size: 11.5px;

        line-height: 1.8;

    }


    /* Process */

    .panel-process-grid {

        grid-template-columns: 1fr;

        gap: 13px;

    }


    .panel-process-card {

        min-height: auto;

        padding: 24px 20px;

        border-radius: 17px;

    }


    .process-number {

        top: 13px;

        right: 16px;

        font-size: 48px;

    }


    .process-icon {

        width: 46px;

        height: 46px;

        margin-bottom: 17px;

        border-radius: 12px;

        font-size: 16px;

    }


    .process-content h3 {

        font-size: 14px;

        margin-bottom: 7px;

    }


    .process-content p {

        font-size: 10.5px;

        line-height: 1.7;

    }


    /* Benefits */

    .panel-benefits-section {

        margin-top: 50px;

        padding: 30px 20px;

        border-radius: 22px;

        gap: 28px;

    }


    .panel-benefits-content .panel-process-label {

        margin-bottom: 12px;

    }


    .panel-benefits-content h2 {

        font-size: 31px;

        line-height: 1.12;

        margin-bottom: 14px;

    }


    .panel-benefits-content p {

        font-size: 10.5px;

        line-height: 1.75;

    }


    .panel-benefits-grid {

        grid-template-columns: 1fr;

        gap: 9px;

    }


    .panel-benefit-card {

        min-height: 54px;

        padding: 9px 11px;

        gap: 10px;

        border-radius: 10px;

    }


    .benefit-icon {

        flex: 0 0 34px;

        width: 34px;

        height: 34px;

        border-radius: 8px;

        font-size: 12px;

    }


    .panel-benefit-card span {

        font-size: 10px;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .panel-process-section {

        padding: 55px 0;

    }


    .panel-process-container {

        width: 91%;

    }


    .panel-process-header h2 {

        font-size: 30px;

    }


    .panel-process-intro {

        font-size: 10.5px;

    }


    .panel-process-card {

        padding: 21px 16px;

    }


    .process-number {

        font-size: 42px;

    }


    .process-icon {

        width: 43px;

        height: 43px;

        font-size: 15px;

    }


    .process-content h3 {

        font-size: 13px;

    }


    .process-content p {

        font-size: 10px;

    }


    .panel-benefits-section {

        padding: 25px 16px;

        border-radius: 19px;

    }


    .panel-benefits-content h2 {

        font-size: 27px;

    }


    .panel-benefits-content p {

        font-size: 10px;

    }

}

</style>


<!---################# Electrical panel solution #############---->
<!-- =========================================================
     RELIABLE ELECTRICAL PANEL INSTALLATION
     PREMIUM IMAGE + CONTENT SECTION
========================================================= -->

<section class="reliable-panel-section">

    <div class="reliable-panel-container">

        <!-- =================================================
             LEFT SIDE - IMAGE
        ================================================= -->

        <div class="reliable-panel-image">

            <div class="reliable-image-wrapper">

                <img
                    src="https://5.imimg.com/data5/SELLER/Default/2022/6/JR/GL/KF/154036225/electrical-panel-wiring-work-provider-500x500.jpeg"
                    alt="Professional Electrical Panel Installation Project"
                    loading="lazy"
                >

                <!-- Image Overlay -->
                <div class="reliable-image-overlay"></div>


                <!-- Experience / Trust Card -->
                <div class="reliable-trust-card">

                    <div class="reliable-trust-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div>
                        <strong>Safe & Reliable</strong>
                        <span>Electrical Panel Solutions</span>
                    </div>

                </div>


                <!-- Bottom Image Card -->
                <div class="reliable-project-card">

                    <i class="fa-solid fa-server"></i>

                    <div>
                        <strong>Professional Installation</strong>
                        <span>Commercial & Industrial Projects</span>
                    </div>

                </div>

            </div>

        </div>


        <!-- =================================================
             RIGHT SIDE - CONTENT
        ================================================= -->

        <div class="reliable-panel-content">

            <!-- Section Label -->
            <div class="reliable-section-label">
                <span></span>
                WHY CHOOSE WATTSIN TECHNOLOGIES
            </div>


            <!-- Main Heading -->
            <h2>
                Reliable Electrical Panel
                <em>Installation for Your Project</em>
            </h2>


            <!-- Sub Heading -->
            <h3>
                The Right Panel Solution for Your Electrical Requirements
            </h3>


            <!-- Intro -->
            <p class="reliable-intro">

                Whether you are
                <strong>constructing a new commercial building,
                setting up a factory, expanding a production facility,
                upgrading an existing electrical system, or replacing
                an outdated panel</strong>,
                Wattsin Technologies can support your electrical panel
                installation requirements.

            </p>


            <p class="reliable-intro">

                Our experience across commercial and industrial
                electrical environments helps us coordinate panel
                installation with other project activities and
                electrical infrastructure.

            </p>


            <!-- =================================================
                 WHY CHOOSE
            ================================================= -->

            <div class="reliable-why-title">

                <span></span>

                <h4>
                    Why Choose Wattsin Technologies?
                </h4>

            </div>


            <div class="reliable-features">


                <!-- 01 -->
                <div class="reliable-feature">

                    <div class="reliable-feature-icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>

                    <div class="reliable-feature-content">

                        <h5>
                            Professional Electrical Workmanship
                        </h5>

                        <p>
                            Careful attention to panel positioning,
                            cable routing, termination, and electrical
                            connections.
                        </p>

                    </div>

                </div>


                <!-- 02 -->
                <div class="reliable-feature">

                    <div class="reliable-feature-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>

                    <div class="reliable-feature-content">

                        <h5>
                            Commercial & Industrial Experience
                        </h5>

                        <p>
                            Solutions for offices, commercial buildings,
                            factories, manufacturing facilities, and
                            other project environments.
                        </p>

                    </div>

                </div>


                <!-- 03 -->
                <div class="reliable-feature">

                    <div class="reliable-feature-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>

                    <div class="reliable-feature-content">

                        <h5>
                            LT & HT Capability
                        </h5>

                        <p>
                            Electrical panel solutions covering both
                            low-tension and high-tension requirements.
                        </p>

                    </div>

                </div>


                <!-- 04 -->
                <div class="reliable-feature">

                    <div class="reliable-feature-icon">
                        <i class="fa-solid fa-shield"></i>
                    </div>

                    <div class="reliable-feature-content">

                        <h5>
                            Safety-Focused Execution
                        </h5>

                        <p>
                            Safety considered throughout installation,
                            inspection, testing, and commissioning.
                        </p>

                    </div>

                </div>


                <!-- 05 -->
                <div class="reliable-feature">

                    <div class="reliable-feature-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <div class="reliable-feature-content">

                        <h5>
                            Complete Installation Support
                        </h5>

                        <p>
                            From panel installation and cable termination
                            to testing and commissioning.
                        </p>

                    </div>

                </div>


                <!-- 06 -->
                <div class="reliable-feature">

                    <div class="reliable-feature-icon">
                        <i class="fa-solid fa-diagram-project"></i>
                    </div>

                    <div class="reliable-feature-content">

                        <h5>
                            Project Coordination
                        </h5>

                        <p>
                            Electrical panel activities coordinated with
                            other site requirements for smoother project
                            execution.
                        </p>

                    </div>

                </div>

            </div>


            <!-- CTA -->
            <div class="reliable-panel-cta">

                <a href="#quote" class="reliable-primary-btn">

                    <span>
                        Discuss Your Project
                    </span>

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a href="contact.php" class="reliable-secondary-btn">

                    <i class="fa-regular fa-envelope"></i>

                    <span>
                        Send Enquiry
                    </span>

                </a>

            </div>

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

.reliable-panel-section {

    position: relative;

    width: 100%;

    padding: 50px 0;

    background: #ffffff;

    overflow: hidden;

}


/* Background Decoration */

.reliable-panel-section::before {

    content: "";

    position: absolute;

    width: 420px;
    height: 420px;

    left: -240px;
    top: 80px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(245,130,32,.08),
            transparent 70%
        );

    pointer-events: none;

}


/* =========================================================
   CONTAINER
========================================================= */

.reliable-panel-container {

    position: relative;

    z-index: 2;

    width: min(1320px, 91%);

    margin: auto;

    display: grid;

    grid-template-columns:
        minmax(400px, .90fr)
        minmax(0, 1.10fr);

    gap: 75px;

    align-items: center;

}


/* =========================================================
   LEFT IMAGE
========================================================= */

.reliable-panel-image {

    position: relative;

}


.reliable-image-wrapper {

    position: relative;

    min-height: 690px;

    overflow: hidden;

    border-radius: 30px;

    background: #e9ecef;

    box-shadow:
        0 25px 65px rgba(25,35,45,.15);

}


/* Image */

.reliable-image-wrapper img {

    display: block;

    width: 100%;

    height: 100%;

    min-height: 690px;

    object-fit: cover;

    object-position: center;

    transition:
        transform .8s ease;

}


.reliable-image-wrapper:hover img {

    transform: scale(1.045);

}


/* Image Overlay */

.reliable-image-overlay {

    position: absolute;

    inset: 0;

    z-index: 1;

    background:
        linear-gradient(
            to top,
            rgba(15,27,40,.70) 0%,
            rgba(15,27,40,.08) 48%,
            transparent 72%
        );

}


/* =========================================================
   TRUST CARD
========================================================= */

.reliable-trust-card {

    position: absolute;

    z-index: 5;

    top: 28px;

    right: -28px;

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 15px 19px;

    min-width: 230px;

    background: rgba(255,255,255,.96);

    border-radius: 15px;

    box-shadow:
        0 15px 40px rgba(20,30,40,.18);

    backdrop-filter: blur(10px);

}


/* Trust Icon */

.reliable-trust-icon {

    width: 44px;
    height: 44px;

    display: flex;

    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    color: #ffffff;

    background: #f58220;

    border-radius: 12px;

    font-size: 17px;

}


.reliable-trust-card strong {

    display: block;

    color: #252c36;

    font-family: "Poppins", sans-serif;

    font-size: 13px;

    font-weight: 600;

}


.reliable-trust-card span {

    display: block;

    margin-top: 3px;

    color: #858b93;

    font-family: "Poppins", sans-serif;

    font-size: 9.5px;

    font-weight: 400;

}


/* =========================================================
   BOTTOM IMAGE CARD
========================================================= */

.reliable-project-card {

    position: absolute;

    z-index: 5;

    left: 25px;

    right: 25px;

    bottom: 25px;

    display: flex;

    align-items: center;

    gap: 13px;

    padding: 17px 19px;

    background:
        rgba(20,31,43,.88);

    border:
        1px solid rgba(255,255,255,.16);

    border-radius: 15px;

    backdrop-filter: blur(12px);

}


.reliable-project-card > i {

    width: 43px;
    height: 43px;

    display: flex;

    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    color: #f58220;

    background: rgba(245,130,32,.13);

    border:
        1px solid rgba(245,130,32,.30);

    border-radius: 11px;

}


.reliable-project-card strong {

    display: block;

    color: #ffffff;

    font-family: "Poppins", sans-serif;

    font-size: 12.5px;

    font-weight: 600;

}


.reliable-project-card span {

    display: block;

    margin-top: 3px;

    color: rgba(255,255,255,.60);

    font-family: "Poppins", sans-serif;

    font-size: 9.5px;

    font-weight: 400;

}


/* =========================================================
   RIGHT CONTENT
========================================================= */

.reliable-panel-content {

    position: relative;

}


/* Section Label */

.reliable-section-label {

    display: flex;

    align-items: center;

    gap: 11px;

    margin-bottom: 18px;

    color: #f58220;

    font-family: "Poppins", sans-serif;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 2.3px;

}


.reliable-section-label span {

    width: 38px;

    height: 2px;

    background: #f58220;

    border-radius: 10px;

}


/* =========================================================
   MAIN HEADING
   FANCY FONT ONLY
========================================================= */

.reliable-panel-content h2 {

    margin: 0 0 20px;

    max-width: 700px;

    color: #202838;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: clamp(40px, 4vw, 59px);

    line-height: 1.08;

    font-weight: 600;

    letter-spacing: -1.2px;

}


.reliable-panel-content h2 em {

    display: block;

    color: #f58220;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-style: italic;

    font-weight: 500;

}


/* =========================================================
   SUB HEADING
   NORMAL FONT
========================================================= */

.reliable-panel-content h3 {

    margin: 0 0 17px;

    color: #27303b;

    font-family: "Poppins", sans-serif;

    font-size: 18px;

    line-height: 1.5;

    font-weight: 600;

}


/* =========================================================
   INTRO CONTENT
========================================================= */

.reliable-intro {

    max-width: 720px;

    margin: 0 0 13px;

    color: #6d747d;

    font-family: "Poppins", sans-serif;

    font-size: 12.5px;

    line-height: 1.85;

    font-weight: 400;

}


.reliable-intro strong {

    color: #313a45;

    font-family: "Poppins", sans-serif;

    font-weight: 600;

}


/* =========================================================
   WHY TITLE
========================================================= */

.reliable-why-title {

    display: flex;

    align-items: center;

    gap: 11px;

    margin: 28px 0 17px;

}


.reliable-why-title span {

    width: 4px;

    height: 23px;

    border-radius: 10px;

    background: #f58220;

}


.reliable-why-title h4 {

    margin: 0;

    color: #242b35;

    font-family: "Poppins", sans-serif;

    font-size: 16px;

    font-weight: 600;

}


/* =========================================================
   FEATURES GRID
========================================================= */

.reliable-features {

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 11px;

}


/* Feature */

.reliable-feature {

    display: flex;

    align-items: flex-start;

    gap: 12px;

    padding: 15px;

    background: #fafafa;

    border: 1px solid #e8eaed;

    border-radius: 14px;

    transition:
        transform .3s ease,
        border-color .3s ease,
        box-shadow .3s ease;

}


.reliable-feature:hover {

    transform: translateY(-4px);

    border-color:
        rgba(245,130,32,.35);

    box-shadow:
        0 12px 30px rgba(20,30,40,.07);

}


/* Feature Icon */

.reliable-feature-icon {

    width: 40px;
    height: 40px;

    display: flex;

    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    color: #f58220;

    background: #fff3e8;

    border: 1px solid
        rgba(245,130,32,.18);

    border-radius: 11px;

    font-size: 14px;

    transition: .3s ease;

}


.reliable-feature:hover .reliable-feature-icon {

    color: #ffffff;

    background: #f58220;

    transform: rotate(-4deg);

}


/* Feature Title */

.reliable-feature-content h5 {

    margin: 0 0 5px;

    color: #2a313b;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    line-height: 1.45;

    font-weight: 600;

}


/* Feature Description */

.reliable-feature-content p {

    margin: 0;

    color: #7a818a;

    font-family: "Poppins", sans-serif;

    font-size: 10px;

    line-height: 1.6;

    font-weight: 400;

}


/* =========================================================
   CTA
========================================================= */

.reliable-panel-cta {

    display: flex;

    align-items: center;

    flex-wrap: wrap;

    gap: 11px;

    margin-top: 27px;

}


/* Primary */

.reliable-primary-btn,
.reliable-secondary-btn {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 10px;

    min-height: 48px;

    padding: 0 21px;

    border-radius: 50px;

    text-decoration: none;

    font-family: "Poppins", sans-serif;

    font-size: 11px;

    font-weight: 600;

    transition: .3s ease;

}


.reliable-primary-btn {

    color: #ffffff;

    background: #f58220;

    box-shadow:
        0 10px 25px rgba(245,130,32,.23);

}


.reliable-primary-btn:hover {

    color: #ffffff;

    background: #df6f13;

    transform: translateY(-3px);

}


.reliable-primary-btn i {

    transition: .3s ease;

}


.reliable-primary-btn:hover i {

    transform: translateX(4px);

}


/* Secondary */

.reliable-secondary-btn {

    color: #29313b;

    background: #ffffff;

    border: 1px solid #dfe3e7;

}


.reliable-secondary-btn:hover {

    color: #f58220;

    border-color: #f58220;

    transform: translateY(-3px);

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

    .reliable-panel-container {

        grid-template-columns: 1fr;

        gap: 55px;

    }


    .reliable-panel-image {

        width: 100%;

        max-width: 820px;

        margin: auto;

    }


    .reliable-panel-content {

        max-width: 900px;

        margin: auto;

    }


    .reliable-image-wrapper {

        min-height: 600px;

    }


    .reliable-image-wrapper img {

        min-height: 600px;

    }


    .reliable-trust-card {

        right: 20px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .reliable-panel-section {

        padding: 70px 0;

    }


    .reliable-panel-container {

        width: 90%;

        gap: 42px;

    }


    /* Image */

    .reliable-image-wrapper {

        min-height: 450px;

        border-radius: 23px;

    }


    .reliable-image-wrapper img {

        min-height: 450px;

    }


    /* Trust */

    .reliable-trust-card {

        top: 16px;

        right: 13px;

        min-width: auto;

        padding: 10px 13px;

        gap: 9px;

        border-radius: 11px;

    }


    .reliable-trust-icon {

        width: 35px;
        height: 35px;

        border-radius: 9px;

        font-size: 13px;

    }


    .reliable-trust-card strong {

        font-size: 10px;

    }


    .reliable-trust-card span {

        font-size: 7.5px;

    }


    /* Bottom Card */

    .reliable-project-card {

        left: 13px;

        right: 13px;

        bottom: 13px;

        padding: 11px 13px;

        gap: 9px;

        border-radius: 11px;

    }


    .reliable-project-card > i {

        width: 35px;
        height: 35px;

        border-radius: 8px;

        font-size: 12px;

    }


    .reliable-project-card strong {

        font-size: 9.5px;

    }


    .reliable-project-card span {

        font-size: 7.5px;

    }


    /* Label */

    .reliable-section-label {

        gap: 8px;

        margin-bottom: 13px;

        font-size: 8.5px;

        letter-spacing: 1.5px;

    }


    .reliable-section-label span {

        width: 25px;

        height: 1.5px;

    }


    /* Heading */

    .reliable-panel-content h2 {

        margin-bottom: 18px;

        font-size: 36px;

        line-height: 1.1;

        letter-spacing: -.5px;

    }


    /* Subheading */

    .reliable-panel-content h3 {

        margin-bottom: 14px;

        font-size: 14px;

        line-height: 1.5;

    }


    /* Intro */

    .reliable-intro {

        font-size: 10.5px;

        line-height: 1.8;

        margin-bottom: 11px;

    }


    /* Why */

    .reliable-why-title {

        margin: 25px 0 14px;

    }


    .reliable-why-title span {

        width: 3px;

        height: 19px;

    }


    .reliable-why-title h4 {

        font-size: 13px;

    }


    /* Features */

    .reliable-features {

        grid-template-columns: 1fr;

        gap: 9px;

    }


    .reliable-feature {

        padding: 12px;

        gap: 10px;

        border-radius: 11px;

    }


    .reliable-feature-icon {

        width: 36px;
        height: 36px;

        border-radius: 9px;

        font-size: 12px;

    }


    .reliable-feature-content h5 {

        font-size: 10.5px;

        margin-bottom: 4px;

    }


    .reliable-feature-content p {

        font-size: 9px;

        line-height: 1.55;

    }


    /* CTA */

    .reliable-panel-cta {

        flex-direction: column;

        align-items: stretch;

        margin-top: 22px;

    }


    .reliable-primary-btn,
    .reliable-secondary-btn {

        width: 100%;

        min-height: 46px;

        font-size: 10.5px;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .reliable-panel-section {

        padding: 55px 0;

    }


    .reliable-panel-container {

        width: 91%;

    }


    .reliable-image-wrapper {

        min-height: 390px;

        border-radius: 19px;

    }


    .reliable-image-wrapper img {

        min-height: 390px;

    }


    .reliable-panel-content h2 {

        font-size: 31px;

    }


    .reliable-panel-content h3 {

        font-size: 13px;

    }


    .reliable-intro {

        font-size: 10px;

    }


    .reliable-feature {

        padding: 11px;

    }


    .reliable-feature-icon {

        width: 33px;
        height: 33px;

        font-size: 11px;

    }


    .reliable-feature-content h5 {

        font-size: 10px;

    }


    .reliable-feature-content p {

        font-size: 8.5px;

    }

}

</style>
<?php include "includes/footer.php"; ?>