<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sacco users</title>
</head>
<body>
    <h1>SAcco Users</h1>
    <table>
        <tr>
            <th>Names</th>
            <th>Emails</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        //connect to database to start fetching data
        require_once "db_connection.php";
        //prepare the select query
        $selectQuery="SELECT * FROM `users` WHERE 1";
        //use mysqli query to grab data from the users
        $fetchData=mysqli_query($connection,$selectQuery);
        //use a loop to print all the records
        foreach ($fetchData as $user){
            $userName=$user["Jina"];
            $userEmail=$user["Arafa"];
            $userPassword=$user["Siri"];
            $userId=$user["id"];
                        echo "<tr>
            <td>$userName</td>
            <td>$userEmail</td>
            <td> <a href='delete.php?u_id=$userId'>Delete</a></td>
            <td> <a href='update.php?u_id=$userId&u_name=$userName&u_email=$userEmail&u_pass=$userPassword'>Update</a></td>
            
            </tr>";
        }
        ?>
    </table>
</body>
</html>
