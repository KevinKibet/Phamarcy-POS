<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $dbh->prepare("DELETE FROM purchases WHERE transaction_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>