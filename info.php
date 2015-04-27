<?php
require_once('classes/redditNews.php');
$news = get_news();
?>
<?php include "includes/doctype.php"?>
<head>
  <?php include "includes/imports.php"; ?>
  <title>WH Info</title>
  <style type="text/css"> #info-link { font-weight:bold } </style>
</head>
<body>
  <?php include "includes/header.php"; ?>
  <div id="sitebanner">
    <div class="bannerimg" style="background-image:url(images/head-bomber-left.png)"> </div>
    <h1 id="bannertext"> Up-to-date Information </h1>
    <div class="bannerimg" style="background-image:url(images/head-explodet-right.png)"> </div>
  </div>

  <div id="contentarea">

    <div class="stackbox">
      <p class="important"> For the moment, you'll just find a feed from reddit below. </p>
    </div>

    <div class="stackbox nohead">
      <div class="split"> <div class="sidebox">
        <h3> News </h3>
        <?php foreach($news['news'] as $post){ ?>
            <div class="titlebox">
              <?php echo($post->{'title'});?>
              <a href="<?php echo($post->{'url'}); ?> ">
                <span class="boxsubtitle">reddit</span>
              </a>
            </div>
            <div class="contentbox">
              <?php print(html_entity_decode($post->{'selftext_html'})); ?>
            </div>
        <?php } ?>
      </div></div>

      <div class="split"><div class="sidebox">
        <h3> Calendar </h3>
        <?php foreach($news['calendar'] as $post){ ?>
          <div class="titlebox">
            <?php echo($post->{'title'});?>
            <a href="<?php echo($post->{'url'}); ?> ">
              <span class="boxsubtitle">reddit</span>
            </a>
          </div>
          <div class="contentbox">
            <?php print(html_entity_decode($post->{'selftext_html'})); ?>
          </div>
        <?php } ?>
      </div></div>
    </div> <!-- end of big stackbox -->

  </div> <!-- end of contentarea -->
</body>
</html>
