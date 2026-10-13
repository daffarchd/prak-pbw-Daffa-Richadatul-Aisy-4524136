<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraPress - Website Modern</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f8fafc;
            color: #1e293b;
        }

        /* Navbar */
        nav {
            background: #111827;
            color: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            color: #ff2d20;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #ff2d20;
        }

        /* Hero */
        .hero {
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 8%;
            background: linear-gradient(135deg, #111827, #2d3748);
            color: white;
            gap: 40px;
        }

        .hero-text {
            max-width: 550px;
        }

        .hero-text h1 {
            font-size: 55px;
            margin-bottom: 20px;
        }

        .hero-text h1 span {
            color: #ff2d20;
        }

        .hero-text p {
            font-size: 18px;
            line-height: 1.7;
            color: #d1d5db;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 14px 25px;
            background: #ff2d20;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: #dc2418;
            transform: translateY(-3px);
        }

        .hero img {
            width: 400px;
            max-width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.4);
        }

        /* About */
        .about {
            padding: 70px 8%;
            text-align: center;
        }

        .about h2 {
            font-size: 35px;
            margin-bottom: 15px;
        }

        .about > p {
            max-width: 700px;
            margin: auto;
            line-height: 1.7;
            color: #64748b;
        }

        /* Cards */
        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card .icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 12px;
        }

        .card p {
            color: #64748b;
            line-height: 1.6;
        }

        /* Footer */
        footer {
            background: #111827;
            color: #9ca3af;
            text-align: center;
            padding: 25px;
            margin-top: 40px;
        }

        footer span {
            color: #ff2d20;
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav>
        <h2>LaraPress</h2>

        <div>
            <a href="#home">Home</a>
            <a href="#about">Tentang</a>
            <a href="#fitur">Fitur</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero" id="home">

        <div class="hero-text">
            <h1>Welcome to <span>LaraPress</span></h1>

            <p>
                LaraPress adalah konsep website modern yang dibuat
                dengan tampilan sederhana, elegan, dan responsif.
                Cocok digunakan untuk website informasi, blog,
                maupun aplikasi web.
            </p>

            <a href="#about" class="btn">Pelajari Lebih Lanjut</a>
        </div>

        <!-- Gambar -->
        <img
            src="https://laravel.com/img/logomark.min.svg"
            alt="Laravel Logo">
    </section>

    <!-- Tentang -->
    <section class="about" id="about">

        <h2>Tentang LaraPress</h2>

        <p>
            LaraPress menggabungkan tampilan website yang modern
            dengan konsep pengembangan web yang sederhana.
            Dengan desain yang responsif, halaman dapat digunakan
            pada komputer maupun smartphone.
        </p>

        <!-- Cards -->
        <div class="cards" id="fitur">

            <div class="card">
                <div class="icon">🚀</div>
                <h3>Cepat</h3>
                <p>
                    Tampilan dibuat ringan sehingga nyaman
                    digunakan dan mudah dikembangkan.
                </p>
            </div>

            <div class="card">
                <div class="icon">🎨</div>
                <h3>Modern</h3>
                <p>
                    Menggunakan desain modern dengan warna,
                    card, tombol, dan layout yang menarik.
                </p>
            </div>

            <div class="card">
                <div class="icon">📱</div>
                <h3>Responsive</h3>
                <p>
                    Website dapat menyesuaikan tampilannya
                    pada laptop, tablet, maupun smartphone.
                </p>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 <span>LaraPress</span> | Dibuat dengan ❤️</p>
    </footer>

</body>
</html>
