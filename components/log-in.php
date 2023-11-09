<?php
include 'header.php'; 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../styles.css" />
  </head>
  <body class="<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>">
    <div class="sign-up-wrapper">
      <div class="sign-up-main">
        <div class="sign-up-content">
          <div class="su-text">
            <h1>Log Into Quiz Game</h1>
          </div>
          <form class="sign-up-form" action="" method="POST">
            <div class="signup-container">
              <input
                type="text"
                required
                id="username"
                name="username"
                placeholder=" "
              />
              <label for="username">username</label>
              <span class="err" id="pass-err"
                ><span class="fa-solid fa-triangle-exclamation"> </span>Does Not
                Match! Invalid Username or Password</span
              >
            </div>
            <div class="signup-container">
              <input
                type="password"
                id="password"
                name="password"
                placeholder=" "
              />
              <label for="password">Password</label>
            </div>
            <div class="signup-btn">
              <input
                type="submit"
                name="login"
                value="Log In"
                class="btn-submit"
              />
            </div>
            <p class="su-log">
              Don't have an account?
              <a class="su-login" href="sign-up.php">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
    <!-- php -->
    <?php
    if(isset($_POST["login"])) {


      // TODO: 
        $enteredPassword = $_POST["password"];
        $username = $_POST["username"];

        // Retrieve the hashed password from the database
        $res = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");

        if ($row = mysqli_fetch_assoc($res)) {
            $hashedPassword = $row["password"];

            // Verify the entered password against the hashed password
            if (password_verify($enteredPassword, $hashedPassword)) {
              ?>
                <script>
                  window.location.href = "user.php";
                </script>
                
              <?php
                // Passwords match, user is authenticated
            } else {
                // Passwords do not match, authentication failed?>
                 <!-- <script>
                alert("Passwords do not match, authentication failed");
                 </script> -->
              <?php
            }
        } else {
            // User not found
            ?>
             <!-- <script>
            alert("User not found");
            </script> -->
              <?php
        }
      }
    ?>
  </body>
</html>
