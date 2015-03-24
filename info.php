<?php
require_once('classes/redditNews.php');
$news = get_news();
?>

<html>
<head>
  <?php include "imports.php"; ?>
  <title>WH News</title>
</head>
<body>
  <style> #inf-link { font-weight:bold } </style>
  <?php include "header.php"; ?>

  <div class="container">
    <h2>It's nice to know what's going on.</h2>
    <p> Here we have some news and some team calandar stuff. Good to know. </p>

    <style>
      div.newsitem {
        padding-left:20 ; font-size:120% ; padding-bottom:10
      }
    </style>

    <div style="margin-top:20">
      <div class="splitleft"><div class="whitebox">
        <p><em>Team News</em></p>

        <?php foreach($news['news'] as $post){ ?>
            <div class="newsitem">
              <?php echo($post->{'title'});?>
            </div>
            <?php print($post->{'selftext'}); ?>
            </br></br>
        <?php } ?>
      </div></div>

      <div class="splitleft"><div class="whitebox">
        <p><em>Team Calendar</em></p>

        <?php foreach($news['calendar'] as $post){ ?>
            <div class="newsitem">
              <?php echo($post->{'title'});?>
            </div>
            <?php print($post->{'selftext'}); ?>
            </br></br>
        <?php } ?>

      </div></div>
      </div></div>
    </div>
  </div>
</body>
</html>
