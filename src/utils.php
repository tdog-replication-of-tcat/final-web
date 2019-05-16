<?php
session_start();

function is_answered($id){
    // Query DB select * from table where somecode = $_SESS['somecode'] and cid = $id;
    // if rows > 1 return true 
    return rand(0,1) == 1;;
}

function button_color($id){
	if (is_answered($id)){
		return 'background-color: green;';
	}
}

function get_challenge_name($id){
    // Read from JSON or DB?
    return "TODO";
}
