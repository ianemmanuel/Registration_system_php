<?php
  include_once 'header.php';
  include_once './helpers/session_helper.php';
?>

<h1>Please Signup</h1>

<?php flash('register'); ?>

<form method="post" action="./controllers/users.php">
  <input type="hidden" name="type" value="register">
  <input type="text" name="usersName" placeholder="Full name">
  <input type="text" name="usersEmail" placeholder="Email...">
  <input type="text" name="usersUid" placeholder="Username...">
  <input type="password" name="usersPwd" placeholder="Password...">
  <input type="password" name="pwdRepeat" placeholder="Repeat Password">
  <button type="submit" name="submit">Signup</button>
</form>