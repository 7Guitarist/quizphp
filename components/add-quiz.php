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
        <input type="number" id="qnum" name="qnum" step="1" required />
        <label for="qnum">Quiz Minutes</label>
      </div>
      <div class="add-quiz-btn">
        <input type="submit" name="submit" value="Submit" class="btn-submit" />
      </div>
    </form>
  </div>
</div>
</body>
</html>