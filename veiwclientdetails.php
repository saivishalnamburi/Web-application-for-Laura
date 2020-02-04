<!DOCTYPE html>
<html>
    <head>
        <style>
        table{
              border-collapse: collapse;
              width: 100%;
              }

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
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
<?php
$conn = mysqli_connect("localhost", "root", "", "student"); // Establishing Connection with Server

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