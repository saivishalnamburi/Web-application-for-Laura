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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "student";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM student_details order by pname ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>Student Number</th> <th>Last Name</th> <th>First Name</th> <th>Student Email</th> <th>Subject Code</th><th>JC Number</th><th>Project Name</th><th>Token</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["snum"]. "</td><td>" . $row["lname"]. "</td><td> " . $row["fname"]. " </td><td>" . $row["email"]. "</td><td> " . $row["scode"]. "</td> <td> " . $row["login"]. "</td> <td> " . $row["pname"]. "</td><td> " . $row["token"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>

    </body>
</html>