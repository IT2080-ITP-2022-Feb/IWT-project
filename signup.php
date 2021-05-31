<?php
$title = 'Sign Up'; include("header.php");

// $conn=mysqli_connect('localhost','root','','dsk_su');
if(!$conn)
{

	echo'please check your database connection';
}

if (isset($_POST['btn-Sign up']))

	
{
	$Fname=mysqli_real_escape_string($conn,$_POST['Fname']);
	$Lname=mysqli_real_escape_string($conn,$_POST['Lname']);
	$Phone=mysqli_real_escape_string($conn,$_POST['Phone']);
	$Email=mysqli_real_escape_string($conn,$_POST['Email']);
    $Password=mysqli_real_escape_string($conn,$_POST['Password']);
	$Cpassword=mysqli_real_escape_string($conn,$_POST['Cpassword']);
	$Gender=mysqli_real_escape_string($conn,$_POST['Gender']);

	
	
   
   if($Password!=$Cpassword)
   {

   	echo"Password not matched";
   }

   else
   {
   	$Pass=md5($Password);
   
  	$sql="insert into game(Fname,Lname,Phone,Email,Password,Cpassword)values ('$Fname','$Lname','$Phone','$Email','$Password','$Cpassword','$Gender')";
    	 $result=mysqli_query($conn,$sql);

	if ($result) {
		echo "1 Record added.";
	} 
	else {
		echo "Database query failed.";
	}

 }}


  
?>


<link rel="stylesheet" href="./css/signup.css">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- 

<style>
@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap');
</style> -->
<body>
<div class="container">
	<img src = "./images/new/regi.jpg">
    <div class="title"><h1>Sign Up</h1></div>
	<hr/><hr/>
	<p><i>Lets get you on board</i></p>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details"> First Name</span>
            <input type="text" placeholder="Enter First Name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter Last Name" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter Phone Number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email"  placeholder="Enter your Email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="Password" name="Password" placeholder="Enter your password" required>
			<span class="eye">
     		<i class="far fa-eye"id="eye"></i>
			</span>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required>
          </div>
        </div>
		<p>
          <label><b>Gender: </b></label> &nbsp;&nbsp;&nbsp;
          <input type="radio" name="gender" value="Male"/>Male
          <input type="radio" name="gender" value="Female"/>Female
		  <input type="radio" name="gender" value=""/>Prefer not to say</p>
			<hr/><hr/>
            <div class="button">
              <input type="submit"value=Sign Up>
            </div>
			<div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
             
      <a href="https://www.facebook.com/blossom/"> <img id="img1" src="images/fb.jpg"  width ="20px" ></a>&nbsp;&nbsp;&nbsp;
      <a href="https://www.instagram.com/blossom/"> <img id="img1" src="images/inster.jpg" width ="20px"></a>&nbsp;&nbsp;&nbsp;
      <a href="https://www.twwiter.com/"><img id="img1" src="images/twitter.jpg" width ="20px" ></a>&nbsp;&nbsp;&nbsp;
      <a href="https://www.whatsapp.com/blossom/"><img id="img1" src="images/whap.jfif" width ="20px"></a> 

            </div>
          </div>
        </div>
        
</form>
<script src="./signup.js"></script>
</body>
 
<?php
	include "./footer.php";
?>  