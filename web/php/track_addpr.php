<?php 
	require 'startsess.php';
	require 'connectdb.php';

	// track_prnum1 | track_office | track_prnum2 | track_status | track_flow | track_order

	$q1 = "INSERT INTO tracking VALUES (" . $_SESSION['user_ofc'] . ", 'Pending', " . $_SESSION['user_ofc'] . ", 1, 'Newly Added PR', 'f', " . $_SESSION['prid'] . " )";
	$r1 = pg_query($dbconn, $q1);
	if(!$r1) {
		$errormessage = pg_last_error();
		echo "Error with query add pr: ". $errormessage;
		exit();
	}

	// $q2 = "SELECT user_position FROM users WHERE user_name =' " . $_SESSION['username'] . "'";
	// $r2 = pg_query($dbconn, $q2);
	// $pos = pg_fetch_result($r2, 0, 'user_position');
	// if(!$r2) {
	// 	$errormessage = pg_last_error();
	// 	echo "Error with query print name: ". $errormessage;
	// 	exit();
	// }
	header('Location: ../track_table.php');

?>