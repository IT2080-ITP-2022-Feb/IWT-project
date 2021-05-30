<?php
    include_once("../dbConfig.php");
    
    if (isset($_POST["submit"])) {
        $uName = $_POST["uName"];
        $pass = $_POST["pass"];
        
        // Get data from Admin Table
        $sql = mysqli_query($conn, "SELECT * FROM Buyer
                            WHERE B_email ='" . $uName . "' 
                            ");    
        
        $row  = mysqli_fetch_array($sql);
        
        // Checking if email exist in the database
        if (is_array($row)) {
            $user = true;
        }
        else {
            header("location: ../../buyerLogin.php?error=wrongusername");
            exit();
        }

        // Checking password
        $dbPassword = $row['B_Password'];

        if ($pass === $dbPassword) {
            $check = true;
        }
        else {
            header("location: ../../buyerLogin.php?error=wrongpassword");
            exit();
        }
        
        // Starting Session
        if ($check === true) {
            session_start();
            $_SESSION["id"] = $row['B_ID'];
            $_SESSION["fname"] = $row['F_name'];
            $_SESSION["mname"] = $row['M_name'];
            $_SESSION["lname"] = $row['L_name'];
            $_SESSION["email"] = $row['B_email'];
            $_SESSION["role"] = $row['user_type'];

            header("location: ../../buyerDashboard.php");
            exit();

        mysqli_close($conn);
        }
        
    }
    else {
        header("location: ../../index.php");
    }

?>