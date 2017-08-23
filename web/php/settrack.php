<?php 
	require 'connectdb.php';

	$r=($dbconn,"UPDATE tracking SET (track_status,track_flow)=('Pending',0) ");


?>

