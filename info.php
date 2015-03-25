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

  <div class="headbox">
    <div id="headimg" style="background-image:url(images/head-loop-left.png"> </div>
    <h2 id="headtext">Real-time feed from Reddit</h2>
    <div id="headimg" style="background-image:url(images/head-randa-right.png"> </div>
  </div>

  <div class="container">

    <div>
      <div class="split"><div class="paddedbox">
        <h3> News </h3>

        <?php foreach($news['news'] as $post){ ?>
            <div class="titlebox">
              <?php echo($post->{'title'});?>
              <a href="<?php echo($post->{'url'}); ?> ">
                <span class="newslink">reddit</span>
              </a>
            </div>
            <div class="contentbox">
              <?php print(html_entity_decode($post->{'selftext_html'})); ?>
            </div>
        <?php } ?>

      </div></div>

      <div class="split"><div class="paddedbox">
        <h3> Calendar </h3>

        <?php foreach($news['calendar'] as $post){ ?>
            <div class="titlebox">
              <?php echo($post->{'title'});?>
              <a href="<?php echo($post->{'url'}); ?> ">
                <span class="newslink">reddit</span>
              </a>
            </div>
            <div class="contentbox">
              <?php print(html_entity_decode($post->{'selftext_html'})); ?>
            </div>
        <?php } ?>

      </div></div>
    </div> <!-- end of content-box -->

  </div> <!-- end of container -->
</body>
</html>
