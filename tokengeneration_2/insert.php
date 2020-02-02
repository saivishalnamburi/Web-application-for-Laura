<?php

$con = mysqli_connect("localhost","root","","student");

if($con)
{
	
	$file = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($file,"r");
	$i = 0;
	
function randStrGen($len)
{
    $result = "";
    $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
    $charArray = str_split($chars);
    for($i = 0; $i < $len; $i++){
	    $randItem = array_rand($charArray);
	    $result .= "".$charArray[$randItem];
    }
    return $result;
}


	
	
	while(($cont = fgetcsv($handle,1000,",")) !== false) 
	{
		
		
		
		$new_token = randStrGen(12);
		$query_students = "INSERT INTO `student_details`(`snum`, `lname`, `fname`, `email`, `scode`, `availyear`, `speriod`, `login`, `teamno`, `pname`, `token`) VALUES ('$cont[0]', '$cont[1]','$cont[2]','$cont[3]','$cont[4]','$cont[5]', '$cont[6]','$cont[7]','$cont[8]','$cont[9]','$new_token')";
		//echo $query_students, "<br>";
		mysqli_query($con,$query_students);
		
		$i++;
	}
    echo  "Data has been succesfully entered in the database ";"<br>";
	

}
else
{
	echo"connection failed";
}
?>