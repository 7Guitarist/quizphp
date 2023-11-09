        // $username = $_POST['username'];
      // $enteredPassword = $_POST['password'];
      // $count = 0;

      // $res=mysqli_query($con,"select * from user where username='$username'  AND password='$password'");
      // $res=mysqli_query($con,"select * from user where username='$_POST[username]'  AND password='$_POST[password]'");
  
  
  
  
  $count=mysqli_num_rows($res);

      if($count == 0 ) {
        ?>
    <script>
      document.getElementById("pass-err").classList.add("show");
    </script>
    <?php
      } else {
        ?>
    <script>
      window.location.href = "user.php";
      alert("hello");
    </script>
    <?php
      }
    }