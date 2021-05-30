<?php
  $title = 'Sign Up'; include("header.php");
?>


<link rel="stylesheet" href="./css/signup.css">

<style>
@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap');
</style>
<!-- Type your Code here -->

<?php

$urerr = $eerr = $perr = $cperr = $fnerr = $gerr = "";
$urname = $email = $name = $gender = "";
$boolen = false;

if($_SERVER["REQUEST_METHOD"]=="POST"){

	if(empty($_POST["urname"])){
		$urerr = "Username Required...!";
		$boolen = false;
	}

	else{
		$urname = validate_input($_POST["urname"]);
		$boolen = true;

	}

	if(empty($_POST["email"])){
		$eerr = "Email Required...!";
		$boolen = false;
	}
	elseif (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
	 $eerr = "Invalid Email";
	 $boolen = false;

	} 
	else{
	  $email = validate_input($_POST["email"]);
	  $boolen = true;
}

$lenght = strlenght($_POST["passwd"]);

if(empty($_POST["passwd"])){
	$perr = "Password Field Required...!";
	$boolen = false;
}
elseif ($lenght){
	$perr = $lenght;
	$boolen = true;
} 
else{
	$passwd = validate_input($_POST["passwd"]);
	$boolen = true;
}


if(empty($_POST["cpasswd"])){
	$cperr = "Confirm Password Required...!";
	$boolen = false;
}
elseif ($_POST["cpasswd"]!=$passwd) {
	$cperr = "Password Not Match...!";
	$boolen = false;
}


if(empty($_POST["fname"]) || empty($_POST["lname"])){
	$fnerr = "First & Last Name Required...!";
	$boolen = false;
}
else{
	$name = validate_input($_POST["fname"]);
	$boolen = true;
}

if(empty($_POST["gender"])){
	$gerr = "Gender Required...!";
	$boolen = false;
}
else{
	$gender = validate_input($_POST["gender"]);
	$boolen = false;
}

if(isset($_POST["ck1"])){
	$boolen = true;
}
else{
	$boolen = false;
}

function strlenght($str){
	  $ln = strlen($str);
	  if($ln > 8){
		  return "Password should less then 8 charectar";
	  }
	  elseif ($ln < 5 && $ln >= 1) {
		  return "Password should greater then 3 charecter";

	  }
	}

	function validate_input($data){
	 $data = trim($data);
	 $data = stripcslashes($data);
	 $data = htmlspecialchars($data);
	 return $data; 
	}

}

	if($boolen){
	 $dbname = "signup";
	 $con = mysqli_connect("localhost","root","",$dbname);
	 if (!$con) {
	  die("Connection_Failed :" + mysqli_connect_error());
	 }

	function NewUser(){
	 $sql = "INSERT INTO su (urname,email,passwd,fname,gender) values('$_POST["urname"]','$_POST["email"]','$_POST["passwd"]','$_POST["fname"]','$_POST["gender"]') " ;
	 $query = mysqli_query($GLOBALS['con'],$sql);

	 if($query){
		echo "<script>
				alert ('Record Inserted Successfully...!');
			</script>"
	  }
	  function SignUP(){
		  $sql = "SELECT * FROM su WHERE urname = '$_POST["urname"]' AND email = '$_POST["email"]'";

		 $result = mysqli_query($GLOBALS['con'],$sql);

		 if(!$row = mysqli_fetch_array($result)){
			 NewUser();
		 }
		 else{
	   echo "<script>
		  alert ('You are already Sign Up User...!');
		 </script>"
	  }
	  }
	  if(isset($_POST["submit"])){
		SignUP();
		mysqli_close($GLOBALS["con"]);
		$boolen = false;
	  }
	}
}

?>

 <form class="" enctype="multipart/form.data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">

	 <div class="container">

		 <div class="inner">

			 <div class="title">

				 <h3> Sign Up</h3>

				 <div class="content">
					 <div class="txt">
						 <input type="text" name="username" value="" id="txtuser" placeholder="Username">
						 <span id="c1" class="glyphicon glyphicon-user"></span>
			 </div>
			 <span id="span"><?php echo $urerr; ?></span>

			 <div class="txt1">
				 <input type="text" name="email" value="" id="txtemail" placeholder="Email">
				 <span id="c2" class="glyphicon glyphicon-envelope"></span>
			 </div>
				 <span id="span"><?php echo $eerr; ?></span>


			 <div class="txt1">
				 <input type="text" name="passwd" id="txtpass" placeholder="Password" value="">
				 <span id="c3" class="glyphicon glyphicon-lock"></span>
			 </div>
				 <span id="span"><?php echo $perr; ?></span>


			 <div class="txt1">
				 <input type="text" name="cpasswd" id="txtcpass" placeholder="Confirm Password" value="">
				 <span id="c4" class="glyphicon glyphicon-lock"></span>
			 </div>
				 <span id="span"><?php echo $cperr; ?></span>


			 <div class="content2">
				 <input type="text" name="fname" id="txtfname" placeholder="First Name" value="">
				 <input type="text" name="lname" id="txtlname" placeholder="Last Name" value="">

			 </div>
				 <span id="span"><?php echo $fnerr; ?></span>


			 <div class="radios">
				 <h4>Gender :</h4>
				 <input type="radio" name="gender" value="Male">
				 <label for="">Male</label>
				 <input type="radio" name="gender" value="Female">
				 <label for="">Female</label>
			 </div>
				<span id="span"><?php echo $gerr; ?></span>


			 <div class="ckbox">
				 <input type="checkbox" id="ckbox" name="ck1" value="">
				 <span>I Agree to Tearm and Service</span>
				 <br/>
				 <input type="checkbox" name="ck2" id="ckbox2" value="">
				 <span>I Want to receive news and special offers</span>

			 </div>

			 <div class="btnsub">
				 <input type="submit" name="submit" id="btnsub" value="Sign Up">
			 </div>
		 </div>
	   </div>

	</div>
 </div>

</form>

<script>

$(document).ready(function() {
 
var icon="";
var $txt1=$("txtuser");
var $txt2=$("txtemail");
var $txt3=$("txtpass");

$("input").ready(function(){

var id = document.activeElement.id;

if(id == "txtuser"){
	$("#c1").css("color","green");
	icon = "#c1";
}

if(id == "txtemail"){
	$("#c2").css("color","green");
	icon = "#c2";
}

if(id == "txtpass"){
	$("#c3").css("color","green");
	icon = "#c3";
}

if(id == "txtcpass"){
	$("#c4").css("color","green");
	icon = "#c4";
}

});

$("input").blur(function(){

	$(icon).css("color","#b2b2b2");

	if($txt1.val() != ""){
	 $("#c1").css("color","green");
	}

	if($txt2.val() != ""){
	 $("#c2").css("color","green");
	}

 if($txt3.val() != ""){
	 $("#c3").css("color","green");
	}

	if($txt4.val() != ""){
	 $("#c4").css("color","green");
	}


});

});


<script src="./js/signup.js"></script>

<?php
	include "./footer.php";
?>