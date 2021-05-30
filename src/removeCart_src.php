<!-- Dilki -->

<?php
    if(isset($_GET['C_ID'])) {
        $C_ID = $_GET['C_ID'];

        include_once("dbConfig.php");
        
        $sql = mysqli_query($conn, "DELETE
                                FROM Cart
                                WHERE C_ID='" . $C_ID . "' 
                                 ");
    }

    header("location: ../cart.php?message=removed");
?>