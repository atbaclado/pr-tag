<?php
	
	require '../php/startsess.php';
	require '../php/connectdb.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Purchase Request</title>
<style type="text/css">

#inputfield {
font-size:12px;
font-family:'Consolas';
position: static; 
size: 12px;
border: 1px solid #000;
border: none !important;
background-color:transparent !important;}

input[type="text"]{
height:20px; 
vertical-align:top;}

input[type=checkbox] {
transform: scale(2);
-ms-transform: scale(2);
-webkit-transform: scale(2);
padding: 10px;
}

.add_button{
margin-top:10px;
margin-left:10px;
vertical-align: text-bottom;}

.remove_button{ 
margin-top:10px; 
margin-left:10px;
vertical-align: text-bottom;}

#inputsfont{
font-size:12px;
font-family:'Consolas';
font-weight: bold;}

::-webkit-input-placeholder{
color: black !important;}

</style>
<!-- start: CSS -->
    <link rel="stylesheet" href="../css/generate.css">
    <link id="bootstrap-style" href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="../css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="../css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
	
	<style type="text/css"> a {text-decoration:none;} </style>

    <!-- start: JavaScript-->

        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/jquery-migrate-1.0.0.min.js"></script>
    
        <script src="../js/jquery-ui-1.10.0.custom.min.js"></script>
    
        <script src="../js/jquery.ui.touch-punch.js"></script>
    
        <script src="../js/modernizr.js"></script>
    
        <script src="../js/bootstrap.min.js"></script>
    
        <script src="../js/jquery.cookie.js"></script>
    
        <script src='../js/fullcalendar.min.js'></script>
    
        <script src='../js/jquery.dataTables.min.js'></script>

        <script src="../js/excanvas.js"></script>
        <script src="../js/jquery.flot.js"></script>
        <script src="../js/jquery.flot.pie.js"></script>
        <script src="../js/jquery.flot.stack.js"></script>
        <script src="../js/jquery.flot.resize.min.js"></script>
    
        <script src="../js/jquery.chosen.min.js"></script>
    
        <script src="../js/jquery.uniform.min.js"></script>
        
        <script src="../js/jquery.cleditor.min.js"></script>
    
        <script src="../js/jquery.noty.js"></script>
    
        <script src="../js/jquery.elfinder.min.js"></script>
    
        <script src="../js/jquery.raty.min.js"></script>
    
        <script src="../js/jquery.iphone.toggle.js"></script>
    
        <script src="../js/jquery.uploadify-3.1.min.js"></script>
    
        <script src="../js/jquery.gritter.min.js"></script>
    
        <script src="../js/jquery.imagesloaded.js"></script>
    
        <script src="../js/jquery.masonry.min.js"></script>
    
        <script src="../js/jquery.knob.modified.js"></script>
    
        <script src="../js/jquery.sparkline.min.js"></script>
    
        <script src="../js/counter.js"></script>
    
        <script src="../js/retina.js"></script>

        <script src="../js/custom.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
			$('#carousel').cycle({ 
				fx:     'scrollHorz', 
				timeout: 0, 
				easing: 'easeInOutBack',
				next:   '#next', 
				prev:   '#prev'
			});
        </script>
		
		<script type="text/javascript">
		$(document).ready(function(){
			var maxField = 10; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="../js/remove-icon.png"/></a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function(){ //Once add button is clicked
				if(x < maxField){ //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); // Add field html
				}
			});
			$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});
		</script>
		
		<script type="text/javascript">
			function selectOnlyThis(id){
				var pmode = document.getElementsByName("pmode");
				Array.prototype.forEach.call(pmode,function(el){
				el.checked = false;
				});
				id.checked = true;
			}
		</script>

    <!-- end: JavaScript-->
</head>

<body>
<!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid"">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>iBugs</span></a>
                                
                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white warning-sign"></i>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>   
                               
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>
                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                               
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have 9 messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>   
                                
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                yesterday
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                Jul 25, 2012
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> Katrina Anne S. Panerio
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->
                
            </div>
        </div>
    </div>
    <!-- start: Header -->

    <div class="container-fluid-full">

        <div class="row-fluid">
                
            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="HomePage.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Home</span></a></li>   
                        <li><a href="generatePR.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Generate</span></a></li>
                        <li><a href="HomePage.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Track</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->
        </div><!--end:row-fluid-->
		
<!-- ---- E D I T A B L E  P A R T ------- -->		

<!--START:CONTENT-->
<div id="content" class="span10">
	<div style="width: 900px; height: 1200px; position: static;">
	<img src="../img/f3.png" vspace="1%" hspace="12%"/></div>
	
	<div style="position:absolute; left: 190px; top: 60px;"> 
		<?php 
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];			
			echo $pr1.$pr2;
		?>
	</div>

	<!-- Cluster -->
	<div style="position:absolute; left: 780px; top: 100px; font-size:12px; font-family:'Consolas'; font-weight: bold;">
		<?php
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];	 
			
			$result1 = pg_query($dbconn, "SELECT office_name FROM office WHERE office_num = (SELECT pr_cluster FROM purchase WHERE pr_number1 = $pr1 and pr_number2 = $pr2)");
			$cluster = pg_fetch_array($result1);
            $_SESSION['placeholder-cluster'] = $cluster[0];
			echo $_SESSION['placeholder-cluster'];
		?>
	</div>
	
	<!-- Date 1 -->
	<div style="position:absolute; left: 780px; top: 130px; font-size:14px; font-family:'Consolas'; font-weight: bold;"><?php echo $_SESSION['date'];?></div>
	
	<!-- DV Number -->  
	<div style="position:absolute; left: 780px; top: 160px; font-size:14px; font-family:'Consolas'; font-weight: bold;"> 
		<?php 
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];	
			echo $pr1.$pr2;
		?>
	</div>
	
	<!--------------------- A L L   W I T H  C H E C K B O X  B E L O W ---------------------->
	
	<!-- Mode of Payment -->
	<div style="position:absolute; left: 325px; top: 175px;"><?php
	if($_SESSION['mod'] == 'MDS Check'){
		$S = "../img/checklogo.png"; 
		echo "<img src='$S' width='35 px' height='50 px'>";
	}?></div>
	
	<div style="position:absolute; left: 455px; top: 175px;"><?php
	if($_SESSION['mod'] == 'Commercial Clerk'){
	$S = "../img/checklogo.png";
		echo "<img src='$S' width='35 px' height='50 px'>";
	}?></div>
	
	
	<div style="position:absolute; left: 640px; top: 175px;"><?php
	if($_SESSION['mod'] == 'ADA'){
		$S = "../img/checklogo.png";
		echo "<img src='$S' width='35 px' height='50 px'>";
	}?></div>
	
	<div style="position:absolute; left: 728px; top: 175px;"><?php 
	if($_SESSION['mod'] != 'MDS Check' && $_SESSION['mod'] != 'Commercial Clerk' && $_SESSION['mod'] != 'ADA'){
		$S = "../img/checklogo.png"; 
		echo "<img src='$S' width='35 px' height='50 px'>";
	}?></div>
	
	<div style="position:absolute; left: 820px; top: 180px;">
	<input id="inputfield" type="text" style="width:125px;" name="otherpmode"><?php 
	if($_SESSION['mod'] != 'MDS Check' && $_SESSION['mod'] != 'Commercial Clerk' && $_SESSION['mod'] != 'ADA'){
		echo $_SESSION['mod'];
	}?></input></div>
	
	<!-- Certifies -->		
	<div style="position:absolute; left: 230px; top: 750px;"><?php 
	if($_SESSION['val1'] != NULL){
		$S = "../img/checklogo.png"; 
		echo "<img src='$S' width='35 px' height='50 px'>";
	}?></div>
	
	
	<div style="position:absolute; left: 230px; top: 770px;"><?php 
	if($_SESSION['val2'] != NULL){
		$S = "../img/checklogo.png"; 
		echo "<img src='$S' width='35 px' height='50 px'>";
	}?></div>
	
	
	<div style="position:absolute; left: 230px; top: 800px;"><?php 
	if($_SESSION['val3'] != NULL){
		$S = "../img/checklogo.png"; 
		echo "<img src='$S' width='35 px' height='50 px'>";
	}?></div>
	
	<!--------------------- A L L   W I T H  C H E C K B O X  A B O V E ---------------------->
	
	
	<!-- Payee -->
	<div style="position:absolute; left: 270px; top: 218px;">
	<input id="inputfield" name="ppayee" type="text" style="width:306px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select payee_name from payment where payee_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-payee'] = $r[0];
		echo $_SESSION['placeholder-payee'];
	?>" readonly></input></div>
		
	
	<!-- Employee number -->
	<div style="position:absolute; left: 600px; top: 227px;">
	<input id="inputfield" name="pempnum" type="text" style="width:163px;height:15px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select payee_tinnum from payment where payee_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-empnum'] = $r[0];
		echo $_SESSION['placeholder-empnum'];
	?>" readonly></input></div>
			
	
	<!-- ORS/BURS Number -->	
	<div style="position:absolute; left: 788px; top: 227px;">
	<input id="inputfield" name="pobr" type="text" style="width:165px;height: 15px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select payee_obrnum from payment where payee_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-ors'] = $r[0];
		echo $_SESSION['placeholder-ors'];
	?>" readonly></input></div>
		
		
	<!-- Telephone Number -->
	<div style="position:absolute; left: 840px; top: 255.5px;">
	<input id="inputfield" name="ptelephone" type="text" style="width:120px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select payee_contactno from payment where payee_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-num'] = $r[0];
		echo $_SESSION['placeholder-num'];
	?>" readonly></input></div>
			
			
	<!-- Payee Address --> 
	<div style="position:absolute; left: 270px; top: 255.5px;">
	<input id="inputfield" name="paddress" type="text" style="width:495px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select payee_address from payment where payee_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-add'] = $r[0];
		echo $_SESSION['placeholder-add'];
	?>" readonly></input></div>
	
	
	<!-- Particulars -->
	<div style="position:absolute; left: 210px; top: 340px;">
	<textarea id="inputfield" name="dparticular" type="text" style="height: 160px;width:310px;resize:none;overflow:auto;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select dv_particular from disbursement where dv_number = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-part'] = $r[0];
		echo $_SESSION['placeholder-part'];
	?>" readonly></textarea></div>
			
			
	<!-- Resposibility Center -->
    <div style="position:absolute; left: 560px; top: 340px; font-size:14px; font-family:'Consolas'; font-weight: bold;">
        <?php
            $pr1 = $_SESSION['pr1'];
            $pr2 = $_SESSION['pr2'];    
            
            $result2 = pg_query($dbconn, "select re_title from rescenter where re_code = (select pr_rcencode from purchase where pr_number1 = $pr1 and pr_number2 = $pr2)");
            $rescod = pg_fetch_array($result2);
            $_SESSION['rscod'] = $rescod[0];
            echo $_SESSION['rscod'];
        ?>
    </div>
	
	<!-- MFO PAP -->
	<div style="position:absolute; left: 705px; top: 340px;">
	<textarea id="inputfield" name="dmfop" type="text" style="height: 160px;width:115.5px;resize:none;overflow:auto;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select dv_mfopap from disbursement where dv_number = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-mfo'] = $r[0];
		echo $_SESSION['placeholder-mfo'];
	?>" readonly></textarea></div>
		
	
	<!-- AMOUNT -->
	<div style="position:absolute; left: 840px; top: 340px;">
	<textarea id="inputfield" name="damount" type="text" style="height: 160px;width:123px;resize:none;overflow:auto;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select dv_amount from disbursement where dv_number = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-amt'] = $r[0];
		echo $_SESSION['placeholder-amt'];
	?>" readonly></textarea></div>
	
	
	<!-- Amount Due -->
	<div style="position:absolute; left: 850px; top: 545px;font-size:11px; font-family:'Consolas'; font-weight: bold;"> due amount here </div>
	
	
	<!-- Account Title -->
	<div style="position:absolute; left: 200px; top: 690px;">
	<input id="inputfield" name="title" type="text" style="width:405px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select acc_title from accounting where acc_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-acctitle'] = $r[0];
		echo $_SESSION['placeholder-acctitle'];
	?>" readonly></input></div>
	
	
	<!-- UACS Code -->
	<div style="position:absolute; left: 630px; top: 690px;">
	<input id="inputfield" name="uacs" type="text" style="width:87px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select acc_uacscode from accounting where acc_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-uacs'] = $r[0];
		echo $_SESSION['placeholder-uacs'];
	?>" readonly></input></div>
	
	
	<!-- Debit -->
	<div style="position:absolute; left: 739px; top: 690px;">
	<input id="inputfield" name="debit" type="text" style="width:95px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select acc_debit from accounting where acc_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-debit'] = $r[0];
		echo $_SESSION['placeholder-debit'];
	?>" readonly></input></div>
	
	
	<!-- Credit -->
	<div style="position:absolute; left: 858px; top: 690px;">
	<input id="inputfield" name="credit" type="text" style="width:100px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select acc_credit from accounting where acc_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-credit'] = $r[0];
		echo $_SESSION['placeholder-credit'];
	?>" readonly></input></div>	
	
	<!-- Amount in words -->
	<div style="position:absolute; left:630px; top: 793px;">
	<textarea id="inputfield" name="office" type="text" style="width:330px; height: 20px;resize:none;overflow:auto;font-size:10px;font-family:'Consolas';font-weight: plain;" placeholder="<?php
        require '../php/amtinwords.php';
        echo int_to_words($_SESSION[amtwords])." pesos";
	?>" readonly></textarea></div>
	
	<!-- ADA NUMBER -->
	<div style="position:absolute; left:320px; top: 960px;">
	<input id="inputfield" name="ada" type="text" style="width:140px;height: 18px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select re_adanum from receipt where re_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-ada'] = $r[0];
		echo $_SESSION['placeholder-ada'];
	?>" readonly></input></div>
	
	<!-- Bank Name -->
	<div style="position:absolute; left:720px; top: 935px;">
	<input id="inputfield" name="bname" type="text" style="width:115px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select re_bankname from receipt where re_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-bn'] = $r[0];
		echo $_SESSION['placeholder-bn'];
	?>" readonly></input></div>
	
	<!-- Account Number -->
	<div style="position:absolute; left:750px; top: 975px;">
	<input id="inputfield" name="accnum" type="text" style="width:90px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select re_accnum from receipt where re_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-accnum'] = $r[0];
		echo $_SESSION['placeholder-accnum'];
	?>" readonly></input></div>
		
	<!-- JEV Number -->
	<div style="position:absolute; left:875px; top: 975px;">
	<input id="inputfield" name="jev" type="text" style="width:75px;" required="required" placeholder="<?php
		$result1 = pg_query($dbconn, "select re_jevno from receipt where re_dvnum = $_SESSION[dv]");
		$r = pg_fetch_array($result1);
		$_SESSION['placeholder-jev'] = $r[0];
		echo $_SESSION['placeholder-jev'];
	?>" readonly></input></div>
	
	<!-- Signature Above Payee Name -->
	<div style="position:absolute; left:310px; top: 1062px;">
	<input id="inputfield" name="office" type="text" style="width:180px;" required="required" placeholder="<?php echo $_SESSION['placeholder-payee']; ?>" readonly>
	</input></div>	
	
	<!-- Printed Name -->
	<div style="position:absolute; left:635px; top: 1062px;">
	<!-- <input id="inputfield" name="office" type="text" style="width:210px;" required="required" placeholder=" "></input>-->
	</div>
	
	<!-- Date 2 -->
	<div style="position:absolute; left:553px; top: 966px; font-size:14px; font-family:'Consolas'; font-weight: bold;"><?php echo $_SESSION['date'];?></div>
	
	<!-- Date 3 -->
	<div style="position:absolute; left: 875px; top: 1070px; font-size:14px; font-family:'Consolas'; font-weight: bold;"><?php echo $_SESSION['date'];?></div>
		
	<form action="../php/disbursementreq.php" method="POST">
		<!-- Edit button -->
		<div style="position:fixed; left: 92%; top: 78px;">
		<input name="editdv" type="submit" id="button" value=" EDIT  " /></input></div>
		
		<!-- Next button -->
		<div style="position:fixed; left: 92%; top: 105px;">
		<input name="nextdv" type="submit" id="button" value=" NEXT " /></input></div>
	</form> 
	
	
</div><!--end:CONTENT-->


<!-- ---- E N D  E D I T A B L E  P A R T ------- -->	

 <!--MODAL THING-->
        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        
        <div class="clearfix"></div>  
    </div><!--end:fuid-container-->       

  <footer>
        <p>
            <span style="text-align:left;float:left;">&copy; 2016 iBugs Purchase Request Tracker</span>
        </p>

    </footer>

</body>
</html>

