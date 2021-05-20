<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
				if(isset($title)) {
					echo "DSK - ";
					echo $title;
				}
			?>
		</title>
		<link rel="stylesheet" href="../css/header.css">
	</head>

	<body>
		<img src="images/logo1.png" align="left" width="100px" hight="50px" alt="DSK book store logo">
		<h1 style="align:center">DSK Book Store</h1>

		<div class="topnav" align="right">
			<a href="./login.php"><button>Login</button></a>
			<a href="./signup.php"><button>Sign Up</button></a>
		</div>

		<hr>
		
		<div class="topnav" align="right">
			<form action="./searchResultPage.php" method="get">
            	<input type="text" name="search" placeholder="Search.."/>
				<button type="submit" name="submit">Search</button>
			</form>
        </div>



		<ul>
			<li> <a href="./index.php">Home</a></li>
			<li> <a href="books page">Books</a></li>
			<li> <a href="Payment & Delivery page">Payment & Delivery page</a></li>
			<li> <a href="contact us page">Contact Us</a></li>
			<li> <a href="./about.php">About</a></li>
		</ul>

<hr>

<script src="../js/header.js"></script>