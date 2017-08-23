<?php
	require 'startsess.php';
	require 'connectdb.php';

	$q = "SELECT * FROM tracking WHERE track_prid = " . $_SESSION['prid'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		$_SESSION['errormsg'] = 'Tracker. ' . $errormessage;
		header('Location: ../err_unexpected.php');
	}
	$row = pg_num_rows($r);

	if($row == 0) {
		header('Location: track_notfound.php');
	}

	$_SESSION['pr_ofc'] = pg_fetch_result($r, 0, 'track_office');
	$_SESSION['curr_stat'] = pg_fetch_result($r, 0, 'track_status');
	$_SESSION['curr_ofc'] = pg_fetch_result($r, 0, 'track_flow');
	$_SESSION['curr_ord'] = pg_fetch_result($r, 0, 'track_order');
	$_SESSION['curr_det'] = pg_fetch_result($r, 0, 'track_details');

	// function chkamt() {
		$q = "SELECT obr_amount FROM obligation WHERE obr_prid = " . $_SESSION['prid'];
		$r = pg_query($dbconn, $q);
		if(!$r) {
			$errormessage = pg_last_error();
			echo "Error with query chkamt: ". $errormessage;
			echo '<br>pr id: ' . $_SESSION['prid'];
			exit();
		}
		$amt = pg_fetch_result($r, 0, 'obr_amount');
		if($amt > 10000) {
			$last = 4;
		}else {
			$last = 3;
		}
		// return $last;
	// }
		$_SESSION['pr_amt'] = $amt;
		$_SESSION['last_ord'] = $last;

	function currently($x, $ord) {
		$ret = '';

		if($_SESSION['curr_stat'] == 'Pending') {
			$color = 'style="background-color: #BCC6CC;"';
		}else if($_SESSION['curr_stat'] == 'In Progress') {
			$color = 'style="background-color: #C19A6B;"';
		}else if($_SESSION['curr_stat'] == 'Declined') {
			$color = 'style="background-color: #F75D59;"';
		}else if($_SESSION['curr_stat'] == 'Approved') {
			$color = 'style="background-color: #89C35C;"';
		}else {
			$color = 'style="background-color: #e7e70d;"';
		}

		if($ord <= $_SESSION['curr_ord']) {
			if($x == 1) {
				$ret = "plan featured";
			}else {
				if($ord == $_SESSION['curr_ord']) {
					$ret = '<span class="most-popular" '. $color . ' >' . $_SESSION['curr_stat'] . '</span>';
				}else {
					$ret = '<span class="most-popular" style="background-color: #89C35C;">Approved</span>';
				}
				
			}
		}else {
			if($x == 1) {
				$ret = "plan";
			}
		}

		echo $ret;
	}

?>