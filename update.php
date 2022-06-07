<?php
//check if upsdate link has been clicked
if (isset($_GET["u_id"])){
    //start to fetch data from the link
    $receivedName=$_GET["u_name"];
    $receivedEmail=$_GET["u_email"];
    $receivedPassword=$_GET["u_pass"];
    $userId=$_GET["u_id"];
}
else{
    //if user has not clicked the update link,redirect him back to users.php
    header("location:users.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <h1>Updating user</h1>
    <form method="post" action="update_handler.php">
        <input value="<?php echo $userId;?>" name="u_id" type="hidden">
        <input value="<?php echo $receivedName;?>" name="up_name" placeholder="Update name" type="text"><br><br>
        <input value="<?php echo $receivedEmail;?>"name="up_email" placeholder="Update email" type="email"><br><br>
        <input value="<?php echo $receivedPassword;?>" name="up_pass" placeholder="Update password" type="password"><br><br>
        <input name="btn_update" value="update" type="submit">
    </form>
</body>
</html>
