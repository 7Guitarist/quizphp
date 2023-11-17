<?php
include 'connection.php';
$id=$_GET["id"];
mysqli_query($con, "delete from quiz_desc where quiz_id=$id");

?>
<script>
	window.location="add-quiz.php";
</script>