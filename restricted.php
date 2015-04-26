<!DOCTYPE html>
<html>
<head>
  <title>WH Test Page</title>
  <?php include "includes/imports.php"; ?>
</head>
<body>
  <style> #restricted-link { font-weight:bold; } </style>
  <?php include "includes/header.php"; ?>
  <div id="sitebanner">
    <div class="bannerimg" style="background-image:url(images/head-randa-left.png)"> </div>
    <h1 id="bannertext"> Member-only Resources </h1>
    <div class="bannerimg" style="background-image:url(images/head-bomber-right.png)"> </div>
  </div>

  <div id="contentarea">
<?php
    if ($login->isUserLoggedIn() == false) {
?>

    <div class="stackbox">
      <p class="important"> Only members can view this page, click <a href='login.php'>here</a> to login.</p>
    </div>

<?php
    } else {
?>

    <div class="stackbox">
      <p class="important"> Some things are best kep secret. </p>
    </div>

    <div class="stackbox">
      <div class="titlebox"> Some secret stuff </div>
      <div class="contentbox"> 
        <p> link to the Google Docs: <a href="https://docs.google.com/spreadsheets/d/1SzqZvYW-npuz9vYqTB6ovU4QYf0fgXcWkhZz4bJvJZ4/edit#gid=1529951854">here</a> </p>
      </div>
    </div>
<?php
    }
?>
    </div>
  </div>
  </div>
</body>
</html>
