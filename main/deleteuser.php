<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $dbh->prepare("DELETE FROM userdata WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>