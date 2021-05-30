<?php

if (isset($_GET["catID"])) {

    $catID = $_GET["catID"];

    include_once("../dbConfig.php");

    
    $sql = mysqli_query($conn, "DELETE
                                FROM Category
                                WHERE catID='" . $catID . "' 
                                 ");

    mysqli_close($conn);


    header("location: ../../admin.php");
}
else {
    header("location: ../../index.php");
}

?>