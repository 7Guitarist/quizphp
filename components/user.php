<?php
include 'user-header.php'; 
include 'connection.php';

        $res=mysqli_query($con,"select * from quiz_desc");

?>
    <div class="user-intro">
      <div class="ui-wrapper">
        <p>Welcome,</p>
        <h2><?php echo $firstname . ' ' . $lastname; ?></h2>
      </div>
    </div>
    <div class="user-wrapper">
      <?php while($row=mysqli_fetch_array($res)){?>
        <div class="card">
          <div class="card-img">
            <a href="take-quiz.php?quiz_name=<?php echo $row['quiz_name'] ?>">
              <img src="../<?php echo $row["quiz_picture"] ?>" alt="SQL Quiz" />
            </a>
          </div>
            <div class="card-desc">
            <div class="cd-top">
              <h3 class="leading-title"><a href="take-quiz.php?quiz_name=<?php echo $row['quiz_name'] ?>"><?php echo $row['quiz_title'] ?></a></h3>
              <div class="card-minutes"><?php echo $row['quiz_mins'] ?>m</div>
            </div>
            <p><?php echo $row['quiz_text'] ?></p>
          </div>
        </div>
    <?php  } ?>

    </div>
    
  </body>
</html>
