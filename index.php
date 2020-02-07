<?php
    include('login.php'); // Includes Login Script
    if(isset($_SESSION['login_user'])){
        header("location: profile.php"); // Redirecting To Profile Page
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form in PHP with Session</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="login">
            <h2>Login Form</h2>
            <form action="login.php" method="post">
                <label>JC Number :</label>
                <input id="name" name="login" placeholder="Enter JC Number" type="text">
                <label>Token :</label><br><br>
                <input id="password" name="token" placeholder="Enter Unique Token" type="password"><br><br>
                <input name="submit" type="submit" value=" Login ">
                <span><?php echo $error; ?></span>
            </form>
        </div>
    </body>
</html>