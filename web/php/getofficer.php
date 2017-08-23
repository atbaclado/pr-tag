<?php
	$q = "SELECT office_head FROM office WHERE office_num = " . $_SESSION['user_ofc'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query print name: ". $errormessage;
		exit();
	}
	$name = pg_fetch_result($r, 0, 'office_head');

	echo $name;
?>