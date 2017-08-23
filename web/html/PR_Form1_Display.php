<?php
  require 'php/startsess.php';
  require 'php/connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>iBugs - PR Request Form 1</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- new css -->
    <link rel="stylesheet" href="assets/css/subbuttons.css">
     <link rel="stylesheet" href="assets/css/labelbuttons.css">
    
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<style type="text/css">
	
	<style type="text/css">
	#inputfield {font-size:12px;
	font-family:'Consolas';
	position: static; 
	size: 22px;
	border-style: none;
    border-bottom: 1px solid black !important;
	background-color:transparent !important;}
    </style>

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
				<a class="navbar-brand" href="index.php"><img src="assets/images/logos.png" alt="Progressus HTML5 template"></a>
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
			<!-- <li><a href="index.php">Home</a></li>
			<li class="active">> Create PR</li>
			<li >  View PR</li>
			<li >  Download PR</li>
			<li >  Send PR</li>
			<li >  Finish and Track PR</li> -->
		</ol>

	  <div class="row">
			
			<!-- Sidebar -->
            <form action="php/purchasereq.php" method="POST">
		  <aside id="activerSide" class="col-md-4 sidebar sidebar-left">

				<div class="row widget">
					<div  id="activerRow" class="col-xs-12">
						<!-- <h4 class="btn" id="activer"><a href="pr1.php">Purchase Request</a></a></h4> -->
                       	<h4 class="labelbutton" id="activer"><a href="PR_Form1_Display.php">Purchase Request</a></a></h4>
						<p align="center">
                         
                        <!-- <input type="image"name="newpr" width="100" value="submit" src="button.png" /> -->
                        <input class="subbutton" type="submit" name="editpr" width="100" value="EDIT"/> &nbsp;
                        <input class="subbutton" type="submit" name="nextpr" width="100" value="NEXT"/>
                        
                        </p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12" style="border-bottom:2px solid black;">
                        <h4 class="labelbutton" id="activer"><a href="PR_Form2_Display.php">Disbursement Voucher</a></a></h4>
						<p></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4 class="labelbutton" id="activer"><a href="PR_Form3_Display.php">Obligation Request</a></h4>
						
					</div>
				</div>
				
		</aside>
        </form>
			  <!-- /Sidebar -->
      	
      	<article class="col-md-8 maincontent">

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 align=left
 width=868 style='width:730.25pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;
 margin-right:6.75pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:
 column;mso-table-left:left;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:60.5pt'>
  <td colspan=11 valign=top style='width:533.0pt;border:solid windowtext 1.0pt;
  border-bottom:none;padding:0in 5.4pt 0in 5.4pt;height:60.5pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:column;mso-height-rule:exactly'><span
  style='mso-no-proof:yes'>

<img src="HomeLogo.jpg" alt="add more" style="width: 75px; height: 75px;"/>


<![endif]><b><span
  lang=EN-US style='font-size:14.0pt;line-height:115%'>PURCHASE REQUEST<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><b><i><span
  lang=EN-US style='font-size:12.0pt;line-height:115%'>University of the
  Philippines Cebu<o:p></o:p></span></i></b></p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  class=SpellE><span lang=EN-US style='font-size:11.0pt;line-height:115%'>Lahug</span></span><span
  lang=EN-US style='font-size:11.0pt;line-height:115%'>, Cebu City</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:17.2pt'>
  <td width=364 colspan=5 rowspan=2 valign=top style='width:273.1pt;border:
  solid windowtext 1.0pt;border-right:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.2pt'>
  <p class=MsoNormal align=left style='text-align:left;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Office: <u>


     <?php
      $q = "SELECT office_name FROM office WHERE office_num = " . $_SESSION['user_ofc'];
      $r = pg_query($dbconn, $q);
      if(!$r) {
        $errormessage = pg_last_error();
        echo "Error with query print name: ". $errormessage;
        exit();
      }
      $name = pg_fetch_result($r, 0, 'office_name');
      
      echo $name;
    ?>



  <span class=SpellE>ofc</span><o:p></o:p></u></span></p>
  </td>
  <td width=161 colspan=3 style='width:120.7pt;border:none;border-top:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.2pt'>
  <p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>PR No.:<span style='mso-spacerun:yes'> 


    <!-- PR NUMBER -->
  <?php  
      $date = date("Y-m-d");
      $datearray = explode("-", $date);
      $_SESSION['date'] = $date;

      $prnum = $datearray[0].$datearray[1];
      $pr1 = intval($prnum);
      $_SESSION['pr1'] = $pr1;

      $result = pg_query($dbconn, "SELECT max(pr_number2) FROM purchase where pr_number1 = $pr1");
      if(!$result) {
        $errormessage = pg_last_error();
        echo "Error with query: ". $errormessage;
        exit();
      }else {
        $chkarr = pg_fetch_array($result);
        $max = intval($chkarr[0]) + 1;
        $_SESSION['pr2'] = $max;
      }
      echo $datearray[0].' - '.$datearray[1].' - '.$max;
    ?>

   </span><u><span
  class=SpellE></span></u></span></p>
  </td>
  <td width=186 colspan=3 style='width:139.2pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.2pt'>
  <p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Date:<span style='mso-spacerun:yes'>  </span><u>

    <?php echo $_SESSION['date'];?>

</u></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:16.95pt'>
  <td width=161 colspan=3 style='width:120.7pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.95pt'>
  <p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>SAI No.: </span></p>
  </td>
  <td width=186 colspan=3 style='width:139.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.95pt'>
  <p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Date:</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.3pt'>
  <td width=85 style='width:63.8pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Quantity</span></p>
  </td>
  <td width=63 colspan=2 style='width:47.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Unit of Issue</span></p>
  </td>
  <td width=306 colspan=4 style='width:229.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Item Description</span></p>
  </td>
  <td width=71 style='width:53.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>Stock Number</p>
  </td>
  <td width=90 colspan=2 style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Estimated Unit Cost</span></p>
  </td>
  <td width=96 style='width:71.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Estimated Total Cost</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:394.95pt'>
  <td width=85 valign=top style='width:63.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:394.95pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>

 <?php
                     
                     	foreach($_SESSION['qty'] as $key => $value)  {
							   echo '<p align="center">';
								echo $value;
							   echo '</p>';
						}	
					 ?>
                     

</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:47.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:394.95pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>
 <?php
                      	$unit = $_SESSION['unit'];
                     	foreach($_SESSION['qty'] as $key => $value)  {
							   echo '<p align="center">';
							   echo $unit[$key];
							   echo '</p>';
						}	
					 ?>

</span></p>
  </td>
  <td width=306 colspan=4 valign=top style='width:229.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:394.95pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US><span class=SpellE>


                     <?php
                      	 $desc = $_SESSION['desc'];
                     	foreach($_SESSION['qty'] as $key => $value)  {
							   echo '<p align="center">';
								echo $desc[$key];
							   echo '</p>';
						}
							
					 ?>
  </span></span></p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'>&nbsp;</p>
  </td>
  <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:394.95pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US><span class=SpellE></span></span></p>
  </td>
  <td width=90 colspan=2 valign=top style='width:67.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:394.95pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US><span class=SpellE>

  
                    <?php
                      	$ucost = $_SESSION['ucost'];
                     	foreach($_SESSION['qty'] as $key => $value)  {
							   echo '<p align="center">';
								echo $ucost[$key];
							   echo '</p>';
						}	
					 ?>

</span></span></p>
  </td>
  <td width=96 valign=top style='width:71.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:394.95pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US><span class=SpellE>
 <?php
                      	$ucost = $_SESSION['ucost'];
						$qtt = $_SESSION['qty'];
						
						
                     	foreach($_SESSION['qty'] as $key => $value)  {
							   echo '<p align="center">';
							 	//echo $tottal[$key];
								$prod = $ucost[$key]*$qtt[$key];
								$tcost[] = $prod;
								$sum = $sum + $prod;
								echo $prod;
							    echo '</p>';
						}
						

						$_SESSION['tcost'] = $tcost;
						$_SESSION['totalamt'] = $sum;	
					 ?>

</span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.8pt'>
  <td width=615 colspan=10 valign=top style='width:461.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.8pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>TOTAL</span></p>
  </td>
  <td width=96 valign=top style='width:71.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.8pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>

  <?php
               echo $_SESSION['totalamt'];
        ?>

</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:12.8pt'>
  <td width=711 colspan=11 valign=top style='width:533.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.8pt'>
  <p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Purpose:   <?php 
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];
			
			$result = pg_query($dbconn, "select pr_purpose from purchase where pr_number1 = $pr1 and pr_number2 = $pr2;");
			if(!$result) {
				$errormessage = pg_last_error();
				echo "Error with query: ". $errormessage;
				exit();
			}else {
				$chkarr = pg_fetch_array($result);
				echo $chkarr[0];
			}
		?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:12.3pt'>
  <td width=142 colspan=2 valign=top style='width:106.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=142 colspan=2 style='width:106.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Requested by:</span></p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>(Approving Officer)</span></p>
  </td>
  <td width=142 colspan=2 style='width:106.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Certified Funds Available/</span></p>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Request in PPMP/APP</span></p>
  </td>
  <td width=142 colspan=3 style='width:106.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Recommended by:</span></p>
  </td>
  <td width=142 colspan=2 style='width:106.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.3pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Approved by:</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:15.45pt'>
  <td width=142 colspan=2 style='width:106.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.45pt'>
  <p class=MsoNormal align=left style='text-align:left;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Signature:</span></p>
  </td>
  <td width=142 colspan=2 rowspan=4 valign=top style='width:106.6pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.45pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><b><span
  lang=EN-US>#<span class=SpellE>appofcr</span><o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>#<span class=SpellE>desig</span></span></p>
  </td>
  <td width=142 colspan=2 rowspan=4 valign=top style='width:106.55pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.45pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><b><span
  lang=EN-US><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><b><span
  lang=EN-US>Dr. Marie Jane <span class=SpellE>Matero</span><o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Budget Officer</span></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=142 colspan=3 rowspan=4 valign=top style='width:106.6pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.45pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><b><span
  lang=EN-US><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><b><span
  lang=EN-US>Dr. <span class=SpellE>Leahlizbeth</span> A. <span class=SpellE>Sia</span><o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  class=SpellE><span lang=EN-US>Asso</span></span><span lang=EN-US>. Dean for
  Admin</span></p>
  </td>
  <td width=142 colspan=2 rowspan=4 valign=top style='width:106.7pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.45pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><b><span
  lang=EN-US><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><b><span
  lang=EN-US>Atty. Liza D. <span class=SpellE>Corro</span><o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:150%;
  mso-pagination:none;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Dean</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:16.2pt'>
  <td width=142 colspan=2 style='width:106.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.2pt'>
  <p class=MsoNormal align=left style='text-align:left;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Printed Name:</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:14.7pt'>
  <td width=142 colspan=2 style='width:106.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.7pt'>
  <p class=MsoNormal align=left style='text-align:left;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Designation:</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;mso-yfti-lastrow:yes;height:15.3pt'>
  <td width=142 colspan=2 style='width:106.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.3pt'>
  <p class=MsoNormal align=left style='text-align:left;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:36.75pt;mso-element-top:35.65pt;mso-height-rule:exactly'><span
  lang=EN-US>Date:</span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=85 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=6 style='border:none'></td>
  <td width=136 style='border:none'></td>
  <td width=80 style='border:none'></td>
  <td width=62 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=71 style='border:none'></td>
  <td width=43 style='border:none'></td>
  <td width=47 style='border:none'></td>
  <td width=96 style='border:none'></td>
 </tr>
 <![endif]>
</table>



      	</article>
 	

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>