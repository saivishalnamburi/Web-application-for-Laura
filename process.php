<?php 

// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

print_r ($_POST);

$conn = mysqli_connect("localhost", "root", "", "student"); // Establishing Connection with Server



if(isset($_POST)){
    if (isset ( $_POST["jcnumber1"]))
    {
        $jc_giving_feedback =  $_POST["jc_giving_feedback"];
        $jcnumber1 =  $_POST["jcnumber1"];
        $ct1=$_POST["ct1"];;
        $ts1= $_POST["ts1"];
        $ls1 = $_POST["ls1"]; 
        $tcs1= $_POST["tcs1"]; 
        $wps1 = $_POST["wps1"];
        $ya1= $_POST["ya1"];
        $ta1 = $_POST["ta1"];
        $wa1 = $_POST["wa1"];
        $c1 = $_POST["c1"];
        if($jc_giving_feedback !=''|| $jcnumber1 !='' || $ct1 !=''|| $ts1 !='' || $ls1 !=''|| $tcs1 !='' || $wps1 !=''|| $ya1 !='' || $ta1 !=''|| $wa1 !='' || $c1 !='')
        {
            //insert query into sql
            $query = mysqli_query($conn,"insert into student_feedback(jc_receiving_feedback, jc_giving_feedback, cb_total, teamwork_total, leadership_total, tc_total, wp_total, grade_you_would_assign, grade_they_would_assign, work_again, relative_contribution ) VALUES  ('$jcnumber1', '$jc_giving_feedback', $ct1,$ts1,$ls1,$tcs1,$wps1,'$ya1','$ta1','$wa1',$c1)");
            echo "insert into student_feedback(jc_receiving_feedback, jc_giving_feedback, cb_total, teamwork_total, leadership_total, tc_total, wp_total, grade_you_would_assign, grade_they_would_assign, work_again, relative_contribution ) VALUES  ($jcnumber1, $jc_giving_feedback, $ct1,$ts1,$ls1,$tcs1,$wps1,$ya1,$ta1,$wa1,$c1)";
            echo $conn->error;
            echo "<br/><br/><span>Data of the First student Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> Some Fields are Blank of the First Student....!!</p>";
        }
        

    }//ends inserting details of first student

    if (isset ( $_POST["jcnumber2"]))
    {
        $jc_giving_feedback =  $_POST["jc_giving_feedback"];
        $jcnumber2 = $_POST["jcnumber2"];
        $ct2 = $_POST["ct2"];
        $ts2 = $_POST["ts2"];
        $ls2 = $_POST["ls2"];
        $tcs2 = $_POST["tcs2"]; 
        $wps2 = $_POST["wps2"];
        $ya2 = $_POST["ya2"];
        $ta2 = $_POST["ta2"];
        $wa2 = $_POST["wa2"]; 
        $c2 = $_POST["c2"];
        if($jc_giving_feedback !=''|| $jcnumber2 !='' || $ct2 !=''|| $ts2 !='' || $ls2 !=''|| $tcs2 !='' || $wps2 !=''|| $ya2 !='' || $ta2 !=''|| $wa2 !='' || $c2 !='')
        {
            //insert query into sql
            $query = mysqli_query($conn,"insert into student_feedback(jc_receiving_feedback, jc_giving_feedback, cb_total, teamwork_total, leadership_total, tc_total, wp_total, grade_you_would_assign, grade_they_would_assign, work_again, relative_contribution ) VALUES  ('$jcnumber2', '$jc_giving_feedback', $ct2,$ts2,$ls2,$tcs2,$wps2,'$ya2','$ta2','$wa2',$c2)");
            echo "<br/><br/><span>Data of the Second student Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> Some Fields are Blank of the Second Student....!!</p>";
        }
        

    }//ends inserting details of the second student

    if (isset ( $_POST["jcnumber3"]))
    {
        $jc_giving_feedback =  $_POST["jc_giving_feedback"];
        $jcnumber3 = $_POST["jcnumber3"];  
        $ct3 = $_POST["ct3"]; 
        $ts3 = $_POST["ts3"];
        $ls3 = $_POST["ls3"]; 
        $tcs3 = $_POST["tcs3"];
        $wps3 = $_POST["wps3"];
        $ya3 = $_POST["ya3"];
        $ta3 = $_POST["ta3"];  
        $wa3 = $_POST["wa3"]; 
        $c3 = $_POST["c3"];
        if($jc_giving_feedback !=''|| $jcnumber3 !='' || $ct3 !=''|| $ts3 !='' || $ls3 !=''|| $tcs3 !='' || $wps3 !=''|| $ya3 !='' || $ta3 !=''|| $wa3 !='' || $c3 !='')
        {
            //insert query into sql
            $query = mysqli_query($conn,"insert into student_feedback(jc_receiving_feedback, jc_giving_feedback, cb_total, teamwork_total, leadership_total, tc_total, wp_total, grade_you_would_assign, grade_they_would_assign, work_again, relative_contribution ) VALUES  ('$jcnumber3', '$jc_giving_feedback', $ct3,$ts3,$ls3,$tcs3,$wps3,'$ya3','$ta3','$wa3',$c3)");
            echo "<br/><br/><span>Data of the Third student Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> Some Fields are Blank of the Third Student....!!</p>";
        }
        

    }//ends inserting details of the third student

    if (isset ( $_POST["jcnumber4"]))
    {
        $jc_giving_feedback =  $_POST["jc_giving_feedback"];
        $jcnumber4 = $_POST["jcnumber4"];  
        $ct4 = $_POST["ct4"]; 
        $ts4 = $_POST["ts4"];
        $ls4 = $_POST["ls4"];
        $tcs4 = $_POST["tcs4"]; 
        $wps4 = $_POST["wps4"];
        $ya4 =  $_POST["ya4"];
        $ta4 = $_POST["ta4"];  
        $wa4 = $_POST["wa4"];; 
        $c4 = $_POST["c4"];
        if($jc_giving_feedback !=''|| $jcnumber4 !='' || $ct4 !=''|| $ts4 !='' || $ls4 !=''|| $tcs4 !='' || $wps4 !=''|| $ya4 !='' || $ta4 !=''|| $wa4 !='' || $c4 !='')
        {
            //insert query into sql
            $query = mysqli_query($conn,"insert into student_feedback(jc_receiving_feedback, jc_giving_feedback, cb_total, teamwork_total, leadership_total, tc_total, wp_total, grade_you_would_assign, grade_they_would_assign, work_again, relative_contribution ) VALUES  ('$jcnumber4', '$jc_giving_feedback', $ct4,$ts4,$ls4,$tcs4,$wps4,'$ya4','$ta4','$wa4',$c4)");
            echo "<br/><br/><span>Data of the Fourth student Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> Some Fields are Blank of the Fourth Student....!!</p>";
        }
        

    }//ends inserting details of the third student

    if (isset ( $_POST["comment"]))
    {
        $jc_giving_feedback =  $_POST["jc_giving_feedback"];
        $comment = $_POST["comment"];  
        
        if($jc_giving_feedback !=''|| $comment !='' )
        {
            //insert query into sql
            $query = mysqli_query($conn,"insert into project_feedback(jc_giving_feedback, comments ) VALUES  ('$jc_giving_feedback','$comment')");
            echo "<br/><br/><span> Student Comments Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> You need to write about your experience in the comment section....!!</p>";
        }
        

    }//ends inserting comments




}//ends submit loop








    

    



/*if (isset ( $_POST["jcnumber1"]))
{
    $jcnumber1 =  $_POST["jcnumber1"];
    $ct1=$_POST["ct1"];;
    $ts1= $_POST["ts1"];
    $ls1 = $_POST["ls1"]; 
    $tcs1= $_POST["tcs1"]; 
    $wps1 = $_POST["wps1"];
    $ya1= $_POST["ya1"];
    $ta1 = $_POST["ta1"];
    $wa1 = $_POST["wa1"];
    $c1 = $_POST["c1"]; 

//$sql = "insert into "; 
//run insert 


}

if (isset($_POST["jcnumber2"]))
{
  $jcnumber2 = $_POST["jcnumber2"];
  $ct2 = $_POST["ct2"];
  $ts2 = $_POST["ts2"];
  $ls2 = $_POST["ls2"];
  $tcs2 = $_POST["tcs2"]; 
  $wps2 = $_POST["wps2"];
  $ya2 = $_POST["ya2"];
  $ta2 = $_POST["ta2"];
  $wa2 = $_POST["wa2"]; 
  $c2 = $_POST["c2"];

  //$sql = "insert into "; 
//run insert 
}

if (isset($_POST["jcnumber3"]))
{
   $jcnumber3 = $_POST["jcnumber3"];  
   $ct3 = $_POST["ct3"]; 
   $ts3 = $_POST["ts3"];
   $ls3 = $_POST["ls3"]; 
   $tcs3 = $_POST["tcs3"];
   $wps3 = $_POST["wps3"];
   $ya3 = $_POST["ya3"];
   $ta3 = $_POST["ta3"];  
   $wa3 = $_POST["wa3"]; 
   $c3 = $_POST["c3"];    
   
   //$sql = "insert into "; 
//run insert 
}

if (isset($_POST["jcnumber4"]))
{
   $jcnumber3 = $_POST["jcnumber4"];  
   $ct4 = $_POST["ct4"]; 
   $ts4 = $_POST["ts4"];
   $ls4 = $_POST["ls4"];
   $tcs4 = $_POST["tcs4"]; 
   $wps4 = $_POST["wps4"];
   $ya4 =  $_POST["ya4"];
   $ta4 = $_POST["ta4"];  
   $wa4 = $_POST["wa4"];; 
   $c4 = $_POST["c4"];  
   
   //$sql = "insert into "; 
//run insert 
}*/




/*


   
       
        $_POST["comment"]; 
  
*/

?>