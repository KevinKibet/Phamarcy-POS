<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	//if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
	//if(!isset($_SESSION['SESS_MEMBER_ID'])){
	if(!isset($_SESSION['SESS_FIRST_NAME']) ){
	
			header("location: ../index.php");
		    exit();
		
		
//	}elseif (!isset($_SESSION['SESS_FIRST_NAME']) && isset($_SESSION['SESS_LAST_NAME']== ) ) {
		//header("location: ../index.php");
		//exit();
	}
?>