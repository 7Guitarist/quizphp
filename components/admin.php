<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <script
      src="https://kit.fontawesome.com/baefa0e7e0.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../styles.css" />
    <script defer src="../main.js"></script>
  </head>
  <body>
    <div class="profile">
      <img
        src="path_to_your_profile_image.jpg"
        alt="Profile Picture"
        class="profile-image"
        onclick="toggleDropdown()"
      />
      <div class="dropdown" id="dropdown">
        <a href="settings.php"><i class="fas fa-cogs"></i> Settings</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
    </div>
    <div class="admin-panel-wrapper">
      <div class="ap-content">
        <ul class="menu">
          <li>
            <span class="fas fa-user"></span>
            <a href="profile.php">Profile</a>
          </li>
          <li>
            <span class="fas fa-list"></span>
            <a href="quizzes.php">View Quizzes</a>
          </li>
          <li>
            <span class="fas fa-edit"></span>
            <a href="edit.php">Edit Profile</a>
          </li>
          <li>
            <span class="fas fa-sign-out-alt"></span>
            <a href="logout.php">Logout</a>
          </li>
        </ul>

        <!-- <div class="ap-item">
          <span class="fa-solid fa-pen-to-square"></span>
          <p>Add/Edit Quiz</p>
        </div>
        <div class="ap-item">
          <span class="fa-solid fa-trophy"></span>
          <p>All Quiz Results</p>
        </div>
        <div class="ap-item">
          <span class="fa-solid fa-right-from-bracket"></span>
          <p>Log Out</p>
        </div> -->
      </div>
    </div>
  </body>
</html>
