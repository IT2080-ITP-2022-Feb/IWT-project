<?php

// Localhost
// $servername = "localhost";
// $username = 'root';
// $password = "";
// $dbName = "book_store";

// Online
$servername = "eu-cdbr-west-01.cleardb.com";
$username = 'bfacbda18442ae';
$password = "a1602e8c";
$dbName = "heroku_dbedc9f31577abf";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
    echo '<h1 style="margin-top: 50px; color: red;">Please Turn ON your Wi-Fi</h1>';
    die("Connection failed: " . mysqli_connect_error());
}

?>
