<?php

	include('db_conn.php');

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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<style>
table, th, td {
  border: 1px solid black;
}
</style>

<?php include('nav.inc'); ?>

<?php  include('banner.inc'); ?>


<hr>
<h2 class="text-center">Peer Reveiw</h2>
<hr>
<h2>Team Evaluation Form</h2>
<p>
Please assess yourself and your team members on the following behaviors that have been reported as critical for the successful completion of projects.  Read each statement carefully, and enter the number that indicates the extent to which the person has demonstrated this behavior. Use the following scale:
</p>
<p>
  5 = perfection     4 = almost always    3 = frequently      2 = sometimes   1 = seldom   0 = almost never
</p>

<h2>Citizenship Behaviour</h2>
<table style="width:100%">
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
<!--<tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>-->
</table>

<hr>


<?php 	include('footer.inc'); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="file:///C|/Users/Vishal/Desktop/ondex/js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="file:///C|/Users/Vishal/Desktop/ondex/js/bootstrap.js"></script>
</body>
</html>