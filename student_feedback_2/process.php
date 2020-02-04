<?php 
//print_r ($_POST);


if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost", "root", "", "student"); // Establishing Connection with Server

    $jc_giving_feedback =  $_POST["jc_giving_feedback"];//student giving feedback
    //details of student one
    $jcnumber1 =  $_POST["jcnumber1"];
    $ct1=$_POST["ct1"];
    $ts1= $_POST["ts1"];
    $ls1 = $_POST["ls1"]; 
    $tcs1= $_POST["tcs1"]; 
    $wps1 = $_POST["wps1"];
    $ya1= $_POST["ya1"];
    $ta1 = $_POST["ta1"];
    $wa1 = $_POST["wa1"];
    $c1 = $_POST["c1"];
    //details of student two
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
    //details of student 3
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
    //details of student 4
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
    //comment VARIABLE
    $comment =  $_POST["comment"];

    //while loop for first student
    while($jcnumber1) {
        
      if($jc_giving_feedback !=''|| $jcnumber1 !='' || $ct1 !=''|| $ts1 !='' || $ls1 !=''|| $tcs1 !='' || $wps1 !=''|| $ya1 !='' || $ta1 !=''|| $wa1 !='' || $c1 !='')
        {
            //insert query into sql
            $query1 = mysqli_query($conn,"insert into student_feedback(jc_receiving_feedback, jc_giving_feedback, cb_total, teamwork_total, leadership_total, tc_total, wp_total, grade_you_would_assign, grade_they_would_assign, work_again, relative_contribution ) VALUES  ($jcnumber1, $jc_giving_feedback, $ct1,$ts1,$ls1,$tcs1,$wps1,$ya1,$ta1,$wa1,$c1)");
            echo "<br/><br/><span>Data of the First student Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> Some Fields are Blank of the First Student....!!</p>";
        }
        
    }  
    // end while loop for first student
    
    //while loop for second student
    while($jcnumber2){
        
        if($jc_giving_feedback !=''|| $jcnumber2 !='' || $ct2 !=''|| $ts2 !='' || $ls2 !=''|| $tcs2 !='' || $wps2 !=''|| $ya2 !='' || $ta2 !=''|| $wa2 !='' || $c2 !='')
        {
            //insert query into sql
            $query2 = mysqli_query($conn,"insert into student_feedback(jc_receiving_feedback, jc_giving_feedback, cb_total, teamwork_total, leadership_total, tc_total, wp_total, grade_you_would_assign, grade_they_would_assign, work_again, relative_contribution ) VALUES  ($jcnumber2, $jc_giving_feedback, $ct2,$ts2,$ls2,$tcs2,$wps2,$ya2,$ta2,$wa2,$c2)");
            echo "<br/><br/><span>Data of the Second student Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> Some Fields are Blank of the Second Student....!!</p>";
        }
        
    }
    //END WHILE LOOP FOR STUDENT 2

    //bEGIN WHILE LOOP FOR THIRD STUDENT
    while($jcnumber3){
        
        if($jc_giving_feedback !=''|| $jcnumber3 !='' || $ct3 !=''|| $ts3 !='' || $ls3 !=''|| $tcs3 !='' || $wps3 !=''|| $ya3 !='' || $ta3 !=''|| $wa3 !='' || $c3 !='')
        {
            //insert query into sql
            $query3 = mysqli_query($conn,"insert into student_feedback(jc_receiving_feedback, jc_giving_feedback, cb_total, teamwork_total, leadership_total, tc_total, wp_total, grade_you_would_assign, grade_they_would_assign, work_again, relative_contribution ) VALUES  ($jcnumber3, $jc_giving_feedback, $ct3,$ts3,$ls3,$tcs3,$wps3,$ya3,$ta3,$wa3,$c3)");
            echo "<br/><br/><span>Data of the Third student Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> Some Fields are Blank of the Third Student....!!</p>";
        }
        
    }
    // END WHILE LOOP FOR THIRD STUDENT

    //BEGIN  WHILE LOOP FOR FOURTH STUDENT
    while($jcnumber4){
        
        if($jc_giving_feedback !=''|| $jcnumber4 !='' || $ct4 !=''|| $ts4 !='' || $ls4 !=''|| $tcs4 !='' || $wps4 !=''|| $ya4 !='' || $ta4 !=''|| $wa4 !='' || $c4 !='')
        
            //insert query into sql
            $query4 = mysqli_query($conn,"insert into student_feedback(jc_receiving_feedback, jc_giving_feedback, cb_total, teamwork_total, leadership_total, tc_total, wp_total, grade_you_would_assign, grade_they_would_assign, work_again, relative_contribution ) VALUES  ($jcnumber4, $jc_giving_feedback, $ct4,$ts4,$ls4,$tcs4,$wps4,$ya4,$ta4,$wa4,$c4)");
            echo "<br/><br/><span>Data of the Fourth student Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> Some Fields are Blank of the Fourth Student....!!</p>";
        }
        
    }
    //ENDS LOOP FOR THE FOURTH STUDENT

    //bEGINS LOOP TO INSERT COMMENTS
    while($comment){
        
        if($jc_giving_feedback !=''|| $comment !='' )
        {
            //insert query into sql
            $query5 = mysqli_query($conn,"insert into project_feedback(jc_giving_feedback, comments ) VALUES  ($jc_giving_feedback,$comment)");
            echo "<br/><br/><span> Student Comments Inserted successfully...!!</span>";
        }
        else
        {
            echo "<p>Insertion Failed <br/> You need to write about your experience in the comment section....!!</p>";
        }
    }
    // ENDS LOOP FOR INSERTING COMMENTS
    
}
    
    

?>