<?php include "includes/header.php"; ?>

<style>
    .contact-page {
        --contact-navy: #0A192F;
        --contact-blue: #172A45;
        --contact-orange: #F58220;
        --contact-orange-dark: #D96A0C;
        --contact-ink: #0F172A;
        --contact-muted: #64748B;
        --contact-line: #E2E8F0;
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: var(--contact-ink);
        background: #F8FAFC;
    }

    .contact-hero {
        min-height: 510px;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        background: var(--contact-navy);
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(5, 15, 35, .94), rgba(10, 25, 47, .72) 48%, rgba(10, 25, 47, .82));
        z-index: 1;
    }

    .contact-hero-bg {
        position: absolute;
        inset: 0;
        background: url('assets/images/service-01-hero.png') center / cover no-repeat;
        animation: contactHeroZoom 14s ease-in-out infinite alternate;
    }

    @keyframes contactHeroZoom {
        from { transform: scale(1.02); }
        to { transform: scale(1.09); }
    }

    .contact-hero-grid {
        position: absolute;
        inset: 0;
        opacity: .18;
        background-image: linear-gradient(rgba(255,255,255,.12) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.12) 1px, transparent 1px);
        background-size: 54px 54px;
        mask-image: linear-gradient(90deg, black, transparent 75%);
        z-index: 2;
    }

    .contact-hero-inner {
        position: relative;
        z-index: 3;
        width: min(1200px, 90%);
        margin: 0 auto;
        padding: 85px 0;
    }

    .contact-breadcrumb {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #CBD5E1;
        font-size: 13px;
        margin-bottom: 58px;
    }

    .contact-breadcrumb a {
        color: #FFFFFF;
        text-decoration: none;
    }

    .contact-breadcrumb a:hover { color: var(--contact-orange); }
    .contact-breadcrumb i { color: var(--contact-orange); font-size: 11px; }

    .contact-hero-copy { max-width: 690px; animation: contactReveal .8s ease both; }

    @keyframes contactReveal {
        from { opacity: 0; transform: translateY(18px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .contact-kicker {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: var(--contact-orange);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .contact-kicker::before {
        content: '';
        width: 34px;
        height: 2px;
        background: var(--contact-orange);
    }

    .contact-hero h1 {
        color: #FFFFFF;
        font-size: clamp(38px, 5.4vw, 70px);
        line-height: 1.08;
        letter-spacing: -.8px;
        margin: 0 0 20px;
        font-weight: 800;
    }

    .contact-hero h1 span { color: var(--contact-orange); }

    .contact-hero p {
        max-width: 560px;
        color: #CBD5E1;
        font-size: 17px;
        line-height: 1.75;
        margin: 0;
    }

    .contact-main { padding: 92px 0 100px; }

    .contact-container { width: min(1200px, 90%); margin: 0 auto; }

    .contact-intro {
        max-width: 690px;
        margin-bottom: 48px;
    }

    .contact-intro-label {
        color: var(--contact-orange);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1.8px;
        text-transform: uppercase;
    }

    .contact-intro h2 {
        color: var(--contact-ink);
        font-size: clamp(28px, 4vw, 44px);
        line-height: 1.2;
        margin: 12px 0 16px;
        font-weight: 800;
    }

    .contact-intro p { color: var(--contact-muted); line-height: 1.75; margin: 0; }

    .contact-layout { display: grid; grid-template-columns: .82fr 1.18fr; gap: 28px; align-items: stretch; }

    .contact-info-panel {
        position: relative;
        overflow: hidden;
        padding: 38px;
        color: #FFFFFF;
        background: var(--contact-navy);
        border-radius: 8px;
        box-shadow: 0 18px 44px rgba(10, 25, 47, .14);
    }

    .contact-info-panel::after {
        content: '\f0e7';
        position: absolute;
        right: -8px;
        bottom: -28px;
        color: rgba(245, 130, 32, .1);
        font: 160px 'Font Awesome 6 Free';
        font-weight: 900;
        transform: rotate(-14deg);
    }

    .contact-info-panel h3 { position: relative; z-index: 1; font-size: 25px; margin: 0 0 12px; }
    .contact-info-panel > p { position: relative; z-index: 1; color: #B8C4D3; line-height: 1.7; font-size: 14px; margin-bottom: 34px; }

    .contact-detail { position: relative; z-index: 1; display: flex; gap: 15px; align-items: flex-start; margin-top: 25px; }
    .contact-detail-icon { width: 42px; height: 42px; flex: 0 0 42px; display: grid; place-items: center; color: var(--contact-orange); background: rgba(245, 130, 32, .13); border: 1px solid rgba(245, 130, 32, .25); border-radius: 8px; }
    .contact-detail strong { display: block; color: #FFFFFF; font-size: 13px; margin-bottom: 5px; }
    .contact-detail a, .contact-detail span { color: #B8C4D3; font-size: 14px; line-height: 1.6; text-decoration: none; }
    .contact-detail a:hover { color: var(--contact-orange); }

    .contact-form-panel { padding: 38px; background: #FFFFFF; border: 1px solid var(--contact-line); border-radius: 8px; box-shadow: 0 18px 44px rgba(10, 25, 47, .06); }
    .contact-form-panel h3 { color: var(--contact-ink); font-size: 25px; margin: 0 0 8px; }
    .contact-form-panel > p { color: var(--contact-muted); font-size: 14px; margin-bottom: 27px; }
    .contact-form .form-label { color: var(--contact-ink); font-size: 12px; font-weight: 700; margin-bottom: 8px; }
    .contact-form .form-control, .contact-form .form-select { min-height: 48px; padding: 12px 14px; border-color: var(--contact-line); border-radius: 5px; color: var(--contact-ink); font-size: 14px; box-shadow: none; }
    .contact-form textarea.form-control { min-height: 125px; resize: vertical; }
    .contact-form .form-control:focus, .contact-form .form-select:focus { border-color: var(--contact-orange); box-shadow: 0 0 0 3px rgba(245, 130, 32, .12); }
    .contact-submit { border: 0; display: inline-flex; align-items: center; gap: 10px; padding: 13px 23px; background: var(--contact-orange); color: #FFFFFF; border-radius: 5px; font-size: 14px; font-weight: 700; transition: .25s ease; }
    .contact-submit:hover { background: var(--contact-orange-dark); transform: translateY(-2px); }
    .contact-form-status { display: none; color: #166534; font-size: 13px; margin: 14px 0 0; }
    .contact-form-status.visible { display: block; }

    .contact-bottom { padding: 0 0 92px; background: #FFFFFF; }
    .contact-bottom-inner { width: min(1200px, 90%); margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 28px; }
    .contact-route { min-height: 250px; padding: 34px; background: #F1F5F9; border-radius: 8px; display: flex; flex-direction: column; justify-content: center; }
    .contact-route h3 { color: var(--contact-ink); margin: 0 0 12px; font-size: 24px; }
    .contact-route p { color: var(--contact-muted); line-height: 1.7; font-size: 14px; max-width: 410px; margin-bottom: 22px; }
    .contact-route-link { color: var(--contact-orange-dark); font-size: 14px; font-weight: 700; text-decoration: none; }
    .contact-route-link:hover { color: var(--contact-navy); }
    .contact-map { min-height: 250px; overflow: hidden; border-radius: 8px; border: 1px solid var(--contact-line); }
    .contact-map iframe { width: 100%; height: 100%; min-height: 250px; border: 0; filter: saturate(.72); }

    @media (max-width: 900px) {
        .contact-layout, .contact-bottom-inner { grid-template-columns: 1fr; }
        .contact-hero-inner { padding: 70px 0; }
        .contact-breadcrumb { margin-bottom: 45px; }
    }

    @media (max-width: 576px) {
        .contact-main { padding: 62px 0 70px; }
        .contact-info-panel, .contact-form-panel { padding: 26px 22px; }
        .contact-hero { min-height: 470px; }
        .contact-hero p { font-size: 15px; }
        .contact-bottom { padding-bottom: 70px; }
        .contact-route { padding: 27px 22px; }
    }
</style>

<main class="contact-page">
    <section class="contact-hero" aria-labelledby="contact-title">
        <div class="contact-hero-bg" aria-hidden="true"></div>
        <div class="contact-hero-grid" aria-hidden="true"></div>
        <div class="contact-hero-inner">
            <nav class="contact-breadcrumb" aria-label="Breadcrumb">
                <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                <span aria-current="page">Contact Us</span>
            </nav>
            <div class="contact-hero-copy">
                <div class="contact-kicker">Start a conversation</div>
                <h1 id="contact-title">Let’s build power<br><span>that performs.</span></h1>
                <p>Tell us what your project needs. Our electrical engineering team is ready to help you plan, execute, and deliver with confidence.</p>
            </div>
        </div>
    </section>

    <section class="contact-main" aria-labelledby="enquiry-title">
        <div class="contact-container">
            <div class="contact-intro">
                <span class="contact-intro-label">Connect with Wattsin</span>
                <h2 id="enquiry-title">Your next project starts here.</h2>
                <p>Whether you need a complete installation, a power distribution solution, or expert guidance for an ongoing project, share a few details and we will get back to you.</p>
            </div>

            <div class="contact-layout">
                <aside class="contact-info-panel" aria-label="Wattsin contact information">
                    <h3>Talk to our team</h3>
                    <p>Reach us directly for project discussions, site requirements, and technical enquiries.</p>

                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="fa-solid fa-phone"></i></div>
                        <div><strong>Call us</strong><a href="tel:+919876543210">+91 63819 43623</a></div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div><strong>Email us</strong><a href="mailto:info@wattsintech.com">Info@wattsintechnologies.in</a></div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div><strong>Visit us</strong><span>No 199, 2nd floor -SIVA CLINIC BUILDING , ALAPAKKAM 
MAIN ROAD , KULLANCHAVADI  
CUDDALORE- 607301</span></div>
                    </div>
                </aside>

                <div class="contact-form-panel">
                    <h3>Send an enquiry</h3>
                    <p>Fields marked with an asterisk are required.</p>
                    <form class="contact-form ajax-enquiry-form" id="contactForm" action="mail/submit-enquiry.php" method="post">
                        <input type="hidden" name="website" value="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="contactName">Full name *</label>
                                <input class="form-control" type="text" id="contactName" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="contactEmail">Email address *</label>
                                <input class="form-control" type="email" id="contactEmail" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="contactPhone">Phone number</label>
                                <input class="form-control" type="tel" id="contactPhone" name="phone">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="contactService">Service required *</label>
                                <select class="form-select" id="contactService" name="service" required>
                                    <option value="" selected disabled>Select a service</option>
                                    <option>Commercial Building Works</option>
                                    <option>Industrial Electrical</option>
                                    <option>Electrical Panel Installation</option>
                                    <option>Cable Laying &amp; Termination</option>
                                    <option>Testing &amp; Commissioning</option>
                                    <option>Other enquiry</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="contactMessage">Tell us about your project *</label>
                                <textarea class="form-control" id="contactMessage" name="message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="contact-submit" type="submit"><i class="fa-solid fa-paper-plane"></i> Send enquiry</button>
                                <p class="contact-form-status" id="contactFormStatus" role="status">Thank you. Your enquiry details are ready to be sent.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-bottom" aria-label="Find Wattsin Technologies">
        <div class="contact-bottom-inner">
            <div class="contact-route">
                <span class="contact-intro-label">Plan a visit</span>
                <h3>Find our office</h3>
                <p>We welcome project conversations at our Chennai office. Call ahead so our team can prepare for your visit.</p>
                <a class="contact-route-link" href="https://www.google.com/maps/search/?api=1&query=Industrial+Zone+Chennai+Tamil+Nadu" target="_blank" rel="noopener noreferrer">Get directions <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            <div class="contact-map" aria-label="Map showing Wattsin Technologies location">
                <iframe title="Wattsin Technologies location map" src="https://www.google.com/maps?q=Industrial+Zone,+Chennai,+Tamil+Nadu&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</main>

<script>
document.querySelectorAll('.ajax-enquiry-form').forEach(function (form) {

    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        const button = form.querySelector('button[type="submit"]');
        const status = form.querySelector('.contact-form-status');

        if (!button || !status) {
            console.error('Submit button or status element not found.');
            return;
        }

        const originalText = button.innerHTML;

        button.disabled = true;
        button.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';

        status.textContent = 'Sending your enquiry...';
        status.classList.add('visible');
        status.style.color = '#64748b';

        try {

            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'Accept': 'application/json'
                }
            });

            const responseText = await response.text();

            let result;

            try {
                result = JSON.parse(responseText);
            } catch (e) {
                console.error('Invalid server response:', responseText);
                throw new Error('Server returned an invalid response.');
            }

            if (!response.ok || !result.success) {
                throw new Error(result.message || 'Unable to send your enquiry.');
            }

            status.textContent = result.message || 'Your enquiry has been submitted successfully.';
            status.style.color = '#166534';

            form.reset();

        } catch (error) {

            console.error('Enquiry submission error:', error);

            status.textContent = error.message || 'Unable to send your enquiry. Please call us directly.';
            status.style.color = '#B91C1C';

        } finally {

            status.classList.add('visible');
            button.disabled = false;
            button.innerHTML = originalText;

        }

    });

});
</script>

<?php include "includes/footer.php"; ?>
