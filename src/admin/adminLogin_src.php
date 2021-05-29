<!-- Dilki -->

<?php
    include_once("../dbConfig.php");
    
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Get data from Admin Table
        $sql = mysqli_query($conn, "SELECT * FROM Admin
                            WHERE A_email ='" . $email . "' 
                            ");    
        
        $row  = mysqli_fetch_array($sql);
        
        // Checking if email exist in the database
        if (is_array($row)) {
            $user = true;
        }
        else {
            header("location: ../../adminLogin.php?error=wrongusername");
            exit();
        }

        // Checking password
        $A_Password = $row['A_Password'];

        if ($password === $A_Password) {
            $checkPwd = true;
        }
        else {
            header("location: ../../adminLogin.php?error=wrongpassword");
            exit();
        }
        
        // Starting Session
        if ($checkPwd === true) {
            session_start();
            $_SESSION["id"] = $row['A_ID'];
            $_SESSION["fname"] = $row['F_name'];
            $_SESSION["mname"] = $row['M_name'];
            $_SESSION["lname"] = $row['L_name'];
            $_SESSION["email"] = $row['A_email'];
            $_SESSION["role"] = $row['user_type'];

            header("location: ../../admin.php");
            exit();

        mysqli_close($conn);
        }
        
    }
    else {
        header("location: ../../index.php");
    }

?>