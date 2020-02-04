<?php
    session_start();
    if(!isset($_SESSION['login_name'])){
        header("location: studentlogin.php"); // Redirecting To Home Page
    }
?>
	<!doctype html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>Your Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">

	</head>

	<body class="container">
		<br>
		<div id="profile">
			<b id="welcome">Welcome : <i><?php echo $_SESSION['login_name' ]?></i></b>
			<div class="col text-center">
				<button class="btn btn-default font-weight-bold " id="logout"><a href="logout.php">Log Out</a></button>
			</div>
		</div>




		<div class="wrapper">
			<div class="container-fluid">

				<div class="row m-t-20">

					<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
						<div class="card-box">
							<h4 class="text-dark header-title m-t-0 m-b-30" align="center">Team Evaluation Form</h4>
							<div class="row" "container" align="center">
								<p>Please assess yourself and your team members on the following behaviors that have been reported as critical for the successful completion of projects. Read each statement carefully, and enter the number that indicates the extent to which the person has demonstrated this behavior.</p>
								<b>Use the following scale :</b> <br>
								
								<b> &nbsp;5 = Perfection 4 = Almost always 3 = Frequently 2 = Sometimes 1 = Seldom 0 = Almost never</b> <br>								<br><br>

							</div>

							
							<form action="process.php" method="post">
							<?php
								$conn = mysqli_connect('localhost','root','','student');
								$query = "SELECT fname, lname, login from student_details where pname in (select pname from student_details where login = \"{$_SESSION['login_number']}\")";
								$result = mysqli_query($conn,$query) or die(mysqli_error());
								$items = mysqli_num_rows($result);

								$jc_giving_feedback = "{$_SESSION['login_number']}";//jc number of student givng feedback
								echo "<h5>JC Number of student givng feedback is $jc_giving_feedback</h>";

								echo "<input type = \"hidden\" name= \"jc_giving_feedback\" value=\"$jc_giving_feedback\" >";

								//echo "<input type=\"hidden\" name=\"jcnumber".$i."\" value=\" $jc_number\">";
							?>

						
							
								<div class="row m-t-20">
									<div class="col-12">
										<table class="table m-t-10">
											<thead class="thead-light">
												<tr>
													<th></th>
													<?php
															if (mysqli_num_rows($result) > 0) {
																$i=1;
																	while($row = mysqli_fetch_array($result)){
																		$first_name = $row['fname'];
																		$lastname = $row['lname'];
																		$jc_number = $row['login'];
																	
																		echo "<th style=\"text-align:center;\">{$first_name} {$lastname}  ({$jc_number})</th>";
																		echo "<input type=\"hidden\" name=\"jcnumber".$i."\" value=\" $jc_number\">";
																		
																		$i= $i+1;
																	}
															}
													?>
												</tr>
												<tr>
													<th colspan="<?php echo $items+1;?>">Citizenship Behaviour</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td scope="row">Arrives promptly to group meetings</td>
													<?php if($items>=1){?>
													<td align="center">
														<select type="text" name="citizenshiBehaviour" id="c1s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4      
															<option value = "5">5
															</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c1s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c1s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c1s4">
														<option value = "0">0
														<option value = "1">1
														<option value = "2">2
														<option value = "3">3
														<option value = "4">4
														<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Attends group meetings</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c2s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c2s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c2s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c2s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Completes assigned work on time</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c3s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c3s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c3s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c3s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Is fully prepared for each group meeting</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c4s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c4s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c4s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c4s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Notifies in advance of late/missed meetings</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c5s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c5s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c5s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c5s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row"><b>Subtotal</b></td>
													<?php if($items>=1){?>
													<td align="center" name = "ct1" id="output1"></td>
													<input type="hidden" id="ct1" name = "ct1"/>
													<?php }if($items>=2){?>
													<td align="center" name = "ct2" id="cts2"></td>
													<input type="hidden" id="ct2" name = "ct2"/>
													<?php }if($items>=3){?>
													<td align="center" name = "ct3" id="output3"></td>
													<input type="hidden" id="ct3" name = "ct3"/>
													<?php }if($items>=4){?>
													<td align="center" name = "ct4" id="output4"></td>
													<input type="hidden" id="ct4" name = "ct4"/>
													<?php }?>
												</tr>
											</tbody>

											<thead class="thead-light">
												<tr>
													<th colspan="<?php echo $items+1;?>">Teamwork</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td scope="row">Participates in group discussions</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t1s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t1s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t1s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t1s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Offers ideas/suggestions</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t2s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t2s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t2s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t2s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Is open to criticism/questioning</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t3s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t3s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t3s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t3s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Acknowledges expertise of others</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t4s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t4s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t4s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t4s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Does not dominate group discussions</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t5s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t5s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t5s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t5s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Willing to give and take; flexible</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t6s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t6s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t6s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t6s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Listens attentively to others</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t7s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t7s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t7s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t7s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Follows through on promises/deliverables</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t8s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t8s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t8s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t8s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row"><b>Subtotal</b></td>
													<?php if($items>=1){?>
													<td align="center" id="teamwork1"></td>
													<input type="hidden" id="ts1" name = "ts1"/>
													<?php }if($items>=2){?>
													<td align="center" id="teamwork2"></td>
													<input type="hidden" id="ts2" name = "ts2"/>
													<?php }if($items>=3){?>
													<td align="center" id="teamwork3"></td>
													<input type="hidden" id="ts3" name = "ts3"/>
													<?php }if($items>=4){?>
													<td align="center" id="teamwork4"></td>
													<input type="hidden" id="ts4" name = "ts4"/>
													<?php }?>
												</tr>
											</tbody>


											<thead class="thead-light">
												<tr>
													<th colspan="<?php echo $items+1;?>">Leadership</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td scope="row">Solicits divergent opinions from others </td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a1s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a1s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a1s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a1s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Shares leadership with other members</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a2s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a2s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a2s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a2s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Suggests important issues for discussion</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a3s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a3s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a3s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a3s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Keeps discussion focused on key issues</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a4s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a4s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a4s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a4s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Does not wait for assignments from others</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a5s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a5s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a5s3">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a5s4">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Helps others when own work is finished</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a6s1">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a6s2">
                                        <option value = "0">0
                                        <option value = "1">1
                                        <option value = "2">2
                                        <option value = "3">3
                                        <option value = "4">4
                                        <option value = "5">5
                                        </select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a6s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a6s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Pulls project together</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a7s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a7s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a7s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a7s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>

												<tr>
													<td scope="row"><b>Subtotal</b></td>
													<?php if($items>=1){?>
													<td align="center" id="Leadership1"></td>
													<input type="hidden" id="ls1" name = "ls1"/>
													<?php }if($items>=2){?>
													<td align="center" id="Leadership2"></td>
													<input type="hidden" id="ls2" name = "ls2"/>
													<?php }if($items>=3){?>
													<td align="center" id="Leadership3"></td>
													<input type="hidden" id="ls3" name = "ls3"/>
													<?php }if($items>=4){?>
													<td align="center" id="Leadership4"></td>
													<input type="hidden" id="ls4" name = "ls4"/>
													<?php }?>
												</tr>
											</tbody>


											<thead class="thead-light">
												<tr>
													<th colspan="<?php echo $items+1;?>">Technical Competency</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td scope="row">Can explain own work to others</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b1s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b1s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b1s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b1s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Corrects own technical problems</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b2s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b2s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b2s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b2s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Conducts research as needed</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b3s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b3s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b3s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b3s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Accurately generates statistical data</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b4s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b4s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b4s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b4s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Participates in “number crunching”</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b5s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
																	</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b5s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b5s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b5s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>

												<tr>
													<td scope="row"><b>Subtotal</b></td>
													<?php if($items>=1){?>
													<td align="center" id="tc1"></td>
													<input type="hidden" id="tcs1" name = "tcs1"/>
													<?php }if($items>=2){?>
													<td align="center" id="tc2"></td>
													<input type="hidden" id="tcs2" name = "tcs2"/>
													<?php }if($items>=3){?>
													<td align="center" id="tc3"></td>
													<input type="hidden" id="tcs3" name = "tcs3"/>
													<?php }if($items>=4){?>
													<td align="center" id="tc4"></td>
													<input type="hidden" id="tcs4" name = "tcs4"/>
													<?php }?>
												</tr>
											</tbody>

											<thead class="thead-light">
												<tr>
													<th colspan="<?php echo $items+1;?>">Work Product</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td scope="row">Writes in agreed upon style</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d1s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d1s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d1s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d1s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Submitted work is complete</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d2s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
															</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d2s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d2s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d2s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Written work is professional</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d3s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d3s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d3s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d3s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Oral presentation is well rehearsed</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d4s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d4s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d4s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d4s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Output consistent with expectations</td>
													<?php if($items>=1){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d5s1">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d5s2">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d5s3">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="d5s4">
															<option value = "0">0
															<option value = "1">1
															<option value = "2">2
															<option value = "3">3
															<option value = "4">4
															<option value = "5">5
														</select>
													</td>
													<?php } ?>
												</tr>



												<tr>
													<td scope="row"><b>Subtotal</b></td>
													<?php if($items>=1){?>
													<td align="center"  id="wp1"></td>
													<input type="hidden" id="wps1" name = "wps1"/>
													<?php }if($items>=2){?>
													<td align="center" id="wp2"></td>
													<input type="hidden" id="wps2" name = "wps2"/>
													<?php }if($items>=3){?>
													<td align="center" id="wp3"></td>
													<input type="hidden" id="wps3" name = "wps3"/>
													<?php }if($items>=4){?>
													<td align="center" id="wp4"></td>
													<input type="hidden" id="wps4" name = "wps4"/>
													<?php }?>
												</tr>
											</tbody>


											<thead class="thead-light">
												<tr>
													<th colspan="<?php echo $items+1;?>">OVERALL EVALUATION</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td scope="row">Grade you would assign for project contribution (HD, D, C, P, N)</td>
													<?php if($items>=1){?>
													<td align="center">
														<select name = "ya1" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e1s1">
															<option value = "HD">HD
															<option value = "D">D
															<option value = "C">C
															<option value = "P">P
															<option value = "N">N
														</select>
														<input type="hidden" id="ya1" />
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select name = "ya2" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e1s2">
															<option value = "HD">HD
															<option value = "D">D
															<option value = "C">C
															<option value = "P">P
															<option value = "N">N
														</select>
														<input type="hidden" id="ya2" />
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select name = "ya3" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e1s3">
															<option value = "HD">HD
															<option value = "D">D
															<option value = "C">C
															<option value = "P">P
															<option value = "N">N
														</select>
														<input type="hidden" id="ya3" />
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select  name = "ya4" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e1s4">
															<option value = "HD">HD
															<option value = "D">D
															<option value = "C">C
															<option value = "P">P
															<option value = "N">N
														</select>
														<input type="hidden" id="ya4"/>
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Grade you believe they would assign you</td>
													<?php if($items>=1){?>
													<td align="center">
														<select name = "ta1" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e2s1">
															<option value = "HD">HD
															<option value = "D">D
															<option value = "C">C
															<option value = "P">P
															<option value = "N">N
														</select>
														<input type="hidden" id="ta1" />
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select  name = "ta2" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e2s2">
															<option value = "HD">HD
															<option value = "D">D
															<option value = "C">C
															<option value = "P">P
															<option value = "N">N
														</select>
														<input type="hidden" id="ta2"/>
														
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select name = "ta3" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e2s3">
															<option value = "HD">HD
															<option value = "D">D
															<option value = "C">C
															<option value = "P">P
															<option value = "N">N
														</select>
														<input type="hidden" id="ta3" />
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select name = "ta4" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e2s4">
															<option value = "HD">HD
															<option value = "D">D
															<option value = "C">C
															<option value = "P">P
															<option value = "N">N
														</select>
														<input type="hidden" id="ta4" />
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">Would you work with him/her again? Y/N</td>
													<?php if($items>=1){?>
													<td align="center">
														<select  name = "wa1" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e3s1">
															<option value = "Yes">Yes
															<option value = "No">No
														</select>
														<input type="hidden" id="wa1"/>
													</td>
													<?php }if($items>=2){?>
													<td align="center">
														<select name = "wa2" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e3s2">
															<option value = "Yes">Yes
															<option value = "No">No
														</select>
														<input type="hidden" id="wa2" />
													</td>
													<?php }if($items>=3){?>
													<td align="center">
														<select name = "wa3" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e3s3">
															<option value = "Yes">Yes
															<option value = "No">No
														</select>
														<input type="hidden" id="wa3" />
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<select name = "wa4" onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="e3s4">
															<option value = "Yes">Yes
															<option value = "No">No
														</select>
														<input type="hidden" id="wa4" />
													</td>
													<?php } ?>
												</tr>
												<tr>
													<td scope="row">
														Relative contribution to projects (divide 100 points BETWEEN all your group members – total points allocated = 100)
													</td>
													<?php if($items>=1){?>
													<td align="center" style="width: 10% !important;">
														<input type="text" name = "c1" value="" maxlength="3" size="3" id="e4s1" width: 10% !important>
														<input type="hidden" id="c1" />
													</td>
													<?php }if($items>=2){?>
													<td align="center"
                                                        style="width: 10% !important;">
														<input type="text" name = "c2" value="" maxlength="3" size="3" id="e4s2" width="20px" width: 10% !important>
														<input type="hidden" id="c2" />
													</td>
													<?php }if($items>=3){?>
													<td align="center"
                                                        style="width: 10% !important;">
														<input type="text" name = "c3" value="" maxlength="3" size="3" id="e4s3"  width: 10% !important>
														<input type="hidden" id="c3" />
													</td>
													<?php }if($items>=4){?>
													<td align="center">
														<input type="text" name = "c4" value="" maxlength="3" size="3" id="e4s4"  width: 10% !important>
														<input type="hidden" id="c4" />
													</td>
													<?php } ?>
												</tr>




											</tbody>





										</table>
									</div>

								</div>
							


						</div>

					</div>

				</div>
				<!-- end row -->


			</div>
			<!-- end container -->
		</div>
		<!-- end wrapper -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<script>
			$("#c1s1,#c2s1,#c3s1,#c4s1,#c5s1").change(function() {
				var a = parseFloat($("#c1s1").val());
				var b = parseFloat($("#c2s1").val());
				var c = parseFloat($("#c3s1").val());
				var d = parseFloat($("#c4s1").val());
				var e = parseFloat($("#c5s1").val());
				var total = a + b + c + d + e;
				$("#output1").text(total);
				$("#ct1").val(total);
				//alert($("#ct1").val());
			});



			$("#c1s2,#c2s2,#c3s2,#c4s2,#c5s2").change(function() {
				var a = parseFloat($("#c1s2").val());
				var b = parseFloat($("#c2s2").val());
				var c = parseFloat($("#c3s2").val());
				var d = parseFloat($("#c4s2").val());
				var e = parseFloat($("#c5s2").val());
				var total = a + b + c + d + e;
				$("#cts2").text(total);
				$("#ct2").val(total);
				//alert($("#ct2").val());
			});

			$("#c1s3,#c2s3,#c3s3,#c4s3,#c5s3").change(function() {
				var a = parseFloat($("#c1s3").val());
				var b = parseFloat($("#c2s3").val());
				var c = parseFloat($("#c3s3").val());
				var d = parseFloat($("#c4s3").val());
				var e = parseFloat($("#c5s3").val());
				var total = a + b + c + d + e;
				$("#output3").text(total);
				$("#ct3").val(total);
				//alert($("#cts3").val())
			});

			$("#c1s4,#c2s4,#c3s4,#c4s4,#c5s4").change(function() {
				var a = parseFloat($("#c1s4").val());
				var b = parseFloat($("#c2s4").val());
				var c = parseFloat($("#c3s4").val());
				var d = parseFloat($("#c4s4").val());
				var e = parseFloat($("#c5s4").val());
				var total = a + b + c + d + e;
				$("#output4").text(total);
				$("#ct4").val(total);
				//alert($("#cts4").val())
			});

			$("#t1s1,#t2s1,#t3s1,#t4s1,#t5s1,#t6s1,#t7s1,#t8s1").change(function() {
				var a = parseFloat($("#t1s1").val());
				var b = parseFloat($("#t2s1").val());
				var c = parseFloat($("#t3s1").val());
				var d = parseFloat($("#t4s1").val());
				var e = parseFloat($("#t5s1").val());
				var f = parseFloat($("#t6s1").val());
				var g = parseFloat($("#t7s1").val());
				var h = parseFloat($("#t8s1").val());

				var total = a + b + c + d + e + f + g + h;
				$("#teamwork1").text(total);
				$("#ts1").val(total);
				//alert($("#ts1").val());
			});


			$("#t1s2,#t2s2,#t3s2,#t4s2,#t5s2,#t6s2,#t7s2,#t8s2").change(function() {
				var a = parseFloat($("#t1s2").val());
				var b = parseFloat($("#t2s2").val());
				var c = parseFloat($("#t3s2").val());
				var d = parseFloat($("#t4s2").val());
				var e = parseFloat($("#t5s2").val());
				var f = parseFloat($("#t6s2").val());
				var g = parseFloat($("#t7s2").val());
				var h = parseFloat($("#t8s2").val());

				var total = a + b + c + d + e + f + g + h;
				$("#teamwork2").text(total);
				$("#ts2").val(total);
				//alert($("#ts2").val());
			});


			$("#t1s3,#t2s3,#t3s3,#t4s3,#t5s3,#t6s3,#t7s3,#t8s3").change(function() {
				var a = parseFloat($("#t1s3").val());
				var b = parseFloat($("#t2s3").val());
				var c = parseFloat($("#t3s3").val());
				var d = parseFloat($("#t4s3").val());
				var e = parseFloat($("#t5s3").val());
				var f = parseFloat($("#t6s3").val());
				var g = parseFloat($("#t7s3").val());
				var h = parseFloat($("#t8s3").val());

				var total = a + b + c + d + e + f + g + h;
				$("#teamwork3").text(total);
				$("#ts3").val(total);
				//alert($("#ts3").val());
			});

			$("#t1s4,#t2s4,#t3s4,#t4s4,#t5s4,#t6s4,#t7s4,#t8s4").change(function() {
				var a = parseFloat($("#t1s4").val());
				var b = parseFloat($("#t2s4").val());
				var c = parseFloat($("#t3s4").val());
				var d = parseFloat($("#t4s4").val());
				var e = parseFloat($("#t5s4").val());
				var f = parseFloat($("#t6s4").val());
				var g = parseFloat($("#t7s4").val());
				var h = parseFloat($("#t8s4").val());

				var total = a + b + c + d + e + f + g + h;
				$("#teamwork4").text(total);
				$("#ts4").val(total);
				//alert($("#ts4").val());
			});


			$("#a1s1,#a2s1,#a3s1,#a4s1,#a5s1,#a6s1,#a7s1,#t8s1").change(function() {
				var a = parseFloat($("#a1s1").val());
				var b = parseFloat($("#a2s1").val());
				var c = parseFloat($("#a3s1").val());
				var d = parseFloat($("#a4s1").val());
				var e = parseFloat($("#a5s1").val());
				var f = parseFloat($("#a6s1").val());
				var g = parseFloat($("#a7s1").val());


				var total = a + b + c + d + e + f + g;
				$("#Leadership1").text(total);
				$("#ls1").val(total);
				//alert($("#ls1").val());
			});


			$("#a1s2,#a2s2,#a3s2,#a4s2,#a5s2,#a6s2,#a7s2,#t8s2").change(function() {
				var a = parseFloat($("#a1s2").val());
				var b = parseFloat($("#a2s2").val());
				var c = parseFloat($("#a3s2").val());
				var d = parseFloat($("#a4s2").val());
				var e = parseFloat($("#a5s2").val());
				var f = parseFloat($("#a6s2").val());
				var g = parseFloat($("#a7s2").val());


				var total = a + b + c + d + e + f + g;
				$("#Leadership2").text(total);
				$("#ls2").val(total);
				//alert($("#ls2").val());
			});

			$("#a1s3,#a2s3,#a3s3,#a4s3,#a5s3,#a6s3,#a7s3,#t8s3").change(function() {
				var a = parseFloat($("#a1s3").val());
				var b = parseFloat($("#a2s3").val());
				var c = parseFloat($("#a3s3").val());
				var d = parseFloat($("#a4s3").val());
				var e = parseFloat($("#a5s3").val());
				var f = parseFloat($("#a6s3").val());
				var g = parseFloat($("#a7s3").val());


				var total = a + b + c + d + e + f + g;
				$("#Leadership3").text(total);
				$("#ls3").val(total);
				//alert($("#ls3").val());
			});

			$("#a1s4,#a2s4,#a3s4,#a4s4,#a5s4,#a6s4,#a7s4,#t8s4").change(function() {
				var a = parseFloat($("#a1s4").val());
				var b = parseFloat($("#a2s4").val());
				var c = parseFloat($("#a3s4").val());
				var d = parseFloat($("#a4s4").val());
				var e = parseFloat($("#a5s4").val());
				var f = parseFloat($("#a6s4").val());
				var g = parseFloat($("#a7s4").val());


				var total = a + b + c + d + e + f + g;
				$("#Leadership4").text(total).fadeIn();
				$("#ls4").val(total);
				//alert($("#ls4").val());
			});

			$("#b1s1,#b2s1,#b3s1,#b4s1,#b5s1,#a6s1,#a7s1,#t8s1").change(function() {
				var a = parseFloat($("#b1s1").val());
				var b = parseFloat($("#b2s1").val());
				var c = parseFloat($("#b3s1").val());
				var d = parseFloat($("#b4s1").val());
				var e = parseFloat($("#b5s1").val());
				var total = a + b + c + d + e;
				$("#tc1").text(total);
				$("#tcs1").val(total);
				//alert($("#tc1").val());
			});

			$("#b1s2,#b2s2,#b3s2,#b4s2,#b5s2,#a6s2,#a7s2,#t8s2").change(function() {
				var a = parseFloat($("#b1s2").val());
				var b = parseFloat($("#b2s2").val());
				var c = parseFloat($("#b3s2").val());
				var d = parseFloat($("#b4s2").val());
				var e = parseFloat($("#b5s2").val());
				var total = a + b + c + d + e;
				$("#tc2").text(total);
				$("#tcs2").val(total);
				//alert($("#tc2").val());
			});

			$("#b1s3,#b2s3,#b3s3,#b4s3,#b5s3,#a6s3,#a7s3,#t8s3").change(function() {
				var a = parseFloat($("#b1s3").val());
				var b = parseFloat($("#b2s3").val());
				var c = parseFloat($("#b3s3").val());
				var d = parseFloat($("#b4s3").val());
				var e = parseFloat($("#b5s3").val());
				var total = a + b + c + d + e;
				$("#tc3").text(total);
				$("#tcs3").val(total);
				//alert($("#tc3").val());
			});

			$("#b1s4,#b2s4,#b3s4,#b4s4,#b5s4,#a6s4,#a7s4,#t8s4").change(function() {
				var a = parseFloat($("#b1s4").val());
				var b = parseFloat($("#b2s4").val());
				var c = parseFloat($("#b3s4").val());
				var d = parseFloat($("#b4s4").val());
				var e = parseFloat($("#b5s4").val());
				var total = a + b + c + d + e;
				$("#tc4").text(total);
				$("#tcs4").val(total);
				//alert($("#tc4").val());
			});

			$("#d1s1,#d2s1,#d3s1,#d4s1,#d5s1").change(function() {
				var a = parseFloat($("#d1s1").val());
				var b = parseFloat($("#d2s1").val());
				var c = parseFloat($("#d3s1").val());
				var d = parseFloat($("#d4s1").val());
				var e = parseFloat($("#d5s1").val());
				var total = a + b + c + d + e;
				$("#wp1").text(total);
				$("#wps1").val(total);
				//alert($("#wp1").val());
			});

			$("#d1s2,#d2s2,#d3s2,#d4s2,#d5s2").change(function() {
				var a = parseFloat($("#d1s2").val());
				var b = parseFloat($("#d2s2").val());
				var c = parseFloat($("#d3s2").val());
				var d = parseFloat($("#d4s2").val());
				var e = parseFloat($("#d5s2").val());
				var total = a + b + c + d + e;
				$("#wp2").text(total);
				$("#wps2").val(total);
				//alert($("#wp2").val());
			});

			$("#d1s3,#d2s3,#d3s3,#d4s3,#d5s3").change(function() {
				var a = parseFloat($("#d1s3").val());
				var b = parseFloat($("#d2s3").val());
				var c = parseFloat($("#d3s3").val());
				var d = parseFloat($("#d4s3").val());
				var e = parseFloat($("#d5s3").val());
				var total = a + b + c + d + e;
				$("#wp3").text(total);
				$("#wps3").val(total);
				//alert($("#wp3").val());
				
			});

			$("#d1s4,#d2s4,#d3s4,#d4s4,#d5s4").change(function() {
				var a = parseFloat($("#d1s4").val());
				var b = parseFloat($("#d2s4").val());
				var c = parseFloat($("#d3s4").val());
				var d = parseFloat($("#d4s4").val());
				var e = parseFloat($("#d5s4").val());
				var total = a + b + c + d + e;
				$("#wp4").text(total);
				$("#wps4").val(total);
				//alert($("#wp4").val());
			});

		</script>


		<div class="form-group">
			<label for="exampleFormControlTextarea3" class="font-weight-bold ">
              Would you like to share anything else?
          </label>
			<textarea class="form-control" name="comment" id="exampleFormControlTextarea3" rows="7"></textarea>
			
		</div>
		<br>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<button type="submit" class="btn btn-default font-weight-bold " value="Insert">Submit</button>
				</div>
			</div>
		</div>
		<br>
		<br>

		</form>




		<!-- Footer -->
		<footer class="page-footer font-small blue">
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">© 2020 Copyright: ICT Teanm</div>
			<!-- Copyright -->
		</footer>
		<!-- Footer -->


	</body>

	</html>
