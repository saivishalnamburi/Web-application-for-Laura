<?php

$con = mysqli_connect("localhost","root","","student");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Peer ReveiwPeer Reveiw</title>

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
    
    
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
             <form action = "veiw_student_details_process.php" method = "post">
            <?php

            $conn = mysqli_connect("localhost","root","","student");// database connection

            $sql = "SELECT distinct scode FROM student_details";//Query to select subject code
            $result_subject_code = mysqli_query($conn,$sql);
            echo "Select Subject Code:"; 
            echo '<select name = "subject_code">';
                while ($row = mysqli_fetch_array($result_subject_code)) 
                {
                echo '<option value="' . $row["scode"] . '">' . $row["scode"] . '</option>';  
                    
                }
                
                
            

            echo "</select>";
            
            

            echo "</br>";
            echo "</br>";


            //Selecting study period

            $sql = "SELECT distinct speriod FROM complete_student_details";//Query to select study period
            $result_study_period = mysqli_query($conn,$sql);
            echo "Select Study Period: ";
            echo "<select name = 'study_period'>";
                while ($row = mysqli_fetch_array($result_study_period)) 
                {
                echo "<option value='" . $row['speriod'] .  "'>" . $row['speriod'] . "</option>";
                }

            echo "</select>";

            echo "</br>";
            echo "</br>";


            // Selecting the available year

            $sql = "SELECT distinct availyear FROM complete_student_details";//Query to select Available year
            $result_available_year = mysqli_query($conn,$sql);
            echo "Select Available Year:";
            echo "<select name= 'available_year' >";
                while ($row = mysqli_fetch_array($result_available_year)) 
                {
                echo "<option value='" . $row['availyear'] . "'>" . $row['availyear'] . "</option>"; // t was not working because you had an extra space here 0oh shit
                    
                }

            echo "</select>";

            echo "</br>";
            echo "</br>";




            ?>
            <input type="submit" name="submit" />
        </form>
    </div>
    
  </div>
  
  
</div>
<hr>


<?php  include('footer.inc'); ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>