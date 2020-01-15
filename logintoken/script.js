
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
                    