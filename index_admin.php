<?php

require "header2.php";
require "header_admin.php";

if(!$_SESSION['is_login']){
        header('location:login.php');?>
        <a href="login.php"></a>
        <?php
    }
?>
<br><br><br>

<?php 
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>HOME</title>
    <style>
    .qwe{
        background: url(1.webp);
        background-size: cover;
    }
    </style>
</head>

<body>
    <div class="qwe">
    <br>
        <center><h1>Selamat Datang <?php echo $_SESSION['nama']; ?></h1></center>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</body>
</html>