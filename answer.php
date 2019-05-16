<?php
    // $_GET['somecode'] is passed by last page
    if(!$_GET['somecode'] && !$_GET['id'] && !$_GET['flag'] && !$_SESSION['somecode']){
        //滾回去登入
	header('Location: /');
        die('Fuck off');
    }else{
        include('src/utils.php');
    }

    $flag = base64_decode($_GET['flag'], true);
    if($flag)
        save_answer(intval($_GET['id']), $flag);
    header('Location: /dashboard.php?somecode=' . $_SESSION['somecode']);
