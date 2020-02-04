<?php
    session_start();
    $error = '';
    if (isset($_POST['submit'])) {
        if (empty($_POST['login']) || empty($_POST['token'])) {
            $error = "JC-Number or Token is invalid";
        }
        else{
            $login = $_POST['login'];
            $token = $_POST['token'];
            $conn = mysqli_connect('localhost', 'root','','student');
            $query = "SELECT fname from student_details where login=? AND token=? LIMIT 1";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $login, $token);
            $stmt->execute();
            $stmt->bind_result($fname);
            $stmt->store_result();
            if($stmt->fetch()){
            $_SESSION['login_number'] = $login;
            $_SESSION['login_name'] = $fname;
            header("location: profile.php");
            }
        }
        mysqli_close($conn);
    }
?>
