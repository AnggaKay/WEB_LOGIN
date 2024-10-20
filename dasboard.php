<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polinela</title>
    <link rel="stylesheet" href="dasboard.css">
</head>
<body>
    <!-- Header -->
    <header>
    <div class="logo">Polinela</div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#masalah">Berita</a></li> 
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>POLITEKNIK NEGERI LAMPUNG</h1>
            <p>Politeknik Negeri Lampung adalah Perguruan Tinggi Negeri yang menyelenggarakan pendidikan vokasi di Provinsi Lampung
               untuk menciptakan lulusan ahli madya dan sarjana terapan berjiwa disiplin, 
               mandiri dan profesional di Indonesia.</p>
        </div>
        <div class="hero-image">
            <img src="images/logo/Logo-Polinela-New-300x287.png" alt="polinela">
        </div>
    </section>

    <section class="masalah" id="masalah"> 
    <div class="masalah-container">
        <div class="masalah-image">
            <img src="images/logo/Cuplikan_layar_2024-10-20_142405-removebg-preview.png" alt="Prodi Illustration">
        </div>
        <div class="masalah-content">
            <h2>About <span>Prodi</span></h2>
            <p>
                Program Studi Software Engineering adalah disiplin ilmu yang memfokuskan pada pengembangan perangkat lunak berkualitas tinggi dengan menggunakan prinsip rekayasa perangkat lunak. Program ini dirancang untuk membekali mahasiswa dengan pengetahuan mendalam tentang metodologi pengembangan perangkat lunak, desain sistem, serta pengujian dan pemeliharaan aplikasi.
            </p>
        </div>
    </div>
</section>


</body>
</html>
