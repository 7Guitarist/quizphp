<?php
include 'header.php'; 
include 'connection.php';
?>
    <div class="sign-up-wrapper">
      <div class="sign-up-main">
        <div class="sign-up-content">
          <div class="su-text">
            <h1>Log Into Quiz Game</h1>
          </div>
          <form class="sign-up-form" action="" method="POST">
            <div class="signup-container" >
              <input
                type="text"
                required
                id="username"
                name="username"
                placeholder=" "
                value="<?php echo isset($_POST['login']) ? htmlspecialchars($_POST['username']) : ''; ?>"
              />
              <label for="username">username</label>
              <span class="err" id="user-err"
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
                 value="<?php echo isset($_POST['login']) ? htmlspecialchars($_POST['password']) : ''; ?>"
                oninput="enableLoginButton()"
              />
              <label for="password">Password</label>
              <span class="err" id="pass-err"
                ><span class="fa-solid fa-triangle-exclamation"> </span>Does Not
                Match! Invalid Password</span
              >
            </div>
            <div class="signup-btn">
              <input
                type="submit"
                name="login"
                value="Log In"
                id="loginButton"
                class="btn-submit"
                disabled
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
               session_start();
                $_SESSION['username'] = $username;
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];

                header('Location: user.php');
                exit();
              ?>
              <?php
                // Passwords match, user is authenticated
            } else {
                // Passwords do not match, authentication failed?>
                 <script>
                let passErr = document.getElementById("pass-err");
                passErr.classList.add("show");
                 </script>
              <?php
            }
        } else {
            // User not found
            ?>
             <script>
                let userErr = document.getElementById("user-err");
                userErr.classList.add("show");
                 </script>
              <?php
        }
      }
    ?>
  </body>
</html>
