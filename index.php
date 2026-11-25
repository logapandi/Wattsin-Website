<?php include "includes/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wattsin Technologies - Commercial & Industrial Electrical Engineering</title>
    <!-- Google Fonts & Font Awesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

   <style>
        /* ==========================================
           COLOR SYSTEM & GLOBAL STYLES
           ========================================== */
        :root {
            --bg-dark: #050F23;
            --bg-card: #0B1F3A;
            --primary-orange: #F58220;
            --primary-hover: #D96A0C;
            --text-light: #FFFFFF;
            --text-muted: #94A3B8;
            --border-glow: rgba(245, 130, 32, 0.25);
            --transition-smooth: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-light);
            overflow-x: hidden;
        }

        /* ==========================================
           HERO SECTION WITH VIDEO BACKGROUND
           ========================================== */
        .hero-slider-section {
            position: relative;
            width: 100vw;
            height: 100vh;
            min-height: 650px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Background Video Container */
        .bg-video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .bg-video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1.05);
            filter: brightness(0.85);
        }

        /* Premium Dark Gradient Overlay */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, 
                rgba(0, 0, 0, 0) 0%, 
                rgba(11, 31, 58, 0.75) 50%, 
                rgba(0, 0, 0, 0) 100%);
            z-index: 2;
            pointer-events: none;
        }

        /* Centered Container Layout */
        .hero-wrapper {
            position: relative;
            z-index: 5;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 5%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 100%;
        }

        /* Centered Content Panel */
        .center-content {
            width: 100%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            will-change: opacity, transform;
            animation: fadeInScale 1s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
        }

        @keyframes fadeInScale {
            0% {
                opacity: 0;
                transform: translateY(20px) scale(0.98);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .badge-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 20px;
            background: rgba(245, 130, 32, 0.15);
            border: 1px solid var(--primary-orange);
            color: var(--primary-orange);
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 24px;
            box-shadow: 0 4px 20px rgba(245, 130, 32, 0.15);
        }

        .center-content h1 {
            font-size: clamp(34px, 5.2vw, 62px);
            font-weight: 700;
            line-height: 1.15;
            margin-bottom: 20px;
            color: var(--text-light);
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }

        .center-content p {
            font-size: clamp(15px, 1.6vw, 19px);
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 35px;
            max-width: 700px;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            width: 100%;
        }

        .btn-primary-cta {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 16px 38px;
            background: var(--primary-orange);
            color: #fff;
            text-decoration: none;
            border-radius: 40px;
            font-weight: 600;
            font-size: 15px;
            letter-spacing: 0.5px;
            box-shadow: 0 8px 25px rgba(245, 130, 32, 0.4);
            transition: var(--transition-smooth);
        }

        .btn-primary-cta:hover {
            background: var(--primary-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(245, 130, 32, 0.55);
            color: #fff;
        }

        .btn-outline-cta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 32px;
            background: rgba(11, 31, 58, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #fff;
            text-decoration: none;
            border-radius: 40px;
            font-weight: 500;
            font-size: 15px;
            transition: var(--transition-smooth);
        }

        .btn-outline-cta:hover {
            border-color: var(--primary-orange);
            color: var(--primary-orange);
            background: rgba(245, 130, 32, 0.12);
        }

        /* Next Section Block */
        .next-section {
            min-height: 80vh;
            background: #FFFFFF;
            color: #0F172A;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 20px;
            position: relative;
            z-index: 10;
        }

        .next-section h2 {
            font-size: 40px;
            font-weight: 700;
            color: #0B1F3A;
            margin-bottom: 16px;
        }

        .next-section p {
            font-size: 18px;
            color: #4A5568;
            max-width: 650px;
            margin: 0 auto;
        }

        /* ==========================================
           RESPONSIVE MOBILE BREAKPOINTS
           ========================================== */
        @media (max-width: 768px) {
            .hero-slider-section {
                min-height: 100vh;
                height: auto;
                padding: 80px 0;
            }

            .center-content h1 {
                font-size: 30px;
            }

            .center-content p {
                font-size: 15px;
                margin-bottom: 30px;
            }

            .badge-tag {
                font-size: 11px;
                padding: 6px 16px;
                margin-bottom: 18px;
            }

            .hero-actions {
                width: 100%;
                gap: 12px;
                flex-direction: column;
            }

            .btn-primary-cta, .btn-outline-cta {
                width: 100%;
                justify-content: center;
                padding: 14px 24px;
            }
        }
    </style>
</head>
<body>

    <!-- HERO SECTION WITH VIDEO BACKGROUND -->
    <section class="hero-slider-section" id="heroSection">
        
        <!-- Background Video Container -->
        <div class="bg-video-container">

    <!-- Background Image -->
    <img 
        src="assets/images/hero-02.png"
        alt="Commercial Electrical Installation"
        class="bg-fallback-image"
    >

    <!-- Background Video -->
    <video 
        autoplay 
        muted 
        loop 
        playsinline 
        preload="auto"
    >
        <source src="download.mp4" type="video/mp4">
    </video>

</div>

        <!-- Premium Dark Overlay Gradients -->
        <div class="hero-overlay"></div>

        <div class="hero-wrapper">
            <!-- Centered Content Panel -->
            <div class="center-content">
                <div class="badge-tag">
                    <i class="fa-solid fa-bolt"></i> <span>Electrical Engineering</span>
                </div>
                <h1>Industrial & Commercial Electrical Installation</h1>
                <p>Powering enterprise infrastructure with precision HT/LT installations, advanced substations, and smart industrial automation designs.</p>
                <div class="hero-actions">
                    <a href="contact.php" class="btn-primary-cta">
                        <span>Get Free Quote</span> <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="services.php" class="btn-outline-cta">
                        <span>Our Services</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

  

<!---################ About Section (Light Theme / White Background) ################--->
<section class="about-wattsin-section">
    <div class="about-container">
        <!-- Left Side: Magazine Style Multi-Image Layout -->
        <div class="about-gallery">
            <div class="gallery-col col-main">
                <div class="img-wrapper main-img">
                    <img src="assets/images/photo-03.jpeg" alt="Electrical Infrastructure Engineering">
                    <div class="experience-badge">
                        <span class="exp-number">6+</span>
                        <span class="exp-text">Years of Engineering Excellence</span>
                    </div>
                </div>
            </div>
            <div class="gallery-col col-stacked">
                <div class="img-wrapper stacked-top">
                    <img src="assets/images/Commercial Building.webp" alt="HT Substation Installation">
                </div>
                <div class="img-wrapper stacked-bottom">
                    <img src="assets/images/photo-05.jpeg" alt="Control Panel Design">
                </div>
            </div>
        </div>

        <!-- Right Side: Content & Highlights -->
        <div class="about-content">
            <span class="about-subtitle">About Wattsin Technologies</span>
            <h2 class="about-title">
                Engineering Excellence. <span class="title-highlight">Trusted Electrical Solutions.</span>
            </h2>
            <p class="about-description">
                Wattsin Technologies Private Limited is a leading electrical engineering and contracting company specializing in LT & HT electrical installations for commercial, industrial, and infrastructure projects. Backed by years of industry expertise, we deliver safe, reliable, and innovative electrical solutions with an unwavering commitment to quality, precision, and timely project execution.
            </p>

            <div class="highlights-grid">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <div class="highlight-info">
                        <h4>Established Expertise</h4>
                        <p>Delivering high-value engineering projects since 2019.</p>
                    </div>
                </div>

                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <div class="highlight-info">
                        <h4>Complete LT & HT Solutions</h4>
                        <p>Turnkey power distribution and high-voltage execution.</p>
                    </div>
                </div>

                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fa-solid fa-user-gear"></i>
                    </div>
                    <div class="highlight-info">
                        <h4>Certified Engineering Team</h4>
                        <p>Skilled professionals adhering to global standards.</p>
                    </div>
                </div>

                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="highlight-info">
                        <h4>Safety-First Approach</h4>
                        <p>Zero-compromise protocols and IEEE compliance.</p>
                    </div>
                </div>
            </div>

            <div class="about-cta">
                <a href="company-profile.php" class="btn-about">
                    <span>Learn More About Us</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Google Font Import (Poppins & Playfair Display for Italic Emphasis) */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600;1,700&family=Poppins:wght@300;400;500;600;700;800&display=swap');

    /* ==========================================
       LIGHT THEME ABOUT SECTION STYLES
       ========================================== */
    .about-wattsin-section {
        background-color: #FFFFFF;
        color: #1E293B;
        padding: 100px 20px;
        position: relative;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
    }

    .about-container {
        max-width: 1300px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    /* Left Side: Magazine Image Layout */
    .about-gallery {
        display: flex;
        gap: 20px;
        position: relative;
    }

    .gallery-col {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .col-main {
        flex: 1.2;
    }

    .col-stacked {
        flex: 0.8;
    }

    .img-wrapper {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(15, 23, 42, 0.08);
        box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08);
    }

    .img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .img-wrapper:hover img {
        transform: scale(1.06);
    }

    .main-img {
        height: 500px;
    }

    .stacked-top {
        height: 230px;
    }

    .stacked-bottom {
        height: 250px;
    }

    /* Badge on Main Image */
    .experience-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(245, 130, 32, 0.3);
        padding: 16px 20px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .exp-number {
        font-size: 34px;
        font-weight: 800;
        color: #F58220;
        line-height: 1;
    }

    .exp-text {
        font-size: 13px;
        font-weight: 700;
        color: #0F172A;
        line-height: 1.3;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Right Side Content */
    .about-subtitle {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: #F58220;
        background: rgba(245, 130, 32, 0.1);
        padding: 6px 18px;
        border-radius: 20px;
        border: 1px solid rgba(245, 130, 32, 0.25);
        margin-bottom: 18px;
    }

    .about-title {
        font-size: clamp(28px, 3.2vw, 42px);
        font-weight: 700;
        line-height: 1.25;
        color: #0F172A;
        margin-bottom: 20px;
    }

    /* Italic Highlight Font Styling */
    .title-highlight {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-weight: 700;
        color: #F58220;
        display: inline-block;
    }

    .about-description {
        font-size: 15px;
        line-height: 1.75;
        color: #475569;
        margin-bottom: 35px;
    }

    /* Highlights Grid */
    .highlights-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 40px;
    }

    .highlight-card {
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        padding: 18px;
        border-radius: 14px;
        display: flex;
        align-items: flex-start;
        gap: 14px;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .highlight-card:hover {
        background: #FFFFFF;
        border-color: #F58220;
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(245, 130, 32, 0.12);
    }

    .highlight-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: rgba(245, 130, 32, 0.12);
        color: #F58220;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .highlight-info h4 {
        font-size: 14px;
        font-weight: 600;
        color: #0F172A;
        margin: 0 0 4px 0;
    }

    .highlight-info p {
        font-size: 12px;
        color: #64748B;
        margin: 0;
        line-height: 1.45;
    }

    /* CTA Button */
    .btn-about {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 16px 38px;
        background: #F58220;
        color: #FFFFFF;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 600;
        font-size: 15px;
        box-shadow: 0 8px 25px rgba(245, 130, 32, 0.3);
        transition: all 0.3s ease;
    }

    .btn-about:hover {
        background: #D96A0C;
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(245, 130, 32, 0.45);
        color: #FFFFFF;
    }

    /* ==========================================
       RESPONSIVE MOBILE BREAKPOINTS
       ========================================== */
    @media (max-width: 1024px) {
        .about-container {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .main-img {
            height: 380px;
        }

        .stacked-top {
            height: 180px;
        }

        .stacked-bottom {
            height: 180px;
        }
    }

    @media (max-width: 640px) {
        .about-wattsin-section {
            padding: 60px 16px;
        }

        .about-gallery {
            flex-direction: column;
            gap: 12px;
        }

        .main-img {
            height: 280px;
        }

        .col-stacked {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .stacked-top, .stacked-bottom {
            height: 140px;
        }

        .experience-badge {
            padding: 12px 16px;
            bottom: 12px;
            left: 12px;
            right: 12px;
        }

        .exp-number {
            font-size: 26px;
        }

        .exp-text {
            font-size: 11px;
        }

        .about-title {
            font-size: 26px;
        }

        .highlights-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .btn-about {
            width: 100%;
            justify-content: center;
        }
    }
</style>



<!---################ Our Services €#################----->
<!-- Comprehensive Services Section -->
<section class="services-overview-section py-5 position-relative bg-light">
  <div class="container py-lg-4 position-relative z-2">
    
    <!-- Section Header -->
    <div class="text-center mx-auto mb-5" style="max-width: 800px;">
      <span class="badge rounded-pill text-uppercase px-3 py-2 mb-3 service-badge">
        <i class="fa-solid fa-bolt me-1"></i> Our Expertise
      </span>
      <h2 class="display-5 fw-bold text-navy mb-3">
         Our Core Services
      </h2>
      <!-- <p class="lead text-muted">
        At Wattsin Technologies Private Limited, we provide complete LT & HT electrical engineering solutions for commercial, industrial, and infrastructure projects. Our experienced team delivers every project with precision, safety, and the highest quality standards, ensuring reliable power systems that support business growth and operational excellence.
      </p> -->
    </div>

    <!-- 8 Services Cards Grid -->
    <div class="row g-4 justify-content-center">

      <!-- Service 01 -->
      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="service-card-wrapper h-100 rounded-4 overflow-hidden bg-white shadow-sm d-flex flex-column">
          <div class="service-img-box position-relative overflow-hidden">
            <img src="assets/images/Commercial .jpeg" alt="Commercial Building Electrical Works" class="img-fluid w-100 object-fit-cover">
            <span class="service-number-badge">01</span>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <h3 class="h5 fw-bold text-navy mb-2">Commercial Building Electrical Works</h3>
            <p class="text-muted small mb-3">
              We design and execute complete electrical installations for office buildings, shopping malls, hotels, educational institutions, and commercial complexes with reliable and energy-efficient solutions.
            </p>
            <div class="mt-auto">
              <div class="sub-features-list mb-3">
                <span class="feature-tag">Internal & External Wiring</span>
                <span class="feature-tag">Lighting Installation</span>
                <span class="feature-tag">Power Distribution</span>
                <span class="feature-tag">Cable Tray Installation</span>
              </div>
              <a href="service-01.php" class="btn-read-more text-decoration-none fw-semibold">
                Read More <i class="fa-solid fa-arrow-right-long ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 02 -->
      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="service-card-wrapper h-100 rounded-4 overflow-hidden bg-white shadow-sm d-flex flex-column">
          <div class="service-img-box position-relative overflow-hidden">
            <img src="assets/images/Industrial & Factory.webp" alt="Industrial & Factory Electrical Installations" class="img-fluid w-100 object-fit-cover">
            <span class="service-number-badge">02</span>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <h3 class="h5 fw-bold text-navy mb-2">Industrial & Factory Electrical Installations</h3>
            <p class="text-muted small mb-3">
              We provide heavy-duty electrical systems for factories, manufacturing units, warehouses, and production facilities with safe and efficient power distribution.
            </p>
            <div class="mt-auto">
              <div class="sub-features-list mb-3">
                <span class="feature-tag">Machine Power Supply</span>
                <span class="feature-tag">LT & HT Installations</span>
                <span class="feature-tag">Industrial Cabling</span>
                <span class="feature-tag">Electrical Panels</span>
              </div>
              <a href="service-02.php" class="btn-read-more text-decoration-none fw-semibold">
                Read More <i class="fa-solid fa-arrow-right-long ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 03 -->
      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="service-card-wrapper h-100 rounded-4 overflow-hidden bg-white shadow-sm d-flex flex-column">
          <div class="service-img-box position-relative overflow-hidden">
            <img src="https://emobellaengineering.com/wp-content/uploads/2021/12/Design-and-installation-of-electrical-panel-1024x564.jpg" alt="Electrical Panel Installation" class="img-fluid w-100 object-fit-cover">
            <span class="service-number-badge">03</span>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <h3 class="h5 fw-bold text-navy mb-2">Electrical Panel Installation</h3>
            <p class="text-muted small mb-3">
              Professional installation, testing, and commissioning of electrical control panels for safe and efficient power management.
            </p>
            <div class="mt-auto">
              <div class="sub-features-list mb-3">
                <span class="feature-tag">LT Panels</span>
                <span class="feature-tag">HT Panels</span>
                <span class="feature-tag">MCC Panels</span>
                <span class="feature-tag">Distribution Boards</span>
              </div>
              <a href="service-03.php" class="btn-read-more text-decoration-none fw-semibold">
                Read More <i class="fa-solid fa-arrow-right-long ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 04 -->
      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="service-card-wrapper h-100 rounded-4 overflow-hidden bg-white shadow-sm d-flex flex-column">
          <div class="service-img-box position-relative overflow-hidden">
            <img src="assets/images/cablelaying-01.jpeg" alt="Cable Laying & Termination" class="img-fluid w-100 object-fit-cover">
            <span class="service-number-badge">04</span>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <h3 class="h5 fw-bold text-navy mb-2">Cable Laying & Termination</h3>
            <p class="text-muted small mb-3">
              Expert cable laying and termination services using industry-approved practices to ensure long-lasting and reliable electrical connectivity.
            </p>
            <div class="mt-auto">
              <div class="sub-features-list mb-3">
                <span class="feature-tag">Underground Cable Laying</span>
                <span class="feature-tag">Cable Tray Works</span>
                <span class="feature-tag">Cable Glanding</span>
                <span class="feature-tag">Cable Termination</span>
              </div>
              <a href="service-04.php" class="btn-read-more text-decoration-none fw-semibold">
                Read More <i class="fa-solid fa-arrow-right-long ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 05 -->
      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="service-card-wrapper h-100 rounded-4 overflow-hidden bg-white shadow-sm d-flex flex-column">
          <div class="service-img-box position-relative overflow-hidden">
            <img src="assets/images/Lighting & Power Distribution.webp" alt="Lighting & Power Distribution Systems" class="img-fluid w-100 object-fit-cover">
            <span class="service-number-badge">05</span>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <h3 class="h5 fw-bold text-navy mb-2">Lighting & Power Distribution</h3>
            <p class="text-muted small mb-3">
              Complete indoor and outdoor lighting solutions combined with efficient power distribution systems for commercial and industrial facilities.
            </p>
            <div class="mt-auto">
              <div class="sub-features-list mb-3">
                <span class="feature-tag">LED Lighting</span>
                <span class="feature-tag">Street Lighting</span>
                <span class="feature-tag">Emergency Lighting</span>
                <span class="feature-tag">Distribution Networks</span>
              </div>
              <a href="service-05.php" class="btn-read-more text-decoration-none fw-semibold">
                Read More <i class="fa-solid fa-arrow-right-long ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 06 -->
      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="service-card-wrapper h-100 rounded-4 overflow-hidden bg-white shadow-sm d-flex flex-column">
          <div class="service-img-box position-relative overflow-hidden">
            <img src="assets/images/Earthing & Lightning Protection.webp" alt="Earthing & Lightning Protection" class="img-fluid w-100 object-fit-cover">
            <span class="service-number-badge">06</span>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <h3 class="h5 fw-bold text-navy mb-2">Earthing & Lightning Protection</h3>
            <p class="text-muted small mb-3">
              Protect your facilities and equipment with professionally engineered earthing systems and lightning protection solutions.
            </p>
            <div class="mt-auto">
              <div class="sub-features-list mb-3">
                <span class="feature-tag">Earthing Installation</span>
                <span class="feature-tag">Lightning Arrestors</span>
                <span class="feature-tag">Earth Pit Testing</span>
                <span class="feature-tag">Safety Compliance</span>
              </div>
              <a href="service-06.php" class="btn-read-more text-decoration-none fw-semibold">
                Read More <i class="fa-solid fa-arrow-right-long ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 07 -->
      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="service-card-wrapper h-100 rounded-4 overflow-hidden bg-white shadow-sm d-flex flex-column">
          <div class="service-img-box position-relative overflow-hidden">
            <img src="assets/images/Testing, Commissioning & Maintenance.webp" alt="Testing, Commissioning & Maintenance" class="img-fluid w-100 object-fit-cover">
            <span class="service-number-badge">07</span>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <h3 class="h5 fw-bold text-navy mb-2">Testing, Commissioning & Maintenance</h3>
            <p class="text-muted small mb-3">
              We ensure every electrical installation operates safely through comprehensive testing, commissioning, preventive maintenance, and inspections.
            </p>
            <div class="mt-auto">
              <div class="sub-features-list mb-3">
                <span class="feature-tag">Electrical Testing</span>
                <span class="feature-tag">Load Testing</span>
                <span class="feature-tag">Preventive Maintenance</span>
                <span class="feature-tag">AMC Contracts</span>
              </div>
              <a href="service-07.php" class="btn-read-more text-decoration-none fw-semibold">
                Read More <i class="fa-solid fa-arrow-right-long ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 08 -->
      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="service-card-wrapper h-100 rounded-4 overflow-hidden bg-white shadow-sm d-flex flex-column">
          <div class="service-img-box position-relative overflow-hidden">
            <img src="assets/images/Electrical Renovation & Upgradation.webp" alt="Electrical Renovation & Upgradation" class="img-fluid w-100 object-fit-cover">
            <span class="service-number-badge">08</span>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <h3 class="h5 fw-bold text-navy mb-2">Electrical Renovation & Upgradation</h3>
            <p class="text-muted small mb-3">
              Upgrade existing electrical infrastructure with modern technologies to improve efficiency, safety, and future scalability.
            </p>
            <div class="mt-auto">
              <div class="sub-features-list mb-3">
                <span class="feature-tag">System Upgrades</span>
                <span class="feature-tag">Panel Replacement</span>
                <span class="feature-tag">Wiring Renovation</span>
                <span class="feature-tag">Energy-Efficient Solutions</span>
              </div>
              <a href="service-08.php" class="btn-read-more text-decoration-none fw-semibold">
                Read More <i class="fa-solid fa-arrow-right-long ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Bottom Center View All Button -->
    <div class="text-center mt-5 pt-3">
      <a href="services.php" class="btn btn-view-all-services px-5 py-3 rounded-pill fw-bold">
        <span>View All Services</span>
        <i class="fa-solid fa-arrow-right-long ms-2"></i>
      </a>
    </div>

  </div>
</section>

<!-- Custom Styles -->
<style>
  :root {
    --navy-blue: #0B1F3A;
    --brand-orange: #F58220;
    --brand-orange-hover: #D96A0C;
    --card-border: rgba(226, 232, 240, 0.8);
  }

  .text-navy {
    color: var(--navy-blue);
  }

  /* Badge styling */
  .service-badge {
    background-color: rgba(245, 130, 32, 0.12);
    color: var(--brand-orange);
    letter-spacing: 1px;
    font-weight: 600;
  }

  /* Card Container */
  .service-card-wrapper {
    border: 1px solid var(--card-border);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
  }

  .service-card-wrapper:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(11, 31, 58, 0.12) !important;
    border-color: rgba(245, 130, 32, 0.4);
  }

  /* Image Box & Number Overlay */
  .service-img-box {
    height: 200px;
  }

  .service-img-box img {
    height: 100%;
    transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  }

  .service-card-wrapper:hover .service-img-box img {
    transform: scale(1.08);
  }

  .service-number-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--navy-blue);
    color: var(--brand-orange);
    font-weight: 700;
    font-size: 13px;
    padding: 6px 12px;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  }

  /* Included Feature Pills */
  .sub-features-list {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
  }

  .feature-tag {
    font-size: 11px;
    background-color: #F1F5F9;
    color: #475569;
    padding: 4px 8px;
    border-radius: 4px;
    font-weight: 500;
  }

  /* Read More Text Button */
  .btn-read-more {
    color: var(--brand-orange);
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    transition: color 0.3s ease;
  }

  .btn-read-more i {
    transition: transform 0.3s ease;
  }

  .btn-read-more:hover {
    color: var(--navy-blue);
  }

  .btn-read-more:hover i {
    transform: translateX(5px);
  }

  /* View All Button */
  .btn-view-all-services {
    background-color: var(--brand-orange);
    color: #ffffff;
    box-shadow: 0 10px 25px rgba(245, 130, 32, 0.3);
    transition: all 0.3s ease;
    border: none;
    font-size: 16px;
  }

  .btn-view-all-services:hover {
    background-color: var(--brand-orange-hover);
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(245, 130, 32, 0.45);
  }

  /* Mobile Adjustments */
  @media (max-width: 576px) {
    .service-img-box {
      height: 180px;
    }
  }
</style>


<!---################ Gallery Section ################## ---->
         



<!-- ==========================================
     WATTSIN TECHNOLOGIES
     COMPLETED PROJECTS SECTION
=========================================== -->

<section class="wt-completed-section" id="completed-projects">

    <div class="wt-project-container">

        <!-- SECTION HEADER -->
        <div class="wt-project-header">

            <div class="wt-project-heading">

                <span class="wt-section-label">
                    <span class="wt-label-line"></span>
                    OUR EXPERIENCE
                </span>

                <h2>
                    Our Successfully
                    <span>Completed Projects</span>
                </h2>

                <p>
                    Delivering reliable electrical engineering solutions
                    across IT parks, commercial establishments and
                    industrial facilities with quality, safety and precision.
                </p>

            </div>

            <div class="wt-header-badge">
                <i class="fa-solid fa-award"></i>
                <div>
                    <strong>Trusted Execution</strong>
                    <span>Quality. Safety. Excellence.</span>
                </div>
            </div>

        </div>


        <!-- PROJECT STATISTICS -->
        <div class="wt-project-stats">

            <div class="wt-stat-box">
                <div class="wt-stat-icon">
                    <i class="fa-solid fa-building"></i>
                </div>
                <div>
                    <h3>03</h3>
                    <p>IT Projects</p>
                </div>
            </div>

            <div class="wt-stat-box">
                <div class="wt-stat-icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div>
                    <h3>05</h3>
                    <p>Commercial Projects</p>
                </div>
            </div>

            <div class="wt-stat-box">
                <div class="wt-stat-icon">
                    <i class="fa-solid fa-industry"></i>
                </div>
                <div>
                    <h3>04</h3>
                    <p>Industrial Projects</p>
                </div>
            </div>

            <div class="wt-stat-box wt-stat-highlight">
                <div class="wt-stat-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h3>TN & AP</h3>
                    <p>Project Locations</p>
                </div>
            </div>

        </div>


        <!-- PROJECT FILTERS -->
        <div class="wt-project-filter">

            <button class="wt-filter-btn active" data-filter="all">
                All Projects
                <span>12</span>
            </button>

            <button class="wt-filter-btn" data-filter="it">
                IT Projects
                <span>03</span>
            </button>

            <button class="wt-filter-btn" data-filter="commercial">
                Commercial
                <span>05</span>
            </button>

            <button class="wt-filter-btn" data-filter="industrial">
                Industrial
                <span>04</span>
            </button>

        </div>


        <!-- PROJECT CARDS -->
        <div class="wt-project-grid">


            <!-- =================================
                 IT PROJECTS
            ================================== -->

            <!-- RMZ IT PARK -->
            <article class="wt-project-card" data-category="it">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <span class="wt-project-number">01</span>
                </div>

                <span class="wt-project-category">IT PARK</span>

                <h3>RMZ IT Park</h3>

                <p>
                    Electrical engineering and installation works
                    for a major IT infrastructure project.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Chennai
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


            <!-- DLF IT PARK -->
            <article class="wt-project-card" data-category="it">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-city"></i>
                    </div>
                    <span class="wt-project-number">02</span>
                </div>

                <span class="wt-project-category">IT PARK</span>

                <h3>DLF IT Park</h3>

                <p>
                    Electrical infrastructure and power distribution
                    works for a commercial IT facility.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Chennai
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


            <!-- CHENNAI ONE -->
            <article class="wt-project-card" data-category="it">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-building-user"></i>
                    </div>
                    <span class="wt-project-number">03</span>
                </div>

                <span class="wt-project-category">IT PARK</span>

                <h3>Chennai One</h3>

                <p>
                    Electrical installation and engineering
                    works for IT infrastructure.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Chennai
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>



            <!-- =================================
                 COMMERCIAL PROJECTS
            ================================== -->

            <!-- POTHYS & SWARNA MAHAL -->
            <article class="wt-project-card wt-commercial-card" data-category="commercial">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-shop"></i>
                    </div>
                    <span class="wt-project-number">04</span>
                </div>

                <span class="wt-project-category">RETAIL & COMMERCIAL</span>

                <h3>Pothys &amp; Swarna Mahal</h3>

                <p>
                    Electrical works for retail and jewellery
                    establishments across multiple locations.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Coimbatore, Kancheepuram, Padi & Bangalore - Satellite Town
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


            <!-- N PARVATHI SILKS -->
            <article class="wt-project-card wt-commercial-card" data-category="commercial">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <span class="wt-project-number">05</span>
                </div>

                <span class="wt-project-category">RETAIL</span>

                <h3>N Parvathi Silks</h3>

                <p>
                    Commercial electrical installation works
                    for a textile retail establishment.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Theni
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


            <!-- NAVAMANI JEWELLERY -->
            <article class="wt-project-card wt-commercial-card" data-category="commercial">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-gem"></i>
                    </div>
                    <span class="wt-project-number">06</span>
                </div>

                <span class="wt-project-category">JEWELLERY RETAIL</span>

                <h3>Navamani Jewellery</h3>

                <p>
                    Electrical infrastructure and installation
                    works for a jewellery showroom.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Theni
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


            <!-- ARAVIND EYE HOSPITAL -->
            <article class="wt-project-card wt-commercial-card" data-category="commercial">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-hospital"></i>
                    </div>
                    <span class="wt-project-number">07</span>
                </div>

                <span class="wt-project-category">HEALTHCARE</span>

                <h3>Aravind Eye Hospital</h3>

                <p>
                    Electrical installation works for healthcare
                    facilities with a focus on reliable infrastructure.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Tirunelveli & Salem
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


            <!-- SARAVANA HOME CENTRE -->
            <article class="wt-project-card wt-commercial-card" data-category="commercial">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <span class="wt-project-number">08</span>
                </div>

                <span class="wt-project-category">RETAIL & COMMERCIAL</span>

                <h3>Saravana Home Centre</h3>

                <p>
                    Electrical engineering and installation
                    works for a retail commercial establishment.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Porur, Chennai
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>



            <!-- =================================
                 INDUSTRIAL PROJECTS
            ================================== -->

            <!-- HAMILTON -->
            <article class="wt-project-card wt-industrial-card" data-category="industrial">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-industry"></i>
                    </div>
                    <span class="wt-project-number">09</span>
                </div>

                <span class="wt-project-category">FACTORY PROJECT</span>

                <h3>Hamilton</h3>

                <p>
                    Industrial electrical installation and
                    engineering works for factory infrastructure.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Tada, Andhra Pradesh
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


            <!-- MADURA COATS -->
            <article class="wt-project-card wt-industrial-card" data-category="industrial">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <span class="wt-project-number">10</span>
                </div>

                <span class="wt-project-category">INDUSTRIAL PROJECT</span>

                <h3>Madura Coats</h3>

                <p>
                    Electrical engineering and industrial
                    installation works for manufacturing facilities.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Madurai
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


            <!-- BIZZOPPO INTERIORS -->
            <article class="wt-project-card wt-industrial-card" data-category="industrial">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-hammer"></i>
                    </div>
                    <span class="wt-project-number">11</span>
                </div>

                <span class="wt-project-category">INTERIOR PROJECT</span>

                <h3>Bizzoppo Interiors</h3>

                <p>
                    Electrical installation and associated
                    engineering works for interior projects.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Thirukazhukundram
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


            <!-- MIPPLOY COPPER FACTORY -->
            <article class="wt-project-card wt-industrial-card" data-category="industrial">

                <div class="wt-card-top">
                    <div class="wt-card-icon">
                        <i class="fa-solid fa-industry"></i>
                    </div>
                    <span class="wt-project-number">12</span>
                </div>

                <span class="wt-project-category">FACTORY PROJECT</span>

                <h3>Mipp loy Copper Factory</h3>

                <p>
                    Industrial electrical engineering and
                    installation works for copper manufacturing facilities.
                </p>

                <div class="wt-project-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Irungattukottai
                </div>

                <div class="wt-card-bottom">
                    <span>Completed Project</span>
                    <i class="fa-solid fa-check-circle"></i>
                </div>

            </article>


        </div>


        <!-- BOTTOM CTA -->
        <div class="wt-project-cta">

            <div class="wt-cta-content">
                <span>HAVE A PROJECT IN MIND?</span>

                <h3>
                    Let's Build Something
                    <strong>Reliable Together.</strong>
                </h3>

                <p>
                    Connect with our team for professional electrical
                    engineering and installation solutions.
                </p>
            </div>

            <a href="contact.php" class="wt-project-cta-btn">
                Discuss Your Project
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


<!-- ==========================================
     COMPLETED PROJECTS CSS
=========================================== -->

<style>

.wt-completed-section {
    padding: 100px 0;
    background: #f5f7fa;
    font-family: 'Plus Jakarta Sans', sans-serif;
    overflow: hidden;
}

.wt-project-container {
    width: 90%;
    max-width: 1240px;
    margin: auto;
}

/* HEADER */

.wt-project-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
    margin-bottom: 45px;
}

.wt-section-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #F58220;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    margin-bottom: 18px;
}

.wt-label-line {
    width: 35px;
    height: 3px;
    background: #F58220;
    border-radius: 10px;
}

.wt-project-heading h2 {
    font-size: clamp(30px, 4vw, 46px);
    font-weight: 800;
    color: #0B1F3A;
    line-height: 1.2;
    margin: 0 0 16px;
}

.wt-project-heading h2 span {
    color: #F58220;
    display: block;
}

.wt-project-heading p {
    color: #697586;
    font-size: 15px;
    line-height: 1.8;
    max-width: 650px;
    margin: 0;
}

.wt-header-badge {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #fff;
    border: 1px solid #e8edf3;
    padding: 20px 25px;
    border-radius: 12px;
    flex-shrink: 0;
}

.wt-header-badge > i {
    width: 48px;
    height: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff1e5;
    color: #F58220;
    border-radius: 10px;
    font-size: 22px;
}

.wt-header-badge strong {
    display: block;
    color: #0B1F3A;
    font-size: 14px;
    margin-bottom: 5px;
}

.wt-header-badge span {
    display: block;
    color: #8993a2;
    font-size: 11px;
}


/* STATISTICS */

.wt-project-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin-bottom: 40px;
}

.wt-stat-box {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 22px 18px;
    background: #fff;
    border: 1px solid #e8edf3;
    border-radius: 12px;
    transition: .3s ease;
}

.wt-stat-box:hover {
    transform: translateY(-5px);
    border-color: #F58220;
}

.wt-stat-icon {
    width: 48px;
    height: 48px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff2e8;
    color: #F58220;
    font-size: 19px;
    border-radius: 10px;
}

.wt-stat-box h3 {
    font-size: 24px;
    font-weight: 800;
    color: #0B1F3A;
    margin: 0 0 4px;
}

.wt-stat-box p {
    font-size: 12px;
    color: #8993a2;
    margin: 0;
    font-weight: 600;
}

.wt-stat-highlight {
    background: #0B1F3A;
    border-color: #0B1F3A;
}

.wt-stat-highlight h3 {
    color: #fff;
    font-size: 21px;
}

.wt-stat-highlight p {
    color: rgba(255,255,255,.65);
}

.wt-stat-highlight .wt-stat-icon {
    background: rgba(245,130,32,.15);
}


/* FILTER BUTTONS */

.wt-project-filter {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 35px;
}

.wt-filter-btn {
    border: 1px solid #e0e6ee;
    background: #fff;
    color: #526071;
    border-radius: 50px;
    padding: 11px 19px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: .3s ease;
}

.wt-filter-btn span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #f0f2f5;
    color: #526071;
    border-radius: 50px;
    font-size: 10px;
    padding: 3px 7px;
    margin-left: 5px;
}

.wt-filter-btn:hover,
.wt-filter-btn.active {
    background: #0B1F3A;
    color: #fff;
    border-color: #0B1F3A;
}

.wt-filter-btn.active span,
.wt-filter-btn:hover span {
    background: #F58220;
    color: #fff;
}


/* PROJECT GRID */

.wt-project-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
}

.wt-project-card {
    position: relative;
    background: #fff;
    border: 1px solid #e8edf3;
    border-radius: 14px;
    padding: 27px;
    min-width: 0;
    display: flex;
    flex-direction: column;
    transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
    overflow: hidden;
    animation: wtProjectFade .4s ease;
}

.wt-project-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 4px;
    background: #F58220;
    transition: width .35s ease;
}

.wt-project-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 18px 45px rgba(11,31,58,.09);
    border-color: #f3c49e;
}

.wt-project-card:hover::before {
    width: 100%;
}

.wt-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 23px;
}

.wt-card-icon {
    width: 55px;
    height: 55px;
    background: #0B1F3A;
    color: #F58220;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 23px;
    transition: .3s ease;
}

.wt-project-card:hover .wt-card-icon {
    background: #F58220;
    color: #fff;
    transform: rotate(-5deg);
}

.wt-project-number {
    font-size: 28px;
    font-weight: 800;
    color: #e8edf3;
}

.wt-project-category {
    display: inline-block;
    color: #F58220;
    font-size: 10px;
    letter-spacing: 1.4px;
    font-weight: 800;
    margin-bottom: 10px;
}

.wt-project-card h3 {
    color: #0B1F3A;
    font-size: 19px;
    font-weight: 800;
    line-height: 1.4;
    margin: 0 0 12px;
}

.wt-project-card > p {
    color: #778293;
    font-size: 13px;
    line-height: 1.8;
    margin: 0 0 20px;
    flex-grow: 1;
}

.wt-project-location {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    color: #536174;
    font-size: 12px;
    font-weight: 600;
    line-height: 1.6;
    padding: 13px 0;
    border-top: 1px solid #edf0f4;
}

.wt-project-location i {
    color: #F58220;
    margin-top: 3px;
}

.wt-card-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 12px;
    border-top: 1px solid #edf0f4;
}

.wt-card-bottom span {
    font-size: 11px;
    font-weight: 700;
    color: #8993a2;
}

.wt-card-bottom i {
    color: #20a56b;
    font-size: 17px;
}


/* HIDDEN FILTERED CARDS */

.wt-project-card.wt-hidden {
    display: none;
}

@keyframes wtProjectFade {
    from {
        opacity: 0;
        transform: translateY(12px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* CTA */

.wt-project-cta {
    margin-top: 55px;
    padding: 35px 40px;
    background: #0B1F3A;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
    position: relative;
    overflow: hidden;
}

.wt-project-cta::after {
    content: "";
    position: absolute;
    width: 220px;
    height: 220px;
    border: 35px solid rgba(245,130,32,.08);
    border-radius: 50%;
    right: 25%;
    top: -130px;
}

.wt-cta-content {
    position: relative;
    z-index: 1;
}

.wt-cta-content > span {
    font-size: 11px;
    color: #F58220;
    letter-spacing: 2px;
    font-weight: 800;
}

.wt-cta-content h3 {
    font-size: 25px;
    font-weight: 800;
    color: #fff;
    margin: 10px 0;
}

.wt-cta-content h3 strong {
    color: #F58220;
}

.wt-cta-content p {
    color: rgba(255,255,255,.65);
    font-size: 13px;
    line-height: 1.7;
    margin: 0;
}

.wt-project-cta-btn {
    position: relative;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    background: #F58220;
    color: #fff;
    text-decoration: none;
    padding: 15px 23px;
    border-radius: 7px;
    font-size: 13px;
    font-weight: 800;
    white-space: nowrap;
    transition: .3s ease;
}

.wt-project-cta-btn:hover {
    background: #fff;
    color: #0B1F3A;
    transform: translateY(-3px);
}


/* TABLET */

@media (max-width: 991px) {

    .wt-project-container {
        width: 92%;
    }

    .wt-project-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .wt-project-stats {
        grid-template-columns: repeat(2, 1fr);
    }

    .wt-project-header {
        align-items: flex-start;
    }

    .wt-header-badge {
        padding: 15px;
    }

}


/* MOBILE */

@media (max-width: 600px) {

    .wt-completed-section {
        padding: 65px 0;
    }

    .wt-project-header {
        flex-direction: column;
        gap: 20px;
        margin-bottom: 30px;
    }

    .wt-project-heading h2 {
        font-size: 31px;
    }

    .wt-project-heading p {
        font-size: 13px;
    }

    .wt-header-badge {
        width: 100%;
    }

    .wt-project-stats {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-bottom: 30px;
    }

    .wt-stat-box {
        padding: 15px 10px;
        gap: 10px;
    }

    .wt-stat-icon {
        width: 38px;
        height: 38px;
        font-size: 15px;
    }

    .wt-stat-box h3 {
        font-size: 19px;
    }

    .wt-stat-box p {
        font-size: 10px;
    }

    .wt-project-filter {
        justify-content: flex-start;
        gap: 8px;
        margin-bottom: 25px;
    }

    .wt-filter-btn {
        padding: 9px 12px;
        font-size: 11px;
    }

    .wt-project-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .wt-project-card {
        padding: 22px;
    }

    .wt-project-cta {
        padding: 27px 22px;
        flex-direction: column;
        align-items: flex-start;
        margin-top: 35px;
    }

    .wt-cta-content h3 {
        font-size: 22px;
    }

    .wt-project-cta-btn {
        width: 100%;
    }

}

</style>


<!-- ==========================================
     PROJECT CATEGORY FILTER JAVASCRIPT
=========================================== -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const filterButtons = document.querySelectorAll(".wt-filter-btn");
    const projectCards = document.querySelectorAll(".wt-project-card");

    filterButtons.forEach(function (button) {

        button.addEventListener("click", function () {

            const selectedCategory = this.getAttribute("data-filter");

            // Active button
            filterButtons.forEach(function (btn) {
                btn.classList.remove("active");
            });

            this.classList.add("active");

            // Filter cards
            projectCards.forEach(function (card) {

                const cardCategory = card.getAttribute("data-category");

                if (
                    selectedCategory === "all" ||
                    selectedCategory === cardCategory
                ) {
                    card.classList.remove("wt-hidden");
                } else {
                    card.classList.add("wt-hidden");
                }

            });

        });

    });

});

</script>






<!----################# Why choose us section ##################---->
<!-- Why Choose Us Section -->
<section class="why-choose-us py-5 position-relative overflow-hidden">
  <div class="container py-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Side: Content & Features Grid -->
      <div class="col-12 col-lg-7">
        <div class="pe-lg-3">
          <!-- Section Badge & Titles -->
          <div class="d-inline-flex align-items-center gap-2 badge rounded-pill px-3 py-2 mb-3 feature-badge">
            <i class="fa-solid fa-shield-halved"></i>
            <span>Why Choose Wattsin Technologies</span>
          </div>
          
          <h2 class="display-6 fw-bold text-navy mb-3">
            Why Industry Leaders Trust Us
          </h2>
          
          <p class="lead text-muted mb-4">
            We combine technical expertise, advanced engineering practices, and a customer-focused approach to deliver dependable electrical solutions for projects of every scale.
          </p>

          <!-- Feature Cards Grid (2 Columns on Desktop, 1 Column on Mobile) -->
          <div class="row g-3 mb-4">
            <!-- Feature 1 -->
            <div class="col-12 col-sm-6">
              <div class="feature-card p-3 rounded-3 d-flex align-items-center gap-3">
                <div class="check-icon-wrapper flex-shrink-0">
                  <i class="fa-solid fa-check"></i>
                </div>
                <span class="fw-semibold text-navy">Experienced Engineering Team</span>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-12 col-sm-6">
              <div class="feature-card p-3 rounded-3 d-flex align-items-center gap-3">
                <div class="check-icon-wrapper flex-shrink-0">
                  <i class="fa-solid fa-check"></i>
                </div>
                <span class="fw-semibold text-navy">Safety & Quality Assurance</span>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-12 col-sm-6">
              <div class="feature-card p-3 rounded-3 d-flex align-items-center gap-3">
                <div class="check-icon-wrapper flex-shrink-0">
                  <i class="fa-solid fa-check"></i>
                </div>
                <span class="fw-semibold text-navy">On-Time Project Delivery</span>
              </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-12 col-sm-6">
              <div class="feature-card p-3 rounded-3 d-flex align-items-center gap-3">
                <div class="check-icon-wrapper flex-shrink-0">
                  <i class="fa-solid fa-check"></i>
                </div>
                <span class="fw-semibold text-navy">Modern Installation Techniques</span>
              </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-12 col-sm-6">
              <div class="feature-card p-3 rounded-3 d-flex align-items-center gap-3">
                <div class="check-icon-wrapper flex-shrink-0">
                  <i class="fa-solid fa-check"></i>
                </div>
                <span class="fw-semibold text-navy">Reliable Technical Support</span>
              </div>
            </div>

            <!-- Feature 6 -->
            <div class="col-12 col-sm-6">
              <div class="feature-card p-3 rounded-3 d-flex align-items-center gap-3">
                <div class="check-icon-wrapper flex-shrink-0">
                  <i class="fa-solid fa-check"></i>
                </div>
                <span class="fw-semibold text-navy">Transparent Project Management</span>
              </div>
            </div>
          </div>

          <!-- CTA Button -->
          <div class="pt-2">
            <a href="contact.php" class="btn btn-consultation px-4 py-3 rounded-pill fw-bold">
              <span>Request a Consultation</span>
              <i class="fa-solid fa-paper-plane ms-2"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Right Side: Single Image Showcase with Experience Overlay Badge -->
      <div class="col-12 col-lg-5">
        <div class="why-us-image-container position-relative">
          <!-- Main Feature Image -->
          <div class="image-wrapper rounded-4 overflow-hidden shadow-lg">
            <img src="assets/images/home-why-choose-us.jpeg" alt="Wattsin Technologies Engineers" class="img-fluid w-100 object-fit-cover">
          </div>
          
          <!-- Experience/Trust Floating Badge -->
          <div class="floating-experience-card p-3 p-sm-4 rounded-4 shadow-lg text-white d-flex align-items-center gap-3">
            <div class="experience-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-award fs-3"></i>
            </div>
            <div>
              <h3 class="h4 fw-bold mb-0 text-white">100%</h3>
              <p class="small mb-0 text-white-50">Committed to Quality & Safety</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Custom Section CSS -->
<style>
  :root {
    --primary-navy: #0B1F3A;
    --accent-orange: #F58220;
    --accent-orange-hover: #D96A0C;
    --card-bg: #FFFFFF;
    --card-border: rgba(226, 232, 240, 0.9);
    --hover-shadow: 0 10px 25px rgba(11, 31, 58, 0.08);
  }

  .text-navy {
    color: var(--primary-navy);
  }

  .why-choose-us {
    background-color: #F8FAFC;
  }

  /* Badge styling */
  .feature-badge {
    background-color: rgba(245, 130, 32, 0.1);
    color: var(--accent-orange);
    font-weight: 600;
    font-size: 13px;
  }

  /* Feature Item Cards */
  .feature-card {
    background: var(--card-bg);
    border: 1px solid var(--card-border);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
  }

  .feature-card:hover {
    transform: translateY(-3px);
    box-shadow: var(--hover-shadow);
    border-color: rgba(245, 130, 32, 0.4);
  }

  /* Check Icon Badge */
  .check-icon-wrapper {
    width: 28px;
    height: 28px;
    background-color: rgba(245, 130, 32, 0.15);
    color: var(--accent-orange);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    transition: all 0.3s ease;
  }

  .feature-card:hover .check-icon-wrapper {
    background-color: var(--accent-orange);
    color: #ffffff;
  }

  /* CTA Button */
  .btn-consultation {
    background-color: var(--accent-orange);
    color: #ffffff;
    box-shadow: 0 8px 20px rgba(245, 130, 32, 0.3);
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    border: none;
  }

  .btn-consultation:hover {
    background-color: var(--accent-orange-hover);
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 12px 25px rgba(245, 130, 32, 0.45);
  }

  /* Right Side Image & Floating Badge Styling */
  .why-us-image-container {
    padding-bottom: 20px;
  }

  .image-wrapper {
    border: 6px solid #ffffff;
  }

  .image-wrapper img {
    min-height: 380px;
    max-height: 520px;
    transition: transform 0.5s ease;
  }

  .why-us-image-container:hover .image-wrapper img {
    transform: scale(1.03);
  }

  /* Floating Overlay Badge */
  .floating-experience-card {
    position: absolute;
    bottom: 0;
    left: -20px;
    background: var(--primary-navy);
    border: 2px solid var(--accent-orange);
    backdrop-filter: blur(10px);
    z-index: 3;
    max-width: 280px;
  }

  .experience-icon {
    width: 50px;
    height: 50px;
    background: rgba(245, 130, 32, 0.2);
    color: var(--accent-orange);
  }

  /* Responsive Adjustments */
  @media (max-width: 991px) {
    .floating-experience-card {
      left: 15px;
      bottom: -15px;
    }
    .why-us-image-container {
      margin-top: 1.5rem;
      padding-bottom: 30px;
    }
  }

  @media (max-width: 576px) {
    .floating-experience-card {
      position: relative;
      left: 0;
      bottom: 0;
      margin-top: -30px;
      margin-left: auto;
      margin-right: auto;
      width: 90%;
    }
  }
</style>




    <!-- GSAP & ScrollTrigger Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // 8 Electrical & Commercial Work Slides Data
        const slidesData = [
            {
                id: 1,
                badge: "01 / 08 • Site Assessment",
                title: "Turnkey Industrial &<br>Commercial Electrical",
                desc: "Initial load analysis, infrastructure planning, and high-voltage grid integration engineering.",
                img: "assets/images/hero-01.png",
                btnPrimaryText: "Explore Capabilities",
                btnPrimaryLink: "services.php",
                btnSecondaryText: "View Projects",
                btnSecondaryLink: "projects.php"
            },
            {
                id: 2,
                badge: "02 / 08 • High Voltage Systems",
                title: "HT Substation &<br>Transformer Works",
                desc: "33kV/11kV indoor and outdoor substation installation, transformer placement, and grid tie-in.",
                img: "assets/images/hero-02.png",
                btnPrimaryText: "Substation Services",
                btnPrimaryLink: "services.php#substation",
                btnSecondaryText: "Get Quote",
                btnSecondaryLink: "contact.php"
            },
            {
                id: 3,
                badge: "03 / 08 • Cable Infrastructure",
                title: "Heavy Duty Cable<br>Trays & Trenching",
                desc: "Underground HT/LT armored cable laying, structured ladder tray routing, and high-voltage termination.",
                img: "https://images.unsplash.com/photo-1544724569-5f546fd6f2b5?auto=format&fit=crop&w=1600&q=80",
                btnPrimaryText: "Cabling Solutions",
                btnPrimaryLink: "services.php#cabling",
                btnSecondaryText: "Our Portfolio",
                btnSecondaryLink: "projects.php"
            },
            {
                id: 4,
                badge: "04 / 08 • Power Distribution",
                title: "Custom PCC & MCC<br>Panel Engineering",
                desc: "Design and manufacturing of Main Distribution Boards, Capacitor Panels, and APFC Control Units.",
                img: "https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=1600&q=80",
                btnPrimaryText: "Panel Fabrication",
                btnPrimaryLink: "services.php#panels",
                btnSecondaryText: "Technical Specs",
                btnSecondaryLink: "about.php"
            },
            {
                id: 5,
                badge: "05 / 08 • Commercial Fit-Outs",
                title: "IT Parks & High-Rise<br>Building Electrification",
                desc: "Busbar Trunking Systems (BBT), riser mains, clean power UPS distribution, and server room setups.",
                btnPrimaryText: "Commercial Solutions",
                btnPrimaryLink: "services.php#commercial",
                img: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1600&q=80",
                btnSecondaryText: "Case Studies",
                btnSecondaryLink: "projects.php#commercial"
            },
            {
                id: 6,
                badge: "06 / 08 • Smart Lighting",
                title: "Industrial & Emergency<br>Illumination Setup",
                desc: "High-bay LED layouts, automated building facade lighting, and centralized emergency backup power.",
                img: "https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1600&q=80",
                btnPrimaryText: "Lighting Design",
                btnPrimaryLink: "services.php#lighting",
                btnSecondaryText: "Contact Us",
                btnSecondaryLink: "contact.php"
            },
            {
                id: 7,
                badge: "07 / 08 • Safety & Earthing",
                title: "Chemical Earthing &<br>Lightning Protection",
                desc: "IEEE-compliant maintenance-free grid earthing, surge protection devices (SPD), and earth pit audits.",
                img: "https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=1600&q=80",
                btnPrimaryText: "Earthing Solutions",
                btnPrimaryLink: "services.php#earthing",
                btnSecondaryText: "Safety Audit",
                btnSecondaryLink: "contact.php"
            },
            {
                id: 8,
                badge: "08 / 08 • Commissioning",
                title: "Testing, Inspection &<br>Final Energization",
                desc: "Relay calibration, thermography audits, statutory CEIG approvals, and 24/7 AMC maintenance.",
                img: "https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&w=1600&q=80",
                btnPrimaryText: "Get Free Quote",
                btnPrimaryLink: "contact.php",
                btnSecondaryText: "Client Reviews",
                btnSecondaryLink: "clients.php"
            }
        ];

        let currentIndex = 0;
        let isAnimating = false;
        const autoSlideDuration = 6000; // 6 seconds
        let progressTween;

        // DOM Elements
        const bgSlideContainer = document.getElementById("bgSlideContainer");
        const leftContent = document.getElementById("leftContent");
        const badgeText = document.getElementById("badgeText");
        const slideTitle = document.getElementById("slideTitle");
        const slideDesc = document.getElementById("slideDesc");
        const slideCtaPrimary = document.getElementById("slideCtaPrimary");
        const slideCtaSecondary = document.getElementById("slideCtaSecondary");

        const nextPreviewCard = document.getElementById("nextPreviewCard");
        const nextCountEl = document.getElementById("nextCountEl");
        const nextPreviewImg = document.getElementById("nextPreviewImg");
        const nextPreviewTitle = document.getElementById("nextPreviewTitle");
        const nextPreviewDesc = document.getElementById("nextPreviewDesc");

        const progressBarFill = document.getElementById("progressBarFill");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        // 1. Initialize Background Slide Elements
        function initSlides() {
            slidesData.forEach((slide, idx) => {
                const bgDiv = document.createElement("div");
                bgDiv.classList.add("bg-slide");
                if (idx === 0) bgDiv.classList.add("active");
                bgDiv.style.backgroundImage = `url('${slide.img}')`;
                bgSlideContainer.appendChild(bgDiv);
            });

            updateSlideUI(0, false);
            startProgressBar();
        }

        // 2. Update UI Content & Crossfade
        function updateSlideUI(index, animate = true) {
            const currentSlide = slidesData[index];
            const nextIndex = (index + 1) % slidesData.length;
            const nextSlide = slidesData[nextIndex];

            const allBgSlides = document.querySelectorAll(".bg-slide");

            if (animate) {
                isAnimating = true;

                // Animate background image fade
                allBgSlides.forEach((bg, i) => {
                    if (i === index) {
                        bg.classList.add("active");
                    } else {
                        bg.classList.remove("active");
                    }
                });

                // Animate Left Text Content (GSAP Crossfade)
                gsap.to(leftContent, {
                    opacity: 0,
                    y: -20,
                    duration: 0.35,
                    ease: "power2.in",
                    onComplete: () => {
                        badgeText.innerText = currentSlide.badge;
                        slideTitle.innerHTML = currentSlide.title;
                        slideDesc.innerText = currentSlide.desc;
                        
                        slideCtaPrimary.querySelector("span").innerText = currentSlide.btnPrimaryText;
                        slideCtaPrimary.setAttribute("href", currentSlide.btnPrimaryLink);
                        
                        slideCtaSecondary.querySelector("span").innerText = currentSlide.btnSecondaryText;
                        slideCtaSecondary.setAttribute("href", currentSlide.btnSecondaryLink);

                        gsap.fromTo(leftContent, 
                            { opacity: 0, y: 20 },
                            { opacity: 1, y: 0, duration: 0.45, ease: "power2.out", onComplete: () => { isAnimating = false; } }
                        );
                    }
                });

                // Animate Right "Next-Up" Card
                gsap.to(nextPreviewCard, {
                    opacity: 0.5,
                    scale: 0.95,
                    duration: 0.25,
                    onComplete: () => {
                        nextCountEl.innerText = `${String(nextSlide.id).padStart(2, '0')} / ${String(slidesData.length).padStart(2, '0')}`;
                        nextPreviewImg.src = nextSlide.img;
                        nextPreviewTitle.innerHTML = nextSlide.title.replace('<br>', ' ');
                        nextPreviewDesc.innerText = nextSlide.desc;

                        gsap.to(nextPreviewCard, { opacity: 1, scale: 1, duration: 0.35 });
                    }
                });

            } else {
                // Direct Initial Load
                badgeText.innerText = currentSlide.badge;
                slideTitle.innerHTML = currentSlide.title;
                slideDesc.innerText = currentSlide.desc;
                
                slideCtaPrimary.querySelector("span").innerText = currentSlide.btnPrimaryText;
                slideCtaPrimary.setAttribute("href", currentSlide.btnPrimaryLink);
                
                slideCtaSecondary.querySelector("span").innerText = currentSlide.btnSecondaryText;
                slideCtaSecondary.setAttribute("href", currentSlide.btnSecondaryLink);

                nextCountEl.innerText = `${String(nextSlide.id).padStart(2, '0')} / ${String(slidesData.length).padStart(2, '0')}`;
                nextPreviewImg.src = nextSlide.img;
                nextPreviewTitle.innerHTML = nextSlide.title.replace('<br>', ' ');
                nextPreviewDesc.innerText = nextSlide.desc;
            }
        }

        // 3. Progress Bar Animation Controller
        function startProgressBar() {
            if (progressTween) progressTween.kill();
            gsap.set(progressBarFill, { width: "0%" });

            progressTween = gsap.to(progressBarFill, {
                width: "100%",
                duration: autoSlideDuration / 1000,
                ease: "none",
                onComplete: () => {
                    nextSlide();
                }
            });
        }

        // 4. Slide Navigation Functions
        function nextSlide() {
            if (isAnimating) return;
            currentIndex = (currentIndex + 1) % slidesData.length;
            updateSlideUI(currentIndex, true);
            startProgressBar();
        }

        function prevSlide() {
            if (isAnimating) return;
            currentIndex = (currentIndex - 1 + slidesData.length) % slidesData.length;
            updateSlideUI(currentIndex, true);
            startProgressBar();
        }

        // 5. Event Listeners
        nextBtn.addEventListener("click", nextSlide);
        prevBtn.addEventListener("click", prevSlide);
        nextPreviewCard.addEventListener("click", nextSlide);

        // Keyboard Arrow Controls
        document.addEventListener("keydown", (e) => {
            if (e.key === "ArrowRight") nextSlide();
            if (e.key === "ArrowLeft") prevSlide();
        });

        // Initialize on DOM Ready
        document.addEventListener("DOMContentLoaded", initSlides);
    </script>

<?php include "includes/footer.php"; ?>