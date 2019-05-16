function some_function(id){
    window.location = '/challenge.php?somecode=' + somecode + '&id=' + parseInt(id);
}

function save_answer(){
    id = parseInt(document.getElementById('cid').value);
    answer = document.getElementById('answer').value;
    window.location = '/answer.php?somecode=' + somecode + '&id=' + parseInt(id) + '&flag=' + btoa(answer);
}

function back_to_dashboard(){
   window.location = '/dashboard.php?somecode=' + somecode;
}

function just_logout(){
   window.location = '/main.php';
}
