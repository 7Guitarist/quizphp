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
    <div class="aaq-text">
      <h2 class="aa-title">Select Quiz to Add and Edit Questions</h2>
    </div>
<div class="add-quiz-items">
  <div class="quiz-list">
    <table class="table">
      <thead>
        <tr class="t-head">
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Title</th>
            <th class="text1">Text</th>
            <th>Time</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $res=mysqli_query($con,"select * from quiz_desc"); ?>
        <?php while($row=mysqli_fetch_array($res)){?>
          <tr>
            <td><?php echo $row['quiz_id'] ?></td>
            <td><?php echo $row["quiz_name"] ?></td>
            <td><img src="../<?php echo $row["quiz_picture"] ?>" alt="<?php echo $row["quiz_name"] ?> Image" /></td>
            <td><?php echo $row["quiz_title"] ?></td>
            <td><?php echo $row["quiz_text"] ?></td>
            <td><?php echo $row["quiz_mins"] ?></td>
            <td><div class="action">
              <a href="add-edit-questions.php?id=<?php echo $row['quiz_id'] ?>" class="edit">Select</a>
            </div></td>
          </tr>

        <?php }?>

      </tbody>
    </table>
  </div>
</div>
  </div>
</div>  <!-- end admin -->

</body>
</html>