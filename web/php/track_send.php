<?php 
	require 'startsess.php';
	require 'connectdb.php';

	$ord = $_SESSION['curr_ord'] + 1;

	echo $ord . '<br>';

	$q1 = "SELECT * FROM office where office_order = $ord";
	$r1 = pg_query($dbconn, $q1);
	if(!$r1) {
		$errormessage = pg_last_error();
		echo "Error with query send 1: ". $errormessage;
		exit();
	}
	$arr = pg_fetch_array($r1);
	$ofc = pg_fetch_result($r1, 0, 'office_num');
	$next = pg_fetch_result($r1, 0, 'office_order');
	$_SESSION['next_ofc'] = $ofc;

	echo $ofc . ' ' . $next . '<br>';

	if($_SESSION['curr_ord'] != $_SESSION['last_ord']) {
		$q = "UPDATE tracking SET (track_status, track_flow, track_order, track_details) = ('Pending', $ofc, $next, 'Sent PR to Next Office') WHERE track_prid = " . $_SESSION['prid'];
	}else {
		$q = "UPDATE tracking SET (track_status, track_details) = ('Approved', 'PR Completed') WHERE track_prid = " . $_SESSION['prid'];
	}

	$r2 = pg_query($dbconn, $q);
	if(!$r2) {
		$errormessage = pg_last_error();
		echo "Error with query send 2: ". $errormessage;
		exit();
	}

	header("Location: ../sending.php");
?>