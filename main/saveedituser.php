


<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$fullname=$_POST['fname'];  
$username=$_POST['username']; 
$email=$_POST['email']; 
$mobile=$_POST['mobilenumber'];
$position = $_POST['position'];
$password=$_POST['password'];
$password2 = $_POST['password_confirm'];
$hasedpassword=hash('sha256',$password);



// query
$sql = "UPDATE userdata 
        SET FullName=?, UserName=?, UserEmail=?, UserMobileNumber=?, LoginPassword=?, Position=?
		WHERE id=?";
$q = $dbh->prepare($sql);
$q->execute(array($fullname,$username,$email,$mobile,$hasedpassword,$position,$id));
header("location: manageusers.php");

?>