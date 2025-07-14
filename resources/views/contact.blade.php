<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Contact Us - Bibit Tebu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { background: #f6f9f6; font-family: 'Poppins', Arial, sans-serif; margin: 0; padding: 0; }
        .header-image {
            width: 100%;
            height: 320px;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80') center center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .header-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(44, 62, 34, 0.45);
        }
        .header-title {
            position: relative;
            color: #fff;
            font-size: 2.8rem;
            font-weight: 700;
            z-index: 1;
            text-align: center;
            letter-spacing: 1px;
        }
        .container { max-width: 1200px; margin: auto; }
        @media (max-width: 700px) {
            .header-title { font-size: 2rem; }
            .header-image { height: 180px; }
        }
    </style>
</head>
<body>
    <!-- Header Image with Title -->
    <div class="header-image">
        <div class="header-overlay"></div>
        <div class="header-title">Contact Us</div>
    </div>

    <!-- Contact Us Section -->
    <section id="contact" style="background:#f7f7f7; padding:60px 0;">
      <div class="container">
        <div style="text-align:center; margin-bottom:40px;">
          <h2 style="font-size:2.5rem; color:#3d5a1a; margin-bottom:10px;">Get In Touch</h2>
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
</body>