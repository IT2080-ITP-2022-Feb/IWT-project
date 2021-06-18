<?php
  $title = 'Payment'; include("header.php");
?>

<link rel="stylesheet" href="./css/Payment.css">


<?php
  // get the submited form data
  if(isset($_POST['payNow'])) {
    $B_ID = $_POST["B_ID"];
    $amount = $_POST["amount"];
    $pay_type = $_POST["pay_type"];
    $pymntDescription = $_POST["pymntDescription"];
    $P_date = $_POST["P_date"];

    // Query for insert data to Payment table
    $sql = "INSERT INTO Payment
       (B_ID, amount, pay_type, pymntDescription, P_date) 
     VALUES
       ('$B_ID', '$amount', '$pay_type', '$pymntDescription', '$P_date')";

    // execute SQL query
    if (mysqli_query($conn, $sql)) {
      // if successfully executed
      header("location: ./index.php?message=paymentSuccessfull");
    }
    else {
      // if Something went wrong
      echo "<script>alert ('Something went wrong :-(')</script>";
    }

  }
?>

<div class="pay">

<h1>Payment</h1>

<?php
  // Payment submit form
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
      <button name="payNow" type="submit">PAY NOW</button>
    </form>
    ';
?>

</div>

<script src="./js/Payment.js"></script>

<?php
	include "./footer.php";
?>