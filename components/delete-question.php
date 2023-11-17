<?php
include 'connection.php';

$id=$_GET["id"];
$id1 = $_GET['id1'];

mysqli_query($con, "delete from quiz_question where id = $id");
?>
    <script>
           window.location = "add-edit-questions.php?id=<?php echo $id1; ?>";
    </script>