<!-- Dilki -->

<?php
    $title = 'Admin'; include("header.php");

    // Check the logged in user is an Admin
    if ($_SESSION["role"] !== 'admin') {
        header("location: ./index.php");
        exit();
    }
?>


<link rel="stylesheet" href="./css/admin.css">

<title>Admin Dashboard</title>

<section class="counters">

    <?php
        // Get the number of Buyers from the Database
        $result = mysqli_query($conn, "SELECT COUNT(*) FROM Buyer");
        $BuyerCount = mysqli_fetch_array($result);

        // Get the number of Books from the Database
        $result = mysqli_query($conn, "SELECT COUNT(*) FROM Book");
        $BookCount = mysqli_fetch_array($result);

        // Get the number of Sellers from the Database
        $result = mysqli_query($conn, "SELECT COUNT(*) FROM Seller");
        $SellerCount = mysqli_fetch_array($result);

        // Get the number of Categories from the Database
        $result = mysqli_query($conn, "SELECT COUNT(*) FROM Category");
        $totalCat = mysqli_fetch_array($result);


        // Display the statistics
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





<!-- Display all the Sellers data -->
<section class="users">
    <div class="user__table">
        <div class="user__tableHeader">
            <h3>Sellers</h3>
        </div>
      
        <table id="Sellers">
            <tr>
                <th>S_ID</th>
                <th>F_name</th>
                <th>M_name</th>
                <th>L_name</th>
                <th>S_dob</th>
                <th>S_email</th>
                <th>user_type</th>
                <th>Delete</th>
            </tr>

            <?php
                // Query for get all the Seller
                $sql = "SELECT * from Seller";

                // execute SQL query
                $result = $conn->query($sql);

                // Loop through the result
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                    // Display the Data
                    echo "
                    <tr>
                        <td>".$row['S_ID']."</td>
                        <td>".$row['F_name']."</td>
                        <td>".$row['M_name']."</td>
                        <td>".$row['L_name']."</td>
                        <td>".$row['S_dob']."</td>
                        <td>".$row['S_email']."</td>
                        <td>".$row['user_type']."</td>
                      
                        <td>
                            <a href='./src/admin/deleteUser_src.php?id=$row[S_ID]&role=$row[user_type]'>
                            <input type='submit' value='Delete'></a>
                        </td>
                      
                    </tr>
                    ";
                    }
                }
                // if the Sellers table Empty display O
                else {
                    echo "0 results";
                }
            ?>

        </table>
    </div>
</section>


<!-- Display all the Admins data -->
<section class="users">
    <div class="user__table">
        <div class="user__tableHeader">
            <h3>Admins</h3>
        </div>
      
        <table id="Admins">
            <tr>
                <th>A_ID</th>
                <th>F_name</th>
                <th>M_name</th>
                <th>L_name</th>
                <th>A_dob</th>
                <th>A_email</th>
                <th>user_type</th>
                <th>Delete</th>
            </tr>

            <?php
                // Query for get all the Admins
                $sql = "SELECT * from Admin";

                // execute SQL query
                $result = $conn->query($sql);

                // Loop through the result
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    
                    // Display the Data
                    echo "
                    <tr>
                        <td>".$row['A_ID']."</td>
                        <td>".$row['F_name']."</td>
                        <td>".$row['M_name']."</td>
                        <td>".$row['L_name']."</td>
                        <td>".$row['A_dob']."</td>
                        <td>".$row['A_email']."</td>
                        <td>".$row['user_type']."</td>

                        <td>
                            <a href='./src/admin/deleteUser_src.php?id=$row[A_ID]&role=$row[user_type]'>
                            <input type='submit' value='Delete'></a>
                        </td>
                      
                    </tr>
                    ";
                    }
                }
                // if the Admins table Empty display O
                else {
                    echo "0 results";
                }
            ?>
        </table>
    </div>
</section>


<!-- Display all the Buyers data -->
<section class="users">
    <div class="user__table">
        <div class="user__tableHeader">
            <h3>Buyers</h3>
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
                <th>Delete</th>
            </tr>

            <?php
                // Query for get all the Buyers
                $sql = "SELECT * from Buyer";
                
                // execute SQL query
                $result = $conn->query($sql);

                // Loop through the result
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    
                    // Display the Data
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
                            <a href='./src/admin/deleteUser_src.php?id=$row[B_ID]&role=$row[user_type]'>
                            <input type='submit' value='Delete'></a>
                        </td>
                        
                    </tr>
                    ";
                    }
                }
                // if the Buyers table Empty display O
                else {
                    echo "0 results";
                }
            ?>

        </table>
    </div>
</section>


<!-- Display all the Categories data -->
<section class="users">
    <div class="user__table">
        <div class="user__tableHeader">
            <h3>Categories</h3>
        </div>
        
        <table id="customers">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <!-- <th>Delete</th> -->
            </tr>
                    
            <?php
                // Query for get all the Admins
                $sql = "SELECT * from Category";

                // execute SQL query
                $result = $conn->query($sql);

                // Loop through the result
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                    // Display the Data
                    echo "
                    <tr>
                        <td>".$row['catID']."</td>
                        <td>".$row['catName']."</td>
                        <td>".$row['catDescription']."</td>
                        <td>
                        </td>
                        
                        </tr>
                        ";
                        // <a href='./src/admin/deleteCategory_src.php?catID=$row[catID]'>
                        // <input name='delete' type='submit' value='Delete'></a>
                    }
                }

                // if the Categories table Empty display O
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