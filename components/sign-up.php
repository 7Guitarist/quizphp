<?php
include 'header.php'; 
include 'connection.php';

  if(isset($_POST["submit"])) {
           $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $mname = $_POST['mname'];
          $course = $_POST['course'];
          $year = $_POST['year'];
          $subject = $_POST['subject'];
          $section = $_POST['section'];
          $address = $_POST['address'];
          $phone = $_POST['phone'];
          $username = $_POST['username'];
          $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

        $count=0;
        $res=mysqli_query($con,"select * from user where username='$_POST[username]'") or die(mysqli_error($con));

        $count=mysqli_num_rows($res);

        if($count>0) { ?>
     <script defer>
      document.addEventListener("DOMContentLoaded", function() {
            let userErr = document.getElementById("user-err");
            userErr.classList.add("show");
            <?php if (isset($_POST["submit"])): ?>
                document.getElementById('username').focus();
            <?php endif; ?>
              });
        </script>
    <?php
    } else { 
       mysqli_query($con,"insert into user values(NULL,'$fname','$lname','$mname','$course','$year','$subject','$section','$address','$phone','$username','$hashedPassword')")
      ?>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
      swal(
        "Congratulations!",
        "Your account has been successfully created.",
        "success"
      ).then((value) => {
        if (value) {
          window.location.href = "log-in.php";
        } else {
          window.location.href = "log-in.php";
        }
      });
      });
    </script>
    <?php
    } 

  } 
?>
    <div class="sign-up-wrapper">
      <div class="sign-up-main">
        <div class="sign-up-content">
          <div class="su-text">
            <h1>Sign Up</h1>
            <p>It's quick and easy.</p>
          </div>
          <form
            class="sign-up-form"
            name="signup"
            id="signup"
            action=""
            method="POST"
          >
            <div class="signup-container">
              <input
                type="text"
                required
                id="fname"
                name="fname"
                placeholder=" "
                oninput="formatName(event)"
             value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['fname']) : ''; ?>"
              />
              <label for="fname">First Name</label>
              <span class="err" id="f-err"
                ><span class="fa-solid fa-triangle-exclamation"></span>Non-alphabetic characters (excluding spaces, dots, hyphens, ñ, and Ñ) are not allowed in this field.</span
              >
            </div>
            <div class="signup-container">
              <input
                type="text"
                required
                id="lname"
                name="lname"
                placeholder=" "
                oninput="formatName(event)"
                 value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['lname']) : ''; ?>"
              />
              <label for="lname">Last Name</label>
              <span class="err" id="l-err"
                ><span class="fa-solid fa-triangle-exclamation"></span>Non-alphabetic characters (excluding spaces, dots, hyphens, ñ, and Ñ) are not allowed in this field.</span
              >
            </div>
            <div class="signup-container">
              <input
                type="text"
                required
                id="mname"
                name="mname"
                placeholder=" "
                oninput="formatName(event)"
                value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['mname']) : ''; ?>"
              />
              <label for="mname">Middle name</label>
              <span class="err" id="m-err"
                ><span class="fa-solid fa-triangle-exclamation"></span>Non-alphabetic characters (excluding spaces, dots, hyphens, ñ, and Ñ) are not allowed in this field.</span
              >
            </div>
            <div class="signup-container">
              <select id="course" required name="course">
                <option value="" disabled selected>Select a course</option>
                <option value="BSIT" <?php echo (isset($_POST['submit']) && $_POST['course'] === 'BSIT') ? 'selected' : ''; ?>>BSIT</option>
                <option value="BSCpE" <?php echo (isset($_POST['submit']) && $_POST['course'] === 'BSCpE') ? 'selected' : ''; ?>>BSCpE</option>
                <option value="BSEcE" <?php echo (isset($_POST['submit']) && $_POST['course'] === 'BSEcE') ? 'selected' : ''; ?>>BSEcE</option>
                <option value="BSIT-BA" <?php echo (isset($_POST['submit']) && $_POST['course'] === 'BSIT-BA') ? 'selected' : ''; ?>>BSIT-BA</option>
                <option value="BSEMC" <?php echo (isset($_POST['submit']) && $_POST['course'] === 'BSEMC') ? 'selected' : ''; ?>>BSEMC</option>
              </select>
            </div>
            <div class="signup-container">
              <select id="year" required name="year">
                <option value="" disabled selected>Select a year level</option>
                     <option value="1" <?php echo (isset($_POST['submit']) && $_POST['year'] === '1') ? 'selected' : ''; ?>>1st year</option>
        <option value="2" <?php echo (isset($_POST['submit']) && $_POST['year'] === '2') ? 'selected' : ''; ?>>2nd year</option>
        <option value="3" <?php echo (isset($_POST['submit']) && $_POST['year'] === '3') ? 'selected' : ''; ?>>3rd year</option>
        <option value="4" <?php echo (isset($_POST['submit']) && $_POST['year'] === '4') ? 'selected' : ''; ?>>4th year</option>
               
              </select>
            </div>
            <div class="signup-container">
              <input
                type="text"
                required
                id="subject"
                name="subject"
                placeholder=" "
                
                value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['subject']) : ''; ?>"
              />
              <label for="subject">subject</label>
            </div>
            <div class="signup-container">
              <input
                type="text"
                required
                id="section"
                name="section"
                placeholder=" "
                value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['section']) : ''; ?>"
              />
              <label for="section">section</label>
            </div>
            <div class="signup-container">
              <input
                type="text"
                required
                id="address"
                name="address"
                placeholder=" "
                value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['address']) : ''; ?>"
              />
              <label for="address">address</label>
            </div>
            <div class="signup-container">
              <input
                  type="tel"
                  id="phone"
                  name="phone"
                  pattern="[0-9\s]*"
                  
                  maxlength="13"
                  placeholder=" "
                  title="Please enter only numbers"
                  required
                  oninput="formatPhoneNumber(event)"
                  value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['phone']) : ''; ?>"
              /><label for="phone">Contact Number</label>
              <span class="err" id="phone-err"
                ><span class="fa-solid fa-triangle-exclamation"></span>Please enter a valid 11-digit phone number.</span
              >
            </div>
            <div class="signup-container user">
              <input
                type="text"
                required
                id="username"
                name="username"
                placeholder=" "
                value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['username']) : ''; ?>"
              />
              <label for="username">username</label>
              <span class="err" id="user-err"
                ><span class="fa-solid fa-triangle-exclamation"></span>That
                username already exist.</span
              >
            </div>
            <div class="signup-container pass">
              <input
                type="password"
                id="password"
                name="password"
                placeholder=" "
                value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['password']) : ''; ?>"
              />
              <label for="password">Password</label>
              <span class="err" id="pass-err"
                ><span class="fa-solid fa-triangle-exclamation"></span>Your
                password must be at least 8 characters.</span
              >
            </div>
            <div class="signup-btn">
              <input
                type="submit"
                name="submit"
                value="Submit"
                class="btn-submit"
              />
            </div>
            <p class="su-log">
              Have an account?
              <a class="su-login" href="log-in.php">Log In</a>
            </p>
          </form>
        </div>
      </div>
    </div>

    
  </body>
</html>
