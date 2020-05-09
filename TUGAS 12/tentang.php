<?php 
require 'koneksi.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

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

<body>
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
            <h1 style="color: #065279;"">SEJARAH</h1>
            <img style="width: 300px; float: left; margin-right: 20px;" src="./image/1.jpg" alt="Unudimage">
            <p>Cikal bakal Unud adalah Fakultas Sastra Udayana cabang Universitas Airlangga yang diresmikan oleh P. J.
                M.
                Presiden Republik Indonesia Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Priyono pada
                tanggal 29
                September 1958 sebagaimana tertulis pada Prasasti di Fakultas Sastra Jalan Nias Denpasar.
                <br><br> Udayana secara sah berdiri pada tanggal 17 Agustus 1962 dan merupakan perguruan tinggi negeri
                tertua
                di daerah Provinsi Bali. Sebelumnya, sejak tanggal 29 September 1958 di Bali sudah berdiri sebuah
                Fakultas yang
                bernama Fakultas Sastra Udayana sebagai cabang dari Universitas Airlangga Surabaya. Fakultas Sastra
                Udayana
                inilah yang merupakan embrio dari pada berdirinya Universitas Udayana. Berdasarkan Surat Keputusan
                Menteri
                PTIPNo.104/1962, tanggal 9 Agustus 1962, Universitas Udayana secara syah berdiri sejak tanggal 17
                Agustus 1962.
                Tetapi oleh karena hari lahir Universitas Udayana jatuh bersamaan dengan hari Proklamasi Kemerdekaan
                RepublikIndonesia maka perayaan Hari Ulang Tahun Universitas Udayana dialihkan menjadi tanggal 29
                September
                dengan mengambil tanggal peresmian Fakultas Sastra yang telah berdiri sejak tahun 1958.
            </p>
        </div>
  </div>
  <div class="footer">
    <b>@ Copyright 2020<br>Universitas Udayana</b>
  </div>
</body>
</html>