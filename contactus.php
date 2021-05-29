<?php
  $title = 'Contact Us'; include("header.php");
?>


<link rel="stylesheet" href="./css/ContactUs.css">


<!-- Type your Code here -->

<form action="contactus.php" method="post">
		<div class="container">
	    <h1><center>Contact Us </center></h1>
    <p><b>Send Us A Massage</b></p>
		<p>Get in touch with our team and leave the online booking frustrations behind </p>
		<br/><br/>
    <a href="https://www.facebook.com/blossom/"> <img id="img1" src="images/fb.jpg"  width ="20px" ></a>&nbsp;&nbsp;&nbsp;
    <a href="https://www.instagram.com/blossom/"> <img id="img1" src="images/inster.jpg" width ="20px"></a>&nbsp;&nbsp;&nbsp;
    <a href="https://www.twwiter.com/"><img id="img1" src="images/twitter.jpg" width ="20px" ></a>&nbsp;&nbsp;&nbsp;
    <br/><br/>
        
    <input name="FirstName" type="text" value="First Name">
    <input text="Last tName" type="text" value="Last Name"><br/><br/>
    <input text="Email" type="Email"  value="Email">
    <br/><br/>	
    <input text="Message" type="text" value="Message">
    <br/><br/>
    <input type="button" name="Submit" value="Submit">

<script src="./js/ContactUs.js"></script>

<?php
	include "./footer.php";
?>