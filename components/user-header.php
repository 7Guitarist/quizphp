<?php
session_start();
include_once 'connection.php';

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $name = $firstname . " " . $lastname;
    $profile_image = $_SESSION['profile'];

} else {
    header('Location: ../index.php');
    exit();
}

if($profile_image) {
  $path = '';
} else {
  $path = 'images/';
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
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
                  src="../<?php echo $path ?><?php echo ($profile_image) ? $profile_image : 'anonymous.jpg'; ?>"
                  alt="Profile Picture"
                  class="profile-image"
              />
                <div class="dropdown" id="dropdown">
                  <a href="profiles.php"
                    ><i class="fas fa-cogs"></i> Edit Profile</a
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

