<?php
    include_once 'dbcon.php'; //including the Data Base handler 
?>

<?php
    if(isset($_POST['feedsub'])){

        $email = $_POST['username1']; // get the input Id
        $rate= $_POST['rating']; // get the input Id
        $comment = $_POST['comment']; // get the input Id

        $FeedSql = "INSERT INTO feedback (email,rate,comment) values ('$email','$rate','$comment');";
        mysqli_query($conn, $FeedSql); //connect to data base

        header("Location:../feedback.php?Post=Success"); //re-derect location
    }
?>