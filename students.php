<?php

	include('db_conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap eCommerce Template</title>

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

  
  <li id="bbFilePicker_dropzone_newFile" class="dropzone fade">
 <div class="label">
   <label for="newFile_localBrowse">Attach Files
  </label>
  
		<input type="file" name="csvfile" required="required">
		<input type="submit" value="upload">
		
 </div>
  
</li>

<hr>
<h2 class="text-center">Peer Reveiw</h2>
<div id="pageTitleDiv" class="pageTitle clearfix "> 
<div id="pageTitleBar" class="pageTitleIcon" tabindex="0">
  <h1 class="text-center" id="pageTitleHeader" tabindex="-1" ><span id="pageTitleText"></span>Upload Student Files</h1>

</div>
</div>
<hr>

 <div class="container">
  <div class="row text-center">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-6">
      <div class="thumbnail"><img src="3.jpg" alt="Thumbnail Image 1" class="img-responsive">
      <div class="caption">
        <h3>Upload CSV file here</h3>
       <form action="insert.php" method="post" enctype="multipart/form-data">    
 <input type="file" name="csvfile" required = "required" src="1.jpg" alt="Submit"  class="btn btn-primary" role="button" class="glyphicon " aria-hidden="true">
       </form>
       </div>
     </div>
	</div>
     <div class="col-sm-12 col-md-6 col-lg-6 col-xs-6">
      <div class="thumbnail"> <img src="3.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Upload</h3>
		<form action="insert.php" method="post" enctype="multipart/form-data">
  <input type="submit" value="Upload CSV" name="submit" class="btn btn-primary" role="button" class="glyphicon " aria-hidden="true">
		</form>
        </div>
      </div>
    </div> 
  </div>
</div>
<hr>

<?php 	include('footer.inc'); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>