<?php
    $title = 'Add Category'; include("header.php");
    
    if ($_SESSION["role"] !== 'admin') {
        header("location: ./index.php");
        exit();
    }
?>

<link rel="stylesheet" href="./css/addCategory.css">


<?php
    if (isset($_POST["addCat"])) {
        $catName = $_POST["catName"];
        $catDescription = $_POST["catDescription"];

        // Add Category
    $sql = "INSERT INTO Category
        (catID, catName, catDescription) 
    VALUES
        ('', '$catName', '$catDescription');";

    if (mysqli_query($conn, $sql)) {
    // echo "<script>alert ('Successfully Sign Up')</script>";
    header("location: ./admin.php");
    }
    else {
        echo "<script>alert ('Something went wrong :-(')</script>";
    }

    mysql_close($conn);
    }
?>


<!-- Thushara -->
<!-- Type your code here -->
<section>
    <div class='login-form'>
        <h1 class="main-title">Add Category</h1>
        <br>
        <form action="" method="post">
            <input placeholder='catName' type='text' name='catName'><br>
            <input placeholder='catDescription' type='text' name='catDescription'><br>
            <br>
            <button class='submit-btn' type="submit" name="addCat">Add Category</button>
        </form>
    </div>
</section>



<script src="./js/addCategory.js"></script>
<?php include("footer.php"); ?>