<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang Kami - LaraPress</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f4f4;
            color: #333;
        }

        /* Navbar */
        nav {
            background: #111827;
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
            margin-left: 20px;
        }

        nav a:hover {
            color: #ff2d20;
        }

        /* Header */
        .header {
            background: #ff2d20;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .header h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
        }

        /* Biodata */
        .biodata {
            background: white;
            padding: 30px;
            border-radius: 15px;
            display: flex;
            gap: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        /* Foto */
        .foto {
            width: 220px;
            height: 270px;
            flex-shrink: 0;
            border-radius: 10px;
            overflow: hidden;
            background: #ddd;
        }

        .foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Data */
        .data {
            flex: 1;
        }

        .data h2 {
            color: #ff2d20;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 9px 5px;
            border-bottom: 1px solid #ddd;
        }

        td:first-child {
            font-weight: bold;
            width: 35%;
        }

        /* Tentang */
        .tentang {
            background: white;
            margin-top: 25px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .tentang h2 {
            color: #ff2d20;
            margin-bottom: 15px;
        }

        .tentang p {
            line-height: 1.7;
            color: #555;
        }

        /* Footer */
        footer {
            margin-top: 50px;
            padding: 20px;
            background: #111827;
            color: white;
            text-align: center;
        }

        footer span {
            color: #ff2d20;
        }

        /* Mobile */
        @media (max-width: 700px) {

            nav {
                flex-direction: column;
                gap: 15px;
            }

            .biodata {
                flex-direction: column;
                align-items: center;
            }

            .data {
                width: 100%;
            }

            .foto {
                width: 200px;
                height: 250px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav>
        <h2>LaraPress</h2>

        <div>
            <a href="/">Home</a>
            <a href="/about">Tentang Kami</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>


    <!-- Header -->
    <section class="header">
        <h1>Tentang Kami</h1>
        <p>Profil dan Biodata Mahasiswa</p>
    </section>


    <!-- Isi -->
    <div class="container">

        <!-- Biodata -->
        <div class="biodata">

            <!-- Foto -->
            <div class="foto">
                <img
                    src="https://tse1.mm.bing.net/th/id/OIP.UYagQDMo7CCbBLXOPB5etAHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="Foto Profil">
            </div>


            <!-- Informasi -->
            <div class="data">

                <h2>Biodata Mahasiswa</h2>

                <table>

                    <tr>
                        <td>Nama</td>
                        <td>Daffa Richadatul'Aisy</td>
                    </tr>

                    <tr>
                        <td>NIM</td>
                        <td>4524210136</td>
                    </tr>

                    <tr>
                        <td>Kampus</td>
                        <td>Universitas Pancasila</td>
                    </tr>

                    <tr>
                        <td>Fakultas</td>
                        <td>Teknik Informatika</td>
                    </tr>

                    <tr>
                        <td>Program Studi</td>
                        <td>Network Cyber Security</td>
                    </tr>

                    <tr>
                        <td>Semester</td>
                        <td>5</td>
                    </tr>

                    <tr>
                        <td>Tempat Lahir</td>
                        <td>Jakarta</td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>Laki-laki</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>Cileungsi, Bogor</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>mahasiswa@email.com</td>
                    </tr>

                </table>

            </div>

        </div>


        <!-- Tentang Saya -->
        <div class="tentang">

            <h2>Tentang Saya</h2>

            <p>
                Halo, saya Daffa Richadatul'Aisy, mahasiswa
                Universitas Pancasila dari Program Studi
                Network Cyber Security.
            </p>

            <br>

            <p>
                Saya memiliki ketertarikan pada dunia teknologi
                informasi, khususnya dalam bidang jaringan,
                keamanan siber, dan pengembangan website.
            </p>

            <br>

            <p>
                Website LaraPress ini dibuat sebagai bagian dari
                proses pembelajaran Laravel, Blade, HTML, dan CSS.
            </p>

        </div>

    </div>


    <!-- Footer -->
    <footer>
        <p>
            © 2026 <span>LaraPress</span> | Tentang Kami
        </p>
    </footer>

</body>

</html>
