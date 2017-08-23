<?php
	require 'php/startsess.php';
	require 'php/connectdb.php';
	require 'php/getofc.php';
	require 'restrict.php';
	if($_SESSION['user_lvl'] != 2) {
		header('Location: user_home.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Administrator</title>

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
				<a class="navbar-brand" href="admin.php"><img src="assets/images/logos.png" alt="Progressus HTML5 template"></a>
			</div>
			<!--.nav-collapse -->
				<?php require 'menu_admin.php'; ?>
			<!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		<!-- iBugs Logo -->
		<ol class="breadcrumb">
			<li class="active"><a href="admin.php">Home</a></li>
			<li class="active">Delete Users</li>	
        </ol>

		<div class="row">
			<!-- Sidebar -->
			<aside id="activerSide" class="col-md-4 sidebar sidebar-left">
				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="ongoing.php"><span class="glyphicon glyphicon-globe"></span></a>View Users</h4>
						<p align="center">Track your Purchase Requests!</p>
					</div>
				</div>

				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="ongoing.php"><span class="glyphicon glyphicon-map-marker"></span><span>&nbsp;</span>Add Users</a><a href="notifications.php"></a></h4>
						<p align="center">PRs needing your attention!</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="search.php"><span class="glyphicon glyphicon-search"></span><span>&nbsp;</span><a href="notifications.php"><span>&nbsp;</span>Edit</a> User</a>s</h4>
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
									<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="assets/images/user.jpeg" class="img-circle img-responsive"> </div>
									<div class=" col-md-9 col-lg-9 "> 
										<table class="table table-user-information">
										<tbody>
										<tr>
											<td>Department</td>
											<td><?php echo ' '. getofc($_SESSION['user_ofc']) .'';?></td>
										</tr>
										<tr>
											<td>Position</td>
											<td>Administrator/Programmer</td>
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
	
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>