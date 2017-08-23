<?php
	// // GET ITEM VALUES 
	require 'connectdb.php';
	require 'startsess.php';

	//qty
	$get_qty = pg_query($dbconn, "select item_quantity from item where item_prid = " . $_SESSION[pr_id]);
		if(!$get_qty) {
			$errormessage = pg_last_error();
			echo "Error with query: ". $errormessage;
			exit();
		} while ($row = pg_fetch_row($get_qty)) {
			$qty[] = $row[0];
	}
	$_SESSION['qty'] = $qty;

	//unit
	$get_unit = pg_query($dbconn, "select item_uoissue from item where item_prid = " . $_SESSION[pr_id]);
		if(!$get_unit) {
			$errormessage = pg_last_error();
			echo "Error with query: ". $errormessage;
			exit();
		}  while ($row = pg_fetch_row($get_unit)) {
			$unit[] = $row[0];
	}
	$_SESSION['unit'] = $unit;
	
	//desc
	$get_desc = pg_query($dbconn, "select item_description from item where item_prid = " . $_SESSION[pr_id]);
		if(!$get_desc) {
			$errormessage = pg_last_error();
			echo "Error with query: ". $errormessage;
			exit();
		} while ($row = pg_fetch_row($get_desc)) {
			$desc[] = $row[0];
	}
	$_SESSION['desc'] = $desc;

	//unitcost
	$get_ucost = pg_query($dbconn, "select item_eunicost from item where item_prid = " . $_SESSION[pr_id]);	
		if(!$get_ucost) {
			$errormessage = pg_last_error();
			echo "Error with query: ". $errormessage;
			exit();
		} while ($row = pg_fetch_row($get_ucost)) {
			$ucost[] = $row[0]; 
	}
	$_SESSION['ucost'] = $ucost;

	
?>