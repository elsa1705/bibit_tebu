<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Josiefarms</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* ======================================= */
        /* CSS UMUM (DIAMBIL DARI WELCOME.BLADE.PHP ASLI ANDA) */
        /* ======================================= */
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
            margin-right: 0.1cm; /* Geser semua link ke kanan 0.1cm */
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
        /* Pastikan link Home ukurannya sama seperti nav-link lain */
        .nav-link[href="/"] {
            font-size: 1rem;
            font-family: inherit;
            font-weight: 500;
        }
        .nav-link.active { /* Kelas active untuk halaman saat ini */
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
            padding: 10px 24px;
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
        /* Keyframe umum fadeUp (jika digunakan di tempat lain) */
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ======================================= */
        /* CSS KHUSUS HALAMAN KONTAK (SESUAI GAMBAR TERBARU) */
        /* ======================================= */
        .contact-hero {
            position: relative;
            width: 100vw;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
            color: #fff;
            text-align: left;
            padding: 0 5vw;
            box-sizing: border-box;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
        }
        .contact-hero-bg {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }
        .contact-hero-bg img {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            filter: brightness(0.7) saturate(1.1);
            display: block;
            margin: 0;
            padding: 0;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }
        .contact-hero-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
            padding: 30px;
            border-radius: 10px;
        }
        .contact-hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #fff;
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.8s ease-out forwards;
            animation-delay: 0.2s;
        }
        .contact-hero-content p {
            font-size: 1.1rem;
            margin-bottom: 0;
            line-height: 1.5;
            color: #fff;
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.8s ease-out forwards;
            animation-delay: 0.4s;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contact-section {
            padding: 80px 5vw;
            background: #fff;
            display: flex;
            justify-content: center;
        }
        .contact-container {
            display: flex;
            gap: 60px;
            max-width: 1200px;
            width: 100%;
            flex-wrap: wrap;
        }
        .contact-left, .contact-right {
            flex: 1;
            min-width: 300px;
        }
        .contact-left .subtitle {
            color: #6a9739;
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
            padding-left: 25px;
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.8s ease-out forwards;
            animation-delay: 0.6s;
        }
        .contact-left .subtitle::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 15px;
            height: 2px;
            background: #6a9739;
        }
        .contact-left h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 25px;
            line-height: 1.2;
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.8s ease-out forwards;
            animation-delay: 0.8s;
        }
        .contact-left p {
            font-size: 1.05rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.8s ease-out forwards;
            animation-delay: 1.0s;
        }
        .contact-left p + p {
            animation-delay: 1.2s;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.8s ease-out forwards;
            animation-delay: 1.4s;
        }
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #f0f0f0;
            color: #333;
            font-size: 1.2rem;
            transition: background 0.3s, color 0.3s;
        }
        .social-icons a:hover {
            background: #6a9739;
            color: #fff;
        }

        .contact-form-container {
            background: #fefefe;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.8s ease-out forwards;
            animation-delay: 1.6s;
            position: relative;
            padding-top: 60px; /* Ruang untuk garis dan label */
        }
        /* Styling untuk garis hijau di atas form */
        .contact-form-container::before {
            content: '';
            position: absolute;
            top: 25px; /* Posisi garis dari atas container */
            left: 40px; /* Sesuaikan dengan padding container */
            width: calc(100% - 80px); /* Garis sepanjang container, dikurangi padding kiri-kanan */
            height: 3px; /* Ketebalan garis */
            background: #6a9739; /* Warna hijau */
            border-radius: 2px;
        }
        /* Styling untuk label "Name", "Email", dll. */
        .form-field label {
            display: block; /* Agar label di atas input */
            font-size: 0.9rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }
        .contact-form-container form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .form-row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap; /* Pastikan ini tetap ada untuk responsivitas */
        }
        .form-row .form-field {
            flex: 1; /* Agar setiap input di baris mengambil ruang yang sama */
            min-width: calc(50% - 10px); /* Memberi ruang untuk dua kolom di desktop */
            /* Menggunakan min-width ini agar input bisa 50% lebar dikurangi setengah gap */
        }
        .contact-form-container input,
        .contact-form-container textarea {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid #eee;
            border-radius: 8px;
            font-family: 'Montserrat', Arial, sans-serif;
            font-size: 1rem;
            box-sizing: border-box;
            background: #f9f9f9;
        }
        .contact-form-container textarea {
            resize: vertical;
            min-height: 150px;
        }
        .contact-form-container button {
            background: #ffd600;
            color: #333;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            padding: 15px 40px;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 0 4px 16px rgba(255,214,0,0.12);
            transition: background 0.2s, color 0.2s, transform 0.2s;
            align-self: flex-start;
        }
        .contact-form-container button:hover {
            background: #ffe066;
            color: #6a9739;
            transform: scale(1.05);
        }

        /* ======================================= */
        /* CSS UNTUK BAGIAN MAPS DAN INFO KONTAK BARU */
        /* ======================================= */
        .location-section {
            position: relative;
            width: 100vw;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 50px 0;
        }
        .location-bg {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }
        .location-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }
        .location-content-wrapper {
            position: relative;
            z-index: 2;
            display: flex;
            gap: 40px;
            max-width: 1200px;
            width: 90%;
            background: rgba(0,0,0,0.6);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            flex-wrap: wrap;
        }
        .location-map {
            flex: 1;
            min-width: 300px;
            transform: translateY(-20px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            border-radius: 8px;
            overflow: hidden;
        }
        .location-map iframe {
            width: 100%;
            height: 350px;
            border: none;
            border-radius: 8px;
        }
        .location-info-details {
            flex: 1;
            min-width: 300px;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        .location-info-details h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 25px;
            color: #ffd600;
        }
        .info-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .info-icon-wrapper {
            background: #ffd600;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        .info-icon-wrapper i {
            color: #000;
            font-size: 1.5rem;
        }
        .info-text-content {
            flex-grow: 1;
        }
        .info-text-content h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0 0 5px 0;
            color: #fff;
        }
        .info-text-content p, .info-text-content a {
            font-size: 1rem;
            line-height: 1.4;
            color: #eee;
            text-decoration: none;
            transition: color 0.2s;
            display: block;
            margin-bottom: 0;
        }
        .info-text-content a:hover {
            color: #ffd600;
        }

        /* ======================================= */
        /* RESPONSIVE ADJUSTMENTS */
        /* ======================================= */
        @media (max-width: 900px) {
            header {
                padding: 0 20px;
            }
            .nav-menu {
                flex-direction: column;
                position: absolute;
                top: 80px;
                left: 0;
                right: 0;
                background: #fff;
                box-shadow: 0 4px 16px rgba(0,0,0,0.08);
                display: none;
                width: 100%;
                text-align: center;
                gap: 0;
            }
            .nav-btn {
                margin: 20px 0;
                width: 80%;
            }

            .contact-hero {
                min-height: 300px;
                padding: 0 20px;
                justify-content: center;
                text-align: center;
            }
            .contact-hero-content {
                max-width: 90%;
            }
            .contact-hero-content h1 {
                font-size: 2.2rem;
            }
            .contact-hero-content p {
                font-size: 1rem;
            }

            .contact-container {
                flex-direction: column;
                gap: 40px;
            }
            .contact-form-container::before {
                left: 20px; /* Sesuaikan posisi garis untuk mobile */
                width: calc(100% - 40px); /* Garis sepanjang container, dikurangi padding kiri-kanan */
            }
            .form-row {
                flex-direction: column;
                gap: 15px;
            }
            .form-row .form-field {
                min-width: unset;
            }
            .contact-left h2 {
                font-size: 2.2rem;
            }

            .location-content-wrapper {
                flex-direction: column;
                padding: 30px;
                width: 95%;
            }
            .location-map {
                transform: translateY(0);
            }
            .location-map iframe {
                height: 250px;
            }
            .location-info-details h3 {
                font-size: 1.5rem;
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
                <div class="nav-item"><a href="/about" class="nav-link">About Us</a></div>
                <div class="nav-item"><a href="#" class="nav-link">Service</a></div>
                <div class="nav-item">
                    <button class="nav-link" tabindex="0">Project ▾</button>
                    <div class="dropdown">
                        <a href="#">Project 1</a>
                        <a href="#">Project 2</a>
                        <a href="#">Project 3</a>
                    </div>
                </div>
                <div class="nav-item"><a href="/contact" class="nav-link active">Contact</a></div>
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

    <section class="contact-hero">
        <div class="contact-hero-bg">
            <img src="{{ asset('images/banner_contact_us_sugarcane.jpg') }}" alt="Contact Us Background">
        </div>
        <div class="contact-hero-content">
            <h1>Contact Us</h1>
            <p>Start the conversation to established good relationship and business finibus suscipit tristique.</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-left">
                <p class="subtitle">Get In Touch</p>
                <h2>Questions, ideas or projects? We're ready to help</h2>
                <p>Tempor rutrum leo venenatis congue non senectus posuere nostra himenaeos. Penatibus turpis fringilla magnis curae finibus. Est at aptent aliquam commodo nullam pharetra tempor.</p>
                <p>Elit dictumst quam ultrices arcu nulla. Rhoncus laoreet porttitor aenean molestie lectus fames nibh vestibulum.</p>
                <div class="social-icons">
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="contact-right">
                <div class="contact-form-container">
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-field">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="Your name" required>
                            </div>
                            <div class="form-field">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Your email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-field">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" placeholder="Phone number" required>
                            </div>
                            <div class="form-field">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="form-field">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Your message" required></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="location-section">
        <div class="location-bg">
            <img src="https://images.unsplash.com/photo-1542838183-8a9d06b6f0e9?auto=format&fit=crop&w=1600&q=80" alt="Background Image">
        </div>
        <div class="location-content-wrapper">
            <div class="location-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.50424563821!2d-0.11956388439462227!3d51.50332457963473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900000001%3A0x6e9a6a8e8e8e8e8e!2sLondon%20Eye!5e0!3m2!1sen!2suk!4v1628796843456!5m2!1sen!2suk"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="location-info-details">
                <h3>Contact Information</h3>
                <div class="info-group">
                    <div class="info-icon-wrapper">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-text-content">
                        <h4>Our Location</h4>
                        <p>789 Oak St, Smalltown, TX 23456, United States</p>
                    </div>
                </div>

                <div class="info-group">
                    <div class="info-icon-wrapper">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-text-content">
                        <h4>Mail Us</h4>
                        <p><a href="mailto:info@josiefarms.com">info@josiefarms.com</a></p>
                        <p><a href="mailto:hello@josiefarms.com">hello@josiefarms.com</a></p>
                    </div>
                </div>

                <div class="info-group">
                    <div class="info-icon-wrapper">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-text-content">
                        <h4>Call Us</h4>
                        <p>Phone 1: <a href="tel:+15559876543">+1 (555) 987-6543</a></p>
                        <p>Phone 2: <a href="tel:+15559876541">+1 (555) 987-6541</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>