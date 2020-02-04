<?php

$conn = mysqli_connect("localhost","root","","student");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Peer Review</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<em>
<?php  include('nav.inc'); ?>

<?php  include('banner.inc'); ?>
</em>


<hr>
<h2 class="text-center"><em>Peer Reveiw</em></h2>
<div id="pageTitleDiv" class="pageTitle clearfix "> 
<div id="pageTitleBar" class="pageTitleIcon" tabindex="0">
  <h1 class="text-center" id="pageTitleHeader" tabindex="-1" ><em>Upload Student Files</em></h1>

</div>
</div>
<hr>
  <div class="container">
  <div class="row text-center">
    <div class="col-sm-12 col-xs-8">
      <div class="thumbnail">
      <em> 
      <img src="images/students.jpg" alt="Thumbnail Image 1" class="img-responsive">
      </em>
       <em>
        <div class="caption">
          <h3>Upload CSV File Here</h3>
          	<form action="insert.php" method="post" enctype="multipart/form-data" >
          	<input type="file" name="csvfile" required = "required"  alt="Submit"  class="btn btn-primary" role="button" class="glyphicon " aria-hidden="true">
            <input type="submit" value="Upload" name="submit" class="btn btn-primary" role="button" class="glyphicon " aria-hidden="true">
       </em>
          </form>
        </div>
     </div>
	</div>
     
          
		</div>
      </div>
    
<em>
</div>
</em>
<hr>
<em>
<?php  include('footer.inc'); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
 </em>
</body>
</html>