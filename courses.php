<?php require_once ("header.php");
require "function.libs.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Courses - Mentor Bootstrap Template</title>
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

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Materi</h2>
      </div>
    </div><!-- End Breadcrumbs -->
  </main><!-- End #main -->

  <?php
$koneksi = mysqli_connect("localhost", "root", "", "database_user");

$sql1 = "SELECT * FROM materi LEFT JOIN kategori ON materi.id_kategori = kategori.id_kategori";
$query1 = mysqli_query($koneksi,$sql1);
$data = mysqli_fetch_assoc($query1);
?>

<?php do{ ?>

  <style>
    .grid{
        width: 300px;
        padding: 10px;
        border: 1px solid #b1aeae;
        border-radius: 5px;
        float: left;
        margin: 5px;
    }
    .cover-grid-news{
        height: 180px;
        width: 100px;
    }
    .judul{
        text-align: center;
    }
    .judul h5 a{
        text-decoration: none;
        color: #000;
        text-align: center;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .attr ul li{
        list-style: none;
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: -30px;
        text-align: center;
    }
    .attr ul li a{
        text-decoration: none;
        color: black;
    }
</style>

  <div class="grid">
    <div class="cover-grid-news">
        <img src="<?=$data['gambar_materi'];?>" width="270px">
    </div>
    <br>
    <div class="judul">
        <h2><a href="lihat_materi.php?id=<?=$data['id_materi'];?>"><?=$data['judul_materi'];?></a></h2>
    </div>
    <div class="attr">
        <ul>
            <li><a href="kategori_user.php?id=<?=$data['id_kategori'];?>"><?=$data['nama_kategori'];?></a></li>
            <li><?=tanggal($data['tanggal_materi']);?></li>
        </ul>
    </div>
    <div class="breadcrumbs" style="list-style: none;">
        <li><a style="color: whitesmoke;" href="lihat_materi.php?id=<?=$data['id_materi'];?>">LIHAT</a></li>
    </div>
</div>
<?php }while($data = mysqli_fetch_assoc($query1)); ?>


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