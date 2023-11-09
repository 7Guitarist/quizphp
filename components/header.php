<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/baefa0e7e0.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
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
  </body>
</html>
