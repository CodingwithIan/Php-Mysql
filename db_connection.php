<?php
$host="localhost";
$user="root";
$pass="";
$db_name="safari_sacco";
//create variable for connection
$connection=mysqli_connect($host,$user,$pass,$db_name);
//check if connection failed
if (!isset($connection)){
    die("db connection failed");
}
