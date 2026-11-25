<?php
/*
|--------------------------------------------------------------------------
| WATTSIN TECHNOLOGIES - DYNAMIC PROJECTS PAGE
|--------------------------------------------------------------------------
| This page reads the same JSON data used by:
| admin/project-manager.php
|
| Admin upload data keys:
| id, title, category, description, type, file, created_at
|
| Keep this file in the website root as: projects.php
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/admin/includes/auth.php';

/* Read projects published from the existing admin panel */
$projects = read_json_file(PROJECTS_FILE);

if (!is_array($projects)) {
    $projects = [];
}

/* Keep only valid project records and prepare category list */
$validProjects = [];
$categoryMap = [];

foreach ($projects as $project) {
    if (!is_array($project)) {
        continue;
    }

    $title = trim((string)($project['title'] ?? ''));
    $file  = trim((string)($project['file'] ?? ''));

    if ($title === '' || $file === '') {
        continue;
    }

    $project['title'] = $title;
    $project['category'] = trim((string)($project['category'] ?? 'Other'));
    $project['description'] = trim((string)($project['description'] ?? ''));
    $project['type'] = strtolower(trim((string)($project['type'] ?? 'image')));

    if (!in_array($project['type'], ['image', 'video'], true)) {
        $project['type'] = 'image';
    }

    /*
     * Admin uploads are saved as:
     * admin/uploads/<random-file-name>
     * Use the stored relative path so uploaded media loads from the website root.
     */
    $project['file'] = ltrim(str_replace('\\', '/', $file), '/');

    $validProjects[] = $project;
    $categoryMap[$project['category']] = true;
}

/* Sort categories alphabetically */
$categories = array_keys($categoryMap);
natcasesort($categories);
$categories = array_values($categories);

/* Newest projects first (admin manager already inserts new uploads at the top) */
$visibleProjects = $validProjects;

function wattsin_project_escape($value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function wattsin_project_date($value): string
{
    if (!$value) {
        return '';
    }

    try {
        $date = new DateTime((string)$value);
        return $date->format('M Y');
    } catch (Throwable $e) {
        return '';
    }
}

$pageTitle = 'Our Projects | Wattsin Technologies Private Limited';
$pageDescription = 'Explore commercial, industrial, healthcare, IT park, retail and infrastructure electrical projects completed by Wattsin Technologies.';

/* Existing site header */
include __DIR__ . '/includes/header.php';
?>





<style>
/* =========================================================
   WATTSIN PROJECTS PAGE
========================================================= */
.wt-project-page,
.wt-project-page * {
    box-sizing: border-box;
}

.wt-project-page {
    --wt-navy: #0A192F;
    --wt-navy-soft: #172A45;
    --wt-orange: #F58220;
    --wt-text: #202938;
    --wt-muted: #697586;
    --wt-line: #E8EBEF;
    width: 100%;
    overflow: hidden;
    background: #fff;
    color: var(--wt-text);
    font-family: "Poppins", Arial, sans-serif;
}

.wt-project-container {
    width: min(1280px, 91%);
    margin: 0 auto;
}

/* Hero */
.wt-project-hero {
    position: relative;
    isolation: isolate;
    min-height: 390px;
    display: flex;
    align-items: center;
    padding: 90px 0 85px;
    background:
        linear-gradient(100deg, rgba(7, 19, 37, .96), rgba(10, 25, 47, .88)),
        url("assets/images/photo-20.jpeg") center/cover no-repeat;
}

.wt-project-hero::after {
    content: "";
    position: absolute;
    z-index: -1;
    width: 420px;
    height: 420px;
    right: -130px;
    bottom: -220px;
    border: 1px solid rgba(245,130,32,.24);
    border-radius: 50%;
    box-shadow: 0 0 0 45px rgba(245,130,32,.035), 0 0 0 90px rgba(245,130,32,.025);
}

.wt-project-hero-content {
    max-width: 820px;
}

.wt-project-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 11px;
    margin-bottom: 19px;
    color: #ffad65;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
}

.wt-project-eyebrow::before {
    content: "";
    width: 38px;
    height: 2px;
    background: var(--wt-orange);
}

.wt-project-hero h1 {
    margin: 0 0 18px;
    color: #fff;
    font-family: "Playfair Display", Georgia, serif;
    font-size: clamp(42px, 5.5vw, 68px);
    font-weight: 600;
    line-height: 1.08;
    letter-spacing: -1.2px;
}

.wt-project-hero h1 em {
    color: var(--wt-orange);
    font-weight: 500;
}

.wt-project-hero p {
    max-width: 690px;
    margin: 0;
    color: rgba(255,255,255,.78);
    font-size: 15px;
    line-height: 1.9;
}

/* Intro */
.wt-project-intro {
    padding: 76px 0 34px;
    text-align: center;
}

.wt-project-section-tag {
    display: inline-block;
    margin-bottom: 13px;
    color: var(--wt-orange);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.wt-project-intro h2 {
    margin: 0 auto 14px;
    color: var(--wt-navy);
    font-family: "Playfair Display", Georgia, serif;
    font-size: clamp(31px, 4vw, 45px);
    font-weight: 600;
    line-height: 1.2;
}

.wt-project-intro h2 em {
    color: var(--wt-orange);
    font-weight: 500;
}

.wt-project-intro p {
    max-width: 760px;
    margin: 0 auto;
    color: var(--wt-muted);
    font-size: 14px;
    line-height: 1.9;
}

/* Filters and search */
.wt-project-toolbar {
    padding: 25px 0 35px;
}

.wt-project-filter-row {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 22px;
}

.wt-project-filter {
    appearance: none;
    border: 1px solid #E3E7EC;
    border-radius: 30px;
    padding: 10px 19px;
    background: #fff;
    color: #526071;
    font-family: inherit;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: .25s ease;
}

.wt-project-filter:hover,
.wt-project-filter.is-active {
    border-color: var(--wt-orange);
    background: var(--wt-orange);
    color: #fff;
    box-shadow: 0 7px 18px rgba(245,130,32,.18);
}

.wt-project-search-wrap {
    width: min(420px, 100%);
    margin: 0 auto;
    position: relative;
}

.wt-project-search-wrap i {
    position: absolute;
    left: 17px;
    top: 50%;
    transform: translateY(-50%);
    color: #98A2B3;
    font-size: 14px;
}

.wt-project-search {
    width: 100%;
    height: 48px;
    padding: 0 18px 0 45px;
    border: 1px solid var(--wt-line);
    border-radius: 7px;
    outline: none;
    background: #fff;
    color: var(--wt-text);
    font-family: inherit;
    font-size: 13px;
    transition: .25s ease;
}

.wt-project-search:focus {
    border-color: var(--wt-orange);
    box-shadow: 0 0 0 3px rgba(245,130,32,.10);
}

/* Project cards */
.wt-project-gallery-section {
    padding: 0 0 95px;
}

.wt-project-result-line {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    margin: 0 0 20px;
    color: var(--wt-muted);
    font-size: 12px;
}

.wt-project-result-line strong {
    color: var(--wt-navy);
}

.wt-project-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 25px;
}

.wt-project-card {
    min-width: 0;
    overflow: hidden;
    border: 1px solid #E9EDF1;
    border-radius: 10px;
    background: #fff;
    box-shadow: 0 10px 30px rgba(10,25,47,.045);
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
}

.wt-project-card:hover {
    transform: translateY(-6px);
    border-color: rgba(245,130,32,.42);
    box-shadow: 0 20px 42px rgba(10,25,47,.11);
}

.wt-project-card[hidden] {
    display: none !important;
}

.wt-project-media {
    position: relative;
    height: 245px;
    overflow: hidden;
    background: #E9EDF2;
    cursor: zoom-in;
}

.wt-project-media img,
.wt-project-media video {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .55s ease;
}

.wt-project-card:hover .wt-project-media img {
    transform: scale(1.055);
}

.wt-project-media::after {
    content: "";
    position: absolute;
    inset: 45% 0 0;
    pointer-events: none;
    background: linear-gradient(transparent, rgba(5,15,29,.45));
}

.wt-project-category {
    position: absolute;
    z-index: 2;
    left: 15px;
    top: 15px;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 8px 12px;
    border: 1px solid rgba(255,255,255,.22);
    border-radius: 30px;
    background: rgba(10,25,47,.83);
    color: #fff;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: .3px;
    backdrop-filter: blur(8px);
}

.wt-project-category i {
    color: #ff9b4a;
}

.wt-project-view {
    position: absolute;
    z-index: 3;
    right: 15px;
    bottom: 15px;
    width: 39px;
    height: 39px;
    display: grid;
    place-items: center;
    border: 1px solid rgba(255,255,255,.35);
    border-radius: 50%;
    background: rgba(255,255,255,.95);
    color: var(--wt-navy);
    font-size: 13px;
}

.wt-project-info {
    padding: 21px 21px 22px;
}

.wt-project-info h3 {
    margin: 0 0 9px;
    color: var(--wt-navy);
    font-family: "Playfair Display", Georgia, serif;
    font-size: 21px;
    font-weight: 600;
    line-height: 1.3;
    overflow-wrap: anywhere;
}

.wt-project-info p {
    min-height: 44px;
    margin: 0;
    color: var(--wt-muted);
    font-size: 12px;
    line-height: 1.8;
    overflow-wrap: anywhere;
}

.wt-project-card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-top: 17px;
    padding-top: 14px;
    border-top: 1px solid #EEF0F3;
    color: #8A94A3;
    font-size: 10px;
}

.wt-project-card-footer span:first-child {
    color: var(--wt-orange);
    font-weight: 700;
}

.wt-project-empty {
    display: none;
    padding: 55px 20px;
    border: 1px dashed #D8DEE6;
    border-radius: 10px;
    background: #FAFBFC;
    text-align: center;
}

.wt-project-empty.is-visible {
    display: block;
}

.wt-project-empty i {
    margin-bottom: 13px;
    color: var(--wt-orange);
    font-size: 32px;
}

.wt-project-empty h3 {
    margin: 0 0 7px;
    color: var(--wt-navy);
    font-family: "Playfair Display", Georgia, serif;
    font-size: 23px;
}

.wt-project-empty p {
    margin: 0;
    color: var(--wt-muted);
    font-size: 13px;
}

/* CTA */
.wt-project-cta {
    padding: 65px 0;
    background: var(--wt-navy);
}

.wt-project-cta-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
}

.wt-project-cta h2 {
    margin: 0 0 8px;
    color: #fff;
    font-family: "Playfair Display", Georgia, serif;
    font-size: clamp(27px, 3vw, 38px);
    font-weight: 600;
}

.wt-project-cta p {
    margin: 0;
    color: rgba(255,255,255,.7);
    font-size: 13px;
    line-height: 1.7;
}

.wt-project-cta-btn {
    display: inline-flex;
    flex: 0 0 auto;
    align-items: center;
    justify-content: center;
    gap: 11px;
    min-height: 49px;
    padding: 0 22px;
    border-radius: 5px;
    background: var(--wt-orange);
    color: #fff;
    text-decoration: none;
    font-size: 12px;
    font-weight: 700;
    transition: .25s ease;
}

.wt-project-cta-btn:hover {
    transform: translateY(-3px);
    background: #DF6F13;
    color: #fff;
}

/* Lightbox */
.wt-project-lightbox {
    position: fixed;
    z-index: 99999;
    inset: 0;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 25px;
    background: rgba(3,10,20,.92);
}

.wt-project-lightbox.is-open {
    display: flex;
}

.wt-project-lightbox-content {
    position: relative;
    width: min(1050px, 100%);
    max-height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.wt-project-lightbox-content img,
.wt-project-lightbox-content video {
    display: block;
    max-width: 100%;
    max-height: 85vh;
    border-radius: 6px;
    object-fit: contain;
}

.wt-project-lightbox-close {
    position: absolute;
    top: -45px;
    right: 0;
    width: 38px;
    height: 38px;
    border: 1px solid rgba(255,255,255,.3);
    border-radius: 50%;
    background: transparent;
    color: #fff;
    font-size: 17px;
    cursor: pointer;
}

/* Responsive */
@media (max-width: 991px) {
    .wt-project-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 19px;
    }
    .wt-project-media {
        height: 220px;
    }
}

@media (max-width: 650px) {
    .wt-project-hero {
        min-height: 340px;
        padding: 72px 0 65px;
        background-position: center;
    }
    .wt-project-hero h1 {
        font-size: 42px;
    }
    .wt-project-hero p {
        font-size: 13px;
    }
    .wt-project-intro {
        padding: 55px 0 25px;
    }
    .wt-project-intro p {
        font-size: 13px;
    }
    .wt-project-toolbar {
        padding: 22px 0 28px;
    }
    .wt-project-filter-row {
        justify-content: flex-start;
        flex-wrap: nowrap;
        overflow-x: auto;
        padding: 2px 1px 10px;
        scrollbar-width: thin;
    }
    .wt-project-filter {
        flex: 0 0 auto;
        padding: 9px 15px;
    }
    .wt-project-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }
    .wt-project-media {
        height: 235px;
    }
    .wt-project-info {
        padding: 18px;
    }
    .wt-project-info h3 {
        font-size: 20px;
    }
    .wt-project-info p {
        min-height: 0;
    }
    .wt-project-gallery-section {
        padding-bottom: 65px;
    }
    .wt-project-cta {
        padding: 48px 0;
    }
    .wt-project-cta-inner {
        align-items: flex-start;
        flex-direction: column;
    }
}

@media (prefers-reduced-motion: reduce) {
    .wt-project-page *,
    .wt-project-page *::before,
    .wt-project-page *::after {
        scroll-behavior: auto !important;
        transition-duration: .01ms !important;
        animation-duration: .01ms !important;
    }
}
</style>

<main class="wt-project-page">

    <!-- HERO -->
    <section class="wt-project-hero">
        <div class="wt-project-container">
            <div class="wt-project-hero-content">
                <div class="wt-project-eyebrow">Wattsin Technologies</div>
                <h1>Our Projects &amp; <em>Expertise</em></h1>
                <p>
                    Explore our electrical engineering and installation work across
                    commercial buildings, industrial facilities, healthcare,
                    IT parks, retail spaces and infrastructure projects.
                </p>
            </div>
        </div>
    </section>



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




    <!-- INTRO -->
    <section class="wt-project-intro">
        <div class="wt-project-container">
            <span class="wt-project-section-tag">Our Work Portfolio</span>
            <h2>Delivering Projects with <em>Precision &amp; Care</em></h2>
            <p>
                Every project reflects our commitment to planned execution,
                dependable electrical solutions, safety-focused workmanship
                and quality delivery.
            </p>
        </div>
    </section>

    <!-- CATEGORY FILTER + SEARCH -->
    <section class="wt-project-toolbar">
        <div class="wt-project-container">

            <div class="wt-project-filter-row" aria-label="Filter projects by category">
                <button type="button" class="wt-project-filter is-active" data-filter="all">
                    All Projects
                </button>

                <?php foreach ($categories as $category): ?>
                    <button
                        type="button"
                        class="wt-project-filter"
                        data-filter="<?= wattsin_project_escape(mb_strtolower($category, 'UTF-8')) ?>"
                    >
                        <?= wattsin_project_escape($category) ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="wt-project-search-wrap">
                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                <input
                    type="search"
                    class="wt-project-search"
                    id="wtProjectSearch"
                    placeholder="Search project title or category..."
                    aria-label="Search projects"
                >
            </div>

        </div>
    </section>

    <!-- PROJECT GALLERY -->
    <section class="wt-project-gallery-section">
        <div class="wt-project-container">

            <div class="wt-project-result-line">
                <span>Project portfolio</span>
                <strong>
                    <span id="wtProjectCount"><?= count($visibleProjects) ?></span>
                    project<?= count($visibleProjects) === 1 ? '' : 's' ?>
                </strong>
            </div>

            <?php if (count($visibleProjects) > 0): ?>
                <div class="wt-project-grid" id="wtProjectGrid">

                    <?php foreach ($visibleProjects as $index => $project): ?>
                        <?php
                            $projectTitle = (string)$project['title'];
                            $projectCategory = (string)$project['category'];
                            $projectDescription = (string)$project['description'];
                            $projectFile = (string)$project['file'];
                            $projectType = (string)$project['type'];
                            $projectDate = wattsin_project_date($project['created_at'] ?? '');

                            $searchText = mb_strtolower(
                                $projectTitle . ' ' . $projectCategory . ' ' . $projectDescription,
                                'UTF-8'
                            );
                        ?>

                        <article
                            class="wt-project-card"
                            data-category="<?= wattsin_project_escape(mb_strtolower($projectCategory, 'UTF-8')) ?>"
                            data-search="<?= wattsin_project_escape($searchText) ?>"
                        >
                            <div
                                class="wt-project-media"
                                data-media-type="<?= wattsin_project_escape($projectType) ?>"
                                data-media-src="<?= wattsin_project_escape($projectFile) ?>"
                                data-media-title="<?= wattsin_project_escape($projectTitle) ?>"
                                role="button"
                                tabindex="0"
                                aria-label="View <?= wattsin_project_escape($projectTitle) ?>"
                            >
                                <?php if ($projectType === 'video'): ?>
                                    <video
                                        src="<?= wattsin_project_escape($projectFile) ?>"
                                        preload="metadata"
                                        muted
                                        playsinline
                                    ></video>
                                <?php else: ?>
                                    <img
                                        src="<?= wattsin_project_escape($projectFile) ?>"
                                        alt="<?= wattsin_project_escape($projectTitle . ' - ' . $projectCategory . ' electrical project by Wattsin Technologies') ?>"
                                        loading="<?= $index < 3 ? 'eager' : 'lazy' ?>"
                                        decoding="async"
                                        onerror="this.style.display='none'; this.parentElement.classList.add('wt-project-media-error');"
                                    >
                                <?php endif; ?>

                                <span class="wt-project-category">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <?= wattsin_project_escape($projectCategory) ?>
                                </span>

                                <span class="wt-project-view" aria-hidden="true">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </span>
                            </div>

                            <div class="wt-project-info">
                                <h3><?= wattsin_project_escape($projectTitle) ?></h3>

                                <p>
                                    <?= $projectDescription !== ''
                                        ? wattsin_project_escape($projectDescription)
                                        : 'Electrical project execution by Wattsin Technologies Private Limited.' ?>
                                </p>

                                <div class="wt-project-card-footer">
                                    <span><?= wattsin_project_escape($projectCategory) ?></span>
                                    <span>
                                        <?= $projectDate !== ''
                                            ? wattsin_project_escape($projectDate)
                                            : 'Wattsin Project' ?>
                                    </span>
                                </div>
                            </div>
                        </article>

                    <?php endforeach; ?>

                </div>
            <?php else: ?>
                <div class="wt-project-empty is-visible">
                    <i class="fa-solid fa-building-circle-check"></i>
                    <h3>Projects Coming Soon</h3>
                    <p>Our project portfolio will be updated here shortly.</p>
                </div>
            <?php endif; ?>

            <div class="wt-project-empty" id="wtProjectNoResults">
                <i class="fa-solid fa-magnifying-glass"></i>
                <h3>No matching projects found</h3>
                <p>Try another project title or choose a different category.</p>
            </div>

        </div>
    </section>

    <!-- CONTACT CTA -->
    <section class="wt-project-cta">
        <div class="wt-project-container wt-project-cta-inner">
            <div>
                <h2>Have an Electrical Project in Mind?</h2>
                <p>Talk to our team about your commercial or industrial electrical requirements.</p>
            </div>
            <a href="contact.php" class="wt-project-cta-btn">
                Discuss Your Project
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>

</main>

<!-- IMAGE / VIDEO LIGHTBOX -->
<div class="wt-project-lightbox" id="wtProjectLightbox" aria-hidden="true">
    <div class="wt-project-lightbox-content">
        <button type="button" class="wt-project-lightbox-close" id="wtProjectLightboxClose" aria-label="Close preview">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div id="wtProjectLightboxMedia"></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.wt-project-filter');
    const projectCards = Array.from(document.querySelectorAll('.wt-project-card'));
    const searchInput = document.getElementById('wtProjectSearch');
    const countElement = document.getElementById('wtProjectCount');
    const noResults = document.getElementById('wtProjectNoResults');

    let activeCategory = 'all';

    function filterProjects() {
        const searchTerm = (searchInput ? searchInput.value : '').trim().toLocaleLowerCase();
        let visibleCount = 0;

        projectCards.forEach(function (card) {
            const category = (card.dataset.category || '').toLocaleLowerCase();
            const searchable = (card.dataset.search || '').toLocaleLowerCase();

            const categoryMatch = activeCategory === 'all' || category === activeCategory;
            const searchMatch = searchTerm === '' || searchable.includes(searchTerm);
            const show = categoryMatch && searchMatch;

            card.hidden = !show;

            if (show) {
                visibleCount++;
            }
        });

        if (countElement) {
            countElement.textContent = String(visibleCount);
        }

        if (noResults) {
            noResults.classList.toggle('is-visible', visibleCount === 0 && projectCards.length > 0);
        }
    }

    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            filterButtons.forEach(function (item) {
                item.classList.remove('is-active');
            });

            button.classList.add('is-active');
            activeCategory = (button.dataset.filter || 'all').toLocaleLowerCase();
            filterProjects();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', filterProjects);
    }

    /* Image/video preview */
    const lightbox = document.getElementById('wtProjectLightbox');
    const lightboxMedia = document.getElementById('wtProjectLightboxMedia');
    const closeButton = document.getElementById('wtProjectLightboxClose');

    function openPreview(mediaBox) {
        if (!lightbox || !lightboxMedia || !mediaBox) return;

        const source = mediaBox.dataset.mediaSrc || '';
        const type = mediaBox.dataset.mediaType || 'image';
        const title = mediaBox.dataset.mediaTitle || 'Project media';

        if (!source) return;

        lightboxMedia.innerHTML = '';

        let mediaElement;

        if (type === 'video') {
            mediaElement = document.createElement('video');
            mediaElement.controls = true;
            mediaElement.autoplay = true;
            mediaElement.playsInline = true;
        } else {
            mediaElement = document.createElement('img');
            mediaElement.alt = title;
        }

        mediaElement.src = source;
        lightboxMedia.appendChild(mediaElement);

        lightbox.classList.add('is-open');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closePreview() {
        if (!lightbox || !lightboxMedia) return;

        const video = lightboxMedia.querySelector('video');
        if (video) {
            video.pause();
            video.removeAttribute('src');
            video.load();
        }

        lightbox.classList.remove('is-open');
        lightbox.setAttribute('aria-hidden', 'true');
        lightboxMedia.innerHTML = '';
        document.body.style.overflow = '';
    }

    document.querySelectorAll('.wt-project-media').forEach(function (mediaBox) {
        mediaBox.addEventListener('click', function () {
            openPreview(mediaBox);
        });

        mediaBox.addEventListener('keydown', function (event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                openPreview(mediaBox);
            }
        });
    });

    if (closeButton) {
        closeButton.addEventListener('click', closePreview);
    }

    if (lightbox) {
        lightbox.addEventListener('click', function (event) {
            if (event.target === lightbox) {
                closePreview();
            }
        });
    }

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closePreview();
        }
    });
});
</script>

<?php
/* Existing site footer */
include __DIR__ . '/includes/footer.php';
?>
