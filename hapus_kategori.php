<?php

include "header_admin.php";

$koneksi = mysqli_connect("localhost", "root", "", "database_user");


$id = $_GET['id'];

$query = mysqli_query($koneksi,"delete from kategori where id_kategori = '$id'");

if($query){
    header('location:list_kategori.php');?>
    <a href="list_kategori.php"></a>
<?php } ?>
