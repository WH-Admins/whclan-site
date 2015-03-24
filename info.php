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
    <div class="head-box">
      <h2>It's nice to know what's going on.</h2>
      <p> Here we have some news and some team calendar stuff. Good to know. </p>
    </div>

    <div class="content-box">
      <div class="split"><div class="whitebox">

        <?php foreach($news['news'] as $post){ ?>
            <div class="newstitle">
              <?php echo($post->{'title'});?>
              <a href="<?php echo($post->{'url'}); ?> ">
                <span class="newslink">reddit</span>
              </a>
            </div>
            <div class="newscontent">
              <?php print(html_entity_decode($post->{'selftext_html'})); ?>
            </div>
        <?php } ?>

      </div></div>

      <div class="split"><div class="whitebox">

        <?php foreach($news['calendar'] as $post){ ?>
            <div class="newstitle">
              <?php echo($post->{'title'});?>
              <a href="<?php echo($post->{'url'}); ?> ">
                <span class="newslink">reddit</span>
              </a>
            </div>
            <div class="newscontent">
              <?php print(html_entity_decode($post->{'selftext_html'})); ?>
            </div>
        <?php } ?>

      </div></div>
    </div> <!-- end of content-box -->

  </div> <!-- end of container -->
</body>
</html>
