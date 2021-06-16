<?php

if (isset($_POST["submit"])) {
echo "Your first name is \n".$_POST["F_name"];
echo "<br>";
echo "Your middel name is  \n".$_POST["M_name"];
echo "<br>";
echo "Your last name is \n".$_POST["L_name"];
echo "<br>";
echo "Your Birthday is \n".$_POST["dob"];
echo "<br>";
echo "Your Address : \n".$_POST["address"];
echo "<br>";
echo "Your Email : \n".$_POST["email"];
echo "<br>";
echo "Your user type is  \n".$_POST["user_type"];
echo "<br>";
echo "Password :  \n".$_POST["Password"];
echo "<br>";
echo "Confirm Password :  \n".$_POST["C_Password"];
echo "<br>";
echo "Contact number :  :\n".$_POST["contact"];
echo "<br>";
echo "Gender :\n" .$_POST["gender"];
}
?>