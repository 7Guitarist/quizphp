<?php
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $res = mysqli_query($con, "SELECT * FROM user WHERE id = '$user_id'");
    
    // Check if the query returned any rows
    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_array($res);
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
                  </tr>
                </tbody>
            </table>
        </div>

<?php
    } else {
        // Display an error message if no user is found
        echo "User not found";
    }
}
?>
