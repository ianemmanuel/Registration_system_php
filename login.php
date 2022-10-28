<?php
  include_once "header.php";
  include_once './helpers/session_helper.php';
?>

  <h1 class="header">Please Login</h1>
  <?php flash('login'); ?>

  <form method="POST" action="./controllers/Users.php">
    <input type="hidden" name="type" value="login">
    <input type="text" name="name/email" placeholder="Username/Email...">
    <input type="password" name="usersPwd" placeholder="Password...">
    <button type="submit" name="submit">Log In</button>
  </form>

  <div class="form-sub-msg">Don't have an account? Sign up <a href="./signup.php">Here</a></div>

  <?php
    include_once "footer.php";
  ?>
