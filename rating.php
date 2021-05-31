<?php

require('src/dbConfig.php');

?>

<?php


$rating = $_POST["rating"];
$comment = $_POST["comment"];

$sql = "insert into rate(id,Rate,comment) values ('','$rating','$comment')";

if (mysqli_query($conn, $sql)){

	echo"<script>('record inserted succesfully')</script>";
	header("Location:feedback.php");
}

else{
	echo"<script>('error insered records')</script>";
}

mysqli_close($conn);

?>