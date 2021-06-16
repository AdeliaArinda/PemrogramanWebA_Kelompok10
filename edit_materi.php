<?php

include "header_admin.php";
include "header2.php";
$koneksi = mysqli_connect("localhost", "root", "", "database_user");
$id = $_GET['id'];

$simpan = isset($_POST['edit_materi']) ? $_POST['edit_materi']:'';
if($simpan){

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar']['name'];

    if(!empty($gambar)){
        move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar);
        $sql1 = "update materi set gambar_materi = '$gambar' where id_materi = '$id'";
    }

        $sql1 = "update materi set judul_materi = '$judul', isi_materi = '$isi', id_kategori = '$kategori' where id_materi = '$id'";
        $query1 = mysqli_query($koneksi,$sql1);

    if ($query1){
        // header('location:list_materi.php');?>
        <a href="list_materi.php"></a>
        <?php
    }
}

//berita
$sql1 = "select * from materi where id_materi = '".$_GET['id']."'";
$query1 = mysqli_query($koneksi,$sql1);
$data = mysqli_fetch_assoc($query1);

//kategori
$kategori = "select * from kategori order by nama_kategori ASC";
$query2 = mysqli_query($koneksi,$kategori);
$kat = mysqli_fetch_assoc($query2);

?>

<style>
    .content form input[type=text], .content form input[type=password], .content form select{
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
    <label>Judul : </label><input type="text" name="judul" value="<?=$data['judul_materi'];?>"><br>
    <label>Kategori : </label><select name="kategori">
                    <option value="">-- Pilih Kategori</option>
                    <?php do { ?>
                        <option value="<?=$kat['id_kategori'];?>" <?php if($data['id_kategori'] == $kat['id_kategori']){echo "selected";}?>>
                            <?=$kat['nama_kategori'];?>
                        </option>
                    <?php }while($kat = mysqli_fetch_assoc($query2)); ?>
                </select><br>
    <label>Isi Materi : </label>
    <textarea name="isi"><?=$data['isi_materi'];?></textarea><br>
    <label>Gambar : </label><br><input type="file" name="gambar"><br>
    <input class="submit" type="submit" name="edit_materi" value="SIMPAN">
</form>