<?php
	DEFINE ('DB_USER','root');
	DEFINE ('DB_PASSWORD','');
	DEFINE ('DB_HOST','localhost');
	DEFINE ('DB_NAME','am921588');
	/*DEFINE ('DB_USER','am921588');
	DEFINE ('DB_PASSWORD','BBin2018!');
	DEFINE ('DB_HOST','localhost');
	DEFINE ('DB_NAME','am921588');*/
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());

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