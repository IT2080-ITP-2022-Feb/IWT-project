<!-- Dilki -->

<?php
  $title = 'Cart'; include("header.php");
?>


<link rel="stylesheet" href="./css/cart.css">


<!-- This Code Run if $_GET variable isset -->
<?php
  // Check if the user come to this page by clicking add to cart submit button
  if(isset($_GET['submit'])) {

    // Set the variables (this data coming from the addToCart page)
    $quantity = $_GET["quantity"];
    $Book_ID = $_GET["Book_ID"];
    $B_ID = $_SESSION["id"];

    // Query for get all the cart data
    $allItems = mysqli_query($conn, "SELECT *
            FROM Cart
            WHERE B_ID = '". $B_ID ."'
            AND Book_ID = '". $Book_ID ."'
             ");

    // Store all cart items as an array
    $allItems  = mysqli_fetch_array($allItems);

    // Check if cart quantity 0 or Null
    if($allItems['quantity'] === NULL || $allItems['quantity'] === 0 ) {

      // Query for insert data in to Cart
      $sql = "INSERT INTO Cart
              (quantity, Book_ID, B_ID)
            VALUES
              ('$quantity', '$Book_ID', '$B_ID');
            ";
    }
    else {
      // Calculate total quantity
      $quantity = $quantity + $allItems['quantity'];

      // Get the Cart ID from Database
      $C_ID = $allItems['C_ID'];

      // Query for Update Cart quantity
      $sql = "UPDATE Cart SET
        `quantity` = '$quantity'
        WHERE C_ID='" . $C_ID . "'
      ";
    } 

    // execute SQL query
    if (mysqli_query($conn, $sql)) {
      // if successfully executed
      header("location: ./books.php?message=successfullyAdded");
    }
    else {
      // if Something went wrong
      echo "<script>alert ('Something went wrong :-(')</script>";
    }
  }
?>

<div class="items">

<h1>Cart Page</h1>

<?php
  // Get the All Cart Data for a logged in Buyer
  $sql = "SELECT *
          FROM Cart AS C, Book AS B
          WHERE C.B_ID = '". $_SESSION['id'] ."'
          AND C.Book_ID = B.Book_ID
          ";

  // execute SQL query
  $result = $conn->query($sql);

  // Define the totalPrice variable
  $totalPrice = 0;

  // Loop through the result
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Display the Cart data
      echo "<hr><h4>".$row['Book_name']."</h4>";
      echo "<h4>".$row['Author']."</h4>";
      echo "<h5>".$row['quantity']."</h5>";
      echo "<a href='./src/removeCart_src.php?C_ID=". $row['C_ID'] ."'><button>Remove</button></a>";
      $totalPrice += $row['price'] * $row['quantity'];
    }
    // Dispaly the Total Price
    echo '<hr><h3>Total Price : '. $totalPrice .'</h3>';
  }
  // if the Cart Empty display O
  else {
    echo "0 items";
  }
?>

<hr>
<br>
<?php
  echo '<a href="./payment_&_delivery.php?totalPrice='. $totalPrice .'"><button>Checkout</button></a>';
  ?>

</div>

<script src="./js/cart.js"></script>

<?php
	include "./footer.php";
?>