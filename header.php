<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1"><a class="nav-link" href="index.php">Home</a></span>
          <?php if(!isset($_SESSION['usersId'])) : ?>
            <span class="navbar-brand mb-0 h1"><a class="nav-link" href="signup.php">Sign Up</a></span>
            <span class="navbar-brand mb-0 h1"><a class="nav-link" href="login.php">Login</a></span>
          <?php else: ?>
            <span class="navbar-brand mb-0 h1"><a class="nav-link" href="./controllers/Users.php?q=logout">Logout</a></span>
          <?php endif; ?>
      </div>
    </nav>