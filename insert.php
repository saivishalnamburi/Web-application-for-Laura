<?php

$con = mysqli_connect("localhost","ictatjcu_subject","123zxc","ictatjcu_subject");

$sql = "SELECT * FROM groups INNER JOIN student_details ON groups.pname = student_details.pname";
$result = mysqli_query($connect, $sql);
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
		VALUES('$cont[0]', '$cont[1]','$cont[2]','$cont[3]','$cont[4]','$cont[7]','$cont[9]','$new_token')";
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

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Data</title> 
</head>

<body>
	<div class="container" style="width:500px;">
	<h3 align="">
	<div class="tabel-responsive">
		<table class="table table-striped">
			<tr>
				<th>groups</th>
				<th>student_details</th>
				
			</tr>
			<?php
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array($result))
				{
					?>
					<tr>
						<td> <?php echo $row["groups"]; ?> </td>
						<td> <?php echo $row["student_details"]; ?> </td>
					</tr>
						?>php
				}
			}
			?>
		</table>
		</div>
		</div>
</body>
</html>
