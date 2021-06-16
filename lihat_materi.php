<?php require "function.libs.php";
require "header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Materi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Materi</h2>
      </div>
    </div><!-- End Breadcrumbs -->

<?php

include "header.php";
$koneksi = mysqli_connect("localhost", "root", "", "database_user");
$id = $_GET['id'];

// $sql1 = "SELECT * FROM materi LEFT JOIN kategori ON materi.id_kategori = kategori.id_kategori";
$sql1 = "select * from materi where id_materi = '".$_GET['id']."'";
$query1 = mysqli_query($koneksi,$sql1);
$data = mysqli_fetch_assoc($query1);

$sql2 = "select * from kategori where id_kategori = '".$_GET['id']."'";
$query2 = mysqli_query($koneksi,$sql2);
$data2 = mysqli_fetch_assoc($query2);
?>

<style>
    .image, .col-9, .col-3{
        float: left;
    }
    .col-9{
        width: 75%;
    }
    .col-3{
        width: 25%;
    }
    .sidebar{
        border: 1px solid #9e9e9e;
        padding: 0px 0px 25px 5px;
        border-radius: 5px;
        margin: 3px 0px;
    }
    .image{
        padding: 5px;
    }
    .image img{
        width: 100px;
    }
    .atribute a{
        text-decoration: none;
    }
    .btn{
        text-decoration: none;
        background-color: #FF9800;
        color: white;
        padding: 5px 20px;
    }
    .btn:hover{
        background-color: #cc7a02;
    }
</style>

<div class="col-9">
    <center><h1><?=$data['judul_materi'];?></h1></center>
    <br><br>
    <div>
        <img src="<?=$data['gambar_materi'];?>" width="98%;">
    </div>
    <br><br>
    <div>
        <p>Kategori : <a href="kategori_user.php?id=<?=$data2['id_kategori'];?>"><?=$data2['nama_kategori'];?></a></p>
        <br>
        <p>Rilis Materi : <?=tanggal($data['tanggal_materi']);?></p>
    </div>
    <div>
        <p><?=$data['isi_materi'];?></p>
    </div>
</div>
<div class="col-3">
    <h2>Materi Terkait</h2>
    <?php
        $id_materi = $data['id_materi'];
        $id_kategori = $data['id_kategori'];
        $sql1 = "SELECT * FROM materi LEFT JOIN kategori ON materi.id_kategori = kategori.id_kategori";
        $qterkait = mysqli_query($koneksi,$sql1);
        $terkait = mysqli_fetch_assoc($qterkait);

    if(mysqli_num_rows($qterkait) > 0){
    do{
        if($terkait['id_materi'] != $id_materi){
    ?>
    <div class="sidebar">
        <div class="terkait">
            <div class="image">
                <img src="<?=$terkait['gambar_materi'];?>">
            </div>
            <div class="atribute">
                <h5><?=$terkait['judul_materi'];?></h5>
                <p><?=$terkait['nama_kategori'];?></p>
                <br>
                <a href="lihat_materi.php?id=<?=$terkait['id_materi'];?>" class="btn">LIHAT</a>
            </div>
        </div>
    </div>
    <?php }}while($terkait = mysqli_fetch_assoc($qterkait)); }else{echo "Tidak ada materi terkait";} ?>

</div>

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>