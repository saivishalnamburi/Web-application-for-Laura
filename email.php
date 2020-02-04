<?php

	include('connection.php');

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
<link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<?php include('nav.inc'); ?>

<?php  include('banner.inc'); ?>

 <td colspan="2" style="text-align:center">
 <body>
 
 	<div id="login">
  		<div class="row text-center">
   			
    		<h2>Email</h2>
  		  	
   		  	<div class="col-sm-8 col-md-8 col-lg-8">
      <div class="thumbnail"> <img src="images/email.png" alt="Thumbnail Image" width="305" height="58%" class="img-responsive">
        <form method="post" action="Email/send_mail.php">        
        		<label>Subject </label>
                <input id="name" name="" placeholder="Enter Subject" type="text" name="mail_sub">
       			<br/>
       			<label> Message </label>
       			<input id="name" name="" placeholder="Enter Message" type="text" name="mail_sub">
       				<br><br>
            	<input type="submit" value="Send Email">
        	</form>
      </div>
    </div>
       
	</div>
</div>
       
        
    </body>
 </td>
</tr>
</table>
</form>


<br>
<hr>

<?php  include('footer.inc'); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>