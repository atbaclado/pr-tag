<?php
	require 'php/startsess.php';
	unset($_SESSION['check']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>iBugs - Notifications</title>
    
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
			<li><a href="home.php">Home</a></li>
			<li class="active">Notifications</li>
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
					<div id="activerRow" class="col-xs-12">
						<h4 class="btn" id="activer"><span class="glyphicon glyphicon-globe"></span><span>&nbsp;</span>Notification</h4>
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
                  
				</header> <h4>Notifications</h4>  
                <table class="table">
    <thead>
      <tr>
        <th>PR Number</th>
        <th>Date</th>
        <th>Status</th>
        <th>View Result No.</th>
      </tr>
    </thead>
    <tbody>

     
	<form action = "php/track_setpr.php" method="get">
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
			if(!$result) {
				$errormessage = pg_last_error();
				$_SESSION['errormsg'] = 'Notifications. ' . $errormessage;
				header('Location: ../err_unexpected.php');
			}
			$rs = pg_num_rows($result);
			
			
			for($ri = 0; $ri < $rs; $ri++) {
				
				$row = pg_fetch_array($result, $ri);
				if( $row['track_status'] == 'Declined'){
				 	 echo '<tr class="danger">';
				 } else if($row['track_status'] == 'Pending'){
				 	echo	'<tr class="warning">';
				 }else{
				 	echo '<tr class="success">';
				 }
				echo
				 '
			<td><a href="#">'. $row['pr_number'] .'</a></td>
			<td>'. $row['pr_date'] .'</td>
			<td>'. $row['track_status'] .'</td>
			<input class="hidden" type="number" value="'.$row['pr_id'].'" name="id[]" />
			<input class="hidden" type="number" value="'.$row['pr_number'].'" name="num[]" />
			<td><input class="btn btn-default" type="submit" value="'. ($ri+1) .'"   name="viewer" /></td></td> 
			</tr>';
					
			}
		
		?>
    </form>
      
    </tbody>
  </table>
		  </article>
			<!-- /Article -->

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