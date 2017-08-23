<?php
	require 'startsess.php';
	require 'connectdb.php';

	$q = "UPDATE tracking SET track_status = 'Approved' WHERE track_prid = " . $_SESSION['prid'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query approve: ". $errormessage;
		echo '<br>' . $_SESSION['pr1'] . ' ' . $_SESSION['pr2'];
		exit();
	}
	
	header('Location: ../track_table.php');
?>