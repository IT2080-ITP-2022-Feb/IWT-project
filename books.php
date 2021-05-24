<?php
  $title = 'Books'; include("header.php");
?>


<link rel="stylesheet" href="./css/searchResultPage.css">


<!-- Type your Code here -->
<h1>Books Page</h1>
<?php
    $sql = "SELECT *
    FROM Book";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "
          <h4>".$row['Book_name']."</h4>
          <a href='./cart.php?bookID=".$row['Book_ID']."'>Add to Cart</a>
          ";
      }
    }
    else {
      echo "0 items";
    }
?>


<script src="./js/searchResultPage.js"></script>
<?php
	include("footer.php");
?>