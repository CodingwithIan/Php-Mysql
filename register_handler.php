<?php
//check if button has been clicked
if (isset($_POST["rgn_btn"])){
    //start to get data from user
    $name=$_POST["name_1"];
    $email=$_POST["email_1"];
    $password=$_POST["password_1"];
    //connect to database to start receiving data
    require_once "db_connection.php";
    //prepare the insert query to save
    $insertQuery="INSERT INTO `users`(`id`, `Jina`, `Arafa`, `Siri`) 
                        VALUES (null,'$name','$email','$password')";
    //finally use mysql_query to execute the insert query
    //execute insert query
    $execute=mysqli_query($connection,$insertQuery);
    //check if saving was successful
    if (isset($execute)){
        echo "<script>alert('user registration successful')</script>";

    }
    else{
        echo "<script>alert('user registration failed')</script>";
    }
}