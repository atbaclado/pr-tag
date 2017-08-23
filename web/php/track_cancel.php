<?php
	require 'startsess.php';
	require 'connectdb.php';
	
	unset($_SESSION['set_hold']);
	unset($_SESSION['hold']);
	$q = "UPDATE tracking SET (track_status, track_details) = ('In Progress', 'PR Received') WHERE track_prid = " . $_SESSION['prid'];;
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query cancel: ". $errormessage;
		echo '<br>' . $_SESSION['pr1'] . ' ' . $_SESSION['pr2'];
		exit();
	}
	header('Location: ../track_table.php');
?>