<?php include "includes/header.php"; ?>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Poppins:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
>
<!-- =========================================================
     SERVICES HERO SECTION
========================================================= -->

<section class="services-page-hero">

    <!-- Background Image -->
    <div class="services-hero-bg"></div>

    <!-- Dark Overlay -->
    <div class="services-hero-overlay"></div>

    <!-- Decorative Glow -->
    <div class="services-hero-glow"></div>

    <div class="services-hero-container">

        <!-- ================= BREADCRUMB ================= -->

        <nav class="services-breadcrumb" aria-label="Breadcrumb">

            <a href="index.php">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>

            <i class="fa-solid fa-chevron-right breadcrumb-arrow"></i>

            <span class="breadcrumb-current">
                Services
            </span>

        </nav>


        <!-- ================= HERO CONTENT ================= -->

        <div class="services-hero-content">

            <div class="services-hero-label">

                <span></span>

                <i class="fa-solid fa-bolt-lightning"></i>

                ELECTRICAL ENGINEERING SOLUTIONS

                <span></span>

            </div>


            <h1>
                Our
                <em>Services</em>
            </h1>


            <p>
                Reliable electrical engineering and installation solutions
                for commercial, industrial, and infrastructure projects.
            </p>


            <!-- Decorative Mark -->

            <div class="services-hero-decoration">

                <span></span>

                <i class="fa-solid fa-plug-circle-check"></i>

                <span></span>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   SERVICES HERO
========================================================= */

.services-page-hero {
    position: relative;

    width: 100%;
    height: 560px;

    overflow: hidden;

    background: #132d45;
}


/* =========================================================
   BACKGROUND IMAGE
========================================================= */

.services-hero-bg {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    background-image:
        url("https://media.istockphoto.com/id/1469656864/photo/electrician-engineer-uses-a-multimeter-to-test-the-electrical-installation-and-power-line.jpg?s=612x612&w=0&k=20&c=h70UOpNbJYT5G2oGT-KUeIE3yXwEgsCpr25yR1rnGtU=");

    background-size: cover;
    background-position: center center;

    transform: scale(1.03);

    animation:
        servicesHeroZoom 14s ease-in-out infinite alternate;
}


@keyframes servicesHeroZoom {

    from {
        transform: scale(1.03);
    }

    to {
        transform: scale(1.09);
    }

}


/* =========================================================
   DARK OVERLAY
========================================================= */

.services-hero-overlay {
    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            90deg,
            rgba(7,23,38,.90) 0%,
            rgba(10,35,54,.62) 50%,
            rgba(7,23,38,.88) 100%
        );

    z-index: 1;
}


/* =========================================================
   BOTTOM FADE
========================================================= */

.services-page-hero::after {
    content: "";

    position: absolute;

    left: 0;
    right: 0;
    bottom: 0;

    height: 130px;

    background:
        linear-gradient(
            to top,
            rgba(7,23,38,.72),
            transparent
        );

    z-index: 2;

    pointer-events: none;
}


/* =========================================================
   DECORATIVE GLOW
========================================================= */

.services-hero-glow {
    position: absolute;

    width: 430px;
    height: 430px;

    right: -190px;
    top: -210px;

    border-radius: 50%;

    border: 1px solid rgba(245,130,32,.24);

    box-shadow:
        0 0 100px rgba(245,130,32,.08);

    z-index: 2;
}


.services-hero-glow::after {
    content: "";

    position: absolute;

    inset: 55px;

    border-radius: 50%;

    border: 1px solid rgba(245,130,32,.14);
}


/* =========================================================
   CONTAINER
========================================================= */

.services-hero-container {
    position: relative;

    z-index: 5;

    width: min(1350px, 91%);
    height: 100%;

    margin: auto;

    display: flex;

    align-items: center;
    justify-content: center;
}


/* =========================================================
   BREADCRUMB
========================================================= */

.services-breadcrumb {
    position: absolute;

    top: 30px;
    left: 0;

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 11px 18px;

    background: rgba(255,255,255,.08);

    border: 1px solid rgba(255,255,255,.17);

    border-radius: 50px;

    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);

    box-shadow:
        0 8px 30px rgba(0,0,0,.12);
}


.services-breadcrumb a {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    color: rgba(255,255,255,.74);

    text-decoration: none;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    font-weight: 500;

    transition: .3s ease;
}


.services-breadcrumb a:hover {
    color: #f58220;
}


.services-breadcrumb a i {
    color: #f58220;

    font-size: 11px;
}


.breadcrumb-arrow {
    color: rgba(255,255,255,.32);

    font-size: 9px;
}


.breadcrumb-current {
    color: #ffffff;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    font-weight: 600;
}


/* =========================================================
   HERO CONTENT
========================================================= */

.services-hero-content {
    width: 100%;

    text-align: center;

    margin-top: 35px;
}


/* =========================================================
   LABEL
========================================================= */

.services-hero-label {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 11px;

    margin-bottom: 20px;

    color: #f58220;

    font-family: "Poppins", sans-serif;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 2.8px;
}


.services-hero-label span {
    width: 40px;
    height: 1px;

    background: #f58220;
}


.services-hero-label i {
    font-size: 12px;
}


/* =========================================================
   MAIN TITLE
========================================================= */

.services-hero-content h1 {
    margin: 0;

    color: #ffffff;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: clamp(65px, 7.5vw, 105px);

    line-height: .95;

    font-weight: 500;

    letter-spacing: -3px;

    text-shadow:
        0 10px 40px rgba(0,0,0,.28);
}


.services-hero-content h1 em {
    color: #f58220;

    font-style: italic;

    font-weight: 500;
}


/* =========================================================
   DESCRIPTION
========================================================= */

.services-hero-content p {
    max-width: 680px;

    margin: 25px auto 0;

    color: rgba(255,255,255,.76);

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 19px;

    line-height: 1.7;

    font-style: italic;
}


/* =========================================================
   DECORATION
========================================================= */

.services-hero-decoration {
    display: flex;

    align-items: center;
    justify-content: center;

    gap: 12px;

    margin-top: 28px;
}


.services-hero-decoration span {
    width: 55px;
    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #f58220
        );
}


.services-hero-decoration span:last-child {
    background:
        linear-gradient(
            90deg,
            #f58220,
            transparent
        );
}


.services-hero-decoration i {
    color: #f58220;

    font-size: 14px;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .services-page-hero {
        height: 500px;
    }

    .services-hero-content h1 {
        font-size: 75px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .services-page-hero {
        height: 440px;
    }


    .services-hero-bg {
        background-position: 60% center;
    }


    .services-hero-container {
        width: 91%;
    }


    /* Breadcrumb */

    .services-breadcrumb {
        top: 20px;
        left: 0;

        gap: 8px;

        padding: 9px 13px;

        border-radius: 30px;
    }


    .services-breadcrumb a {
        font-size: 10px;

        gap: 5px;
    }


    .services-breadcrumb a i {
        font-size: 9px;
    }


    .breadcrumb-arrow {
        font-size: 7px;
    }


    .breadcrumb-current {
        font-size: 10px;
    }


    /* Content */

    .services-hero-content {
        margin-top: 35px;
    }


    .services-hero-label {
        gap: 7px;

        margin-bottom: 16px;

        font-size: 8px;

        letter-spacing: 1.6px;
    }


    .services-hero-label span {
        width: 22px;
    }


    .services-hero-label i {
        font-size: 9px;
    }


    /* Title */

    .services-hero-content h1 {
        font-size: 55px;

        line-height: 1;

        letter-spacing: -1.5px;
    }


    /* Description */

    .services-hero-content p {
        margin-top: 18px;

        padding: 0 18px;

        font-size: 14px;

        line-height: 1.65;
    }


    /* Decoration */

    .services-hero-decoration {
        margin-top: 22px;

        gap: 9px;
    }


    .services-hero-decoration span {
        width: 35px;
    }


    .services-hero-decoration i {
        font-size: 12px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .services-page-hero {
        height: 400px;
    }


    .services-breadcrumb {
        top: 17px;

        padding: 8px 11px;

        gap: 7px;
    }


    .services-breadcrumb a {
        font-size: 9px;
    }


    .breadcrumb-current {
        font-size: 9px;
    }


    .services-hero-label {
        font-size: 7.5px;

        letter-spacing: 1.2px;
    }


    .services-hero-label span {
        width: 16px;
    }


    .services-hero-content h1 {
        font-size: 45px;

        letter-spacing: -.8px;
    }


    .services-hero-content p {
        font-size: 12.5px;

        padding: 0 10px;
    }


    .services-hero-decoration span {
        width: 28px;
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
    <!-- <div class="text-center mt-5 pt-3">
      <a href="services.php" class="btn btn-view-all-services px-5 py-3 rounded-pill fw-bold">
        <span>View All Services</span>
        <i class="fa-solid fa-arrow-right-long ms-2"></i>
      </a>
    </div> -->

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


<?php include "includes/footer.php"; ?>