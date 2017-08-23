<?php
	$q1 = "SELECT * FROM purchase WHERE pr_id = " . $_SESSION['prid'];
	$r1 = pg_query($dbconn, $q1);
	if(!$r1) {
		$errormessage = pg_last_error();
		echo "Error with query pr details: ". $errormessage;
		echo '<br>pr id: ' . $_SESSION['prid'];
		exit();
	}

	$date = pg_fetch_result($r1, 0, 'pr_date');
	$purpose = pg_fetch_result($r1, 0, 'pr_purpose');

	// $q2 = "SELECT * FROM item WHERE item_prnum1 = " . $_SESSION['pr1'] . " AND item_prnum2 = " . $_SESSION['pr2'];
	// $r2 = pg_query($dbconn, $q2);
	// if(!$r2) {
	// 	$errormessage = pg_last_error();
	// 	echo "Error with query pr details: ". $errormessage;
	// 	echo '<br>pr1: ' . $_SESSION['pr1'] . ' pr2:' . $_SESSION['pr2'];
	// 	exit();
	// }

	// $arr2 = pg_fetch_array($r);
	// $date = $arr[3];
	// $purpose = $arr[4];

	echo '<details>
		  <summary align="center">View Details</summary>
		  <p align="center"> Date Made:' . $date .
		  '<br>Purpose: ' . $purpose .
		  '<br>Amount: ' . $_SESSION['pr_amt'] . '</p>
		</details>';
?>