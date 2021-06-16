<?php
$title = 'Sign Up'; include("header.php");

if(!$conn)
 {
 	echo'please check your database connection';
}

if(isset($_POST['F_name']) &&  isset($_POST['M_name']) && isset($_POST['L_name']) &&  isset($_POST['dob']) && isset($_POST['address']) && isset($_POST['email']) &&  isset($_POST['user_type']) && isset($_POST['Password']) && isset($_POST['C_Password']) && isset($_POST['contact']) && isset($_POST['gender'])){
  $F_name=$_POST['F_name'];
  $M_name=$_POST['M_name'];
  $L_name=$_POST['L_name'];
  $dob=$_POST['dob'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $user_type=$_POST['user_type'];
  $Password=$_POST['Password'];
  $C_Password=$_POST['C_Password'];
  $contact=$_POST['contact'];
  $gender=$_POST['gender'];


  $sql = "INSERT INTO SignUp
    (F_name,M_name,L_name,dob,address,email,user_type,Password,C_Password,contact,gender) 
  VALUES
    ('$F_name' , '$M_name' , '$L_name' , '$dob' , '$address' , '$email','$user_type','$Password', '$C_Password', '$contact' , '$gender');";

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
      <form method="POST" action="sgn.php">
        <div class="user-details">
          <div class="input-box">
            
            <input type="text" name="F_name" placeholder="Enter First Name" required>
          </div>
          <div class="input-box">
            
            <input type="text" name="M_name" placeholder="Enter Middel Name" required>
            </div>
            <input type="text" name="L_name" placeholder="Enter Last Name" required>
          </div>
          <div class="input-box">
            <!-- <span class="details">Birth of Day</span> -->
            <input type="text" name="dob" placeholder="Enter Your Birth Of Day" required>
          </div>
          <div class="input-box">
            <textarea type="text" name="address" placeholder="Enter Your Email" required></textarea>
          </div>
          <div class="input-box">
            <input type="email" name="email" placeholder="Enter Your Email" required>
          </div>
          <hr>
          <p>
          <label><b>User type: </b></label>
          <input type="radio" name="user_type" value="Buyer"/>Buyer
          <input type="radio" name="user_type" value="Seller"/>Seller</p>
          <hr>
           <div class="input-box">
            <input type="password" id="Password" name="Password" placeholder="Enter Your Password" required>
		     	<span class="eye">
     		<i class="far fa-eye"id="eye"></i>
			</span><br>
      <input type="password" id="Password" name="C_Password" placeholder="Confirm Password" required>

          </div>
          <br>

          <div class="input-box">
            <input type="text" name="contact" placeholder="Enter Phone Number" required>
          </div><br>
          <label><b>Gender: </b></label>
          <input type ="radio" name = "gender" value = "Male">Male
          <input type ="radio" name = "gender" checked="checked" value = "Female">Female
          <br>
      
            <div class="button">
              <input type="submit" name="submit" value=Sign Up>
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