<?php
	require 'startsess.php';
	require 'connectdb.php';

	if($_SESSION['curr_stat'] == 'Approved') {
		$details = 'PR Approved';
	}else {
		$details = 'PR Declined';
	}

	$q = "UPDATE tracking SET track_details = '$details' WHERE track_prid = " . $_SESSION['prid'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query approve: ". $errormessage;
		echo '<br>' . $_SESSION['pr1'] . ' ' . $_SESSION['pr2'];
		exit();
	}
	
	header('Location: ../track_table.php');
?>