<?php 
	if($_SESSION['user_ofc'] != $_SESSION['pr_ofc']) {
		if($_SESSION['curr_stat'] == 'Pending') {
			echo '<a class="btn btn-info btn-lg" role="button" href="php/track_receive.php">Receive PR</a>';
		}else {
			if($_SESSION['curr_stat'] == 'Approved' || $_SESSION['track_flow'] == $_SESSION['user_ofc']) {
				getprno();
				if(!empty(isset($_SESSION['err_prno']))){
					echo '<div class="alert alert-danger"><strong>Invaid! Do you mean </strong> Wrong username or password.</div>';
					unset($_SESSION['err_prno']);
				}
				echo '<form action="php/track_prno.php" method="POST">
						<input type="number" name="year" placeholder="Year" min="2000" max="9999" size="4" value="'.$_SESSION['year'].'" required />
						<input type="number" name="month" placeholder="Month" min="1" max="12" size="4" value="'.$_SESSION['month'].'" required />
						<input type="number" name="seq" placeholder="Sequence" size="4" min="1" max="999" required />
						<br><br>
						<input type="submit" class="btn btn-info btn-lg" name="send" value="Send PR to Next Office">
					</form>';
				// echo '<a class="btn btn-success btn-lg" role="button" href="php/track_send.php">Send PR to Next Office</a>';
			}else if($_SESSION['curr_stat'] == 'Declined') {
				echo '<a class="btn btn-danger btn-lg" role="button" href="php/track_send.php">Inform Requestor</a>';
			}else {
				echo '<a class="btn btn-warning btn-lg" role="button" disabled>In Progress</a>';
			}
		}
	}else {
		if($_SESSION['curr_stat'] == 'Pending' && $_SESSION['curr_ofc'] == $_SESSION['user_ofc']) {
			echo '<a class="btn btn-info btn-lg" role="button" href="php/track_receive.php">Send to Office Head</a>'; 
		}else if($_SESSION['curr_stat'] == 'Approved') {
			echo '<a class="btn btn-info btn-lg" role="button" href="php/track_send.php">Send to Next Office</a>'; 
		}else if($_SESSION['curr_det'] == 'PR Declined') {
			echo '<a class="btn btn-danger btn-lg" role="button">DECLINED</a>';
		}else if($_SESSION['curr_det'] == 'PR Completed') {
			echo '<a class="btn btn-success btn-lg" role="button">COMPLETED</a>';
		}else if($_SESSION['curr_stat'] == 'On Hold') {
			echo '<a class="btn btn-warning btn-lg" role="button">ON HOLD</a>
				<br><br><h4 align="center">Reason: ' . $_SESSION['curr_det'] . '</h4>';
		}else {
			echo '<a class="btn btn-warning btn-lg" role="button">IN PROGRESS</a>
				<br><br><h4 align="center">Details: ' . $_SESSION['curr_det'] . '</h4>';
		}
	}

	// if($_SESSION['user_ofc'] == $_SESSION['pr_ofc'] && $_SESSION['user_pos'] == 'clerk' && $_SESSION['curr_ord'] == 1) {
	// 	if($_SESSION['curr_stat'] == 'Pending') {
	// 		echo '<hr><a class="btn btn-info btn-lg" role="button" href="php/track_approve.php">Approve in Behalf of Office Head</a>';
	// 	}else {
	// 		echo '<hr><a class="btn btn-info btn-lg" role="button" href="php/track_send.php">Send to Next Office</a>';
	// 	}
	// }
?>