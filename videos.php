<!DOCTYPE html>
<html>
<head>
  <title>WH Videos</title>
  <?php include "imports.php"; ?>
</head>
<body>
  <style> #videos-link { font-weight:bold; } </style>
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
<div class="videothumb"><a href="https://youtu.be/Jt15OAAyywE">
<img src="thumbs/240315_cave.png"></a>
<div class="thumbtext"> &lt8) vs &lti&gt - <b>Cave</b> </div>
</div>
<div class="videothumb"><a href="https://youtu.be/zggwVl-8qOQ">
<img src="thumbs/240315_asteroids.png"></a>
<div class="thumbtext"> &lt8) vs &lti&gt - <b>Asteroids</b> </div>
</div>
<div class="videothumb"><a href="https://youtu.be/pvfJCZk150w">
<img src="thumbs/240315_focus.png"></a>
<div class="thumbtext"> &lt8) vs &lti&gt - <b>Focus</b> </div>
</div>
<div class="videothumb"><a href="https://youtu.be/1D0fF4BX8-A">
<img src="thumbs/240315_grotto.png"></a>
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