<?php
include 'components/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <script defer src="main.js"></script>
    <script
      src="https://kit.fontawesome.com/baefa0e7e0.js"
      crossorigin="anonymous"
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
                    src="images/efraim.jpg"
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

<div class="admin">
  <?php
    include 'components/admin-panel.php';
    ?>
  <div class="admin-add-quiz">
    <div class="aaq-text">
      <h2 class="aa-title">Add Quiz</h2>
    </div>
    <form
      name="add-quiz"
      action=""
      method="POST"
      class="add-quiz-form"
      enctype="multipart/form-data"
    >
      <div class="add-quiz-container">
        <input type="text" required id="qname" name="qname" placeholder=" " />
        <label for="qname">Quiz Name</label>
      </div>
      <div class="add-quiz-container">
        <input
          type="file"
          id="qimage"
          name="qimage"
          accept="image/*"
          placeholder=" "
        />
        <label for="qimage">Quiz Image</label>
      </div>
      <div class="add-quiz-container">
        <input type="text" required id="qtitle" name="qtitle" placeholder=" " />
        <label for="qtitle">Quiz Title</label>
      </div>
      <div class="add-quiz-container">
        <input type="text" required id="qtext" name="qtext" placeholder=" " />
        <label for="qtext">Quiz Text</label>
      </div>
      <div class="add-quiz-container">
        <input type="number" id="qnum" name="qnum" step="1" required />
        <label for="qnum">Quiz Minutes</label>
      </div>
      <div class="add-quiz-btn">
        <input type="submit" name="submit" value="Add Quiz" class="btn-submit" />
      </div>
    </form>
  </div>
</div>
</body>
</html>

<?php 
  if(isset($_POST['submit'])) {


    $tm=md5(time());
    $qimage = $_FILES['qimage']['name'];
    $destination = "./images/".$tm.$qimage; // to upload
    $destination_db = "images/".$tm.$qimage; // to db
    move_uploaded_file($_FILES['qimage']['tmp_name'],$destination);

    mysqli_query($con,"insert into quiz_desc values(NULL,'$_POST[qname]','$destination_db', '$_POST[qtitle]','$_POST[qtext]','$_POST[qnum]')") or die(mysql_error($con));
  
    // echo "<pre>";
    // print_r($_FILES['qimage']);
    // echo "</pre>";
    // $img_name = $_FILES['qimage']['name'];
    // $img_size = $_FILES['qimage']['size'];
    // $tmp_name = $_FILES['qimage']['tmp_name'];
    // $error = $_FILES['qimage']['error'];

    // if($error === 0){
    //   $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    //   echo($img_ex);
    // } else {
    //   $em = "Unknown error occured!";
    //   header("Location: index.php?error=$em");
    // }
  }
?>