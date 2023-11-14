<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="styles.css" />
    <script defer src="main.js"></script>
    <script
      src="https://kit.fontawesome.com/baefa0e7e0.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>">
    <div class="header">
      <div class="header-inner">
        <div class="header-left">
          <h2 class="logo-name">Admin Panel</h2>
        </div>
        <div class="header-right">
          <div class="profile-wrap">
            <div class="profile-images" onclick="toggleDropdown()">
              <p class="greet">Hello,</p>
              <div class="profile">
                <img
                  src="../images/efraim.jpg"
                  alt="Profile Picture"
                  class="profile-image"
                />
                <div class="dropdown" id="dropdown">
                  <a href="settings.php"
                    ><i class="fas fa-cogs"></i> Settings</a
                  >
                  <a href="log-in.php"
                    ><i class="fas fa-sign-out-alt"></i> Logout</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="admin">
      <div class="admin-panel">
        <div class="admin-nav">
          <a href="#"><span class="fas fa-tachometer-alt"></span> Dashboard</a>
          <a href="#"><span class="fas fa-plus"></span> Add Quiz</a>
          <a href="#"><span class="fas fa-question"></span> Add Question</a>
          <a href="#"><span class="fas fa-sign-out-alt"></span> Logout</a>
        </div>
      </div>
      <div class="admin-add-quiz">
        <form
          name="add-quiz"
          action=""
          method="POST"
          class="add-quiz-form"
          enctype="multipart/form-data"
        >
          <div class="add-quiz-container">
            <input
              type="text"
              required
              id="qname"
              name="qname"
              placeholder=" "
            />
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
            <input
              type="text"
              required
              id="qtitle"
              name="qtitle"
              placeholder=" "
            />
            <label for="qtitle">Quiz Title</label>
          </div>
          <div class="add-quiz-container">
            <input
              type="text"
              required
              id="qtext"
              name="qtext"
              placeholder=" "
            />
            <label for="qtext">Quiz Text</label>
          </div>
          <div class="add-quiz-container">
            <input type="number" id="qnum" name="qnum" step="1" required />
            <label for="qnum">Quiz Minutes</label>
          </div>
          <div class="add-quiz-btn">
            <input
              type="submit"
              name="submit"
              value="Submit"
              class="btn-submit"
            />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
