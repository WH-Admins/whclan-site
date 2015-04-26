<?php
  if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    require_once("libraries/password_compatibility_library.php");
  }
  require_once("config/db.php");
  require_once("classes/Login.php");
  $login = new Login();
?>

<div id="nav"> <div id="navcontent">
  <span id="navtitle"> Website of the <b>Wreaking Havoc</b> Clan </span>
  <span id="navlinks">
    <span class="logo">&lt;8)</span>
    <span id="org-link"> 
      <a href="default.php">Organisation</a></span>

    <span class="logo">&lt;8)</span>
    <span id="inf-link">
      <a href="info.php">Information</a></span>

    <span class="logo">&lt;8)</span>
    <span id="comms-link"> 
      <a href="comms.php">Communication</a></span>

    <span class="logo">&lt;8)</span>
    <span id="videos-link">
      <a href="videos.php">Videos</a></span>
<?php
    if (isset($_SESSION['user_name'])) {
?>
    <span class="logo">&lt;8)</span>
    <span id="restricted-link">
      <a href="restricted.php">Restricted</a></span>

    <span class="logo" style="padding-right:20px;"> | </span>

    <span id="logout-link">
      <a href="login.php">Logout</a></span>

    <span id="changepw-link">
      <a href="changepw.php">Change Password</a></span>

<?php
      if($_SESSION['user_name'] == 'admin'){
?>
    <span id="admin-link">
      <a href="admin.php">Admin</a></span>
<?php
      }
    } else {
?>
    <span class="logo" style="padding-right:20px;"> | </span>
    <span id="login-link">
      <a href="login.php">Login</a></span>
<?php
  }
?>
</div> </div>
