<!DOCTYPE html>
<html>
<head>
  <title>WH Test Page</title>
  <?php include "imports.php"; ?>
</head>
<body>
  <style> #restricted-link { font-weight:bold; } </style>
  <?php include "header.php"; ?>
    <div class="headbox">
      <div class="headimg" style="background-image:url(images/head-whale-left.png)"> </div>
      <h2 class="headtext"> Restricted member-only resources. </h2>
      <div class="headimg" style="background-image:url(images/head-whale-right.png)"> </div>
    </div>
  <div class="container headmargin">
    <div class="paddedbox"> 
<?php
    if ($login->isUserLoggedIn() == false) {
?>

      <p style="color: #F66;"> Only members can view this page, click <a href='login.php'>here</a> to login.</p>

<?php
    } else {
?>
    <p class="important"> Some stuff is best kept secret. </p>
    <div class="titlebox headless"> Some secret stuff </div>
    <div class="contentbox"> 
      <p> link to the Google Docs: <a href="https://docs.google.com/spreadsheets/d/1SzqZvYW-npuz9vYqTB6ovU4QYf0fgXcWkhZz4bJvJZ4/edit#gid=1529951854">here</a> </p>
    </div>
<?php
    }
?>

    </div>
  </div>
  </div>
</body>
</html>
