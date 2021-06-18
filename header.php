<?php
  include_once './src/dbConfig.php';

//   This is temporary
	session_start();
	// $_SESSION["id"] = 1;
	// $_SESSION["role"] = "buyer";
?>

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
	<link rel="shortcut icon" type="png" href="./images/favicon/favicon.png"/>
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
		<?php
			if (isset($_SESSION["id"])) {
				if ($_SESSION["role"] === 'admin') {
					echo '<a href="./admin.php"><button class="btn">Admin Dashboard</button></a>';
				  }
				  else if (($_SESSION["role"] === 'buyer')) {
					echo '<a href="./buyerDashboard.php"><button class="btn">Dashboard</button></a>';
				  }
				  else if (($_SESSION["role"] === 'seller')) {
					echo '<a href="./sellerDashboard.php"><button class="btn">Dashboard</button></a>';
				  }
				  echo '<a href="./src/logout_src.php"><button class="btn">Logout</button></a>';
			}
			else {
				echo '<a href="./login.php"><button class="btn">Sign in</button></a>
					<a href="./signup.php"><button class="btn">Sign Up</button></a>';
			}
		?>
		</div>

	</div>
	
	<div class="nav__lower">
		<ul class="links">
			<li> <a href="./index.php">Home</a></li>
			<li> <a href="./books.php">Books</a></li>

			<?php
				if (isset($_SESSION["id"])) {
					if($_SESSION['role'] === 'buyer') {
						// <li> <a href="./payment_&_delivery.php">Payment & Delivery page</a></li>
						echo '
							<li> <a href="./cart.php">Cart</a></li>'
						;
					}
				}
			?>

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