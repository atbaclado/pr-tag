<?php 
	require 'connectdb.php';
	require 'startsess.php';

	$ndx = $_GET[viewer];
	$id= $_GET[prid][$ndx];
	$_SESSION['prid'] = $id;

	require 'pr_details.php';

	header('Location: ../PR_Form1_Display.php');
?>