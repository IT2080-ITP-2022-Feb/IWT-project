<?php

$servername = "localhost";
$databaseusername = "root";
$databasepassword = "";
$databasename = "book_store";

$conn = mysqli_connect($servername, $databaseusername, $databasepassword, $databasename);

if(!$conn){
    die ("Connection Failed" .mysqli_connect_error());
}
?>