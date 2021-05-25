<?php
  $title = 'Cart'; include("header.php");
?>


<link rel="stylesheet" href="./css/cart.css">


<!-- Type your Code here -->
<h1>Cart Page</h1>

<?php
    // $sql = "SELECT *
    // FROM Cart";

    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         if($_SESSION["id"] === $row['B_ID']) {
    //             echo "<h4>".$row['Title']."</h4>";
    //         }
    //   }
    // }
    // else {
    //   echo "0 items";
    // }
?>



<script src="./js/cart.js"></script>

<?php
	include "./footer.php";
?>