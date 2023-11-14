<?php
if (basename($_SERVER['PHP_SELF'], '.php') == 'index') {
  $page_path = '';
} else {
  $page_path = '../';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo (isset($page_path) ? $page_path : ''); ?>styles.css" />
    <script defer src="<?php echo (isset($page_path) ? $page_path : ''); ?>main.js"></script>
    <script
      src="https://kit.fontawesome.com/baefa0e7e0.js"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>">
    <div class="header">
      <div class="header-inner">
        <div class="header-left">
          <a href="../index.php" class="header-logo">
            <div class="logo">Q</div>
            <h2 class="logo-name">QuizGame</h2>
          </a>
          <div class="nav-search">
            <span class="fa-solid fa-magnifying-glass nav-search-btn"></span>
            <input
              type="text"
              placeholder="What do you want to learn today?"
              name="search"
              id="topic-search"
            />
          </div>
        </div>
        <div class="header-right">
          <a class="button-log-in" href="components/log-in.php">Log In</a>
          <a class="button-sign-up" href="components/sign-up.php">Sign Up</a>
        </div>
      </div>
    </div>
