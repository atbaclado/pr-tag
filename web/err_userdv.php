<?php
	require 'php/startsess.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>iBugs - Error</title>

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
				<?php require 'menu.php'; ?>
			<!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		<ol class="breadcrumb">
			<li class="active"><a href="user_home.php">Home</a></li>
			<li class="active"><a href="ongoing.php">PR Status</a></li>
            <li class="active">Error</li>
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
			<br><br><br><br><br><br>
			<div>
				<hr>
				<h3 align="center">Only the Requesting Office can Generate Disbursement Voucher</h3>
				<hr>
			</div>
		</div>
	</div>	<!-- /container -->
	
	<?php require 'footer.php'; ?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>