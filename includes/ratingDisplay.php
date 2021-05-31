<?php
    include_once 'dbcon.php'; //including the Data Base handler 
?>
<?php

    $UserSQL = "SELECT * FROM feedback;"; //WHERE user_id = '$loggedUser'
    $User_Result = mysqli_query($conn, $UserSQL);
    $UserCheck_rows = mysqli_num_rows($User_Result);

    $UserAdDetails = array();
    if($UserCheck_rows > 0){
        while($Raw_data = mysqli_fetch_assoc($User_Result)){
            $UserAdDetails[] = $Raw_data;
        }
    }
    $count = "0";
    $loop_data =0;
    $count_Result = mysqli_query($conn, $UserSQL);
    $count_rows = mysqli_num_rows($count_Result);
    
?>