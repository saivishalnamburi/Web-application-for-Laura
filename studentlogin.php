<?php
    include('login.php'); // Includes Login Script
    if(isset($_SESSION['login_user'])){
        header("location: profile.php"); // Redirecting To Profile Page
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Peer Reveiw</title>

<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<?php  include('nav.inc'); ?>

<?php  include('banner.inc'); ?>


<hr>
<h2 class="text-center">Peer Reveiw</h2>
<br>
<hr>
<br>
<div id="login">
            <h2>Login Form</h2>
            <form action="login.php" method="post">
                <label>JC Number :</label>
                <input id="name" name="login" placeholder="Enter JC Number" type="text">
                <label>Token :</label>
                <input id="password" name="token" placeholder="Enter Unique Token" type="password"><br><br>
                <input name="submit" type="submit" value=" Login ">
                <span><?php echo $error; ?></span>
            </form>
        </div>



</body>

&nbsp;
<hr>
<?php  include('footer.inc'); ?>


</html>
