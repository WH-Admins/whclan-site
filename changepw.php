<!DOCTYPE html>
<html>
<head>
  <title>WH Change Password</title>
  <?php include "includes/imports.php"; ?>
  </style>
</head>
<body>
  <style> #login-link { font-weight:bold; } </style>
  <?php include "includes/header.php"; ?>
  <div class="container">
    <h2>Change Password</h2>
<?php
      if ($login->isUserLoggedIn() == true) {
          if (isset($_POST['changepw'])) {
              if(strlen($_POST['new_password']) < 6) {
?>
                  <p style="color:#F66;"> Password must be at least 6 characters. </p>
<?php
              } else {
                  $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                  $pwhash = password_hash($_POST['new_password'],PASSWORD_DEFAULT);
                  $sql = "UPDATE users SET user_password_hash='" . $pwhash . "' WHERE user_name='" . $_SESSION['user_name'] . "'";

                  $query_result = $db_connection->query($sql);
                  if($query_result){
?>
                      <p> Password has been successfully updated </p>
<?php
                  } else {
?>
                      <p> Sorry, something went wrong.</p>
<?php
                  }

              }
          } else {
?>
            <p>
              Use the form below to change your password.
            </p>

            <form method="post" action="changepw.php" name="passwordform">
                <label for="password">New Password</label>
                <input id="password" class="login_input" type="password" name="new_password" autocomplete="off" required />
                <input type="submit" name="changepw" value="Change Password" />
            </form>

<?php
          }
      } else {
?>
        <p> You must be logged in to change your password, click <a href='login.php'>here</a> to login.
<?php
      }
?>

  </div>
</body>
</html>
