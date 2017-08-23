<?php
	require 'startsess.php';
	require 'connectdb.php';

	$prid = $_GET['id'];
	$prnum = $_GET['num'];
	$ndx = $_GET['viewer'] - 1;
	$_SESSION['prid'] = $prid[$ndx];
	$_SESSION['prnum'] = $prnum[$ndx];

	if($_SESSION['user_pos'] == 'clerk') {
		if(!empty(isset($_GET['create']))) {
			header('Location: ../PR_Form3_Input.php');
		}		
	}else {
		if(!empty(isset($_GET['create']))) {
			header('Location: ../err_userdv.php');
		}
	}
	header('Location: ../track_table.php');
?>