<?php
include 'connection.php';

$question_text = "";
$qoptiona = "";
$qoptionb = "";
$qoptionc = "";
$qoptiond = "";
$answer = "";
$id=$_GET["id"];
$id1 = $_GET['id1'];
 $res=mysqli_query($con,"select * from quiz_question where id = $id");
 while($row=mysqli_fetch_array($res)){
    $question_text = $row["question_text"];
    $qoptiona = $row["optiona"];
    $qoptionb = $row["optionb"];
    $qoptionc = $row["optionc"];
    $qoptiond = $row["optiond"];
    $answer = $row["answer"];
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
      <h2 class="aa-title">Edit Questions</h2>
    </div>
<div class="add-quiz-items">
  <div class="aaq-text">
        <!-- <h2 class="aa-title">Add Question inside <?php //echo $quiz_name ?></h2> -->
      </div>
      <form
        name="edit-question"
        action=""
        method="POST"
        class="add-quiz-form"
      >
            <div class="add-quiz-container">
              <input type="text" required id="question_text" name="question_text" placeholder=" " value="<?php echo htmlspecialchars($question_text); ?>" />
            <label for="question_text">Question Text</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="qoptiona" name="qoptiona" placeholder=" " value="<?php echo htmlspecialchars($qoptiona); ?>" />
            <label for="qoptiona">OptionA</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="qoptionb" name="qoptionb" placeholder=" " value="<?php echo htmlspecialchars($qoptionb); ?>" />
            <label for="qoptionb">OptionB</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="qoptionc" name="qoptionc" placeholder=" " value="<?php echo htmlspecialchars($qoptionc); ?>" />
            <label for="qoptionc">OptionC</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="qoptiond" name="qoptiond" placeholder=" " value="<?php echo htmlspecialchars($qoptiond); ?>" />
            <label for="qoptiond">OptionD</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="answer" name="answer" placeholder=" " value="<?php echo htmlspecialchars($answer); ?>" />
            <label for="answer">Answer</label>
          </div>
          <div class="add-quiz-btn">
            <input type="submit" name="submit" value="Update Question" class="btn-submit" />
          </div>
    </form>
</div>
  </div>
</div>  <!-- end admin -->
<?php 
    if(isset($_POST['submit'])) {
        $question = $_POST['question_text'];
        $optiona = $_POST['qoptiona'];
        $optionb = $_POST['qoptionb'];
        $optionc = $_POST['qoptionc'];
        $optiond = $_POST['qoptiond'];
        $ans = $_POST['answer'];

        mysqli_query($con, "update quiz_question set question_text='$question',optiona='$optiona',optionb='$optionb',optionc='$optionc',optiond='$optiond',answer='$ans' where id=$id") or die(mysqli_error($con));
        ?>
        <script>
            window.location = "add-edit-questions.php?id=<?php echo $id1; ?>";
        </script>
        <?php 
    }
?>
</body>
</html>