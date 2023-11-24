<?php
include 'user-header.php'; 
include 'connection.php';
$quiz_names = '';

        // $res=mysqli_query($con,"select * from quiz_desc");
$quiz_name = isset($_GET["quiz_name"]) ? $_GET["quiz_name"] : null;

if ($quiz_name !== null) {
    $quiz_name=$_GET["quiz_name"];

 $res=mysqli_query($con,"select * from quiz_question where quiz_name = '$quiz_name'") or die(mysqli_error($con));
  $correctAnswers = array();
    while($row=mysqli_fetch_array($res)){
        $correctAnswers[] = $row['answer'];
    }
    

?>
<div class="user-intro">
      <div class="ui-wrapper">
        <h2 class="titles">"Show who you are!" with this <?php echo $quiz_name ?> Quiz</h2>
        <?php // echo count($correctAnswers) ?>
      </div>
    </div>
    <div class="quiz-wrapper">
            <form action="" method="POST">
               <?php    $res=mysqli_query($con,"select * from quiz_question where quiz_name = '$quiz_name'") or die(mysqli_error($con));?>
            <?php while($row=mysqli_fetch_array($res)){?>
            <div class="question-wrapper">
                <div class="question-top">
                    <h2  class="question-no">Question <span><?php echo $row["question_no"]?></span></h2>
                    <p class="question-text">
                    <?php echo htmlspecialchars($row["question_text"])?>
                    </p>
                </div>
                <div class="radio-group">
                    <label for="<?php echo htmlspecialchars($row["optiona"]) . $row["question_no"] ?>" class="label-wrapper">
                    <input type="radio"  name="choice<?php echo $row["question_no"]?>" value="<?php echo htmlspecialchars($row["optiona"])?>" id="<?php echo htmlspecialchars($row["optiona"]) . $row["question_no"]?>" />
                    <span class="label-text"
                        ><?php echo htmlspecialchars($row["optiona"])?></span
                    >
                    </label>
                </div>
                <div class="radio-group">
                    <label for="<?php echo htmlspecialchars($row["optionb"]) . $row["question_no"]?>" class="label-wrapper">
                    <input type="radio"  name="choice<?php echo $row["question_no"]?>" value="<?php echo htmlspecialchars($row["optionb"])?>" id="<?php echo htmlspecialchars($row["optionb"]) . $row["question_no"]?>" />
                    <span class="label-text"
                        ><?php echo htmlspecialchars($row["optionb"])?></span
                    >
                    </label>
                </div>
                <div class="radio-group">
                    <label for="<?php echo htmlspecialchars($row["optionc"]) . $row["question_no"]?>" class="label-wrapper">
                    <input type="radio"  name="choice<?php echo $row["question_no"]?>" value="<?php echo htmlspecialchars($row["optionc"])?>" id="<?php echo htmlspecialchars($row["optionc"]) . $row["question_no"]?>" />
                    <span class="label-text"
                        ><?php echo htmlspecialchars($row["optionc"])?></span
                    >
                    </label>
                </div>
                <div class="radio-group">
                    <label for="<?php echo htmlspecialchars($row["optiond"]) . $row["question_no"]?>" class="label-wrapper">
                    <input type="radio"  name="choice<?php echo $row["question_no"]?>" value="<?php echo htmlspecialchars($row["optiond"])?>" id="<?php echo htmlspecialchars($row["optiond"]) . $row["question_no"]?>" />
                    <span class="label-text"><?php echo htmlspecialchars($row["optiond"])?></span>
                    </label>
                </div>
            </div>
            <?php } ?>
            <div class="take-quiz-btn">
              <input
                type="submit"
                name="submit"
                value="Submit"
                class="btn-submit"
              />
            </div>
        </form>
    </div>
    
  </body>
</html>

<?php 

    if(isset($_POST['submit'])) {
    $score = 0;

    for($i = 0; $i < count($correctAnswers); $i++) {
        $count = $i + 1; // Adjust the question count

        if(isset($_POST["choice$count"])) { // If the user choose an answer do this
            if($correctAnswers[$i] === $_POST["choice$count"]) {
                $score++;
                // echo "Question $count: Correct<br>";
            } else {
                // echo "Question $count: Wrong<br>";
                // echo "Correct Answer: {$correctAnswers[$i]} User Selected Answer: {$_POST["choice$count"]}<br>";
            }
        } else { // Handle the case where the user didn't choose an answer
            // echo "Question $count: No answer provided<br>";
            
        }
       
    } // end of loop
    // echo "Total Score: $score<br>";
      $_SESSION["score"] = $score;
   
    $_SESSION["question_no"] = count($correctAnswers);
    $total_questions = count($correctAnswers);



    mysqli_query($con,"insert into quiz_results values(NULL,'$name','$quiz_name', '$total_questions','$score',CURDATE())") or die(mysql_error($con));

        // $result = mysqli_query($con, $query);

        // if (!$result) {
        //     die("Error: " . mysqli_error($con));
        // }


    ?>
    <script>window.location.href = "quiz-score.php"</script>
    <?php 
}


?>

<?php } ?>