<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Powering Industries - Electrical Engineering</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
            background-color: #050f23;
        }

        .hero {
            height: 100vh;
            width: 100vw;
            position: relative;
            overflow: hidden;
        }

        .hero video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            object-fit: cover;
            z-index: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(5, 15, 35, 0.65), rgba(5, 15, 35, 0.45));
            z-index: 2;
        }

        .hero-content {
            position: absolute;
            left: 8%;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            z-index: 5;
            max-width: 650px;
            will-change: opacity, transform;
        }

        .badge {
            display: inline-block;
            padding: 8px 16px;
            background: rgba(245, 130, 32, 0.2);
            border: 1px solid #f58220;
            color: #f58220;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(38px, 5vw, 65px);
            font-weight: 700;
            line-height: 1.1;
            margin: 0 0 20px 0;
        }

        .hero p {
            margin: 0;
            font-size: clamp(16px, 2vw, 20px);
            color: #cbd5e1;
        }

        .btn-main {
            display: inline-block;
            margin-top: 35px;
            padding: 18px 45px;
            background: #f58220;
            color: #fff;
            text-decoration: none;
            border-radius: 40px;
            font-weight: 600;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn-main:hover {
            background: #d46c14;
            transform: translateY(-2px);
        }

        /* Stage Indicator Styling */
        .stage-indicator {
            position: absolute;
            bottom: 40px;
            right: 60px;
            z-index: 5;
            color: #fff;
            text-align: right;
            opacity: 0;
            will-change: opacity;
        }

        .stage-count {
            display: block;
            font-size: 14px;
            letter-spacing: 2px;
            color: #f58220;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .stage-title {
            font-size: 24px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }

        /* Next Section */
        .next-section {
            height: 100vh;
            background: #ffffff;
            color: #0f172a;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            z-index: 10;
        }

        .next-section h2 {
            font-size: 40px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <section class="hero" id="heroSection">
        <video
            id="heroVideo"
            preload="auto"
            muted
            playsinline
        >
            <source src="hero-01.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="overlay"></div>

        <div class="hero-content" id="heroContent">
            <span class="badge">Electrical Engineering Company</span>
            <h1>
                Powering Industries
                <br>
                With Reliable
                Electrical Solutions
            </h1>
            <p>Commercial • Industrial • HT • LT Installation</p>
            <a href="#quote" class="btn-main">Get Free Quote</a>
        </div>

        <div class="stage-indicator" id="stageIndicator">
            <span class="stage-count" id="stageCount">01 / 08</span>
            <span class="stage-title" id="stageTitle">Foundation & Site Prep</span>
        </div>
    </section>

    <section class="next-section">
        <div class="container">
            <h2>Next Section Content</h2>
            <p>The pinned video sequence has completed, and normal page scrolling resumes here.</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>
    
    <script>
        gsap.registerPlugin(ScrollTrigger);

        const video = document.querySelector("#heroVideo");
        const heroContent = document.querySelector("#heroContent");
        const stageIndicator = document.querySelector("#stageIndicator");
        const stageCountEl = document.querySelector("#stageCount");
        const stageTitleEl = document.querySelector("#stageTitle");

        // Define your 8 precise milestone stages corresponding to video timestamps (%)
        const constructionStages = [
            { progress: 0.00, count: "01 / 08", title: "Foundation & Site Prep" },
            { progress: 0.15, count: "02 / 08", title: "Steel Framework Structure" },
            { progress: 0.30, count: "03 / 08", title: "Concrete Floor Slabs" },
            { progress: 0.45, count: "04 / 08", title: "Glass Facade & Cladding" },
            { progress: 0.60, count: "05 / 08", title: "Electrical Conduit Laying" },
            { progress: 0.75, count: "06 / 08", title: "Heavy Duty Cable Tray Routing" },
            { progress: 0.90, count: "07 / 08", title: "Lighting & Panel Installation" },
            { progress: 1.00, count: "08 / 08", title: "Completed Commercial Building" }
        ];

        video.pause();

        video.onloadedmetadata = function () {
            let videoDuration = video.duration;

            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: "#heroSection",
                    start: "top top",
                    end: "+=6000", // Length of Y-axis scroll distance for scrubbing
                    scrub: 0.5,    // Smooth binding to scroll wheel
                    pin: true,
                    anticipatePin: 1,
                    onUpdate: (self) => {
                        updateStageText(self.progress);
                    }
                }
            });

            // 1. Scrub video current time
            tl.to(video, {
                currentTime: videoDuration,
                ease: "none"
            }, 0);

            // 2. Fade out initial intro text
            tl.to(heroContent, {
                opacity: 0,
                y: -30,
                duration: 0.1,
                ease: "power1.in"
            }, 0);

            // 3. Fade in stage tracking labels
            tl.to(stageIndicator, {
                opacity: 1,
                duration: 0.05
            }, 0.08);

            // Fade out stage indicator right before pin ends
            tl.to(stageIndicator, {
                opacity: 0,
                duration: 0.05
            }, 0.95);
        };

        function updateStageText(progress) {
            let currentStage = constructionStages[0];
            
            for (let i = 0; i < constructionStages.length; i++) {
                if (progress >= constructionStages[i].progress) {
                    currentStage = constructionStages[i];
                }
            }

            if (stageCountEl.innerText !== currentStage.count) {
                stageCountEl.innerText = currentStage.count;
                stageTitleEl.innerText = currentStage.title;
            }
        }
    </script>
</body>
</html>