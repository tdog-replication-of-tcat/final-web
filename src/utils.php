<?php
session_start();
require_once 'src/config.php';

function is_answered($id){
    // Query DB select * from table where somecode = $_SESS['somecode'] and cid = $id;
    // if rows > 1 return true 
    if (!$_SESSION['somecode'])
        die('You don\'t have somecode');

    global $db;
    $stmt = $db->prepare("SELECT count(*) FROM `submit_log` WHERE somecode=:somecode and cid=:cid");
    $stmt->execute([
	'somecode' => $_SESSION['somecode'],
        'cid' => $id
    ]);

    $res = intval($stmt->fetch(PDO::FETCH_ASSOC)['count(*)']);

    return $res;
}

function button_color($id){
	if (is_answered($id)){
		return 'background-color: green;';
	}
}

function get_challenge_objects(){
    return json_decode(file_get_contents('src/challenges.json'));
}

function get_challenge_object_for_id($id){
    return get_challenge_objects()[$id];
}

function get_challenge_name($id){
    return get_challenge_object_for_id($id)->name;
}


function save_answer($id, $answer){
    if (!$_SESSION['somecode'])
        die('You don\'t have somecode');

    // Query DB Insert 
    global $db;
    $stmt = $db->prepare('INSERT INTO `submit_log` (`somecode`, `cid`, `flag`) VALUES (:somecode, :cid, :flag)');
    $stmt->execute([
	'somecode' => $_SESSION['somecode'],
        'cid' => $id,
	'flag' => $answer
    ]);
    return true;
}
