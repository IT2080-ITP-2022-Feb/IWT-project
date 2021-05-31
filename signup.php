<?php
  $title = 'Sign Up'; include("header.php");
?>


<link rel="stylesheet" href="./css/signup.css">


<!-- Type your Code here -->

<form action="signup.php" method="post">
		<div class="container">
	    <h1><center>Sign Up </center></h1>
		<p><center>Lets get you on board</center></p>
		<br/>
        <b>User type:</b>
        <input name="Usertype" type="radio" value="Buyer">Buyer
		<input name="Usertype" type="radio" value="Seller" checked="checked">Seller <br/><br/>
		<lable for="FirstName"><b>First Name</b></lable><br/>
        <input text="FirstName" type="text">
		<lable for="LastName"><b>Last Name</b></lable>
        <input text="LastName" type="text" >
        <br/><br/>		
        <lable for="ContactNumber"><b>Contact Number</b></lable>
		<input name="Contact Number" type="text" >
		<lable for="Address"><b>Address</b></lable>
		<input text="Address" type="text"><br/><br/>
		<label for="Gender"><b>Gender<b/></label><br/>
        <input name="Gender" type="radio" value="Male">Male
        <input name="Gender" type="radio" value="Female" checked="checked">Female<br/><br/>
		<label for="Password"><b>Password</b></label>
		<input name="Password" type="Password" value="*********" >
		<label for="ConfirmPassword"><b>Password</b></label>
		<input name="ConfirmPassword" type="Password" value="*********"><br/><br/>
		<input type="button" name="Reset" value="Reset">
		<input type="submit" name="Sign Up" value="Sign Up">





	
	</form>

<script src="./js/signup.js"></script>

<?php
	include "./footer.php";
?>