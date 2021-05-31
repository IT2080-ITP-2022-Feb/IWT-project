<?php
    include_once 'dbcon.php'; //including the Data Base handler 
?>

<?php
    if(isset($_POST['prochange'])){

        $ProID = $_POST['username1']; // get the input Id
        $P_file = $_FILES['project_file']; //get the file from Form
        
        //print_r ($P_file);

        $File_name = $_FILES['project_file']['name'];
        $File_type = $_FILES['project_file']['type'];
        $File_tmp_name = $_FILES['project_file']['tmp_name'];
        $File_size = $_FILES['project_file']['size'];
        $File_error = $_FILES['project_file']['error'];
        
        $F_ext = explode('.',$File_name);
        $F_con_ext = strtolower(end($F_ext));
        $allowFile = array('jpg','jpeg','png');

        if(in_array($F_con_ext,$allowFile)){
            if ($File_error === 0){
                if($File_size < 1000000){
                    $new_fileName = uniqid('', true).".".$F_con_ext;
                    $F_location = '../images/upload/'.$new_fileName;
                    move_uploaded_file($File_tmp_name, $F_location);
                    
                    $FASql = "UPDATE buyer SET profilePic = '$F_location' where B_email = '$ProID';"; //Update Status colomn of projecttable
                    mysqli_query($conn, $FASql); //connect to data base
                    
                    
                    header("Location:../buyerDashbord.php?Project_Uploaded=Success"); //re-derect location
                }
                else{
                    header("Location:../buyerDashbord.php?Project_Size=Error"); //re-derect location
                }

            }
            else{
                header("Location:../buyerDashbord.php?Project_File=Error"); //re-derect location
            }
        }
        else{
            header("Location:../buyerDashbord.php?Project_Type=Error"); //re-derect location
        }

    }
?>

<?php
    if(isset($_POST['Name'])){

        $ProEmail = $_POST['username1'];
        $Prochange = $_POST['change'];

        $FASql = "UPDATE buyer SET F_name = '$Prochange' where B_email = '$ProEmail';"; //Update Status colomn of projecttable
        mysqli_query($conn, $FASql); //connect to data base

        header("Location:../buyerDashbordW.php?change=Success"); //re-derect location
    }
    if(isset($_POST['remove1'])){

        $ProEmail = $_POST['username1'];
        $Prochange = '';

        $FASql = "UPDATE buyer SET F_name = '$Prochange' where B_email = '$ProEmail';"; //Update Status colomn of projecttable
        mysqli_query($conn, $FASql); //connect to data base

        header("Location:../buyerDashbordW.php?delete=Success"); //re-derect location
    }
?>
<?php
    if(isset($_POST['Birthday'])){

        $ProEmail = $_POST['username1'];
        $Prochange = $_POST['change'];

        $FASql = "UPDATE buyer SET B_dob = '$Prochange' where B_email = '$ProEmail';"; //Update Status colomn of projecttable
        mysqli_query($conn, $FASql); //connect to data base

        header("Location:../buyerDashbordW.php?change=Success"); //re-derect location
    }
    if(isset($_POST['remove3'])){

        $ProEmail = $_POST['username1'];
        $Prochange = '';

        $FASql = "UPDATE buyer SET B_dob = '$Prochange' where B_email = '$ProEmail';"; //Update Status colomn of projecttable
        mysqli_query($conn, $FASql); //connect to data base

        header("Location:../buyerDashbordW.php?delete=Success"); //re-derect location
    }
?>

<?php
    if(isset($_POST['Contactno'])){

        $ProEmail = $_POST['username1'];
        $Prochange = $_POST['change'];

        $FASql = "UPDATE buyer SET contact = '$Prochange' where B_email = '$ProEmail';"; //Update Status colomn of projecttable
        mysqli_query($conn, $FASql); //connect to data base

        header("Location:../buyerDashbordW.php?change=Success"); //re-derect location
    }
    if(isset($_POST['remove5'])){

        $ProEmail = $_POST['username1'];
        $Prochange = '';

        $FASql = "UPDATE buyer SET contact = '$Prochange' where B_email = '$ProEmail';"; //Update Status colomn of projecttable
        mysqli_query($conn, $FASql); //connect to data base

        header("Location:../buyerDashbordW.php?delete=Success"); //re-derect location
    }
?>