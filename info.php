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
    <p> Here we have some news and some team calendar stuff. Good to know. </p>
    <style>
      div.newsitem {
        padding-left:20 ; font-size:120% ; padding-bottom:10
      }
    </style>

    <div style="margin-top:20">
      <div class="splitleft"><div class="whitebox">
        <h3>Team News</h3></br>

        <?php foreach($news['news'] as $post){ ?>
            <div class="newstitle">
              <?php echo($post->{'title'});?>
              <a href="<?php echo($post->{'url'}); ?> ">
                <p class="newslink">reddit</p>
              </a>
            </div>
            <div class="newscontent">
              <?php print(html_entity_decode($post->{'selftext_html'})); ?>
            </div>
        <?php } ?>

      </div></div>

      <div class="splitleft"><div class="whitebox" style="border-left: 1px solid #888;">
        <h3>Upcoming Events</h3></br>

        <?php foreach($news['calendar'] as $post){ ?>
            <div class="newstitle">
              <?php echo($post->{'title'});?>
              <a href="<?php echo($post->{'url'}); ?> ">
                <p class="newslink">reddit</p>
              </a>
            </div>
            <div class="newscontent">
              <?php print(html_entity_decode($post->{'selftext_html'})); ?>
            </div>
        <?php } ?>

      </div></div>
      </div></div>
    </div>
  </div>
</body>
</html>
