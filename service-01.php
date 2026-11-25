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
</head>
<body>

    <section class="service-hero">
        <div class="hero-container">
            <!-- Breadcrumbs with Link to service-01.php -->
            <nav class="breadcrumbs" aria-label="Breadcrumb">
                <a href="index.php">
                    <i class="fa-solid fa-house"></i> Home
                </a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <a href="services.php">Services</a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current">Commercial Building Electrical Works</span>
            </nav>

            <div class="hero-title-area">
                <div class="service-badge">
                    <i class="fa-solid fa-bolt-lightning"></i> Certified Electrical Engineering
                </div>
                <h1>Commercial Building <span>Electrical Works</span></h1>
                <p>Deliver safe, high-capacity, and future-ready electrical infrastructure designed for modern commercial complexes, offices, and retail spaces.</p>
                
                <div class="hero-buttons">
                    <a href="#quote" class="btn-primary">
                        <i class="fa-solid fa-file-invoice-dollar"></i> Get Free Quote
                    </a>
                    <a href="service-01.php" class="btn-secondary">
                        <i class="fa-solid fa-arrow-left"></i> Back to Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!---#################### About section ################--->
<section class="wattsin-solutions-wrapper">
    <div class="wattsin-solutions-inner">
        
        <!-- Section Header Content -->
        <div class="wattsin-solutions-header">
            <span class="wattsin-solutions-tag">
                <i class="fa-solid fa-building-shield"></i> Wattsin Technologies Pvt Ltd
            </span>
            <h2>Complete Commercial Electrical Solutions</h2>
            <h3 class="wattsin-subtitle">"Reliable Electrical Infrastructure for Modern Commercial Buildings"</h3>
            <p>Wattsin Technologies Private Limited provides professional commercial building electrical works for offices, shopping malls, hotels, educational institutions, retail outlets, corporate buildings, and large commercial complexes. We plan and execute complete electrical installations with a strong focus on safety, reliability, energy efficiency, and long-term performance.</p>
            <p>From initial electrical planning and cable routing to power distribution, lighting, testing, and commissioning, our experienced team manages every stage of the project with precision and professional workmanship.</p>
        </div>

        <!-- Services Grid with Premium Icons -->
        <div class="wattsin-services-grid">
            
            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-network-wired"></i></div>
                <h4>Internal & External Electrical Wiring</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-lightbulb"></i></div>
                <h4>Electrical Lighting Installation</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-bolt"></i></div>
                <h4>Power Distribution Systems</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-layer-group"></i></div>
                <h4>Cable Tray Installation</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-server"></i></div>
                <h4>Electrical Panel Installation</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-plug-circle-bolt"></i></div>
                <h4>LT Electrical Installation</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-arrows-split-up-and-left"></i></div>
                <h4>Cable Laying & Termination</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-boxes-packing"></i></div>
                <h4>Switchgear & Distribution Board Installation</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
                <h4>Emergency & Safety Lighting</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h4>Earthing & Lightning Protection</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                <h4>Testing & Commissioning</h4>
            </div>

            <div class="wattsin-service-card">
                <div class="wattsin-service-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <h4>Electrical Maintenance & Upgradation</h4>
            </div>

        </div>

    </div>
</section>

<style>
    /* --- Clean White Background & Orange/Navy Matching Theme --- */
    .wattsin-solutions-wrapper {
        position: relative;
        padding: 90px 20px;
        background: #ffffff;
        color: #0f172a;
        width: 100%;
        box-sizing: border-box;
    }

    .wattsin-solutions-inner {
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
    }

    .wattsin-solutions-header {
        text-align: center;
        max-width: 850px;
        margin: 0 auto 60px auto;
    }

    .wattsin-solutions-tag {
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

    .wattsin-solutions-header h2 {
        font-size: clamp(28px, 4vw, 42px);
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .wattsin-subtitle {
        font-size: clamp(18px, 2.5vw, 22px);
        font-weight: 500;
        font-style: italic;
        color: #f58220;
        margin-bottom: 25px;
        line-height: 1.4;
    }

    .wattsin-solutions-header p {
        font-size: 16px;
        color: #475569;
        margin-bottom: 20px;
        text-align: justify;
    }

    .wattsin-services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .wattsin-service-card {
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

    .wattsin-service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 0;
        background: #f58220;
        transition: height 0.3s ease;
    }

    .wattsin-service-card:hover {
        background: #ffffff;
        border-color: #f58220;
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(245, 130, 32, 0.12);
    }

    .wattsin-service-card:hover::before {
        height: 100%;
    }

    .wattsin-service-icon {
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

    .wattsin-service-card:hover .wattsin-service-icon {
        background: #f58220;
        color: #ffffff;
    }

    .wattsin-service-card h4 {
        font-size: 18px;
        font-weight: 600;
        color: #0f172a;
        line-height: 1.4;
    }

    /* --- Mobile Responsive Media Queries --- */
    @media (max-width: 768px) {
        .wattsin-solutions-wrapper {
            padding: 50px 15px;
        }

        .wattsin-solutions-header {
            margin-bottom: 35px;
            text-align: left;
        }

        .wattsin-solutions-header h2 {
            font-size: 26px;
        }

        .wattsin-subtitle {
            font-size: 16px;
        }

        .wattsin-solutions-header p {
            font-size: 14px;
            text-align: left;
        }

        .wattsin-services-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .wattsin-service-card {
            padding: 20px 18px;
        }

        .wattsin-service-icon {
            width: 45px;
            height: 45px;
            font-size: 20px;
        }

        .wattsin-service-card h4 {
            font-size: 16px;
        }
    }
</style>

<!---####################### Our Planning and Methodology ##########---->
<section class="project-approach-section">
    <div class="approach-container">
        
        <!-- Section Header -->
        <div class="approach-header">
            <span class="section-tag">
                <i class="fa-solid fa-compass-drafting"></i> Our Methodology
            </span>
            <h2>Our Planning & Project Approach</h2>
            <h3 class="italic-subtitle">"Planned Electrical Engineering for Efficient Project Execution"</h3>
            <p>Every commercial electrical project begins with proper planning. Our team evaluates the building layout, electrical load requirements, equipment locations, cable routes, lighting requirements, and future expansion needs before starting installation work.</p>
        </div>

        <!-- Split Grid Layout: Left Side (3 Images) & Right Side (Content) -->
        <div class="approach-grid">
            
            <!-- Left Side: Magazine Split 3-Image Showcase -->
            <div class="approach-visual">
                <div class="split-images-wrapper">
                    <div class="split-img-box img-primary">
                        <img src="assets/images/service-01-planning.webp" alt="Electrical Planning and Engineering">
                    </div>
                    <div class="split-img-box img-secondary-1">
                        <img src="assets/images/service-01-planning-02.webp" alt="Electrical Wiring and Installation">
                    </div>
                    <div class="split-img-box img-secondary-2">
                        <img src="assets/images/service-01-planning-03.webp" alt="Electrical Testing and Commissioning">
                    </div>
                    <div class="floating-badge">
                        <i class="fa-solid fa-shield-halved"></i>
                        <div>
                            <span>100% Precision</span>
                            <strong>Engineered Solutions</strong>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Steps List Content -->
            <div class="steps-list">
                
                <div class="step-card">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <h4>Site Assessment</h4>
                        <p>We study the building layout, site conditions, electrical requirements, existing infrastructure, and project specifications.</p>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <h4>Electrical Load Planning</h4>
                        <p>We assess power requirements and plan suitable distribution systems for lighting, equipment, HVAC, machinery, and other electrical loads.</p>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <h4>Cable Routing & Tray Planning</h4>
                        <p>Our engineers plan efficient cable routes, cable tray layouts, vertical risers, and distribution paths to maintain an organized electrical infrastructure.</p>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <h4>Panel & Distribution Planning</h4>
                        <p>We identify suitable locations for electrical panels, distribution boards, switchgear, and other power distribution equipment.</p>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">05</div>
                    <div class="step-content">
                        <h4>Installation Planning</h4>
                        <p>The project is scheduled systematically to coordinate electrical work with civil, HVAC, plumbing, interior, and other construction activities.</p>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">06</div>
                    <div class="step-content">
                        <h4>Testing & Commissioning Plan</h4>
                        <p>Before handover, all relevant electrical systems are inspected, tested, commissioned, and verified for safe operation.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<style>
    /* --- Clean White Background & Professional Theme Styles --- */
    .project-approach-section {
        position: relative;
        padding: 90px 20px;
        background: #ffffff;
        color: #0f172a;
        width: 100%;
        box-sizing: border-box;
    }

    .approach-container {
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
    }

    /* Centered Section Header */
    .approach-header {
        text-align: center;
        max-width: 850px;
        margin: 0 auto 60px auto;
    }

    .approach-header span.section-tag {
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

    .approach-header h2 {
        font-size: clamp(28px, 4vw, 42px);
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .approach-header h3.italic-subtitle {
        font-size: clamp(18px, 2.5vw, 22px);
        font-weight: 500;
        font-style: italic;
        color: #f58220;
        margin-bottom: 25px;
        line-height: 1.4;
    }

    .approach-header p {
        font-size: 16px;
        color: #475569;
        line-height: 1.6;
        text-align: justify;
    }

    /* Split Grid Layout: Left (Images) & Right (Content) */
    .approach-grid {
        display: grid;
        grid-template-columns: 1fr 1.1fr;
        gap: 50px;
        align-items: center;
    }

    /* --- Left Side: Split Magazine 3-Image Showcase --- */
    .approach-visual {
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .split-images-wrapper {
        position: relative;
        width: 100%;
        max-width: 500px;
        height: 520px;
    }

    .split-img-box {
        position: absolute;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12);
        border: 4px solid #ffffff;
        transition: transform 0.4s ease;
    }

    .split-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Primary Image Layout */
    .img-primary {
        width: 68%;
        height: 72%;
        top: 0;
        left: 0;
        z-index: 2;
    }

    /* Secondary Image Top Right */
    .img-secondary-1 {
        width: 52%;
        height: 44%;
        top: 20px;
        right: 0;
        z-index: 1;
    }

    /* Secondary Image Bottom Right */
    .img-secondary-2 {
        width: 56%;
        height: 40%;
        bottom: 20px;
        right: 15px;
        z-index: 3;
    }

    .split-img-box:hover {
        transform: scale(1.03);
        z-index: 4;
    }

    /* Floating Badge Styling */
    .floating-badge {
        position: absolute;
        bottom: 30px;
        left: -10px;
        background: #0f172a;
        color: #ffffff;
        padding: 14px 20px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        border-left: 4px solid #f58220;
        z-index: 5;
    }

    .floating-badge i {
        font-size: 26px;
        color: #f58220;
    }

    .floating-badge span {
        display: block;
        font-size: 11px;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .floating-badge strong {
        font-size: 13px;
        color: #ffffff;
    }

    /* --- Right Side: Steps List Styles --- */
    .steps-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .step-card {
        display: flex;
        align-items: flex-start;
        gap: 18px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 18px 20px;
        transition: all 0.3s ease;
    }

    .step-card:hover {
        background: #ffffff;
        border-color: #f58220;
        transform: translateX(5px);
        box-shadow: 0 8px 25px rgba(245, 130, 32, 0.1);
    }

    .step-number {
        min-width: 42px;
        height: 42px;
        background: rgba(245, 130, 32, 0.12);
        color: #f58220;
        font-weight: 700;
        font-size: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        flex-shrink: 0;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .step-card:hover .step-number {
        background: #f58220;
        color: #ffffff;
    }

    .step-content h4 {
        font-size: 16px;
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 5px;
    }

    .step-content p {
        font-size: 13px;
        color: #475569;
        line-height: 1.5;
        margin: 0;
    }

    /* --- Mobile Responsive Media Queries --- */
    @media (max-width: 992px) {
        .approach-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .split-images-wrapper {
            max-width: 450px;
            height: 400px;
            margin: 0 auto;
        }
    }

    @media (max-width: 768px) {
        .project-approach-section {
            padding: 50px 15px;
        }

        .approach-header {
            margin-bottom: 35px;
            text-align: left;
        }

        .approach-header h2 {
            font-size: 26px;
        }

        .approach-header h3.italic-subtitle {
            font-size: 16px;
        }

        .approach-header p {
            font-size: 14px;
            text-align: left;
        }

        .split-images-wrapper {
            height: 330px;
        }

        .step-card {
            padding: 15px;
            gap: 12px;
        }

        .step-number {
            min-width: 36px;
            height: 36px;
            font-size: 13px;
        }

        .step-content h4 {
            font-size: 15px;
        }

        .step-content p {
            font-size: 12px;
        }
    }
</style>

<!---################# Our Workflow ################------>
<section class="execution-workflow-section" id="execution-workflow">
    <div class="workflow-container">
        
        <!-- Section Header -->
        <div class="workflow-header">
            <span class="section-tag">
                <i class="fa-solid fa-bolt-lightning"></i> Our Workflow
            </span>
            <h2>How We Execute the Work</h2>
            <h3 class="italic-subtitle">From Electrical Planning to Final Commissioning</h3>
            <p>Our commercial electrical installation process is structured to provide consistent quality and smooth project execution from initial site survey to final handover.</p>
        </div>

        <!-- Landscape Card Workflow Grid with Flow Arrows -->
        <div class="workflow-grid">
            
            <!-- Step 1 -->
            <div class="workflow-card">
                <div class="workflow-img-wrapper">
                    <img src="assets/images/site-servay.webp" alt="Site Survey">
                    <div class="step-badge">01</div>
                </div>
                <div class="workflow-content">
                    <div class="workflow-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                    <h4>Site Survey</h4>
                    <p>Comprehensive evaluation of existing site conditions, measurements, and project requirements.</p>
                </div>
                <div class="workflow-arrow" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="workflow-card">
                <div class="workflow-img-wrapper">
                    <img src="assets/images/planning.webp" alt="Electrical Planning">
                    <div class="step-badge">02</div>
                </div>
                <div class="workflow-content">
                    <div class="workflow-icon"><i class="fa-solid fa-compass-drafting"></i></div>
                    <h4>Electrical Planning</h4>
                    <p>Detailed engineering layouts, load calculations, and circuit blueprints design.</p>
                </div>
                <div class="workflow-arrow" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="workflow-card">
                <div class="workflow-img-wrapper">
                    <img src="assets/images/Material-selection.webp" alt="Material Selection">
                    <div class="step-badge">03</div>
                </div>
                <div class="workflow-content">
                    <div class="workflow-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <h4>Material Selection</h4>
                    <p>Sourcing high-grade, certified commercial electrical components and robust hardware.</p>
                </div>
                <div class="workflow-arrow" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="workflow-card">
                <div class="workflow-img-wrapper">
                    <img src="assets/images/service-01-cable-tray-installation.webp" alt="Cable Tray Installation">
                    <div class="step-badge">04</div>
                </div>
                <div class="workflow-content">
                    <div class="workflow-icon"><i class="fa-solid fa-network-wired"></i></div>
                    <h4>Cable Tray Installation</h4>
                    <p>Structured overhead and underfloor tray routing for safe wire distribution.</p>
                </div>
                <div class="workflow-arrow" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="workflow-card">
                <div class="workflow-img-wrapper">
                    <img src="assets/images/wiringand cable laying .webp" alt="Wiring & Cable Laying">
                    <div class="step-badge">05</div>
                </div>
                <div class="workflow-content">
                    <div class="workflow-icon"><i class="fa-solid fa-plug-circle-plus"></i></div>
                    <h4>Wiring & Cable Laying</h4>
                    <p>Systematic pulling and organization of wires across all commercial zones.</p>
                </div>
                <div class="workflow-arrow" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="workflow-card">
                <div class="workflow-img-wrapper">
                    <img src="assets/images/panel-installation.webp" alt="Panel Installation">
                    <div class="step-badge">06</div>
                </div>
                <div class="workflow-content">
                    <div class="workflow-icon"><i class="fa-solid fa-server"></i></div>
                    <h4>Panel Installation</h4>
                    <p>Mounting main distribution boards, switchgear, and protective circuit panels.</p>
                </div>
                <div class="workflow-arrow" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="workflow-card">
                <div class="workflow-img-wrapper">
                    <img src="assets/images/lighting-installation.webp" alt="Lighting Installation">
                    <div class="step-badge">07</div>
                </div>
                <div class="workflow-content">
                    <div class="workflow-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <h4>Lighting Installation</h4>
                    <p>Fitting commercial architectural, emergency, and functional lighting fixtures.</p>
                </div>
                <div class="workflow-arrow" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="workflow-card">
                <div class="workflow-img-wrapper">
                    <img src="assets/images/termination.webp" alt="Termination">
                    <div class="step-badge">08</div>
                </div>
                <div class="workflow-content">
                    <div class="workflow-icon"><i class="fa-solid fa-link"></i></div>
                    <h4>Termination</h4>
                    <p>Secure fastening, labeling, and connection of cables to equipment terminals.</p>
                </div>
                <div class="workflow-arrow" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Step 9 -->
            <!-- <div class="workflow-card">
                <div class="workflow-img-wrapper">
                    <img src="assets/images/testing.webp" alt="Testing">
                    <div class="step-badge">09</div>
                </div>
                <div class="workflow-content">
                    <div class="workflow-icon"><i class="fa-solid fa-vial-circle-check"></i></div>
                    <h4>Testing</h4>
                    <p>Rigorous insulation, continuity, and voltage check testing protocols.</p>
                </div>
            </div> -->

        </div>

        <!-- Professional Standards Footer Box -->
        <div class="workflow-standards-box">
            <div class="standards-icon-box">
                <i class="fa-solid fa-shield-check"></i>
            </div>
            <div class="standards-content">
                <h4>Professional Installation at Every Stage</h4>
                <p>Our electrical team carries out installation work using organized cable management, proper termination practices, suitable electrical protection systems, and systematic testing procedures. We coordinate closely with project teams to minimize interruptions and maintain project schedules while ensuring that electrical installations are completed according to the approved requirements.</p>
            </div>
        </div>

    </div>
</section>

<style>
    /* --- Premium Centered Landscape Workflow Section Styles --- */
    .execution-workflow-section {
        position: relative;
        padding: 70px 20px;
        background: #f8fafc;
        color: #0f172a;
        width: 100%;
        box-sizing: border-box;
    }

    .workflow-container {
        max-width: 1250px;
        margin: 0 auto;
        width: 100%;
    }

    /* Section Header */
    .workflow-header {
        text-align: center;
        max-width: 850px;
        margin: 0 auto 60px auto;
    }

    .workflow-header span.section-tag {
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

    .workflow-header h2 {
        font-size: clamp(28px, 4vw, 42px);
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
        line-height: 1.2;
    }

    .workflow-header h3.italic-subtitle {
        font-size: clamp(18px, 2.5vw, 22px);
        font-weight: 500;
        font-style: italic;
        color: #f58220;
        margin-bottom: 20px;
        line-height: 1.4;
    }

    .workflow-header p {
        font-size: 16px;
        color: #475569;
        line-height: 1.6;
    }

    /* Landscape Workflow Grid Layout */
    .workflow-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        margin-bottom: 60px;
    }

    /* Individual Landscape Card */
    .workflow-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center; /* Center-align elements inside card */
        text-align: center; /* Centered text layout */
        transition: all 0.35s ease;
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.04);
        position: relative;
    }

    .workflow-card:hover {
        transform: translateY(-8px);
        border-color: #f58220;
        box-shadow: 0 18px 35px rgba(245, 130, 32, 0.12);
    }

    /* Card Image Wrapper */
    .workflow-img-wrapper {
        position: relative;
        width: 100%;
        height: 180px;
        overflow: hidden;
    }

    .workflow-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .workflow-card:hover .workflow-img-wrapper img {
        transform: scale(1.08);
    }

    /* Step Number Badge */
    .step-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(15, 23, 42, 0.85);
        color: #ffffff;
        font-size: 12px;
        font-weight: 700;
        padding: 6px 12px;
        border-radius: 8px;
        backdrop-filter: blur(4px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Card Content Area */
    .workflow-content {
        padding: 24px;
        display: flex;
        flex-direction: column;
        align-items: center; /* Center content alignment */
        flex-grow: 1;
        position: relative;
    }

    .workflow-icon {
        width: 44px;
        height: 44px;
        background: rgba(245, 130, 32, 0.12);
        color: #f58220;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        margin-bottom: 16px;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .workflow-card:hover .workflow-icon {
        background: #f58220;
        color: #ffffff;
    }

    /* Italic Card Titles */
    .workflow-content h4 {
        font-size: 18px;
        font-weight: 700;
        font-style: italic; /* Applied italic font style to all card titles */
        color: #0f172a;
        margin-bottom: 8px;
    }

    .workflow-content p {
        font-size: 13.5px;
        color: #64748b;
        line-height: 1.6;
        margin: 0;
    }

    /* Flow Arrow Indicator between workflow cards */
    .workflow-arrow {
        position: absolute;
        right: -20px;
        top: 50%;
        transform: translateY(-50%);
        width: 32px;
        height: 32px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        color: #f58220;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        z-index: 10;
        box-shadow: 0 4px 10px rgba(15, 23, 42, 0.05);
    }

    /* Professional Standards Footer Box */
    .workflow-standards-box {
        display: flex;
        align-items: flex-start;
        gap: 24px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 15px 35px rgba(15, 23, 42, 0.05);
    }

    .standards-icon-box {
        min-width: 60px;
        height: 60px;
        background: #f58220;
        color: #ffffff;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        flex-shrink: 0;
    }

    .standards-content h4 {
        font-size: 20px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 10px;
    }

    .standards-content p {
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
        margin: 0;
    }

    /* Responsive Queries */
    @media (max-width: 1200px) {
        .workflow-arrow {
            display: none; /* Hide horizontal arrows on smaller grid widths where flow wraps */
        }
    }

    @media (max-width: 992px) {
        .workflow-grid {
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 20px;
        }

        .workflow-standards-box {
            flex-direction: column;
            padding: 25px;
            gap: 16px;
        }
    }

    @media (max-width: 768px) {
        .execution-workflow-section {
            padding: 40px 15px;
        }

        .workflow-header {
            margin-bottom: 35px;
            text-align: left;
        }

        .workflow-header h2 {
            font-size: 26px;
        }

        .workflow-header h3.italic-subtitle {
            font-size: 16px;
        }

        .workflow-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }
</style>

<!---################## Why Choose us ################---->
<section class="why-choose-section" id="why-choose-wattsin">
    <div class="why-overlay-1"></div>
    <div class="why-overlay-2"></div>
    <div class="why-overlay-3"></div>

    <div class="why-container">
        
        <!-- Left Side Content -->
        <div class="why-content-col">
            <span class="section-tag">
                <i class="fa-solid fa-shield-halved"></i> Why Choose Us
            </span>
            <h2>Why Choose Wattsin Technologies?</h2>
            <h3 class="italic-subtitle">Trusted Commercial Electrical Installation Partner</h3>
            <p class="section-intro">Choosing the right electrical contractor is essential for the safety, efficiency, and reliability of a commercial building. Wattsin Technologies combines practical site experience, technical expertise, professional project coordination, and a strong commitment to quality.</p>
            
            <h4 class="reasons-heading">Why Clients Choose Us</h4>
            
            <div class="reasons-grid">
                
                <div class="reason-item">
                    <div class="reason-icon"><i class="fa-solid fa-users-gear"></i></div>
                    <div class="reason-text">
                        <h5>Experienced Electrical Team</h5>
                        <p>Our skilled technicians and project coordinators bring practical experience to commercial electrical installation projects.</p>
                    </div>
                </div>

                <div class="reason-item">
                    <div class="reason-icon"><i class="fa-solid fa-hard-hat"></i></div>
                    <div class="reason-text">
                        <h5>Safety-Focused Execution</h5>
                        <p>Safety is considered throughout planning, installation, testing, and commissioning.</p>
                    </div>
                </div>

                <div class="reason-item">
                    <div class="reason-icon"><i class="fa-solid fa-award"></i></div>
                    <div class="reason-text">
                        <h5>Quality Workmanship</h5>
                        <p>We focus on accurate installation, organized cable management, proper termination, and reliable electrical systems.</p>
                    </div>
                </div>

                <div class="reason-item">
                    <div class="reason-icon"><i class="fa-solid fa-network-wired"></i></div>
                    <div class="reason-text">
                        <h5>Project Coordination</h5>
                        <p>Our team coordinates electrical activities with other construction and building services to support smooth execution.</p>
                    </div>
                </div>

                <div class="reason-item">
                    <div class="reason-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                    <div class="reason-text">
                        <h5>Timely Project Delivery</h5>
                        <p>Systematic planning and project execution help us maintain project schedules and meet installation milestones.</p>
                    </div>
                </div>

                <div class="reason-item">
                    <div class="reason-icon"><i class="fa-solid fa-headset"></i></div>
                    <div class="reason-text">
                        <h5>Reliable Support</h5>
                        <p>We provide professional support for testing, commissioning, maintenance, renovation, and future electrical upgrades.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Right Side Image with Outer Border Accent Frame -->
        <div class="why-image-col">
            <div class="image-frame-wrapper">
                <div class="outer-line-accent"></div>
                <div class="main-image-box">
                    <img src="https://petromartindia.in/wp-content/uploads/2021/05/electric-panel-board-or-petrolpump.jpg" alt="Wattsin Technologies Commercial Electrical Experts">
                    <div class="experience-badge-box">
                        <span class="badge-number">10+</span>
                        <span class="badge-text">Years of Excellence in Electrical Solutions</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    /* --- Why Choose Wattsin Technologies Section --- */
    .why-choose-section {
        position: relative;
        padding: 100px 20px;
        background-image: url('assets/images/bg-service-01.webp');
        background-size: cover;
        background-position: center;
        background-attachment: fixed; /* Fixed background image effect */
        color: #ffffff;
        overflow: hidden;
        box-sizing: border-box;
    }

    /* 3-Layer Overlay System */
    .why-overlay-1 {
        position: absolute;
        inset: 0;
        background: rgba(11, 19, 36, 0.05); /* Deep dark commercial blue base overlay */
        z-index: 1;
    }

    .why-overlay-2 {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 80% 20%, rgba(245, 130, 32, 0.15) 0%, transparent 50%);
        z-index: 2;
    }

    .why-overlay-3 {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.7) 0%, rgba(15, 23, 42, 0.86) 100%);
        z-index: 3;
    }

    .why-container {
        position: relative;
        z-index: 4;
        max-width: 1250px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 60px;
        align-items: center;
    }

    /* Left Side Content Column */
    .why-content-col {
        display: flex;
        flex-direction: column;
    }

    .why-content-col span.section-tag {
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
        width: fit-content;
    }

    .why-content-col h2 {
        font-size: clamp(28px, 3.5vw, 40px);
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 10px;
        line-height: 1.2;
    }

    .why-content-col h3.italic-subtitle {
        font-size: clamp(17px, 2.2vw, 21px);
        font-weight: 500;
        font-style: italic;
        color: #f58220;
        margin-bottom: 16px;
        line-height: 1.4;
    }

    .section-intro {
        font-size: 15.5px;
        color: #cbd5e1;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .reasons-heading {
        font-size: 20px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
        border-left: 4px solid #f58220;
        padding-left: 12px;
    }

    /* Reasons Grid List */
    .reasons-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .reason-item {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        padding: 18px;
        display: flex;
        gap: 14px;
        align-items: flex-start;
        transition: all 0.3s ease;
    }

    .reason-item:hover {
        background: rgba(255, 255, 255, 0.07);
        border-color: rgba(245, 130, 32, 0.4);
        transform: translateY(-3px);
    }

    .reason-icon {
        min-width: 38px;
        height: 38px;
        background: rgba(245, 130, 32, 0.15);
        color: #f58220;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
    }

    .reason-text h5 {
        font-size: 15px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 5px;
    }

    .reason-text p {
        font-size: 13px;
        color: #94a3b8;
        line-height: 1.5;
        margin: 0;
    }

    /* Right Side Image Column with Outer Line Accent Frame */
    .why-image-col {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px; /* Space for the offset outer frame line */
    }

    .image-frame-wrapper {
        position: relative;
        width: 100%;
        max-width: 520px;
    }

    /* Outer Line Accent Frame on Top-Right Corner & Surround */
    .outer-line-accent {
        position: absolute;
        top: -25px;
        right: -25px;
        bottom: -25px;
        left: -25px;
        border: 2px dashed rgba(245, 130, 32, 0.4);
        border-radius: 24px;
        pointer-events: none;
        z-index: 1;
    }

    .main-image-box {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        z-index: 2;
        border: 1px solid rgba(255, 255, 255, 0.15);
    }

    .main-image-box img {
        width: 100%;
        height: 480px;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .why-image-col:hover .main-image-box img {
        transform: scale(1.05);
    }

    /* Floating Experience Badge Inside Image */
    .experience-badge-box {
        position: absolute;
        bottom: 25px;
        left: 25px;
        background: rgba(15, 23, 42, 0.9);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(245, 130, 32, 0.4);
        padding: 16px 22px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        gap: 14px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .badge-number {
        font-size: 28px;
        font-weight: 800;
        color: #f58220;
        line-height: 1;
    }

    .badge-text {
        font-size: 13px;
        font-weight: 600;
        color: #ffffff;
        max-width: 150px;
        line-height: 1.3;
        margin: 0;
    }

    /* Responsive Media Queries */
    @media (max-width: 1024px) {
        .why-container {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .why-image-col {
            padding: 20px;
        }
    }

    @media (max-width: 768px) {
        .why-choose-section {
            padding: 60px 15px;
            background-attachment: scroll; /* Fallback for mobile fixed background jitter */
        }

        .reasons-grid {
            grid-template-columns: 1fr;
        }

        .main-image-box img {
            height: 360px;
        }

        .outer-line-accent {
            top: -12px;
            right: -12px;
            bottom: -12px;
            left: -12px;
        }

        .experience-badge-box {
            bottom: 15px;
            left: 15px;
            padding: 12px 16px;
        }

        .badge-number {
            font-size: 22px;
        }
    }
</style>




<section class="commercial-solutions-section" id="commercial-solutions">
    <div class="solutions-container">
        
        <!-- Section Header -->
        <div class="solutions-header">
            <span class="section-tag">
                <i class="fa-solid fa-city"></i> Industries We Serve
            </span>
            <h2>Electrical Solutions for Every Commercial Environment</h2>
            <h3 class="italic-subtitle">Tailored Installations for Diverse Business Buildings</h3>
            <p>Our commercial electrical installation services are suitable for a wide range of building types and business environments, delivering robust, safe, and efficient power distribution.</p>
        </div>

        <!-- Centered Industries Badges/Cards Grid -->
        <div class="industries-grid">
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-building-user"></i></div>
                <span>Corporate Offices</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-microchip"></i></div>
                <span>IT Parks</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                <span>Shopping Malls</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-store"></i></div>
                <span>Retail Showrooms</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-hotel"></i></div>
                <span>Hotels & Hospitality</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-hospital"></i></div>
                <span>Hospitals</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                <span>Educational Institutions</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-briefcase"></i></div>
                <span>Business Complexes</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-warehouse"></i></div>
                <span>Warehouses</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-building"></i></div>
                <span>Commercial Buildings</span>
            </div>
            <div class="industry-badge-card">
                <div class="badge-icon"><i class="fa-solid fa-tower-broadcast"></i></div>
                <span>Large-Scale Infrastructure</span>
            </div>
        </div>

        <!-- Powering Commercial Spaces Banner / Box -->
        <div class="powering-banner-box">
            <div class="powering-icon"><i class="fa-solid fa-bolt-lightning"></i></div>
            <h4>Powering Commercial Spaces with Confidence</h4>
            <p>A reliable electrical system is the foundation of every modern commercial facility. From power distribution and lighting to cable management and electrical panels, Wattsin Technologies provides complete electrical solutions designed around the specific requirements of each project.</p>
        </div>

        <!-- Call to Action Box -->
        <div class="solutions-cta-box">
            <h4>Planning a new commercial building or upgrading an existing electrical system?</h4>
            <p>Talk to our electrical engineering team to discuss your project requirements and receive a customized solution.</p>
            <div class="cta-buttons-group">
                <a href="#quote" class="btn-primary-orange">
                    <i class="fa-solid fa-file-invoice-dollar"></i> Get a Free Quote
                </a>
                <a href="#contact" class="btn-outline-orange">
                    <i class="fa-solid fa-headset"></i> Contact Our Electrical Experts
                </a>
            </div>
        </div>

    </div>
</section>

<style>
    /* --- Clean White Theme Commercial Solutions Section Styles --- */
    .commercial-solutions-section {
        position: relative;
        padding: 90px 20px;
        background: #ffffff; /* Clean white background */
        color: #0f172a;
        width: 100%;
        box-sizing: border-box;
        overflow: hidden;
    }

    .solutions-container {
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center; /* Center-align all container items */
        text-align: center;
    }

    /* Section Header */
    .solutions-header {
        max-width: 850px;
        margin-bottom: 50px;
    }

    .solutions-header span.section-tag {
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

    .solutions-header h2 {
        font-size: clamp(28px, 4vw, 42px);
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
        line-height: 1.2;
    }

    .solutions-header h3.italic-subtitle {
        font-size: clamp(18px, 2.5vw, 22px);
        font-weight: 500;
        font-style: italic;
        color: #f58220;
        margin-bottom: 20px;
        line-height: 1.4;
    }

    .solutions-header p {
        font-size: 16px;
        color: #475569;
        line-height: 1.6;
    }

    /* Industries Grid (Centered Badge Cards) */
    .industries-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Perfectly centered horizontal flow */
        gap: 16px;
        max-width: 1100px;
        margin-bottom: 60px;
    }

    .industry-badge-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        padding: 14px 22px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        gap: 12px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(15, 23, 42, 0.03);
    }

    .industry-badge-card:hover {
        background: rgba(245, 130, 32, 0.05);
        border-color: #f58220;
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(245, 130, 32, 0.08);
    }

    .badge-icon {
        width: 32px;
        height: 32px;
        background: rgba(245, 130, 32, 0.12);
        color: #f58220;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        flex-shrink: 0;
    }

    .industry-badge-card span {
        font-size: 14.5px;
        font-weight: 600;
        color: #1e293b;
        white-space: nowrap;
    }

    /* Powering Commercial Spaces Banner Box */
    .powering-banner-box {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        padding: 40px;
        max-width: 900px;
        margin-bottom: 50px;
        position: relative;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
    }

    .powering-icon {
        width: 50px;
        height: 50px;
        background: #f58220;
        color: #ffffff;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        margin: 0 auto 20px auto;
        box-shadow: 0 6px 15px rgba(245, 130, 32, 0.3);
    }

    .powering-banner-box h4 {
        font-size: 22px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 14px;
    }

    .powering-banner-box p {
        font-size: 15.5px;
        color: #475569;
        line-height: 1.7;
        margin: 0;
    }

    /* Call to Action Box */
    .solutions-cta-box {
        background: linear-gradient(135deg, #fff7ed 0%, #ffffff 100%);
        border: 1px solid rgba(245, 130, 32, 0.3);
        border-radius: 20px;
        padding: 45px;
        max-width: 850px;
        width: 100%;
        box-shadow: 0 15px 35px rgba(245, 130, 32, 0.06);
    }

    .solutions-cta-box h4 {
        font-size: clamp(20px, 2.5vw, 24px);
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .solutions-cta-box p {
        font-size: 15px;
        color: #475569;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .cta-buttons-group {
        display: flex;
        justify-content: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .btn-primary-orange {
        background: #f58220;
        color: #ffffff;
        padding: 14px 28px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(245, 130, 32, 0.3);
    }

    .btn-primary-orange:hover {
        background: #e07218;
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(245, 130, 32, 0.4);
    }

    .btn-outline-orange {
        background: transparent;
        color: #f58220;
        border: 1px solid #f58220;
        padding: 14px 28px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
    }

    .btn-outline-orange:hover {
        background: rgba(245, 130, 32, 0.08);
        transform: translateY(-2px);
    }

    /* Responsive Queries */
    @media (max-width: 768px) {
        .commercial-solutions-section {
            padding: 50px 15px;
        }

        .solutions-header {
            margin-bottom: 35px;
        }

        .industries-grid {
            gap: 10px;
            margin-bottom: 40px;
        }

        .industry-badge-card {
            padding: 10px 16px;
        }

        .industry-badge-card span {
            font-size: 13.5px;
        }

        .powering-banner-box {
            padding: 25px;
            margin-bottom: 35px;
        }

        .solutions-cta-box {
            padding: 25px;
        }

        .cta-buttons-group {
            flex-direction: column;
            width: 100%;
        }

        .btn-primary-orange, .btn-outline-orange {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<?php include "includes/footer.php"; ?>