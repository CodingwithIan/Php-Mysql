<?php
//check if delete link has been clicked
if (isset($_GET["u_id"])){
    $userId=$_GET["u_id"];
    //connect to db to delete
    require_once "db_connection.php";
    //prepare the delete query
    $deleteQuery="DELETE FROM `users` WHERE id='$userId'";
    //use mysqli query to execute the delete query
    $delete=mysqli_query($connection,$deleteQuery);
    //check if delettion was successful
    if (isset($delete)){
        //redirect user back to users.php to view changes
        header("location:users.php");
        echo "<script>alert('Deletion successful')</script>";
    }
    else{
        die("Deletion failed");
    }
}