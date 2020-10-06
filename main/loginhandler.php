<?php

$errmsg_arr = array();
$errflag = false;




if(isset($_POST['signin'])){

  //Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	
	//Sanitize the POST values

	$login = clean($_POST['username']);
	$password = clean($_POST['password']);
    
   
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}


   if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("Location: index.php");
		exit();
	}

$check_database_query = mysqli_query($con, "SELECT * FROM user");
while($row = mysqli_fetch_array($check_database_query)) {

	if($row['username']== $login && $row['password'] == $password){
        session_start();
		$_SESSION['SESS_MEMBER_ID'] = $row['id'];
		$_SESSION['SESS_FIRST_NAME'] = $row['name'];
		$_SESSION['SESS_LAST_NAME'] = $row['position'];

         header("Location: main/index.php");
			exit();
	}else{
		header("location: index.php");
			exit();
	}
}

}




?>