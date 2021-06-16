<?php

include "header_admin.php";
include "header2.php";
$koneksi = mysqli_connect("localhost", "root", "", "database_user");


$id = $_GET['id'];

$simpan = isset($_POST['simpan_kategori']) ? $_POST['simpan_kategori']:'';
if($simpan){
    $nama = $_POST['nama'];

    $sql1 = "update kategori set nama_kategori = '$nama' where id_kategori = '$id'";
    $query1 = mysqli_query($koneksi,$sql1);

    if ($query1){
        // header('location:list_kategori.php');?>
        <a href="list_kategori.php"></a>
        <?php
    }
}

$sql1 = "select * from kategori where id_kategori = '".$_GET['id']."'";
$query1 = mysqli_query($koneksi,$sql1);
$data = mysqli_fetch_assoc($query1);

?>

<style>
    .content form input[type=text], .content form input[type=password], .content form select{
        padding: 5px;
        margin: 5px;
        margin-top: 20px;
    }
    .content form label{
        position: absolute;
    }
    .submit{
        background-color: #03a9f4;
        width: 100%;
        padding: 10px;
        text-align: center;
        color: white;
        cursor: pointer;
    }
    .submit:hover{
        background-color: #0588c3;
    }
</style>
<br><br><br><br>
<form action="" method="POST">
    <label>Nama Kategori : </label><input type="text" name="nama" value="<?=$data['nama_kategori'];?>"><br>
    <input class="submit" type="submit" name="simpan_kategori" value="SIMPAN">
</form>