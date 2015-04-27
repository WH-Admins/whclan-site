<!DOCTYPE html>
<html>
<head>
  <title>WH Login</title>
  <?php include "includes/imports.php"; ?>
</head>
<body>
  <style> #login-link { font-weight:bold; } </style>
  <?php include "includes/header.php"; ?>
  <div id="sitebanner">
    <div class="bannerimg" style="background-image:url(images/head-randa-left.png)"> </div>
    <h1 id="bannertext"> Login Page </h1>
    <div class="bannerimg" style="background-image:url(images/head-bomber-right.png)"> </div>
  </div>
  <div id="contentarea">
    <div class="stackbox">
      <p class="important"> Don't have an account on the site yet? Ask a clan leader for one. </p>
    </div>
    <div class="stackbox">

<?php
    if ($login->isUserLoggedIn() == true) {
?>
    <h2>Logout</h2>
    <p>
      You are currently logged in as <?php echo $_SESSION['user_name'] ?>,
      click <a href="login.php?logout">here</a> to logout.
    </p>
<?php
    } else {
?>
    <h2>Login</h2>
    <p> Enter your username and password to access restricted content: </p>
    <p style="color: #F66;">
<?php
    //Check for errors
    if (isset($login)) {
      if ($login->errors) {
        foreach ($login->errors as $error) {
          echo $error;
        }
      }
      if ($login->messages) {
        foreach ($login->messages as $message) {
          echo $message;
        }
      }
    }
?>
    </p>

    <form method="post" action="login.php" name="loginform">
        <label for="login_input_username">Username</label>
        <input id="login_input_username" class="login_input" type="text" name="user_name" required />

        <label for="login_input_password">Password</label>
        <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

        <input type="submit" name="login" value="Log in" />
    </form>

<?php
    }
?>
  </div>

  </div>
</body>
</html>
