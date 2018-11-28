<?php

//Code to draw from table and display user info
	$id = $_SESSION['user_id'];
	$sql = "SELECT address, address2, city, state, country, zip FROM bb_users WHERE customer_id='$id'";
	$result = mysqli_query($dbc, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)) {
			$_SESSION['st'] = $row['address'];
			$_SESSION['apt'] = $row['address2'];
			$_SESSION['city'] = $row['city'];
			$_SESSION['state'] = $row['state'];
			$_SESSION['country'] = $row['country'];
			$_SESSION['zip'] = $row['zip'];
		}
	}else {
		echo '0 results';
	}
	
?>