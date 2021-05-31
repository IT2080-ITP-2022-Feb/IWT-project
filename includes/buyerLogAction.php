<?php
    include_once 'dbcon.php'; //including the Data Base handler 
?>

<?php
    if (isset($_POST['logSub'])) {

        $username = $_POST['email'];
        $password = $_POST['psw'];

        $UserSQL = "SELECT * FROM buyer;";
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

        while($loop_data = mysqli_fetch_assoc($count_Result)){
            $id = $UserAdDetails[$count]['B_ID'];
            $name = $UserAdDetails[$count]['F_name'];
            $email = $UserAdDetails[$count]['B_email'];
            $Dpassword = $UserAdDetails[$count]['B_Password'];
            $user_type = $UserAdDetails[$count]['user_type'];

            if($email==$username){
                if($Dpassword==$password){

                    session_start();
                    $_SESSION["id"] = $id;
                    $_SESSION["fname"] = $name;
                    $_SESSION["email"] = $email;
                    $_SESSION["role"] = $user_type;
                    header ("Location: ../buyerDashboard.php?login=success");
                }
                else{
                    header ("Location: ../buyerLogin.php?error=Incorrect Password");
                }
            }
            else{
                header ("Location: ../buyerLogin.php?error=Incorrect Email");
                $count=$count+1;
            }
            
        }
    }
?>
