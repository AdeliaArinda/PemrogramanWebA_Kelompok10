<?php

include "header_admin.php";
include "header2.php";

$koneksi = mysqli_connect("localhost", "root", "", "database_user");
$sql1 = "select * from kategori order by id_kategori";
$query1 = mysqli_query($koneksi,$sql1);
$data = mysqli_fetch_assoc($query1);
?>

<style>
    .content table{
        width: 100%;
        margin: 20px;
    }
    .content table thead tr {
        background-color: brown;
        color: white;
    }
    .content table tbody tr td{
        padding: 10px;
    }
    .add{
        background-color: #03a9f4;
    }
    .add:hover{
        background-color: #0588c3;
    }
    .edit{
        background-color: #2dbd33;
    }
    .edit:hover{
        background-color: #229227;
    }
    .delete{
        background-color: #c70808;
    }
    .delete:hover{
        background-color: #8c0707;
    }
    .btn{
        padding: 5px 20px;
        color: white;
        text-decoration: none;
    }
</style>
<br><br><br>
<a class="btn add" href="tambah_kategori.php">Tambah Kategori</a>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $num = 0; do{ $num++; ?>
        <tr>
            <td><?=$num;?></td>
            <td><?=$data['nama_kategori'];?></td>
            <td>
                <a class="btn edit" href="edit_kategori.php?id=<?=$data['id_kategori'];?>">Edit</a> 
                <a class="btn delete" href="hapus_kategori.php?id=<?=$data['id_kategori'];?>">Delete</a>
            </td>
        </tr>
        <?php } while ($data = mysqli_fetch_assoc($query1));?>
    </tbody>
</table>