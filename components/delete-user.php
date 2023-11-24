<?php
include 'connection.php';

$id=$_GET["id"];

mysqli_query($con, "delete from user where id = $id");
?>
<head>
  <script
    defer
    src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"
  ></script>
  <link rel="stylesheet" href="../styles.css" />

</head>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      swal("Success!", "User successfully Deleted.", "success").then(
        (value) => {
          if (value) {
            window.location.href = "search-edit-delete-user.php";
          } else {
            window.location.href = "search-edit-delete-user.php";
          }
        }
      );
    });
  </script>
