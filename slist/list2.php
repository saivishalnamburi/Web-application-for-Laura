<?php
$conn = mysqli_connect('localhost','root','','student');
$query = "SELECT fname, lname from student_details where pname in (select pname from student_details where login = 'jc487793');";
$result = mysqli_query($conn,$query) or die(mysqli_error());
$items = mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) {
echo '<table border="1">';
$i = 0;
while($row = mysqli_fetch_array($result)){
     $first_name = $row['fname'];
     $lastname = $row['lname'];
           if ($i==0) {
                       echo "<tr>\n";
                      }
           echo "\t<td align=\center\">$first_name  $lastname</td>\n";
           $i++;
           if ($i == $items) {
                              echo "</tr>\n";
                              $i = 0;
                              }
 }
 echo '</table>';
 }else {

   echo 'no records found';
 }


?>

