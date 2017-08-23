<?php 
	if($_SESSION['user_ofc'] == $_SESSION['curr_ofc']) {
		if($_SESSION['curr_stat'] == 'In Progress') {
			echo '<a class="btn btn-success btn-lg" role="button" href="php/track_approve.php">Approve</a>
		     <a class="btn btn-warning btn-lg" role="button" href="php/track_onhold.php">On Hold</a>
		     <a class="btn btn-danger btn-lg" role="button" href="php/track_decline.php">Decline</a>';
		// }else if($_SESSION['curr_stat'] == 'Declined' && $_SESSION['ch'] != 'ret') {
		// 	echo '<a class="btn btn-danger btn-lg" role="button" href="php/track_return.php">Confirm</a>
		// 		<a class="btn btn-warning btn-lg" role="button" href="php/track_cancel.php">Cancel</a>';
		}else if($_SESSION['curr_stat'] == 'On Hold') {
			echo '<form action="php/track_inform.php" method="POST">';
			if(!isset($_SESSION['set_hold'])) {
				echo '<textarea name="hold" style="width:250px;height:50px;" placeholder="Please state the reason" required></textarea><br><br>
			    	<input name="inform" type="submit" value="Inform Owner" class="btn btn-warning btn-md"/>
			    	<a class="btn btn-warning btn-md" role="button" href="php/track_cancel.php">Cancel</a>';
			}else {
				echo '<textarea name="hold" style="width:250px;height:50px;">' . $_SESSION['hold'] . '</textarea><br><br>
			    	<input name="inform" type="submit" value="Edit" class="btn btn-warning btn-md"/>
			    	<a class="btn btn-warning btn-md" role="button" href="php/track_cancel.php">Done</a>';
			}
			echo '</form><hr>';
			require 'php/inform.php';
		}else {
			if($_SESSION['ch'] == 'ret') {
				echo '<a class="btn btn-danger disabled btn-lg" role="button">Declined</a>';
			}else if($_SESSION['curr_det'] == 'PR Received') {
				echo '<a class="btn btn-info btn-lg" role="button" href="php/track_confirm.php">Confirm</a>
					<a class="btn btn-warning btn-lg" role="button" href="php/track_cancel.php">Cancel</a>';
			}else {
				echo '<a class="btn btn-success disabled btn-lg" role="button">Approved</a>';
			}
		}
	}else {
		if($_SESSION['curr_stat'] == 'Pending') {
			echo '<a class="btn btn-info disabled btn-lg" role="button">Receive PR</a>';
		}
	}
?>