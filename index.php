<?php include 'partials/signing-header.php'; ?>
<form class="form-signin" method="post">
  <img class="mb-4" src="images/favicon.png" alt="stock image" width="72" height="72" />
  <h1 class="h3 mb-4 font-weight-normal">Sign-in</h1>
  <input type="email" name="emaili" class="form-control" placeholder="Email address" required autofocus />
  <input type="password" name="passwordi" class="form-control" placeholder="Password" required />
  <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">
    Sign in
  </button>
  <p class="mt-5 mb-3 text-muted">&copy; Stock Prediction-2020</p>
</form>
<?php
include 'php/User.php';
session_start();
echo "rabana rabana";
if (isset($_POST['login'])) {
  echo "gh 3lshana rabana bsm yso3 l mase7";
  $o = new UserServices;
  $o->signin();
}
?>
<?php include 'partials/signing-footer.php'; ?>