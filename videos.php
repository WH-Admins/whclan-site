<!DOCTYPE html>
<html>
<head>
  <title>WH Videos</title>
  <?php include "imports.php"; ?>
</head>
<body>
  <style> #restricted-link { font-weight:bold; } </style>
  <?php include "header.php"; ?>
  <div class="container">
    <h2>Videos</h2>

<?php
    if ($login->isUserLoggedIn() == false) {
?>
      <p style="color: #F66;"> Only members can view this page, click <a href='login.php'>here</a> to login.</p>
<?php
    } else {
?>

<h3> March 24th, Scrim vs Implosion </h3>
<div class="thumbgroup">
<div class="videothumb">
<img src="thumbs/240315_cave.png">
<div class="thumbtext"> &lt8) vs &lti&gt - <b>Cave</b> </div>
</div>
<div class="videothumb">
<img src="thumbs/240315_asteroids.png">
<div class="thumbtext"> &lt8) vs &lti&gt - <b>Asteroids</b> </div>
</div>
<div class="videothumb">
<img src="thumbs/240315_focus.png">
<div class="thumbtext"> &lt8) vs &lti&gt - <b>Focus</b> </div>
</div>
<div class="videothumb">
<img src="thumbs/240315_grotto.png">
<div class="thumbtext"> &lt8) vs &lti&gt - <b>Grotto</b> </div>
</div>
</div>

</br>
<h3> March 24th, Placeholders </h3>
</br>

<div class="thumbgroup">
<div class="videothumb">
<img src="http://placehold.it/244x138">
<div class="thumbtext"> &lt8) vs &lti&gt </div>
</div>
<div class="videothumb">
<img src="http://placehold.it/244x138">
<div class="thumbtext"> &lt8) vs &lti&gt </div>
</div>
<div class="videothumb">
<img src="http://placehold.it/244x138">
<div class="thumbtext"> &lt8) vs &lti&gt </div>
</div>
<div class="videothumb">
<img src="http://placehold.it/244x138">
<div class="thumbtext"> &lt8) vs &lti&gt </div>
</div>
<div class="videothumb">
<img src="http://placehold.it/244x138">
<div class="thumbtext"> &lt8) vs &lti&gt </div>
</div>
<div class="videothumb">
<img src="http://placehold.it/244x138">
<div class="thumbtext"> &lt8) vs &lti&gt </div>
</div>
<div class="videothumb">
<img src="http://placehold.it/244x138">
<div class="thumbtext"> &lt8) vs &lti&gt </div>
</div>
</div>

<?php
    }
?>

  </div>
</body>
</html>
