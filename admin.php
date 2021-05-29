<?php
    $title = 'Admin'; include("header.php");

    if ($_SESSION["role"] !== 'admin') {
        header("location: ./index.php");
        exit();
    }
?>


<link rel="stylesheet" href="./css/admin.css">

<title>Admin Dashboard</title>

<section class="counters">
  <?php
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM Buyer");
    $BuyerCount = mysqli_fetch_array($result);

    $result = mysqli_query($conn, "SELECT COUNT(*) FROM Book");
    $BookCount = mysqli_fetch_array($result);

    $result = mysqli_query($conn, "SELECT COUNT(*) FROM Seller");
    $SellerCount = mysqli_fetch_array($result);

    // $result = mysqli_query($conn, "SELECT SUM(amount) FROM Payment");
    // $totalIncome = mysqli_fetch_array($result);
    
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM Category");
    $totalCat = mysqli_fetch_array($result);
        
        
    echo "<div class='stat__container'>
            <div class='stat__box'>
                <h1>". $BuyerCount[0] ."</h1>
                <h3>Buyers</h3>
            </div>
            <div class='stat__box'>
                <h1>". $BookCount[0] ."</h1>
                <h3>Books</h3>
            </div>
            <div class='stat__box'>
                <h1>". $SellerCount[0] ."</h1>
                <h3>Sellers</h3>
            </div>
            
            <div class='stat__box'>
                <h1>". $totalCat[0] ."</h1>
                <h3>Categories</h3>
            </div>
        </div>
        ";
    ?>
</section>
<!-- <div class='stat__box'>
  <h1>". $totalIncome[0] ."</h1>
  <h3>Total Income</h3>
</div> -->


<section class="users">
  <div class="user__table">
      <div class="user__tableHeader">
      <h3>Customers</h3>
          <div class="">
              <a class="nav__login" href="./addUser.php?role=buyer">Add new Buyer</a>
          </div>
      </div>
      
      <table id="Buyers">
          <tr>
              <th>B_ID</th>
              <th>F_name</th>
              <th>M_name</th>
              <th>L_name</th>
              <th>B_dob</th>
              <th>B_email</th>
              <th>user_type</th>
              <th>Update</th>
              <th>Delete</th>
          </tr>

          <?php
              $sql = "SELECT * from Buyer";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo "
                  <tr>
                      <td>".$row['B_ID']."</td>
                      <td>".$row['F_name']."</td>
                      <td>".$row['M_name']."</td>
                      <td>".$row['L_name']."</td>
                      <td>".$row['B_dob']."</td>
                      <td>".$row['B_email']."</td>
                      <td>".$row['user_type']."</td>
                      <td>
                          <a href='./updateUserDetails.php?id=$row[B_ID]&role=$row[user_type]'>
                          <input type='submit' value='Update'></a>
                      </td>
                      <td>
                          <a href='./deleteUser.php?id=$row[B_ID]&role=$row[user_type]'>
                          <input type='submit' value='Delete'></a>
                      </td>
                      
                  </tr>
                  ";
                  }
              }
              else {
                  echo "0 results";
              }
          ?>

      </table>
  </div>
</section>





<script src="./js/admin.js"></script>

<?php
	include "./footer.php";
?>