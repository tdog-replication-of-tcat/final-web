<?php
    if(!isset($_POST["somecode"])){
        //滾回去登入
	header('Location: /');
        die('Fuck off');
    }else{
        include('src/utils.php');
	$_SESSION['somecode'] = (string)$_POST["somecode"];
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
            <p>請點選下列任一按鈕選擇題目，然後參考題目說明作答。作答後，按鈕將轉變為綠色，如重複作答，將以最後送出答案為準。</br>
            相關競賽規範請聽從現場人員指示。競賽規則請參考官網競賽說明，如有未盡事宜，主辦單位保留修改、調整及最終解釋權之權利。</p>
            <div>
<?php
$wid=5;
$hei=5;

for ($i=0; $i<$hei; $i++){
    for ($j=0; $j<$wid; $j++){
        $id = ($i*$wid+$j);
        echo '<button style="width:50px; height:50px; ' . button_color($id). '" onclick="some_function(' . $id . ')">' . get_challenge_name($id) . '</button>'; 
    }
    echo '</br>';
}
?>
            </div>
            </br></br></br>
            <button>我已完成作答，提前結束考試!</button>
        </center>
    </body>
</html>
