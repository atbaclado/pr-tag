<?php 
	require 'startsess.php';
	require 'connectdb.php';

	$q = "UPDATE tracking SET (track_status, track_details) = ('In Progress', 'PR Received') WHERE track_prid = " . $_SESSION['prid'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query receive: " . $q . $errormessage;
		echo '<br>' . $_SESSION['pr1'] . ' ' . $_SESSION['pr2'];
		exit();
	}
	$_SESSION['flag'] = False;
	header('Location: ../track_table.php');
?>