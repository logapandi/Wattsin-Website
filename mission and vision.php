<?php include "includes/header.php"; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- =========================================================
     MISSION & VISION HERO SECTION
========================================================= -->

<section class="mission-vision-hero">

    <!-- Background Image -->
    <div class="mission-vision-hero-bg"></div>

    <!-- Dark Overlay -->
    <div class="mission-vision-hero-overlay"></div>

    <!-- Decorative Glow -->
    <div class="mission-vision-glow"></div>

    <div class="mission-vision-hero-container">

        <!-- Breadcrumb -->
        <nav class="mission-vision-breadcrumb" aria-label="Breadcrumb">

            <a href="index.html">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>

            <i class="fa-solid fa-chevron-right breadcrumb-arrow"></i>

            <span class="breadcrumb-current">
                Mission &amp; Vision
            </span>

        </nav>


        <!-- Center Content -->
        <div class="mission-vision-hero-content">

            <span class="mission-vision-label">
                <span></span>
                WATTSIN TECHNOLOGIES
                <span></span>
            </span>

            <h1>
                Mission
                <em>&amp; Vision</em>
            </h1>

            <p>
                Driven by Purpose. Defined by Excellence.
            </p>

            <div class="mission-vision-decoration">

                <span></span>

                <i class="fa-solid fa-bolt-lightning"></i>

                <span></span>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   MISSION & VISION HERO
========================================================= */

.mission-vision-hero {
    position: relative;

    width: 100%;
    height: 560px;

    overflow: hidden;

    background: #132d45;
}


/* =========================================================
   BACKGROUND
========================================================= */

.mission-vision-hero-bg {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    background-image:
        url("https://img.magnific.com/free-vector/vector-banner-illustration-lightning-thunder-abstract-blue-background-with-neon-sparkles-light_528282-302.jpg?semt=ais_hybrid&w=740&q=80");

    background-size: cover;
    background-position: center center;

    transform: scale(1.03);

    animation:
        missionVisionZoom 14s ease-in-out infinite alternate;
}


@keyframes missionVisionZoom {

    from {
        transform: scale(1.03);
    }

    to {
        transform: scale(1.09);
    }

}


/* =========================================================
   OVERLAY
========================================================= */

.mission-vision-hero-overlay {
    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            90deg,
            rgba(7,23,38,.90),
            rgba(11,35,53,.62),
            rgba(7,23,38,.88)
        );

    z-index: 1;
}


/* Bottom Fade */

.mission-vision-hero::after {
    content: "";

    position: absolute;

    left: 0;
    right: 0;
    bottom: 0;

    height: 120px;

    background:
        linear-gradient(
            to top,
            rgba(7,23,38,.7),
            transparent
        );

    z-index: 2;
}


/* =========================================================
   DECORATIVE CIRCLE
========================================================= */

.mission-vision-glow {
    position: absolute;

    width: 430px;
    height: 430px;

    right: -190px;
    top: -210px;

    border-radius: 50%;

    border: 1px solid rgba(245,130,32,.25);

    box-shadow:
        0 0 100px rgba(245,130,32,.08);

    z-index: 2;
}


.mission-vision-glow::after {
    content: "";

    position: absolute;

    inset: 55px;

    border-radius: 50%;

    border: 1px solid rgba(245,130,32,.15);
}


/* =========================================================
   CONTAINER
========================================================= */

.mission-vision-hero-container {
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

.mission-vision-breadcrumb {
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
}


.mission-vision-breadcrumb a {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    color: rgba(255,255,255,.72);

    text-decoration: none;

    font-family: "Poppins", sans-serif;

    font-size: 12px;

    transition: .3s ease;
}


.mission-vision-breadcrumb a:hover {
    color: #f58220;
}


.mission-vision-breadcrumb a i {
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
   CENTER CONTENT
========================================================= */

.mission-vision-hero-content {
    width: 100%;

    text-align: center;

    margin-top: 35px;
}


/* Label */

.mission-vision-label {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 12px;

    margin-bottom: 20px;

    color: #f58220;

    font-family: "Poppins", sans-serif;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 3px;
}


.mission-vision-label span {
    width: 38px;
    height: 1px;

    background: #f58220;
}


/* =========================================================
   MAIN TITLE
========================================================= */

.mission-vision-hero-content h1 {
    margin: 0;

    color: #ffffff;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: clamp(60px, 7vw, 100px);

    line-height: .95;

    font-weight: 500;

    letter-spacing: -3px;

    text-shadow:
        0 10px 40px rgba(0,0,0,.28);
}


.mission-vision-hero-content h1 em {
    display: block;

    margin-top: 8px;

    color: #f58220;

    font-style: italic;

    font-weight: 500;
}


/* =========================================================
   SUBTITLE
========================================================= */

.mission-vision-hero-content p {
    margin: 25px auto 0;

    color: rgba(255,255,255,.78);

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 20px;

    font-style: italic;

    letter-spacing: .5px;
}


/* =========================================================
   DECORATION
========================================================= */

.mission-vision-decoration {
    display: flex;

    align-items: center;
    justify-content: center;

    gap: 12px;

    margin-top: 28px;
}


.mission-vision-decoration span {
    width: 55px;
    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #f58220
        );
}


.mission-vision-decoration span:last-child {
    background:
        linear-gradient(
            90deg,
            #f58220,
            transparent
        );
}


.mission-vision-decoration i {
    color: #f58220;

    font-size: 14px;

    transform: rotate(180deg);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .mission-vision-hero {
        height: 500px;
    }

    .mission-vision-hero-content h1 {
        font-size: 72px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .mission-vision-hero {
        height: 440px;
    }


    .mission-vision-hero-bg {
        background-position: 60% center;
    }


    .mission-vision-hero-container {
        width: 91%;
    }


    /* Breadcrumb */

    .mission-vision-breadcrumb {
        top: 20px;
        left: 0;

        gap: 8px;

        padding: 9px 13px;

        border-radius: 30px;
    }


    .mission-vision-breadcrumb a {
        font-size: 10px;

        gap: 5px;
    }


    .mission-vision-breadcrumb a i {
        font-size: 9px;
    }


    .breadcrumb-arrow {
        font-size: 7px;
    }


    .breadcrumb-current {
        font-size: 10px;
    }


    /* Center Content */

    .mission-vision-hero-content {
        margin-top: 35px;
    }


    .mission-vision-label {
        gap: 8px;

        margin-bottom: 16px;

        font-size: 8px;

        letter-spacing: 1.8px;
    }


    .mission-vision-label span {
        width: 23px;
    }


    /* Title */

    .mission-vision-hero-content h1 {
        font-size: 53px;

        line-height: 1;

        letter-spacing: -1.5px;
    }


    .mission-vision-hero-content h1 em {
        margin-top: 5px;
    }


    /* Subtitle */

    .mission-vision-hero-content p {
        margin-top: 18px;

        padding: 0 20px;

        font-size: 15px;
    }


    /* Decoration */

    .mission-vision-decoration {
        margin-top: 22px;

        gap: 9px;
    }


    .mission-vision-decoration span {
        width: 35px;
    }


    .mission-vision-decoration i {
        font-size: 12px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .mission-vision-hero {
        height: 400px;
    }


    .mission-vision-breadcrumb {
        top: 17px;

        padding: 8px 11px;

        gap: 7px;
    }


    .mission-vision-breadcrumb a {
        font-size: 9px;
    }


    .breadcrumb-current {
        font-size: 9px;
    }


    .mission-vision-label {
        font-size: 7.5px;

        letter-spacing: 1.4px;
    }


    .mission-vision-label span {
        width: 18px;
    }


    .mission-vision-hero-content h1 {
        font-size: 44px;

        letter-spacing: -.8px;
    }


    .mission-vision-hero-content p {
        font-size: 13px;
    }


    .mission-vision-decoration span {
        width: 28px;
    }

}

</style>

<!-- =========================================================
     MISSION • VISION • CORE VALUES
========================================================= -->

<section class="wattsin-mvv-section">

    <div class="wattsin-mvv-container">

        <!-- ================= TOP HEADING ================= -->

        <div class="wattsin-mvv-heading">

            <span class="mvv-eyebrow">
                <i class="fa-solid fa-bolt-lightning"></i>
                OUR PURPOSE
            </span>

            <h2>
                Driven by Purpose.
                <em>Defined by Excellence.</em>
            </h2>

        </div>


        <!-- ================= MISSION & VISION ================= -->

        <div class="mvv-main-grid">

            <!-- Mission -->

            <article class="mvv-card mission-card">

                <div class="mvv-card-top">

                    <div class="mvv-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>

                    <span class="mvv-number">
                        01
                    </span>

                </div>

                <div class="mvv-card-title">

                    <span>OUR MISSION</span>

                    <h3>
                        Our Mission
                    </h3>

                </div>

                <div class="mvv-divider"></div>

                <p>
                    To deliver safe, reliable, and high-quality electrical
                    solutions that exceed client expectations while maintaining
                    the highest standards of engineering, professionalism,
                    and integrity.
                </p>

                <div class="mvv-corner-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

            </article>


            <!-- Vision -->

            <article class="mvv-card vision-card">

                <div class="mvv-card-top">

                    <div class="mvv-icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>

                    <span class="mvv-number">
                        02
                    </span>

                </div>

                <div class="mvv-card-title">

                    <span>OUR VISION</span>

                    <h3>
                        Our Vision
                    </h3>

                </div>

                <div class="mvv-divider"></div>

                <p>
                    To become one of India's leading electrical engineering
                    and contracting companies, recognized for technical
                    excellence, innovation, timely project delivery, and
                    long-term customer relationships.
                </p>

                <div class="mvv-corner-icon">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>

            </article>

        </div>


        <!-- ================= CORE VALUES ================= -->

        <div class="core-values-wrapper">

            <div class="core-values-heading">

                <span>
                    OUR PRINCIPLES
                </span>

                <h2>
                    Our <em>Core Values</em>
                </h2>

                <p>
                    The principles that guide our work, decisions,
                    relationships, and commitment to every project.
                </p>

            </div>


            <div class="core-values-grid">

                <!-- 01 -->
                <div class="core-value-card">

                    <div class="core-value-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div class="core-value-content">

                        <span>01</span>

                        <h3>
                            Safety First
                        </h3>

                    </div>

                </div>


                <!-- 02 -->
                <div class="core-value-card">

                    <div class="core-value-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>

                    <div class="core-value-content">

                        <span>02</span>

                        <h3>
                            Quality Without Compromise
                        </h3>

                    </div>

                </div>


                <!-- 03 -->
                <div class="core-value-card">

                    <div class="core-value-icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>

                    <div class="core-value-content">

                        <span>03</span>

                        <h3>
                            Integrity &amp; Transparency
                        </h3>

                    </div>

                </div>


                <!-- 04 -->
                <div class="core-value-card">

                    <div class="core-value-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>

                    <div class="core-value-content">

                        <span>04</span>

                        <h3>
                            Innovation &amp; Continuous Improvement
                        </h3>

                    </div>

                </div>


                <!-- 05 -->
                <div class="core-value-card">

                    <div class="core-value-icon">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <div class="core-value-content">

                        <span>05</span>

                        <h3>
                            Customer Satisfaction
                        </h3>

                    </div>

                </div>


                <!-- 06 -->
                <div class="core-value-card">

                    <div class="core-value-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>

                    <div class="core-value-content">

                        <span>06</span>

                        <h3>
                            Teamwork &amp; Professional Excellence
                        </h3>

                    </div>

                </div>

            </div>

        </div>


        <!-- ================= CLOSING STATEMENT ================= -->

        <div class="mvv-closing">

            <div class="closing-quote">
                <i class="fa-solid fa-quote-left"></i>
            </div>

            <div class="closing-content">

                <h2>
                    Powering Progress.
                    <em>Building Trust.</em>
                </h2>

                <p>
                    Wattsin Technologies Private Limited is committed to
                    delivering dependable electrical solutions that power
                    businesses, industries, and communities with efficiency,
                    safety, and excellence.
                </p>

            </div>

            <div class="closing-bolt">
                <i class="fa-solid fa-bolt-lightning"></i>
            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   WATTSIN MISSION VISION VALUES
========================================================= */

.wattsin-mvv-section {
    position: relative;
    padding: 115px 0;

    background:
        radial-gradient(
            circle at 10% 20%,
            rgba(245,130,32,.045),
            transparent 28%
        ),
        #f8f9fa;

    overflow: hidden;
}


.wattsin-mvv-container {
    position: relative;
    z-index: 2;

    width: min(1350px, 91%);
    margin: auto;
}


/* =========================================================
   HEADING
========================================================= */

.wattsin-mvv-heading {
    text-align: center;

    max-width: 850px;

    margin: 0 auto 65px;
}


.mvv-eyebrow {
    display: inline-flex;

    align-items: center;
    gap: 8px;

    margin-bottom: 17px;

    color: #f58220;

    font-size: 11px;
    font-weight: 800;

    letter-spacing: 2.5px;
}


.mvv-eyebrow i {
    font-size: 13px;
}


.wattsin-mvv-heading h2 {
    margin: 0;

    color: #132d45;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: clamp(42px, 5vw, 68px);

    line-height: 1.05;

    font-weight: 500;

    letter-spacing: -1.8px;
}


.wattsin-mvv-heading h2 em {
    display: block;

    color: #f58220;

    font-style: italic;

    font-weight: 500;
}


/* =========================================================
   MISSION / VISION GRID
========================================================= */

.mvv-main-grid {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 25px;
}


/* =========================================================
   MVV CARD
========================================================= */

.mvv-card {
    position: relative;

    min-height: 390px;

    padding: 38px 38px 35px;

    background: #ffffff;

    border: 1px solid #e5e7e9;

    border-radius: 25px;

    overflow: hidden;

    transition:
        transform .4s ease,
        box-shadow .4s ease,
        border-color .4s ease;
}


.mvv-card:hover {
    transform: translateY(-8px);

    border-color: rgba(245,130,32,.4);

    box-shadow:
        0 25px 60px rgba(19,45,69,.10);
}


/* Orange Top Line */

.mvv-card::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;
    height: 4px;

    background: #f58220;

    transform: scaleX(0);

    transform-origin: left;

    transition: transform .45s ease;
}


.mvv-card:hover::before {
    transform: scaleX(1);
}


/* =========================================================
   CARD TOP
========================================================= */

.mvv-card-top {
    display: flex;

    align-items: center;
    justify-content: space-between;
}


.mvv-icon {
    width: 67px;
    height: 67px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 18px;

    background: #fff3e8;

    color: #f58220;

    font-size: 25px;

    transition: .4s ease;
}


.mvv-card:hover .mvv-icon {
    background: #f58220;

    color: #ffffff;

    transform: scale(1.06) rotate(-3deg);
}


.mvv-number {
    color: #d8dadd;

    font-size: 34px;

    font-weight: 800;

    line-height: 1;
}


/* =========================================================
   CARD TITLE
========================================================= */

.mvv-card-title {
    margin-top: 35px;
}


.mvv-card-title > span {
    color: #f58220;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 2px;
}


.mvv-card-title h3 {
    margin: 7px 0 0;

    color: #132d45;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 35px;

    font-weight: 600;

    font-style: italic;
}


/* Divider */

.mvv-divider {
    width: 55px;
    height: 2px;

    margin: 20px 0;

    background: #f58220;
}


.mvv-card p {
    position: relative;
    z-index: 2;

    max-width: 650px;

    margin: 0;

    color: #6f7478;

    font-size: 15px;

    line-height: 1.85;
}


/* Corner Icon */

.mvv-corner-icon {
    position: absolute;

    right: -20px;
    bottom: -25px;

    width: 150px;
    height: 150px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: rgba(245,130,32,.045);

    color: rgba(245,130,32,.12);

    font-size: 65px;

    transform: rotate(-15deg);

    transition: .5s ease;
}


.mvv-card:hover .mvv-corner-icon {
    transform:
        rotate(0deg)
        scale(1.08);

    color: rgba(245,130,32,.17);
}


/* =========================================================
   CORE VALUES
========================================================= */

.core-values-wrapper {
    margin-top: 90px;
}


.core-values-heading {
    text-align: center;

    max-width: 700px;

    margin: 0 auto 42px;
}


.core-values-heading > span {
    color: #f58220;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 2.5px;
}


.core-values-heading h2 {
    margin: 9px 0 12px;

    color: #132d45;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 45px;

    font-weight: 600;
}


.core-values-heading h2 em {
    color: #f58220;

    font-style: italic;
}


.core-values-heading p {
    margin: 0;

    color: #7b8084;

    font-size: 14px;

    line-height: 1.7;
}


/* =========================================================
   VALUES GRID
========================================================= */

.core-values-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 15px;
}


/* Value Card */

.core-value-card {
    display: flex;

    align-items: center;

    gap: 17px;

    min-height: 110px;

    padding: 20px 22px;

    background: #ffffff;

    border: 1px solid #e7e8e9;

    border-radius: 17px;

    transition: .35s ease;
}


.core-value-card:hover {
    transform: translateY(-5px);

    border-color: rgba(245,130,32,.4);

    box-shadow:
        0 15px 35px rgba(19,45,69,.08);
}


/* Value Icon */

.core-value-icon {
    width: 52px;
    height: 52px;

    flex: 0 0 52px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 14px;

    background: #132d45;

    color: #f58220;

    font-size: 18px;

    transition: .35s ease;
}


.core-value-card:hover .core-value-icon {
    background: #f58220;

    color: #ffffff;

    transform: rotate(-5deg);
}


/* Value Text */

.core-value-content > span {
    display: block;

    margin-bottom: 4px;

    color: #b8b8b8;

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 1.5px;
}


.core-value-content h3 {
    margin: 0;

    color: #132d45;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 18px;

    line-height: 1.35;

    font-weight: 600;
}


/* =========================================================
   CLOSING STATEMENT
========================================================= */

.mvv-closing {
    position: relative;

    display: flex;

    align-items: center;

    gap: 30px;

    margin-top: 80px;

    padding: 50px 55px;

    background: #132d45;

    border-radius: 27px;

    overflow: hidden;

    box-shadow:
        0 25px 65px rgba(19,45,69,.16);
}


/* Decorative Circles */

.mvv-closing::before {
    content: "";

    position: absolute;

    width: 360px;
    height: 360px;

    right: -180px;
    top: -180px;

    border-radius: 50%;

    border: 1px solid rgba(245,130,32,.2);
}


.mvv-closing::after {
    content: "";

    position: absolute;

    width: 220px;
    height: 220px;

    left: -120px;
    bottom: -120px;

    border-radius: 50%;

    background: rgba(255,255,255,.035);
}


/* Quote */

.closing-quote {
    position: relative;
    z-index: 2;

    width: 68px;
    height: 68px;

    flex: 0 0 68px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 18px;

    background: rgba(245,130,32,.12);

    color: #f58220;

    font-size: 25px;
}


/* Content */

.closing-content {
    position: relative;
    z-index: 2;

    flex: 1;
}


.closing-content h2 {
    margin: 0;

    color: #ffffff;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 39px;

    line-height: 1.1;

    font-weight: 500;
}


.closing-content h2 em {
    color: #f58220;

    font-style: italic;
}


.closing-content p {
    max-width: 800px;

    margin: 15px 0 0;

    color: rgba(255,255,255,.67);

    font-size: 14px;

    line-height: 1.8;
}


/* Bolt */

.closing-bolt {
    position: relative;
    z-index: 2;

    width: 70px;
    height: 70px;

    flex: 0 0 70px;

    display: flex;

    align-items: center;
    justify-content: center;

    border: 1px solid rgba(245,130,32,.35);

    border-radius: 50%;

    color: #f58220;

    font-size: 24px;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1050px) {

    .wattsin-mvv-section {
        padding: 90px 0;
    }

    .mvv-main-grid {
        gap: 18px;
    }

    .mvv-card {
        padding: 30px;
    }

    .core-values-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .mvv-closing {
        padding: 40px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .wattsin-mvv-section {
        padding: 65px 0;
    }

    .wattsin-mvv-container {
        width: 91%;
    }


    /* Main Heading */

    .wattsin-mvv-heading {
        margin-bottom: 38px;
    }

    .mvv-eyebrow {
        font-size: 9px;

        letter-spacing: 1.7px;
    }

    .wattsin-mvv-heading h2 {
        font-size: 38px;

        line-height: 1.08;

        letter-spacing: -.8px;
    }


    /* Mission / Vision */

    .mvv-main-grid {
        grid-template-columns: 1fr;

        gap: 14px;
    }

    .mvv-card {
        min-height: auto;

        padding: 27px 22px;

        border-radius: 20px;
    }

    .mvv-icon {
        width: 56px;
        height: 56px;

        border-radius: 15px;

        font-size: 21px;
    }

    .mvv-number {
        font-size: 27px;
    }

    .mvv-card-title {
        margin-top: 25px;
    }

    .mvv-card-title > span {
        font-size: 9px;
    }

    .mvv-card-title h3 {
        font-size: 29px;
    }

    .mvv-card p {
        font-size: 13px;

        line-height: 1.75;
    }

    .mvv-corner-icon {
        width: 110px;
        height: 110px;

        font-size: 45px;
    }


    /* Core Values */

    .core-values-wrapper {
        margin-top: 55px;
    }

    .core-values-heading {
        margin-bottom: 28px;
    }

    .core-values-heading h2 {
        font-size: 35px;
    }

    .core-values-heading p {
        font-size: 12.5px;
    }

    .core-values-grid {
        grid-template-columns: 1fr;

        gap: 10px;
    }

    .core-value-card {
        min-height: 85px;

        padding: 15px;

        border-radius: 14px;

        gap: 14px;
    }

    .core-value-icon {
        width: 46px;
        height: 46px;

        flex-basis: 46px;

        border-radius: 12px;

        font-size: 16px;
    }

    .core-value-content h3 {
        font-size: 16px;
    }


    /* Closing */

    .mvv-closing {
        flex-direction: column;

        align-items: flex-start;

        gap: 20px;

        margin-top: 55px;

        padding: 30px 22px;

        border-radius: 20px;
    }

    .closing-quote {
        width: 52px;
        height: 52px;

        flex-basis: 52px;

        border-radius: 14px;

        font-size: 19px;
    }

    .closing-content h2 {
        font-size: 31px;
    }

    .closing-content p {
        font-size: 12.5px;

        line-height: 1.7;
    }

    .closing-bolt {
        position: absolute;

        right: 20px;
        top: 22px;

        width: 48px;
        height: 48px;

        flex-basis: 48px;

        font-size: 17px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .wattsin-mvv-section {
        padding: 50px 0;
    }

    .wattsin-mvv-heading h2 {
        font-size: 32px;
    }

    .mvv-card {
        padding: 23px 18px;
    }

    .mvv-card-title h3 {
        font-size: 26px;
    }

    .mvv-card p {
        font-size: 12.5px;
    }

    .core-values-heading h2 {
        font-size: 31px;
    }

    .core-value-content h3 {
        font-size: 14.5px;
    }

    .mvv-closing {
        padding: 25px 18px;
    }

    .closing-content h2 {
        font-size: 27px;
    }

    .closing-content p {
        font-size: 12px;
    }

}

</style>

<?php include "includes/FOOTER.php"; ?>