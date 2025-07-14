<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bibit Tebu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f6f9f6;
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background: #294c36;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            height: 70px;
        }
        .navbar-logo {
            display: flex;
            align-items: center;
            font-size: 1.7rem;
            font-weight: 700;
            color: #3a7d2c;
        }
        .navbar-logo img {
            height: 36px;
            margin-right: 12px;
        }
        .navbar-menu {
            display: flex;
            gap: 32px;
        }
        .navbar-menu a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: color 0.2s;
        }
        .navbar-menu a:hover {
            color: #ffe066;
        }
        .navbar-btn {
            background: #ffe066;
            color: #294c36;
            border: none;
            border-radius: 24px;
            padding: 10px 28px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,128,0,0.08);
            transition: background 0.2s;
        }
        .navbar-btn:hover {
            background: #ffd700;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 400px;
            background: linear-gradient(90deg, #eafbe7 60%, #fff 100%);
            padding: 60px 40px;
        }
        .hero-text {
            max-width: 600px;
        }
        .hero-title {
            color: #294c36;
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 18px;
        }
        .hero-sub {
            color: #3a7d2c;
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 12px;
        }
        .hero-desc {
            color: #444;
            font-size: 1.1rem;
            margin-bottom: 32px;
        }
        .hero-img {
            width: 340px;
            height: 340px;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80') center/cover no-repeat;
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(0,128,0,0.08);
        }
        @media (max-width: 900px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            .hero-img {
                margin-top: 32px;
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
            <a href="#">Contact Us</a>
        </div>
        <a href="/users"><button class="navbar-btn">Get In Touch</button></a>
    </nav>
    <section class="hero">
        <div class="hero-text">
            <div class="hero-sub">Established Since 1992</div>
            <div class="hero-title">Providing Nature's Finest Harvest</div>
            <div class="hero-desc">Semper sit imperdiet bibendum felis fames ante sed suscipit. Solusi modern untuk manajemen data pertanian dan user.</div>
        </div>
        <div class="hero-img"></div>
    </section>
</body>
</html>
