<!-- Dilki -->

<?php
  $title = 'Cart'; include("header.php");
?>


<link rel="stylesheet" href="./css/cart.css">


<?php
  if(isset($_GET['submit'])) {
    $quantity = $_GET["quantity"];
    $Book_ID = $_GET["Book_ID"];
    $B_ID = $_SESSION["id"];

    $allItems = mysqli_query($conn, "SELECT *
            FROM Cart
            WHERE B_ID = '". $B_ID ."'
            AND Book_ID = '". $Book_ID ."'
             ");
    
    $allItems  = mysqli_fetch_array($allItems);

    if($allItems['quantity'] === NULL || $allItems['quantity'] === 0 ) {
      $sql = "INSERT INTO Cart
              (quantity, Book_ID, B_ID)
            VALUES
              ('$quantity', '$Book_ID', '$B_ID');
            ";
    }
    else {
      $quantity = $quantity + $allItems['quantity'];
      $C_ID = $allItems['C_ID'];

      $sql = "UPDATE Cart SET
        `quantity` = '$quantity'
        WHERE C_ID='" . $C_ID . "'
      ";
    } 

    if (mysqli_query($conn, $sql)) {
      header("location: ./books.php?message=successfullyAdded");
    }
    else {
        echo "<script>alert ('Something went wrong :-(')</script>";
    }
  
    
  }
?>


<!-- Type your Code here -->
<h1>Cart Page</h1>

<?php
    $sql = "SELECT *
            FROM Cart AS C, Book AS B
            WHERE C.B_ID = '". $_SESSION['id'] ."'
            AND C.Book_ID = B.Book_ID
            ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<hr><h4>".$row['Book_name']."</h4>";
            echo "<h4>".$row['Author']."</h4>";
            echo "<h5>".$row['quantity']."</h5>";
            echo "<a href='./src/removeCart_src.php?C_ID=". $row['C_ID'] ."'><button>Remove</button></a>";
      }
    }
    else {
      echo "0 items";
    }
?>

<hr>
<br>
<a href="./payment_&_delivery.php"><button>Checkout</button></a>

<script src="./js/cart.js"></script>

<?php
	include "./footer.php";
?>