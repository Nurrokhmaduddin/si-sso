<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kustom Pro | Solusi Perangkat Lunak Terintegrasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com" rel="stylesheet">
    <style>
        :root {
            --bg: #0a0a0c;
            --card-bg: #16161a;
            --primary: #3b82f6;
            --text-main: #f8fafc;
            --text-dim: #94a3b8;
            --accent: #60a5fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            background: rgba(10, 10, 12, 0.8);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .logo { font-weight: 800; font-size: 1.2rem; color: var(--primary); }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 10%;
            background: radial-gradient(circle at 50% 50%, #1e293b 0%, #0a0a0c 70%);
        }

        h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -2px;
        }

        .hero p {
            color: var(--text-dim);
            max-width: 600px;
            margin-bottom: 2.5rem;
            font-size: 1.1rem;
        }

        .cta-btn {
            background: var(--primary);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .cta-btn:hover { background: var(--accent); transform: translateY(-3px); }

        /* Bento Grid Section */
        .features { padding: 8rem 5%; }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .bento-card {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: 0.3s;
        }

        .bento-card:nth-child(1) { grid-column: span 2; }
        .bento-card:hover { border-color: var(--primary); }

        .bento-card h3 { margin-bottom: 1rem; font-size: 1.5rem; }
        .bento-card p { color: var(--text-dim); font-size: 0.95rem; }

        /* Footer */
        footer {
            padding: 4rem 5%;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            text-align: center;
            color: var(--text-dim);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .grid-container { grid-template-columns: 1fr; }
            .bento-card:nth-child(1) { grid-column: span 1; }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">TECHSYSTEM_</div>
        <a href="#contact" class="cta-btn" style="padding: 0.6rem 1.5rem;">Konsultasi</a>
    </nav>

    <header class="hero">
        <h1>Bangun Sistem Kustom Sesuai Bisnis Anda.</h1>
        <p>Kami merancang software informasi yang adaptif, aman, dan dirancang khusus untuk memecahkan masalah operasional unik perusahaan Anda.</p>
        <div class="hero-actions">
            <a href="#contact" class="cta-btn">Mulai Proyek Sekarang</a>
        </div>
    </header>

    <section class="features">
        <div class="grid-container">
            <div class="bento-card">
                <h3>Scalable ERP Systems</h3>
                <p>Kelola sumber daya perusahaan secara terpadu dengan sistem ERP yang bisa tumbuh bersama bisnis Anda tanpa batasan lisensi per-user.</p>
            </div>
            <div class="bento-card">
                <h3>Cloud Native</h3>
                <p>Akses data kapan saja dengan infrastruktur cloud yang aman dan andal.</p>
            </div>
            <div class="bento-card">
                <h3>API Integration</h3>
                <p>Menghubungkan sistem lama Anda dengan teknologi modern secara mulus.</p>
            </div>
            <div class="bento-card" style="grid-column: span 2;">
                <h3>Keamanan Standar Industri</h3>
                <p>Setiap baris kode kami audit untuk memastikan perlindungan data tingkat tinggi dan kepatuhan terhadap regulasi privasi terbaru.</p>
            </div>
        </div>
    </section>

    <footer id="contact">
        <p>&copy; 2026 TechSystem Information House. Built for the Future.</p>
    </footer>

    <script>
        // Smooth scroll sederhana
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
