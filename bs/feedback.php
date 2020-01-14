<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Feedback Form</title>
    
  </head>
  <body class = "container">
    
      
      
      
             <div class="wrapper">
            <div class="container-fluid">

                <div class="row m-t-20">

                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0 m-b-30" align="center">Team Evaluation Form</h4>
                            <div class="row" "container">Please assess yourself and your team members on the following behaviors that have been reported as critical for the successful completion of projects. Read each statement carefully, and enter the number that indicates the extent to which the person has demonstrated this behavior. Use the following scale:<br><br>
                            5 = perfection 4 = almost always 3 = frequently 2 = sometimes 1 = seldom 0 = almost never
                            </div>
                            
<?php
                       $conn = mysqli_connect('localhost','root','','student');
                       $query = "SELECT fname, lname, login from student_details where pname in (select pname from student_details where login = 'jc483921')";
                       $result = mysqli_query($conn,$query) or die(mysqli_error());
                       $items = mysqli_num_rows($result);
?>
                            <div class="row m-t-20">
                            <div class="col-12">
                            <table class="table m-t-10">
                                <thead class="thead-light">
                                    <tr><th></th>
<?php
                       if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                                $first_name = $row['fname'];
                                $lastname = $row['lname'];
                                echo "<th style=\"text-align:center;\">{$first_name} {$lastname}</th>";
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c1s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c1s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c1s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c1s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c2s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c2s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c2s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c2s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c3s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c3s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c3s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c3s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c4s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c4s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c4s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c4s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c5s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c5s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c5s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="c5s4">
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
                                    <td align="center" id="output1"></td>
                                    <?php }if($items>=2){?>
                                    <td align="center" id="output2"></td>
                                    <?php }if($items>=3){?>
                                    <td align="center" id="output3"></td>
                                    <?php }if($items>=4){?>
                                    <td align="center" id="output4"></td>
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t1s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t1s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t1s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t1s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t2s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t2s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t2s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t2s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t3s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t3s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t3s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t3s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t4s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t4s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t4s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t4s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t5s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t5s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t5s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t5s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t6s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t6s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t6s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t6s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t7s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t7s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t7s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t7s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t8s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t8s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t8s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="t8s4">
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
                                    <?php }if($items>=2){?>
                                    <td align="center" id="teamwork2"></td>
                                    <?php }if($items>=3){?>
                                    <td align="center" id="teamwork3"></td>
                                    <?php }if($items>=4){?>
                                    <td align="center" id="teamwork4"></td>
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
                                    <td scope="row">Solicits divergent opinions from others	</td>
                                    <?php if($items>=1){?>
                                    <td align="center">
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a1s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a1s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a1s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a1s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a2s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a2s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a2s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a2s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a3s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a3s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a3s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a3s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a4s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a4s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a4s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a4s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a5s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a5s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a5s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a5s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a6s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a6s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a6s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a6s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a7s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a7s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a7s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="a7s4">
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
                                    <?php }if($items>=2){?>
                                    <td align="center" id="Leadership2"></td>
                                    <?php }if($items>=3){?>
                                    <td align="center" id="Leadership3"></td>
                                    <?php }if($items>=4){?>
                                    <td align="center" id="Leadership4"></td>
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b1s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b1s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b1s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b1s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b2s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b2s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b2s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b2s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b3s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b3s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b3s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b3s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b4s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b4s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b4s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b4s4">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b5s1">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b5s2">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b5s3">
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
                                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="b5s4">
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
                                    <?php }if($items>=2){?>
                                    <td align="center" id="tc2"></td>
                                    <?php }if($items>=3){?>
                                    <td align="center" id="tc3"></td>
                                    <?php }if($items>=4){?>
                                    <td align="center" id="tc4"></td>
                                    <?php }?>
                                </tr>
                                </tbody>

                                
                                
                                
                                
                            </table>
                            </div>

                            </div>


                        </div>

                    </div>

                </div>
                <!-- end row -->
                

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      
      <script>
            $("#c1s1,#c2s1,#c3s1,#c4s1,#c5s1").change(function () {
            var a = parseFloat($("#c1s1").val());
            var b = parseFloat($("#c2s1").val());
            var c = parseFloat($("#c3s1").val());
            var d = parseFloat($("#c4s1").val());
            var e = parseFloat($("#c5s1").val());
            var total = a + b + c + d + e;
            $("#output1").text(total).fadeIn();
        });
        $("#c1s2,#c2s2,#c3s2,#c4s2,#c5s2").change(function () {
                var a = parseFloat($("#c1s2").val());
                var b = parseFloat($("#c2s2").val());
                var c = parseFloat($("#c3s2").val());
                var d = parseFloat($("#c4s2").val());
                var e = parseFloat($("#c5s2").val());
                var total = a + b + c + d + e;
                $("#output2").text(total).fadeIn();
        });
        $("#c1s3,#c2s3,#c3s3,#c4s3,#c5s3").change(function () {
                var a = parseFloat($("#c1s3").val());
                var b = parseFloat($("#c2s3").val());
                var c = parseFloat($("#c3s3").val());
                var d = parseFloat($("#c4s3").val());
                var e = parseFloat($("#c5s3").val());
                var total = a + b + c + d + e;
                $("#output3").text(total).fadeIn();
        });
        $("#c1s4,#c2s4,#c3s4,#c4s4,#c5s4").change(function () {
                var a = parseFloat($("#c1s4").val());
                var b = parseFloat($("#c2s4").val());
                var c = parseFloat($("#c3s4").val());
                var d = parseFloat($("#c4s4").val());
                var e = parseFloat($("#c5s4").val());
                var total = a + b + c + d + e;
                $("#output4").text(total).fadeIn();
        });

        $("#t1s1,#t2s1,#t3s1,#t4s1,#t5s1,#t6s1,#t7s1,#t8s1").change(function () {
                var a = parseFloat($("#t1s1").val());
                var b = parseFloat($("#t2s1").val());
                var c = parseFloat($("#t3s1").val());
                var d = parseFloat($("#t4s1").val());
                var e = parseFloat($("#t5s1").val());
                var f = parseFloat($("#t6s1").val());
                var g = parseFloat($("#t7s1").val());
                var h = parseFloat($("#t8s1").val());

                var total = a + b + c + d + e + f + g + h;
                $("#teamwork1").text(total).fadeIn();
        });


            $("#t1s2,#t2s2,#t3s2,#t4s2,#t5s2,#t6s2,#t7s2,#t8s2").change(function () {
                var a = parseFloat($("#t1s2").val());
                var b = parseFloat($("#t2s2").val());
                var c = parseFloat($("#t3s2").val());
                var d = parseFloat($("#t4s2").val());
                var e = parseFloat($("#t5s2").val());
                var f = parseFloat($("#t6s2").val());
                var g = parseFloat($("#t7s2").val());
                var h = parseFloat($("#t8s2").val());

                var total = a + b + c + d + e + f + g + h;
                $("#teamwork2").text(total).fadeIn();
        });


                $("#t1s3,#t2s3,#t3s3,#t4s3,#t5s3,#t6s3,#t7s3,#t8s3").change(function () {
                var a = parseFloat($("#t1s3").val());
                var b = parseFloat($("#t2s3").val());
                var c = parseFloat($("#t3s3").val());
                var d = parseFloat($("#t4s3").val());
                var e = parseFloat($("#t5s3").val());
                var f = parseFloat($("#t6s3").val());
                var g = parseFloat($("#t7s3").val());
                var h = parseFloat($("#t8s3").val());

                var total = a + b + c + d + e + f + g + h;
                $("#teamwork3").text(total).fadeIn();
        });

          $("#t1s4,#t2s4,#t3s4,#t4s4,#t5s4,#t6s4,#t7s4,#t8s4").change(function () {
                var a = parseFloat($("#t1s4").val());
                var b = parseFloat($("#t2s4").val());
                var c = parseFloat($("#t3s4").val());
                var d = parseFloat($("#t4s4").val());
                var e = parseFloat($("#t5s4").val());
                var f = parseFloat($("#t6s4").val());
                var g = parseFloat($("#t7s4").val());
                var h = parseFloat($("#t8s4").val());

                var total = a + b + c + d + e + f + g + h;
                $("#teamwork4").text(total).fadeIn();
        });


          $("#a1s1,#a2s1,#a3s1,#a4s1,#a5s1,#a6s1,#a7s1,#t8s1").change(function () {
                var a = parseFloat($("#a1s1").val());
                var b = parseFloat($("#a2s1").val());
                var c = parseFloat($("#a3s1").val());
                var d = parseFloat($("#a4s1").val());
                var e = parseFloat($("#a5s1").val());
                var f = parseFloat($("#a6s1").val());
                var g = parseFloat($("#a7s1").val());


                var total = a + b + c + d + e + f + g;
                $("#Leadership1").text(total).fadeIn();
        });


          $("#a1s2,#a2s2,#a3s2,#a4s2,#a5s2,#a6s2,#a7s2,#t8s2").change(function () {
                var a = parseFloat($("#a1s2").val());
                var b = parseFloat($("#a2s2").val());
                var c = parseFloat($("#a3s2").val());
                var d = parseFloat($("#a4s2").val());
                var e = parseFloat($("#a5s2").val());
                var f = parseFloat($("#a6s2").val());
                var g = parseFloat($("#a7s2").val());


                var total = a + b + c + d + e + f + g;
                $("#Leadership2").text(total).fadeIn();
        });

          $("#a1s3,#a2s3,#a3s3,#a4s3,#a5s3,#a6s3,#a7s3,#t8s3").change(function () {
                var a = parseFloat($("#a1s3").val());
                var b = parseFloat($("#a2s3").val());
                var c = parseFloat($("#a3s3").val());
                var d = parseFloat($("#a4s3").val());
                var e = parseFloat($("#a5s3").val());
                var f = parseFloat($("#a6s3").val());
                var g = parseFloat($("#a7s3").val());


                var total = a + b + c + d + e + f + g;
                $("#Leadership3").text(total).fadeIn();
        });

          $("#a1s4,#a2s4,#a3s4,#a4s4,#a5s4,#a6s4,#a7s4,#t8s4").change(function () {
                var a = parseFloat($("#a1s4").val());
                var b = parseFloat($("#a2s4").val());
                var c = parseFloat($("#a3s4").val());
                var d = parseFloat($("#a4s4").val());
                var e = parseFloat($("#a5s4").val());
                var f = parseFloat($("#a6s4").val());
                var g = parseFloat($("#a7s4").val());


                var total = a + b + c + d + e + f + g;
                $("#Leadership4").text(total).fadeIn();
        });
          
          $("#b1s1,#b2s1,#b3s1,#b4s1,#b5s1,#a6s1,#a7s1,#t8s1").change(function () {
            var a = parseFloat($("#b1s1").val());
            var b = parseFloat($("#b2s1").val());
            var c = parseFloat($("#b3s1").val());
            var d = parseFloat($("#b4s1").val());
            var e = parseFloat($("#b5s1").val());          
            var total = a + b + c + d + e;
            $("#tc1").text(total).fadeIn();
        });
          
            $("#b1s2,#b2s2,#b3s2,#b4s2,#b5s2,#a6s2,#a7s2,#t8s2").change(function () {
            var a = parseFloat($("#b1s2").val());
            var b = parseFloat($("#b2s2").val());
            var c = parseFloat($("#b3s2").val());
            var d = parseFloat($("#b4s2").val());
            var e = parseFloat($("#b5s2").val());
            var total = a + b + c + d + e;
            $("#tc2").text(total).fadeIn();
            });
          
            $("#b1s3,#b2s3,#b3s3,#b4s3,#b5s3,#a6s3,#a7s3,#t8s3").change(function () {
            var a = parseFloat($("#b1s3").val());
            var b = parseFloat($("#b2s3").val());
            var c = parseFloat($("#b3s3").val());
            var d = parseFloat($("#b4s3").val());
            var e = parseFloat($("#b5s3").val());
            var total = a + b + c + d + e;
            $("#tc3").text(total).fadeIn();
        });
          
          $("#b1s4,#b2s4,#b3s4,#b4s4,#b5s4,#a6s4,#a7s4,#t8s4").change(function () {
            var a = parseFloat($("#b1s4").val());
            var b = parseFloat($("#b2s4").val());
            var c = parseFloat($("#b3s4").val());
            var d = parseFloat($("#b4s4").val());
            var e = parseFloat($("#b5s4").val());
            var total = a + b + c + d + e;
            $("#tc4").text(total).fadeIn();
        });
      </script>
      

    

  
  </body>
</html>