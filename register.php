<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register page</title>
</head>
<body>
    <h1>Register here</h1>
    <form action="register_handler.php" method="post">
        <input name="name_1"placeholder="Enter Your Name" type="text"><br><br>
        <input name="email_1"placeholder="Enter Your Email" type="email"><br><br>
        <input name="password_1"placeholder="Enter Your password" type="password"><br><br>
        <input name="rgn_btn" value="Register" type="submit"><br><br>
        <a href="users.php">View users</a>

    </form>

</body>
</html>
