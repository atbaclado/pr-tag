<?php
	require 'startsess.php';
	require 'connectdb.php';

	$usr = strtolower($_POST['uname']);
	$ps = strtolower($_POST['pass']);

	if($usr != $ps) {
		header('Location: ../signin.php');
	}

	$res = pg_query($dbconn, "SELECT * FROM users WHERE user_name = '$usr' AND user_password = '$ps'");
	if(!$res) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	}
	$row = pg_num_rows($res);
	if($row > 0) {
		$_SESSION['user'] =pg_fetch_result($res, 0, 'user_number');
		$_SESSION['user_name'] =pg_fetch_result($res, 0, 'user_fname');
		$_SESSION['user_lname'] =pg_fetch_result($res, 0, 'user_lname');
		$_SESSION['user_ofc'] = pg_fetch_result($res, 0, 'user_office');
		$_SESSION['username'] = pg_fetch_result($res, 0, 'user_name');
		$_SESSION['user_pos'] = pg_fetch_result($res, 0, 'user_position');
		$_SESSION['user_lvl'] = pg_fetch_result($res, 0, 'user_lvl');
		header('Location: ../loading.php');
	}else {
		$_SESSION['user'] ="1";
		header('Location: ../signin.php');
	}
	//header('Location: userinfo.php');

?>