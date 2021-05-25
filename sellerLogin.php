<?php
  $title = 'Seller Login'; include("header.php");
?>


<link rel="stylesheet" href="./css/sellerLogin.css">


<!-- Type your Code here -->
<h1>Seller Login</h1>


<div align="center"style="width:800px;text-align:center;height:700px;border:1px solid black;">

<div class="include">
		<center><h3>Sign in to your DSK Book Store Seller Account</h3></center>
			<form method="POST" action="login.php">
				Email<br>
				<input type="text" id="uName" name="uName" class="insert" placeholder="Enter your email address
				" required><br><br>
				Password<br>
				<input type="password" id="showPass" name="showPass" class="insert" placeholder="Password" required pattern="[a-zA-Z0-9]{5,10}"><br><br>
				<input type="checkbox"  onclick="myfunction()">
				show password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
				<br>
				
				<center><button type = "submit" onclick="" class="login">Sign in</button></center>
			    <a href="#" style="float:right">Forgot your password ?</a><br><br>
				<br>
				<a style="float:left; color: #006699;">Don't have an account?</a>&nbsp;&nbsp;
				
                <a href=".......">Sign up</a>
			
			</form>
	</div>
</div>

<script src="./js/sellerLogin.js"></script>
<?php
	include("footer.php");
?>