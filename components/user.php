<?php
include 'user-header.php'; 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User</title>
    <link rel="stylesheet" href="../styles.css" />
  </head>
  <body class="<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>">
    <div class="user-wrapper">
      <div class="card">
        <div class="card-img">
          <a href="/">
            <img src="../images/mysqql.jpg" alt="SQL Quiz" />
          </a>
        </div>
        <div class="card-desc">
          <div class="cd-top">
            <h3 class="leading-title"><a href="/">SQL Quiz</a></h3>
            <div class="card-minutes">20m</div>
          </div>
          <p>Challenge your Database Skills with this MySQL Quiz</p>
        </div>
      </div>
    </div>
    
  </body>
</html>
