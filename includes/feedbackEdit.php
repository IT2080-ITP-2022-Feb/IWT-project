<?php
    include_once '../src/dbConfig.php'; //including the Data Base handler 
?>
<?php
    if(isset($_POST['feedEdit'])){

        $feedEmail = $_POST['emailF'];
        $newcomment = $_POST['editComment'];

        $FeedSql = "UPDATE feedback SET comment = '$newcomment' where email = '$feedEmail';"; //Update Status colomn
        mysqli_query($conn, $FeedSql); //connect to data base

        header("Location:../ratingscore.php?change=Success"); //re-derect location
    }
?>

<?php
    if(isset($_POST['feedDel'])){

        $feedEmail = $_POST['emailF'];

        $FeedSql = "DELETE FROM feedback where email = '$feedEmail';"; //Update Status colomn
        mysqli_query($conn, $FeedSql); //connect to data base

        header("Location:../ratingscore.php?change=Success"); //re-derect location
    }
?>