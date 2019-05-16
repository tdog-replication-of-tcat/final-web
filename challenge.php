<?php
    // $_GET['somecode'] is passed by last page
    if(!$_GET['somecode'] && !$_SESSION['somecode']){
        //滾回去登入
	header('Location: /');
        die('Fuck off');
    }else{
        include('src/utils.php');
    }
?>

<html>
    <head>
        <script>var somecode="<?=$_SESSION['somecode']?>";</script>
        <script src="main.js"></script>
    </head>
    <body>
	<center>
	    <img src="banner.jpg">
            <h1>T狗盃<del>資安</del>競賽</h1>
	    <hr>
            <div>
            <?=get_challenge_name($_GET['id']);?>
            </div>
	    </br>
            <label>答案：</label><input type="textbox" id="answer" length="50" />
            </br></br>
            <input type="hidden" id="cid" value="<?=$_GET['id']?>"/>
            <button onclick="save_answer()">確認送出</button><button onclick="back_to_dashboard()">跳過這題，稍後再答</button>
        </center>
    </body>
</html>
