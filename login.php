<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <!-- CSS Stylesheet Linked Here -->
  <link rel="stylesheet" href="loginstyles.css">

<!-- Font Icon -->
  <script src="https://kit.fontawesome.com/25f8e87069.js" crossorigin="anonymous"></script>

<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- Bootstrap JS   -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


  </head>
  <body>
    <div class="loginBackground">
      <img class="overlayimage" src="images/overlayimage.png" alt="">
    </div>
    <div class="xzs">
      <div class="row backgroundalling">
        <div class="col-lg-4">
          <h2>Login</h2>
          <form class="" action="validation.php" method="post">

            <div class="form-group">
              <label>username</label>
              <input type="text" name="user" class="form-control" value="">
            </div>
            <div class="form-group">
              <label>password</label>
              <input type="Password" name="password" class="form-control" value="">
            </div>
            <button type"submit" class="btn btn-dark">Login </button>
          </form>
        </div>
        <div class="col-lg-4">
          <h2>Sign Up</h2>
          <form class="" action="registration.php" method="post">

            <div class="form-group">
              <label>username</label>
              <input type="text" name="user" class="form-control" value="">
            </div>
            <div class="form-group">
              <label>password</label>
              <input type="Password" name="password" class="form-control" value="">
            </div>
            <button type"submit" class="btn btn-dark">Login </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
