<?php
	require 'connectdb.php';
	require 'startsess.php';

	$payee = $_POST['ppayee'];
	$address = $_POST['paddress'];
	$particular = $_POST['dparticular'];
	// $pr1 = $_SESSION['pr1'];
	// $pr2 = $_SESSION['pr2'];
	$prid = $_SESSION['prid'];
	$mfop = $_POST['dmfop'];
	$amt = $_SESSION['totalamt'];

	$_SESSION['placeholder-payee'] = $payee;
	$_SESSION['placeholder-add'] = $address;
	$_SESSION['placeholder-part'] = $particular;
	$_SESSION['placeholder-mfo'] = $mfop;
	$_SESSION['placeholder-amt'] = $amt;	

	if($_POST['cancelobr']){
		header ('Location: ../PR_Form3_Display.php');
	}

	if(isset($_POST['obrnew'])) {
		if($payee == null) {
			$query2 = "INSERT INTO obligation(obr_address, obr_particular, obr_mfop, obr_amount, obr_prid) VALUES ('$address', '$particular','$mfop',$amt,$prid)";
		}else if($address == null) {
			$query2 = "INSERT INTO obligation(obr_payee, obr_particular, obr_mfop, obr_amount, obr_prid) VALUES ('$payee', '$particular','$mfop',$amt,$prid)";
		}else if($payee == null && $address == null) {
			$query2 = "INSERT INTO obligation(obr_particular, obr_mfop, obr_amount, obr_prid) VALUES ('$particular','$mfop',$amt,$prid)";
		}else {
			$query2 = "INSERT INTO obligation VALUES ('$payee','$address','$particular','$mfop',$amt,$prid)";
		}
		echo "insert";
	}
	
	if(isset($_POST['updateobr'])) {
		if($payee == null) {
			$payee = '';
			$query2 = "INSERT INTO obligation(obr_address, obr_particular, obr_mfop, obr_amount, obr_prid) VALUES ('$address', '$particular','$mfop',$amt,$prid)";
		}else if($address == null) {
			$address = '';
			$query2 = "INSERT INTO obligation(obr_payee, obr_particular, obr_mfop, obr_amount, obr_prid) VALUES ('$payee', '$particular','$mfop',$amt,$prid)";
		}else if($payee == null && $address == null) {
			$payee = '';
			$address = '';
			$query2 = "UPDATE obligation SET (obr_payee, obr_add, obr_particulars, obr_mfo, obr_amount) = ('$payee', '$address', '$particular','$mfop',$amt) WHERE obr_prid = $prid";
		}else {
			$query2 = "UPDATE obligation SET (obr_payee, obr_add, obr_particulars, obr_mfo, obr_amount) = ('$payee', '$address', '$particular','$mfop',$amt) WHERE obr_prid = $prid";
		}
		// $query2 = "UPDATE obligation SET obr_payee = '$payee', obr_add = '$address',obr_particulars = '$particular', obr_mfo = '$mfop', obr_amount = $amt WHERE obr_pr1 = $pr1 and obr_pr2 = $pr2";
	}

	$result2 = pg_query($dbconn, $query2);

	if(!$result2) {
		$errormessage = pg_last_error();
		echo "Error with obr: ". $errormessage;
		$payment = False;
		exit();
	}else {
		header('Location: ../PR_Form2_Display.php');
	}

?>