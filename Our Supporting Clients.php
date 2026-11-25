<?php include "includes/header.php"; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- =========================================================
     OUR SUPPORTING CLIENTS
========================================================= -->

<section class="supporting-clients-section">

    <div class="supporting-clients-container">

        <!-- ================= HEADER ================= -->

        <div class="supporting-clients-header">

            <span class="clients-eyebrow">
                <i class="fa-solid fa-handshake"></i>
                OUR SUPPORTING CLIENTS
            </span>

            <h2>
                Building Strong
                <em>Partnerships</em>
            </h2>

            <p>
                We are proud to work alongside trusted organizations and
                project partners who have supported our growth and success.
            </p>

        </div>


        <!-- ================= CLIENT GRID ================= -->

        <div class="supporting-clients-grid">

            <!-- Client 01 -->
            <div class="supporting-client-card">

                <div class="client-card-number">01</div>

                <div class="client-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

                <div class="client-content">
                    <h3>Kevin Electricals</h3>
                    <span>Electrical Partner</span>
                </div>

                <div class="client-arrow">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>

            </div>


            <!-- Client 02 -->
            <div class="supporting-client-card">

                <div class="client-card-number">02</div>

                <div class="client-icon">
                    <i class="fa-solid fa-couch"></i>
                </div>

                <div class="client-content">
                    <h3>Cloud Interiors</h3>
                    <span>Project Partner</span>
                </div>

                <div class="client-arrow">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>

            </div>


            <!-- Client 03 -->
            <div class="supporting-client-card">

                <div class="client-card-number">03</div>

                <div class="client-icon">
                    <i class="fa-solid fa-microchip"></i>
                </div>

                <div class="client-content">
                    <h3>Global Technics Solutions</h3>
                    <span>Technical Partner</span>
                </div>

                <div class="client-arrow">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>

            </div>


            <!-- Client 04 -->
            <div class="supporting-client-card">

                <div class="client-card-number">04</div>

                <div class="client-icon">
                    <i class="fa-solid fa-sliders"></i>
                </div>

                <div class="client-content">
                    <h3>JSA Control System</h3>
                    <span>Control Systems Partner</span>
                </div>

                <div class="client-arrow">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>

            </div>


            <!-- Client 05 -->
            <div class="supporting-client-card">

                <div class="client-card-number">05</div>

                <div class="client-icon">
                    <i class="fa-solid fa-gears"></i>
                </div>

                <div class="client-content">
                    <h3>Techsher Engineers</h3>
                    <span>Engineering Partner</span>
                </div>

                <div class="client-arrow">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>

            </div>


            <!-- Client 06 -->
            <div class="supporting-client-card">

                <div class="client-card-number">06</div>

                <div class="client-icon">
                    <i class="fa-solid fa-building"></i>
                </div>

                <div class="client-content">
                    <h3>Space Tone Interiors &amp; Infrastructure</h3>
                    <span>Infrastructure Partner</span>
                </div>

                <div class="client-arrow">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>

            </div>

        </div>


        <!-- ================= BOTTOM CONTENT ================= -->

        <div class="clients-bottom-content">

            <div class="clients-bottom-icon">
                <i class="fa-solid fa-users"></i>
            </div>

            <div class="clients-bottom-text">

                <h3>
                    Growing Through Strong Partnerships
                </h3>

                <p>
                    Through strong professional partnerships and a shared
                    commitment to quality, we continue to deliver reliable
                    electrical solutions across different project environments.
                </p>

            </div>

            <div class="clients-bottom-mark">
                <i class="fa-solid fa-bolt-lightning"></i>
            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   SUPPORTING CLIENTS SECTION
========================================================= */

.supporting-clients-section {
    position: relative;

    padding: 110px 0;

    background:
        radial-gradient(
            circle at 90% 10%,
            rgba(245,130,32,.055),
            transparent 30%
        ),
        #f8f9fa;

    overflow: hidden;
}


.supporting-clients-container {
    position: relative;
    z-index: 2;

    width: min(1350px, 91%);
    margin: auto;
}


/* =========================================================
   HEADER
========================================================= */

.supporting-clients-header {
    max-width: 850px;

    margin: 0 auto 60px;

    text-align: center;
}


.clients-eyebrow {
    display: inline-flex;

    align-items: center;
    gap: 8px;

    margin-bottom: 17px;

    color: #f58220;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 2.5px;
}


.clients-eyebrow i {
    font-size: 13px;
}


.supporting-clients-header h2 {
    margin: 0;

    color: #132d45;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: clamp(44px, 5vw, 68px);

    line-height: 1.05;

    font-weight: 500;

    letter-spacing: -1.5px;
}


.supporting-clients-header h2 em {
    color: #f58220;

    font-style: italic;
}


.supporting-clients-header p {
    max-width: 720px;

    margin: 20px auto 0;

    color: #73797d;

    font-size: 15px;

    line-height: 1.8;
}


/* =========================================================
   CLIENT GRID
========================================================= */

.supporting-clients-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 18px;
}


/* =========================================================
   CLIENT CARD
========================================================= */

.supporting-client-card {
    position: relative;

    display: flex;

    align-items: center;

    gap: 17px;

    min-height: 125px;

    padding: 24px 25px;

    background: #ffffff;

    border: 1px solid #e5e8ea;

    border-radius: 19px;

    overflow: hidden;

    transition:
        transform .4s ease,
        box-shadow .4s ease,
        border-color .4s ease;
}


.supporting-client-card::before {
    content: "";

    position: absolute;

    left: 0;
    top: 0;

    width: 3px;
    height: 0;

    background: #f58220;

    transition: height .4s ease;
}


.supporting-client-card:hover {
    transform: translateY(-7px);

    border-color: rgba(245,130,32,.4);

    box-shadow:
        0 20px 45px rgba(19,45,69,.09);
}


.supporting-client-card:hover::before {
    height: 100%;
}


/* =========================================================
   CARD NUMBER
========================================================= */

.client-card-number {
    position: absolute;

    top: 13px;
    right: 18px;

    color: #dfe1e3;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 1px;
}


/* =========================================================
   CLIENT ICON
========================================================= */

.client-icon {
    width: 55px;
    height: 55px;

    flex: 0 0 55px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 15px;

    background: #fff3e8;

    color: #f58220;

    font-size: 20px;

    transition: .4s ease;
}


.supporting-client-card:hover .client-icon {
    background: #f58220;

    color: #ffffff;

    transform:
        scale(1.06)
        rotate(-4deg);
}


/* =========================================================
   CLIENT CONTENT
========================================================= */

.client-content {
    padding-right: 25px;
}


.client-content h3 {
    margin: 0 0 6px;

    color: #132d45;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 19px;

    line-height: 1.3;

    font-weight: 600;
}


.client-content span {
    color: #969b9f;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1.2px;

    text-transform: uppercase;
}


/* =========================================================
   ARROW
========================================================= */

.client-arrow {
    position: absolute;

    right: 18px;
    bottom: 17px;

    color: #c9ccce;

    font-size: 12px;

    transition: .35s ease;
}


.supporting-client-card:hover .client-arrow {
    color: #f58220;

    transform: translate(2px, -2px);
}


/* =========================================================
   BOTTOM CONTENT
========================================================= */

.clients-bottom-content {
    position: relative;

    display: flex;

    align-items: center;

    gap: 20px;

    margin-top: 55px;

    padding: 28px 32px;

    background: #132d45;

    border-radius: 21px;

    overflow: hidden;

    box-shadow:
        0 20px 50px rgba(19,45,69,.14);
}


.clients-bottom-content::before {
    content: "";

    position: absolute;

    width: 250px;
    height: 250px;

    right: -120px;
    top: -140px;

    border-radius: 50%;

    border: 1px solid rgba(245,130,32,.2);
}


.clients-bottom-icon {
    width: 57px;
    height: 57px;

    flex: 0 0 57px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 15px;

    background: rgba(245,130,32,.13);

    color: #f58220;

    font-size: 21px;
}


.clients-bottom-text {
    position: relative;
    z-index: 2;

    flex: 1;
}


.clients-bottom-text h3 {
    margin: 0 0 6px;

    color: #ffffff;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 21px;

    font-weight: 600;
}


.clients-bottom-text p {
    max-width: 900px;

    margin: 0;

    color: rgba(255,255,255,.62);

    font-size: 13px;

    line-height: 1.7;
}


.clients-bottom-mark {
    position: relative;
    z-index: 2;

    width: 58px;
    height: 58px;

    flex: 0 0 58px;

    display: flex;

    align-items: center;
    justify-content: center;

    border: 1px solid rgba(245,130,32,.35);

    border-radius: 50%;

    color: #f58220;

    font-size: 19px;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1050px) {

    .supporting-clients-section {
        padding: 90px 0;
    }

    .supporting-clients-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .supporting-clients-section {
        padding: 65px 0;
    }

    .supporting-clients-container {
        width: 91%;
    }


    /* Header */

    .supporting-clients-header {
        margin-bottom: 38px;

        text-align: left;
    }

    .clients-eyebrow {
        font-size: 9px;

        letter-spacing: 1.7px;
    }

    .supporting-clients-header h2 {
        font-size: 39px;

        line-height: 1.08;

        letter-spacing: -.8px;
    }

    .supporting-clients-header p {
        margin-top: 16px;

        font-size: 13px;

        line-height: 1.7;
    }


    /* Grid */

    .supporting-clients-grid {
        grid-template-columns: 1fr;

        gap: 11px;
    }


    /* Card */

    .supporting-client-card {
        min-height: 100px;

        padding: 20px 18px;

        gap: 14px;

        border-radius: 16px;
    }


    .client-icon {
        width: 48px;
        height: 48px;

        flex-basis: 48px;

        border-radius: 13px;

        font-size: 17px;
    }


    .client-content h3 {
        font-size: 16px;

        margin-bottom: 4px;
    }


    .client-content span {
        font-size: 8px;

        letter-spacing: .9px;
    }


    .client-card-number {
        top: 10px;
        right: 13px;

        font-size: 8px;
    }


    .client-arrow {
        right: 13px;
        bottom: 12px;

        font-size: 9px;
    }


    /* Bottom */

    .clients-bottom-content {
        align-items: flex-start;

        gap: 14px;

        margin-top: 38px;

        padding: 22px 18px;

        border-radius: 17px;
    }


    .clients-bottom-icon {
        width: 46px;
        height: 46px;

        flex-basis: 46px;

        border-radius: 12px;

        font-size: 17px;
    }


    .clients-bottom-text h3 {
        font-size: 17px;

        line-height: 1.35;
    }


    .clients-bottom-text p {
        font-size: 11.5px;

        line-height: 1.65;
    }


    .clients-bottom-mark {
        display: none;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .supporting-clients-section {
        padding: 50px 0;
    }

    .supporting-clients-header h2 {
        font-size: 33px;
    }

    .supporting-clients-header p {
        font-size: 12px;
    }

    .supporting-client-card {
        min-height: 92px;

        padding: 17px 15px;
    }

    .client-icon {
        width: 44px;
        height: 44px;

        flex-basis: 44px;

        font-size: 16px;
    }

    .client-content h3 {
        font-size: 14px;
    }

    .client-content span {
        font-size: 7.5px;
    }

    .clients-bottom-content {
        padding: 19px 15px;
    }

    .clients-bottom-icon {
        width: 42px;
        height: 42px;

        flex-basis: 42px;
    }

    .clients-bottom-text h3 {
        font-size: 15px;
    }

    .clients-bottom-text p {
        font-size: 11px;
    }

}

</style>

<?php include "includes/FOOTER.php"; ?>