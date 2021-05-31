<?php
include_once("../dbConfig.php");

if (isset($_GET["id"])  && isset($_GET["role"])) {

    $id = $_GET["id"];
    $role = $_GET["role"];

    if ($role === 'buyer') {
        $sql = mysqli_query($conn, "DELETE
                                FROM Buyer
                                WHERE B_ID='" . $id . "' 
                                 ");
    } else if($role === 'seller') {
        $sql = mysqli_query($conn, "DELETE
                                FROM Seller
                                WHERE S_ID='" . $id . "' 
                                 ");
    } else if($role === 'admin') {
        $sql = mysqli_query($conn, "DELETE
                                FROM Admin
                                WHERE A_ID='" . $id . "' 
                                 ");
}

    mysqli_close($conn);

    header("location: ../../admin.php");
}
else {
    header("location: ../../index.php");
}

?>