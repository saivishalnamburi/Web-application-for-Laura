<?php

$con = mysqli_connect("localhost","root","","student");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Peer Reveiw</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

</head>

<link rel="stylesheet" href="style.css">

<?php include('nav.inc'); ?>

<?php  include('banner.inc'); ?>


<hr>
<h1 class="text-center">Peer Reveiw</h1>
<hr>
<div class="container">
<div >
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <h1 class="row text-center">Team Evaluation Form</h1>
        <p>
            Please assess yourself and your team members on the following behaviors that have been reported as critical for the successful completion of projects.  Read each statement carefully, and enter the number that indicates the extent to which the person has demonstrated this behavior. Use the following scale:
		</p>
        <p class="row text-center"><b>5 = Perfection     4 = Almost always    3 = Frequently      2 = Sometimes   1 = Seldom   0 = Almost never </b>
            
        </p>
        <table>
                <tr>
                  <th>Teamembers</th>
                  <th>Names</th> 
                </tr>

<body>
<h2>Team Evaluation Form</h2>
<p>
Please assess yourself and your team members on the following behaviors that have been reported as critical for the successful completion of projects.  Read each statement carefully, and enter the number that indicates the extent to which the person has demonstrated this behavior. Use the following scale:
</p>
<p>
  5 = perfection     4 = almost always    3 = frequently      2 = sometimes   1 = seldom   0 = almost never
</p>

<h2>Citizenship Behaviour</h2>
<table>
  <tr>
    <th>Category</th>
    <th>You</th>
    <th>Team Memeber 1</th>
    <th>Team Memeber 2</th>
    <th>Team Memeber 3</th>
 

  </tr>

  <tr>
    <td>Arrives promptly to group meetings</td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">4</option>

      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">4</option>
      </select>
    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">4</option>
      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">4</option>
      </select>
    </td>
  </tr>

  <tr>
    <td>Attends group meetings</td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select>
    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select>
    </td>
  </tr>


  <tr>
    <td>Completes assigned work on time</td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>
    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>
    </td>
  </tr>


  <tr>
    <td>Is fully prepared for each group meeting</td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>
    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>
    </td>
  </tr>

  <tr>
    <td>Notifies in advance of late/missed meetings</td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>
    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>

    </td>
    <td>
      <select name="score">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

      </select>
    </td>
  </tr>

<tr>
    <td>Sum</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
   <tr>
                    <th>Citizenship Behaviour</th><br>
                </tr>
                <tr>
                  <td>Arrives promptly to group meetings</td>
                  <td>
                           
                        <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="A1">
                          <option value = "0">0
                          <option value = "1">1
                          <option value = "2">2
                          <option value = "3">3
                          <option value = "4">4
                          <option value = "5">5
                        </select>
                  </td>
                </tr>

                <tr>
                        <td>Attends group meetings</td>
                        <td>
                                 
                              <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="A2">
                                <option value = "0">0
                                <option value = "1">1
                                <option value = "2">2
                                <option value = "3">3
                                <option value = "4">4
                                <option value = "5">5
                              </select>
                        </td>                       
                </tr>

                <tr>
                        <td>Completes assigned work on time</td>
                        <td>
                                 
                              <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="A3">
                                <option value = "0">0
                                <option value = "1">1
                                <option value = "2">2
                                <option value = "3">3
                                <option value = "4">4
                                <option value = "5">5
                              </select>
                        </td>                       
                </tr>
        
                <tr>
                        <td>Is fully prepared for each group meeting</td>
                        <td>
                                 
                              <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="A4">
                                <option value = "0">0
                                <option value = "1">1
                                <option value = "2">2
                                <option value = "3">3
                                <option value = "4">4
                                <option value = "5">5
                              </select>
                        </td>                       
                </tr>
                <tr>
                        <td>Notifies in advance of late/missed meetings</td>
                        <td>
                                 
                              <select  onchange="findCitizenshipTotal()" type="text" name="citizenshiBehaviour" id="A5">
                                <option value = "0">0
                                <option value = "1">1
                                <option value = "2">2
                                <option value = "3">3
                                <option value = "4">4
                                <option value = "5">5
                              </select>
                        </td>                       
                </tr>
                <tr>
                    <th>Subtotal</th>
                    <td><input type="text" name="total" id="citizenshipTotal"/></td> 
                </tr> 
<!--<tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>-->
</table>
<script type="text/javascript">
                    function findCitizenshipTotal(){
                        var arr = document.getElementsByName('citizenshiBehaviour');
                        var tot=0;
                        for(var i=0;i<arr.length;i++){
                            if(parseInt(arr[i].value))
                                tot += parseInt(arr[i].value);
                        }
                        document.getElementById('citizenshipTotal').value = tot;
                    }

                    
                </script>           


</body>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Team-7 All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
</html>
