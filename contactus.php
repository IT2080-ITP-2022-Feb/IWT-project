<?php
$title = 'Contact Us'; include("header.php");

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['message'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $message=$_POST['message'];

  $sql = "INSERT INTO ContactUs
    (name, email, mobile, message) 
  VALUES
    ('$name', '$email', '$mobile', '$message');";

  if (mysqli_query($conn, $sql)) {
    header("location: ./index.php");
  }
  else {
  echo "<script>alert ('Something went wrong :-(')</script>";
  }
}
  
?>
<link rel="stylesheet" href="./css/contactus.css">

<body>
<div class="container">
  <img src = "images/new/contact.jpg">
  <hr/>
      <div class="form">
        <div class="contact-info">
          <b><h2 class="title">Send Us A Message</h2></b>
          <p class="text"><i><b>Get in touch with our team and leave the online booking frustrations behind....</p></i></b>

          <div class="info">
            <div class="information">
              <img src="images/location.png" class="icon" alt="" />
              <p>DSK Book Store, No 107/2, Piyasena Mawatha, Ratnapura, Sri Lanka.</p>
            </div>
            <div class="information">
              <img src="images/email.png" class="icon" alt="" />
              <p> info@dskbooks.com/ </p>&nbsp;
              <p> admin@dskbooks.com </p>
            </div>
            <div class="information">
              <img src="images/phone.png" class="icon" alt="" />
              <p>Hot-line: +94 712 300 200 / Tel: +94 45 222 2444</p>

            </div>
          </div>
          </br></br>

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

        <div class="contact-form">

          <form action="" method="post" autocomplete="on">
            <h3 class="title">Contact us</h3>
            <div class id="error_message"></div>
            <div class="input-container">
              <input type="text" name="name" id= "name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" id="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="mobile" id="mobile" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" id="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="checkbox" id="ckbox" name="ck" value="">
				 <span>By clicking on this, you have agreed to accept our <a href = "./terms&condition.php"> terms & condition </a> or <a href = "./privacy_policy.php">Privacy policy </a> </span>
				 <br/><br/>
         <div class="button">
              <input type="submit"value="Send">
            </div>
          </form>
        </div>
      </div>
</div>
</body>   


<script src="./js/contactus.js"></script>

<?php
	include "./footer.php";
?>
