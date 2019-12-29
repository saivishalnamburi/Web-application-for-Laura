<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['login']) || empty($_POST['token'])) {
$error = "JC-Number or Token is invalid";
}
else{
// Define $username and $password
$login = $_POST['login'];
$token = $_POST['token'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "student");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT login, token from student_details where login=? AND token=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $login, $token);
$stmt->execute();
$stmt->bind_result($login, $token);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $login; // Initializing Session
header("location: profile.php"); // Redirecting To Profile Page
}
//mysqli_close($conn); // Closing Connection
}
