
<!DOCTYPE html>
<html>
    <head>
        <title>PHP insertion</title>
        <link href="insert.css" rel="stylesheet">
    </head>
    <body>
        <div class="maindiv">
        <!--HTML Form -->
        <div class="form_div">
        <div class="title">

        </div>
        <form action="viewclientdetails.php" method="post">
            <!-- Method can be set as POST for hiding values in URL-->
            <h2>Client Details</h2>

            <label>Subject Code</label>
            <input class="input" name="subjectCode" type="text" value="">

            <label>Team Name:</label>
            <input class="input" name="teamName" type="text" value="">


            <label>Client Name:</label>
            <input class="input" name="clientName" type="text" value="">

            <label>Client Email:</label>
            <input class="input" name="clientEmail" type="text" value="">

            <label>Client Phone Number:</label>
            <input class="input" name="clientPhoneNumber" type="text" value="">

            <input class="submit" name="submit" type="submit" value="Insert">
        </form>
        </div>
        </div>
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

