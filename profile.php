<?php
    session_start();
    if(!isset($_SESSION['login_name'])){
        header("location: index.php"); // Redirecting To Home Page
    }
?>
	<!doctype html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>Your Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">

	</head>

	<body class="container">
		<br>
		<div id="profile">
			<b id="welcome">Welcome : <i><?php echo $_SESSION['login_name' ]?></i></b>
			<div class="col text-center">
				<button class="btn btn-default font-weight-bold " id="logout"><a href="logout.php">Log Out</a></button>
			</div>
		</div>






	</body>

	</html>
