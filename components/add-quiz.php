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
          <input type="number" id="qnum" name="qnum" step="1" placeholder=" " required />
          <label for="qnum">Quiz Minutes</label>
        </div>
        <div class="add-quiz-btn">
          <input type="submit" name="submit" value="Add Quiz" class="btn-submit" />
        </div>
    </form>
  </div>
</div>  <!-- end admin -->
<div class="add-quiz-item">
  <div class="quiz-list">
    <h2 class="aa-title">List of Quizzes</h2>
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
        <?php $res=mysqli_query($con,"select * from quiz_desc");
         $res = mysqli_query($con,"select * from quiz_desc"); ?>
        <?php while($row=mysqli_fetch_array($res)){?>
          <tr>
            <td><?php echo $row['quiz_id'] ?></td>
            <td><?php echo $row["quiz_name"] ?></td>
            <td><img src="../<?php echo $row["quiz_picture"] ?>" alt="<?php echo $row["quiz_name"] ?> Image" /></td>
            <td><?php echo $row["quiz_title"] ?></td>
            <td><?php echo $row["quiz_text"] ?></td>
            <td><?php echo $row["quiz_mins"] ?></td>
            <td><div class="action">
              <a href="#" class="edit">Edit</a>
              <a href="#" class="delete">Delete</a>
            </div></td>
          </tr>

        <?php }?>

      </tbody>
    </table>
  </div>
</div>
</body>
</html>

<?php 
  if(isset($_POST['submit'])) {


    $tm=md5(time());
    $qimage = $_FILES['qimage']['name'];
    $destination = "../images/".$tm.$qimage; // to upload
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