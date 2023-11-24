<?php
include 'user-header.php';
$res = mysqli_query($con,"select * from user where username = '$username'"); // where username == $username
$row=mysqli_fetch_array($res);
$userId = $row['id'];
$userCourse = $row['course'];
$userYearLevel = $row['yearlevel'];
$userSubject = $row['subject'];
$userSection = $row['section'];
$userAddress = $row['address'];
$userContactNumber = $row['contactnumber'];
$userProfilePicture = $row['user_image'];

$profile_path = '';
if(empty($userProfilePicture)) {
    $profile_path = 'images/';
}

?>

<div class="profile-wrapper">
    <div class="profile-container">
        <div class="profile-left">
            <div class="profile-img">
                <img src="../<?php echo $profile_path ?><?php echo (!empty($userProfilePicture) ? $userProfilePicture : 'anonymous.jpg'); ?>" alt="Profile">
            </div>
        </div>
        <div class="profile-right">
            <div class="u-name">
                <p class="pname"><?php echo $firstname . " " . $lastname ?></p>
                <div class="site-btn-container">
                    <a href="edit-profile.php?id=<?php echo $userId ?>" class="site-btn">Edit Profile</a>
                    <a href="user.php" class="site-btn">Take Quiz</a>
                </div>
            </div>
            <div class="profile-info">
                <div class="course"><?php echo $userCourse ?> - <?php echo $userSection ?></div>
                <div class="year-level"><?php echo $userYearLevel ?>rd year</div>
                <div class="subject"><?php echo $userSubject ?></div>
            </div>
            <div class="contact-info">
                <p class="address"><?php echo $userAddress ?></p>
                <p class="contact-number"><?php echo $userContactNumber ?></p>
                
            </div>
        </div>

    </div>
    <div class="profile-results">
         <table class="table">
      <thead>
        <tr class="t-head">
            <th>ID</th>
            <th>Name</th>
            <th>Quiz Name</th>
            <th>Total Question</th>
            <th>Correct Answer</th>
            <th>Date Taken</th>
        </tr>
      </thead>
      <tbody>
        <?php $res = mysqli_query($con,"select * from quiz_results where username='$name'"); ?> 
        <?php while($row=mysqli_fetch_array($res)){?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["quiz_name"] ?></td>
            <td><?php echo $row["total_question"] ?></td>
            <td><?php echo $row["correct_answer"] ?></td>
            <td><?php echo $row["quiz_date"] ?></td>
          </tr>

        <?php }?>

      </tbody>
    </table>
    </div>
</div>

</body>
</html>