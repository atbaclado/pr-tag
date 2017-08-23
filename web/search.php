<?php
	require 'php/startsess.php';
	require 'restrict.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>iBugs - Search</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<style type="text/css">
	#inputfield {font-size:12px;
	font-family:'Consolas';
	position: static; 
	size: 22px;
	border: none !important;
	background-color:transparent !important;}
    </style>
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
            <li class="active">Search</li>
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
					<div id="activerRow" class="col-xs-12">
						<h4 class="btn" id="activer"><span class="glyphicon glyphicon-search"></span><span>&nbsp;</span>Search</h4>
						<p align="center">Find your Purchase Requests!</p>
					</div>
				</div>
			</aside>
			<!-- /Sidebar -->
			<br><br>
			<!-- Article main content -->
           
			<article class="col-md-8 maincontent">
            
				<form class="navbar-form navbar-right" role="search" method="get">
                    <div class="form-group" > 
                    	<select name = "status" style="height: 32px">
                        	 <option value="pr_number">PR Number</option>
                             <option value="pr_date">PR Date</option>
                             <option value="pr_ticular">Particulars</option>
                        </select>
						<input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
             
				<table class="table">
					<thead>
					  <tr>
						<th>PR Number</th>
						<th>Date</th>
						<th>Purpose</th>
						<th>View PR Form</th>
						<th>Create DV</th>
						<th>View Track Progress</th>
					  </tr>
					</thead>
					<tbody>
					<form action="php/track_setpr.php" method="get">
					<?php 
						require 'php/connectdb.php';
						$rs = 0;
						$stats = $_GET['status'];
						$serchu = $_GET['search'];

						if(strlen($_GET['search']) == 0){
							echo "Input needed";
						}

						if($stats == 'pr_number') {
							$query = "SELECT * FROM purchase where pr_id = $serchu AND pr_office = " . $_SESSION['user_ofc'];
							$result = pg_query($dbconn,$query);
							$rs = pg_num_rows($result);

							if($rs == 0){
								echo '<tr class="warning"><td>No Purchase Request Found</td><td></td><td></td><td></td><td></td><td></td></tr>';
							}else {
								echo 'Number of results: '.$rs;
								$_SESSION['prnum'] = $serchu;
								$prid = pg_fetch_result($result, 0, 'pr_id');
								$_SESSION['prid'] = $prid;
								require 'pr_details.php';
							}
						}else if($stats == 'pr_date') {
							$query = "SELECT * FROM purchase WHERE pr_date::text LIKE '$serchu' AND '$stats' LIKE 'pr_date' AND pr_office = " . $_SESSION['user_ofc'];

							$result = pg_query($dbconn,$query);
							$rs = pg_num_rows($result);
							
							if($rs == 0){
								echo '<tr class="warning"><td>No Purchase Request Found</td><td></td><td></td><td></td><td></td><td></td></tr>';
							} else {
								echo 'Number of results: '.$rs;
							}

						}else if($stats == 'pr_ticular') {
							$query = "SELECT * FROM purchase INNER JOIN item ON pr_id = item_prid WHERE pr_date::text LIKE '$serchu' AND '$stats' LIKE 'pr_date' AND pr_office = " . $_SESSION['user_ofc'];

							$result = pg_query($dbconn,$query);
							$rs = pg_num_rows($result);
							
							if($rs == 0){
								echo '<tr class="warning"><td>No Purchase Request Found</td><td></td><td></td><td></td><td></td><td></td></tr>';
							} else {
								echo 'Number of results: '.$rs;
							}
						}

						for($ri = 0; $ri < $rs; $ri++) {
							$row = pg_fetch_array($result, $ri);
							echo 			
							 ' <tr class="success">
							<td>'. $row['pr_number'] . ' </td>
							<td>'. $row['pr_date'] .'</td>
							<td>'. $row['pr_purpose'] .'</td>
							<input type="hidden" name="num[]" value="'.$row['pr_number'].'">
							<input type="hidden" name="id[]" value="'.$row['pr_id'].'">
							<td><a href="PR_Form1_Display.php">View</a></td>
							<td><a href="PR_Form3_Input.php">Create</a></td>
							<td><input name="viewer" value="'.($ri+1).'" type="submit" class="btn btn-default"/></td></tr>';		
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