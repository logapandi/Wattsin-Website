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
            <a href="index.html">
                <i class="fa-solid fa-house"></i> Home
            </a>

            <span class="separator">
                <i class="fa-solid fa-chevron-right"></i>
            </span>

            <a href="services.php">Services</a>

            <span class="separator">
                <i class="fa-solid fa-chevron-right"></i>
            </span>

            <span class="current">
                Industrial &amp; Factory Electrical Installations
            </span>
        </nav>

        <div class="hero-title-area">

            <div class="service-badge">
                <i class="fa-solid fa-industry"></i>
                Industrial Electrical Engineering
            </div>

            <h1>
                Industrial &amp; Factory
                <span>Electrical Installations</span>
            </h1>

            <p>
                Deliver safe, reliable, and high-performance electrical infrastructure
                for factories, manufacturing plants, warehouses, and production
                facilities with efficient power distribution and professional execution.
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

<!----############## About Section #################------->
<!-- =========================================================
     WATTSIN TECHNOLOGIES - ABOUT / INTRO SECTION
========================================================= -->

<section class="wattsin-about-section">
    <div class="container-fluid wattsin-about-container">

        <div class="row align-items-center g-4 g-xl-5">

            <!-- ================= LEFT VISUAL AREA ================= -->
            <div class="col-lg-6">

                <div class="wattsin-visual-grid">

                    <!-- Top Left Experience Card -->
                    <div class="experience-card">

                        <div class="experience-icon">
                            <i class="fa-solid fa-bolt"></i>
                        </div>

                        <h3>Since 2019</h3>

                        <p>
                            Electrical engineering expertise built through
                            years of commercial and industrial project execution.
                        </p>

                    </div>


                    <!-- Top Right Small Image -->
                    <div class="small-image-card">

                        <img
                            src="assets/images/Electrical Renovation & Upgradation.webp"
                            alt="Electrical Engineer Working on Commercial Project"
                            loading="lazy"
                        >

                        <div class="image-play-icon">
                            <i class="fa-solid fa-play"></i>
                        </div>

                    </div>


                    <!-- Bottom Large Image -->
                    <div class="large-image-card">

                        <img
                            src="assets/images/bg-service-01.webp"
                            alt="Commercial and Industrial Electrical Installation"
                            loading="lazy"
                        >

                        <div class="large-image-overlay"></div>

                        <div class="image-caption">
                            <span>
                                <i class="fa-solid fa-industry"></i>
                                Electrical Engineering & Installation
                            </span>
                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= RIGHT CONTENT AREA ================= -->
            <div class="col-lg-6">

                <div class="wattsin-about-content">

                    <!-- Small Label -->
                    <div class="section-label">

                        <span class="label-dot"></span>

                        <span>ABOUT WATTSIN TECHNOLOGIES</span>

                    </div>


                    <!-- Main Heading -->
                    <h2>
                        Powering Businesses
                        <span>With Reliable Electrical Solutions</span>
                    </h2>


                    <!-- Description -->
                    <p class="about-description">

                        Wattsin Technologies Private Limited delivers
                        professional electrical engineering and installation
                        solutions for commercial, industrial, and infrastructure
                        projects. From electrical planning and power distribution
                        to installation, testing, commissioning, and maintenance,
                        we provide complete solutions built around safety,
                        quality, and reliable performance.

                    </p>


                    <!-- Feature Columns -->
                    <div class="about-features">

                        <!-- Feature 01 -->
                        <div class="about-feature">

                            <div class="feature-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>

                            <div>

                                <h3>
                                    Safety-First Execution
                                </h3>

                                <p>
                                    Every project is planned and executed with
                                    strong attention to electrical safety,
                                    quality standards, and site requirements.
                                </p>

                            </div>

                        </div>


                        <!-- Divider -->
                        <div class="feature-divider"></div>


                        <!-- Feature 02 -->
                        <div class="about-feature">

                            <div class="feature-icon">
                                <i class="fa-solid fa-gears"></i>
                            </div>

                            <div>

                                <h3>
                                    Complete Project Support
                                </h3>

                                <p>
                                    From initial planning and installation to
                                    testing, commissioning, maintenance, and
                                    electrical upgrades, our team supports
                                    every stage.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Bottom CTA -->
                    <div class="about-bottom">

                        <a href="about.php" class="about-btn">
                            Explore Our Company
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="contact.php" class="about-contact-link">

                            <span class="contact-icon">
                                <i class="fa-solid fa-phone"></i>
                            </span>

                            <span>
                                <small>Discuss Your Project</small>
                                <strong>Contact Our Team</strong>
                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- =========================================================
     CSS
========================================================= -->

<style>

.wattsin-about-section {
    position: relative;
    padding: 100px 0;
    background: #ffffff;
    overflow: hidden;
}

.wattsin-about-container {
    width: min(1500px, 92%);
    margin: auto;
}


/* ================= LEFT VISUAL GRID ================= */

.wattsin-visual-grid {
    display: grid;
    grid-template-columns: 1.35fr .75fr;
    grid-template-rows: 300px 315px;
    gap: 38px;
}


/* Experience Card */

.experience-card {
    border: 1px solid #e7e7e7;
    border-radius: 34px;
    padding: 40px 38px;
    background: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: .4s ease;
}

.experience-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0,0,0,.08);
}

.experience-icon {
    width: 58px;
    height: 58px;
    border: 2px solid #173b57;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f58220;
    font-size: 24px;
    margin-bottom: 30px;
}

.experience-card h3 {
    margin: 0 0 12px;
    font-size: 27px;
    font-weight: 600;
    color: #151515;
}

.experience-card p {
    margin: 0;
    max-width: 330px;
    color: #737373;
    font-size: 17px;
    line-height: 1.7;
}


/* ================= SMALL IMAGE ================= */

.small-image-card {
    position: relative;
    overflow: hidden;
    border-radius: 30px;
    min-height: 300px;
}

.small-image-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .7s ease;
}

.small-image-card:hover img {
    transform: scale(1.06);
}

.image-play-icon {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 66px;
    height: 66px;
    border-radius: 50%;
    background: #173b57;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    box-shadow: 0 10px 30px rgba(0,0,0,.25);
}


/* ================= LARGE IMAGE ================= */

.large-image-card {
    position: relative;
    overflow: hidden;
    border-radius: 34px;
    grid-column: 1 / 3;
}

.large-image-card img {
    width: 100%;
    height: 100%;
    min-height: 315px;
    object-fit: cover;
    display: block;
    transition: transform .8s ease;
}

.large-image-card:hover img {
    transform: scale(1.04);
}

.large-image-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(0,0,0,.55),
        transparent 55%
    );
}

.image-caption {
    position: absolute;
    left: 30px;
    bottom: 25px;
    color: #fff;
    font-size: 15px;
    font-weight: 500;
}

.image-caption i {
    color: #f58220;
    margin-right: 8px;
}


/* ================= RIGHT CONTENT ================= */

.wattsin-about-content {
    padding-left: 30px;
}

.section-label {
    display: flex;
    align-items: center;
    gap: 11px;
    margin-bottom: 20px;
    color: #173b57;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1.5px;
}

.label-dot {
    width: 10px;
    height: 10px;
    background: #f58220;
    border-radius: 50%;
    display: inline-block;
}


/* Heading */

.wattsin-about-content h2 {
    margin: 0;
    max-width: 720px;
    color: #111111;
    font-size: clamp(42px, 4vw, 68px);
    line-height: 1.05;
    font-weight: 600;
    letter-spacing: -2px;
}

.wattsin-about-content h2 span {
    display: block;
    color: #f58220;
}


/* Description */

.about-description {
    max-width: 720px;
    margin: 30px 0 40px;
    color: #6e6e6e;
    font-size: 18px;
    line-height: 1.8;
}


/* ================= FEATURES ================= */

.about-features {
    display: grid;
    grid-template-columns: 1fr 1px 1fr;
    gap: 28px;
    margin-bottom: 42px;
}

.about-feature {
    display: flex;
    gap: 20px;
}

.feature-icon {
    flex-shrink: 0;
    width: 58px;
    height: 58px;
    border: 1.5px solid #173b57;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f58220;
    font-size: 21px;
}

.about-feature h3 {
    margin: 0 0 10px;
    color: #171717;
    font-size: 21px;
    font-weight: 600;
}

.about-feature p {
    margin: 0;
    color: #737373;
    font-size: 15px;
    line-height: 1.7;
}

.feature-divider {
    width: 1px;
    height: 100%;
    background: #e3e3e3;
}


/* ================= CTA ================= */

.about-bottom {
    display: flex;
    align-items: center;
    gap: 30px;
    flex-wrap: wrap;
}

.about-btn {
    display: inline-flex;
    align-items: center;
    gap: 18px;
    padding: 16px 25px;
    background: #f58220;
    color: #fff;
    border-radius: 14px;
    text-decoration: none;
    font-weight: 600;
    transition: .35s ease;
}

.about-btn:hover {
    background: #173b57;
    color: #fff;
    transform: translateY(-3px);
}

.about-btn i {
    transition: .3s ease;
}

.about-btn:hover i {
    transform: translateX(5px);
}


.about-contact-link {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    color: #222;
}

.contact-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #173b57;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
}

.about-contact-link small {
    display: block;
    color: #888;
    font-size: 12px;
    margin-bottom: 3px;
}

.about-contact-link strong {
    display: block;
    color: #222;
    font-size: 15px;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1199px) {

    .wattsin-about-section {
        padding: 80px 0;
    }

    .wattsin-about-content {
        padding-left: 0;
    }

    .wattsin-about-content h2 {
        font-size: 48px;
    }

    .wattsin-visual-grid {
        grid-template-rows: 270px 280px;
        gap: 25px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 991px) {

    .wattsin-about-section {
        padding: 65px 0;
    }

    .wattsin-about-container {
        width: 92%;
    }

    .wattsin-visual-grid {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 240px 280px;
        gap: 18px;
    }

    .experience-card {
        padding: 25px;
        border-radius: 25px;
    }

    .experience-icon {
        width: 48px;
        height: 48px;
        font-size: 19px;
        margin-bottom: 18px;
    }

    .experience-card h3 {
        font-size: 21px;
    }

    .experience-card p {
        font-size: 14px;
        line-height: 1.5;
    }

    .small-image-card {
        min-height: 240px;
        border-radius: 25px;
    }

    .large-image-card {
        border-radius: 25px;
    }

    .large-image-card img {
        min-height: 280px;
    }

    .wattsin-about-content {
        padding-top: 20px;
    }

    .wattsin-about-content h2 {
        font-size: 43px;
        letter-spacing: -1.5px;
    }

    .about-description {
        font-size: 16px;
        margin: 22px 0 30px;
    }

    .about-features {
        gap: 20px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 575px) {

    .wattsin-about-section {
        padding: 50px 0;
    }

    .wattsin-visual-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 210px 220px;
        gap: 12px;
    }

    .experience-card {
        padding: 18px;
        border-radius: 20px;
    }

    .experience-icon {
        width: 42px;
        height: 42px;
        font-size: 16px;
        margin-bottom: 13px;
    }

    .experience-card h3 {
        font-size: 18px;
    }

    .experience-card p {
        font-size: 12px;
        line-height: 1.45;
    }

    .small-image-card {
        min-height: 210px;
        border-radius: 20px;
    }

    .image-play-icon {
        width: 48px;
        height: 48px;
        font-size: 14px;
    }

    .large-image-card {
        border-radius: 20px;
    }

    .large-image-card img {
        min-height: 220px;
    }

    .image-caption {
        left: 15px;
        bottom: 15px;
        font-size: 11px;
    }

    .section-label {
        font-size: 11px;
        letter-spacing: 1px;
    }

    .wattsin-about-content h2 {
        font-size: 34px;
        line-height: 1.1;
    }

    .about-description {
        font-size: 14px;
        line-height: 1.7;
    }

    .about-features {
        display: block;
    }

    .about-feature {
        margin-bottom: 25px;
    }

    .feature-divider {
        display: none;
    }

    .about-feature h3 {
        font-size: 18px;
    }

    .about-feature p {
        font-size: 13px;
    }

    .about-bottom {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }

    .about-btn {
        width: 100%;
        justify-content: center;
    }

}

</style>





<!---############### Over view ################## ---->
<section class="industrial-solutions-section" id="industrial-solutions">
    <div class="industrial-container">
        
        <!-- Section Header Content -->
        <div class="industrial-header">
            <span class="section-tag">
                <i class="fa-solid fa-industry"></i> Industrial Electrical Expertise
            </span>
            <h2>Heavy-Duty Electrical Systems Built for Industrial Performance</h2>
            <h3 class="italic-subtitle">Reliable Power Infrastructure for High-Demand Manufacturing & Industrial Facilities</h3>
            <p>Wattsin Technologies Private Limited provides professional industrial electrical installation services for factories, manufacturing units, warehouses, production facilities, and industrial buildings.</p>
            <p>We design and execute reliable electrical systems for high-demand industrial environments, covering LT & HT electrical installations, machine power supply, industrial cabling, electrical panels, cable tray systems, power distribution, earthing, testing, commissioning, and maintenance.</p>
            <p>Our team focuses on safe installation, organized electrical infrastructure, efficient power distribution, and dependable performance to support continuous industrial operations.</p>
        </div>

        <!-- Section Subtitle Heading (Italic Orange) -->
        <div class="industrial-grid-title-wrapper">
            <h3 class="grid-orange-italic-heading">Our Industrial Electrical Solutions</h3>
        </div>

        <!-- Industrial Solutions Grid -->
        <div class="industrial-services-grid">
            
            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-bolt-lightning"></i></div>
                <h4>Machine Power Supply</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-plug-circle-bolt"></i></div>
                <h4>LT Electrical Installation</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-tower-cell"></i></div>
                <h4>HT Electrical Installation</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-network-wired"></i></div>
                <h4>Industrial Electrical Wiring</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-arrows-split-up-and-left"></i></div>
                <h4>Heavy-Duty Cable Laying</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-server"></i></div>
                <h4>Electrical Panel Installation</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-boxes-packing"></i></div>
                <h4>MCC & Distribution Panels</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-layer-group"></i></div>
                <h4>Cable Tray Installation</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-bolt"></i></div>
                <h4>Power Distribution Systems</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h4>Earthing & Lightning Protection</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-link"></i></div>
                <h4>Cable Termination</h4>
            </div>

            <div class="industrial-service-card">
                <div class="service-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                <h4>Testing & Commissioning</h4>
            </div>

            <div class="industrial-service-card card-full-span">
                <div class="service-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <h4>Electrical Maintenance & Upgradation</h4>
            </div>

        </div>

    </div>
</section>

<style>
    /* --- Industrial Solutions Section Styles --- */
    .industrial-solutions-section {
        position: relative;
        padding: 40px 20px;
        background: #ffffff;
        color: #0f172a;
        width: 100%;
        box-sizing: border-box;
    }

    .industrial-container {
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
    }

    /* Section Header */
    .industrial-header {
        text-align: center;
        max-width: 900px;
        margin: 0 auto 50px auto;
    }

    .industrial-header span.section-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 18px;
        background: rgba(245, 130, 32, 0.1);
        border: 1px solid #f58220;
        color: #f58220;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    .industrial-header h2 {
        font-size: clamp(28px, 4vw, 42px);
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .industrial-header h3.italic-subtitle {
        font-size: clamp(18px, 2.5vw, 22px);
        font-weight: 500;
        font-style: italic;
        color: #f58220;
        margin-bottom: 25px;
        line-height: 1.4;
    }

    .industrial-header p {
        font-size: 15.5px;
        color: #475569;
        margin-bottom: 16px;
        line-height: 1.7;
        text-align: justify;
    }

    /* Italic Orange Grid Section Heading */
    .industrial-grid-title-wrapper {
        text-align: center;
        margin-bottom: 35px;
    }

    .grid-orange-italic-heading {
        font-size: clamp(22px, 3vw, 28px);
        font-weight: 700;
        font-style: italic;
        color: #f58220;
        letter-spacing: 0.5px;
    }

    /* Industrial Services Grid */
    .industrial-services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 25px;
    }

    .industrial-service-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 30px 25px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        gap: 15px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    }

    .industrial-service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 0;
        background: #f58220;
        transition: height 0.3s ease;
    }

    .industrial-service-card:hover {
        background: #ffffff;
        border-color: #f58220;
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(245, 130, 32, 0.12);
    }

    .industrial-service-card:hover::before {
        height: 100%;
    }

    .industrial-service-card .service-icon {
        width: 55px;
        height: 55px;
        background: rgba(245, 130, 32, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f58220;
        font-size: 24px;
        margin-bottom: 5px;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .industrial-service-card:hover .service-icon {
        background: #f58220;
        color: #ffffff;
    }

    .industrial-service-card h4 {
        font-size: 18px;
        font-weight: 600;
        color: #0f172a;
        line-height: 1.4;
    }

    /* Full span utility for odd item balancing on larger displays if needed */
    @media (min-width: 1200px) {
        .industrial-services-grid {
            grid-template-columns: repeat(4, 1fr);
        }
        .card-full-span {
            grid-column: span 2;
        }
    }

    /* --- Mobile Responsive Media Queries --- */
    @media (max-width: 768px) {
        .industrial-solutions-section {
            padding: 50px 15px;
        }

        .industrial-header {
            margin-bottom: 35px;
            text-align: left;
        }

        .industrial-header h2 {
            font-size: 26px;
        }

        .industrial-header h3.italic-subtitle {
            font-size: 16px;
        }

        .industrial-header p {
            font-size: 14px;
            text-align: left;
        }

        .industrial-grid-title-wrapper {
            text-align: left;
            margin-bottom: 25px;
        }

        .grid-orange-italic-heading {
            font-size: 20px;
        }

        .industrial-services-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .industrial-service-card {
            padding: 20px 18px;
        }

        .industrial-service-card .service-icon {
            width: 45px;
            height: 45px;
            font-size: 20px;
        }

        .industrial-service-card h4 {
            font-size: 16px;
        }

        .card-full-span {
            grid-column: span 1;
        }
    }
</style>

<!---############ Planning And Engineering ###############---->
<section class="industrial-planning-section" id="industrial-planning">
    <div class="planning-container">
        
        <!-- Section Header -->
        <div class="planning-header">
            <span class="section-tag">
                <i class="fa-solid fa-compass-drafting"></i> Engineering & Strategy
            </span>
            <h2>Industrial Electrical Planning & Engineering</h2>
            <h3 class="italic-subtitle">Planned Electrical Infrastructure for Safe and Efficient Operations</h3>
            <p class="section-intro">Industrial electrical systems require careful planning because machinery, production equipment, HVAC systems, lighting, control systems, and other loads can operate simultaneously.</p>
            <p class="section-subtext">Our team evaluates the project requirements before installation and develops an organized approach for industrial electrical engineering and installation.</p>
        </div>

        <!-- Split Layout: Left Image | Center Timeline Line | Right Content Steps -->
        <div class="planning-split-wrapper">
            
            <!-- Left Side Image Box -->
            <div class="planning-image-col">
                <div class="planning-image-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBuId_-erqUGjA8IR8VDYy5H2MeAsC3PEmBso8c--0jub8yLpnvKbFbT3D&s=10" alt="Industrial Electrical Planning & Engineering">
                    <div class="planning-image-badge">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Engineered for Maximum Reliability</span>
                    </div>
                </div>
            </div>

            <!-- Center Vertical Divider Line -->
            <div class="planning-timeline-divider">
                <div class="divider-line"></div>
            </div>

            <!-- Right Side Step-by-Step Content -->
            <div class="planning-steps-col">
                <h4 class="steps-heading">Our Planning Process</h4>
                
                <div class="planning-steps-list">
                    
                    <div class="planning-step-item">
                        <div class="step-icon-box"><i class="fa-solid fa-map-location-dot"></i></div>
                        <div class="step-content">
                            <span class="step-number">01</span>
                            <h5>Site Survey</h5>
                            <p>We inspect the factory or industrial facility, understand the existing electrical infrastructure, machinery locations, cable routes, and site conditions.</p>
                        </div>
                    </div>

                    <div class="planning-step-item">
                        <div class="step-icon-box"><i class="fa-solid fa-bolt-lightning"></i></div>
                        <div class="step-content">
                            <span class="step-number">02</span>
                            <h5>Electrical Load Assessment</h5>
                            <p>We study the expected power requirements of machinery, production equipment, lighting, HVAC, utilities, and other industrial loads.</p>
                        </div>
                    </div>

                    <div class="planning-step-item">
                        <div class="step-icon-box"><i class="fa-solid fa-network-wired"></i></div>
                        <div class="step-content">
                            <span class="step-number">03</span>
                            <h5>Power Distribution Planning</h5>
                            <p>We plan suitable electrical distribution routes and panel locations to provide reliable power to different production areas.</p>
                        </div>
                    </div>

                    <div class="planning-step-item">
                        <div class="step-icon-box"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="step-content">
                            <span class="step-number">04</span>
                            <h5>Cable & Tray Route Planning</h5>
                            <p>Cable routes, cable trays, risers, supports, and termination points are planned for organized and accessible installation.</p>
                        </div>
                    </div>

                    <div class="planning-step-item">
                        <div class="step-icon-box"><i class="fa-solid fa-server"></i></div>
                        <div class="step-content">
                            <span class="step-number">05</span>
                            <h5>Panel & Protection Planning</h5>
                            <p>Electrical panels, switchgear, protection devices, MCCs, DBs, and related equipment are positioned according to project requirements.</p>
                        </div>
                    </div>

                    <div class="planning-step-item">
                        <div class="step-icon-box"><i class="fa-solid fa-clipboard-check"></i></div>
                        <div class="step-content">
                            <span class="step-number">06</span>
                            <h5>Testing & Commissioning Planning</h5>
                            <p>Testing procedures are planned before final energization to verify electrical safety, continuity, insulation, voltage, and system performance.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<style>
    /* --- Industrial Electrical Planning Section Styles --- */
    .industrial-planning-section {
        position: relative;
        padding: 40px 20px;
        background: #f8fafc;
        color: #0f172a;
        width: 100%;
        box-sizing: border-box;
    }

    .planning-container {
        max-width: 1250px;
        margin: 0 auto;
        width: 100%;
    }

    /* Section Header */
    .planning-header {
        text-align: center;
        max-width: 850px;
        margin: 0 auto 60px auto;
    }

    .planning-header span.section-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 18px;
        background: rgba(245, 130, 32, 0.1);
        border: 1px solid #f58220;
        color: #f58220;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    .planning-header h2 {
        font-size: clamp(28px, 4vw, 42px);
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
        line-height: 1.2;
    }

    .planning-header h3.italic-subtitle {
        font-size: clamp(18px, 2.5vw, 22px);
        font-weight: 500;
        font-style: italic;
        color: #f58220;
        margin-bottom: 20px;
        line-height: 1.4;
    }

    .section-intro {
        font-size: 15.5px;
        color: #475569;
        line-height: 1.7;
        margin-bottom: 12px;
    }

    .section-subtext {
        font-size: 15px;
        color: #64748b;
        line-height: 1.7;
        margin: 0;
    }

    /* Split Wrapper Grid Layout (Left Image | Divider | Right Content) */
    .planning-split-wrapper {
        display: grid;
        grid-template-columns: 1fr 40px 1fr;
        gap: 20px;
        align-items: stretch;
    }

    /* Left Side Image Card */
    .planning-image-col {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .planning-image-card {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        box-shadow: 0 15px 35px rgba(15, 23, 42, 0.06);
        height: 100%;
        min-height: 520px;
        display: flex;
        flex-direction: column;
    }

    .planning-image-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        flex-grow: 1;
        transition: transform 0.5s ease;
    }

    .planning-image-card:hover img {
        transform: scale(1.05);
    }

    .planning-image-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px;
        background: rgba(15, 23, 42, 0.9);
        backdrop-filter: blur(6px);
        border: 1px solid rgba(245, 130, 32, 0.4);
        padding: 14px 18px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        gap: 12px;
        color: #ffffff;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .planning-image-badge i {
        color: #f58220;
        font-size: 20px;
    }

    .planning-image-badge span {
        font-size: 13.5px;
        font-weight: 600;
    }

    /* Center Vertical Divider Line */
    .planning-timeline-divider {
        display: flex;
        justify-content: center;
        position: relative;
    }

    .divider-line {
        width: 2px;
        height: 100%;
        background: linear-gradient(to bottom, transparent, #f58220, transparent);
        position: relative;
    }

    .divider-line::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 10px;
        height: 10px;
        background: #f58220;
        border-radius: 50%;
        box-shadow: 0 0 10px #f58220;
    }

    /* Right Side Steps Column */
    .planning-steps-col {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .steps-heading {
        font-size: 22px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 24px;
        border-left: 4px solid #f58220;
        padding-left: 12px;
        font-style: italic;
    }

    .planning-steps-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .planning-step-item {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 18px 20px;
        display: flex;
        gap: 16px;
        align-items: flex-start;
        position: relative;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(15, 23, 42, 0.03);
    }

    .planning-step-item:hover {
        border-color: #f58220;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(245, 130, 32, 0.08);
        background: #fff;
    }

    .step-icon-box {
        min-width: 42px;
        height: 42px;
        background: rgba(245, 130, 32, 0.1);
        color: #f58220;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .planning-step-item:hover .step-icon-box {
        background: #f58220;
        color: #ffffff;
    }

    .step-content {
        position: relative;
        flex-grow: 1;
    }

    .step-number {
        position: absolute;
        top: 0;
        right: 0;
        font-size: 12px;
        font-weight: 700;
        color: #cbd5e1;
        background: #f1f5f9;
        padding: 3px 8px;
        border-radius: 6px;
    }

    .step-content h5 {
        font-size: 16px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 6px;
        padding-right: 35px; /* Leave space for step number badge */
    }

    .step-content p {
        font-size: 13.5px;
        color: #64748b;
        line-height: 1.5;
        margin: 0;
    }

    /* Responsive Queries */
    @media (max-width: 1024px) {
        .planning-split-wrapper {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .planning-timeline-divider {
            display: none; /* Hide vertical center timeline divider on tablet/mobile views */
        }

        .planning-image-card {
            min-height: 380px;
        }
    }

    @media (max-width: 768px) {
        .industrial-planning-section {
            padding: 50px 15px;
        }

        .planning-header {
            margin-bottom: 35px;
            text-align: left;
        }

        .planning-header h2 {
            font-size: 26px;
        }

        .planning-header h3.italic-subtitle {
            font-size: 16px;
        }

        .steps-heading {
            text-align: left;
        }

        .planning-image-card {
            min-height: 280px;
        }
    }
</style>

<!-----############ Our work flow ############### ----->
<!-- =========================================================
     INDUSTRIAL ELECTRICAL INSTALLATION - WORK PROCESS
========================================================= -->

<section class="industrial-process-section">

    <div class="industrial-process-container">

        <!-- Section Header -->
        <div class="industrial-process-header">

            <span class="industrial-process-label">
                <i class="fa-solid fa-gears"></i>
                OUR WORK PROCESS
            </span>

            <h2>
                Industrial Electrical Installation
                <span>– Our Work Process</span>
            </h2>

            <p>
                From Site Survey to Successful Commissioning
            </p>

            <div class="industrial-title-line"></div>

            <div class="industrial-intro">
                We follow a systematic installation process to ensure that
                every stage of the industrial electrical project is properly
                coordinated, safely executed, and completed with reliable
                performance.
            </div>

        </div>


        <!-- =================================================
             PROCESS FLOW
        ================================================= -->

        <div class="industrial-process-flow">

            <!-- Step 01 -->
            <div class="industrial-process-card">

                <div class="process-number">01</div>

                <div class="process-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>

                <h3>Site Survey</h3>

                <p>
                    We inspect the industrial facility, understand project
                    requirements, existing infrastructure, machinery locations,
                    and site conditions.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 02 -->
            <div class="industrial-process-card">

                <div class="process-number">02</div>

                <div class="process-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

                <h3>Load Assessment</h3>

                <p>
                    We evaluate electrical loads for machinery, production
                    equipment, lighting, HVAC systems, and other industrial
                    requirements.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 03 -->
            <div class="industrial-process-card">

                <div class="process-number">03</div>

                <div class="process-icon">
                    <i class="fa-solid fa-drafting-compass"></i>
                </div>

                <h3>Electrical Planning</h3>

                <p>
                    Detailed electrical layouts, distribution planning,
                    cable routing, panel locations, and installation
                    requirements are prepared.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 04 -->
            <div class="industrial-process-card">

                <div class="process-number">04</div>

                <div class="process-icon">
                    <i class="fa-solid fa-boxes-stacked"></i>
                </div>

                <h3>Material Selection</h3>

                <p>
                    Suitable electrical cables, panels, protection devices,
                    cable trays, accessories, and installation materials are
                    selected according to project requirements.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 05 -->
            <div class="industrial-process-card">

                <div class="process-number">05</div>

                <div class="process-icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>

                <h3>Cable Tray Installation</h3>

                <p>
                    Cable trays, supports, risers, and routing systems are
                    installed to maintain organized and accessible industrial
                    cabling.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 06 -->
            <div class="industrial-process-card">

                <div class="process-number">06</div>

                <div class="process-icon">
                    <i class="fa-solid fa-cable-car"></i>
                </div>

                <h3>Cable Laying</h3>

                <p>
                    Power and control cables are routed, laid, supported,
                    dressed, and prepared for safe and efficient termination.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 07 -->
            <div class="industrial-process-card">

                <div class="process-number">07</div>

                <div class="process-icon">
                    <i class="fa-solid fa-server"></i>
                </div>

                <h3>Panel Installation</h3>

                <p>
                    Electrical distribution panels, control panels, MCCs,
                    DBs, and related equipment are installed with organized
                    connections and proper identification.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 08 -->
            <div class="industrial-process-card">

                <div class="process-number">08</div>

                <div class="process-icon">
                    <i class="fa-solid fa-industry"></i>
                </div>

                <h3>Machine Connections</h3>

                <p>
                    Machinery and production equipment are connected to the
                    planned power distribution system according to project
                    requirements.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 09 -->
            <div class="industrial-process-card">

                <div class="process-number">09</div>

                <div class="process-icon">
                    <i class="fa-solid fa-plug"></i>
                </div>

                <h3>Termination</h3>

                <p>
                    Cable ends are properly terminated, identified, dressed,
                    and connected to panels, equipment, and distribution
                    points.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 10 -->
            <div class="industrial-process-card">

                <div class="process-number">10</div>

                <div class="process-icon">
                    <i class="fa-solid fa-microscope"></i>
                </div>

                <h3>Testing</h3>

                <p>
                    Electrical systems are inspected and tested to identify
                    installation issues and verify safe operating conditions.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 11 -->
            <div class="industrial-process-card">

                <div class="process-number">11</div>

                <div class="process-icon">
                    <i class="fa-solid fa-power-off"></i>
                </div>

                <h3>Commissioning</h3>

                <p>
                    Installed systems are commissioned and checked for proper
                    operation before being handed over for industrial use.
                </p>

            </div>


            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- Step 12 -->
            <div class="industrial-process-card process-final">

                <div class="process-number">12</div>

                <div class="process-icon">
                    <i class="fa-solid fa-circle-check"></i>
                </div>

                <h3>Handover</h3>

                <p>
                    After successful completion and verification, the
                    electrical installation is prepared for final project
                    handover.
                </p>

            </div>

        </div>


        <!-- =================================================
             WHAT WE FOCUS ON
        ================================================= -->

        <div class="industrial-focus-wrapper">

            <div class="industrial-focus-heading">

                <span>
                    <i class="fa-solid fa-shield-halved"></i>
                    OUR INSTALLATION FOCUS
                </span>

                <h2>
                    What We Focus On
                </h2>

            </div>


            <div class="industrial-focus-grid">

                <!-- Focus 01 -->
                <div class="industrial-focus-card">

                    <div class="focus-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>

                    <div>
                        <h3>Safe Power Distribution</h3>

                        <p>
                            Reliable distribution systems designed to support
                            industrial machinery and production loads safely
                            and efficiently.
                        </p>
                    </div>

                </div>


                <!-- Focus 02 -->
                <div class="industrial-focus-card">

                    <div class="focus-icon">
                        <i class="fa-solid fa-cable-car"></i>
                    </div>

                    <div>
                        <h3>Organized Industrial Cabling</h3>

                        <p>
                            Properly routed and supported cables for easier
                            inspection, maintenance, and future expansion.
                        </p>
                    </div>

                </div>


                <!-- Focus 03 -->
                <div class="industrial-focus-card">

                    <div class="focus-icon">
                        <i class="fa-solid fa-server"></i>
                    </div>

                    <div>
                        <h3>Professional Panel Installation</h3>

                        <p>
                            Installation of electrical distribution and control
                            panels with organized connections and proper
                            identification.
                        </p>
                    </div>

                </div>


                <!-- Focus 04 -->
                <div class="industrial-focus-card">

                    <div class="focus-icon">
                        <i class="fa-solid fa-industry"></i>
                    </div>

                    <div>
                        <h3>Machine Power Connections</h3>

                        <p>
                            Power supply connections for industrial machinery
                            and production equipment based on project
                            requirements.
                        </p>
                    </div>

                </div>


                <!-- Focus 05 -->
                <div class="industrial-focus-card">

                    <div class="focus-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <div>
                        <h3>Testing &amp; Verification</h3>

                        <p>
                            Electrical systems are checked before commissioning
                            to identify installation issues and ensure proper
                            operation.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   INDUSTRIAL PROCESS SECTION
========================================================= */

.industrial-process-section {
    position: relative;
    padding: 110px 0;
    background: #f7f8fa;
    overflow: hidden;
}

.industrial-process-container {
    width: min(1450px, 92%);
    margin: auto;
}


/* =========================================================
   HEADER
========================================================= */

.industrial-process-header {
    text-align: center;
    max-width: 900px;
    margin: 0 auto 65px;
}

.industrial-process-label {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    color: #f58220;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1.8px;
    margin-bottom: 18px;
}

.industrial-process-label i {
    font-size: 16px;
}

.industrial-process-header h2 {
    margin: 0;
    color: #132d45;
    font-size: clamp(38px, 4vw, 58px);
    line-height: 1.1;
    font-weight: 700;
    letter-spacing: -1.5px;
}

.industrial-process-header h2 span {
    color: #f58220;
}

.industrial-process-header > p {
    margin: 20px 0 0;
    color: #555;
    font-size: 21px;
    font-weight: 600;
}

.industrial-title-line {
    width: 70px;
    height: 4px;
    margin: 24px auto;
    background: #f58220;
    border-radius: 20px;
}

.industrial-intro {
    max-width: 780px;
    margin: auto;
    color: #707070;
    font-size: 16px;
    line-height: 1.8;
}


/* =========================================================
   PROCESS FLOW
========================================================= */

.industrial-process-flow {
    display: flex;
    align-items: stretch;
    gap: 13px;
    overflow-x: auto;
    padding: 15px 5px 30px;
    scrollbar-width: thin;
    scrollbar-color: #f58220 #e7e7e7;
}

.industrial-process-flow::-webkit-scrollbar {
    height: 7px;
}

.industrial-process-flow::-webkit-scrollbar-track {
    background: #e8e8e8;
    border-radius: 20px;
}

.industrial-process-flow::-webkit-scrollbar-thumb {
    background: #f58220;
    border-radius: 20px;
}


/* Process Card */

.industrial-process-card {
    position: relative;
    flex: 0 0 215px;
    min-height: 315px;
    padding: 27px 22px;
    background: #ffffff;
    border: 1px solid #e7e7e7;
    border-radius: 22px;
    text-align: center;
    transition: .4s ease;
    box-shadow: 0 8px 25px rgba(0,0,0,.035);
}

.industrial-process-card:hover {
    transform: translateY(-8px);
    border-color: #f58220;
    box-shadow: 0 18px 40px rgba(245,130,32,.12);
}


/* Number */

.process-number {
    position: absolute;
    top: 15px;
    right: 17px;
    color: #f58220;
    font-size: 13px;
    font-weight: 800;
}


/* Icon */

.process-icon {
    width: 68px;
    height: 68px;
    margin: 12px auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #fff3e8;
    color: #f58220;
    font-size: 25px;
    transition: .35s ease;
}

.industrial-process-card:hover .process-icon {
    background: #f58220;
    color: #fff;
    transform: rotateY(180deg);
}


/* Card Title */

.industrial-process-card h3 {
    margin: 0 0 13px;
    color: #172f46;
    font-size: 18px;
    line-height: 1.3;
    font-weight: 700;
}


/* Card Text */

.industrial-process-card p {
    margin: 0;
    color: #707070;
    font-size: 13.5px;
    line-height: 1.65;
}


/* Arrow */

.process-arrow {
    flex: 0 0 auto;
    width: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f58220;
    font-size: 19px;
}


/* Final Card */

.process-final {
    border: 1px solid #f58220;
}


/* =========================================================
   FOCUS SECTION
========================================================= */

.industrial-focus-wrapper {
    margin-top: 75px;
}

.industrial-focus-heading {
    margin-bottom: 35px;
}

.industrial-focus-heading > span {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #f58220;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1.5px;
}

.industrial-focus-heading h2 {
    margin: 10px 0 0;
    color: #132d45;
    font-size: 38px;
    font-weight: 700;
}


/* Focus Grid */

.industrial-focus-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 18px;
}


/* Focus Card */

.industrial-focus-card {
    display: flex;
    flex-direction: column;
    gap: 20px;
    min-height: 260px;
    padding: 27px 23px;
    background: #fff;
    border-radius: 22px;
    border: 1px solid #e7e7e7;
    transition: .4s ease;
}

.industrial-focus-card:hover {
    transform: translateY(-7px);
    border-color: #f58220;
    box-shadow: 0 18px 40px rgba(0,0,0,.07);
}


/* Focus Icon */

.focus-icon {
    width: 55px;
    height: 55px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #132d45;
    color: #fff;
    border-radius: 15px;
    font-size: 20px;
    transition: .35s ease;
}

.industrial-focus-card:hover .focus-icon {
    background: #f58220;
}


/* Focus Heading */

.industrial-focus-card h3 {
    margin: 0 0 10px;
    color: #172f46;
    font-size: 18px;
    line-height: 1.35;
    font-weight: 700;
}


/* Focus Text */

.industrial-focus-card p {
    margin: 0;
    color: #707070;
    font-size: 14px;
    line-height: 1.7;
}


/* =========================================================
   LARGE TABLET
========================================================= */

@media (max-width: 1200px) {

    .industrial-process-section {
        padding: 90px 0;
    }

    .industrial-focus-grid {
        grid-template-columns: repeat(3, 1fr);
    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .industrial-process-section {
        padding: 75px 0;
    }

    .industrial-process-header {
        margin-bottom: 45px;
    }

    .industrial-process-header h2 {
        font-size: 42px;
    }

    .industrial-process-header > p {
        font-size: 18px;
    }

    .industrial-process-card {
        flex-basis: 210px;
    }

    .industrial-focus-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .industrial-process-section {
        padding: 60px 0;
    }

    .industrial-process-container {
        width: 90%;
    }

    .industrial-process-header {
        text-align: left;
        margin-bottom: 38px;
    }

    .industrial-process-header h2 {
        font-size: 34px;
        line-height: 1.15;
        letter-spacing: -.8px;
    }

    .industrial-process-header > p {
        font-size: 16px;
        line-height: 1.5;
    }

    .industrial-title-line {
        margin: 20px 0;
    }

    .industrial-intro {
        font-size: 14px;
        line-height: 1.7;
    }


    /* Mobile Process */

    .industrial-process-flow {
        display: grid;
        grid-template-columns: 1fr;
        gap: 14px;
        overflow: visible;
        padding: 0;
    }

    .industrial-process-card {
        width: 100%;
        min-height: auto;
        padding: 25px 22px;
        display: grid;
        grid-template-columns: 65px 1fr;
        column-gap: 18px;
        text-align: left;
        border-radius: 20px;
    }

    .process-number {
        top: 14px;
        right: 15px;
    }

    .process-icon {
        grid-row: span 2;
        margin: 0;
        width: 60px;
        height: 60px;
        font-size: 22px;
    }

    .industrial-process-card h3 {
        margin: 4px 0 8px;
        font-size: 18px;
    }

    .industrial-process-card p {
        font-size: 13px;
        line-height: 1.65;
    }

    /* Hide horizontal arrows */
    .process-arrow {
        display: none;
    }


    /* Focus */

    .industrial-focus-wrapper {
        margin-top: 55px;
    }

    .industrial-focus-heading h2 {
        font-size: 32px;
    }

    .industrial-focus-grid {
        grid-template-columns: 1fr;
        gap: 14px;
    }

    .industrial-focus-card {
        min-height: auto;
        flex-direction: row;
        gap: 18px;
        padding: 22px;
        border-radius: 18px;
    }

    .focus-icon {
        width: 50px;
        height: 50px;
        border-radius: 13px;
        font-size: 18px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .industrial-process-section {
        padding: 50px 0;
    }

    .industrial-process-container {
        width: 92%;
    }

    .industrial-process-label {
        font-size: 11px;
        letter-spacing: 1.2px;
    }

    .industrial-process-header h2 {
        font-size: 29px;
    }

    .industrial-process-header > p {
        font-size: 15px;
    }

    .industrial-intro {
        font-size: 13px;
    }

    .industrial-process-card {
        grid-template-columns: 55px 1fr;
        column-gap: 15px;
        padding: 22px 18px;
    }

    .process-icon {
        width: 52px;
        height: 52px;
        font-size: 19px;
    }

    .industrial-process-card h3 {
        font-size: 16px;
    }

    .industrial-process-card p {
        font-size: 12.5px;
    }

    .industrial-focus-heading > span {
        font-size: 11px;
    }

    .industrial-focus-heading h2 {
        font-size: 28px;
    }

    .industrial-focus-card {
        padding: 18px;
    }

    .focus-icon {
        width: 45px;
        height: 45px;
        flex-shrink: 0;
    }

    .industrial-focus-card h3 {
        font-size: 16px;
    }

    .industrial-focus-card p {
        font-size: 12.5px;
    }

}

</style>




<!-- =========================================================
     WHY CHOOSE WATTSIN TECHNOLOGIES
========================================================= -->

<section class="wattsin-why-section">

    <div class="wattsin-why-container">

        <!-- ================= SECTION HEADER ================= -->

        <div class="wattsin-why-header">

            <div class="wattsin-why-label">
                <span></span>
                WHY CHOOSE WATTSIN TECHNOLOGIES
            </div>

            <h2>
                Reliable Electrical Support for
                <strong>Industrial &amp; Manufacturing Facilities</strong>
            </h2>

            <p>
                Industrial electrical failures can affect production, equipment,
                safety, and operational schedules. That's why electrical
                installation needs to be handled with proper engineering,
                workmanship, testing, and coordination.
            </p>

            <p class="why-intro-highlight">
                Wattsin Technologies provides a structured approach to
                industrial electrical projects with a strong focus on
                <b>Safety, Quality, Reliability, and Timely Execution.</b>
            </p>

        </div>


        <!-- ================= WHY CHOOSE GRID ================= -->

        <div class="wattsin-why-grid">

            <!-- CARD 01 -->
            <article class="wattsin-why-card">

                <div class="why-card-top">

                    <div class="why-icon">
                        <i class="fa-solid fa-industry"></i>
                    </div>

                    <span class="why-number">01</span>

                </div>

                <div class="why-card-content">

                    <h3>
                        Industrial Project Experience
                    </h3>

                    <p>
                        Practical experience in electrical installation
                        environments involving commercial and industrial
                        facilities.
                    </p>

                </div>

                <div class="why-card-line"></div>

            </article>


            <!-- CARD 02 -->
            <article class="wattsin-why-card">

                <div class="why-card-top">

                    <div class="why-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>

                    <span class="why-number">02</span>

                </div>

                <div class="why-card-content">

                    <h3>
                        LT &amp; HT Electrical Expertise
                    </h3>

                    <p>
                        Solutions covering both low-tension and high-tension
                        electrical installation requirements.
                    </p>

                </div>

                <div class="why-card-line"></div>

            </article>


            <!-- CARD 03 -->
            <article class="wattsin-why-card">

                <div class="why-card-top">

                    <div class="why-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <span class="why-number">03</span>

                </div>

                <div class="why-card-content">

                    <h3>
                        Safety-Focused Execution
                    </h3>

                    <p>
                        Safety is considered throughout electrical planning,
                        installation, testing, and commissioning.
                    </p>

                </div>

                <div class="why-card-line"></div>

            </article>


            <!-- CARD 04 -->
            <article class="wattsin-why-card">

                <div class="why-card-top">

                    <div class="why-icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>

                    <span class="why-number">04</span>

                </div>

                <div class="why-card-content">

                    <h3>
                        Quality Workmanship
                    </h3>

                    <p>
                        We focus on proper cable routing, termination, panel
                        installation, equipment connections, and organized
                        electrical infrastructure.
                    </p>

                </div>

                <div class="why-card-line"></div>

            </article>


            <!-- CARD 05 -->
            <article class="wattsin-why-card">

                <div class="why-card-top">

                    <div class="why-icon">
                        <i class="fa-solid fa-diagram-project"></i>
                    </div>

                    <span class="why-number">05</span>

                </div>

                <div class="why-card-content">

                    <h3>
                        Project Coordination
                    </h3>

                    <p>
                        Electrical activities are coordinated with civil,
                        mechanical, HVAC, production, and other project
                        requirements.
                    </p>

                </div>

                <div class="why-card-line"></div>

            </article>


            <!-- CARD 06 -->
            <article class="wattsin-why-card">

                <div class="why-card-top">

                    <div class="why-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>

                    <span class="why-number">06</span>

                </div>

                <div class="why-card-content">

                    <h3>
                        Future-Ready Infrastructure
                    </h3>

                    <p>
                        Electrical systems are planned with accessibility
                        and potential future expansion in mind.
                    </p>

                </div>

                <div class="why-card-line"></div>

            </article>

        </div>


        <!-- ================= BOTTOM TRUST BAR ================= -->

        <div class="wattsin-trust-bar">

            <div class="trust-item">

                <div class="trust-icon">
                    <i class="fa-solid fa-circle-check"></i>
                </div>

                <div>
                    <strong>Quality Focused</strong>
                    <span>Professional workmanship</span>
                </div>

            </div>


            <div class="trust-divider"></div>


            <div class="trust-item">

                <div class="trust-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div>
                    <strong>Safety First</strong>
                    <span>Structured project execution</span>
                </div>

            </div>


            <div class="trust-divider"></div>


            <div class="trust-item">

                <div class="trust-icon">
                    <i class="fa-solid fa-clock"></i>
                </div>

                <div>
                    <strong>Timely Execution</strong>
                    <span>Planned project delivery</span>
                </div>

            </div>


            <div class="trust-divider"></div>


            <div class="trust-item">

                <div class="trust-icon">
                    <i class="fa-solid fa-headset"></i>
                </div>

                <div>
                    <strong>Project Support</strong>
                    <span>Reliable technical assistance</span>
                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   WATTSIN WHY SECTION
========================================================= */

.wattsin-why-section {
    position: relative;
    padding: 50px 20px;
    background: #ffffff;
    overflow: hidden;
}


/* Subtle Background */

.wattsin-why-section::before {
    content: "";
    position: absolute;
    width: 420px;
    height: 420px;
    top: -180px;
    right: -160px;
    border-radius: 50%;
    background: rgba(245, 130, 32, 0.045);
    pointer-events: none;
}

.wattsin-why-section::after {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    bottom: -150px;
    left: -130px;
    border-radius: 50%;
    background: rgba(19, 45, 69, 0.04);
    pointer-events: none;
}


.wattsin-why-container {
    position: relative;
    z-index: 2;
    width: min(1400px, 92%);
    margin: auto;
}


/* =========================================================
   HEADER
========================================================= */

.wattsin-why-header {
    max-width: 950px;
    margin: 0 auto 65px;
    text-align: center;
}


.wattsin-why-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;

    color: #f58220;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
}


.wattsin-why-label span {
    width: 9px;
    height: 9px;
    background: #f58220;
    border-radius: 50%;
    display: inline-block;
}


.wattsin-why-header h2 {
    margin: 0;
    color: #132d45;
    font-size: clamp(38px, 4vw, 58px);
    line-height: 1.1;
    font-weight: 700;
    letter-spacing: -1.5px;
}


.wattsin-why-header h2 strong {
    display: block;
    color: #f58220;
    font-weight: 700;
}


.wattsin-why-header > p {
    max-width: 820px;
    margin: 25px auto 0;
    color: #707070;
    font-size: 17px;
    line-height: 1.8;
}


.why-intro-highlight {
    max-width: 780px !important;
    margin-top: 18px !important;
    padding: 17px 22px;
    background: #fff7f0;
    border-left: 4px solid #f58220;
    color: #555 !important;
    text-align: left;
    border-radius: 0 12px 12px 0;
}


.why-intro-highlight b {
    color: #132d45;
}


/* =========================================================
   WHY GRID
========================================================= */

.wattsin-why-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}


/* =========================================================
   WHY CARD
========================================================= */

.wattsin-why-card {
    position: relative;
    padding: 32px 30px 28px;
    min-height: 300px;

    background: #ffffff;
    border: 1px solid #e8e8e8;
    border-radius: 24px;

    overflow: hidden;

    transition:
        transform .4s ease,
        box-shadow .4s ease,
        border-color .4s ease;
}


.wattsin-why-card:hover {
    transform: translateY(-9px);
    border-color: rgba(245,130,32,.45);
    box-shadow: 0 22px 55px rgba(19,45,69,.10);
}


/* Top */

.why-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
}


.why-icon {
    width: 64px;
    height: 64px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 18px;

    background: #f4f7f9;
    color: #f58220;

    font-size: 25px;

    transition: .4s ease;
}


.wattsin-why-card:hover .why-icon {
    background: #f58220;
    color: #ffffff;
    transform: scale(1.05);
}


.why-number {
    color: #d8d8d8;
    font-size: 35px;
    font-weight: 800;
    line-height: 1;
    transition: .4s ease;
}


.wattsin-why-card:hover .why-number {
    color: rgba(245,130,32,.25);
}


/* Content */

.why-card-content {
    margin-top: 28px;
}


.why-card-content h3 {
    margin: 0 0 13px;

    color: #132d45;
    font-size: 21px;
    line-height: 1.3;
    font-weight: 700;
}


.why-card-content p {
    margin: 0;

    color: #737373;
    font-size: 14.5px;
    line-height: 1.75;
}


/* Bottom Orange Line */

.why-card-line {
    position: absolute;
    left: 30px;
    bottom: 0;

    width: 0;
    height: 4px;

    background: #f58220;
    border-radius: 10px 10px 0 0;

    transition: width .45s ease;
}


.wattsin-why-card:hover .why-card-line {
    width: calc(100% - 60px);
}


/* =========================================================
   TRUST BAR
========================================================= */

.wattsin-trust-bar {
    margin-top: 60px;
    padding: 27px 30px;

    display: grid;
    grid-template-columns: 1fr auto 1fr auto 1fr auto 1fr;
    align-items: center;
    gap: 25px;

    background: #132d45;
    border-radius: 22px;

    box-shadow: 0 20px 50px rgba(19,45,69,.15);
}


.trust-item {
    display: flex;
    align-items: center;
    gap: 15px;
}


.trust-icon {
    width: 48px;
    height: 48px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(245,130,32,.14);
    color: #f58220;

    border-radius: 13px;

    font-size: 19px;
}


.trust-item strong {
    display: block;
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
}


.trust-item span {
    display: block;
    margin-top: 4px;
    color: rgba(255,255,255,.6);
    font-size: 11px;
}


.trust-divider {
    width: 1px;
    height: 45px;
    background: rgba(255,255,255,.15);
}


/* =========================================================
   LARGE TABLET
========================================================= */

@media (max-width: 1200px) {

    .wattsin-why-section {
        padding: 90px 0;
    }

    .wattsin-why-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .wattsin-trust-bar {
        grid-template-columns: 1fr 1fr;
        gap: 25px;
    }

    .trust-divider {
        display: none;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .wattsin-why-section {
        padding: 75px 0;
    }

    .wattsin-why-header {
        margin-bottom: 45px;
    }

    .wattsin-why-header h2 {
        font-size: 43px;
    }

    .wattsin-why-header > p {
        font-size: 15px;
    }

    .wattsin-why-card {
        min-height: 280px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .wattsin-why-section {
        padding: 60px 0;
    }

    .wattsin-why-container {
        width: 91%;
    }


    /* Header */

    .wattsin-why-header {
        text-align: left;
        margin-bottom: 35px;
    }

    .wattsin-why-label {
        font-size: 11px;
        letter-spacing: 1.3px;
    }

    .wattsin-why-header h2 {
        font-size: 34px;
        line-height: 1.15;
        letter-spacing: -.8px;
    }

    .wattsin-why-header h2 strong {
        margin-top: 4px;
    }

    .wattsin-why-header > p {
        font-size: 14px;
        line-height: 1.7;
        margin-top: 20px;
    }

    .why-intro-highlight {
        padding: 14px 16px;
        font-size: 13px !important;
    }


    /* Cards */

    .wattsin-why-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .wattsin-why-card {
        min-height: auto;
        padding: 25px 22px 27px;
        border-radius: 20px;
    }

    .why-icon {
        width: 55px;
        height: 55px;
        border-radius: 15px;
        font-size: 21px;
    }

    .why-number {
        font-size: 28px;
    }

    .why-card-content {
        margin-top: 21px;
    }

    .why-card-content h3 {
        font-size: 18px;
    }

    .why-card-content p {
        font-size: 13px;
        line-height: 1.65;
    }

    .why-card-line {
        left: 22px;
    }

    .wattsin-why-card:hover .why-card-line {
        width: calc(100% - 44px);
    }


    /* Trust */

    .wattsin-trust-bar {
        margin-top: 35px;
        padding: 22px;
        grid-template-columns: 1fr;
        gap: 20px;
        border-radius: 18px;
    }

    .trust-item {
        gap: 13px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .wattsin-why-section {
        padding: 50px 0;
    }

    .wattsin-why-header h2 {
        font-size: 29px;
    }

    .wattsin-why-header > p {
        font-size: 13px;
    }

    .why-intro-highlight {
        font-size: 12px !important;
    }

    .wattsin-why-card {
        padding: 21px 18px 25px;
    }

    .why-icon {
        width: 50px;
        height: 50px;
        font-size: 19px;
    }

    .why-number {
        font-size: 24px;
    }

    .why-card-content h3 {
        font-size: 16px;
    }

    .why-card-content p {
        font-size: 12.5px;
    }

    .why-card-line {
        left: 18px;
    }

    .wattsin-why-card:hover .why-card-line {
        width: calc(100% - 36px);
    }

    .trust-icon {
        width: 44px;
        height: 44px;
        font-size: 17px;
    }

    .trust-item strong {
        font-size: 13px;
    }

    .trust-item span {
        font-size: 10px;
    }

}

</style>


<!-- =========================================================
     INDUSTRIAL APPLICATIONS + ENQUIRY CTA
========================================================= -->

<section class="industrial-applications-section">

    <div class="industrial-applications-container">

        <!-- ================= SECTION HEADER ================= -->

        <div class="industrial-applications-header">

            <span class="industrial-section-label">
                <i class="fa-solid fa-industry"></i>
                INDUSTRIAL APPLICATIONS
            </span>

            <h2>
                Electrical Solutions for
                <span>Factories, Manufacturing &amp; Production Facilities</span>
            </h2>

            <p>
                Our industrial electrical installation services can support
                different types of industrial and manufacturing environments
                with reliable, safe, and professionally planned electrical
                infrastructure.
            </p>

        </div>


        <!-- ================= INDUSTRIES GRID ================= -->

        <div class="industries-grid">

            <!-- 01 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-gears"></i>
                </div>

                <div>
                    <span class="industry-number">01</span>
                    <h3>Manufacturing Plants</h3>
                    <p>Reliable electrical infrastructure for production environments.</p>
                </div>
            </div>


            <!-- 02 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-industry"></i>
                </div>

                <div>
                    <span class="industry-number">02</span>
                    <h3>Engineering Industries</h3>
                    <p>Power distribution and electrical systems for engineering facilities.</p>
                </div>
            </div>


            <!-- 03 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-car"></i>
                </div>

                <div>
                    <span class="industry-number">03</span>
                    <h3>Automobile &amp; Automotive Units</h3>
                    <p>Electrical solutions supporting machinery and automotive operations.</p>
                </div>
            </div>


            <!-- 04 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-shirt"></i>
                </div>

                <div>
                    <span class="industry-number">04</span>
                    <h3>Textile &amp; Garment Factories</h3>
                    <p>Organized power systems for textile and garment production facilities.</p>
                </div>
            </div>


            <!-- 05 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-utensils"></i>
                </div>

                <div>
                    <span class="industry-number">05</span>
                    <h3>Food Processing Facilities</h3>
                    <p>Electrical installation support for food processing environments.</p>
                </div>
            </div>


            <!-- 06 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-warehouse"></i>
                </div>

                <div>
                    <span class="industry-number">06</span>
                    <h3>Warehouses &amp; Logistics</h3>
                    <p>Power distribution and electrical infrastructure for warehouse facilities.</p>
                </div>
            </div>


            <!-- 07 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-gears"></i>
                </div>

                <div>
                    <span class="industry-number">07</span>
                    <h3>Production Units</h3>
                    <p>Electrical systems designed around production and machinery requirements.</p>
                </div>
            </div>


            <!-- 08 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </div>

                <div>
                    <span class="industry-number">08</span>
                    <h3>Engineering Workshops</h3>
                    <p>Practical electrical solutions for workshops and technical facilities.</p>
                </div>
            </div>


            <!-- 09 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-building"></i>
                </div>

                <div>
                    <span class="industry-number">09</span>
                    <h3>Industrial Buildings</h3>
                    <p>Complete electrical infrastructure for industrial building projects.</p>
                </div>
            </div>


            <!-- 10 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-building-circle-check"></i>
                </div>

                <div>
                    <span class="industry-number">10</span>
                    <h3>Large-Scale Manufacturing</h3>
                    <p>Electrical installation support for large manufacturing facilities.</p>
                </div>
            </div>


            <!-- 11 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fa-solid fa-city"></i>
                </div>

                <div>
                    <span class="industry-number">11</span>
                    <h3>Commercial-Industrial Complexes</h3>
                    <p>Integrated electrical systems for mixed-use industrial environments.</p>
                </div>
            </div>


            <!-- 12 -->
            <div class="industry-card industry-card-special">

                <div class="industry-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

                <div>
                    <span class="industry-number">12</span>
                    <h3>Complete Industrial Solutions</h3>
                    <p>
                        LT, HT, panels, cabling, power distribution,
                        testing and commissioning.
                    </p>
                </div>

            </div>

        </div>


        <!-- =================================================
             ENQUIRY CTA
        ================================================= -->

        <div class="industrial-enquiry-cta">

            <!-- Decorative Element -->
            <div class="cta-glow"></div>

            <div class="industrial-cta-content">

                <span class="cta-small-label">
                    <i class="fa-solid fa-bolt"></i>
                    INDUSTRIAL ELECTRICAL PROJECTS
                </span>

                <h2>
                    Need Reliable Electrical Installation
                    <span>for Your Industrial Facility?</span>
                </h2>

                <p>
                    Whether you are setting up a new factory, expanding your
                    production facility, upgrading an existing electrical
                    system, or replacing outdated electrical infrastructure,
                    Wattsin Technologies can help plan and execute the
                    required electrical works.
                </p>

                <p>
                    From <strong>industrial power distribution and machine
                    power supply</strong> to <strong>LT &amp; HT installations,
                    electrical panels, cable laying, termination, testing,
                    and commissioning</strong>, our team provides a complete
                    electrical installation approach.
                </p>

            </div>


            <!-- ================= PROJECT BOX ================= -->

            <div class="industrial-project-box">

                <div class="project-box-icon">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>

                <div class="project-box-content">

                    <span>START YOUR PROJECT</span>

                    <h3>
                        Planning an industrial electrical project?
                    </h3>

                    <p>
                        Tell us about your factory, machinery, power
                        requirements, and project scope. Our team can discuss
                        your requirements and help identify the right
                        electrical installation solution.
                    </p>

                </div>

            </div>


            <!-- ================= CTA BUTTONS ================= -->

            <div class="industrial-cta-buttons">

                <a href="#quote" class="industrial-btn industrial-btn-primary">
                    <i class="fa-solid fa-calendar-check"></i>
                    Get a Free Project Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="contact.php" class="industrial-btn industrial-btn-outline">
                    <i class="fa-solid fa-paper-plane"></i>
                    Send Your Enquiry
                </a>

                <a href="contact.php" class="industrial-contact-link">
                    <i class="fa-solid fa-phone"></i>
                    Contact Wattsin Technologies
                </a>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   INDUSTRIAL APPLICATIONS SECTION
========================================================= */

.industrial-applications-section {
    position: relative;
    padding: 110px 0;
    background: #f7f9fa;
    overflow: hidden;
}

.industrial-applications-container {
    position: relative;
    z-index: 2;
    width: min(1400px, 92%);
    margin: auto;
}


/* =========================================================
   HEADER
========================================================= */

.industrial-applications-header {
    max-width: 950px;
    margin: 0 auto 60px;
    text-align: center;
}

.industrial-section-label {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    margin-bottom: 18px;

    color: #f58220;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
}

.industrial-section-label i {
    font-size: 14px;
}

.industrial-applications-header h2 {
    margin: 0;

    color: #132d45;
    font-size: clamp(36px, 4vw, 56px);
    line-height: 1.1;
    font-weight: 750;
    letter-spacing: -1.5px;
}

.industrial-applications-header h2 span {
    display: block;
    color: #f58220;
    margin-top: 5px;
}

.industrial-applications-header p {
    max-width: 800px;
    margin: 24px auto 0;

    color: #70777d;
    font-size: 16px;
    line-height: 1.8;
}


/* =========================================================
   INDUSTRIES GRID
========================================================= */

.industries-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
}


/* =========================================================
   INDUSTRY CARD
========================================================= */

.industry-card {
    position: relative;

    display: flex;
    align-items: flex-start;
    gap: 18px;

    padding: 25px 23px;

    background: #ffffff;
    border: 1px solid #e5e9ec;
    border-radius: 18px;

    overflow: hidden;

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        border-color .35s ease;
}

.industry-card::before {
    content: "";

    position: absolute;
    top: 0;
    left: 0;

    width: 3px;
    height: 0;

    background: #f58220;

    transition: height .35s ease;
}

.industry-card:hover {
    transform: translateY(-6px);

    border-color: rgba(245,130,32,.35);

    box-shadow:
        0 18px 40px rgba(19,45,69,.09);
}

.industry-card:hover::before {
    height: 100%;
}


/* Icon */

.industry-icon {
    width: 53px;
    height: 53px;

    flex: 0 0 53px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 15px;

    background: #fff4ea;
    color: #f58220;

    font-size: 20px;

    transition: .35s ease;
}

.industry-card:hover .industry-icon {
    background: #f58220;
    color: #ffffff;
    transform: scale(1.06);
}


/* Text */

.industry-number {
    display: block;
    margin-bottom: 4px;

    color: #b7bdc1;

    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.5px;
}

.industry-card h3 {
    margin: 0 0 7px;

    color: #132d45;

    font-size: 17px;
    line-height: 1.35;
    font-weight: 700;
}

.industry-card p {
    margin: 0;

    color: #777f84;

    font-size: 12.5px;
    line-height: 1.6;
}


/* Special Card */

.industry-card-special {
    background: #132d45;
    border-color: #132d45;
}

.industry-card-special h3 {
    color: #ffffff;
}

.industry-card-special p {
    color: rgba(255,255,255,.62);
}

.industry-card-special .industry-number {
    color: rgba(255,255,255,.35);
}

.industry-card-special .industry-icon {
    background: rgba(245,130,32,.15);
    color: #f58220;
}


/* =========================================================
   ENQUIRY CTA
========================================================= */

.industrial-enquiry-cta {
    position: relative;

    margin-top: 80px;
    padding: 65px;

    background: #132d45;
    border-radius: 30px;

    overflow: hidden;

    box-shadow:
        0 25px 70px rgba(19,45,69,.18);
}


/* Background glow */

.industrial-enquiry-cta::before {
    content: "";

    position: absolute;

    width: 500px;
    height: 500px;

    right: -230px;
    top: -250px;

    border-radius: 50%;

    border: 1px solid rgba(245,130,32,.2);
}

.industrial-enquiry-cta::after {
    content: "";

    position: absolute;

    width: 330px;
    height: 330px;

    right: -150px;
    bottom: -170px;

    border-radius: 50%;

    background: rgba(245,130,32,.08);
}

.cta-glow {
    position: absolute;

    width: 180px;
    height: 180px;

    left: -100px;
    bottom: -100px;

    border-radius: 50%;

    background: rgba(255,255,255,.04);
}


/* CTA Content */

.industrial-cta-content {
    position: relative;
    z-index: 2;

    max-width: 930px;
}

.cta-small-label {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    margin-bottom: 16px;

    color: #f58220;

    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.8px;
}

.industrial-cta-content h2 {
    margin: 0;

    color: #ffffff;

    font-size: clamp(32px, 4vw, 51px);
    line-height: 1.12;
    letter-spacing: -1px;
}

.industrial-cta-content h2 span {
    color: #f58220;
}

.industrial-cta-content p {
    max-width: 950px;

    margin: 22px 0 0;

    color: rgba(255,255,255,.68);

    font-size: 15px;
    line-height: 1.8;
}

.industrial-cta-content p strong {
    color: #ffffff;
}


/* =========================================================
   PROJECT BOX
========================================================= */

.industrial-project-box {
    position: relative;
    z-index: 2;

    display: flex;
    align-items: center;
    gap: 20px;

    margin-top: 35px;
    padding: 23px 25px;

    background: rgba(255,255,255,.055);

    border: 1px solid rgba(255,255,255,.12);

    border-radius: 18px;
}

.project-box-icon {
    width: 57px;
    height: 57px;

    flex: 0 0 57px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 15px;

    background: #f58220;
    color: #ffffff;

    font-size: 21px;
}

.project-box-content span {
    color: #f58220;

    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.5px;
}

.project-box-content h3 {
    margin: 4px 0 4px;

    color: #ffffff;

    font-size: 19px;
    font-weight: 700;
}

.project-box-content p {
    margin: 0;

    color: rgba(255,255,255,.58);

    font-size: 12.5px;
    line-height: 1.6;
}


/* =========================================================
   CTA BUTTONS
========================================================= */

.industrial-cta-buttons {
    position: relative;
    z-index: 3;

    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 13px;

    margin-top: 35px;
}

.industrial-btn {
    min-height: 52px;

    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    padding: 0 23px;

    border-radius: 10px;

    text-decoration: none;

    font-size: 13px;
    font-weight: 700;

    transition: .3s ease;
}


/* Primary */

.industrial-btn-primary {
    background: #f58220;
    color: #ffffff;

    box-shadow: 0 10px 25px rgba(245,130,32,.22);
}

.industrial-btn-primary:hover {
    background: #ff963d;
    color: #ffffff;

    transform: translateY(-3px);
}


/* Outline */

.industrial-btn-outline {
    background: transparent;

    color: #ffffff;

    border: 1px solid rgba(255,255,255,.3);
}

.industrial-btn-outline:hover {
    background: #ffffff;
    color: #132d45;

    transform: translateY(-3px);
}


/* Contact Link */

.industrial-contact-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    padding: 12px 10px;

    color: rgba(255,255,255,.65);

    text-decoration: none;

    font-size: 13px;
    font-weight: 600;

    transition: .3s ease;
}

.industrial-contact-link:hover {
    color: #f58220;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

    .industries-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .industrial-enquiry-cta {
        padding: 50px;
    }

}


/* =========================================================
   TABLET / MOBILE
========================================================= */

@media (max-width: 767px) {

    .industrial-applications-section {
        padding: 65px 0;
    }

    .industrial-applications-container {
        width: 91%;
    }


    /* Header */

    .industrial-applications-header {
        margin-bottom: 38px;
        text-align: left;
    }

    .industrial-section-label {
        font-size: 10px;
        letter-spacing: 1.4px;
    }

    .industrial-applications-header h2 {
        font-size: 32px;
        line-height: 1.15;
        letter-spacing: -.8px;
    }

    .industrial-applications-header h2 span {
        margin-top: 5px;
    }

    .industrial-applications-header p {
        margin-top: 18px;
        font-size: 13.5px;
        line-height: 1.7;
    }


    /* Industry Cards */

    .industries-grid {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .industry-card {
        padding: 20px 18px;
        gap: 14px;
        border-radius: 16px;
    }

    .industry-icon {
        width: 48px;
        height: 48px;
        flex-basis: 48px;
        border-radius: 13px;
        font-size: 18px;
    }

    .industry-card h3 {
        font-size: 15.5px;
    }

    .industry-card p {
        font-size: 12px;
        line-height: 1.55;
    }


    /* CTA */

    .industrial-enquiry-cta {
        margin-top: 50px;
        padding: 35px 22px;

        border-radius: 22px;
    }

    .industrial-cta-content h2 {
        font-size: 31px;
        line-height: 1.17;
    }

    .industrial-cta-content p {
        font-size: 13px;
        line-height: 1.7;
    }


    /* Project Box */

    .industrial-project-box {
        align-items: flex-start;

        margin-top: 28px;
        padding: 19px;

        gap: 14px;

        border-radius: 15px;
    }

    .project-box-icon {
        width: 46px;
        height: 46px;
        flex-basis: 46px;

        border-radius: 12px;
        font-size: 17px;
    }

    .project-box-content h3 {
        font-size: 16px;
        line-height: 1.35;
    }

    .project-box-content p {
        font-size: 11.5px;
    }


    /* Buttons */

    .industrial-cta-buttons {
        align-items: stretch;
        flex-direction: column;
        gap: 10px;
        margin-top: 28px;
    }

    .industrial-btn {
        width: 100%;
        min-height: 50px;

        padding: 0 15px;

        font-size: 12px;
        border-radius: 9px;
    }

    .industrial-contact-link {
        justify-content: center;
        padding: 9px;
        font-size: 12px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .industrial-applications-section {
        padding: 52px 0;
    }

    .industrial-applications-header h2 {
        font-size: 28px;
    }

    .industrial-applications-header p {
        font-size: 12.5px;
    }

    .industry-card {
        padding: 18px 15px;
    }

    .industry-icon {
        width: 44px;
        height: 44px;
        flex-basis: 44px;
        font-size: 16px;
    }

    .industry-card h3 {
        font-size: 14px;
    }

    .industry-card p {
        font-size: 11px;
    }

    .industrial-enquiry-cta {
        padding: 30px 17px;
    }

    .industrial-cta-content h2 {
        font-size: 27px;
    }

    .industrial-cta-content p {
        font-size: 12px;
    }

    .project-box-content h3 {
        font-size: 14px;
    }

}

</style>


    <?php include "includes/footer.php"; ?>