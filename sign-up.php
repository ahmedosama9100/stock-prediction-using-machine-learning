<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Sign-up</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <!-- Favicons -->
  <link rel="icon" href="images/favicon.png" />
  <!-- our custom styles -->
  <link rel="stylesheet" href="styles/signing.css" />
</head>

<body class="text-center">
  <form class="form-signin" method="post">
    <img class="mb-4" src="images/favicon.png" alt="stock image" width="72" height="72" />
    <h1 class="h3 mb-4 font-weight-normal">Sign-up</h1>
    <input type="email" name="Email" class="form-control" placeholder="Email address" required autofocus />
    <input type="text" name="Counter" class="form-control middle" placeholder="counter" required />
    <input type="password" name="Password" class="form-control" placeholder="Password" required />
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="gender-options">Gender</label>
      </div>
      <select name="Gender" class="custom-select" id="gender-options">
        <option selected>Choose...</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>

    <div class="input-group mb-3 date-picker">
      <div class="input-group-prepend">
        <label class="input-group-text" for="birthday">Birthday:</label>
      </div>
      <input type="date" name="Birthday" class="form-control" id="birthday" />
    </div>

    <div class="checkbox mb-3"></div>
    <button class="btn btn-lg btn-primary btn-block" name="signup" type="submit">
      Sign-up
    </button>
    <p class="mt-5 mb-3 text-muted">&copy; Stock Prediction-2020</p>
  </form>
  <?php
  include 'php/User.php';
  if (isset($_POST['signup'])) {
    echo "rabana yso3 l mse7";
    $t = new UserServices;
    $t->signup();
  }
  ?>
  <!--javascript and jQuery for formatting bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>