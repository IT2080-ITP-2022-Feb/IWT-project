<?php
  $title = 'Admin Login'; include("header.php");
?>


<link rel="stylesheet" href="./css/about.css">

<title>Admin Login page</title>

<form action="./src/adminLogin_src.php" method="post">
    <h4>Admin Email</h4>
    <input placeholder="Admin Email..." type="text" name="email">
    <h4>Password</h4>
    <input placeholder="Admin Password..." type="password" name="password"><br><br>
    <button type="submit" name="submit">Login as Admin</button>
</form>



<script src="./js/about.js"></script>

<?php
	include "./footer.php";
?>