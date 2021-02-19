<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location", "index.php");
}

$user = $_SESSION['username'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <title>Dashboard</title>
  </head>
  <body>
    <div class="container text-center mt-4">
      <h1>Welcome back <?= $user ?> to your dashboard</h1>

      <h4 class="mt-4">Email: <?= $email ?></h4>
      <h4 class="mt-4">Hash: <?= $password ?></h4>
  </body>
</html>
