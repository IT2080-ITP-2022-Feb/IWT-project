<?php
  $title = 'Buyer Login'; include("header.php");
?>


<link rel="stylesheet" href="./css/buyerLogin.css">


<!-- Type your Code here -->
<h1>Buyer Login</h1>


<div align="center"style="width:800px;text-align:center;height:700px;border:1px solid black;">

<div class="include">
		<center><h3>Sign in to your DSK Book Store Buyer Account</h3></center>
			<form method="POST" action="abc.php">
				user name<br>
				<input type="text" id="uName" name="uName" class="insert" placeholder="Enter your user name
				" required><br><br>
				Password<br>
				<input type="password" id="showPass" name="pass" class="insert" placeholder="Password" required pattern="[a-zA-Z0-9]{5,10}"><br><br>
				<input type="checkbox"  onclick="">
				show password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
				<br>
				
				<center><button type = "submit" onclick="" class="login">Sign in</button></center>
			    <a href="#" style="float:right">Forgot your password ?</a><br><br>
				<br>
				<a style="float:left; color: #006699;">Don't have an account?</a>&nbsp;&nbsp;
				
                <a href="buyerLogin.php">Sign up</a>
			
			</form>
	</div>
</div>





<script src="./js/buyerLogin.js"></script>
<?php
	include("footer.php");
?>