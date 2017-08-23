<?php
	require 'php/startsess.php';
	require 'php/connectdb.php';
	require 'php/track_currofc.php';
	require 'php/getofc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Tracker</title>

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

  <link rel="stylesheet" href="assets/css/subbuttons.css">
  <link rel="stylesheet" href="assets/css/labelbuttons.css">

  <link rel="stylesheet" href="assets/css/pricing-table-basic.css">

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
				<a class="navbar-brand" href="home.php"><img src="assets/images/logos.png" alt="Progressus HTML5 template"></a>
			</div>
			<?php require 'menu.php'; ?>
			<!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<ol class="breadcrumb">
		<li class="active"><a href="user_home.php">Home</a></li>
		<li class="active"><a href="ongoing.php">Tracker</a></li>
        <li class="active">View</li>
	</ol>

	<header id="head" class="secondary"></header>
	<hr>
	<div></div>
	<h2 class="text-center">Purchase Request Tracker</h2>
	<h3 class="text-center">PR No. <?php echo $_SESSION['pr1'] . $_SESSION['pr2']; ?></h3>
	
	<?php require 'php/getDetails.php' ?>
	<!-- <div align="center">
		<a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Toggle popover</a>
	</div> -->

	<hr>

	<!-- container -->
	<div class="container">

	<div class="pricing-table-basic">
    
		<div class = "<?php currently(1, 1); ?>">
            <?php currently(2, 1); ?>
			<h2> <strong> <?php getofc($_SESSION['pr_ofc']); ?> </strong> </h2>
            <div> <?php getofcr($_SESSION['pr_ofc']); ?> </div>
		</div>

        <div class = "<?php currently(1, 2); ?>">
        	<?php currently(2, 2); ?>
          	<h2><strong> <?php getordfc(2); ?> </strong></h2>
            <div> <?php getordfcr(2); ?> </div>
        </div>

        <div class = "<?php currently(1, 3); ?>">
       		<?php currently(2, 3); ?>
			<h2> <strong> <?php getordfc(3); ?> </strong> </h2>
			<div> <?php getordfcr(3); ?> </div>
        </div>
        
        <div class = "<?php currently(1, 4); ?>">
        	<?php currently(2, 4); ?>
			<h2> <strong> <?php getordfc(4); ?> </strong> </h2>
            <div> <span> <?php getordfcr(4); ?> </span></div>
        </div>

		<hr>
    </div>

	
    <div class="center-block" align="center" style="margin-top:-50px;">
    	<?php 
    		if($_SESSION['user_pos'] == 'clerk') {
	    		require 'php/tbl1_disp.php';
	    	}else {
	    		require 'php/tbl2_disp.php';
	    	}
    	?>
    </div>

</div>
<!-- /container -->


	<?php require 'footer.php'; ?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>