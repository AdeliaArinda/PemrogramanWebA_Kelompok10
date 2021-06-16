<?php

include "header_admin.php";
include "header2.php";
$koneksi = mysqli_connect("localhost", "root", "", "database_user");
// if(isset($_POST['tambah_materi']) ? $_POST['tambah_materi']:''){

$simpan = isset($_POST['tambah_materi']) ? $_POST['tambah_materi']:'';
if($simpan){

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar']['name'];

    move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar);

    $sql1 = "insert into materi(judul_materi,isi_materi,id_kategori,gambar_materi) values ('$judul','$isi','$kategori','$gambar')";
    $query1 = mysqli_query($koneksi,$sql1);

    // $query = "INSERT INTO materi (judul_materi,isi_materi,id_kategori,gambar_materi) VALUE ('$judul', '$isi', '$kategori','$gambar')";
    if ($query1){
        // header('location:list_materi.php');?>
        <a href="list_materi.php"></a>
        <?php
    }
}

$sql1 = "select * from kategori order by nama_kategori ASC";
$query1 = mysqli_query($koneksi,$sql1);
$data = mysqli_fetch_assoc($query1);

?>

<style>
    .content form input[type=text], .content form input[type=password], .content form input[type=file], .content form select{
        padding: 5px;
        margin: 5px;
        margin-top: 20px;
    }
    .content form textarea{
        width: 700px;
        height: 300px;
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
<br><br><br>
<form action="" method="POST" enctype="multipart/form-data">
    <label>Judul : </label><input type="text" name="judul"><br>
    <label>Kategori : </label><select name="kategori">
                    <option value="">-- Pilih Kategori</option>
                    <?php do{ ?>
                        <option value="<?=$data['id_kategori'];?>"><?=$data['nama_kategori'];?></option>
                    <?php } while($data = mysqli_fetch_assoc($query1)); ?>
                </select><br>
    <label>Isi Materi : </label>
    <textarea name="isi"></textarea><br>
    <label>Gambar : </label><input type="file" name="gambar"><br>
    <input class="submit" type="submit" name="tambah_materi" value="SIMPAN">
</form>