<?php
session_start();
include 'connection.php';
$username = $_SESSION['username'];



$res = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
$row=mysqli_fetch_array($res);
$userId = $row['id'];
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

        <!--  -->
        <div class="current-image">
            <p>Current Profile Picture</p>
           <!-- <img src="../<?php echo $userProfilePicture; ?>" alt="Current Profile Picture"> -->
           <img src="../<?php echo $profile_path ?><?php echo (!empty($userProfilePicture) ? $userProfilePicture : 'anonymous.jpg'); ?>" alt="Profile">
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
          <label for="pimage">New Profile Image</label>
        </div>
<!--  -->

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

    // Check if a new image is uploaded
    if (!empty($_FILES['pimage']['name'])) {
        $tm = md5(time());
        $pimage = $_FILES['pimage']['name'];
        $destination = "../images/" . $tm . $pimage; // to upload
        $destination_db = "images/" . $tm . $pimage; // to db
        move_uploaded_file($_FILES['pimage']['tmp_name'], $destination);
        $_SESSION['profile'] = $destination_db;

        mysqli_query($con, "UPDATE user SET 
            user_image = '$destination_db'
            WHERE id = $userId") or die(mysqli_error($con));
    } 
       
    ?>
   
    <script>
      document.addEventListener("DOMContentLoaded", function () {
      swal("Success!", "Profile updated successfully.", "success").then(
        (value) => {
          if (value) {
            window.location.href = "profiles.php";
          } else {
            window.location.href = "profiles.php";
          }
        }
      );
    });
    </script>
<?php
}
?>