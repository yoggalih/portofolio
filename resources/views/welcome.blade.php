<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio-galih</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #0A192F;
            color: white;
            font-family: Arial, sans-serif;
        }

        nav {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            align-items: center;
            background-color: #0A192F;
        }

        nav h1 {
            color: white;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
        }

        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            height: 100vh;
        }

        .content {
            max-width: 50%;
        }

        .content h2 {
            font-size: 2.5rem;
        }

        .content h3 {
            color: #00AEEF;
        }

        .buttons {
            margin-top: 20px;
        }

        .socials {
            margin-top: 20px;
        }

        .socials a {
            color: #00AEEF;
            font-size: 24px;
            margin-right: 10px;
            text-decoration: none;
        }

        .hire,
        .talk {
            background-color: #00AEEF;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
        }

        .talk {
            background: transparent;
            border: 2px solid #00AEEF;
            color: #00AEEF;
        }

        .image img {
            max-width: 300px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <h1>Galih.</h1>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero">
        <div class="content">
            <img src="img/galih.jpg" class="image">
            <h2>Hi, I'm <span>Galih Yoga Kurniawan</span></h2>
            <h3>Fresh Grad</h3>
            <p>GALIH YOGA KURNIAWAN, lahir di KLATEN, 26 Juni 2004, TELAH LULUS DENGAN IPK 3.61 di Program Studi
                Informatika, Fakultas Teknologi Industri, Universitas Ahmad Dahlan.

                Selama menempuh studi di Universitas Ahmad Dahlan, telah mengikuti berbagai pembinaan yang mencakup
                program pengenalan kampus, pengembangan akademik, pelatihan soft skills, dan pemahaman tentang nilai
                islam dan kemuhammadiyahan, serta kegiatan yang mendukung pemahaman praktis yang mendukung mahasiswa
                siap menjadi lulusan yang profesional. Berbekal pembinaan dan pengalaman tersebut, GALIH YOGA KURNIAWAN
                siap menjadi lulusan yang profesional, terus mengembangkan kemampuan, dan memberikan kontribusi nyata di
                dunia kerja. saya dapat dihubungi via email : 2200018335@webmail.uad.ac.id dan nomor Whattaps pada nomor
                : 08969185358</p>
            <div class="buttons">
                <button class="hire">Hire Me</button>
                <button class="talk">Let's Talk</button>
            </div>
        </div>

    </section>
</body>

</html>
