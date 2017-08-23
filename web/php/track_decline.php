<?php
	require 'startsess.php';
	require 'connectdb.php';

	$q = "UPDATE tracking SET track_status = 'Declined' WHERE track_prid = " . $_SESSION['prid'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo '<br>' . $_SESSION['pr1'] . ' ' . $_SESSION['pr2'];
		echo "Error with query decline: ". $errormessage;
		exit();
	}
	header('Location: ../track_table.php');
?>