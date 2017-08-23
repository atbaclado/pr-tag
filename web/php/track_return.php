<?php 
	require 'startsess.php';
	require 'connectdb.php';
	
	$_SESSION['ch'] = 'ret';
	$_SESSION['flag'] = False;
	
	header("Location: ../sending.php");
?>