<?php
include 'header.php'; 
include 'connection.php';

if(isset($_POST['login'])) :

  $count = 0;
  $user = mysqli_real_escape_string($con,$_POST['username']);
  $pass =  mysqli_real_escape_string($con,$_POST['password']);

  $res = mysqli_query($con, "select * from admin where username='$user' && password='$pass'");
  $count = mysqli_num_rows($res);

  if ($count == 0) : ?>
  <script defer>
    alert("invalid");
  </script>
  <?php else: ?>
    <script defer>
      window.location.href = "dashboard.php";
    </script>
  <?php endif; ?>
<?php endif; ?>
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
                name="username"  placeholder=" "
              />
              <label for="username">username</label>

            </div>
            <div class="signup-container">
              <input
                type="password"
                id="password"
                name="password"
                placeholder=" "
                required
              />
              <label for="password">Password</label>

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
  </body>
</html>
