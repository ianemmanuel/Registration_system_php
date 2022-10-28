<?php
  include_once 'header.php';
  include_once './helpers/session_helper.php';
?>

<div class="position-absolute top-50 start-50 translate-middle">
<br>
  <h3>Signup</h3>
  <?php flash('register'); ?>
    <div class="card" style="width: 40rem;">
        <div class="card-body">
          <form method="POST" action="./controllers/Users.php">
          <input type="hidden" name="type" value="register">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usersName" placeholder="Full Name...">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usersEmail" placeholder="Email...">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usersUid" placeholder="Username...">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="usersPwd" placeholder="Password...">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Repeat Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="pwdRepeat" placeholder=" Repeat Password">
            </div>
            <button type="submit" class="btn btn-success" name="submit">SignUp</button>
          </form>
        </div>
    </div><br>
    <div class="form-sub-msg">Already have an account? Login <a href="./login.php">Here</a></div>
  </div>