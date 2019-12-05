
<?php
//Simple Admin Login PHP Script - From: http://coursesweb.net/
session_start();

//Here add users that can login as admin
$admins =[
 ['user'=>'Admin', 'pass'=>'password', 'rank'=>9],
 ['user'=>'admin2', 'pass'=>'pass', 'rank'=>7],
 ['user'=>'admin-3', 'pass'=>'passx', 'rank'=>4]
];

//form to log-in
$re_cnt ='<form action="'. basename($_SERVER['PHP_SELF']) .'" method="post" id="login">
 <label>Name: <input type="text" name="user" id="user" /></label>
 <label>Password: <input type="password" name="pass" id="pass" /></label>
 <input type="submit" value="Send" id="submit" />
</form>';

//to logout
if(isset($_GET['lgo']) && $_GET['lgo']=='logout'){
  if(isset($_SESSION['adminlog'])) unset($_SESSION['adminlog']);
  if(isset($_SESSION['adminrank'])) unset($_SESSION['adminrank']);
  if(isset($_SESSION['adminix'])) unset($_SESSION['adminix']);
  $re_cnt ='<h4>Logged out</h4>' .$re_cnt;
}
else if(isset($_POST['user']) && isset($_POST['pass'])){ //form data sent to log-in
  //check if correct login data
  $err ='<h4>Incorrect User name or Password</h4>';
  $nradm = count($admins);
  for($i=0; $i<$nradm; $i++){
    if($_POST['user']==$admins[$i]['user'] && $_POST['pass']==$admins[$i]['pass']){
      //set session with admin
      $_SESSION['adminlog'] = $admins[$i]['user'];
      $_SESSION['adminrank'] = $admins[$i]['rank'];
      $_SESSION['adminix'] = $i;
      $err ='';
      break;
    }
  }

  //if error, add it to output
  if($err!='') $re_cnt = $err .$re_cnt;
}

//admin loged
if(isset($_SESSION['adminlog']) && isset($_SESSION['adminrank'])){
  //Here you can set /include additional content for logged admin

  $re_cnt ='<h4>Logged</h4>User: '. $_SESSION['adminlog'] .'<br>Rank: '. $_SESSION['adminrank'] .'<br><br><a href="'. basename($_SERVER['PHP_SELF']) .'?lgo=logout" title="Log-Out" id="logout">Log-Out</a>';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, viewport-fit=cover, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="https://mdsso-prod-persistent-bucketmdssostatic-ur3x0twehxyk.s3.amazonaws.com/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://mdsso-prod-persistent-bucketmdssostatic-ur3x0twehxyk.s3.amazonaws.com/stylesheets/style.css">
    <title>Admin Login Portal</title>
        <script type="text/javascript" src="https://js-cdn.dynatrace.com/jstag/1547c029d8c/uwx54400/185fa120f452436d_bs.js" crossorigin="anonymous"></script>
</head>

<body>
    <img class="logo" src="prologin.jpg" />     
<div id="form-wrapper">
    <form id="idp-login" method="post" autocomplete="off" onsubmit="sSwirly('login', '#aaa');">
        <input type="hidden" name="_csrf" value="" />
        <input type="Name" oninput="cWS(this)" onblur="cWS(this)" name="Name" placeholder="Name" value="" required />

        <input type="password" name="password" placeholder="Password" value="" oninput="cWS(this)" onblur="cWS(this)" title="8 characters, 1 lower-case letter, 1 upper-case letter, and 1 number" required />

        <input type="Unique Code" oninput="cWS(this)" onblur="cWS(this)" name="Unique Code" placeholder="Unique Code" value="" required />
        <button type="submit" id="login" form="idp-login" value="Submit">Login</button>
    </form>
</div>
<p><a class="password-reset" href="./passwordreset">Forgot your password?</a></p>
<script type="text/javascript" src="https://mdsso-prod-persistent-bucketmdssostatic-ur3x0twehxyk.s3.amazonaws.com/scripts/utils.js?2019.3.10"></script>
<a href="/" title="CoursesWeb" title="Home Page">Home Page</a>
</body>

</html>