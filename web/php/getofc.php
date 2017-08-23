<?php
	function getofc($num) {
		require 'connectdb.php';
    	$q = "SELECT office_name FROM office WHERE office_num = $num";
		$r = pg_query($dbconn, $q);
		if(!$r) {
			$errormessage = pg_last_error();
			echo "Error with query ofc name: ". $errormessage;
			exit();
		}
		$ofc = pg_fetch_result($r, 0, 'office_name');
		echo $ofc;
    }

    function getofcr($num) {
    	require 'connectdb.php';
    	$q = "SELECT office_head FROM office WHERE office_num = $num";
		$r = pg_query($dbconn, $q);
		if(!$r) {
			$errormessage = pg_last_error();
			echo "Error with query print name: ". $errormessage;
			exit();
		}
		echo pg_fetch_result($r, 0, 'office_head');
    }

    function getordfc($num) {
    	require 'connectdb.php';
    	$q = "SELECT office_name FROM office WHERE office_order = $num";
		$r = pg_query($dbconn, $q);
		if(!$r) {
			$errormessage = pg_last_error();
			echo "Error with query ord office: ". $errormessage;
			exit();
		}
		echo pg_fetch_result($r, 0, 'office_name');
    }

    function getordfcr($num) {
		require 'connectdb.php';
    	$q = "SELECT office_head FROM office WHERE office_order = $num";
		$r = pg_query($dbconn, $q);
		if(!$r) {
			$errormessage = pg_last_error();
			echo "Error with query ord officer: ". $errormessage;
			exit();
		}
		echo pg_fetch_result($r, 0, 'office_head');
    }

    function getprno() {
    	require 'connectdb.php';

    	$date = date("Y-m-d");
		$datearr = explode("-", $date);
		$_SESSION['date'] = $datearr;
		$prnum = $datearr[0] . $datearr[1];
		$pr1 = intval($prnum);

		$result = pg_query($dbconn, "SELECT max(pr_number2) FROM purchase where pr_number1 = $pr1");
		if(!$result) {
			$errormessage = pg_last_error();
			echo "Error with get prno: ". $errormessage;
			exit();
		}

		$chkarr = pg_fetch_array($result);
		$max = intval($chkarr[0]) + 1;
		$_SESSION['prnum1'] = $pr1;
		$_SESSION['year'] = intval($datearr[0]);
		$_SESSION['month'] = intval($datearr[1]);
		$_SESSION['seq'] = $max;
		// $prno = $datearray[0] . $datearray[1] . $max;
		// echo intval($prno);
    }

?>