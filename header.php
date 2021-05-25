<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
			<?php
				if(isset($title)) {
					echo "DSK - ";
					echo $title;
				}
			?>
	</title>
	<link rel="stylesheet" href="./css/header.css">
</head>
<body>

<nav class="nav__container sticky">
	<div class="nav__upper">
		<div class="nav__logo">
			<a href="./index.php"><img src="images/logo1.png" align="left" width="100px" hight="50px" alt="DSK book store logo"></a>
		</div>

		<div class="nav__title">
			<h1 style="align:center">DSK Book Store</h1>
		</div>

		<div class="nav__search">
			<form action="./searchResultPage.php" method="get">
				<input type="text" name="search" placeholder="Search.."/>
				<button type="submit" name="submit">Search</button>
			</form>
		</div>

		<div class="nav__buttons">
			<a href="./login.php"><button class="btn">Sign in</button></a>
			<a href="./signup.php"><button class="btn">Sign Up</button></a>
		</div>
	</div>
	
	<div class="nav__lower">
		<ul class="links">
			<li> <a href="./index.php">Home</a></li>
			<li> <a href="./books.php">Books</a></li>
			<li> <a href="./payment.php">Payment & Delivery page</a></li>
			<li> <a href="./cart.php">Cart</a></li>
			<li> <a href="./contactus.php">Contact Us</a></li>
			<li> <a href="./about.php">About</a></li>
		</ul>
	</div>

	
</nav>

<div class="wrapper">



		<!-- <img src="images/logo1.png" align="left" width="100px" hight="50px" alt="DSK book store logo">
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
			<li> <a href="./books.php">Books</a></li>
			<li> <a href="./payment.php">Payment & Delivery page</a></li>
			<li> <a href="./contactus.php">Contact Us</a></li>
			<li> <a href="./about.php">About</a></li>
		</ul>

	<hr> -->




	
<script src="../js/header.js"></script>