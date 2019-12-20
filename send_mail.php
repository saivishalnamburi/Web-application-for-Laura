<?php
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
    $user = "root"; 
    $password = ""; 
    $host = "localhost"; 
    $dbase = "test"; 
    $table = "sstud";
    $dbc= mysqli_connect($host,$user,$password, $dbase) 
    or die("Unable to select database");

//Block 5
    $query= "SELECT * FROM $table";
    $result= mysqli_query ($dbc, $query) 
or die ('Error querying database.');

$query= "SELECT * FROM $table";
$result= mysqli_query ($dbc, $query) 
or die ('Error querying database.');

//Block 6
while ($row = mysqli_fetch_array($result)) {

$email= $row['email'];

   
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "harshilrooney@gmail.com";
   $mail ->Password = "";
   
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($email);
 


   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }


}


   

