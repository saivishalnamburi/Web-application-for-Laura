<!DOCTYPE html>
<html>
    <head>
        <style>
        table, th, td {
            border: 1px solid black;
        }
        </style>
    </head>
    <body>

    <?php
    //print_r ($_POST);



    if ( isset( $_POST['submit'] ) ) {
        //is submitted
        $subject_code = $_POST['subject_code'];
        $available_year = $_POST['available_year'];
        $study_period = $_POST['study_period'];
        //echo "$subject_code";echo "</br>";
        //echo "$available_year";echo "</br>";
        //echo "$study_period";echo "</br>";

        //Create a connection
        $conn = mysqli_connect("localhost", "root", "", "student");
        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


        //query to view student details
        $sql = "SELECT `snum`, `lname`, `fname`, `email`,  `login`, `teamno`, `pname`, `token` FROM `student_details` 
                WHERE scode = '$subject_code' AND speriod = '$study_period' AND availyear = '$available_year'  order by teamno ASC";
        $result = $conn->query($sql);

         if ($result->num_rows > 0) {
                echo "<table><tr><th>Student Number</th> <th>Last Name</th> <th>First Name</th> <th>Student Email</th> <th>JC Number</th><th>Team Number</th><th>Project Name</th><th>Unique Token</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["snum"]. "</td><td>" . $row["lname"]. "</td><td> " . $row["fname"]. " </td><td>" . $row["email"]. "</td><td> " . $row["login"]. "</td><td> " . $row["teamno"]. "</td><td> " . $row["pname"]. "</td><td> " . $row["token"]. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
    }
    $conn->close();





    ?>


    </body>
</html>
