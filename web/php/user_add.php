<?php
	require 'startsess.php';
	require 'connectdb.php';
	//require 'gen_rand.php';

	function rand_ofcid($length) {
	    $keys = array_merge(range(0, 9));

	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }
	    return $key;
	}
	
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$username = $_POST['uname'];
	$password = $_POST['password'];
	$position = $_POST['position'];
	$ofc = $_POST['office'];
	$lvl = $_POST[usrlvl];

	$get_ofc = pg_query($dbconn, "SELECT office_num FROM office WHERE office_name = '$ofc'"); 
	$ofc_found = pg_fetch_result($get_ofc, 0, 'office_num');


	if(isset($_POST['newuser'])) {

		do{
			$number = rand_ofcid(9);

			$get_c = pg_query($dbconn, "SELECT user_number FROM users where user_number = $number");
			$get_c_arr = pg_fetch_array($get_c);
			if($get_c_arr[0] != NULL){
				$found = True;
			} else {
				$found = False;
			}

		}while($found);

		$query1 = "INSERT INTO users VALUES ($number, '$fname', '$mname', '$lname', '$username', '$password', '$position', $ofc_found ,$lvl)";

		$result1 = pg_query($dbconn, $query1);
		if(!$result1) {
			$errormessage = pg_last_error();
			$_SESSION['errormsg'] = 'Add user. ' . $errormessage;
			header('Location: ../err_unexpected.php');
		} else {
			header('Location: ../admin-View.php');
		}

	} else if(isset($_POST['edituser'])) {
		$number = $_SESSION[userno];

		$query2 = "UPDATE users SET (user_fname, user_mname, user_lname, user_name, user_password, user_position, user_office, user_lvl) = ('$fname', '$mname', '$lname', '$username', '$password', '$position', $ofc_found ,$lvl) where user_number = $number";

		$result2 = pg_query($dbconn, $query2);
		if(!$result2) {
			$errormessage = pg_last_error();
			$_SESSION['errormsg'] = 'Edit user ' . $errormessage;
			header('Location: ../err_unexpected.php');
		} else {
			header('Location: ../admin-View.php');
		}
	} else if(isset($_POST['deleteuser'])) {
		$number = $_SESSION[userno];

		$query3= "DELETE FROM users where user_number = $number";

		$result3 = pg_query($dbconn, $query3);
		if(!$result3) {
			$errormessage = pg_last_error();
			$_SESSION['errormsg'] = 'Delete user. ' . $errormessage;
			header('Location: ../err_unexpected.php');
		} else {
			header('Location: ../admin-View.php');
		}
	} else if(isset($_POST['addoffice'])) {
		$office_num = rand_ofcid(2);

		do{
			$number = rand_ofcid(9);

			$get_c = pg_query($dbconn, "SELECT office_num FROM office where office_num = $number");
			$get_c_arr = pg_fetch_array($get_c);
			if($get_c_arr[0] != NULL){
				$found = True;
			} else {
				$found = False;
			}

		}while($found);

		$office_name = $_POST['office_name'];
		$office_email = $_POST['office_email'];
		$office_head = $_POST['office_head'];
		$office_order = $_POST['office_order'];

		$query4 = "INSERT INTO office (office_num, office_name, office_head, office_order, office_email) VALUES ($office_num, '$office_name', '$office_head', $office_order, '$office_email')";
		
		$result4 = pg_query($dbconn, $query4);
		if(!$result4) {
			$errormessage = pg_last_error();
			$_SESSION['errormsg'] = 'Add office. ' . $errormessage;
			header('Location: ../err_unexpected.php');
		} else {
			header('Location: ../office-View.php');
		}

	} else if(isset($_POST['editoffice'])) {		
		$office_name = $_POST['office_name'];
		$office_head = $_POST['office_head'];
		$office_order = $_POST['office_order'];
		$office_email = $_POST['office_email'];
		$off = $_SESSION[office_num];

		$query5 = "UPDATE office SET (office_name, office_head, office_order, office_email) = ('$office_name', '$office_head', office_order, '$office_email') where office_num = $off";

		$result5 = pg_query($dbconn, $query5);
		if(!$result5) {
			$errormessage = pg_last_error();
			$_SESSION['errormsg'] = 'Edit office. ' . $errormessage;
			header('Location: ../err_unexpected.php');
		} else {
			header('Location: ../office-View.php');
		}	

	}else if(isset($_POST['deleteoffice'])) {
		$off = $_SESSION[office_num];
		$query6 = "DELETE FROM office where office_num = $ofc_found";

		$result6 = pg_query($dbconn, $query6);
		if(!$result6) {
			$errormessage = pg_last_error();
			$_SESSION['errormsg'] = 'Delete office. ' . $errormessage;
			header('Location: ../err_unexpected.php');
		} else {
			header('Location: ../office-View.php');
		}
	}
?>