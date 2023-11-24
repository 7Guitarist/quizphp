<?php
session_start();
include 'connection.php';
$username = $_SESSION['username'];

$id=$_GET["id"];

$res = mysqli_query($con, "SELECT * FROM user WHERE id='$id'");
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


$profile_path = '';
if(empty($userProfilePicture)) {
    $profile_path = 'images/';
}

?>

<head>
  <link rel="stylesheet" href="../styles.css">
  <script defer src="../main.js"></script>
      <script
      src="https://kit.fontawesome.com/baefa0e7e0.js"
      crossorigin="anonymous"
    ></script>
        <script
      defer
      src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"
    ></script>
  <style>

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
    >
        <div class="add-quiz-container low">
          <input type="text" required id="fname" name="fname" oninput="formatName(event)" placeholder=" " value="<?php echo htmlspecialchars($firstname);?>" />
          <label for="fname">First Name</label>
        </div>
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
              <label for="lname">Last Name</label>
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

        mysqli_query($con, "UPDATE user SET 
            firstname = '$fname',
            lastname = '$lname',
            middlename = '$mname',
            course = '$course',
            yearlevel = '$year',
            subject = '$subject',
            section = '$section',
            address = '$address',
            contactnumber = '$phone'
            WHERE id = $id") or die(mysqli_error($con));


    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
      swal(
        "Success!",
        "User information updated.",
        "success"
      ).then((value) => {
        if (value) {
                 window.location.href = "search-edit-delete-user.php";
        } else {
                 window.location.href = "search-edit-delete-user.php";
        }
      });
      });
        // window.location.href = "dashboard.php";
    </script>
<?php
}
?>