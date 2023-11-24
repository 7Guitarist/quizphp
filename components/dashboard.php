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
          <div class="aaq-text">
            <h2 class="aa-title">Dashboard</h2>
          </div>
      </div> 

       <div class="aaq-text">
          <h2 class="aa-title sub">Quiz Takers</h2>
        </div>
      <div class="add-quiz-items">
        <div class="quiz-list">
          <table class="table">
            <thead>
              <tr class="t-head">
                <th>ID</th>
                  <th>Username</th>
                  <th>Quiz Name</th>
                  <th>Total Question</th>
                  <th>Correct Answer</th>
                  <th>Date Taken</th>
              </tr>
            </thead>
            <tbody>
                <?php $res = mysqli_query($con,"select * from quiz_results"); //  where username == username?> 
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
      <!-- end quiz takers list -->

  </div>
</div>
</body>
</html>