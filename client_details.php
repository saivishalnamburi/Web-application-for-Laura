<?php


include('connection.php');// Establishing Connection with Server

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$subjectCode = $_POST['subjectCode'];
$teamName = $_POST['teamName'];
$clientName = $_POST['clientName'];
$clientEmail = $_POST['clientEmail'];
$clientPhoneNumber = $_POST['clientPhoneNumber'];
if($clientName !=''||$clientEmail !=''){
//Insert Query of SQL
$query = mysqli_query($conn,"insert into client_details(subject_code, team_name, client_name, client_email, client_phone_number ) values ('$subjectCode', '$teamName', '$clientName', '$clientEmail', '$clientPhoneNumber' )");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
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
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php  include('nav.inc'); ?>

<?php  include('banner.inc'); ?>


<hr>
<h2 class="text-center">Peer Reveiw</h2>
<hr>
<div class="container">
  <div class="row text-center">
  
      <form action="veiwclientdetails.php" method="post">
		
		<h3>Client Details</h3>
		<div class="caption"> 
		
		<h4>Subject Code</h4>
		<input class="input" name="subjectCode" type="text" value="">

		<h4>Team Name:</h4>
		<input class="input" name="teamName" type="text" value="">


		<h4>Client Name:</h4>
		<input class="input" name="clientName" type="text" value="">

		<h4>Client Email:</h4>
		<input class="input" name="clientEmail" type="text" value="">
 
		<h4>Client Phone Number:</h4>
		<input class="input" name="clientPhoneNumber" type="text" value="">
		<br>
		<br>

		<input class="submit" name="Insert" type="submit" class="btn btn-primary" role="button"><span class="glyphicon" aria-hidden="true">
		</form>
   </div>
    </div>
    
    
  </div>
  
  
</div></div></div>
<hr>

<?php  include('footer.inc'); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>