<?php 
	
	echo '
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
						<li class="active"><a href="admin.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> '
					 . $_SESSION['user_name'] . '<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="active"><a href="accountsett.php">Account Settings</a></li>
						<li class="active"><a href="php/logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>

	';
	
?>