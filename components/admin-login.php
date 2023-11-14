<?php
include 'header.php'; 
include 'connection.php';
?>
    <div class="sign-up-wrapper">
      <div class="sign-up-main">
        <div class="sign-up-content">
          <div class="su-text">
            <h1>Admin Log In</h1>
          </div>
          <form class="sign-up-form" action="" method="POST">
            <div class="signup-container" >
              <input
                type="text"
                required
                id="username"
                name="username"
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
                
              />
            </div>

          </form>
        </div>
      </div>
    </div>

    <?php
   
    ?>
  </body>
</html>
