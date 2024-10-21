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

    <section class="hero">
        <div class="hero-text">
            <p>HALLO, <?php echo ($_SESSION['username']); ?>!</p>
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
            <img src="images/logo/senioritas.jpg" alt="Prodi Illustration">
        </div>
        <div class="masalah-content">
            <h2><span>Senioritas</span></h2>
            <p>
                Senioritas di kampus merujuk pada tingkat pengalaman dan pengetahuan yang dimiliki oleh mahasiswa berdasarkan lama studi mereka. 
                Dalam konteks ini, senioritas bukan hanya mencerminkan waktu yang telah dihabiskan di institusi, tetapi juga mencakup kontribusi akademis, partisipasi dalam kegiatan organisasi, dan keterlibatan dalam proyek penelitian. 
                Mahasiswa senior seringkali memiliki peran sebagai mentor bagi mahasiswa baru, berbagi pengalaman, dan membantu dalam transisi ke lingkungan akademis. 
                Dengan pengembangan keterampilan kepemimpinan dan kerja sama, senioritas berperan penting dalam membentuk komunitas yang mendukung di dalam kampus.
            </p>
        </div>
    </div>
</body>
</html>
