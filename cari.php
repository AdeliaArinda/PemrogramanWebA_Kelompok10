<?php
require "header.php";
require "function.libs.php";
$koneksi = mysqli_connect("localhost", "root", "", "database_user");
$key = '%'.$_GET['txt_cari'].'%';
$sql1 = "SELECT * FROM materi LEFT JOIN kategori ON materi.id_kategori = kategori.id_kategori where judul_materi like '$key'";
$query1 = mysqli_query($koneksi,$sql1);
$data = mysqli_fetch_assoc($query1);
$row = mysqli_num_rows($query1);
?>
<br><br><br><br>
<p>Terdapat <?=$row;?> Berita Dari Keyword "<?=$_GET['txt_cari'];?>"</p>

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
            <li><a href="kategori.php?id=<?=$data['id_kategori'];?>"><?=$data['nama_kategori'];?></a></li>
            <li><?=tanggal($data['tanggal_materi']);?></li>
        </ul>
    </div>
    <div class="breadcrumbs" style="list-style: none;">
        <a style="color: whitesmoke;" href="lihat_materi.php?id=<?=$data['id_materi'];?>">LIHAT</a>
    </div>
</div>
<?php }while($data = mysqli_fetch_assoc($query1)); ?>