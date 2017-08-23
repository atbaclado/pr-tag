<?php 
	// require 'php/connectdb.php';
			
	// if($_SESSION['user_pos'] == 'clerk') {
	// 	$query = "SELECT * FROM tracking , purchase WHERE  track_office = " . $_SESSION['user_ofc'] . " AND (track_status = 'On Hold' OR track_status = 'Declined' OR track_details = 'PR Completed') AND track_notif = 'f' AND track_prnum1 = pr_number1 AND track_prnum2 = pr_number2";
	// }else {
	// 	$query = "SELECT * FROM tracking , purchase WHERE  track_flow = " . $_SESSION['user_ofc'] . " AND track_status = 'Pending' AND track_notif = 'f' AND track_prnum1 = pr_number1 AND track_prnum2 = pr_number2";
	// }

	// $result = pg_query($dbconn,$query);
	// if(!$result) {
	// 	$errormessage = pg_last_error();
	// 	echo "Error with query notif menu: ". $errormessage;
	// 	exit();
	// }
	// $rs = pg_num_rows($result);

	// if(!empty(isset($_SESSION['user']))) {
			echo '
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
				<li class="active"><a href="user_home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>';
				
			echo '<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-duplicate"></span> Purchase Request <b class="caret"></b></a>
					<ul class="dropdown-menu">';

		// if($_SESSION['user_ofc'] < 20) {
			echo '<li class="active"><a  href="pr_form1_input.php"><span class="glyphicon glyphicon-list-alt"></span> Create New PR</a></li>';
		//}

			echo '<li class="active"><a href="ongoing.php"><span class="glyphicon glyphicon-paste"></span> Track PR</a></li>
					</ul>
				</li>
				<li> <a href= "Notifications.php"><span class="glyphicon glyphicon-bell"></span> Notifications<span class="badge">' . $rs . '</span></a></li>';
	// }

	// if(!isset($_SESSION['user']) || empty($_SESSION['user']) ) {
		// echo	'<li><a class="btn" href="signin.php">SIGN IN </a></li>';
	// }else {
		echo 	'<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> '
					 . $_SESSION['user_name'] . '<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="active"><a href="sidebar-right.php">Account Settings</a></li>
						<li class="active"><a href="php/logout.php">Logout</a></li>
					</ul>
				</li>';
		echo '<li><a href= "search.php"><span class="glyphicon glyphicon-search"></span></a></li>';
	// }

	echo	'</ul>
		</div>';

?>
