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

        $sql = "SELECT * FROM client_details";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>Subject Code</th> <th>Team Name</th> <th>Client Name</th> <th>Client Email</th> <th>Client Phone Number</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["subject_code"]. "</td><td>" . $row["team_name"]. "</td><td> " . $row["client_name"]. " </td><td>" . $row["client_email"]. "</td><td> " . $row["client_phone_number"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>

    </body>
</html>