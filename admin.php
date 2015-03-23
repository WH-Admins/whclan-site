<!DOCTYPE html>
<html>
<head>
  <title>WH Admin</title>
  <?php include "imports.php"; ?>
  </style>
</head>
<body>
  <style> #login-link { font-weight:bold; } </style>
  <?php include "header.php"; ?>
  <div class="container">
    <h2>Admin</h2>

<?php
    require_once("classes/Registration.php");
    $registration = new Registration();

    if ($login->isUserLoggedIn() == true && $_SESSION['user_name'] == 'admin') {
?>
      <p>
        You are logged in as admin, click <a href="login.php?logout">here</a> to logout.
      </p>

      <h3> Get Password Hash </h3>
      Get the hash of a password for manualy changing the database.

<?php
        if (isset($_POST['hashpw'])) {
          echo("</br>" . password_hash($_POST['password'],PASSWORD_DEFAULT));
      }
?>
      <form method="post" action="admin.php" name="passwordform">
        <input id="hashpw" class="login_input" type="password" name="password" autocomplete="off" required />
        <input type="submit" name="hashpw" value="Get Hash" />
      </form>


      <h3> Add User </h3>
<?php
      if (isset($registration)) {
        if ($registration->errors) {
          foreach ($registration->errors as $error) {
            echo $error;
          }
        }
        if ($registration->messages) {
          foreach ($registration->messages as $message) {
            echo $message;
          }
        }
      }
?>
      <form method="post" action="admin.php" name="registerform">

          <!-- the user name input field uses a HTML5 pattern check -->
          <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
          <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

          <!-- the email input field uses a HTML5 email type check -->
          <label for="login_input_email">User's email</label>
          <input id="login_input_email" class="login_input" type="email" name="user_email" required/>
          <label for="login_input_password_new">Password (min. 6 characters)</label>
          <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
          <label for="login_input_password_repeat">Repeat password</label>
          <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
          <input type="submit" name="register" value="Register" />

      </form>

<?php
    } else {
?>
    <p style="color: #F66;"> Only the website administrator can access this page.</p>
<?php
    }
?>

  </div>
</body>
</html>
