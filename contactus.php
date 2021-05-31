<?php
try{

  $db = new mysqli("localhost","root","","dsk_contactus");
}
catch (Exception $exc) {
  echo $exc->getTraceAsString();
}
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];

$is_insert = $db->query("INSERT INTO `db`( `name`, `email`, `phone`, `message`)
 VALUES ('$name','$email','$phone','$message')");
if($is_insert == TRUE){
  echo "<h2>Thanks , your request submited .</h2>";
  exit();
}
}

  $title = 'Contact Us'; include("header.php");
?>
<link rel="stylesheet" href="./css/contactus.css">

<body>
<div class="container">
  <img src = "contact.jpg">
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

           

              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">

          <form action="" method="post" autocomplete="on">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="checkbox" id="ckbox" name="ck" value="">
				 <span>By clicking on this, you have agreed to accept our <a href = "terms & condition"> terms & condition </a> or <a href = "privacy_policy">Privacy policy </a> </span>
				 <br/><br/>
            <input type="submit" name="submit" value="Submit" class="btn" />
          </form>
        </div>
      </div>
    </div>
</body>   
<script src="./js/ContactUs.js"></script>

<?php
	include "./footer.php";
?>
