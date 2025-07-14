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

    <nav class="navbar">
        <div class="navbar-logo">
            <img src="https://cdn-icons-png.flaticon.com/512/2909/2909763.png" alt="Logo" />
            BibitTebu
        </div>
        <div class="navbar-menu">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Services</a>
            <a href="#">Projects</a>
            <a href="/contact">Contact Us</a>
        </div>
        <a href="/users"><button class="navbar-btn">Get In Touch</button></a>
    </nav>

    <header>
        <div class="logo">Josiefarms</div>
        <nav>
            <div class="nav-menu">
                <div class="nav-item"><a href="#" class="nav-link">Home</a></div>
                <div class="nav-item"><a href="#" class="nav-link">About</a></div>
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
            <h1>Organic Farming & Agriculture</h1>
            <p>Fresh, healthy, and sustainable produce for your family. Discover the best organic farming practices and products at Josiefarms.</p>
            <a href="#" class="cta-btn">Learn More</a>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" style="background:#f7f7f7; padding:60px 0;">
      <div class="container" style="max-width:1200px; margin:auto;">
        <div style="text-align:center; margin-bottom:40px;">
          <h2 style="font-size:2.5rem; color:#3d5a1a; margin-bottom:10px;">Contact Us</h2>
          <p style="color:#666; font-size:1.1rem;">Have questions or want to get in touch? Fill out the form below and our team will get back to you soon.</p>
        </div>
        <div style="display:flex; flex-wrap:wrap; gap:40px;">
          <!-- Contact Info -->
          <div style="flex:1; min-width:300px;">
            <div style="margin-bottom:30px;">
              <h4 style="color:#3d5a1a;">Address</h4>
              <p style="color:#666;">Jl. Contoh No. 123, Kota Anda, Indonesia</p>
            </div>
            <div style="margin-bottom:30px;">
              <h4 style="color:#3d5a1a;">Phone</h4>
              <p style="color:#666;">+62 812-3456-7890</p>
            </div>
            <div>
              <h4 style="color:#3d5a1a;">Email</h4>
              <p style="color:#666;">info@bibittebu.com</p>
            </div>
          </div>
          <!-- Contact Form -->
          <div style="flex:2; min-width:300px; background:#fff; padding:30px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
            <form>
              <div style="margin-bottom:20px;">
                <input type="text" name="name" placeholder="Your Name" required style="width:100%; padding:12px; border:1px solid #ddd; border-radius:4px;">
              </div>
              <div style="margin-bottom:20px;">
                <input type="email" name="email" placeholder="Your Email" required style="width:100%; padding:12px; border:1px solid #ddd; border-radius:4px;">
              </div>
              <div style="margin-bottom:20px;">
                <textarea name="message" placeholder="Your Message" rows="5" required style="width:100%; padding:12px; border:1px solid #ddd; border-radius:4px;"></textarea>
              </div>
              <button type="submit" style="background:#3d5a1a; color:#fff; padding:12px 32px; border:none; border-radius:4px; font-size:1rem; cursor:pointer;">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="features">
        <div class="features-container">
            <div class="feature-item">
                <span class="feature-icon">
                    <!-- Ikon daun hijau muda, lebih besar -->
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#8BC34A"/>
                        <path d="M42 25C42 33 32 42 32 42C32 42 22 33 22 25C22 21.6863 24.6863 19 28 19C31.3137 19 34 21.6863 34 25Z" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <div class="feature-text">
                    <h2>Natural Ingredients</h2>
                    <p>Only the best natural ingredients for your family.</p>
                </div>
            </div>
            <div class="feature-item">
                <span class="feature-icon">
                    <!-- Ikon centang hijau muda, lebih besar -->
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#8BC34A"/>
                        <path d="M46 24L32 44L20 32" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <div class="feature-text">
                    <h2>Best Quality</h2>
                    <p>Fresh and high quality produce every time.</p>
                </div>
            </div>
            <div class="feature-item">
                <span class="feature-icon">
                    <!-- Ikon market hijau muda, lebih besar -->
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#8BC34A"/>
                        <rect x="20" y="30" width="24" height="12" rx="3" fill="#fff"/>
                        <rect x="18" y="26" width="28" height="7" rx="2" fill="#fff"/>
                        <rect x="26" y="42" width="5" height="5" rx="1.2" fill="#8BC34A"/>
                        <rect x="35" y="42" width="5" height="5" rx="1.2" fill="#8BC34A"/>
                    </svg>
                </span>
                <div class="feature-text">
                    <h2>Organic Food Market</h2>
                    <p>Healthy organic food for everyone.</p>
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
    <script>
        // Animasi sudah otomatis berjalan dengan CSS keyframes
    </script>
    <!-- Section berikutnya bisa ditambahkan sesuai kebutuhan -->

</body>
</html>