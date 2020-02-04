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