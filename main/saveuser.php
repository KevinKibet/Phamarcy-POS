<?php
//Database Configuration File
include('../connect.php');
error_reporting(0);

$error_array = array(); 

if(isset($_POST['signup']))
{
//Getting Post Values
$fullname=$_POST['fname'];  
$username=$_POST['username']; 
$email=$_POST['email']; 
$mobile=$_POST['mobilenumber'];
$position = $_POST['position'];
$password=$_POST['password'];
$password2 = $_POST['password_confirm'];
$hasedpassword=hash('sha256',$password);
// Query for validation of username and email-id
$ret="SELECT * FROM userdata where (UserName=:uname ||  UserEmail=:uemail)";
$queryt = $dbh -> prepare($ret);
$queryt->bindParam(':uemail',$email,PDO::PARAM_STR);
$queryt->bindParam(':uname',$username,PDO::PARAM_STR);
$queryt -> execute();
$results = $queryt -> fetchAll(PDO::FETCH_OBJ);
if($queryt -> rowCount() == 0)
{
// Query for Insertion
$sql="INSERT INTO userdata(FullName,UserName,UserEmail,UserMobileNumber,LoginPassword,Position) VALUES(:fname,:uname,:uemail,:umobile,:upassword,:uposition)";
$query = $dbh->prepare($sql);
// Binding Post Values
$query->bindParam(':fname',$fullname,PDO::PARAM_STR);
$query->bindParam(':uname',$username,PDO::PARAM_STR);
$query->bindParam(':uposition',$position,PDO::PARAM_STR);
$query->bindParam(':uemail',$email,PDO::PARAM_STR);
$query->bindParam(':umobile',$mobile,PDO::PARAM_INT);
$query->bindParam(':upassword',$hasedpassword,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();

if($password != $password2)
{
//$msg="You have signup  Scuccessfully";
 array_push($error_array, "Your passwords do not match<br>");	
  header("Location:adduser.php");
	//$error = "Passwords must match";
}

elseif (empty($error_array)) {
	//$error = "Passwords must match";
	if ($lastInsertId) {
		header("Location:manageusers.php");
	}
	
}    


//}
// else
//{
//$error="Username or Email-id already exist. Please try again";
}
elseif ($queryt -> rowCount() > 0) {
	$message = "Email or Username already exist. Please Try Again! ";
	echo "<script type='text/javascript'>alert('$message') ;

     window.location = 'manageusers.php';
	</script>";
	//header("Location:manageusers.php");
	exit();

}
}
?>
