<nav>
    <div class="nav-menu">
        <div class="nav-item"><a href="#" class="nav-link">Home</a></div>
        <div class="nav-item"><a href="#" class="nav-link">About Us</a></div>
        <div class="nav-item"><a href="{{ route('service') }}" class="nav-link">Service</a></div>
        <div class="nav-item">
            <button class="nav-link" tabindex="0">Project ▾</button>
            <div class="dropdown">
                <a href="#">Project 1</a>
                <a href="#">Project 2</a>
                <a href="#">Project 3</a>
            </div>
        </div>
        <div class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></div>
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
