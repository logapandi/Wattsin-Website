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
            background: url('assets/images/Testing, Commissioning & Maintenance.webp') no-repeat center center/cover;
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
                Testing, Commissioning &amp; Maintenance
            </span>

        </nav>


        <div class="hero-title-area">

            <div class="service-badge">
                <i class="fa-solid fa-clipboard-check"></i>
                Electrical Testing &amp; Commissioning
            </div>


            <h1>
                Testing, Commissioning
                <span>&amp; Maintenance</span>
            </h1>


            <p>
                Ensure safe, reliable, and efficient electrical systems through
                professional testing, commissioning, inspection, and maintenance
                services for commercial, industrial, and infrastructure projects.
            </p>


            <div class="hero-buttons">

                <a href="#quote" class="btn-primary">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    Get Free Project Quote
                </a>


                <a href="services.php" class="btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to Services
                </a>

            </div>

        </div>

    </div>

</section>

<!---############### Hero section end ################---->


<style>
    .testing-page { --testing-navy:#0A192F; --testing-blue:#172A45; --testing-orange:#F58220; --testing-ink:#0F172A; --testing-muted:#64748B; --testing-line:#E2E8F0; background:#F8FAFC; color:var(--testing-ink); font-family:'Plus Jakarta Sans',sans-serif; }
    .testing-overview { padding:92px 0; background:#fff; }
    .testing-container { width:min(1200px,90%); margin:0 auto; }
    .testing-intro { display:grid; grid-template-columns:.82fr 1.18fr; gap:70px; align-items:center; margin-bottom:72px; }
    .testing-eyebrow,.testing-section-label { color:var(--testing-orange); font-size:12px; font-weight:800; letter-spacing:1.8px; text-transform:uppercase; }
    .testing-intro h2,.testing-section-heading h2 { color:var(--testing-navy); font-size:clamp(29px,4vw,45px); font-weight:800; line-height:1.18; margin:14px 0 18px; }
    .testing-intro h2 span,.testing-section-heading h2 span { color:var(--testing-orange); }
    .testing-intro p,.testing-section-heading p { color:var(--testing-muted); font-size:15px; line-height:1.8; margin:0; }
    .testing-intro-visual { min-height:315px; position:relative; overflow:hidden; border-radius:8px; background:url('assets/images/testing.webp') center/cover; box-shadow:20px 20px 0 rgba(245,130,32,.12); }
    .testing-intro-visual::after { content:'TESTED. VERIFIED. READY.'; position:absolute; left:22px; bottom:20px; color:#fff; background:rgba(10,25,47,.88); padding:12px 15px; font-size:11px; font-weight:800; letter-spacing:1.4px; }
    .testing-section-heading { max-width:700px; margin-bottom:38px; }.testing-section-heading h2 { margin-top:12px; }
    .testing-services { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; }
    .testing-service-card { position:relative; padding:28px 24px; background:#F8FAFC; border:1px solid var(--testing-line); border-radius:7px; transition:.3s ease; }.testing-service-card::before { content:''; position:absolute; left:0; top:0; width:3px; height:0; background:var(--testing-orange); transition:.3s ease; }.testing-service-card:hover { background:#fff; border-color:var(--testing-orange); transform:translateY(-5px); box-shadow:0 16px 30px rgba(10,25,47,.08); }.testing-service-card:hover::before { height:100%; }.testing-icon { width:48px; height:48px; display:grid; place-items:center; color:var(--testing-orange); background:rgba(245,130,32,.12); border-radius:7px; font-size:21px; margin-bottom:19px; }.testing-service-card h3 { color:var(--testing-navy); font-size:17px; line-height:1.35; margin:0 0 10px; }.testing-service-card p { color:var(--testing-muted); font-size:13px; line-height:1.7; margin:0; }
    .testing-process { padding:94px 0; background:var(--testing-navy); color:#fff; }.testing-process .testing-section-heading h2 { color:#fff; }.testing-process .testing-section-heading p { color:#B8C4D3; }.testing-process-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:0; }.testing-step { position:relative; padding:25px 25px 20px 0; margin-right:25px; border-top:1px solid rgba(255,255,255,.25); }.testing-step:not(:last-child)::after { content:'\f061'; position:absolute; top:-9px; right:-5px; color:var(--testing-orange); font:14px 'Font Awesome 6 Free'; font-weight:900; }.testing-step-number { color:var(--testing-orange); font-size:12px; font-weight:800; letter-spacing:1.5px; }.testing-step h3 { color:#fff; font-size:17px; margin:15px 0 10px; }.testing-step p { color:#B8C4D3; font-size:13px; line-height:1.65; margin:0; }
    .testing-maintenance { padding:94px 0; background:#F8FAFC; }.testing-maintenance-grid { display:grid; grid-template-columns:1fr 1fr; gap:26px; }.testing-maintenance-card { padding:32px; background:#fff; border:1px solid var(--testing-line); border-radius:7px; }.testing-maintenance-card h3 { color:var(--testing-navy); font-size:22px; margin:0 0 15px; }.testing-maintenance-card > p { color:var(--testing-muted); font-size:14px; line-height:1.75; margin-bottom:22px; }.testing-list { list-style:none; padding:0; margin:0; display:grid; gap:13px; }.testing-list li { display:flex; gap:11px; color:var(--testing-muted); font-size:13px; line-height:1.55; }.testing-list i { color:var(--testing-orange); margin-top:3px; }.testing-quote { background:var(--testing-orange); color:#fff; border-color:var(--testing-orange); }.testing-quote h3,.testing-quote p { color:#fff; }.testing-quote .testing-list li { color:#fff; }.testing-quote .testing-list i { color:#fff; }
    .testing-faq { padding:94px 0; background:#fff; }.testing-faq-grid { display:grid; grid-template-columns:1fr 1fr; gap:45px 65px; }.testing-faq-item { border-bottom:1px solid var(--testing-line); padding-bottom:20px; }.testing-faq-item h3 { color:var(--testing-navy); font-size:16px; line-height:1.45; margin:0 0 9px; }.testing-faq-item p { color:var(--testing-muted); font-size:13px; line-height:1.7; margin:0; }
    .testing-cta { padding:72px 0; background:linear-gradient(115deg,var(--testing-blue),var(--testing-navy)); }.testing-cta-inner { display:flex; align-items:center; justify-content:space-between; gap:30px; }.testing-cta h2 { color:#fff; font-size:clamp(25px,3.5vw,38px); line-height:1.2; margin:0 0 10px; }.testing-cta p { color:#C5D0DC; font-size:14px; margin:0; }.testing-cta-button { display:inline-flex; align-items:center; gap:10px; flex:0 0 auto; padding:14px 23px; color:#fff; background:var(--testing-orange); border-radius:5px; font-size:13px; font-weight:700; text-decoration:none; }.testing-cta-button:hover { color:#fff; background:#D96A0C; }
    .testing-form-section { padding:92px 0; background:#F8FAFC; }.testing-form-wrap { display:grid; grid-template-columns:.75fr 1.25fr; gap:55px; align-items:start; }.testing-form-wrap h2 { color:var(--testing-navy); font-size:clamp(28px,4vw,42px); line-height:1.2; margin:12px 0 15px; }.testing-form-wrap > div > p { color:var(--testing-muted); font-size:14px; line-height:1.75; }.testing-form { padding:32px; background:#fff; border:1px solid var(--testing-line); border-radius:7px; }.testing-form label { color:var(--testing-ink); display:block; font-size:12px; font-weight:700; margin-bottom:7px; }.testing-form input,.testing-form select,.testing-form textarea { width:100%; border:1px solid var(--testing-line); border-radius:4px; padding:12px; color:var(--testing-ink); font:13px 'Plus Jakarta Sans',sans-serif; outline:none; }.testing-form input,.testing-form select { height:46px; }.testing-form textarea { min-height:115px; resize:vertical; }.testing-form input:focus,.testing-form select:focus,.testing-form textarea:focus { border-color:var(--testing-orange); box-shadow:0 0 0 3px rgba(245,130,32,.12); }.testing-form button { border:0; padding:13px 22px; color:#fff; background:var(--testing-orange); border-radius:4px; font-size:13px; font-weight:700; }.testing-form button:hover { background:#D96A0C; }.testing-form-status { display:none; font-size:13px; margin:13px 0 0; }.testing-form-status.visible { display:block; }
    @media (max-width:900px) { .testing-intro,.testing-maintenance-grid,.testing-form-wrap { grid-template-columns:1fr; gap:35px; }.testing-services { grid-template-columns:repeat(2,1fr); }.testing-process-grid { grid-template-columns:repeat(2,1fr); gap:25px 0; }.testing-faq-grid { gap:30px; }.testing-cta-inner { align-items:flex-start; flex-direction:column; } }
    @media (max-width:600px) { .testing-overview,.testing-process,.testing-maintenance,.testing-faq,.testing-form-section { padding:62px 0; }.testing-services,.testing-faq-grid { grid-template-columns:1fr; }.testing-process-grid { grid-template-columns:1fr; }.testing-step { margin-right:0; padding-right:0; }.testing-step:not(:last-child)::after { display:none; }.testing-form { padding:22px; }.testing-intro-visual { min-height:235px; } }
</style>

<main class="testing-page">
    <section class="testing-overview" id="testing-services">
        <div class="testing-container">
            <div class="testing-intro">
                <div><span class="testing-eyebrow">Confidence at every connection</span><h2>Performance you can <span>prove.</span></h2><p>Testing and commissioning are the final safeguards between an electrical installation and dependable daily operation. Wattsin engineers verify every circuit, panel, protection device, and system interface before handover.</p></div>
                <div class="testing-intro-visual" role="img" aria-label="Electrical testing and commissioning equipment"></div>
            </div>
            <div class="testing-section-heading"><span class="testing-section-label">Our capabilities</span><h2>From first test to <span>long-term care.</span></h2><p>Our structured approach gives project owners, consultants, and facility teams clear results, complete records, and confidence in the system.</p></div>
            <div class="testing-services">
                <article class="testing-service-card"><div class="testing-icon"><i class="fa-solid fa-bolt"></i></div><h3>Electrical safety testing</h3><p>Insulation resistance, continuity, polarity, phase sequence, earth resistance, and protective conductor verification.</p></article>
                <article class="testing-service-card"><div class="testing-icon"><i class="fa-solid fa-gauge-high"></i></div><h3>Protection and relay testing</h3><p>Functional checks for breakers, relays, overload protection, trip settings, and coordination of protective devices.</p></article>
                <article class="testing-service-card"><div class="testing-icon"><i class="fa-solid fa-clipboard-check"></i></div><h3>Commissioning verification</h3><p>Panel energization, load checks, operational sequences, interlocks, control systems, and complete handover documentation.</p></article>
                <article class="testing-service-card"><div class="testing-icon"><i class="fa-solid fa-temperature-half"></i></div><h3>Thermographic inspection</h3><p>Infrared inspection identifies loose connections, overloaded circuits, hot spots, and early signs of equipment failure.</p></article>
                <article class="testing-service-card"><div class="testing-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><h3>Preventive maintenance</h3><p>Planned inspections, cleaning, tightening, lubrication, calibration, and replacement recommendations for critical assets.</p></article>
                <article class="testing-service-card"><div class="testing-icon"><i class="fa-solid fa-rotate"></i></div><h3>Breakdown support</h3><p>Responsive fault investigation and corrective maintenance to restore reliable power with minimal operational disruption.</p></article>
            </div>
        </div>
    </section>

    <section class="testing-process"><div class="testing-container"><div class="testing-section-heading"><span class="testing-section-label">A controlled handover</span><h2>Our commissioning <span>method.</span></h2><p>Every stage is planned, witnessed where required, recorded, and reviewed before the system is released for normal operation.</p></div><div class="testing-process-grid"><article class="testing-step"><span class="testing-step-number">01 / INSPECT</span><h3>Review installation</h3><p>Confirm workmanship, labelling, cable routes, terminations, earthing, and equipment condition.</p></article><article class="testing-step"><span class="testing-step-number">02 / TEST</span><h3>Measure performance</h3><p>Complete approved electrical tests using calibrated instruments and controlled test procedures.</p></article><article class="testing-step"><span class="testing-step-number">03 / COMMISSION</span><h3>Prove operation</h3><p>Energize safely, verify sequences, check protection, and test connected loads under operating conditions.</p></article><article class="testing-step"><span class="testing-step-number">04 / HANDOVER</span><h3>Document results</h3><p>Deliver test certificates, schedules, observations, as-built records, and maintenance recommendations.</p></article></div></div></section>

    <section class="testing-maintenance"><div class="testing-container"><div class="testing-section-heading"><span class="testing-section-label">Maintenance that protects uptime</span><h2>Keep your system <span>ready.</span></h2><p>Routine maintenance catches small issues before they become costly outages and helps equipment perform safely throughout its service life.</p></div><div class="testing-maintenance-grid"><article class="testing-maintenance-card"><h3>Planned maintenance programs</h3><p>We tailor inspection schedules to your equipment, operating hours, risk profile, and compliance requirements.</p><ul class="testing-list"><li><i class="fa-solid fa-check"></i> LT and HT panel inspection</li><li><i class="fa-solid fa-check"></i> Cable, termination, and earthing checks</li><li><i class="fa-solid fa-check"></i> Generator and UPS interface checks</li><li><i class="fa-solid fa-check"></i> Lighting and emergency system testing</li></ul></article><article class="testing-maintenance-card testing-quote" id="quote"><h3>Need a testing plan?</h3><p>Share your project stage, system type, and site location. We will help define the right testing and commissioning scope.</p><ul class="testing-list"><li><i class="fa-solid fa-shield-halved"></i> Safety-first site execution</li><li><i class="fa-solid fa-file-circle-check"></i> Clear, traceable documentation</li><li><i class="fa-solid fa-clock"></i> Planned around your schedule</li><li><i class="fa-solid fa-headset"></i> Support after handover</li></ul></article></div></div></section>

    <section class="testing-faq"><div class="testing-container"><div class="testing-section-heading"><span class="testing-section-label">Common questions</span><h2>Clear answers before <span>handover.</span></h2></div><div class="testing-faq-grid"><article class="testing-faq-item"><h3>When should electrical testing be performed?</h3><p>Testing should be completed after installation and before energization, with additional verification after modifications or major maintenance.</p></article><article class="testing-faq-item"><h3>Do you provide test certificates?</h3><p>Yes. We provide organized test results and commissioning records for the completed scope, subject to the agreed project requirements.</p></article><article class="testing-faq-item"><h3>Can you test existing installations?</h3><p>Yes. Existing systems can be inspected and tested to identify deterioration, unsafe conditions, load concerns, and maintenance priorities.</p></article><article class="testing-faq-item"><h3>Do you offer annual maintenance?</h3><p>We can create periodic maintenance plans for commercial, industrial, and infrastructure electrical systems.</p></article></div></div></section>

    <section class="testing-cta"><div class="testing-container testing-cta-inner"><div><h2>Ready to verify your electrical system?</h2><p>Talk to Wattsin Technologies about testing, commissioning, or ongoing maintenance.</p></div><a class="testing-cta-button" href="contact.php">Discuss your project <i class="fa-solid fa-arrow-right"></i></a></div></section>

    <section class="testing-form-section"><div class="testing-container testing-form-wrap"><div><span class="testing-section-label">Start with the essentials</span><h2>Request a testing and commissioning quote.</h2><p>Tell us about the site and the systems that need attention. Our team will review the scope and respond with the next steps.</p></div><form class="testing-form ajax-enquiry-form" action="mail/submit-enquiry.php" method="post"><input type="hidden" name="website" value=""><div class="row g-3"><div class="col-md-6"><label for="testing-name">Full name</label><input id="testing-name" name="name" type="text" required></div><div class="col-md-6"><label for="testing-email">Email address</label><input id="testing-email" name="email" type="email" required></div><div class="col-md-6"><label for="testing-type">System type</label><select id="testing-type" name="service"><option>Testing &amp; Commissioning</option><option>Preventive Maintenance</option><option>Breakdown Support</option><option>Thermographic Inspection</option></select></div><div class="col-md-6"><label for="testing-phone">Phone number</label><input id="testing-phone" name="phone" type="tel"></div><div class="col-12"><label for="testing-message">Project details</label><textarea id="testing-message" name="message" placeholder="Tell us about your site, system, or required service" required></textarea></div><div class="col-12"><button type="submit">Request a consultation <i class="fa-solid fa-arrow-right ms-2"></i></button><p class="contact-form-status" role="status"></p></div></div></form></div></section>
</main>

<script>
    document.querySelectorAll('.ajax-enquiry-form').forEach(function (form) {
        form.addEventListener('submit', async function (event) {
            event.preventDefault();
            const button = form.querySelector('button[type="submit"]');
            const status = form.querySelector('.testing-form-status');
            button.disabled = true;
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
            try {
                const response = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { 'Accept': 'application/json' } });
                const result = await response.json();
                status.textContent = result.message;
                status.style.color = result.success ? '#166534' : '#B91C1C';
                status.classList.add('visible');
                if (result.success) { form.reset(); }
            } catch (error) {
                status.textContent = 'Unable to send your enquiry right now. Please call us directly.';
                status.style.color = '#B91C1C';
                status.classList.add('visible');
            } finally {
                button.disabled = false;
                button.innerHTML = originalText;
            }
        });
    });
</script>




<?php include "includes/footer.php"; ?>