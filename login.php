<?php 
session_start();
include_once('db_connect.php');
$database = new database();
if(isset($_SESSION['is_login']))
{
    header('location:index_admin.php');
}
if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:index_admin.php');
}
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }
    if($database->login($username,$password,$remember))
    {
      header('location:index_admin.php');
    }
    else
    {
      echo "<script>alert('Username atau Password Tidak Sesuai!'); document.location.href = 'login.php';</script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Login Form</title>

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
  <center><h1>Please sign in</h1>
    <form method="post" action="">
        <label for="username">Username</label>
        <br>
        <input class="control" type="text" id="username" placeholder="Username" name="username" required autofocus>
        <br> <br>
        <label for="password">Password</label>
        <br>
        <input class="control" type="password" id="password" placeholder="Password" name="password" required>
        <br> <br>
        <label><input type="checkbox" value="remember-me" name="remember"> Remember me</label>
        <br> <br>
        <button class="button" type="submit" name="login">Sign in</button>
        <button class="button"><a href="register.php" style="text-decoration: none; color :black">Register</a></button>
    </form></center>
  </div>
</body>
</html>