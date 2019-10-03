<?php

$con = mysqli_connect("localhost","root","","student");

if($con)
{
	
	$file = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($file,"r");
	$i = 0;


	
	$groups = array();
	while(($cont = fgetcsv($handle,1000,",")) !== false) 
	{
		if (!in_array($cont[9], $groups))
		{
			array_push($groups, $cont[9]);
		
			$query_groups = "INSERT INTO groups
			(availyear, speriod, teamno, pname) 
			VALUES('$cont[5]', '$cont[6]','$cont[8]','$cont[9]')";
			echo $query_groups, "<br>";
			mysqli_query($con,$query_groups);
		
		}	
		
		
		$new_token = randStrGen(12);
		$query_students = "INSERT INTO `student_details`(`snum`, `lname`, `fname`, `email`, `scode`, `login`, `pname`,`token`) 
		VALUES('$cont[0]', '$cont[1]','$cont[2]','$cont[3]','$cont[4]','$cont[7]','$cont[9]','$new_token[12]')";
		echo $query_students, "<br>";
		mysqli_query($con,$query_students);
		
		$i++;
	}
	

}
else
{
	echo"connection failed";
}
?>