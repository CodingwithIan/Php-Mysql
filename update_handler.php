<?php
//check if the button update has been clicked
if (isset($_POST["btn_update"])){
    //start fetching data from the user
    $updateName=$_POST["up_name"];
    $updateEmail=$_POST["up_email"];
    $updatedPassword=$_POST["up_pass"];
    $userid=$_POST["u_id"];
    //connect to database to return the updated values to the db
    require_once "db_connection.php";
    //prepare update query

    $updateQuery="UPDATE `users` SET `Jina`='$updateName',`Arafa`='$updateEmail',`Siri`='$updatedPassword' WHERE id='$userid'";
    //use mysqli query to execute the update query
    $update=mysqli_query($connection,$updateQuery);
    //check if the update was successsfull
    if (isset($update)){
        //if successful,redirect the user to users.php to see the changes
        header("location:users.php");
    }
    else{
        die("update unsuccessful");
    }

}