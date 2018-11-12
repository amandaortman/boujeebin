<?php

	DEFINE ('DB_USER','');
	DEFINE ('DB_PASSWORD','');
	DEFINE ('DB_HOST','');
	DEFINE ('DB_NAME','');

	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(mysql_error());

	mysqli_set_charset($dbc, 'uft8');

	// Function for escaping and trimming form data.
	// Takes one argument: the data to be treated (string).
	// Returns the treated data (string).
	function escape_data ($data, $dbc) {
		if (get_magic_quotes_gpc()) {

			// Strip the slashes if Magic Quotes is on:
			$data = stripslashes($data);

			// Apply trim() and mysqli_real_escape_string():
			return mysqli_real_escape_string ($dbc, trim($data));
		}
	} // End of the escape_data() function.

	if($dbc) {
		//echo "Connected";
	}

	$currentPage = basename($_SERVER['PHP_SELF']);
	//echo $currentPage;
?>	