<?php
	require 'startsess.php';
	require 'connectdb.php';

	$usr = $_SESSION['username'];
	$ops = $_POST['oldpass'];
	$nps = $_POST['newpass'];
	$rps = $_POST['retpass'];

	if($nps != $rps) {
		header('Location: ../accountsett.php');
	}

	if($nps == $rps){
		$res = pg_query($dbconn, "UPDATE users SET user_password = '".$nps."' WHERE user_name = '".$usr."' AND user_password = '".$ops."' ");
		if(!$res) {
			$errormessage = pg_last_error();
			echo "Error with query: ". $errormessage;
			header('Location: ../accountsett.php');
			exit();
		}
	}

	header('Location: ../loading.php');
?>