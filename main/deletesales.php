<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $dbh->prepare("DELETE FROM sales WHERE transaction_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>