<?php
include 'connection.php';
?>
<?php  include 'admin-header.php';
?>
<div class="admin">
  <?php
    include 'admin-panel.php';
    ?>
    <div class="admin-add-quiz">
      <div class="dash-main">
        <div class="dash-left">
          <div class="aaq-text">
            <h2 class="aa-title">Search / Edit / Delete User</h2>
          </div>
         
        </div>
        <div class="dash-right">
          <div class="nav-search">
              <form action="" method="POST">
                <button type="submit" name="search" class="h-btn">Submit
                  <span class="fa-solid fa-magnifying-glass nav-search-btn"></span>
                </button>
                <input
                  type="text"
                  placeholder="Search User..."
                  name="user_id"
                  id="topic-search"
                />
              </form>
            </div>
        </div>
      </div> 
      <!-- end dash main -->
    <?php
    if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $res = mysqli_query($con, "SELECT * FROM user WHERE id = '$user_id'");
     $row = mysqli_fetch_array($res);
    // Check if the query returned any rows
    if ($row) {
        $userId = $row['id'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $mname = $row['middlename'];
        $course = $row['course'];
        $userYearLevel = $row['yearlevel'];
        $userSubject = $row['subject'];
        $userSection = $row['section'];
        $userAddress = $row['address'];
        $userContactNumber = $row['contactnumber'];
?>

        <div class="quiz-list">
            <table class="table">
                <thead>
                      <tr class="t-head">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Middle Name</th>
                        <th>Course</th>
                        <th>Year Level</th>
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><?php echo $userId ?></td>
                      <td><?php echo $fname ?></td>
                      <td><?php echo $lname ?></td>
                      <td><?php echo $mname ?></td>
                      <td><?php echo $course ?></td>
                      <td><?php echo $userYearLevel ?></td>
                      <td><?php echo $userSubject ?></td>
                      <td><?php echo $userSection ?></td>
                      <td><?php echo $userAddress ?></td>
                      <td><?php echo $userContactNumber ?></td>
                      <td>
                        <div class="action">
                          <a href="edit-user.php?id=<?php echo $userId ?>" class="edit">Edit</a>
                          <a href="delete-user.php?id=<?php echo $userId ?>" class="delete">Delete</a>
                        </div>
                      </td>
                  </tr>
                </tbody>
            </table>
        </div>

<?php
    } else {
        ?>
        <h2 class="aa-title q-res">No User Found</h2>
        <?php
    }
}
?>
      <!-- end search -->
       

  </div>
</div>
</body>
</html>