<?php
session_start();

if(isset($_SESSION['username'])){
  header("Location: dashboard.php");
}

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
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Login page</title>
  </head>
  <body>
    <div class="container">
      <div class="login_container">
        <div class="form_container">
          <h2 class="text-center mb-4">Login page</h2>
          
            <?php
            if(isset($_SESSION['error'])){
              echo '<div class="alert alert-danger" role="alert">'. $_SESSION["error"].'</div>';
            }
            ?>
         
          <form>
            <input
              class="form-control mb-2"
              type="username"
              name="username"
              placeholder="Username"
              required
            />
            <input
              class="form-control mb-2"
              type="password"
              name="password"
              placeholder="Password"
              required
            />
            <button type="submit" class="btn btn-primary mb-2">Login</button>
          </form>
          <div style="display: flex">
            <h6>Don't have account?</h6>
            <a style="margin-left: 5px" href="index.php">signup</a>
          </div>
        </div>
      </div>
    </div>
    <script src="js/login.js"></script>
  </body>
</html>
