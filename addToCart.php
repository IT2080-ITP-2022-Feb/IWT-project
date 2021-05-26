<?php
  $title = 'Cart'; include("header.php");
?>


<link rel="stylesheet" href="./css/cart.css">


<h1>Add to Cart Page</h1>
<?php
    echo '<form action="./cart.php" method="get">
            <input hidden type="text" name="Book_ID" value="'. $_GET["Book_ID"]. '">
            <h3>Quantity</h3>
            <input type="number" name="quantity" value="1">
            <button type="submit" name="submit">Add to Cart</button>
        </form>';
?>


<script src="./js/cart.js"></script>

<?php
	include "./footer.php";
?>