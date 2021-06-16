<?php

include "header_admin.php";
include "header2.php";

$koneksi = mysqli_connect("localhost", "root", "", "database_user");

$sql1 = "SELECT * FROM materi LEFT JOIN kategori ON materi.id_kategori = kategori.id_kategori";
// $sql1 = "select kategori.*,materi. * from materi LEFT JOIN kategori on materi.id_kategori = kategori.id_materi order by materi.id_materi desc";
$query1 = mysqli_query($koneksi,$sql1);

// SELECT * FROM karyawan LEFT JOIN gaji ON karyawan.karyawan_id=gaji.karyawan_id WHERE gaji.karyawan_id IS NULL;
//SELECT * FROM rsh_motor LEFT JOIN rsh_brand ON rsh_motor.id_brand = rsh_brand.id
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
<a href="tambah_materi.php" class="btn add">Tambah Materi</a>
<table border="1">

    <thead>
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $num = 0; do{ $num++; ?>
        <tr>
            <td><?=$num;?></td>
            <td><?=$data['judul_materi'];?></td>
            <td><?=tanggal($data['tanggal_materi']);?></td>
            <td><?=$data['nama_kategori'];?></td>
            <td><img src="<?=$data['gambar_materi'];?>" width="150px"></td>
            <!-- <td><img src="../upload/"<?=$data['gambar_materi'];?> width="100px"></td> -->
            <td>
                <a class="btn edit" href="edit_materi.php?id=<?=$data['id_materi'];?>">Edit</a> 
                <a class="btn delete" href="hapus_materi.php?id=<?=$data['id_materi'];?>">Delete</a>
            </td>
        </tr>
    <?php }while($data = mysqli_fetch_assoc($query1)); ?>

    </tbody>
</table>