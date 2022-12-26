<?php
require 'function.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
  $email = $select->selectUserById($_SESSION["id"]);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1><?php echo "Hi" . ' ' . $user["name"]. ', ' . "you are now logged in as ". ' ' . $user["name"] . ' ' .$email["surname"]; ?></h1>
    <a href="continue.php">Click here to continue</a> <br>
    <a href="logout.php">Go back</a>
  </body>
</html>
