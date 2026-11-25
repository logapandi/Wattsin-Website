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
                Lighting &amp; Power Distribution
            </span>

        </nav>


        <div class="hero-title-area">

            <div class="service-badge">
                <i class="fa-solid fa-lightbulb"></i>
                Lighting &amp; Power Distribution
            </div>


            <h1>
                Lighting &amp;
                <span>Power Distribution</span>
            </h1>


            <p>
                Deliver reliable, energy-efficient lighting and power
                distribution solutions for commercial, industrial, and
                infrastructure projects with professionally planned
                electrical networks and safe power delivery.
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
     LIGHTING & POWER DISTRIBUTION
     INTRODUCTION SECTION
========================================================= -->

<section class="wt-lighting-intro">

    <div class="wt-lighting-container">

        <!-- =================================================
             LEFT IMAGE
        ================================================= -->

        <div class="wt-lighting-image-wrap">

            <div class="wt-lighting-image">

                <img
                    src="https://penclotek.com/images/lighting-distribution-panel1.jpg"
                    alt="Professional lighting and power distribution installation"
                    loading="lazy"
                >

                <div class="wt-lighting-image-overlay"></div>

            </div>


            <!-- Experience / Trust Badge -->

            <div class="wt-lighting-badge">

                <div class="wt-lighting-badge-icon">

                    <i class="fa-solid fa-lightbulb"></i>

                </div>

                <div>

                    <strong>
                        Lighting & Power
                    </strong>

                    <span>
                        Professional Solutions
                    </span>

                </div>

            </div>


            <!-- Decorative Shape -->

            <div class="wt-lighting-shape"></div>

        </div>


        <!-- =================================================
             RIGHT CONTENT
        ================================================= -->

        <div class="wt-lighting-content">

            <!-- Small Label -->

            <div class="wt-lighting-eyebrow">

                <span></span>

                LIGHTING & POWER DISTRIBUTION

            </div>


            <!-- Heading -->

            <h2>
                Efficient Lighting.
                <em>Reliable Power.</em>
                Better Electrical Performance.
            </h2>


            <!-- Main Content -->

            <p>
                At <strong>Wattsin Technologies Private Limited</strong>,
                we provide professional lighting installation and power
                distribution solutions for commercial buildings,
                industrial facilities, offices, warehouses, retail spaces,
                institutions, and infrastructure projects.
            </p>


            <p>
                Our solutions are planned according to the electrical
                requirements, building layout, usage conditions, lighting
                requirements, and power distribution needs of each project.
            </p>


            <p>
                From <strong>indoor and outdoor lighting installation,
                LED lighting, emergency lighting, street lighting,
                distribution networks, and electrical power connections</strong>,
                we focus on creating organized, reliable, and efficient
                electrical systems.
            </p>


            <!-- =================================================
                 OUR APPROACH
            ================================================= -->

            <div class="wt-lighting-approach-title">

                <span></span>

                <h3>
                    Our Approach
                </h3>

            </div>


            <!-- Approach Grid -->

            <div class="wt-lighting-features">


                <!-- Feature 01 -->

                <div class="wt-lighting-feature">

                    <div class="wt-lighting-feature-icon">

                        <i class="fa-solid fa-compass-drafting"></i>

                    </div>

                    <div>

                        <h4>
                            Planned Lighting Design
                        </h4>

                        <p>
                            Lighting requirements are considered based
                            on the application, space, usage, and project
                            requirements.
                        </p>

                    </div>

                </div>


                <!-- Feature 02 -->

                <div class="wt-lighting-feature">

                    <div class="wt-lighting-feature-icon">

                        <i class="fa-solid fa-bolt"></i>

                    </div>

                    <div>

                        <h4>
                            Efficient Power Distribution
                        </h4>

                        <p>
                            Distribution systems are organized to provide
                            reliable power supply across different areas
                            of a facility.
                        </p>

                    </div>

                </div>


                <!-- Feature 03 -->

                <div class="wt-lighting-feature">

                    <div class="wt-lighting-feature-icon">

                        <i class="fa-solid fa-screwdriver-wrench"></i>

                    </div>

                    <div>

                        <h4>
                            Professional Installation
                        </h4>

                        <p>
                            Lighting fixtures, distribution systems,
                            cables, and electrical connections are
                            installed with attention to quality and
                            workmanship.
                        </p>

                    </div>

                </div>


                <!-- Feature 04 -->

                <div class="wt-lighting-feature">

                    <div class="wt-lighting-feature-icon">

                        <i class="fa-solid fa-shield-halved"></i>

                    </div>

                    <div>

                        <h4>
                            Safety & Reliability
                        </h4>

                        <p>
                            Electrical installation is carried out with
                            a strong focus on safe operation, system
                            reliability, and long-term performance.
                        </p>

                    </div>

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

.wt-lighting-intro {

    width: 100%;

    padding: 95px 0;

    background: #ffffff;

    font-family: "Poppins", sans-serif;

}


/* =========================================================
   CONTAINER
========================================================= */

.wt-lighting-container {

    width: min(1200px, 92%);

    margin: auto;

    display: grid;

    grid-template-columns:
        0.92fr 1.08fr;

    gap: 70px;

    align-items: center;

}


/* =========================================================
   IMAGE AREA
========================================================= */

.wt-lighting-image-wrap {

    position: relative;

    padding: 0 20px 20px 0;

}


/* Image */

.wt-lighting-image {

    position: relative;

    width: 100%;

    height: 590px;

    overflow: hidden;

    border-radius: 22px;

    background: #eee;

    box-shadow:
        0 20px 50px rgba(40,30,20,.10);

}


.wt-lighting-image img {

    width: 100%;

    height: 100%;

    display: block;

    object-fit: cover;

    transition:
        transform .7s ease;

}


.wt-lighting-image-wrap:hover
.wt-lighting-image img {

    transform: scale(1.04);

}


/* Image overlay */

.wt-lighting-image-overlay {

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            to top,
            rgba(15,25,32,.42),
            transparent 55%
        );

}


/* =========================================================
   TRUST BADGE
========================================================= */

.wt-lighting-badge {

    position: absolute;

    left: -18px;

    bottom: 48px;

    display: flex;

    align-items: center;

    gap: 13px;

    min-width: 215px;

    padding: 15px 18px;

    background: #ffffff;

    border: 1px solid #eee4da;

    border-radius: 13px;

    box-shadow:
        0 15px 35px rgba(40,30,20,.14);

}


.wt-lighting-badge-icon {

    width: 45px;

    height: 45px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #ffffff;

    background: #f58220;

    border-radius: 11px;

    font-size: 17px;

}


.wt-lighting-badge strong {

    display: block;

    color: #29231e;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 17px;

    font-weight: 600;

}


.wt-lighting-badge span {

    display: block;

    margin-top: 2px;

    color: #77706a;

    font-size: 10px;

}


/* =========================================================
   DECORATIVE ORANGE SHAPE
========================================================= */

.wt-lighting-shape {

    position: absolute;

    right: 0;

    bottom: 0;

    width: 75px;

    height: 75px;

    border-right: 4px solid #f58220;

    border-bottom: 4px solid #f58220;

    border-radius: 0 0 18px 0;

    pointer-events: none;

}


/* =========================================================
   CONTENT
========================================================= */

.wt-lighting-content {

    max-width: 650px;

}


/* Eyebrow */

.wt-lighting-eyebrow {

    display: flex;

    align-items: center;

    gap: 10px;

    margin-bottom: 15px;

    color: #f58220;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 2px;

}


.wt-lighting-eyebrow span {

    width: 35px;

    height: 2px;

    background: #f58220;

}


/* =========================================================
   HEADING
========================================================= */

.wt-lighting-content h2 {

    margin: 0 0 22px;

    color: #29231e;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 43px;

    line-height: 1.13;

    font-weight: 600;

}


.wt-lighting-content h2 em {

    color: #f58220;

    font-style: italic;

    font-weight: 500;

}


/* =========================================================
   PARAGRAPHS
========================================================= */

.wt-lighting-content > p {

    margin: 0 0 14px;

    color: #625c56;

    font-size: 14px;

    line-height: 1.85;

}


.wt-lighting-content > p strong {

    color: #403932;

    font-weight: 600;

}


/* =========================================================
   APPROACH TITLE
========================================================= */

.wt-lighting-approach-title {

    display: flex;

    align-items: center;

    gap: 13px;

    margin-top: 30px;

    margin-bottom: 18px;

}


.wt-lighting-approach-title > span {

    width: 35px;

    height: 2px;

    background: #f58220;

}


.wt-lighting-approach-title h3 {

    margin: 0;

    color: #2c2723;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 25px;

    font-weight: 600;

}


/* =========================================================
   FEATURE GRID
========================================================= */

.wt-lighting-features {

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 14px;

}


/* =========================================================
   FEATURE CARD
========================================================= */

.wt-lighting-feature {

    display: flex;

    align-items: flex-start;

    gap: 12px;

    padding: 17px;

    background: #faf8f5;

    border: 1px solid #ebe2da;

    border-radius: 12px;

    transition:
        transform .3s ease,
        border-color .3s ease,
        box-shadow .3s ease;

}


.wt-lighting-feature:hover {

    transform: translateY(-4px);

    border-color:
        rgba(245,130,32,.4);

    box-shadow:
        0 10px 25px
        rgba(40,30,20,.06);

}


/* Icon */

.wt-lighting-feature-icon {

    width: 42px;

    height: 42px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #f58220;

    background: #fff0e3;

    border-radius: 10px;

    font-size: 15px;

}


/* Feature heading */

.wt-lighting-feature h4 {

    margin: 0 0 5px;

    color: #332d28;

    font-family: "Poppins", sans-serif;

    font-size: 13px;

    line-height: 1.4;

    font-weight: 600;

}


/* Feature text */

.wt-lighting-feature p {

    margin: 0;

    color: #756e68;

    font-size: 11px;

    line-height: 1.65;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1000px) {

    .wt-lighting-intro {

        padding: 75px 0;

    }


    .wt-lighting-container {

        grid-template-columns:
            1fr 1fr;

        gap: 40px;

    }


    .wt-lighting-image {

        height: 540px;

    }


    .wt-lighting-content h2 {

        font-size: 36px;

    }


    .wt-lighting-content > p {

        font-size: 13px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .wt-lighting-intro {

        padding: 60px 0;

    }


    .wt-lighting-container {

        width: 91%;

        display: flex;

        flex-direction: column;

        gap: 45px;

    }


    /* Image */

    .wt-lighting-image-wrap {

        width: 100%;

        padding: 0 10px 15px 0;

    }


    .wt-lighting-image {

        height: 360px;

        border-radius: 17px;

    }


    .wt-lighting-badge {

        left: 5px;

        bottom: 30px;

        min-width: 195px;

        padding: 12px 14px;

    }


    .wt-lighting-badge-icon {

        width: 40px;

        height: 40px;

        font-size: 15px;

    }


    .wt-lighting-badge strong {

        font-size: 15px;

    }


    .wt-lighting-badge span {

        font-size: 9px;

    }


    .wt-lighting-shape {

        width: 55px;

        height: 55px;

    }


    /* Content */

    .wt-lighting-content {

        max-width: 100%;

    }


    .wt-lighting-eyebrow {

        font-size: 9px;

        letter-spacing: 1.5px;

    }


    .wt-lighting-eyebrow span {

        width: 25px;

    }


    .wt-lighting-content h2 {

        font-size: 32px;

        line-height: 1.16;

        margin-bottom: 18px;

    }


    .wt-lighting-content > p {

        font-size: 12px;

        line-height: 1.8;

        margin-bottom: 13px;

    }


    .wt-lighting-approach-title {

        margin-top: 25px;

        margin-bottom: 15px;

    }


    .wt-lighting-approach-title h3 {

        font-size: 22px;

    }


    .wt-lighting-features {

        grid-template-columns: 1fr;

        gap: 10px;

    }


    .wt-lighting-feature {

        padding: 15px;

    }


    .wt-lighting-feature-icon {

        width: 40px;

        height: 40px;

    }


    .wt-lighting-feature h4 {

        font-size: 12px;

    }


    .wt-lighting-feature p {

        font-size: 10.5px;

        line-height: 1.65;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 400px) {

    .wt-lighting-image {

        height: 310px;

    }


    .wt-lighting-content h2 {

        font-size: 28px;

    }


    .wt-lighting-content > p {

        font-size: 11.5px;

    }


    .wt-lighting-badge {

        min-width: 180px;

    }

}

</style>




<style>
/* ==========================================
    COMPLETE LIGHTING & DISTRIBUTION SECTION
   ========================================== */
.wattsin-premium-solutions {
    padding: 80px 0;
    background: linear-gradient(180deg, #FFFFFF 0%, #F8FAFC 100%);
    position: relative;
    text-align: center;
}

.wattsin-premium-solutions .section-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 107, 0, 0.08);
    color: var(--secondary-color, #FF6B00);
    padding: 6px 18px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 16px;
    border: 1px solid rgba(255, 107, 0, 0.2);
}

.wattsin-premium-solutions .main-heading {
    color: var(--heading-color, #0F172A);
    font-weight: 800;
    font-size: 38px;
    line-height: 1.25;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

.wattsin-premium-solutions .main-heading span {
    color: var(--secondary-color, #FF6B00);
}

.wattsin-premium-solutions .sub-heading {
    font-size: 18px;
    font-weight: 600;
    color: var(--primary-color, #0A192F);
    margin-bottom: 12px;
}

.wattsin-premium-solutions .description-text {
    font-size: 15.5px;
    line-height: 1.7;
    color: var(--body-text, #475569);
    max-width: 780px;
    margin: 0 auto 50px auto;
}

/* Service Feature Cards */
.solution-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 16px;
    padding: 32px 24px;
    height: 100%;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 20px rgba(10, 25, 47, 0.03);
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.solution-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 3px;
    background: var(--secondary-color, #FF6B00);
    transition: width 0.35s ease;
}

.solution-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 35px rgba(10, 25, 47, 0.08);
    border-color: rgba(255, 107, 0, 0.3);
}

.solution-card:hover::after {
    width: 100%;
}

.solution-icon-box {
    width: 68px;
    height: 68px;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(255, 107, 0, 0.1) 0%, rgba(255, 107, 0, 0.02) 100%);
    border: 1px solid rgba(255, 107, 0, 0.15);
    color: var(--secondary-color, #FF6B00);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    margin-bottom: 22px;
    transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.solution-card:hover .solution-icon-box {
    background: linear-gradient(135deg, var(--secondary-color, #FF6B00) 0%, #FF852D 100%);
    color: #FFFFFF;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 8px 20px rgba(255, 107, 0, 0.3);
}

.solution-card h3 {
    font-size: 19px;
    font-weight: 700;
    color: var(--heading-color, #0F172A);
    margin-bottom: 12px;
}

.solution-card p {
    font-size: 14px;
    line-height: 1.6;
    color: var(--body-text, #475569);
    margin: 0;
}

/* Suitable For Badge Grid */
.suitable-wrapper {
    margin-top: 60px;
    padding: 40px 24px;
    background: #FFFFFF;
    border-radius: 20px;
    border: 1px solid #E2E8F0;
    box-shadow: 0 10px 30px rgba(10, 25, 47, 0.04);
}

.suitable-title {
    font-size: 22px;
    font-weight: 700;
    color: var(--heading-color, #0F172A);
    margin-bottom: 28px;
}

.suitable-title span {
    color: var(--secondary-color, #FF6B00);
}

.suitable-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
}

.suitable-pill {
    background: #F8FAFC;
    border: 1px solid #E2E8F0;
    color: var(--primary-color, #0A192F);
    padding: 10px 20px;
    border-radius: 50px;
    font-size: 13.5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
}

.suitable-pill i {
    color: var(--secondary-color, #FF6B00);
    font-size: 14px;
    transition: transform 0.3s ease;
}

.suitable-pill:hover {
    background: var(--primary-color, #0A192F);
    color: #FFFFFF;
    border-color: var(--primary-color, #0A192F);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(10, 25, 47, 0.12);
}

.suitable-pill:hover i {
    transform: scale(1.2);
    color: var(--secondary-color, #FF6B00);
}

/* Mobile Responsiveness */
@media (max-width: 767.98px) {
    .wattsin-premium-solutions {
        padding: 50px 0;
    }
    .wattsin-premium-solutions .main-heading {
        font-size: 26px;
    }
    .wattsin-premium-solutions .sub-heading {
        font-size: 16px;
    }
    .wattsin-premium-solutions .description-text {
        font-size: 14px;
        margin-bottom: 35px;
    }
    .solution-card {
        padding: 24px 18px;
    }
    .solution-icon-box {
        width: 58px;
        height: 58px;
        font-size: 22px;
        margin-bottom: 16px;
    }
    .solution-card h3 {
        font-size: 17px;
    }
    .suitable-wrapper {
        padding: 28px 16px;
        margin-top: 40px;
    }
    .suitable-title {
        font-size: 19px;
        margin-bottom: 20px;
    }
    .suitable-pill {
        font-size: 12.5px;
        padding: 8px 16px;
    }
}
</style>

<!-- SECTION CONTENT -->
<section class="wattsin-premium-solutions">
    <div class="container">
        
        <!-- Header -->
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="section-tag">
                    <i class="fa-solid fa-lightbulb"></i> Tailored Installations
                </div>
                <h2 class="main-heading">
                    Complete Lighting & <span>Power Distribution</span> Solutions
                </h2>
                <h3 class="sub-heading">Lighting and Electrical Distribution Designed Around Your Facility</h3>
                <p class="description-text">
                    Every commercial and industrial facility has different lighting and electrical requirements. Wattsin Technologies provides a range of solutions to support different project environments and operational needs.
                </p>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="row g-4 justify-content-center">
            
            <!-- Item 1 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="solution-card">
                    <div class="solution-icon-box">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h3>LED Lighting Installation</h3>
                    <p>Energy-efficient LED lighting solutions for offices, commercial buildings, industrial facilities, warehouses, showrooms, and other spaces.</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="solution-card">
                    <div class="solution-icon-box">
                        <i class="fa-solid fa-building-user"></i>
                    </div>
                    <h3>Indoor Lighting Installation</h3>
                    <p>Professional installation of lighting systems for offices, workspaces, commercial buildings, institutions, and indoor environments.</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="solution-card">
                    <div class="solution-icon-box">
                        <i class="fa-solid fa-road-spikes"></i>
                    </div>
                    <h3>Outdoor & Street Lighting</h3>
                    <p>Lighting installation for external areas, access roads, parking areas, industrial premises, commercial properties, and site surroundings.</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="solution-card">
                    <div class="solution-icon-box">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h3>Emergency Lighting</h3>
                    <p>Emergency lighting solutions designed to provide essential illumination during power interruptions and emergency situations.</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="solution-card">
                    <div class="solution-icon-box">
                        <i class="fa-solid fa-diagram-project"></i>
                    </div>
                    <h3>Power Distribution Networks</h3>
                    <p>Organized electrical distribution systems for delivering power across different sections of commercial and industrial facilities.</p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="solution-card">
                    <div class="solution-icon-box">
                        <i class="fa-solid fa-plug-circle-check"></i>
                    </div>
                    <h3>Lighting & Power Connections</h3>
                    <p>Professional electrical connections for lighting circuits, distribution boards, equipment, and other project requirements.</p>
                </div>
            </div>

        </div>

        <!-- Suitable For Section -->
       

    </div>
</section>



<!-- =========================================================
     PLANNED EXECUTION FOR SAFE & EFFICIENT POWER DISTRIBUTION
========================================================= -->

<section class="wt-power-process">

    <div class="wt-power-container">

        <!-- =================================================
             LEFT SIDE - CONTENT
        ================================================= -->

        <div class="wt-power-content">

            <!-- Eyebrow -->

            <div class="wt-power-eyebrow">

                <span></span>

                OUR WORK PROCESS

            </div>


            <!-- Main Heading -->

            <h2>
                Planned Execution for
                <em>Safe & Efficient</em>
                Power Distribution
            </h2>


            <h3 class="wt-power-subtitle">
                From Electrical Planning to Reliable
                Lighting & Power
            </h3>


            <!-- Introduction -->

            <p>
                Effective lighting and power distribution requires
                more than simply installing lights and connecting
                electrical cables. Proper planning, cable routing,
                distribution, installation, inspection, and testing
                help create a dependable electrical system.
            </p>

            <p>
                At <strong>Wattsin Technologies</strong>, we follow
                a structured approach to coordinate lighting and
                power distribution work with the overall electrical
                requirements of the project.
            </p>


            <!-- Process Heading -->

            <div class="wt-power-process-title">

                <i class="fa-solid fa-list-check"></i>

                <span>
                    How We Execute Lighting & Power Distribution
                </span>

            </div>


            <!-- =================================================
                 PROCESS STEPS
            ================================================= -->

            <div class="wt-power-steps">


                <!-- STEP 01 -->

                <div class="wt-power-step">

                    <div class="wt-power-step-number">
                        01
                    </div>

                    <div class="wt-power-step-content">

                        <h4>
                            Site Assessment
                        </h4>

                        <p>
                            We understand the building layout,
                            electrical requirements, lighting areas,
                            equipment needs, and site conditions.
                        </p>

                    </div>

                </div>


                <!-- STEP 02 -->

                <div class="wt-power-step">

                    <div class="wt-power-step-number">
                        02
                    </div>

                    <div class="wt-power-step-content">

                        <h4>
                            Electrical Planning
                        </h4>

                        <p>
                            Lighting points, power distribution
                            requirements, circuits, cable routes,
                            and distribution arrangements are
                            planned according to the project.
                        </p>

                    </div>

                </div>


                <!-- STEP 03 -->

                <div class="wt-power-step">

                    <div class="wt-power-step-number">
                        03
                    </div>

                    <div class="wt-power-step-content">

                        <h4>
                            Material & Equipment Selection
                        </h4>

                        <p>
                            Suitable lighting fixtures, cables,
                            distribution components, accessories,
                            and installation materials are selected
                            based on project requirements.
                        </p>

                    </div>

                </div>


                <!-- STEP 04 -->

                <div class="wt-power-step">

                    <div class="wt-power-step-number">
                        04
                    </div>

                    <div class="wt-power-step-content">

                        <h4>
                            Cable Routing & Distribution
                        </h4>

                        <p>
                            Electrical cables are routed and connected
                            through planned pathways to maintain
                            organized and accessible electrical
                            infrastructure.
                        </p>

                    </div>

                </div>


                <!-- STEP 05 -->

                <div class="wt-power-step">

                    <div class="wt-power-step-number">
                        05
                    </div>

                    <div class="wt-power-step-content">

                        <h4>
                            Lighting & Power Installation
                        </h4>

                        <p>
                            Indoor lighting, outdoor lighting,
                            emergency lighting, distribution boards,
                            and power connections are professionally
                            installed.
                        </p>

                    </div>

                </div>


                <!-- STEP 06 -->

                <div class="wt-power-step">

                    <div class="wt-power-step-number">
                        06
                    </div>

                    <div class="wt-power-step-content">

                        <h4>
                            Testing & Inspection
                        </h4>

                        <p>
                            Electrical connections, lighting circuits,
                            distribution systems, and installed
                            equipment are inspected and tested
                            before operation.
                        </p>

                    </div>

                </div>


                <!-- STEP 07 -->

                <div class="wt-power-step">

                    <div class="wt-power-step-number">
                        07
                    </div>

                    <div class="wt-power-step-content">

                        <h4>
                            Commissioning & Handover
                        </h4>

                        <p>
                            The completed system is checked for
                            proper operation and prepared for
                            reliable day-to-day use.
                        </p>

                    </div>

                </div>


            </div>

        </div>


        <!-- =================================================
             RIGHT SIDE - TWO IMAGES
        ================================================= -->

        <div class="wt-power-images">

            <!-- Decorative Background -->

            <div class="wt-power-image-pattern"></div>


            <!-- IMAGE 01 -->

            <div class="wt-power-image-card wt-power-image-one">

                <img
                    src="assets/images/electrical-planning.jpg"
                    alt="Electrical planning and power distribution engineering"
                    loading="lazy"
                >

                <div class="wt-power-image-overlay"></div>

                <div class="wt-power-image-caption">

                    <i class="fa-solid fa-compass-drafting"></i>

                    <div>

                        <strong>
                            Electrical Planning
                        </strong>

                        <span>
                            Structured Project Execution
                        </span>

                    </div>

                </div>

            </div>


            <!-- IMAGE 02 -->

            <div class="wt-power-image-card wt-power-image-two">

                <img
                    src="assets/images/lighting-installation.jpg"
                    alt="Professional lighting and power installation"
                    loading="lazy"
                >

                <div class="wt-power-image-overlay"></div>

                <div class="wt-power-image-caption">

                    <i class="fa-solid fa-lightbulb"></i>

                    <div>

                        <strong>
                            Lighting & Power
                        </strong>

                        <span>
                            Professional Installation
                        </span>

                    </div>

                </div>

            </div>


            <!-- Floating Trust Card -->

            <div class="wt-power-trust-card">

                <div class="wt-power-trust-icon">

                    <i class="fa-solid fa-shield-halved"></i>

                </div>

                <div>

                    <strong>
                        Safety First
                    </strong>

                    <span>
                        Quality • Reliability
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

.wt-power-process {

    width: 100%;

    padding: 100px 0;

    background: #ffffff;

    font-family: "Poppins", sans-serif;

}


/* =========================================================
   CONTAINER
========================================================= */

.wt-power-container {

    width: min(1200px, 92%);

    margin: auto;

    display: grid;

    grid-template-columns:
        1.05fr .95fr;

    gap: 70px;

    align-items: start;

}


/* =========================================================
   LEFT CONTENT
========================================================= */

.wt-power-content {

    max-width: 680px;

}


/* =========================================================
   EYEBROW
========================================================= */

.wt-power-eyebrow {

    display: flex;

    align-items: center;

    gap: 10px;

    margin-bottom: 15px;

    color: #f58220;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 2px;

}


.wt-power-eyebrow span {

    width: 34px;

    height: 2px;

    background: #f58220;

}


/* =========================================================
   MAIN HEADING
========================================================= */

.wt-power-content > h2 {

    margin: 0 0 16px;

    color: #2b2622;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 42px;

    line-height: 1.14;

    font-weight: 600;

}


.wt-power-content > h2 em {

    color: #f58220;

    font-style: italic;

    font-weight: 500;

}


/* =========================================================
   SUBTITLE
========================================================= */

.wt-power-subtitle {

    margin: 0 0 22px;

    color: #514a44;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 22px;

    line-height: 1.4;

    font-weight: 500;

}


/* =========================================================
   INTRO PARAGRAPHS
========================================================= */

.wt-power-content > p {

    margin: 0 0 14px;

    color: #655f59;

    font-size: 13px;

    line-height: 1.85;

}


.wt-power-content > p strong {

    color: #332d28;

    font-weight: 600;

}


/* =========================================================
   PROCESS TITLE
========================================================= */

.wt-power-process-title {

    display: flex;

    align-items: center;

    gap: 11px;

    margin: 30px 0 20px;

    padding-bottom: 12px;

    border-bottom: 1px solid #eee5dd;

    color: #302a25;

    font-size: 15px;

    font-weight: 600;

}


.wt-power-process-title i {

    color: #f58220;

    font-size: 17px;

}


/* =========================================================
   PROCESS STEPS
========================================================= */

.wt-power-steps {

    position: relative;

}


/* Vertical timeline */

.wt-power-steps::before {

    content: "";

    position: absolute;

    top: 12px;

    bottom: 12px;

    left: 18px;

    width: 1px;

    background: #e7ddd4;

}


/* =========================================================
   STEP
========================================================= */

.wt-power-step {

    position: relative;

    display: flex;

    gap: 17px;

    padding: 0 0 22px;

}


.wt-power-step:last-child {

    padding-bottom: 0;

}


/* =========================================================
   NUMBER
========================================================= */

.wt-power-step-number {

    position: relative;

    z-index: 2;

    width: 37px;

    height: 37px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #f58220;

    background: #fff3e8;

    border: 1px solid #f8d5b7;

    border-radius: 50%;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 12px;

    font-weight: 600;

}


/* =========================================================
   STEP CONTENT
========================================================= */

.wt-power-step-content {

    padding-top: 1px;

}


.wt-power-step-content h4 {

    margin: 0 0 5px;

    color: #332d28;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 18px;

    line-height: 1.35;

    font-weight: 600;

}


.wt-power-step-content p {

    margin: 0;

    color: #716a64;

    font-size: 11.5px;

    line-height: 1.7;

}


/* =========================================================
   RIGHT IMAGE AREA
========================================================= */

.wt-power-images {

    position: sticky;

    top: 100px;

    min-height: 720px;

    padding: 20px;

}


/* =========================================================
   DECORATIVE PATTERN
========================================================= */

.wt-power-image-pattern {

    position: absolute;

    top: 0;

    right: 0;

    width: 180px;

    height: 180px;

    background:
        radial-gradient(
            #f58220 1.5px,
            transparent 1.5px
        );

    background-size: 14px 14px;

    opacity: .18;

    border-radius: 20px;

}


/* =========================================================
   IMAGE CARDS
========================================================= */

.wt-power-image-card {

    position: absolute;

    overflow: hidden;

    background: #eee;

    border: 7px solid #ffffff;

    border-radius: 20px;

    box-shadow:
        0 20px 50px
        rgba(40,30,20,.15);

}


.wt-power-image-card img {

    width: 100%;

    height: 100%;

    display: block;

    object-fit: cover;

    transition:
        transform .6s ease;

}


.wt-power-image-card:hover img {

    transform: scale(1.05);

}


/* =========================================================
   IMAGE 01
========================================================= */

.wt-power-image-one {

    top: 35px;

    left: 10px;

    width: 72%;

    height: 350px;

    transform: rotate(-2deg);

    z-index: 2;

}


/* =========================================================
   IMAGE 02
========================================================= */

.wt-power-image-two {

    right: 0;

    bottom: 85px;

    width: 68%;

    height: 330px;

    transform: rotate(3deg);

    z-index: 3;

}


/* =========================================================
   IMAGE OVERLAY
========================================================= */

.wt-power-image-overlay {

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            to top,
            rgba(15,22,27,.62),
            transparent 55%
        );

}


/* =========================================================
   IMAGE CAPTION
========================================================= */

.wt-power-image-caption {

    position: absolute;

    left: 18px;

    right: 18px;

    bottom: 17px;

    display: flex;

    align-items: center;

    gap: 10px;

    color: #ffffff;

}


.wt-power-image-caption > i {

    width: 38px;

    height: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-shrink: 0;

    color: #ffffff;

    background: #f58220;

    border-radius: 9px;

    font-size: 13px;

}


.wt-power-image-caption strong {

    display: block;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 16px;

    font-weight: 600;

}


.wt-power-image-caption span {

    display: block;

    margin-top: 2px;

    color: rgba(255,255,255,.75);

    font-size: 9px;

}


/* =========================================================
   TRUST CARD
========================================================= */

.wt-power-trust-card {

    position: absolute;

    left: 0;

    bottom: 25px;

    z-index: 5;

    display: flex;

    align-items: center;

    gap: 11px;

    padding: 13px 17px;

    background: #ffffff;

    border: 1px solid #e8ded5;

    border-radius: 12px;

    box-shadow:
        0 15px 35px
        rgba(40,30,20,.12);

}


.wt-power-trust-icon {

    width: 40px;

    height: 40px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #ffffff;

    background: #f58220;

    border-radius: 9px;

    font-size: 14px;

}


.wt-power-trust-card strong {

    display: block;

    color: #302a25;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 15px;

}


.wt-power-trust-card span {

    display: block;

    margin-top: 2px;

    color: #77706a;

    font-size: 9px;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1000px) {

    .wt-power-process {

        padding: 75px 0;

    }


    .wt-power-container {

        grid-template-columns:
            1fr 1fr;

        gap: 40px;

    }


    .wt-power-content > h2 {

        font-size: 35px;

    }


    .wt-power-subtitle {

        font-size: 20px;

    }


    .wt-power-images {

        min-height: 650px;

    }


    .wt-power-image-one {

        height: 300px;

    }


    .wt-power-image-two {

        height: 285px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .wt-power-process {

        padding: 60px 0;

    }


    .wt-power-container {

        width: 91%;

        display: flex;

        flex-direction: column;

        gap: 45px;

    }


    .wt-power-content {

        max-width: 100%;

    }


    .wt-power-eyebrow {

        font-size: 9px;

        letter-spacing: 1.5px;

    }


    .wt-power-eyebrow span {

        width: 24px;

    }


    .wt-power-content > h2 {

        font-size: 31px;

        line-height: 1.16;

    }


    .wt-power-subtitle {

        font-size: 19px;

        margin-bottom: 18px;

    }


    .wt-power-content > p {

        font-size: 12px;

        line-height: 1.8;

    }


    .wt-power-process-title {

        margin-top: 25px;

        font-size: 13px;

    }


    .wt-power-step {

        gap: 13px;

        padding-bottom: 20px;

    }


    .wt-power-step-number {

        width: 34px;

        height: 34px;

        font-size: 11px;

    }


    .wt-power-steps::before {

        left: 16.5px;

    }


    .wt-power-step-content h4 {

        font-size: 17px;

    }


    .wt-power-step-content p {

        font-size: 10.5px;

        line-height: 1.7;

    }


    /* =================================================
       MOBILE IMAGE AREA
    ================================================= */

    .wt-power-images {

        position: relative;

        top: auto;

        width: 100%;

        min-height: 570px;

        padding: 10px;

    }


    .wt-power-image-pattern {

        width: 120px;

        height: 120px;

        right: 0;

    }


    .wt-power-image-one {

        top: 20px;

        left: 8px;

        width: 76%;

        height: 280px;

        transform: rotate(-2deg);

    }


    .wt-power-image-two {

        right: 5px;

        bottom: 70px;

        width: 72%;

        height: 260px;

        transform: rotate(3deg);

    }


    .wt-power-image-caption {

        left: 13px;

        right: 13px;

        bottom: 13px;

    }


    .wt-power-image-caption > i {

        width: 34px;

        height: 34px;

        font-size: 11px;

    }


    .wt-power-image-caption strong {

        font-size: 14px;

    }


    .wt-power-image-caption span {

        font-size: 8px;

    }


    .wt-power-trust-card {

        left: 0;

        bottom: 10px;

        padding: 10px 13px;

    }


    .wt-power-trust-icon {

        width: 35px;

        height: 35px;

        font-size: 12px;

    }


    .wt-power-trust-card strong {

        font-size: 13px;

    }


    .wt-power-trust-card span {

        font-size: 8px;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 400px) {

    .wt-power-content > h2 {

        font-size: 28px;

    }


    .wt-power-subtitle {

        font-size: 17px;

    }


    .wt-power-content > p {

        font-size: 11.5px;

    }


    .wt-power-step-content h4 {

        font-size: 16px;

    }


    .wt-power-step-content p {

        font-size: 10px;

    }


    .wt-power-images {

        min-height: 500px;

    }


    .wt-power-image-one {

        height: 240px;

    }


    .wt-power-image-two {

        height: 220px;

    }

}

</style>
<?php include "includes/footer.php"; ?>