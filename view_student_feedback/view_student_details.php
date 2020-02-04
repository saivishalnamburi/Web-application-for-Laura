<html>

    <head>
        <title> View Student Form</title>
    </head>
    <body>
        
        <form action = "process_view_student_details.php" method = "post">
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

           $sql = "SELECT distinct speriod FROM student_details";//Query to select subject code
            $result_study_period = mysqli_query($conn,$sql);
            echo "Select Study Period:"; 
            echo '<select name = "study_period">';
                while ($row = mysqli_fetch_array($result_study_period)) 
                {
                echo '<option value="' . $row["speriod"] . '">' . $row["speriod"] . '</option>';  
                    
                }
                
                
            

            echo "</select>";

            echo "</br>";
            echo "</br>";


            // Selecting the available year
            $sql = "SELECT distinct availyear FROM student_details";//Query to select subject code
            $result_available_year = mysqli_query($conn,$sql);
            echo "Select Available Year:"; 
            echo '<select name = "available_year">';
                while ($row = mysqli_fetch_array($result_available_year)) 
                {
                echo '<option value="' . $row["availyear"] . '">' . $row["availyear"] . '</option>';  
                    
                }
                
                
            

            echo "</select>";

            echo "</br>";
            echo "</br>";




            ?>
            <input type="submit" name="submit" />
        </form>
            
    </body>

</html>