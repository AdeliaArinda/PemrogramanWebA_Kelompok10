<?php
require "function.libs.php";
include "header.php";

$koneksi = mysqli_connect("localhost", "root", "", "database_user");
$sql1 = "select * from materi where id_kategori = '".$_GET['id']."'";
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
<br><br><br><br><br>
<div class="grid">
    <div class="cover-grid-news">
        <img src="<?=$data['gambar_materi'];?>" width="270px">
    </div>
    <div class="judul">
        <h5><a href="lihat_materi.php?id=<?=$data['id_materi'];?>"><?=$data['judul_materi'];?></a></h5>
    </div>
    <div class="attr">
        <ul style="list-style: none;">
            <li><?=tanggal($data['tanggal_materi']);?></li>
        </ul>
    </div>
    <div class="breadcrumbs">
        <a style="color: whitesmoke;" href="lihat_materi.php?id=<?=$data['id_materi'];?>">LIHAT</a>
    </div>
</div>
<?php }while($data = mysqli_fetch_assoc($query1)); ?>
