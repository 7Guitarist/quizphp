<?php
include 'user-header.php'; 
include 'connection.php';

$score = $_SESSION["score"] ;
$question_no = $_SESSION["question_no"];
$score_in_percentage = ($score / $question_no) * 100;
?>

    <div class="quiz-wrapper">
            <div class="quiz-container">
   
              <h2 class="text-main colored"><?php echo $score_in_percentage?>%</h2>
              <h2>You've score <?php echo $score . "/" . $question_no ?>.</h2>
              <?php if($score < 15) { ?>
                <p>You have not passed the test this time</p>
                <p>Remember that you can return to the module for reference at any time.</p>
              <?php } else { ?>
              <p>Congratulations, you have passed the test!</p>
               <?php } ?>
            </div>
    </div>
    
  </body>
</html>
