<?php
session_start();
include 'components/connection.php';
$username = $_SESSION['username'];



$res = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
$row=mysqli_fetch_array($res);
$userId = $row['id'];
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$middlename = $row['middlename'];
$course = $row['course'];
$yearlevel = $row['yearlevel'];
$subject = $row['subject'];
$section = $row['section'];
$address = $row['address'];
$contactnumber = $row['contactnumber'];
$userProfilePicture = $row['user_image'];


?>

<head>
  <link rel="stylesheet" href="styles.css">
  <script defer src="main.js"></script>
      <script
      src="https://kit.fontawesome.com/baefa0e7e0.js"
      crossorigin="anonymous"
    ></script>
  <style>
    .sample .header-inner{
      opacity: 0;
      pointer-events:none;
    }

    .sample .admin {
          grid-template-columns: 1fr;
    }

   .sample  .admin-panel, .admin-add-quiz {
          padding-top: 40px;
          max-width: 1280px;
          margin: 0 auto;
          width: 100%;
          margin: 40px auto;
      }
  </style>  
</head>
  <body class="<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>">
        <div class="header">
        <div class="header-inner">
            <div class="header-left">
            <h2 class="logo-name">Admin Panel</h2>
            </div>
            <div class="header-right">
            <div class="profile-wrap">
                <div class="profile-images" onclick="toggleDropdown()">
                <div class="profile">
                    <img
                    src="../images/efraim.jpg"
                    alt="Profile Picture"
                    class="profile-image"
                    />
                    <div class="dropdown" id="dropdown">
                    <a href="settings.php"><i class="fas fa-cogs"></i> Settings</a>
                    <a href="log-in.php"
                        ><i class="fas fa-sign-out-alt"></i> Logout</a
                    >
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
<!--  -->
<div class="admin">

  <div class="admin-add-quiz">
    <div class="aaq-text">
      <h2 class="aa-title">Edit Profile</h2>
    </div>
    <form
      name="edit-profile"
      action=""
      method="POST"
      id="signup"
      class="add-quiz-form"
      enctype="multipart/form-data"
    >
        <div class="add-quiz-container low">
          <input type="text" required id="fname" name="fname" oninput="formatName(event)" placeholder=" " value="<?php echo htmlspecialchars($firstname);?>" />
          <label for="fname">New First Name</label>
        </div>
        <!--  -->
        <div class="current-image">
            <p>Current Profile Picture</p>
           <img src="../<?php echo $userProfilePicture; ?>" alt="Current Profile Picture">
       </div>

        <div class="add-quiz-container">
          <input
            type="file"
            id="pimage"
            name="pimage"
            accept="image/*"
            placeholder=" "
            value="<?php echo htmlspecialchars($userProfilePicture);?>"
          />
          <label for="pimage">New Quiz Image</label>
        </div>
<!--  -->

            <div class="add-quiz-container">
              <input
                type="text"
                required
                id="lname"
                name="lname"
                placeholder=" "
                oninput="formatName(event)"
                 value="<?php echo htmlspecialchars($lastname);?>"

              />
              <label for="lname">New Last Name</label>
              <span class="err" id="l-err"
                ><span class="fa-solid fa-triangle-exclamation"></span>Non-alphabetic characters (excluding spaces, dots, hyphens, ñ, and Ñ) are not allowed in this field.</span
              >
            </div>
            <div class="add-quiz-container">
              <input
                type="text"
                required
                id="mname"
                name="mname"
                placeholder=" "
                oninput="formatName(event)"
                value="<?php echo htmlspecialchars($middlename);?>"
              />
              <label for="mname">Middle name</label>
              <span class="err" id="m-err"
                ><span class="fa-solid fa-triangle-exclamation"></span>Non-alphabetic characters (excluding spaces, dots, hyphens, ñ, and Ñ) are not allowed in this field.</span
              >
            </div>
            <div class="add-quiz-container">
              <select id="course" required name="course">
                <option value="" disabled selected>Select a course</option>
                <option value="BSIT" <?php echo (isset($course) && $course === 'BSIT') ? 'selected' : ''; ?>>BSIT</option>
                <option value="BSCpE" <?php echo (isset($course) && $course === 'BSCpE') ? 'selected' : ''; ?>>BSCpE</option>
                <option value="BSEcE" <?php echo (isset($course) && $course === 'BSEcE') ? 'selected' : ''; ?>>BSEcE</option>
                <option value="BSIT-BA" <?php echo (isset($course) && $course === 'BSIT-BA') ? 'selected' : ''; ?>>BSIT-BA</option>
                <option value="BSEMC" <?php echo (isset($course) && $course === 'BSEMC') ? 'selected' : ''; ?>>BSEMC</option>
              </select>
            </div>
            <div class="add-quiz-container">
              <select id="year" required name="year">
                <option value="" disabled selected>Select a year level</option>
                     <option value="1" <?php echo (isset($yearlevel) && $yearlevel === '1') ? 'selected' : ''; ?>>1st year</option>
                <option value="2" <?php echo (isset($yearlevel) && $yearlevel === '2') ? 'selected' : ''; ?>>2nd year</option>
                <option value="3" <?php echo (isset($yearlevel) && $yearlevel === '3') ? 'selected' : ''; ?>>3rd year</option>
                <option value="4" <?php echo (isset($yearlevel) && $yearlevel === '4') ? 'selected' : ''; ?>>4th year</option>
             </select>

            </div>
            <div class="add-quiz-container">
              <input
                type="text"
                required
                id="subject"
                name="subject"
                placeholder=" "
                
                value="<?php echo htmlspecialchars($subject);?>"
              />
              <label for="subject">subject</label>
            </div>
            <div class="add-quiz-container">
              <input
                type="text"
                required
                id="section"
                name="section"
                placeholder=" "
                value="<?php echo htmlspecialchars($section);?>"
              />
              <label for="section">section</label>
            </div>
            <div class="add-quiz-container">
              <input
                type="text"
                required
                id="address"
                name="address"
                placeholder=" "
                value="<?php echo htmlspecialchars($address);?>"
              />
              <label for="address">address</label>
            </div>
            <div class="add-quiz-container">
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
                  value="<?php echo htmlspecialchars($contactnumber);?>"
              /><label for="phone">Contact Number</label>
              <span class="err" id="phone-err"
                ><span class="fa-solid fa-triangle-exclamation"></span>Please enter a valid 11-digit phone number.</span
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
    </form>
  </div>
</div> 
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $subject = $_POST['subject'];
    $section = $_POST['section'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Check if a new image is uploaded
    if (!empty($_FILES['pimage']['name'])) {
        $tm = md5(time());
        $pimage = $_FILES['pimage']['name'];
        $destination = "../images/" . $tm . $pimage; // to upload
        $destination_db = "images/" . $tm . $pimage; // to db
        move_uploaded_file($_FILES['pimage']['tmp_name'], $destination);

        // Update the image path in the database only if a new image is uploaded
        mysqli_query($con, "UPDATE user SET 
            firstname = '$fname',
            lastname = '$lname',
            middlename = '$mname',
            course = '$course',
            yearlevel = '$year'
            subject = '$subject'
            section = '$section'
            address = '$address'
            contactnumber = '$phone'
            user_image = '$destination_db'
            WHERE id = $userId") or die(mysqli_error($con));
    } else {
        // If no new image is uploaded, update other fields except for the image
        mysqli_query($con, "UPDATE user SET 
            firstname = '$fname',
            lastname = '$lname',
            middlename = '$mname',
            course = '$course',
            yearlevel = '$year'
            subject = '$subject'
            section = '$section'
            address = '$address'
            contactnumber = '$phone'
            user_image = '$destination_db'
            WHERE id = $userId") or die(mysqli_error($con));
    }
    ?>
    <script>
        alert("Account updated successfully");
        window.location.href = "profiles.php";
    </script>
<?php
}
?>