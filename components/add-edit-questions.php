<?php
include 'connection.php';
$quiz_name = '';


//
$id = isset($_GET["id"]) ? $_GET["id"] : null;

if ($id !== null) {
    // Rest of your code that uses $id goes here
    // ...
    $id=$_GET["id"];

 $res=mysqli_query($con,"select * from quiz_desc where quiz_id = $id");
 while($row=mysqli_fetch_array($res)){
    $quiz_name = $row["quiz_name"];
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
        <h2 class="aa-title">Add Question inside <?php echo $quiz_name ?></h2>
      </div>
      <form
        name="add-question"
        action=""
        method="POST"
        class="add-quiz-form"
      >
            <div class="add-quiz-container">
              <input type="text" required id="question_text" name="question_text" placeholder=" " />
            <label for="question_text">Question Text</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="qoptiona" name="qoptiona" placeholder=" " />
            <label for="qoptiona">OptionA</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="qoptionb" name="qoptionb" placeholder=" " />
            <label for="qoptionb">OptionB</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="qoptionc" name="qoptionc" placeholder=" " />
            <label for="qoptionc">OptionC</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="qoptiond" name="qoptiond" placeholder=" " />
            <label for="qoptiond">OptionD</label>
          </div>
          <div class="add-quiz-container">
            <input type="text" required id="answer" name="answer" placeholder=" " />
            <label for="answer">Answer</label>
          </div>
          <div class="add-quiz-btn">
            <input type="submit" name="submit" value="Add Question" class="btn-submit" />
          </div>
    </form>
  </div>
</div>  <!-- end admin -->
<div class="add-quiz-item">
  <div class="quiz-list">
    <h2 class="aa-title">List of Questions</h2>
    <table class="table">
      <thead>
        <tr class="t-head">
            <th>ID</th>
            <th>Question Number</th>
            <th>Question Text</th>
            <th>OptionA</th>
            <th>OptionB</th>
            <th>OptionC</th>
            <th>OptionD</th>
            <th>Answer</th>
            <th>Quiz Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php $res=mysqli_query($con,"select * from quiz_question where quiz_name='$quiz_name' order by question_no asc");?>
        <?php while($row=mysqli_fetch_array($res)){?>
          <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['question_no']); ?></td>
            <td><?php echo htmlspecialchars($row["question_text"]); ?></td>
            <td><?php echo htmlspecialchars($row["optiona"]); ?></td>
            <td><?php echo htmlspecialchars($row["optionb"]); ?></td>
            <td><?php echo htmlspecialchars($row["optionc"]); ?></td>
            <td><?php echo htmlspecialchars($row["optiond"]); ?></td>
            <td><?php echo htmlspecialchars($row["answer"]); ?></td>
            <td><?php echo htmlspecialchars($row["quiz_name"]); ?></td>
            <td><div class="action">
              <a href="edit-question.php?id=<?php echo $row['id'] ?>&id1=<?php echo $id;?>" class="edit">Edit</a>
            </div></td>
            <td><div class="action">
              <a href="delete-question.php?id=<?php echo $row['id'] ?>&id1=<?php echo $id;?>" class="delete">Delete</a>
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
    $question_text = $_POST['question_text'];
    $qoptiona = $_POST['qoptiona'];
    $qoptionb = $_POST['qoptionb'];
    $qoptionc = $_POST['qoptionc'];
    $qoptiond = $_POST['qoptiond'];
    $answer = $_POST['answer'];
    
    $loop = 0;
    $count = 0;
    $res=mysqli_query($con,"select * from quiz_question where quiz_name='$quiz_name' order by id asc") or die(mysqli_error($con));
    $count = mysqli_num_rows($res);
    
    if($count == 0){

    } else {
        // handle when the id of the question is deleted from example 1 2 3,  1 3 4 5 prevent this from happening
        while($row=mysqli_fetch_array($res)) {
            $loop += 1;
            mysqli_query($con, "update quiz_question set question_no='$loop' where id = $row[id]");
        }
    }

    $loop += 1;
    mysqli_query($con, "insert into quiz_question values(NULL, '$loop','$question_text', '$qoptiona','$qoptionb','$qoptionc','$qoptiond','$answer','$quiz_name')") or die(mysqli_error($con));

    ?>
    <script>
      alert("successfully added questions");
      window.location.href =  window.location.href
    </script>
    <?php

  }
}
?>