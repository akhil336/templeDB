<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<?php

include 'connect.php';

if(isset($_POST['submit']))
{
    $user=$_POST['username'];
    $pwd = $_POST['password'];

    $sql="SELECT * FROM `temple_login` WHERE `username`='$user' and `password`='$pwd'";
    $res=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($res);

    if(isset($row)){
        echo "<script>alert('Logged in successfully');</script>";
        header('Location:home.php');
    }
    else{
        echo "<script>alert('Failed to Login');</script>";
        header("Location:index.php");
    }
}
?>

<body>
    <h2>TEMPLE MANAGEMENT SYSTEM</h2>
    <div class="container">
    <h1>Login</h1>
<form method="post">
  <label for="username">Username</label><br>
  <input type="text" name="username" ><br>
  <label for="password">Password</label><br>
  <input type="password" name="password"><br><br>
  <input type="submit" name="submit" value="Login">
</form> 
</div>
</body>
</html>