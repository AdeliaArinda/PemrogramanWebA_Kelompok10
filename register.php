<?php 
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    if($database->register($username,$password,$nama))
    {
      header('location:login.php');
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Register Form</title>
    <style>
        .login{
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
            background: #849B5C;
            /* background: #3CB371; */
            padding: 100px;
            width: 270px;
            box-shadow: 0 0 10px 5px #BFFFC7;
            border-radius: 10px;
        }
        .control{
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 5px;
            font-size: 15px;
            background: white;
            border: white;
            border-radius: 5px;
        }
        .button{
            background: white;
            color: black;
            border: #849B5C 3px solid;
            border-radius: 5px;
            padding: 12px 20px;
        }
  </style>
</head>
<body>

<div class="login">
    <center><h1 class="mt-5">Register Form</h1>
    <form method="post" action="">
        <label for="username">Username</label>
        <br>
        <input class="control" type="text" name="username" placeholder="Username">
        <br> <br>
        <label for="nama">Nama</label>
        <br>
        <input class="control" type="text" name="nama" placeholder="Nama">
        <br> <br>
        <label for="password">Password</label>
        <br>
        <input class="control" type="password" name="password" placeholder="Password">
        <br> <br>
        <button class="button"><a href="login.php" style="text-decoration: none; color :black">Login</a></button>
        <button class="button" type="submit" name="register">Register</button>
    </form></center>
</div>

</body>
</html>