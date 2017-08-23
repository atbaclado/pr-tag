<?php
	require 'connectdb.php';
	require 'startsess.php';

	foreach ($_POST as $key => $value) {
	    ${$key} = $value;
	    $_SESSION[$key] = $value;
	}

	if($_POST['editdv']) {
			header('Location: ../PR_Form3_Edit.php');
	}else if($_POST['nextdv']) {
			header('Location: ../PR_Form3_Download.php');
	}else if($_POST['canceldv']) {
			header('Location: ../PR_Form3_Display.php');
	}	

	//disbursement
	
	$pr1 = $_SESSION['pr1'];
	$pr2 = $_SESSION['pr2'];
	
	$dv_number = $pr1.$pr2;
	$_SESSION[dv] = $dv_number;
	
	$date = date("Y-m-d");        
	$datearray = explode("-", $date);        
	$dv_date = $date;

	//  = $_SESSION['date'];
	$dv_date = '2016-11-26';
	$dv_particular = $_SESSION['placeholder-part'];
	$dv_mfop = $_SESSION['placeholder-mfo'];

	// $dv_mfop = 'kiss';	
	$dv_amount = 100; 
	$_SESSION[amtwords] = $dv_amount;

	if($_POST['newdv']){
		if($dv_mfop == NULL){
			$query1 = "INSERT INTO disbursement (dv_number, dv_date, dv_particular, dv_amount, dv_prnum1, dv_prnum2) VALUES ($dv_number, '$dv_date', '$dv_particular', $dv_amount, $pr1, $pr2)";
		} else {
			$query1 = "INSERT INTO disbursement (dv_number, dv_date, dv_particular, dv_mfopap, dv_amount, dv_prnum1, dv_prnum2) VALUES ($dv_number, '$dv_date', '$dv_particular', '$dv_mfop', $dv_amount, $pr1, $pr2)";
		}
	} else if($_POST['updatedv']){
		if($dv_mfop == NULL){
			$query1 = "UPDATE disbursement SET dv_particular = '$dv_particular', dv_amount = $dv_amount";
		} else {		
			$query1 = "UPDATE disbursement SET dv_particular = '$dv_particular', dv_mfopap = '$dv_mfop', dv_amount = $dv_amount";
		}
	}

	$result1 = pg_query($query1);
	if(!$result1) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		$disbursement = False;
		exit();
	} else if($result1){
		$disbursement = True;
	}
	
	//payment
	$pay_name = $_POST['ppayee'];
	$pay_address = $_POST['paddress'];
	$pay_empnum = $_POST[pempnum];
	//if($pay_empnum == '-')
	//	$pay_empnum = '';
	$pay_obrnum = $_POST[pobr];
	//if($pay_obrnum == '-')
	//	$pay_obrnum = '';
	$pay_contact = $_POST[ptelephone]; 
	//if($pay_contact == '-')
		//$pay_contact = '';
	

	
	if($_POST['others'] == NULL){
		$pay_mode = $_POST['pmode'];
		$_SESSION['pmod'] = $pay_mode;
	}else{
		$pay_mode = $_POST['others'];
		$_SESSION['pmod'] = $_POST['others'] ;	
	}
	
	if($_POST['newdv']){		
		if($pay_empnum == NULL && $pay_obrnum == NULL && $pay_contact == NULL){
			echo "all null";
			$query2 = "INSERT INTO payment (payee_dvnum, payee_name, payee_address, payee_mode) VALUES ($dv_number, '$pay_name', '$pay_address', '$pay_mode')";
		}

		if($pay_empnum != NULL && $pay_obrnum != NULL && $pay_contact == NULL){
			echo "emp and obr";
			$query2 = "INSERT INTO payment (payee_dvnum, payee_name, payee_address, payee_tinnum, payee_obrnum, payee_mode) VALUES ($dv_number, '$pay_name', '$pay_address', $pay_empnum, $pay_obrnum, '$pay_mode')";
		}

		if($pay_empnum != NULL && $pay_obrnum == NULL && $pay_contact != NULL){
			echo "emp and contact";
			$query2 = "INSERT INTO payment (payee_dvnum, payee_name, payee_address, payee_tinnum, payee_mode, payee_contactno) VALUES ($dv_number, '$pay_name', '$pay_address', $pay_empnum, '$pay_mode', $pay_contact)";
		}

		if($pay_empnum == NULL && $pay_obrnum != NULL && $pay_contact != NULL){
			echo "obr and contact";
			$query2 = "INSERT INTO payment (payee_dvnum, payee_name, payee_address, payee_obrnum, payee_mode, payee_contactno) VALUES ($dv_number, '$pay_name', '$pay_address', $pay_obrnum, '$pay_mode', $pay_contact)";
		}

		if($pay_empnum == NULL && $pay_obrnum == NULL && $pay_contact != NULL){
			echo "contact null";
			$query2 = "INSERT INTO payment (payee_dvnum, payee_name, payee_address, payee_mode, payee_contactno) VALUES ($dv_number, '$pay_name', '$pay_address', '$pay_mode', $pay_contact)";
		}

		if($pay_empnum == NULL && $pay_obrnum != NULL && $pay_contact == NULL){
			echo "obr null";
			$query2 = "INSERT INTO payment (payee_dvnum, payee_name, payee_address, payee_obrnum, payee_mode) VALUES ($dv_number, '$pay_name', '$pay_address', $pay_obrnum, '$pay_mode')";
		}

		if($pay_empnum != NULL && $pay_obrnum == NULL && $pay_contact == NULL){
			echo "emp null";
			$query2 = "INSERT INTO payment (payee_dvnum, payee_name, payee_address, payee_tinnum, payee_mode) VALUES ($dv_number, '$pay_name', '$pay_address', $pay_empnum, '$pay_mode')";
		}

		if($pay_empnum != NULL && $pay_obrnum != NULL && $pay_contact != NULL){
			echo "not null";
			$query2 = "INSERT INTO payment VALUES($dv_number, '$pay_name', '$pay_address', $pay_empnum, $pay_obrnum, '$pay_mode', $pay_contact)";
		}
		

	}  else if($_POST['updatedv']){
		if($pay_empnum == NULL && $pay_obrnum == NULL && $pay_contact == NULL){
			echo "null all";
			$query2 = "UPDATE payment SET payee_name = '$pay_name', payee_address = '$pay_address', payee_mode = '$pay_mode'";
		}

		if($pay_empnum != NULL && $pay_obrnum != NULL && $pay_contact == NULL){
			echo "emp and obr";
			$query2 = "UPDATE payment SET payee_name = '$pay_name', payee_address = '$pay_address', payee_tinnum = $pay_empnum, payee_obrnum = $pay_obrnum, payee_mode = '$pay_mode'";
		}

		if($pay_empnum != NULL && $pay_obrnum == NULL && $pay_contact != NULL){
			echo "emp and contact";
			$query2 = "UPDATE payment SET payee_name = '$pay_name', payee_address = '$pay_address', payee_tinnum = $pay_empnum, payee_mode = '$pay_mode', payee_contactno = $pay_contact";
		}

		if($pay_empnum == NULL && $pay_obrnum != NULL && $pay_contact != NULL){
			echo "obr and contact";
			$query2 = "UPDATE payment SET payee_name = '$pay_name', payee_address = '$pay_address', payee_obrnum =  $pay_obrnum, payee_mode = '$pay_mode', payee_contactno = $pay_contact";
		}

		if($pay_empnum == NULL && $pay_obrnum == NULL && $pay_contact != NULL){
			echo "contact";
			$query2 = "UPDATE payment SET payee_name = '$pay_name', payee_address = '$pay_address', payee_mode = '$pay_mode', payee_contactno = $pay_contact";
		}


		if($pay_empnum == NULL && $pay_obrnum != NULL && $pay_contact == NULL){
			echo "obr";
			$query2 = "UPDATE payment SET payee_name = '$pay_name', payee_address = '$pay_address', payee_obrnum = $pay_obrnum, payee_mode = '$pay_mode'";
		}

		if($pay_empnum != NULL && $pay_obrnum == NULL && $pay_contact == NULL){
			echo "emp";
			$query2 = "UPDATE payment SET payee_name = '$pay_name', payee_address = '$pay_address', payee_tinnum = $pay_empnum, payee_mode = '$pay_mode'";
		}		

		if($pay_empnum != NULL && $pay_obrnum != NULL && $pay_contact != NULL){
			echo "not all null";
			$query2 = "UPDATE payment SET payee_name = '$pay_name', payee_address = '$pay_address', payee_tinnum = $pay_empnum, payee_obrnum = $pay_obrnum, payee_mode = '$pay_mode', payee_contactno = $pay_contact";
		}
	}

	$result2 = pg_query($query2);

	if(!$result2) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		$payment = False;
		exit();
	} else if($result2){
		$payment = True;
	}

	$actc = $_POST['acost'];
	$_SESSION['actuality'] = $actc;
	$i = 0;
	$sm = 0;
	foreach($actc as $key => $value) {			
		    $i = $i+1;
			$query2 = "INSERT into amount VALUES ($value,$pr1,$pr2,$i)";
			
			$sum = $sum + $value;
			$result2 = pg_query($dbconn, $query2);

			if(!$result2) {
				$errormessage = pg_last_error();
				echo "Error with query 2: ". $errormessage;
			exit();
			}else{
				$_SESSION['itmsize'] = count($qty);
				header('Location: ../PR_Form1_Display.php');
			}
		}

	$_SESSION[finamt] = $sum;
	
	if($disbursement && $payment){
		header('Location: ../PR_Form3_Display.php');
	}
	
?>