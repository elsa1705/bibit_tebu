<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Josiefarms - Agriculture & Organic Farming</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #fff; /* ubah background jadi putih total */
            color: #333;
        }
        header {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            padding: 0 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 80px;
            z-index: 2;
            position: relative;
        }
        .logo {
            font-size: 2rem;
            font-weight: 700;
            color: #6a9739;
            letter-spacing: 2px;
        }
        nav {
            flex: 1;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            position: relative;
        }
        .nav-menu {
            display: flex;
            gap: 30px;
            align-items: center;
        }
        .nav-item {
            position: relative;
        }
        .nav-link {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 8px 0;
            transition: color 0.2s;
            background: none;
            border: none;
            font-family: inherit;
            font-size: 1rem;
            cursor: pointer;
        }
        .nav-link:hover {
            color: #6a9739;
        }
        .dropdown {
            position: absolute;
            left: 0;
            top: 100%;
            min-width: 160px;
            background: #fff;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            border-radius: 8px;
            display: none;
            flex-direction: column;
            z-index: 10;
            margin-top: 8px;
        }
        .nav-item:hover .dropdown,
        .nav-item:focus-within .dropdown {
            display: flex;
            animation: dropdownFade 0.3s;
        }
        .dropdown a {
            color: #333;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 6px;
            transition: background 0.2s, color 0.2s;
        }
        .dropdown a:hover {
            background: #eaf6e3;
            color: #6a9739;
        }
        .cta-btn,
        .nav-btn,
        .about-btn,
        .taste-section button {
            background: #ffd600;
            color: #333;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            padding: 10px 24px;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 4px 16px rgba(255,214,0,0.12);
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .cta-btn:hover,
        .nav-btn:hover,
        .about-btn:hover,
        .taste-section button:hover {
            background: #ffe066;
            color: #6a9739;
            transform: scale(1.05);
        }
        @keyframes dropdownFade {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hero {
            position: relative;
            width: 100vw;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
        }
        .hero-bg {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }
        .hero-bg img {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            filter: brightness(0.7) saturate(1.1);
            opacity: 0;
            transform: scale(1.08);
            animation: heroImgFade 1.2s 0.2s forwards;
        }
        @keyframes heroImgFade {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
            color: #fff;
            text-align: left;
            padding: 40px;
            background: none;
            box-shadow: none;
            margin-left: 5vw;
        }
        .hero-content h1 {
            font-size: 3.2rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(40px);
            animation: fadeUp 1s 0.5s forwards;
            text-shadow: 0 2px 16px rgba(0,0,0,0.18);
        }
        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 32px;
            opacity: 0;
            transform: translateY(40px);
            animation: fadeUp 1s 0.9s forwards;
            text-shadow: 0 2px 12px rgba(0,0,0,0.12);
        }
        .hero-content .cta-btn {
            background:#6a9739;
            color:#fff;
            padding:14px 38px;
            border-radius:8px;
            text-decoration:none;
            font-weight:700;
            font-size:1.15rem;
            box-shadow: 0 4px 16px rgba(106,151,57,0.12);
            transition: background 0.2s, transform 0.2s;
            opacity: 0;
            transform: translateY(40px);
            animation: fadeUp 1s 1.3s forwards;
        }
        .hero-content .cta-btn:hover {
            background: #4e7c2c;
            transform: scale(1.07);
        }
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .features {
            background: #fff;
            padding: 36px 0 24px 0;
            display: flex;
            justify-content: flex-start;
        }
        .features-container {
            display: flex;
            gap: 3cm;
            width: 100%;
            margin-left: 120px;
            margin-right: 0;
            max-width: none;
            align-items: flex-start;
        }
        .feature-item {
            background: none;
            border-radius: 12px;
            box-shadow: none;
            padding: 0 8px;
            flex: 1 1 0;
            min-width: 0;
            text-align: left;
            display: flex;
            align-items: flex-start;
            gap: 8px;
            justify-content: flex-start;
            max-width: 320px;
            flex-direction: row;
        }
        .feature-item:nth-child(1) {
            justify-content: flex-start;
        }
        .feature-item:nth-child(2) {
            margin-left: 2cm !important;
            margin-right: 3cm !important;
        }
        .feature-item:nth-child(3) {
            margin-left: auto !important;
            margin-right: 2cm !important;
            justify-content: flex-end !important;
        }
        .feature-item .feature-icon {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            min-width: 80px;
            min-height: 80px;
            margin-bottom: 0;
        }
        .feature-item .feature-text {
            text-align: left;
        }
        .feature-item:nth-child(2),
        .feature-item:nth-child(3) {
            justify-content: flex-start !important;
            align-items: flex-start !important;
            flex-direction: row !important;
        }
        .feature-item:nth-child(2) .feature-icon,
        .feature-item:nth-child(3) .feature-icon {
            justify-content: flex-start !important;
            align-items: flex-start !important;
            margin-bottom: 0 !important;
        }
        .feature-item:nth-child(2) .feature-text,
        .feature-item:nth-child(3) .feature-text {
            text-align: left !important;
        }
        .feature-icon svg {
            width: 64px;
            height: 64px;
        }
        .feature-text h2 {
            color: #222;
            font-size: 1.18rem;
            margin-bottom: 2px;
            font-weight: 700;
            white-space: nowrap;
        }
        .feature-item:nth-child(2) .feature-text h2,
        .feature-item:nth-child(2) .feature-icon svg {
            font-size: 1.18rem;
            width: 64px;
            height: 64px;
        }
        .feature-item:nth-child(3) {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .feature-item:nth-child(3) .feature-icon {
            justify-content: center;
            align-items: center;
            margin-bottom: 8px;
            margin-left: -2cm !important;
        }
        .feature-item:nth-child(3) .feature-text {
            text-align: center;
        }
        .feature-item:nth-child(3) .feature-text h2,
        .feature-item:nth-child(3) .feature-icon svg {
            font-size: 1.18rem;
            width: 64px;
            height: 64px;
        }
        .about-section {
            margin-top: 32px;
            background: #fff;
            border-top: none;
        }
        .about-container {
            display: flex;
            gap: 56px;
            align-items: flex-start;
            max-width: 1200px;
            margin-left: 120px;
            position: relative;
        }
        .nature-divider {
            width: calc(100% - 120px - 3.5cm); /* margin kiri + margin kanan organic, penyesuaian agar pas di bawah huruf 't' */
            max-width: none;
            height: 2px;
            background: #8BC34A;
            border-radius: 1px;
            margin-left: 120px;
            margin-bottom: 32px;
        }
        .about-images-row {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 1cm; /* jarak 1cm antara foto kiri dan kanan */
        }
        .about-img {
            width: 8cm;
            height: 480px;
            object-fit: cover;
            border-radius: 0;
            box-shadow: 0 4px 24px rgba(106,151,57,0.10);
        }
        .about-img:last-child {
            margin-top: 32px;
        }
        .about-content {
            flex: 1;
            text-align: left;
            max-width: 520px;
        }
        .about-content h2 {
            color: #222;
            font-size: 1.73rem; /* 2/3 dari 2.6rem */
            margin-bottom: 22px;
            font-weight: 700;
        }
        .about-content p {
            color: #555;
            font-size: 1.25rem;
            margin-bottom: 38px;
        }
        .about-btn {
            background: #ffd600;
            color: #333;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            padding: 10px 24px;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 4px 16px rgba(255,214,0,0.12);
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .about-btn:hover {
            background: #ffe066;
            color: #6a9739;
            transform: scale(1.05);
        }
        @media (max-width: 900px) {
            nav, .nav-menu {
                flex-direction: column;
                gap: 0;
            }
            .nav-menu {
                background: #fff;
                position: absolute;
                top: 80px;
                left: 0;
                right: 0;
                display: none;
                box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            }
            nav.active .nav-menu {
                display: flex;
            }
            .nav-btn {
                margin: 20px 0 0 0;
                width: 90vw;
            }
            .hero {
                justify-content: center;
            }
            .hero-content {
                max-width: 95vw;
                padding: 20px;
                text-align: center;
                margin-left: 0;
            }
            .hero-content h1 {
                font-size: 2.1rem;
            }
            .hero-bg img {
                height: 100vw;
            }
            .features-container {
                flex-direction: column;
                gap: 18px;
                max-width: 98vw;
            }
            .feature-item {
                flex-direction: row;
                padding: 0;
            }
            .feature-text h2 {
                white-space: normal;
            }
            .about-container {
                flex-direction: column;
                gap: 32px;
                max-width: 98vw;
            }
            .about-images-row {
                flex-direction: column;
                gap: 16px;
                justify-content: center;
            }
            .about-img {
                width: 90vw;
                height: 180px;
            }
            .about-content {
                max-width: 98vw;
            }
        }
        .feature-text p {
            color: #555;
            font-size: 0.97rem;
            margin: 0;
            white-space: nowrap;
            text-align: right;
        }
        .taste-section {
            width: 100vw;
            margin: 48px 0 0 0;
            padding: 0;
            position: relative;
        }
        .taste-section img {
            width: 100vw;
            height: 15cm;
            object-fit: cover;
            display: block;
            margin: 3cm 0 0 0;
            border-radius: 0;
            background: #fff;
        }
        .taste-content {
            position: absolute;
            top: calc(3cm + 24px);
            left: 32px;
            max-width: 520px;
            color: #222;
        }
        .taste-content h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 16px;
        }
        .taste-content p {
            font-size: 1.3rem;
            color: #555;
            margin-bottom: 28px;
        }
        .taste-content button {
            background: #6a9739;
            color: #fff;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1.15rem;
            box-shadow: 0 4px 16px rgba(106,151,57,0.12);
            border: none;
            cursor: pointer;
        }
        .taste-content button:hover {
            background: #4e7c2c;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo" style="display:flex;align-items:center;gap:12px;">
            <img src="https://tebewebe.online/josiefarms/wp-content/uploads/sites/320/2025/02/JF_JosieFarms_Logo-300x50.webp" alt="JosieFarms Logo" style="height:38px;">
            <span style="font-size:2rem; font-weight:700; color:#6a9739; letter-spacing:2px;"></span>
        </div>
        <nav>
            <div class="nav-menu">
                <div class="nav-item"><a href="#" class="nav-link">Home</a></div>
                <div class="nav-item"><a href="#" class="nav-link">About Us</a></div>
                <div class="nav-item"><a href="#" class="nav-link">Service</a></div>
                <div class="nav-item">
                    <button class="nav-link" tabindex="0">Project ▾</button>
                    <div class="dropdown">
                        <a href="#">Project 1</a>
                        <a href="#">Project 2</a>
                        <a href="#">Project 3</a>
                    </div>
                </div>
                <div class="nav-item"><a href="#" class="nav-link">Contact</a></div>
                <div class="nav-item">
                    <button class="nav-link" tabindex="0">Pages ▾</button>
                    <div class="dropdown">
                        <a href="#">Page 1</a>
                        <a href="#">Page 2</a>
                        <a href="#">Page 3</a>
                    </div>
                </div>
                <button class="nav-btn">Get Started</button>
            </div>
        </nav>
    </header>
    <section class="hero">
        <div class="hero-bg">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=80" alt="Organic Farm">
        </div>
        <div class="hero-content">
            <h1>Organic Farming & Agriculture</h1>
            <p>Fresh, healthy, and sustainable produce for your family. Discover the best organic farming practices and products at Josiefarms.</p>
            <a href="#" class="cta-btn" style="background:#ffd600; color:#333; font-weight:700; border:none; border-radius:8px; padding:10px 24px; font-size:1rem; cursor:pointer; box-shadow:0 4px 16px rgba(255,214,0,0.12); transition:background 0.2s, color 0.2s, transform 0.2s;">Learn More</a>
        </div>
    </section>
    <section class="features">
        <div class="features-container">
            <div class="feature-item">
                <span class="feature-icon">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#8BC34A"/>
                        <path d="M42 25C42 33 32 42 32 42C32 42 22 33 22 25C22 21.6863 24.6863 19 28 19C31.3137 19 34 21.6863 34 25Z" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <div class="feature-text" style="text-align:left;">
                    <h2 style="margin-bottom:4px;">Natural Ingredients</h2>
                    <p style="text-align:left;">Only the best natural ingredients<br>for your family.</p>
                </div>
            </div>
            <div class="feature-item">
                <span class="feature-icon">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#8BC34A"/>
                        <path d="M46 24L32 44L20 32" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <div class="feature-text" style="text-align:left;">
                    <h2 style="margin-bottom:0;">Best Quality</h2>
                    <p style="text-align:left; line-height:0.8; margin-top:-32px;">Fresh and high quality produce<br>every time.</p>
                </div>
            </div>
            <div class="feature-item">
                <span class="feature-icon">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#8BC34A"/>
                        <rect x="20" y="30" width="24" height="12" rx="3" fill="#fff"/>
                        <rect x="18" y="26" width="28" height="7" rx="2" fill="#fff"/>
                        <rect x="26" y="42" width="5" height="5" rx="1.2" fill="#8BC34A"/>
                        <rect x="35" y="42" width="5" height="5" rx="1.2" fill="#8BC34A"/>
                    </svg>
                </span>
                <div class="feature-text" style="text-align:left;">
                    <h2 style="margin-bottom:0;">Organic Food Market</h2>
                    <p style="text-align:left; line-height:0.8; margin-top:-32px;">Healthy organic food<br>for everyone.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="nature-divider"></div>
    <section class="about-section">
        <div class="about-container">
            <div class="about-images-row">
                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Farm 1" class="about-img">
                <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=600&q=80" alt="Farm 2" class="about-img">
            </div>
            <div class="about-content">
                <h2 style="color:#222;">Why Choose Josiefarms?</h2>
                <p>We provide the freshest organic produce, grown with care and passion. Our farms use sustainable methods to ensure quality and health for your family.</p>
                <button class="about-btn">Learn More</button>
            </div>
        </div>
    </section>
    <section class="taste-section" style="width:100vw; margin:48px 0 0 0; padding:0; position:relative;">
        <img src="https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?auto=format&fit=crop&w=1600&q=80" alt="Tanaman Daun Hijau" style="width:100vw; height:15cm; object-fit:cover; display:block; margin:3cm 0 0 0; border-radius:0; background:#fff;">
        <div style="position:absolute; top:calc(3cm + 24px); left:calc(32px + 2.2cm); max-width:520px; color:#fff;">
            <h2 style="font-size:2rem; font-weight:700; margin-bottom:16px;">Taste the Difference, Discover True Agriculture</h2>
            <p style="font-size:1.3rem; color:#fff; margin-bottom:28px;">Malesuada elit laoreet quisque facilisi vivamus fringilla. Augue felis nostra posuere urna si mattis ultrices natoque nulla curabitur laoreet. Iaculis ligula hendrerit mollis egestas vulputate inceptos hac massa.</p>
            <button style="background:#ffd600; color:#333; font-weight:700; border:none; border-radius:8px; padding:10px 24px; font-size:1rem; cursor:pointer; box-shadow:0 4px 16px rgba(255,214,0,0.12); transition:background 0.2s, color 0.2s, transform 0.2s;">Learn More</button>
        </div>
    </section>
    <section class="about-gallery-section" style="width:100vw; display:flex; align-items:center; justify-content:flex-start; margin:64px 0;">
        <div style="flex:1; max-width:520px; padding-left:120px;">
            <h2 style="font-size:2rem; font-weight:700; color:#222; margin-bottom:18px;">Our Green Farm Gallery</h2>
            <p style="font-size:1.15rem; color:#555; margin-bottom:32px;">Explore the beauty of our organic farm and see how we nurture nature for the best harvest. Sustainable, fresh, and green!</p>
            <button style="background:#ffd600; color:#333; font-weight:700; border:none; border-radius:8px; padding:10px 24px; font-size:1rem; cursor:pointer; box-shadow:0 4px 16px rgba(255,214,0,0.12); transition:background 0.2s, color 0.2s, transform 0.2s;">View More</button>
        </div>
        <div style="display:flex; flex-direction:row; gap:0; padding-right:120px; margin-left:7cm;">
            <div style="display:flex; flex-direction:column; gap:0;">
                <div style="position:relative; margin-bottom:0;">
                    <img src="https://images.unsplash.com/photo-1502741338009-cac2772e18bc?auto=format&fit=crop&w=600&q=80" alt="Orang Memegang Selada" style="width:220px; height:210px; object-fit:cover; border-radius:0; box-shadow:0 4px 24px rgba(106,151,57,0.10); display:block;">
                </div>
                <div style="position:relative; margin-top:-4px;">
                    <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Semprotan Organik" style="width:220px; height:210px; object-fit:cover; border-radius:0; box-shadow:0 4px 24px rgba(106,151,57,0.10); display:block;">
                </div>
            </div>
            <div style="position:relative; margin-left:32px; display:flex; align-items:stretch;">
                <img src="https://images.unsplash.com/photo-1506084868230-bb9d95c24759?auto=format&fit=crop&w=600&q=80" alt="Perempuan Bertani" style="width:220px; height:417px; object-fit:cover; border-radius:0; box-shadow:0 4px 24px rgba(106,151,57,0.10); display:block;">
            </div>
        </div>
    </section>
    <script>
        // Animasi sudah otomatis berjalan dengan CSS keyframes
    </script>
    <!-- Section berikutnya bisa ditambahkan sesuai kebutuhan -->
    <section class="services-section" style="background:#fff; border-radius:18px; margin:48px auto; max-width:1200px; box-shadow:0 4px 24px rgba(0,0,0,0.08); display:flex; align-items:center; padding:48px 32px; gap:48px;">
        <div class="services-text" style="flex:1;">
            <div style="color:#8BC34A; font-weight:700; font-size:1.2rem; margin-bottom:12px;">Our Services</div>
            <h1 style="font-size:2.8rem; font-weight:700; color:#222; margin-bottom:24px;">Where Farming Meets Excellence</h1>
            <p style="font-size:1.15rem; color:#555; margin-bottom:18px;">Pellentesque aptent hendrerit iaculis dignissim facilisi tempus. Tristique efficitur ornare eros sit conubia purus sagittis. Sem tellus dignissim metus sapien primis porttitor porta pede nec dignissim facilisi.</p>
            <p style="font-size:1.15rem; color:#555; margin-bottom:32px;">Pede nascetur malesuada tempus vel accumsan aliquam porta. Integer nec suscipit netus amet dolor ligula in cubilia.</p>
            <a href="#" style="display:inline-block; background:#ffd600; color:#222; font-weight:700; border-radius:32px; padding:16px 38px; font-size:1.15rem; text-decoration:none; box-shadow:0 4px 16px rgba(255,214,0,0.12); transition:background 0.2s;">Discover More</a>
        </div>
        <div class="services-images" style="flex:1; display:grid; grid-template-columns:1fr 1fr; grid-template-rows:1fr 1fr; gap:18px;">
            <div style="grid-column:1/3; grid-row:1/2; position:relative;">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Quality Standards" style="width:100%; height:180px; object-fit:cover; border-radius:16px;">
                <div style="position:absolute;top:16px;left:16px;background:#fff;padding:6px 18px;border-radius:24px;color:#6a9739;font-weight:600;box-shadow:0 2px 8px rgba(0,0,0,0.08);font-size:1rem;">✔ Quality Standards</div>
            </div>
            <div style="grid-column:1/2; grid-row:2/3; position:relative;">
                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Organic Services" style="width:100%; height:120px; object-fit:cover; border-radius:16px;">
                <div style="position:absolute;bottom:12px;left:12px;background:#fff;padding:6px 18px;border-radius:24px;color:#6a9739;font-weight:600;box-shadow:0 2px 8px rgba(0,0,0,0.08);font-size:1rem;">✔ Organic Services</div>
            </div>
            <div style="grid-column:2/3; grid-row:2/3; position:relative;">
                <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=400&q=80" alt="Agriculture Leader" style="width:100%; height:120px; object-fit:cover; border-radius:16px;">
                <div style="position:absolute;bottom:12px;left:12px;background:#fff;padding:6px 18px;border-radius:24px;color:#6a9739;font-weight:600;box-shadow:0 2px 8px rgba(0,0,0,0.08);font-size:1rem;">✔ Agriculture Leader</div>
            </div>
        </div>
    </section>

    <footer style="background:#2d4636; color:#fff; padding:56px 0 0 0; margin-top:64px; font-family:'Montserrat', Arial, sans-serif;">
        <div style="max-width:1400px; margin:auto; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:flex-start; gap:32px; padding:0 48px;">
            <div style="flex:1; min-width:220px;">
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:18px;">
                    <img src="https://tebewebe.online/josiefarms/wp-content/uploads/sites/320/2025/02/JF_JosieFarms_Logo-300x50.webp" alt="JosieFarms Logo" style="height:38px;">
                </div>
                <div style="margin-bottom:24px; color:#cfd8dc; font-size:14px;">Velit montes quisque eros ullamcorper nisl interdum tristique. Congue elit donec est per ultrices quisque.</div>
                <div style="margin-bottom:12px; display:flex; align-items:center; gap:10px; color:#cfd8dc; font-size:14px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/484/484167.png" alt="Location" style="height:18px;vertical-align:middle;filter:invert(56%) sepia(98%) saturate(453%) hue-rotate(56deg) brightness(92%) contrast(92%);"> 789 Oak St, Smalltown, TX 23456, US
                </div>
                <div style="margin-bottom:12px; display:flex; align-items:center; gap:10px; color:#cfd8dc; font-size:14px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Email" style="height:18px;vertical-align:middle;filter:invert(56%) sepia(98%) saturate(453%) hue-rotate(56deg) brightness(92%) contrast(92%);"> hello@josiefarms.com
                </div>
                <div style="margin-bottom:18px; display:flex; align-items:center; gap:10px; color:#cfd8dc; font-size:14px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Phone" style="height:18px;vertical-align:middle;filter:invert(56%) sepia(98%) saturate(453%) hue-rotate(56deg) brightness(92%) contrast(92%);"> +1 (555) 987-6543
                </div>
            </div>
            <div style="flex:1; min-width:180px;">
                <h3 style="color:#fff; font-size:1.32rem; font-weight:700; margin-bottom:18px; font-family:'Montserrat', Arial, sans-serif;">Services</h3>
                <div style="color:#cfd8dc; font-size:14px; line-height:2; font-family:'Montserrat', Arial, sans-serif;">
                    Farm Supplies & Equipment<br>
                    Agro Machinery Solutions<br>
                    Garden Tillage Services<br>
                    Pest Control Management<br>
                    Farm Consulting Services<br>
                    Organic Farm Certification
                </div>
            </div>
            <div style="flex:1; min-width:180px;">
                <h3 style="color:#fff; font-size:1.32rem; font-weight:700; margin-bottom:18px; font-family:'Montserrat', Arial, sans-serif;">Quick Links</h3>
                <div style="color:#cfd8dc; font-size:14px; line-height:2; font-family:'Montserrat', Arial, sans-serif;">
                    <a href="#about" style="color:#cfd8dc; text-decoration:none;">About Us</a><br>
                    <a href="#projects" style="color:#cfd8dc; text-decoration:none;">Our Projects</a><br>
                    <a href="#events" style="color:#cfd8dc; text-decoration:none;">Upcoming Events</a><br>
                    <a href="#careers" style="color:#cfd8dc; text-decoration:none;">Careers</a><br>
                    <a href="#news" style="color:#cfd8dc; text-decoration:none;">News & Articles</a><br>
                    <a href="#legal" style="color:#cfd8dc; text-decoration:none;">Legal Notice</a>
                </div>
            </div>
            <div style="flex:1; min-width:260px;">
                <h3 style="color:#fff; font-size:1.32rem; font-weight:700; margin-bottom:18px; font-family:'Montserrat', Arial, sans-serif;">Subscribe Newsletter</h3>
                <div style="color:#cfd8dc; font-size:14px; margin-bottom:18px; font-family:'Montserrat', Arial, sans-serif;">Join 60,000+ Subscribers and get a new discount coupon every saturday</div>
                <form style="display:flex; flex-direction:column; gap:16px;">
                <input type="email" placeholder="Enter your email" style="padding:14px 18px; border-radius:32px; border:none; font-size:14px; background:#fff; color:#333; font-family:'Montserrat', Arial, sans-serif;">
                    <button type="submit" style="background:#ffd600; color:#222; font-weight:700; border:none; border-radius:32px; padding:14px 0; font-size:14px; cursor:pointer; box-shadow:0 4px 16px rgba(255,214,0,0.12); font-family:'Montserrat', Arial, sans-serif;">Sign Up</button>
                </form>
            </div>
        </div>
        <div style="border-top:1px solid #395a46; margin-top:38px; padding:18px 0 12px 0; display:flex; align-items:center; justify-content:space-between; gap:14px; color:#cfd8dc; font-size:14px; font-family:'Montserrat', Arial, sans-serif; padding-left: 38px; padding-right: 38px;">
    <div style="display:flex; align-items:center; gap:18px;">
        <a href="#" style="color:#8BC34A;"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook" style="height:18px;filter:invert(56%) sepia(98%) saturate(453%) hue-rotate(56deg) brightness(92%) contrast(92%);"></a>
        <a href="#" style="color:#8BC34A;"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/threads.svg" alt="Threads" style="height:18px;filter:invert(56%) sepia(98%) saturate(453%) hue-rotate(56deg) brightness(92%) contrast(92%);"></a>
        <a href="#" style="color:#8BC34A;"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram" style="height:18px;filter:invert(56%) sepia(98%) saturate(453%) hue-rotate(56deg) brightness(92%) contrast(92%);"></a>
        <a href="#" style="color:#8BC34A;"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/youtube.svg" alt="YouTube" style="height:18px;filter:invert(56%) sepia(98%) saturate(453%) hue-rotate(56deg) brightness(92%) contrast(92%);"></a>
        <a href="#" style="color:#8BC34A;"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/tiktok.svg" alt="TikTok" style="height:18px;filter:invert(56%) sepia(98%) saturate(453%) hue-rotate(56deg) brightness(92%) contrast(92%);"></a>
    </div>
    <div>Copyright &copy; 2025 JosieFarms by TBWSThemes. All rights reserved</div>
</div>
    </footer>
</body>
</html>
