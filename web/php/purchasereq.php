<?php
	require 'startsess.php';
	require 'connectdb.php';

	if($_POST['editpr']){
		header ('Location: ../PR_Form1_Edit.php');
	}else if($_POST['nextpr']){
		header ('Location: ../PR_Form2_Input.php');
	}else if($_POST['cancelpr']){
		header ('Location: ../PR_Form1_Display.php');
	} else if($_POST['doneall']){
		header('Location: ../PR_Form1_Display.php');
	}

	function rand_prid($length) {
	    $key = '2016';
	    $keys = array_merge(range(0, 9));

	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }
	    return $key;
	}
	
	// $pr_number1 = $_SESSION['pr1'];	
	$pr_date = $_SESSION['date'];
	$pr_purpose = $_POST['purpose'];
	// $_SESSION['desig'] = $_POST['desig'];

	$unit = $_POST['unit'];
	$desc = $_POST['desc'];

	$qty = $_POST['qty'];
	$ucost = $_POST['ucost'];
	$tcost = $_POST['tcost'];

	$charge = $_POST['charged']; 
	$attest = $_POST['attested'];
	$posit = $_POST['position'];	

	$_SESSION['char'] = $charge;
	$_SESSION['atte'] = $attest;
	$_SESSION['posi'] = $posit;

					
	if(isset($_POST['newpr'])) {
		$prid = rand_prid(4);
		$_SESSION['prid'] = $prid;
		
		$query1 = "INSERT INTO purchase(pr_date, pr_purpose, pr_office, pr_id, pr_chargeto, pr_attestedby, pr_position) VALUES('$pr_date', '$pr_purpose'," . $_SESSION['user_ofc'] . ", $prid ,'$charge', '$attest', '$posit')";

		$result1 = pg_query($dbconn, $query1);
		if(!$result1) {
			$errormessage = pg_last_error();
			echo "Error with query 1: ". $errormessage;
			exit();
		}

		foreach($qty as $key => $value) {
			echo $value;

			$query2 = "INSERT INTO item (item_uoissue, item_description, item_quantity, item_eunicost, item_prid) VALUES('$unit[$key]', '$desc[$key]', $qty[$key], $ucost[$key], " . $_SESSION['prid'] . ")";
			
			$result2 = pg_query($dbconn, $query2);

			if(!$result2) {
				$errormessage = pg_last_error();
				echo "Error with query 2: ". $errormessage;
			exit();
			}else{
				$_SESSION['itmsize'] = count($qty);

                     	foreach(qty as $key => $value)  {
					 	    $line_array = preg_split('/\r/',$string);
							$num_lines = count($line_array);
						}

						$_SESSION['ctr'] = $num_lines;

				header('Location: ../PR_Form1_Display.php');
			}
		}
	}

	//update items in db
	if(isset($_POST['updatepr'])) {
		$currsize = count($qty);
		$itms = $_SESSION['itmsize'];
		$r = pg_query($dbconn, "SELECT max(item_number) FROM item");
		if(!$r) {
			$errormessage = pg_last_error();
			echo "Error with query: ". $errormessage;
			exit();
		}
		$chkarr = pg_fetch_array($r);
		$max = $chkarr[0];
		$size = $max;
		$begin = 0;

		echo 'itms: ' + $itms;

		// adding / deleting fields at update
		if($currsize < $itms) {
			$del = $itms - $currsize;
			$begin = ($max + 1) - $itms;
			echo ' del: ' . $del;
			while($del > 0) {
				$result3 = pg_query($dbconn, "DELETE FROM item WHERE item_number = $size");
				if(!$result3) {
					$errormessage = pg_last_error();
					echo "Error with query 3: ". $errormessage;
					exit();
				}else {
					$del--;
					$size--;
				}
			}
		}else if($currsize > $itms) {
			$add = $currsize - $itms;
			$prid = $_SESSION['prid'];

			$begin = ($max + $add) - ($currsize - 1);
			echo ' add: ' . $add;
			while($add > 0) {
				$query4 = "INSERT INTO item(item_uoissue, item_description, item_quantity, item_eunicost, item_prid) VALUES('', '', 0, 0, " . $_SESSION['prid'] . ")";
				$result4 = pg_query($dbconn, $query4);
				if(!$result4) {
					$errormessage = pg_last_error();
					echo "Error with query 4: ". $errormessage;
					exit();
				}else {
					$add--;
				}
			}
		}else {
			$begin = ($max + 1) - $itms;
		}

		echo ' max: ' . $max . 'curr: ' . $currsize . '<br>';
		foreach ($qty as $key => $value) {
			$query5 = "UPDATE item SET (item_uoissue, item_description, item_quantity, item_eunicost) = ('$unit[$key]', '$desc[$key]', $qty[$key], $ucost[$key]) where item_number = $begin";

			$result5 = pg_query($dbconn, $query5);
			echo $value . '-' . $begin . '  ';

			if(!$result5) {
				$errormessage = pg_last_error();
				echo "Error with query 5: ". $errormessage;
				exit();
			}else {
				$begin++;
			}

		}

			$query6 = "UPDATE purchase SET pr_purpose = '$pr_purpose' where pr_id = " . $_SESSION[prid];
		
		$result6 = pg_query($dbconn, $query6);

		if(!$result6) {
			$errormessage = pg_last_error();
			echo "Error with query 6: ". $errormessage;
			exit();
		} else{
			$_SESSION['itmsize'] = count($_POST['qty']);
			header('Location: ../PR_Form1_Display.php');
		}
		
	}

	//Save Code
	foreach ($_POST as $key => $value) {
	    ${$key} = $value;
	    $_SESSION[$key] = $value;
	}

?>