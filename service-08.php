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
            background: url('assets/images/Electrical Renovation & Upgradation.webp') no-repeat center center/cover;
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
                Electrical Renovation &amp; Upgradation
            </span>

        </nav>


        <div class="hero-title-area">

            <div class="service-badge">
                <i class="fa-solid fa-arrows-rotate"></i>
                Electrical Renovation &amp; Upgradation
            </div>


            <h1>
                Electrical Renovation
                <span>&amp; Upgradation</span>
            </h1>


            <p>
                Upgrade and modernize existing electrical infrastructure with
                safe, reliable, and efficient electrical renovation solutions
                designed to improve system performance, capacity, safety, and
                long-term operational reliability.
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
    .renovation-page { --renovation-navy:#0A192F; --renovation-blue:#172A45; --renovation-orange:#F58220; --renovation-ink:#0F172A; --renovation-muted:#64748B; --renovation-line:#E2E8F0; color:var(--renovation-ink); background:#F8FAFC; font-family:'Plus Jakarta Sans',sans-serif; }
    .renovation-section { padding:92px 0; background:#fff; }.renovation-container { width:min(1200px,90%); margin:0 auto; }.renovation-intro { display:grid; grid-template-columns:1fr 1fr; gap:70px; align-items:center; margin-bottom:78px; }.renovation-label { color:var(--renovation-orange); font-size:12px; font-weight:800; letter-spacing:1.8px; text-transform:uppercase; }.renovation-intro h2,.renovation-heading h2 { color:var(--renovation-navy); font-size:clamp(29px,4vw,45px); line-height:1.18; font-weight:800; margin:13px 0 18px; }.renovation-intro h2 span,.renovation-heading h2 span { color:var(--renovation-orange); }.renovation-intro p,.renovation-heading p { color:var(--renovation-muted); font-size:15px; line-height:1.8; margin:0; }.renovation-visual { min-height:325px; position:relative; overflow:hidden; border-radius:8px; background:url('assets/images/Electrical Renovation & Upgradation.webp') center/cover; box-shadow:-20px 20px 0 rgba(245,130,32,.12); }.renovation-visual::after { content:'RENEW. IMPROVE. PROTECT.'; position:absolute; right:20px; bottom:20px; color:#fff; background:rgba(10,25,47,.9); padding:12px 15px; font-size:11px; font-weight:800; letter-spacing:1.4px; }.renovation-heading { max-width:700px; margin-bottom:38px; }.renovation-services { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; }.renovation-card { position:relative; padding:28px 24px; background:#F8FAFC; border:1px solid var(--renovation-line); border-radius:7px; transition:.3s ease; }.renovation-card::before { content:''; position:absolute; top:0; left:0; width:3px; height:0; background:var(--renovation-orange); transition:.3s ease; }.renovation-card:hover { background:#fff; border-color:var(--renovation-orange); transform:translateY(-5px); box-shadow:0 16px 32px rgba(10,25,47,.08); }.renovation-card:hover::before { height:100%; }.renovation-icon { width:48px; height:48px; display:grid; place-items:center; margin-bottom:18px; color:var(--renovation-orange); background:rgba(245,130,32,.12); border-radius:7px; font-size:21px; }.renovation-card h3 { color:var(--renovation-navy); font-size:17px; line-height:1.35; margin:0 0 10px; }.renovation-card p { color:var(--renovation-muted); font-size:13px; line-height:1.7; margin:0; }
    .renovation-dark { padding:94px 0; color:#fff; background:var(--renovation-navy); }.renovation-dark .renovation-heading h2 { color:#fff; }.renovation-dark .renovation-heading p { color:#B8C4D3; }.renovation-workflow { display:grid; grid-template-columns:repeat(4,1fr); }.renovation-step { position:relative; padding:25px 25px 20px 0; margin-right:25px; border-top:1px solid rgba(255,255,255,.25); }.renovation-step:not(:last-child)::after { content:'\f061'; position:absolute; top:-9px; right:-5px; color:var(--renovation-orange); font:14px 'Font Awesome 6 Free'; font-weight:900; }.renovation-step-number { color:var(--renovation-orange); font-size:12px; font-weight:800; letter-spacing:1.5px; }.renovation-step h3 { color:#fff; font-size:17px; margin:15px 0 10px; }.renovation-step p { color:#B8C4D3; font-size:13px; line-height:1.65; margin:0; }
    .renovation-benefits { padding:94px 0; background:#F8FAFC; }.renovation-benefit-grid { display:grid; grid-template-columns:1fr 1fr; gap:25px; }.renovation-benefit { padding:32px; background:#fff; border:1px solid var(--renovation-line); border-radius:7px; }.renovation-benefit.highlight { color:#fff; background:var(--renovation-orange); border-color:var(--renovation-orange); }.renovation-benefit h3 { color:var(--renovation-navy); font-size:22px; margin:0 0 14px; }.renovation-benefit.highlight h3 { color:#fff; }.renovation-benefit p { color:var(--renovation-muted); font-size:14px; line-height:1.75; margin-bottom:20px; }.renovation-benefit.highlight p { color:#fff; }.renovation-list { display:grid; gap:13px; list-style:none; padding:0; margin:0; }.renovation-list li { display:flex; gap:11px; color:var(--renovation-muted); font-size:13px; line-height:1.5; }.renovation-benefit.highlight li { color:#fff; }.renovation-list i { color:var(--renovation-orange); margin-top:3px; }.renovation-benefit.highlight i { color:#fff; }
    .renovation-faq { padding:92px 0; background:#fff; }.renovation-faq-grid { display:grid; grid-template-columns:1fr 1fr; gap:32px 60px; }.renovation-faq-item { padding-bottom:20px; border-bottom:1px solid var(--renovation-line); }.renovation-faq-item h3 { color:var(--renovation-navy); font-size:16px; line-height:1.4; margin:0 0 9px; }.renovation-faq-item p { color:var(--renovation-muted); font-size:13px; line-height:1.7; margin:0; }
    .renovation-quote { padding:92px 0; background:#F8FAFC; }.renovation-quote-grid { display:grid; grid-template-columns:.78fr 1.22fr; gap:55px; align-items:start; }.renovation-quote h2 { color:var(--renovation-navy); font-size:clamp(28px,4vw,42px); line-height:1.2; margin:13px 0 15px; }.renovation-quote-copy p { color:var(--renovation-muted); font-size:14px; line-height:1.75; }.renovation-form { padding:32px; background:#fff; border:1px solid var(--renovation-line); border-radius:7px; }.renovation-form label { display:block; color:var(--renovation-ink); font-size:12px; font-weight:700; margin-bottom:7px; }.renovation-form input,.renovation-form select,.renovation-form textarea { width:100%; border:1px solid var(--renovation-line); border-radius:4px; padding:12px; color:var(--renovation-ink); font:13px 'Plus Jakarta Sans',sans-serif; outline:none; }.renovation-form input,.renovation-form select { height:46px; }.renovation-form textarea { min-height:115px; resize:vertical; }.renovation-form input:focus,.renovation-form select:focus,.renovation-form textarea:focus { border-color:var(--renovation-orange); box-shadow:0 0 0 3px rgba(245,130,32,.12); }.renovation-form button { border:0; padding:13px 22px; color:#fff; background:var(--renovation-orange); border-radius:4px; font-size:13px; font-weight:700; }.renovation-form button:hover { background:#D96A0C; }.renovation-form-status { display:none; font-size:13px; line-height:1.5; margin:13px 0 0; }.renovation-form-status.visible { display:block; }
    @media (max-width:900px) { .renovation-intro,.renovation-benefit-grid,.renovation-quote-grid { grid-template-columns:1fr; gap:35px; }.renovation-services { grid-template-columns:repeat(2,1fr); }.renovation-workflow { grid-template-columns:repeat(2,1fr); gap:25px 0; }.renovation-faq-grid { gap:30px; } }
    @media (max-width:600px) { .renovation-section,.renovation-dark,.renovation-benefits,.renovation-faq,.renovation-quote { padding:62px 0; }.renovation-services,.renovation-faq-grid,.renovation-workflow { grid-template-columns:1fr; }.renovation-step { margin-right:0; padding-right:0; }.renovation-step:not(:last-child)::after { display:none; }.renovation-form { padding:22px; }.renovation-visual { min-height:240px; } }
</style>

<main class="renovation-page">
    <section class="renovation-section" id="renovation-services"><div class="renovation-container"><div class="renovation-intro"><div><span class="renovation-label">Modern infrastructure, built around you</span><h2>Make existing systems work <span>smarter.</span></h2><p>Electrical renovation is more than replacing old equipment. We study how your facility operates, identify risks and capacity limits, and upgrade the system in a planned way that improves safety, efficiency, flexibility, and long-term reliability.</p></div><div class="renovation-visual" role="img" aria-label="Electrical renovation and upgradation project"></div></div><div class="renovation-heading"><span class="renovation-label">Our renovation scope</span><h2>Upgrade the parts that matter <span>most.</span></h2><p>From an isolated panel replacement to a complete building electrical modernization, our team coordinates the technical work around your operational needs.</p></div><div class="renovation-services"><article class="renovation-card"><div class="renovation-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div><h3>Electrical system audit</h3><p>Assess existing panels, loads, cable routes, protection, earthing, and documentation to establish a clear upgrade plan.</p></article><article class="renovation-card"><div class="renovation-icon"><i class="fa-solid fa-arrows-rotate"></i></div><h3>Rewiring and replacement</h3><p>Replace ageing, damaged, undersized, or poorly routed wiring with organized and dependable modern installations.</p></article><article class="renovation-card"><div class="renovation-icon"><i class="fa-solid fa-table-columns"></i></div><h3>Panel modernization</h3><p>Upgrade distribution boards, switchboards, breakers, busbars, metering, labelling, and protection arrangements.</p></article><article class="renovation-card"><div class="renovation-icon"><i class="fa-solid fa-chart-line"></i></div><h3>Capacity enhancement</h3><p>Prepare electrical infrastructure for new machinery, additional floors, increased loads, and future expansion.</p></article><article class="renovation-card"><div class="renovation-icon"><i class="fa-solid fa-lightbulb"></i></div><h3>Lighting improvement</h3><p>Modernize lighting layouts with efficient fixtures, emergency lighting, controls, and improved visibility.</p></article><article class="renovation-card"><div class="renovation-icon"><i class="fa-solid fa-shield-halved"></i></div><h3>Safety and compliance</h3><p>Improve earthing, fault protection, cable identification, access, housekeeping, and safe maintenance conditions.</p></article></div></div></section>
    <section class="renovation-dark"><div class="renovation-container"><div class="renovation-heading"><span class="renovation-label">A controlled transformation</span><h2>Renovate without losing <span>momentum.</span></h2><p>We plan each phase to protect people, equipment, and business continuity while the electrical infrastructure is improved.</p></div><div class="renovation-workflow"><article class="renovation-step"><span class="renovation-step-number">01 / SURVEY</span><h3>Understand the site</h3><p>Review the existing installation, operating pattern, drawings, loads, risks, and improvement priorities.</p></article><article class="renovation-step"><span class="renovation-step-number">02 / DESIGN</span><h3>Plan the upgrade</h3><p>Develop a practical scope, equipment schedule, routing plan, phasing sequence, and testing requirements.</p></article><article class="renovation-step"><span class="renovation-step-number">03 / EXECUTE</span><h3>Install with control</h3><p>Coordinate shutdowns, isolate safely, execute the work, and maintain clear site communication throughout.</p></article><article class="renovation-step"><span class="renovation-step-number">04 / VERIFY</span><h3>Test and hand over</h3><p>Complete testing, commissioning, as-built updates, user guidance, and maintenance recommendations.</p></article></div></div></section>
    <section class="renovation-benefits"><div class="renovation-container"><div class="renovation-heading"><span class="renovation-label">The value of a planned upgrade</span><h2>Better performance, <span>less uncertainty.</span></h2><p>A well-planned renovation turns hidden electrical risks into visible, manageable improvements.</p></div><div class="renovation-benefit-grid"><article class="renovation-benefit"><h3>What improves after renovation</h3><p>We focus on measurable operational improvements that make your facility safer and easier to manage.</p><ul class="renovation-list"><li><i class="fa-solid fa-check"></i> More dependable power distribution</li><li><i class="fa-solid fa-check"></i> Reduced overload and fault risk</li><li><i class="fa-solid fa-check"></i> Better energy and lighting efficiency</li><li><i class="fa-solid fa-check"></i> Clearer access, labelling, and maintenance</li></ul></article><article class="renovation-benefit highlight"><h3>Designed for the next stage</h3><p>Renovation work should solve today's problems while preparing your electrical system for tomorrow's requirements.</p><ul class="renovation-list"><li><i class="fa-solid fa-circle-check"></i> Space for future circuits and equipment</li><li><i class="fa-solid fa-circle-check"></i> Scalable panel and cable infrastructure</li><li><i class="fa-solid fa-circle-check"></i> Documented, testable installation</li><li><i class="fa-solid fa-circle-check"></i> Support from planning through handover</li></ul></article></div></div></section>
    <section class="renovation-faq"><div class="renovation-container"><div class="renovation-heading"><span class="renovation-label">Renovation questions</span><h2>Start with a clearer <span>picture.</span></h2></div><div class="renovation-faq-grid"><article class="renovation-faq-item"><h3>Can you renovate an occupied building?</h3><p>Yes. We can phase the work around operating hours, planned shutdowns, access restrictions, and critical loads.</p></article><article class="renovation-faq-item"><h3>How do we know what needs to be replaced?</h3><p>A site survey and electrical audit identify ageing equipment, unsafe conditions, capacity limits, and upgrade priorities.</p></article><article class="renovation-faq-item"><h3>Can you work with our existing drawings?</h3><p>Yes. Existing drawings and records are reviewed against site conditions and updated where the project scope requires it.</p></article><article class="renovation-faq-item"><h3>Will the upgraded system be tested?</h3><p>All agreed renovation work is inspected, tested, and commissioned before handover with clear results and recommendations.</p></article></div></div></section>
    <section class="renovation-quote" id="quote"><div class="renovation-container renovation-quote-grid"><div class="renovation-quote-copy"><span class="renovation-label">Plan your upgrade</span><h2>Give your existing system a stronger future.</h2><p>Tell us about your building, facility, or electrical challenge. Our team will help you define a practical renovation and upgradation scope.</p></div><form class="renovation-form ajax-enquiry-form" action="mail/submit-enquiry.php" method="post"><input type="hidden" name="website" value=""><div class="row g-3"><div class="col-md-6"><label for="renovation-name">Full name</label><input id="renovation-name" name="name" type="text" required></div><div class="col-md-6"><label for="renovation-email">Email address</label><input id="renovation-email" name="email" type="email" required></div><div class="col-md-6"><label for="renovation-phone">Phone number</label><input id="renovation-phone" name="phone" type="tel"></div><div class="col-md-6"><label for="renovation-service">Upgrade focus</label><select id="renovation-service" name="service"><option>Electrical Renovation &amp; Upgradation</option><option>Electrical System Audit</option><option>Rewiring and Replacement</option><option>Panel Modernization</option><option>Capacity Enhancement</option></select></div><div class="col-12"><label for="renovation-message">Project details</label><textarea id="renovation-message" name="message" placeholder="Tell us about your existing system and planned improvements" required></textarea></div><div class="col-12"><button type="submit">Request a project quote <i class="fa-solid fa-arrow-right ms-2"></i></button><p class="renovation-form-status" role="status"></p></div></div></form></div></section>
</main>

<script>
    document.querySelectorAll('.ajax-enquiry-form').forEach(function (form) {
        form.addEventListener('submit', async function (event) {
            event.preventDefault();
            const button = form.querySelector('button[type="submit"]');
            const status = form.querySelector('.renovation-form-status');
            const originalText = button.innerHTML;
            button.disabled = true;
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