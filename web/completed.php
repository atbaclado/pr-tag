<?php
	require 'php/connectdb.php';
	require 'php/startsess.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>iBugs - Completed PRs</title>
    
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
			<!--.nav-collapse -->
				<?php require 'menu.php'; ?>
			<!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="user_home.php">Home</a></li>
			<li class="active">PR Status</li>
		</ol>

		<div class="row">
			<!-- Sidebar -->
		 	<aside id="activerSide" class="col-md-4 sidebar sidebar-left" style="height:450px;">
				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="ongoing.php">On Going PRs</a></h4>
						<p>PRs that are currently tracked</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="attention.php">Needs Attention!</a></h4>
						<p>PRs that are placed On Hold</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="declined.php">Declined PRs</a></h4>
						<p>PRs that were declined</p>
					</div>
				</div>
				<div class="row widget">
					<div id="activerRow" class="col-xs-12">
						<h4 class="btn" id="activer">Completed PR</h4>
						<p>PRs that were completed</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="btn" id="activer"><a href="draft.php">Draft PRs</a></h4>
						<p>PRs that are not yet tracked</p>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
				  <h1 class="page-title"></h1>
				</header>
				<h4>Completed Purchase Request </h4>  
				<div class=" col-md-9 col-lg-9 "> 
					<table class="table table-user-information">
					<thead>
					  <tr>
						<th>PR Number</th>
						<th>Date</th>
						<th>Purpose</th>
						<th>Create DV</th>
						<th>View Result No.</th>
					  </tr>
					</thead>
					<tbody>
						<form action="php/track_setpr.php" method="get">
							<?php
								$query = "SELECT * FROM tracking , purchase WHERE (track_flow = " . $_SESSION['user_ofc'] . " OR track_office = " . $_SESSION['user_ofc'] . ") AND track_details = 'PR Completed' AND pr_id = track_prid";
								$result = pg_query($dbconn,$query);
								if(!$result) {
									$errormessage = pg_last_error();
									$_SESSION['errormsg'] = 'PR completed. ' . $errormessage;
									header('Location: ../err_unexpected.php');
								}
								$rs = pg_num_rows($result);
								if($rs == 0) {
									echo '<tr class="warning"><td>No Purchase Request Found</td><td></td><td></td><td></td><td></td></tr>';
								}else {
									for($ri = 0; $ri < $rs; $ri++) {
										$row = pg_fetch_array($result, $ri);
										echo  ' <tr class="warning">			
										<td><a href="#">'. $row['pr_number'] . ' </a></td>
										<td>'. $row['pr_date'] .'</td>
										<td>'. $row['pr_purpose'] .'</td>
										<input class="hidden" type="number" value="'.$row['pr_number'].'" name="num[]" />
										<input class="hidden" type="number" value="'.$row['pr_id'].'" name="id[]" />
										<td><input name="create" value="Create" type="submit"/></td>
										<td><input class="btn btn-default" type="submit" value="'. ($ri+1) .'"   name="viewer" /></td></tr>';	
									}
								}
							?>
						</form>
					</tbody>
					</table>
				</div>
			</article> <!-- /Article -->
		</div> <!-- /Row -->
	</div>	<!-- /Container -->
	
	<?php require 'footer.php'; ?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>