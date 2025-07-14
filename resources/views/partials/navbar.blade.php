<!-- Navbar CSS khusus, bisa di-include di <head> setiap halaman -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<nav>
    <div class="nav-menu">
        <div class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></div>
        <div class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></div>
        <div class="nav-item"><a href="{{ route('services.index') }}" class="nav-link">Service</a></div>
        <div class="nav-item">
            <button class="nav-link" tabindex="0">Project ▾</button>
            <div class="dropdown">
                <a href="#">Project 1</a>
                <a href="#">Project 2</a>
                <a href="#">Project 3</a>
            </div>
        </div>
        <div class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></div>
        <!-- Pages dropdown removed -->
        <button class="nav-btn">Get Started</button>
    </div>
</nav>
