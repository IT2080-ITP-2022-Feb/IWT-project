<?php
  $title = 'Search Result'; include("header.php");
?>


<link rel="stylesheet" href="./css/searchResultPage.css">

<title>Search Result</title>


<!-- Type your Code here -->

<?php

	if (isset($_GET['submit'])) {
		echo "<h1>Search Result for ". $_GET["search"] ."...</h1>";

		$search = mysqli_real_escape_string($conn,$_GET['search']);

		if($search === "") {
			echo "<h3>All Books</h3><br>";
		}
	
		$sql = "SELECT * FROM Book WHERE Book_name LIKE '%$search%'";
		
		$res = $conn->query($sql);
	
		if ($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				echo ''. $row['Author'] .'<br>';
				echo $row['Book_name']. '<br>';
        echo '<hr>';
			}
		}
	}
?>
 <a href='./addToCart.php?Book_ID=".$row['Book_ID']."'>Add to Cart</a>

<script src="./js/searchResultPage.js"></script>
<?php
	include "./footer.php";
?>