<!DOCTYPE html>
<html>
<head>
  <title>WH Test Page</title>
  <?php include "imports.php"; ?>
</head>
<body>
  <style> #restricted-link { font-weight:bold; } </style>
  <?php include "header.php"; ?>
  <div class="container">
    <h2>Test Page</h2>

<?php
    if ($login->isUserLoggedIn() == false) {
?>
      <p style="color: #F66;"> Only members can view this page, click <a href='login.php'>here</a> to login.</p>
<?php
    } else {
?>

    <p> This is a test restricted page. </p>
    <p> Only logged in members should be able to view this. </p>
    <p> Gj Breeze, you're in </p>


<?php
    }
?>

  </div>
</body>
</html>
