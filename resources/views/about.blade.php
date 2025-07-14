<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Josiefarms</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <!-- CSS navbar di-include dari partials/navbar.blade.php -->
</head>
<body>
    <header>
        <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
            <div class="logo" style="display:flex;align-items:center;gap:12px;">
                <img src="https://tebewebe.online/josiefarms/wp-content/uploads/sites/320/2025/02/JF_JosieFarms_Logo-300x50.webp" alt="JosieFarms Logo" style="height:38px;">
                <span style="font-size:2rem; font-weight:700; color:#6a9739; letter-spacing:2px;"></span>
            </div>
            @include('partials.navbar')
        </div>
    </header>
    <div style="background:#fff; border-radius:24px; max-width:1200px; margin:48px auto; box-shadow:0 4px 24px rgba(0,0,0,0.08); padding:48px 32px; display:flex; gap:48px; align-items:center;">
        <div style="flex:1;">
            <h1 style="font-size:2.8rem; font-weight:700; color:#222; margin-bottom:24px;">About Josiefarms</h1>
            <p style="font-size:1.15rem; color:#555; margin-bottom:18px;">We are passionate about sustainable agriculture and organic farming. Our mission is to provide the freshest, healthiest produce while caring for the environment and our community.</p>
            <p style="font-size:1.15rem; color:#555; margin-bottom:32px;">Discover our story, our values, and how we nurture nature for the best harvest. Join us in making a greener future!</p>
            <a href="#" style="display:inline-block; background:#ffd600; color:#222; font-weight:700; border-radius:32px; padding:16px 38px; font-size:1.15rem; text-decoration:none; box-shadow:0 4px 16px rgba(255,214,0,0.12); transition:background 0.2s;">Learn More</a>
            <a href="#" class="btn-primary">Learn More</a>
        </div>
        <div style="flex:1; display:flex; flex-direction:column; gap:18px;">
            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Farm 1" style="width:100%; height:220px; object-fit:cover; border-radius:16px; box-shadow:0 4px 24px rgba(106,151,57,0.10);">
            <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=600&q=80" alt="Farm 2" style="width:100%; height:220px; object-fit:cover; border-radius:16px; box-shadow:0 4px 24px rgba(106,151,57,0.10);">
        </div>
    </div>
</body>
</html>
