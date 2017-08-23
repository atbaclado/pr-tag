<?php
	require 'startsess.php';
	require 'connectdb.php';

	$q = "UPDATE tracking SET track_details = '" . $_POST['hold'] . "' WHERE track_prid = " . $_SESSION['prid'];
	$_SESSION['set_hold'] = True;
	$_SESSION['hold'] = $_POST['hold'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query inform: ". $errormessage;
		echo '<br>' . $_SESSION['pr1'] . ' ' . $_SESSION['pr2'];
		exit();
	}
	header('Location: ../sending.php');
?>