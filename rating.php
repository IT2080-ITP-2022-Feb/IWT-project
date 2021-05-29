<?php

require('src/dbConfig.php');

?>

<?php


$descrip = $_POST["comment"];

$sql = "insert into rate(id,Rate,comment) values ('','3','$descrip')";

if (mysqli_query($conn, $sql)){

	echo"<script>('record inserted succesfully')</script>";
	header("Location:feedback.php");
}

else{
	echo"<script>('error insered records')</script>";
}

mysqli_close($conn);

?>