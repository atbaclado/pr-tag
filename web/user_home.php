<?php
	require 'php/startsess.php';
	require 'php/getofc.php';
	require 'restrict.php';
	if($_SESSION['user_lvl'] == 2) {
		header('Location: admin.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>iBugs - User Home</title>
	
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
    <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	
	<style = "text/css">
		body{background-color:#dedede;font-family:arial}

		#nav{list-style:none;margin: 0px;
		padding: 0px;}
		#nav li {
		float: left;
		margin-right: 20px;
		font-size: 14px;
		font-weight:bold;
		}
		
		#nav li a{color:#333333;text-decoration:none}
		#nav li a:hover{color:#006699;text-decoration:none}
		#notification_li{position:relative}
		
		#notificationContainer {
		background-color: #fff;
		border: 1px solid rgba(100, 100, 100, .4);
		-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
		overflow: visible;
		position: absolute;
		top: 30px;
		margin-left: -170px;
		width: 400px;
		z-index: -1;
		display: none;
		}
		
		#notificationContainer:before {
		content: '';
		display: block;
		position: absolute;
		width: 0;
		height: 0;
		color: transparent;
		border: 10px solid black;
		border-color: transparent transparent white;
		margin-top: -20px;
		margin-left: 188px;
		}
		
		#notificationTitle {
		z-index: 1000;
		font-weight: bold;
		padding: 8px;
		font-size: 13px;
		background-color: #ffffff;
		width: 384px;
		border-bottom: 1px solid #dddddd;
		}
		
		#notificationsBody {
		padding: 33px 0px 0px 0px !important;
		min-height:300px;
		}
		
		#notificationFooter {
		background-color: #e9eaed;
		text-align: center;
		font-weight: bold;
		padding: 8px;
		font-size: 12px;
		border-top: 1px solid #dddddd;
		}
		
		#notification_count {
		padding: 3px 7px 3px 7px;
		background: #cc0000;
		color: #ffffff;
		font-weight: bold;
		margin-left: 77px;
		border-radius: 9px;
		position: absolute;
		margin-top: -11px;
		font-size: 11px;
		}
		
		#inputfield {font-size:12px;
		font-family:'Consolas';
		position: static; 
		size: 22px;
		border: none !important;
		background-color:transparent !important;}

	</style>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="user_home.php"><img src="assets/images/logos.png" alt="Progressus HTML5 template"></a>
			</div>
			<!--.nav-collapse -->
				<?php require 'menu.php'; ?>
			<!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		<!-- iBugs Logo -->
		<ol class="breadcrumb">
			<li class="active"><a href="user_home.php">Home</a></li>
		</ol>

		<div class="row">
			<!-- Sidebar -->
			<aside id="activerSide" class="col-md-4 sidebar sidebar-left">
				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="ongoing.php"><span class="glyphicon glyphicon-map-marker"></span><span>&nbsp;</span>PR Status</a></h4>
						<p align="center">Track your Purchase Requests!</p>
					</div>
				</div>

				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="notifications.php"><span class="glyphicon glyphicon-globe"></span><span>&nbsp;</span>Notification</a></h4>
						<p align="center">PRs needing your attention!</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="search.php"><span class="glyphicon glyphicon-search"></span><span>&nbsp;</span>Search</a></h4>
						<p align="center">Find your Purchase Requests!</p>
					</div>
				</div>
			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
				  <h1 class="page-title"></h1>
				</header>
				
				<div class="container">
					<div class="row">
						<div class="col-md-5  toppad  pull-right col-md-offset-3 "></div>
	   
						<div class="panel panel-info">
							<div class="panel-heading">
							  <h3 class="panel-title"><?php echo ''.$_SESSION['user_name'].' '.$_SESSION['user_lname'].''; ?></h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="assets/images/DTJXsiuq.jpeg" class="img-circle img-responsive"> </div>
									<div class=" col-md-9 col-lg-9 "> 
										<table class="table table-user-information">
										<tbody>
										<tr>
											<td>Department</td>
											<td><?php echo ' '. getofc($_SESSION['user_ofc']) .'';?></td>
										</tr>
										<tr>
											<td>Position</td>
											<td><?php echo ''.$_SESSION['user_pos'].'';?></td>
										</tr>
										<tr>
											<td>Email</td>
											<td><?php echo''.$_SESSION['username'].'@up.edu.ph'; ?></td>
										</tr>                           
										<tr>
											<td>Company</td>
											<td>University of the Philippines Cebu</td>
										</tr>
										</tbody>
										</table>
									</div>
								</div> <!-- /Row -->
							</div> <!-- /Panel body -->
						</div> <!-- /Panel info -->
					</div> <!-- /Row -->
				</div> <!-- /Container -->
			</article> <!-- /Container -->
		</div> <!-- /Row -->
	</div>	<!-- /container -->
	
	<!-- footer -->
	<?php require 'footer.php'; ?>
	
	
</body>
</html>