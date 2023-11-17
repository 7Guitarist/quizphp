<?php
include 'connection.php';
$id=$_GET["id"];
$res=mysqli_query($con, "select * from quiz_desc where quiz_id=$id");
while($row=mysqli_fetch_array($res)) {
	$quiz_name = $row["quiz_name"];
	$quiz_picture =$row["quiz_picture"];
	$quiz_title =$row['quiz_title'];
	$quiz_text =$row['quiz_text'];
	$quiz_mins =$row['quiz_mins'];
}
?>
<?php  include 'admin-header.php';
?>
<div class="admin">
  <?php
    include 'admin-panel.php';
    ?>
  <div class="admin-add-quiz">
    <div class="aaq-text">
      <h2 class="aa-title">Edit Quiz</h2>
    </div>
    <form
      name="add-quiz"
      action=""
      method="POST"
      class="add-quiz-form"
      enctype="multipart/form-data"
    >
        <div class="add-quiz-container low">
          <input type="text" required id="qname" name="qname" placeholder=" " value="<?php echo htmlspecialchars($quiz_name);?>" />
          <label for="qname">New Quiz Name</label>
        </div>
        <div class="current-image">
            <p>Current Image</p>
           <img src="../<?php echo $quiz_picture; ?>" alt="Current Quiz Image">
       </div>
        <div class="add-quiz-container">
          <input
            type="file"
            id="qimage"
            name="qimage"
            accept="image/*"
            placeholder=" "
            value="<?php echo htmlspecialchars($quiz_picture);?>"
          />
          <label for="qimage">New Quiz Image</label>
        </div>
        <div class="add-quiz-container">
          <input type="text" required id="qtitle" name="qtitle" placeholder=" " value="<?php echo htmlspecialchars($quiz_title);?>" />
          <label for="qtitle">New Quiz Title</label>
        </div>
        <div class="add-quiz-container">
          <input type="text" required id="qtext" name="qtext" placeholder=" " value="<?php echo htmlspecialchars($quiz_text);?>" />
          <label for="qtext">New Quiz Text</label>
        </div>
        <div class="add-quiz-container">
          <input type="number" id="qnum" name="qnum" step="1" placeholder=" " required value="<?php echo htmlspecialchars($quiz_mins);?>" />
          <label for="qnum">New Quiz Minutes</label>
        </div>
        <div class="add-quiz-btn">
          <input type="submit" name="submit" value="Edit Quiz" class="btn-submit" />
        </div>
    </form>
  </div>
</div> 
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $quiz_name = $_POST['qname'];
    $quiz_title = $_POST['qtitle'];
    $quiz_text = $_POST['qtext'];
    $quiz_mins = $_POST['qnum'];

    // Check if a new image is uploaded
    if (!empty($_FILES['qimage']['name'])) {
        $tm = md5(time());
        $qimage = $_FILES['qimage']['name'];
        $destination = "../images/" . $tm . $qimage; // to upload
        $destination_db = "images/" . $tm . $qimage; // to db
        move_uploaded_file($_FILES['qimage']['tmp_name'], $destination);

        // Update the image path in the database only if a new image is uploaded
        mysqli_query($con, "UPDATE quiz_desc SET 
            quiz_name = '$quiz_name',
            quiz_picture = '$destination_db',
            quiz_title = '$quiz_title',
            quiz_text = '$quiz_text',
            quiz_mins = '$quiz_mins'
            WHERE quiz_id = $id") or die(mysqli_error($con));
    } else {
        // If no new image is uploaded, update other fields except for the image
        mysqli_query($con, "UPDATE quiz_desc SET 
            quiz_name = '$quiz_name',
            quiz_title = '$quiz_title',
            quiz_text = '$quiz_text',
            quiz_mins = '$quiz_mins'
            WHERE quiz_id = $id") or die(mysqli_error($con));
    }
    ?>
    <script>
        alert("Quiz updated successfully");
        window.location.href = "add-quiz.php";
    </script>
<?php
}
?>