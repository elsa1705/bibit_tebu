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
            background: #f7f7f7;
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
        .nav-btn {
            background: #ffd600;
            color: #333;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            padding: 12px 32px;
            margin-left: 32px;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 4px 16px rgba(255,214,0,0.12);
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .nav-btn:hover {
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
            background: rgba(106,151,57,0.10);
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(106,151,57,0.10);
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
            gap: 64px;
            max-width: 1200px;
            width: 100%;
            justify-content: flex-start;
            margin-left: 128px;
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
            gap: 18px;
            justify-content: flex-start;
            max-width: 320px;
        }
        .feature-icon {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            min-width: 80px;
            min-height: 80px;
        }
        .feature-icon svg {
            width: 80px;
            height: 80px;
        }
        .feature-text h2 {
            color: #222;
            font-size: 1.18rem;
            margin-bottom: 2px;
            font-weight: 700;
            white-space: nowrap;
        }
        .feature-text p {
            color: #555;
            font-size: 0.97rem;
            margin: 0;
        }
        .about-section {
            background: #fff;
            padding: 64px 0 32px 0;
            display: flex;
            justify-content: flex-start;
        }
        .about-container {
            display: flex;
            gap: 56px;
            max-width: 1300px;
            width: 100%;
            align-items: center;
            justify-content: flex-start;
        }
        .about-images-row {
            display: flex;
            flex-direction: row;
            gap: 32px;
            align-items: flex-start;
            margin-left: 168px; /* 7cm dari pojok kiri */
        }
        .about-img {
            width: 168px; /* 7cm = 168px */
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
            font-size: 2.6rem;
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
            padding: 18px 48px;
            font-size: 1.18rem;
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
                <div class="nav-item"><a href="/" class="nav-link">Home</a></div>
                <div class="nav-item"><a href="#" class="nav-link">About</a></div>
                <div class="nav-item"><a href="/services" class="nav-link">
                    Services
                </a></div>
                <div class="nav-item">
                    <button class="nav-link" tabindex="0">Project ▾</button>
                    <div class="dropdown">
                        <a href="#">Project 1</a>
                        <a href="#">Project 2</a>
                        <a href="#">Project 3</a>
                    </div>
                </div>
                <div class="nav-item"><a href="#" class="nav-link">Gallery</a></div>
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
            <h1>Our Services</h1>
            <p>Unlocking the secrets of sustainable agriculture dictumst pede lorem sollicitudin suspendisse.</p>
        </div>
    </section>
    <section class="features">
        <div class="features-container">
            <div class="feature-item">
                <span class="feature-icon">
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Quality Standards" style="width:80px;height:80px;border-radius:12px;object-fit:cover;">
                </span>
                <div class="feature-text">
                    <h2>Quality Standards</h2>
                    <p>Unlocking the secrets of sustainable agriculture dictumst pede lorem sollicitudin suspendisse.</p>
                </div>
            </div>
            <div class="feature-item">
                <span class="feature-icon">
                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Organic Services" style="width:80px;height:80px;border-radius:12px;object-fit:cover;">
                </span>
                <div class="feature-text">
                    <h2>Organic Services</h2>
                    <p>Semper sit imperdiet bibendum felis fames ante sed suscipit.</p>
                </div>
            </div>
            <div class="feature-item">
                <span class="feature-icon">
                    <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=400&q=80" alt="Agriculture Leader" style="width:80px;height:80px;border-radius:12px;object-fit:cover;">
                </span>
                <div class="feature-text">
                    <h2>Agriculture Leader</h2>
                    <p>Established Since 1992</p>
                </div>
            </div>
        </div>
    </section>
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
