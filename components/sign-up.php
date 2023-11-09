<?php
include 'header.php'; 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="../styles.css" />
    <script defer src="../main.js"></script>
  </head>
  <body class="<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>">
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
              />
              <label for="fname">First Name</label>
            </div>
            <div class="signup-container">
              <input
                type="text"
                required
                id="lname"
                name="lname"
                placeholder=" "
              />
              <label for="lname">Last Name</label>
            </div>
            <div class="signup-container">
              <input
                type="text"
                required
                id="mname"
                name="mname"
                placeholder=" "
              />
              <label for="mname">Middle name</label>
            </div>
            <div class="signup-container">
              <select id="course" required name="course">
                <option value="" disabled selected>Select a course</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCpE">BSCpE</option>
                <option value="BSEcE">BSEcE</option>
                <option value="BSIT-BA">BSIT-BA</option>
                <option value="BSEMC">BSEMC</option>
              </select>
            </div>
            <div class="signup-container">
              <select id="year" required name="year">
                <option value="" disabled selected>Select a year level</option>
                <option value="1">1st year</option>
                <option value="2">2nd year</option>
                <option value="3">3rd year</option>
                <option value="4">4th year</option>
              </select>
            </div>
            <div class="signup-container">
              <input
                type="text"
                required
                id="subject"
                name="subject"
                placeholder=" "
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
              />
              <label for="address">address</label>
            </div>
            <div class="signup-container">
              <input
                  type="tel"
                  id="phone"
                  name="phone"
                  pattern="[0-9\s]*"
                  title="Please enter only numbers"
                  maxlength="13"
                  placeholder=" "
                  oninput="formatPhoneNumber(event)"
              /><label for="phone">Contact Number</label>
            </div>
            <div class="signup-container user">
              <input
                type="text"
                required
                id="username"
                name="username"
                placeholder=" "
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

    <?php
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
    <script>
      sweetAlert(
        "Oops",
        "Username already exists. Please choose a different username.",
        "error"
      );
    </script>
    <?php
    } else { 
       mysqli_query($con,"insert into user values(NULL,'$fname','$lname','$mname','$course','$year','$subject','$section','$address','$phone','$username','$hashedPassword')")
      ?>
    <script>
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
    </script>
    <?php
    } 

  } 
?>
  </body>
</html>
