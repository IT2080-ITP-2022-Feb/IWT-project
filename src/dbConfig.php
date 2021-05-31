<?php

// Localhost
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "book_store";


$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
    echo '<h1 style="margin-top: 50px; color: red;">Please Turn ON your Wi-Fi</h1>';
    die("Connection failed: " . mysqli_connect_error());
}

?>
