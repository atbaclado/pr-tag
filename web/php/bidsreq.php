<?php
	$dbconn = pg_connect("host=localhost port=5432 dbname=prdatabase user=postgres password=postgres")
		or die('Could not connect: '.pg_last_error);
	
	//bids awards
	
	$bac_rfq = $_POST[prnumber];
	$bac_date = date("Y-m-d");
	
	$bac_terms = $_POST['terms'];
	$bac_abc = $_POST['abc'];
	$bac_funding = $_POST['funding'];
	$bac_telephone = $_POST[telnum];
	$bac_email = $_POST['email'];
	$bac_cname = $_POST['cname'];
	$bac_address = $_POST['cadd'];
	$bac_cperson = $_POST['ccontact'];
	
	$prlen = strlen($_POST[prnumber]);
	$prnum1 = substr($_POST[prnumber], 0, 6);
	$bac_prnum1 = intval($prnum1);
	$prnum2 = substr($_POST[prnumber], 6);
	$bac_prnum2 = intval($prnum2);
	
	$query1 = "INSERT INTO bidsawards VALUES($bac_rfq, '$bac_date', '$bac_terms', '$bac_abc', '$bac_funding', $bac_telephone, '$bac_email', '$bac_cname', '$bac_address', $bac_prnum1, $bac_prnum2, '$bac_cperson')";
	
	$result1 = pg_query($query1);
	if(!$result1) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	} else if($result1){
		echo "successfully added to bidsawards";
	}
	
	//specifications
	
	$sp_itemno = $_POST[item];
	$sp_brand = $_POST['brand'];
	$sp_rfq = $bac_rfq; 
	$sp_compliance = $_POST['compliance'];
	
	
	$query2 = "INSERT INTO specification VALUES($sp_itemno, '$sp_brand', $sp_rfq, '$sp_compliance')";
	
	$result2 = pg_query($query2);
	if(!$result2) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	} else if($result2){
		echo "successfully added to specification";
	}
	
	//sponsorship -- problem pa kay unsaon pag make ang sponsors cname within the bidsawards as multivalued
	
	$query3 = "INSERT INTO sponsorship VALUES($sp_itemno, $sp_rfq, '$bac_cname')";
	
	$result3 = pg_query($query3);
	if(!$result3) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	} else if($result3){
		echo "successfully added to sponsorship";
	}
?>