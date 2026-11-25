<?php include "includes/header.php"; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- =========================================================
     COMPANY PROFILE HERO
========================================================= -->

<section class="company-profile-hero">

    <!-- Background Image -->
    <div class="company-hero-bg"></div>

    <!-- Dark Overlay -->
    <div class="company-hero-overlay"></div>

    <!-- Decorative Glow -->
    <div class="company-hero-glow"></div>

    <div class="company-hero-container">

        <!-- Breadcrumb -->
        <nav class="company-breadcrumb" aria-label="Breadcrumb">

            <a href="index.html">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>

            <i class="fa-solid fa-chevron-right breadcrumb-arrow"></i>

            <span class="breadcrumb-current">
                Company Profile
            </span>

        </nav>


        <!-- Center Content -->
        <div class="company-hero-content">

            <!-- Small Label -->
            <div class="company-hero-label">

                <span class="hero-label-line"></span>

                <span>
                    WATTSIN TECHNOLOGIES
                </span>

                <span class="hero-label-line"></span>

            </div>


            <!-- Main Title -->
            <h1>
                Company
                <span>Profile</span>
            </h1>


            <!-- Description -->
            <p>
                Powering Progress. Building Trust.
            </p>


            <!-- Decorative Bottom -->
            <div class="hero-bottom-mark">

                <span></span>

                <i class="fa-solid fa-bolt"></i>

                <span></span>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   COMPANY PROFILE HERO
========================================================= */

.company-profile-hero {
    position: relative;

    width: 100%;
    min-height: 560px;

    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;

    background: #132d45;
}


/* =========================================================
   BACKGROUND IMAGE
========================================================= */

.company-hero-bg {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    background-image: url("https://img.magnific.com/free-vector/vector-banner-illustration-lightning-thunder-abstract-blue-background-with-neon-sparkles-light_528282-302.jpg?semt=ais_hybrid&w=740&q=80");

    background-size: cover;
    background-position: center center;

    transform: scale(1.03);

    animation: companyHeroZoom 12s ease-in-out infinite alternate;
}


/* Slow Zoom */

@keyframes companyHeroZoom {

    from {
        transform: scale(1.03);
    }

    to {
        transform: scale(1.10);
    }

}


/* =========================================================
   OVERLAY
========================================================= */

.company-hero-overlay {
    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            90deg,
            rgba(8,25,40,.88),
            rgba(12,38,58,.68),
            rgba(8,25,40,.82)
        );

    z-index: 1;
}


/* Bottom Fade */

.company-profile-hero::after {
    content: "";

    position: absolute;

    left: 0;
    right: 0;
    bottom: 0;

    height: 130px;

    background:
        linear-gradient(
            to top,
            rgba(8,25,40,.65),
            transparent
        );

    z-index: 2;

    pointer-events: none;
}


/* =========================================================
   ORANGE GLOW
========================================================= */

.company-hero-glow {
    position: absolute;

    width: 420px;
    height: 420px;

    right: -160px;
    top: -180px;

    border-radius: 50%;

    border: 1px solid rgba(245,130,32,.25);

    box-shadow:
        0 0 100px rgba(245,130,32,.08);

    z-index: 2;
}

.company-hero-glow::after {
    content: "";

    position: absolute;

    inset: 55px;

    border-radius: 50%;

    border: 1px solid rgba(245,130,32,.18);
}


/* =========================================================
   CONTAINER
========================================================= */

.company-hero-container {
    position: relative;

    z-index: 5;

    width: min(1350px, 91%);

    min-height: 560px;

    margin: auto;

    display: flex;
    flex-direction: column;

    justify-content: center;
    align-items: center;
}


/* =========================================================
   BREADCRUMB
========================================================= */

.company-breadcrumb {
    position: absolute;

    top: 30px;
    left: 0;

    display: flex;
    align-items: center;

    gap: 11px;

    padding: 11px 17px;

    background: rgba(255,255,255,.08);

    border: 1px solid rgba(255,255,255,.16);

    border-radius: 50px;

    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);

    font-size: 12px;
}


.company-breadcrumb a {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    color: rgba(255,255,255,.78);

    text-decoration: none;

    transition: .3s ease;
}


.company-breadcrumb a:hover {
    color: #f58220;
}


.company-breadcrumb a i {
    color: #f58220;

    font-size: 11px;
}


.breadcrumb-arrow {
    color: rgba(255,255,255,.35);

    font-size: 9px;
}


.breadcrumb-current {
    color: #ffffff;

    font-weight: 600;
}


/* =========================================================
   CENTER HERO CONTENT
========================================================= */

.company-hero-content {
    width: 100%;

    text-align: center;

    margin-top: 35px;
}


/* Label */

.company-hero-label {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 13px;

    margin-bottom: 20px;

    color: #f58220;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 3px;
}


.hero-label-line {
    width: 42px;
    height: 1px;

    background: #f58220;

    display: inline-block;
}


/* =========================================================
   TITLE
========================================================= */

.company-hero-content h1 {
    margin: 0;

    color: #ffffff;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: clamp(58px, 7vw, 100px);

    line-height: .95;

    font-weight: 500;

    letter-spacing: -3px;

    text-shadow:
        0 10px 40px rgba(0,0,0,.25);
}


.company-hero-content h1 span {
    display: block;

    color: #f58220;

    font-style: italic;

    font-weight: 500;

    margin-top: 8px;
}


/* =========================================================
   SUBTITLE
========================================================= */

.company-hero-content p {
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
   BOTTOM MARK
========================================================= */

.hero-bottom-mark {
    display: flex;

    align-items: center;
    justify-content: center;

    gap: 12px;

    margin-top: 30px;
}


.hero-bottom-mark span {
    width: 55px;
    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(245,130,32,.8)
        );
}


.hero-bottom-mark span:last-child {
    background:
        linear-gradient(
            90deg,
            rgba(245,130,32,.8),
            transparent
        );
}


.hero-bottom-mark i {
    color: #f58220;

    font-size: 14px;

    transform: rotate(180deg);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .company-profile-hero {
        min-height: 500px;
    }

    .company-hero-container {
        min-height: 500px;
    }

    .company-hero-content h1 {
        font-size: 70px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .company-profile-hero {
        min-height: 440px;
    }


    .company-hero-bg {
        background-position: 60% center;
    }


    .company-hero-container {
        min-height: 440px;

        width: 91%;
    }


    /* Breadcrumb */

    .company-breadcrumb {
        top: 20px;
        left: 0;

        padding: 9px 13px;

        gap: 8px;

        font-size: 10px;
    }


    .company-breadcrumb a {
        gap: 5px;
    }


    .breadcrumb-arrow {
        font-size: 7px;
    }


    /* Hero Content */

    .company-hero-content {
        margin-top: 35px;
    }


    .company-hero-label {
        gap: 8px;

        font-size: 9px;

        letter-spacing: 1.8px;

        margin-bottom: 17px;
    }


    .hero-label-line {
        width: 25px;
    }


    /* Title */

    .company-hero-content h1 {
        font-size: 52px;

        line-height: 1;

        letter-spacing: -1.5px;
    }


    .company-hero-content h1 span {
        margin-top: 5px;
    }


    /* Subtitle */

    .company-hero-content p {
        margin-top: 20px;

        font-size: 15px;

        padding: 0 20px;
    }


    .hero-bottom-mark {
        margin-top: 23px;
    }


    .hero-bottom-mark span {
        width: 38px;
    }


    .company-profile-hero::after {
        height: 100px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .company-profile-hero {
        min-height: 390px;
    }


    .company-hero-container {
        min-height: 390px;
    }


    .company-breadcrumb {
        top: 17px;

        font-size: 9px;

        padding: 8px 11px;
    }


    .company-hero-label {
        font-size: 8px;

        letter-spacing: 1.4px;
    }


    .hero-label-line {
        width: 18px;
    }


    .company-hero-content h1 {
        font-size: 43px;

        letter-spacing: -1px;
    }


    .company-hero-content p {
        font-size: 13px;
    }


    .hero-bottom-mark span {
        width: 30px;
    }

}

</style>
<!-- =========================================================
     WATTSIN TECHNOLOGIES - COMPANY PROFILE
========================================================= -->

<section class="wattsin-company-profile">

    <div class="company-profile-container">

        <div class="company-profile-grid">

            <!-- ================= LEFT DECORATIVE AREA ================= -->

            <div class="company-profile-side">

                <div class="profile-line"></div>

                <div class="profile-number">
                    01
                </div>

                <div class="profile-side-text">
                    COMPANY<br>
                    <span>PROFILE</span>
                </div>

                <div class="profile-bolt">
                    <i class="fa-solid fa-bolt-lightning"></i>
                </div>

            </div>


            <!-- ================= MAIN CONTENT ================= -->

            <div class="company-profile-content">

                <!-- Label -->

                <div class="company-profile-label">

                    <span class="label-line"></span>

                    <span>
                        COMPANY PROFILE
                    </span>

                    <span class="label-line small"></span>

                </div>


                <!-- Main Heading -->

                <h2>
                    Powering Progress.
                    <em>Building Trust.</em>
                </h2>


                <!-- Decorative Quote -->

                <div class="profile-quote-mark">
                    <i class="fa-solid fa-quote-left"></i>
                </div>


                <!-- Content -->

                <div class="profile-description">

                    <p>
                        <strong>Wattsin Technologies Private Limited</strong>
                        is an electrical engineering and installation company
                        established in <span class="orange-text">2024</span>,
                        building on the successful journey and industry
                        experience of its parent company,
                        <strong>KAIIMERON TECH</strong>, which has been serving
                        the electrical industry since
                        <span class="orange-text">2019</span>.
                    </p>


                    <p>
                        Founded by <strong>Mr. Mahendraprabu</strong> and
                        <strong>Mr. Saravanan</strong>, Wattsin Technologies
                        was established with a vision to deliver reliable,
                        safe, and high-quality electrical engineering solutions
                        for commercial, industrial, and infrastructure projects.
                    </p>


                    <p>
                        Our work covers complete
                        <span class="orange-text italic-highlight">
                            LT (Low Tension) and HT (High Tension)
                        </span>
                        electrical solutions, from initial planning and
                        electrical installation to testing, commissioning,
                        maintenance, and project handover.
                    </p>


                    <p>
                        With a strong focus on
                        <strong>engineering quality, safety, professional
                        workmanship, timely execution, and customer
                        satisfaction</strong>, we work closely with clients,
                        contractors, consultants, and project teams to deliver
                        dependable electrical infrastructure.
                    </p>

                </div>


                <!-- Bottom Highlights -->

                <div class="profile-highlights">

                    <div class="profile-highlight-item">

                        <div class="highlight-icon">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>

                        <div>
                            <span>Established</span>
                            <strong>2024</strong>
                        </div>

                    </div>


                    <div class="profile-highlight-item">

                        <div class="highlight-icon">
                            <i class="fa-solid fa-bolt"></i>
                        </div>

                        <div>
                            <span>Electrical Journey</span>
                            <strong>Since 2019</strong>
                        </div>

                    </div>


                    <div class="profile-highlight-item">

                        <div class="highlight-icon">
                            <i class="fa-solid fa-plug-circle-check"></i>
                        </div>

                        <div>
                            <span>Solutions</span>
                            <strong>LT &amp; HT</strong>
                        </div>

                    </div>

                </div>


                <!-- Bottom Signature -->

                <div class="profile-signature">

                    <div class="signature-line"></div>

                    <span>
                        Engineering Excellence
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   COMPANY PROFILE SECTION
========================================================= */

.wattsin-company-profile {
    position: relative;
    padding: 120px 0;

    background:
        radial-gradient(
            circle at 90% 10%,
            rgba(245,130,32,.06),
            transparent 30%
        ),
        #ffffff;

    overflow: hidden;
}


.company-profile-container {
    width: min(1350px, 91%);
    margin: auto;
}


/* =========================================================
   GRID
========================================================= */

.company-profile-grid {
    display: grid;

    grid-template-columns: 180px 1fr;

    gap: 70px;

    position: relative;
}


/* =========================================================
   LEFT SIDE
========================================================= */

.company-profile-side {
    position: relative;

    min-height: 620px;

    display: flex;
    flex-direction: column;
    align-items: center;

    padding-top: 15px;
}


.profile-line {
    width: 1px;
    height: 270px;

    background: linear-gradient(
        to bottom,
        #f58220,
        rgba(245,130,32,.05)
    );
}


.profile-number {
    margin-top: 22px;

    color: #f58220;

    font-size: 17px;
    font-weight: 800;
    letter-spacing: 2px;
}


.profile-side-text {
    margin-top: 25px;

    color: #c7c7c7;

    font-family: "Playfair Display", Georgia, serif;

    font-size: 25px;
    line-height: 1.05;

    text-align: center;

    letter-spacing: 2px;
}


.profile-side-text span {
    color: #132d45;

    font-style: italic;
}


.profile-bolt {
    position: absolute;

    bottom: 50px;

    width: 68px;
    height: 68px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid rgba(245,130,32,.35);

    border-radius: 50%;

    color: #f58220;

    font-size: 24px;

    background: #fffaf5;

    box-shadow:
        0 12px 30px rgba(245,130,32,.10);
}


/* =========================================================
   MAIN CONTENT
========================================================= */

.company-profile-content {
    position: relative;

    max-width: 930px;

    padding: 5px 0 20px;
}


/* =========================================================
   LABEL
========================================================= */

.company-profile-label {
    display: flex;
    align-items: center;
    gap: 12px;

    margin-bottom: 25px;

    color: #f58220;

    font-size: 12px;
    font-weight: 800;

    letter-spacing: 3px;
}


.label-line {
    width: 38px;
    height: 2px;

    background: #f58220;

    display: inline-block;
}


.label-line.small {
    width: 12px;
}


/* =========================================================
   HEADING
========================================================= */

.company-profile-content h2 {
    margin: 0;

    color: #132d45;

    font-family: "Playfair Display", Georgia, serif;

    font-size: clamp(48px, 5.2vw, 78px);

    line-height: 1.02;

    font-weight: 600;

    letter-spacing: -2.5px;
}


.company-profile-content h2 em {
    display: block;

    color: #f58220;

    font-style: italic;
    font-weight: 500;

    padding-left: 75px;

    position: relative;
}


.company-profile-content h2 em::before {
    content: "";

    position: absolute;

    left: 0;
    top: 50%;

    width: 55px;
    height: 1px;

    background: #f58220;
}


/* =========================================================
   QUOTE MARK
========================================================= */

.profile-quote-mark {
    position: absolute;

    right: 5px;
    top: 150px;

    color: rgba(245,130,32,.10);

    font-size: 90px;

    line-height: 1;

    pointer-events: none;
}


/* =========================================================
   DESCRIPTION
========================================================= */

.profile-description {
    position: relative;

    margin-top: 45px;

    padding-left: 28px;

    border-left: 2px solid #f58220;
}


.profile-description p {
    margin: 0 0 22px;

    color: #6c7175;

    font-size: 16px;

    line-height: 1.9;
}


.profile-description p:last-child {
    margin-bottom: 0;
}


.profile-description strong {
    color: #132d45;

    font-weight: 700;
}


.orange-text {
    color: #f58220;

    font-weight: 700;
}


.italic-highlight {
    font-family: "Playfair Display", Georgia, serif;

    font-size: 19px;

    font-style: italic;
}


/* =========================================================
   HIGHLIGHTS
========================================================= */

.profile-highlights {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 18px;

    margin-top: 48px;
}


.profile-highlight-item {
    display: flex;

    align-items: center;

    gap: 15px;

    padding: 20px 18px;

    background: #fafafa;

    border: 1px solid #eeeeee;

    border-radius: 15px;

    transition: .35s ease;
}


.profile-highlight-item:hover {
    transform: translateY(-5px);

    border-color: rgba(245,130,32,.35);

    box-shadow:
        0 15px 35px rgba(0,0,0,.06);
}


.highlight-icon {
    width: 48px;
    height: 48px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    background: #fff2e7;

    color: #f58220;

    font-size: 18px;
}


.profile-highlight-item span {
    display: block;

    color: #929292;

    font-size: 10px;

    letter-spacing: 1px;

    text-transform: uppercase;

    margin-bottom: 4px;
}


.profile-highlight-item strong {
    display: block;

    color: #132d45;

    font-family: "Playfair Display", Georgia, serif;

    font-size: 19px;

    font-weight: 600;
}


/* =========================================================
   SIGNATURE
========================================================= */

.profile-signature {
    display: flex;

    align-items: center;

    gap: 14px;

    margin-top: 35px;
}


.signature-line {
    width: 50px;
    height: 1px;

    background: #f58220;
}


.profile-signature span {
    color: #9a9a9a;

    font-family: "Playfair Display", Georgia, serif;

    font-size: 14px;

    font-style: italic;

    letter-spacing: .5px;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

    .wattsin-company-profile {
        padding: 90px 0;
    }

    .company-profile-grid {
        grid-template-columns: 120px 1fr;

        gap: 40px;
    }

    .company-profile-side {
        min-height: 600px;
    }

    .company-profile-content h2 {
        font-size: 58px;
    }

    .company-profile-content h2 em {
        padding-left: 55px;
    }

    .company-profile-content h2 em::before {
        width: 40px;
    }

}


/* =========================================================
   TABLET / MOBILE
========================================================= */

@media (max-width: 767px) {

    .wattsin-company-profile {
        padding: 65px 0;
    }

    .company-profile-container {
        width: 91%;
    }


    .company-profile-grid {
        display: block;
    }


    /* Hide desktop side decoration */

    .company-profile-side {
        min-height: auto;

        display: flex;

        flex-direction: row;

        align-items: center;

        gap: 14px;

        margin-bottom: 25px;

        padding: 0;
    }


    .profile-line {
        width: 30px;
        height: 2px;

        background: #f58220;
    }


    .profile-number {
        margin: 0;

        font-size: 13px;
    }


    .profile-side-text {
        margin: 0;

        font-family: "Poppins", sans-serif;

        font-size: 11px;

        line-height: 1;

        letter-spacing: 1px;
    }


    .profile-side-text br {
        display: none;
    }


    .profile-side-text span {
        margin-left: 3px;
    }


    .profile-bolt {
        position: static;

        margin-left: auto;

        width: 42px;
        height: 42px;

        font-size: 15px;
    }


    /* Label */

    .company-profile-label {
        margin-bottom: 18px;

        font-size: 10px;

        letter-spacing: 2px;
    }

    .label-line {
        width: 25px;
    }

    .label-line.small {
        width: 8px;
    }


    /* Heading */

    .company-profile-content h2 {
        font-size: 41px;

        line-height: 1.08;

        letter-spacing: -1.2px;
    }


    .company-profile-content h2 em {
        padding-left: 0;

        margin-top: 4px;
    }


    .company-profile-content h2 em::before {
        display: none;
    }


    /* Quote */

    .profile-quote-mark {
        top: 90px;
        right: 0;

        font-size: 55px;
    }


    /* Description */

    .profile-description {
        margin-top: 30px;

        padding-left: 18px;
    }


    .profile-description p {
        font-size: 14px;

        line-height: 1.8;

        margin-bottom: 18px;
    }


    .italic-highlight {
        font-size: 16px;
    }


    /* Highlights */

    .profile-highlights {
        grid-template-columns: 1fr;

        gap: 10px;

        margin-top: 32px;
    }


    .profile-highlight-item {
        padding: 16px;

        border-radius: 13px;
    }


    .highlight-icon {
        width: 44px;
        height: 44px;

        font-size: 16px;
    }


    .profile-highlight-item strong {
        font-size: 17px;
    }


    /* Signature */

    .profile-signature {
        margin-top: 25px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .wattsin-company-profile {
        padding: 50px 0;
    }

    .company-profile-content h2 {
        font-size: 34px;

        letter-spacing: -.8px;
    }

    .company-profile-content h2 em {
        font-size: 36px;
    }

    .profile-description {
        margin-top: 25px;
        padding-left: 15px;
    }

    .profile-description p {
        font-size: 13px;
        line-height: 1.75;
    }

    .italic-highlight {
        font-size: 15px;
    }

    .profile-quote-mark {
        font-size: 45px;
        top: 82px;
    }

}

</style>

<?php include "includes/FOOTER.php"; ?>