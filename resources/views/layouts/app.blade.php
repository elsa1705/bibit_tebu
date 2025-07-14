<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Josiefarms - Agriculture & Organic Farming')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        .nav-link:hover,
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

        /* Responsive adjustments for header/nav */
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
                display: none; /* Hidden by default for mobile */
                width: 100%;
                text-align: center;
                gap: 0;
            }
            /* Anda mungkin butuh JS untuk menampilkan/menyembunyikan nav-menu di mobile */
            /* nav.active .nav-menu { display: flex; } */

            .nav-btn {
                margin: 20px 0;
                width: 80%;
            }
        }

        /* Tambahkan CSS untuk animasi hero utama jika Anda ingin di semua halaman */
        /* Animasi fadeUp ini khusus untuk hero-content dan cta-btn di halaman welcome */
        /* Anda bisa menghapusnya dari sini jika hanya ingin di welcome.blade.php */
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    @yield('styles') {{-- Untuk CSS khusus halaman --}}
</head>
<body>
    <header>
        <div class="logo">JosieFarms</div>
        <nav>
            <div class="nav-menu">
                <div class="nav-item"><a href="{{ url('/') }}" class="nav-link @if(Request::is('/')) active @endif">Home</a></div>
                <div class="nav-item"><a href="#" class="nav-link">About Us</a></div>
                <div class="nav-item"><a href="#" class="nav-link">Services</a></div>
                <div class="nav-item">
                    <button class="nav-link" tabindex="0">Projects ▾</button>
                    <div class="dropdown">
                        <a href="#">Project 1</a>
                        <a href="#">Project 2</a>
                        <a href="#">Project 3</a>
                    </div>
                </div>
                <div class="nav-item"><a href="{{ route('contact') }}" class="nav-link @if(Request::is('contact')) active @endif">Contact Us</a></div>
                <div class="nav-item">
                    <button class="nav-link" tabindex="0">Pages ▾</button>
                    <div class="dropdown">
                        <a href="#">Page 1</a>
                        <a href="#">Page 2</a>
                        <a href="#">Page 3</a>
                    </div>
                </div>
                <button class="nav-btn">Get In Touch</button>
            </div>
        </nav>
    </header>

    <main>
        @yield('content') {{-- Ini adalah tempat konten unik setiap halaman akan dimasukkan --}}
    </main>

    {{-- Anda bisa menambahkan footer di sini jika ada --}}

    @yield('scripts') {{-- Untuk JavaScript khusus halaman --}}
</body>
</html>