<?php 
	require 'php/connectdb.php';
			
	if($_SESSION['user_pos'] == 'clerk') {
		if($_SESSION['pr_ofc'] != $_SESSION['user_ofc']) {
			$query = "SELECT * FROM tracking , purchase WHERE  track_flow = " . $_SESSION['user_ofc'] . " AND (track_status = 'Pending' OR track_status = 'Approved' OR track_status = 'Declined') AND track_notif = 'f' AND track_prid = pr_id";
		}else {
			$query = "SELECT * FROM tracking , purchase WHERE  track_office = " . $_SESSION['user_ofc'] . " AND (track_status = 'On Hold' OR track_status = 'Declined' OR track_details = 'PR Completed') AND track_notif = 'f' AND track_prid = pr_id";
		}
	}else {
		$query = "SELECT * FROM tracking , purchase WHERE  track_flow = " . $_SESSION['user_ofc'] . " AND track_status = 'In Progress' AND track_notif = 'f' AND track_prid = pr_id";
	}

	$result = pg_query($dbconn,$query);
	// if(!$result) {
	// 	$errormessage = pg_last_error();
	// 	echo "Error with query notif menu: ". $errormessage;
	// 	exit();
	// }
	$rs = pg_num_rows($result);

	if(!empty(isset($_SESSION['user']))) {
			echo '
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
				<li class="active"><a href="user_home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>';
				
			echo '<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-duplicate"></span> Purchase Request <b class="caret"></b></a>
					<ul class="dropdown-menu">';

		if($_SESSION['user_ofc'] < 20) {
			echo '<li class="active"><a  href="PR_Form1_Input.php"><span class="glyphicon glyphicon-list-alt"></span> Create New PR</a></li>';
		}

			echo '<li class="active"><a href="ongoing.php"><span class="glyphicon glyphicon-paste"></span> Track PR</a></li>
					</ul>
				</li>
				<li> <a href= "notifications.php"><span class="glyphicon glyphicon-bell"></span> Notifications<span class="badge">' . $rs . '</span></a></li>';
	}

	if(!isset($_SESSION['user']) || empty($_SESSION['user']) ) {
		// echo	'<li><a class="btn" href="signin.php">SIGN IN </a></li>';
	}else {
		echo 	'<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> '
					 . $_SESSION['user_name'] . '<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="active"><a href="accountsett.php">Account Settings</a></li>
						<li class="active"><a href="php/logout.php">Logout</a></li>
					</ul>
				</li>';
		echo '<li><a href= "search.php"><span class="glyphicon glyphicon-search"></span></a></li>';
	}

	echo	'</ul>
		</div>';

?>
