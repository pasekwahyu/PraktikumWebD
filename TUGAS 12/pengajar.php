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
            <div class="pengajar">
                <img src="./image/pengajar.png" alt="profil1" style="width:200px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">AGUS</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">1111111</p>
                </div>
            </div>
            <div class="pengajar">
                <img src="./image/pengajar.png" alt="profil1" style="width:200px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Wisnawa</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">2222222</p>
                </div>
            </div>
            <div class="pengajar">
                <img src="./image/pengajar.png" alt="profil1" style="width:200px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Satya</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">3333333</p>
                </div>
            </div>
            <div class="pengajar">
                <img src="./image/pengajar.png" alt="profil1" style="width:200px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Vyasa</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">4444444</p>
                </div>
            </div>
        </div>
  </div>
  <div class="footer">
    <b>@ Copyright 2020<br>Universitas Udayana</b>
  </div>
</body>
</html>