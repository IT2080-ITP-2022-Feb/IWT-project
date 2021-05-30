<?php

require('./src/dbConfig.php');

?>

<?php



$sql = "delete from rate where";

if (mysqli_query($conn, $sql)){

	echo"<script>('record inserted succesfully')</script>";
	header("Location:feedback.php");
}

else{
	echo"<script>('error insered records')</script>";
}

mysqli_close($conn);

?>