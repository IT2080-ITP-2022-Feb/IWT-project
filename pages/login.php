<?php
	include "../includes/header.php";
?>
<link rel="stylesheet" href="../css/about.css">
<head>

    <title>Login page</title>
</head>
<body >

<div align="center"style="width:800px;text-align:center;height:700px;border:1px solid black;">

<div class="include">
		<center><h3>Sign in to your DSK Book Store Account</h3></center>
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
 <!--footer-->

</body>

<script src="../js/about.js"></script>
<?php
	include "../includes/footer.php";
?>