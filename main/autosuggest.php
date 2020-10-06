<?php
   $dbh = new mysqli('localhost', 'root' ,'', 'sales');
	if(!$dbh) {
	
		echo 'Could not connect to the database.';
	} else {
	
		if(isset($_POST['queryString'])) {
			$queryString = $dbh->real_escape_string($_POST['queryString']);
			
			if(strlen($queryString) >0) {
				$sddsdsd='credit';
				$query = $dbh->query("SELECT *  FROM sales WHERE type='$sddsdsd' AND name LIKE '$queryString%' LIMIT 10");
				if($query) {
				echo '<ul>';
					while ($result = $query ->fetch_object()) {
	         			echo '<li onClick="fill(\''.addslashes($result->invoice_number).'\');">'.$result->name.' - '.$result->invoice_number.'</li>';
	         		}
				echo '</ul>';
					
				} else {
					echo 'OOPS we had a problem :(';
				}
			} else {
				// do nothing
			}
		} else {
			echo 'There should be no direct access to this script!';
		}
	}
?>