<?php
require 'function.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
  $email = $select->selectUserById($_SESSION["id"]);
  $name = $select->selectUserById($_SESSION["id"]);
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
    <h1>Welcome back <?php echo $user["name"]; ?></h1>
    <h1>Your full name is <?php echo $user["name"] . ' ' .$email["surname"]; ?></h1>
    <h1>Your username is "<?php echo $name["username"]; ?>"</h1>
  </body>
</html>