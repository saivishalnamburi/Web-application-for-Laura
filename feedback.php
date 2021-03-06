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
<style>
	table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #99b3ff;
}
</style>	

</head>

<link rel="stylesheet" href="style.css">

<?php include('nav.inc'); ?>

<?php  include('banner.inc'); ?>

<body>
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

                 
                <tr>
                        <th>Teamwork</th>
                    </tr>
                    <tr>
                      <td>Participates in group discussions</td>
                      <td>
                               
                            <select  onchange="findTeamWorkTotal()" type="text" name="teamwork" id="A1">
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
                            <td>Offers ideas/suggestions</td>
                            <td>
                                     
                                    <select  onchange="findTeamWorkTotal()" type="text" name="teamwork" id="A2">
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
                            <td>Is open to criticism/questioning</td>
                            <td>
                                     
                                    <select  onchange="findTeamWorkTotal()" type="text" name="teamwork" id="A3">
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
                            <td>Acknowledges expertise of others</td>
                            <td>
                                     
                                    <select  onchange="findTeamWorkTotal()" type="text" name="teamwork" id="A4">
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
                            <td>Does not dominate group discussions</td>
                            <td>
                                     
                                    <select  onchange="findTeamWorkTotal()" type="text" name="teamwork" id="A5">
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
                            <td>Willing to give and take; flexible</td>
                            <td>
                                     
                                    <select  onchange="findTeamWorkTotal()" type="text" name="teamwork" id="A6">
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
                            <td>Listens attentively to others</td>
                            <td>
                                     
                                    <select  onchange="findTeamWorkTotal()" type="text" name="teamwork" id="A7">
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
                            <td>Follows through on promises/deliverables</td>
                            <td>
                                     
                                    <select  onchange="findTeamWorkTotal()" type="text" name="teamwork" id="A8">
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
                        <td><input type="text" name="total" id="teamworkTotal"/></td> 
                    </tr> 

                <tr>
                        <th>Leadership</th>
                    </tr>
                    <tr>
                      <td>Solicits divergent opinions from others</td>
                      <td>
                               
                            <select  onchange="findLeadershipTotal()" type="text" name="leadership" id="A1">
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
                            <td>Shares leadership with other members</td>
                            <td>
                                     
                                    <select  onchange="findLeadershipTotal()" type="text" name="leadership" id="A2">
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
                            <td>Suggests important issues for discussion</td>
                            <td>
                                     
                                    <select  onchange="findLeadershipTotal()" type="text" name="leadership" id="A3">
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
                            <td>Keeps discussion focused on key issues</td>
                            <td>
                                     
                                    <select  onchange="findLeadershipTotal()" type="text" name="leadership" id="A4">
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
                            <td>Does not wait for assignments from others</td>
                            <td>
                                     
                                    <select  onchange="findLeadershipTotal()" type="text" name="leadership" id="A5">
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
                            <td>Helps others when own work is finished</td>
                            <td>
                                     
                                    <select  onchange="findLeadershipTotal()" type="text" name="leadership" id="A6">
                                    <option value = "0">0
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
                            <td>Pulls project together</td>
                            <td>
                                     
                                    <select  onchange="findLeadershipTotal()" type="text" name="leadership" id="A7">
                                            <option value = "0">0
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
                        <td><input type="text" name="total" id="leadershipTotal"/></td> 
                    </tr> 

                    <tr>
                            <th>Technical Competency</th>
                        </tr>
                        <tr>
                          <td>Can explain own work to others</td>
                          <td>
                                   
                                <select  onchange="findTechCompTotal()" type="text" name="techComp" id="A1">
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
                                <td>Corrects own technical problems</td>
                                <td>
                                         
                                        <select  onchange="findTechCompTotal()" type="text" name="techComp" id="A2">
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
                                <td>Conducts research as needed</td>
                                <td>
                                         
                                        <select  onchange="findTechCompTotal()" type="text" name="techComp" id="A3">
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
                                <td>Accurately generates statistical data</td>
                                <td>
                                         
                                        <select  onchange="findTechCompTotal()" type="text" name="techComp" id="A4">
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
                                <td>Participates in “number crunching”</td>
                                <td>
                                         
                                        <select  onchange="findTechCompTotal()" type="text" name="techComp" id="A5">
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
                            <td><input type="text" name="total" id="techCompTotal"/></td> 
                        </tr> 

                        <tr>
                                <th>Work Product</th>
                            </tr>
                            <tr>
                              <td>Writes in agreed upon style</td>
                              <td>
                                       
                                    <select  onchange="findWorkProductTotal()" type="text" name="workProduct" id="A1">
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
                                    <td>Submitted work is complete</td>
                                    <td>
                                             
                                            <select  onchange="findWorkProductTotal()" type="text" name="workProduct" id="A2">
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
                                    <td>Written work is professional</td>
                                    <td>
                                             
                                            <select  onchange="findWorkProductTotal()" type="text" name="workProduct" id="A3">
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
                                    <td>Oral presentation is well rehearsed</td>
                                    <td>
                                             
                                            <select  onchange="findWorkProductTotal()" type="text" name="workProduct" id="A4">
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
                                    <td>Output consistent with expectations</td>
                                    <td>
                                             
                                            <select  onchange="findWorkProductTotal()" type="text" name="workProduct" id="A5">
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
                                <td><input type="text" name="total" id="workProductTotal"/></td> 
                            </tr> 


                            <tr>
                                    <th>OVERALL EVALUATION</th>
                                </tr>
                                <tr>
                                  <td>Grade you would assign for project contribution (HD, D, C, P, N)</td>
                                  <td>
                                           
                                        <select>
                                          <option value = "HD">HD
                                          <option value = "D">D
                                          <option value = "C">C
                                          <option value = "P">P
                                          <option value = "N">N
                                        </select>
                                  </td>
                                </tr>
                
                                <tr>
                                        <td>Grade you believe they would assign you</td>
                                        <td>
                                                 
                                                <select>
                                                    <option value = "HD">HD
                                                    <option value = "D">D
                                                    <option value = "C">C
                                                    <option value = "P">P
                                                    <option value = "N">N
                                                </select>
                                        </td>                       
                                </tr>
                
                                <tr>
                                        <td>Would you work with him/her again? Y/N</td>
                                        <td>
                                                 
                                                <select>
                                                    <option value = "Yes">Yes
                                                    <option value = "No">No
                                                        
                                        </tr>
                        
                                <tr>
                                        <td>Relative contribution to projects (divide 100 points BETWEEN all your group members – total points allocated = 100)</td>
                                        <td>
                                                <input type="text" name="Relative score" value="">                                              
                                        </td>                       
                                </tr>
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

                    function findTeamWorkTotal(){
                        var arr = document.getElementsByName('teamwork');
                        var tot=0;
                        for(var i=0;i<arr.length;i++){
                            if(parseInt(arr[i].value))
                                tot += parseInt(arr[i].value);
                        }
                        document.getElementById('teamworkTotal').value = tot;
                    }

                    function findLeadershipTotal(){
                        var arr = document.getElementsByName('leadership');
                        var tot=0;
                        for(var i=0;i<arr.length;i++){
                            if(parseInt(arr[i].value))
                                tot += parseInt(arr[i].value);
                        }
                        document.getElementById('leadershipTotal').value = tot;
                    }

                    function findTechCompTotal(){
                        var arr = document.getElementsByName('techComp');
                        var tot=0;
                        for(var i=0;i<arr.length;i++){
                            if(parseInt(arr[i].value))
                                tot += parseInt(arr[i].value);
                        }
                        document.getElementById('techCompTotal').value = tot;
                    }

                    function findTechCompTotal(){
                        var arr = document.getElementsByName('techComp');
                        var tot=0;
                        for(var i=0;i<arr.length;i++){
                            if(parseInt(arr[i].value))
                                tot += parseInt(arr[i].value);
                        }
                        document.getElementById('techCompTotal').value = tot;
                    }

                    function findWorkProductTotal(){
                        var arr = document.getElementsByName('workProduct');
                        var tot=0;
                        for(var i=0;i<arr.length;i++){
                            if(parseInt(arr[i].value))
                                tot += parseInt(arr[i].value);
                        }
                        document.getElementById('workProductTotal').value = tot;
                    }
                    
                </script>           






<script src="file:///C|/Users/Vishal/Desktop/ondex/js/jquery-1.11.3.min.js"></script> 

<script src="file:///C|/Users/Vishal/Desktop/ondex/js/bootstrap.js"></script>
</body>


</html>








