<?php
    if(!isset($_GET["somecode"]) && !isset($_SESSION['somecode'])){
        //滾回去登入
	header('Location: /');
        die('Fuck off');
    }else{
        include('src/utils.php');
    }
?>

<html>
    <head>
    </head>
    <body>
	<center>
	    <img src="banner.jpg">
            <h1>T狗盃<del>資安</del>競賽</h1>
	    <hr>
            <div>
            <?=get_challenge_name($_GET['id']);?>
            </div>
            </br></br></br>
            <button></button><button></button>
        </center>
    </body>
</html>
