<?php
	require 'php/startsess.php';
	if(isset($_SESSION['user']) && $_SESSION['user'] != 1) {
		if($_SESSION['user_lvl'] == 2) {
			header('Location: admin.php');
		}else {
			header('Location: user_home.php');
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>iBugs - Purchase Request Generator Tracker</title>

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


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home" style="background-color:black !important;">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="home.php"><img src="assets/images/logos.png" alt="Progressus HTML5 template"></a>
			</div>
			<p>
			  <?php require 'menu.php'; ?>
			  <!--/.nav-collapse --> </p>
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head" style="margin-top: 100px !important;">
		<div class="container">
			<div class="row">
				<h1 class="lead">Purchase Request Generator</h1>
				<p class="tagline">A secure and convenient way of generating and tracking Purchase Request</p>
				<p>
				<!-- <a class="btn btn-default btn-lg" role="button">Contact Support</a> -->

				<a class="btn btn-action btn-lg" role="button" href="signin.php">Log In</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	
	<!-- /Highlights -->

	<?php require 'footer.php'; ?>	

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>