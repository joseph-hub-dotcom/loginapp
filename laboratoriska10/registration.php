<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["surname"], $_POST["password"]);

  if($result == 1){
    echo
    "<script> alert('Uspesno se registriravte'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">First Name : </label>
      <input type="text" name="name" required value=""> <br>
      <label for="">Last Name : </label>
      <input type="text" name="surname" required value=""> <br>
      <label for="">Username : </label>
      <input type="text" name="username" required value=""> <br>
      <label for="">Password : </label>
      <input type="password" name="password" required value=""> <br>
      <button type="submit" name="submit">Register</button>
    </form>
    <br> <br>
    <a href="login.php">Login</a>
  </body>
</html>
