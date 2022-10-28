<?php
  include_once "header.php";
  include_once './helpers/session_helper.php';
?>

  <div class="position-absolute top-50 start-50 translate-middle">
  <h2 class="header">Login</h2>
  <?php flash('login'); ?>
    <div class="card" style="width: 40rem;">
        <div class="card-body">
          <form method="POST" action="./controllers/Users.php">
            <input type="hidden" name="type" value="login">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username/Email</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name/email" placeholder="Username/Email...">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="usersPwd" placeholder="Password...">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Login</button>
          </form>
        </div>
    </div><br>
    <div class="form-sub-msg">Don't have an account? Sign up <a href="./signup.php">Here</a></div>
  </div>



  <?php
    include_once "footer.php";
  ?>

