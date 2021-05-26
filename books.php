<?php
  $title = 'Books'; include("header.php");
?>


<link rel="stylesheet" href="./css/books.css">


<!-- Type your Code here -->
<h1>Books Page</h1>
<?php
    $sql = "SELECT *
    FROM Book";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "
          <div class='book'>
            <h4>".$row['Book_name']."</h4>
            <img src='./Uploads/Books/". $row['Book_img'] ."' alt='' width='108px' heigth='172.75px'>
            <a href='./cart.php?bookID=".$row['Book_ID']."'>Add to Cart</a>
          </div>
          <hr>
          ";
      }
    }
    else {
      echo "0 items";
    }
?>


<script src="./js/books.js"></script>
<?php
	include("footer.php");
?>