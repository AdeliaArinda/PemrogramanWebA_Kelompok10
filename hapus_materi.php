<?php

include "header_admin.php";

$koneksi = mysqli_connect("localhost", "root", "", "database_user");

$id = $_GET['id'];

$query = mysqli_query($koneksi,"delete from materi where id_materi = '$id'");

if($query){
    header('location:list_materi.php');?>
    <a href="list_materi.php"></a>
<?php } ?>
