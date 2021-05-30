<!-- Dilki -->

<?php
  $title = 'Cart'; include("header.php");
?>


<link rel="stylesheet" href="./css/addToCart.css">


<h1>Add to Cart Page</h1>
<?php
  if (isset($_SESSION["id"])) {
    if ($_SESSION["role"] === 'buyer') {
      echo '<form action="./cart.php" method="get">
          <input hidden type="text" name="Book_ID" value="'. $_GET["Book_ID"]. '">
          <h3>Quantity</h3>
          <input type="number" name="quantity" value="1">
          <button type="submit" name="submit">Add to Cart</button>
      </form>';
    }
  }
  else {
    echo '<hr>
          <h1>Please Login to Use Add to Cart Function</h1>
          <a href="./buyerLogin.php">Login as a Buyer</a>';
  }

  
?>


<script src="./js/addToCart.js"></script>

<?php
	include "./footer.php";
?>