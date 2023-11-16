<?php
include 'user-header.php'; 
include 'connection.php';

        $res=mysqli_query($con,"select * from quiz_desc");
?>
    <div class="user-wrapper">
      <?php while($row=mysqli_fetch_array($res)){?>
        
        <div class="card">
          <div class="card-img">
            <a href="/">
              <img src="../<?php echo $row["quiz_picture"] ?>" alt="SQL Quiz" />
            </a>
          </div>
            <div class="card-desc">
            <div class="cd-top">
              <h3 class="leading-title"><a href="/"><?php echo $row['quiz_title'] ?></a></h3>
              <div class="card-minutes"><?php echo $row['quiz_mins'] ?>m</div>
            </div>
            <p><?php echo $row['quiz_text'] ?></p>
          </div>
        </div>
    <?php  } ?>
      <div class="card">
        <div class="card-img">
          <a href="/">
            <img src="../images/mysqql.jpg" alt="SQL Quiz" />
          </a>
        </div>
        <div class="card-desc">
          <div class="cd-top">
            <h3 class="leading-title"><a href="/">SQL Quiz</a></h3>
            <div class="card-minutes">20m</div>
          </div>
          <p>Challenge your Database Skills with this MySQL Quiz</p>
        </div>
      </div>

    </div>
    
  </body>
</html>