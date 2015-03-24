<?php
  if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    require_once("libraries/password_compatibility_library.php");
  }
  require_once("config/db.php");
  require_once("classes/Login.php");
  $login = new Login();
?>

<div class="nav sitehead" style="position:absolute; left:0; right:0; top:0; min-height: 50px; width: 100%; display: table-cell">
  <div class="container">
    <span class="pagename current">
      Website of the <b>Wreaking Havoc</b> Clan
    </span>
    </br>

    <span style="margin-top: 7px; display:inline-block"> <span/>

    <span class="logo">&lt;8)</span>
    <span id="org-link" style="display:inline">
      <a href="default.php">Organisation</a></span>

    <span class="logo">&lt;8)</span>
    <span id="inf-link" style="display:inline">
      <a href="info.php">Information</a></span>

    <span class="logo">&lt;8)</span>
    <span id="comms-link" style="display:inline">
      <a href="comms.php">Communication</a></span>
<?php
    if (isset($_SESSION['user_name'])) {
?>
      <span class="logo">&lt;8)</span>
      <span id="restricted-link" style="display:inline">
        <a href="restricted.php">Restricted</a></span>

      <span class="logo">&lt;8)</span>
      <span id="videos-link" style="display:inline">
        <a href="videos.php">Videos</a></span>

      <span class="logo" style="padding-right:20px;"> | </span>

      <span id="logout-link" style="display:inline">
        <a href="login.php">Logout</a></span>

      <span id="changepw-link" style="display:inline">
        <a href="changepw.php">Change Password</a></span>

<?php
      if($_SESSION['user_name'] == 'admin'){
?>
        <span id="admin-link" style="display:inline">
          <a href="admin.php">Admin</a></span>
<?php
      }
    } else {
?>
      <span class="logo" style="padding-right:20px;"> | </span>
      <span id="login-link" style="display:inline">
        <a href="login.php">Login</a></span>
<?php
  }
?>
  </div>
</div>
