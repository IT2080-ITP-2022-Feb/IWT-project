<?php
$title = 'Sign Up'; include("header.php");

if(!$conn)
 {
 	echo'please check your database connection';
}

if(isset($_POST['F_name']) &&  isset($_POST['M_name']) && isset($_POST['L_name']) &&  isset($_POST['B_dob']) && isset($_POST['B_email']) &&  isset($_POST['user_type']) && isset($_POST['B_Password']) && isset($_POST['ProfilePic']) &&  isset($_POST['contact'])){
  $F_name=$_POST['F_name'];
  $M_name=$_POST['M_name'];
  $L_name=$_POST['L_name'];
  $B_dob=$_POST['B_dob'];
  $B_email=$_POST['B_email'];
  $user_type=$_POST['user_type'];
  $Password=$_POST['B_Password'];
  $contact=$_POST['ProfilePic'];
  $contact=$_POST['contact'];

  $sql = "INSERT INTO Buyer
    (F_name,M_name,L_name,B_dob,B_email,user_type,B_Password,ProfilePic,contact) 
  VALUES
    ('$F_name' , '$M_name' , '$L_name' , '$B_dob' , '$B_email','$user_type','$B_Password', '$ProfilePic' , '$contact');";

  if (mysqli_query($conn, $sql)) {
    header("location: ./index.php");
  }
  else {
  echo "<script>alert ('Something went wrong :-(')</script>";
  }
}


  
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
            
            <input type="text" placeholder="Enter First Name" required>
          </div>
          <div class="input-box">
            
            <input type="text" placeholder="Enter Middel Name" required>
            </div>
            <input type="text" placeholder="Enter Last Name" required>
          </div>
          <div class="input-box">
            <!-- <span class="details">Birth of Day</span> -->
            <input type="text"  placeholder="Enter your Birth of Day" required>
          </div>
          <div class="input-box">
            <input type="email"  placeholder="Enter your Email" required>
          </div>
          <hr/>
          <p>
          <label><b>User type: </b></label>
          <input type="radio" name="User type" value="Buyer"/>Buyer
          <input type="radio" name="User type" value="Seller"/>Seller</p>
          <hr/>
           <div class="input-box">
            <input type="password" id="Password" name="Password" placeholder="Enter your password" required>
		     	<span class="eye">
     		<i class="far fa-eye"id="eye"></i>
			</span>
          </div>

          <div class="input-box">
            <input type="text" placeholder="Enter Phone Number" required>
          </div>
        
		<p>
          <label><b>Gender: </b></label>
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
<script src="./js/signup.js"></script>
</body>
 
<?php
	include "./footer.php";
?>  