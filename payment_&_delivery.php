<?php
  $title = 'Payment'; include("header.php");
?>

<link rel="stylesheet" href="./css/Payment.css">


<?php
 if(isset($_POST['amount'])) {
  $B_ID = $_POST["B_ID"];
  $amount = $_POST["amount"];
  $pay_type = $_POST["pay_type"];
  $pymntDescription = $_POST["pymntDescription"];
  $P_date = $_POST["P_date"];

  $sql = mysqli_query($conn, "INSERT INTO ContactUs
    (B_ID, amount, pay_type, pymntDescription, P_date) 
  VALUES
    ('$B_ID', '$amount', '$pay_type', '$pymntDescription', '$P_date');");

  if (mysqli_query($conn, $sql)) {
    header("location: ./index.php?message=paymentSuccessfull");
  }
  else {
      echo "<script>alert ('Something went wrong :-(')</script>";
  }
  
 }
?>


<!-- Type your Code here -->
<h1>Payment</h1>

<?php
echo '
  <form action="" method="POST">
    <input hidden type="text" name="B_ID" value="'. $_SESSION['id'] .'">
    <h5>TO PAY</h5>
    <h1>'. $_GET['totalPrice'] .'</h1>
    <input hidden type="text" name="amount" value="'. $_GET['totalPrice'] .'">
    <h5>pay_type</h5>
    <input type="text" name="pay_type"><br>
    <h5>pymntDescription</h5>
    <input type="text" name="pymntDescription"><br>
    <h5>P_date</h5>
    <input type="text" name="P_date" value="'. date("Y-m-d") .'"><br>
    <button type="submit">PAY NOW</button>
  </form>
  ';
?>

<script src="./js/Payment.js"></script>

<?php
	include "./footer.php";
?>