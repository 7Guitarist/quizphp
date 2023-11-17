<?php
session_start();
include 'connection.php';

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
} else {
    header('Location: ../index.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles.css" />
    <script defer src="../main.js"></script>
    <script
      src="https://kit.fontawesome.com/baefa0e7e0.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>">
 
    <div class="header">
      <div class="header-inner">
        <div class="header-left">
          <h2 class="logo-name">Mind Bending Quizzes</h2>
        </div>
        <div class="header-right">
          <div class="profile-wrap">
            <div class="profile-images" onclick="toggleDropdown()">
              <p class="greet">Hello, <?php echo $firstname; ?>!</p>
              <div class="profile">
                <img
                  src="../images/efraim.jpg"
                  alt="Profile Picture"
                  class="profile-image"
                />
                <div class="dropdown" id="dropdown">
                  <a href="settings.php"
                    ><i class="fas fa-cogs"></i> Settings</a
                  >
                  <a href="log-in.php"
                    ><i class="fas fa-sign-out-alt"></i> Logout</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="user-intro">
      <div class="ui-wrapper">
        <p>Welcome,</p>
        <h2><?php echo $firstname . ' ' . $lastname; ?></h2>
      </div>
    </div>
