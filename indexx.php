
<?php
//require 'main/config.php';
//require 'main/loginhandler.php';

ob_start();
session_start();
include('connect.php');

//$con= mysqli_connect("localhost", "root", "", "sales");
//if(mysqli_connect_errno()){
//	//echo "Failed to Connect".mysqli_connect_errno();
//}



//$errmsg_arr = array();
//$errflag = false;




if(isset($_POST['signin'])){

  //Function to sanitize values received from the form. Prevents SQL injection
	
    
	
	//Sanitize the POST values

	$login = ($_POST['username']);
	
	$password =($_POST['password']);
   
	//Input Validations
	//if($login == '') {
	//	$errmsg_arr[] = 'Username missing';
		//$errflag = true;
	//}
	//if($password == '') {
	//	$errmsg_arr[] = 'Password missing';
	//	$errflag = true;
	//}


  // if($errflag) {
		//$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		//session_write_close();
		//header("Location: index.php");
		//exit();
	//}

//$check_database_query = mysqli_query($con, "SELECT id, username, password, name, position FROM user");
$query =  "SELECT * FROM users";
$check_database_query = $db->prepare($query);
$check_database_query->execute();
//$rows = $check_database_query->fetchAll(PDO::FETCH_ASSOC);

//foreach ($rows as $row) {
	# code...
while($row = $check_database_query->fetch()){
//if($check_database_query){
	//if(mysqli_num_rows($check_database_query) > 0){
	if($row['username']== $login && $row['password'] == $password){
	//	$row = mysqli_fetch_assoc($con, $check_database_query);
        session_start();
		$_SESSION['SESS_MEMBER_ID'] = $row['id'];
		$_SESSION['SESS_FIRST_NAME'] = $row['name'];
		$_SESSION['SESS_LAST_NAME'] = $row['position'];
       
         header("Location: main/index.php");
			exit();
	}else{
		header("Location: index.php");
		exit();
	}
}






}


?>

<!DOCTYPE html>
<html>
<head>
<title>
POS
</title>
    <link rel="shortcut icon" href="main/images/pos.jpg">

  <link href="main/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="main/css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="main/css/bootstrap-responsive.css" rel="stylesheet">

<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container-fluid">
      <div class="row-fluid">
		<div class="span4">
		</div>
	
</div>
<div id="login">
	
	<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}



?>

<form  action = "<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	<font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;"><center>Pharmacy POS</center></font>
		<br>
	
<div class="input-prepend">
		<span style="height:30px; width:25px;" class="add-on"><i class="icon-user icon-2x"></i></span>
		<input style="height:40px;" type="text" name="username" Placeholder="Username" required/><br>
</div>
<div class="input-prepend">
	<span style="height:30px; width:25px;" class="add-on"><i class="icon-lock icon-2x"></i></span>
	<input type="password" style="height:40px;" name="password" Placeholder="Password" required/><br>
</div>
<div class= "qwe">
	<button class="btn btn-large btn-primary btn-block pull-right" name = "signin" type="submit"><i class="icon-signin icon-large"></i> Login</button>
</div>


</form>
</div>
</div>
</div>
</div>
</body>
</html>