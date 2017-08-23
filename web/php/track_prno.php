<?php
	require 'connectdb.php';
	require 'startsess.php';

	$year = $_POST[year];
	$month = $_POST[month];
	$seq = $_POST[seq];
	$id = $_SESSION['prid'];

	$r1 = pg_query($dbconn, "SELECT pr_number2 FROM purchase where pr_number2 = $seq");
	if(!$r1) {
		$errormessage = pg_last_error();
		echo "Error with get prno: ". $errormessage;
		exit();
	}

	$row = pg_num_rows($r1);
	if($row > 0 || $year != $_SESSION['year'] || $month != $_SESSION['month']) {
		$_SESSION['err_prno'] = True;
	}else {
		$pr1 = $_SESSION['prnum1'];
		$pr2 = $seq;
		$r2 = pg_query($dbconn, "UPDATE purchase SET (pr_number1, pr_number2) = ($pr1, $pr2) WHERE pr_id = $id");
		if(!$r2) {
			$errormessage = pg_last_error();
			echo "Error with chk seq: ". $errormessage;
			exit();
		}
	}

	header('Location: php/track_send.php');

?>