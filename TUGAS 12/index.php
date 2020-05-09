<?php 
require 'koneksi.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$nama = $_SESSION["username"];
$type = $_SESSION["role"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Tugas CSS</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body <?= ($type == 'admin') ? "style='background-color: seashell'" : "style='background-color: whitesmoke'"; ?>>  
<div class="kiri">
    <div class="logo">
      <img style="margin-left: auto; margin-right: auto;" src="./image/logo.png" alt="Logo.png" height="150px" />
    </div>
    <div class="sub-kiri">
      <h3>ARTIKEL POPULER</h3>
    </div>
    <div class="sub-kiri1">
      <a href="#" style="text-decoration: none;">
        <h4>Desain Web</h4>
      </a>
    </div>
    <div class="sub-kiri1">
      <a href="#" style="text-decoration: none;">
        <h4>HTML</h4>
      </a>
    </div>
    <div class="sub-kiri1">
      <a href="#" style="text-decoration: none;">
        <h4>CSS</h4>
      </a>
    </div>
    <div class="sub-kiri1">
      <a href="logout.php" style="text-decoration: none;">
        <h4>Logout</h4>
      </a>
    </div>
  </div>
  <div class="kanan">
    <div class="foto"></div>
     <div class="nav">
      <ul>
        <li>
          <a href="index.php" style="text-decoration: none;">
            <h3>HOME</h3>
          </a>
        </li>
        <li>
          <a href="tentang.php" style="text-decoration: none;">
            <h3>TENTANG</h3>
          </a>
        </li>
        <li>
          <a href="pengajar.php" style="text-decoration: none;">
            <h3>PENGAJAR</h3>
          </a>
        </li>
        <li>
          <a href="kontak.php" style="text-decoration: none;">
            <h3>KONTAK</h3>
          </a>
        </li>
      </ul>
    </div>
    <div class="isi">
      <h1 style="text-align: center;color: #065279;">Selamat Datang <?= $nama; ?> di Portal Universitas Udayana </h1>
      <p style="text-align: center;">(anda login sebagai : <?= $type; ?>)</p>
      <div class="isi1">
      <h2 style="color: #065279;">Berita terkini</h2>
      <img style="width: 300px; float: left; margin-right: 20px; margin-bottom: 30px;" src="./image/5.jpg" alt="#">
      <p><a style="color: #065279;"><b>Polda Bali Kolaborasi Dengan Universitas Udayana Ciptakan Rasa Aman...</b></a><br>Kapolda Bali Irjen Pol. Petrus R. Golose bersama jajaran bertemu Rektor Unud Prof. A.A Raka Sudewi di Gedung Rektorat Kampus Jimbaran, Senin (30/3/2020). Turut hadir mendampingi Rektor, Wakil Rektor Bidang Perencanaan Kerja Sama dan Informasi, Dekan FMIPA dan Wakil Dekan serta Koorprodi Farmasi. Pertemuan ini dalam...</p>
      <a href="https://www.unud.ac.id/in/berita3307-Polda-Bali-Kolaborasi-dengan-Universitas-Udayana-Ciptakan-Rasa-Aman-dan-Nyaman-Bagi-Masyarakat-di-Tengah-Pandemi-COVID-19.html" target="blank">Baca Selengkapnya</a>
      </div>
      <h2 style="color: #065279; clear: both;">Galeri</h2>
      <img style="width: 150px; height: 100px; float: left; margin-right: 20px; margin-bottom: 30px;"
        src="./image/1.jpg" alt="#">
      <img style="width: 150px; height: 100px; float: left; margin-right: 20px; margin-bottom: 30px;"
        src="./image/2.jpg" alt="#">
      <img style="width: 150px; height: 100px; float: left; margin-right: 20px; margin-bottom: 30px;"
        src="./image/3.jpg" alt="#">
      <img style="width: 150px; height: 100px; float: left; margin-right: 20px; margin-bottom: 30px;"
        src="./image/4.jpg" alt="#">
    </div>
  </div>
  <div class="footer">
    <b>@ Copyright 2020<br>Universitas Udayana</b>
  </div>
</body>
</html>