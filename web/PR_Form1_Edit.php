<?php
  require 'php/startsess.php';
  require 'php/connectdb.php';
  require 'restrict.php';

  $q = "SELECT * FROM tracking WHERE track_prid = " . $_SESSION['prid'];
  $r = pg_query($dbconn, $q);
  if(!$r) {
      $errormessage = pg_last_error();
      echo "Error with query form 1: ". $errormessage;
      echo '<br>pr1: ' . $_SESSION['pr1'] . ' pr2:' . $_SESSION['pr2'];
      exit();
  }

  $row = pg_num_rows($r);
  if($row == 1) {
    header('Location: err_formedit.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>iBugs - PR Request Form 1</title>
     <style>
        .add_button{
        margin-top:10px;
        margin-left:10px;
        vertical-align: text-bottom;}

        .remove_button{ 
        margin-top:10px; 
        margin-left:10px;
        vertical-align: text-bottom;}

        .inline-fields label {
        display: inline-block;

        #inputfield {font-size:12px;
        font-family:'Consolas';
        position: static; 
        size: 22px;
        border-style: none;
        border-bottom: 1px solid black !important;
        background-color:transparent !important;}	
  </style>

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

  <script src="assets/js/addtxtfield.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    var maxField = 5; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.form-group'); //Input field wrapper
    var fieldHTML = '<div class="row-fluid">' +
    '<label><input type="number" name="qty[]" placeholder="Quantity" style="width:65px; margin-left:0px;" required/></label>'+
    '<label><input type="text" name="unit[]" style="width:86px; margin-left:2px;" required="required" placeholder="Unit"></input></label>'+
    '<label><textarea type="text" name="desc[]" style="width:295px; margin-left:2px; height: 70px;" required="required" placeholder="Description"></textarea></label>'+
    '<label><input type="number" style="width:110px; margin-left:2px; border: none !important;" disabled></input></label>'+
    '<label><input type="number" name="ucost[]" style="width:102px; margin-left:2px;" required="required" placeholder="Unit Cost"></input></label>'+
    '<label><input type="number" style="width:48px; margin-left:2px; border: none !important;" disabled></input></label>'+
    '<a href="javascript:void(0);" class="remove_button" title="Remove field">' + 
    '<img src="assets/js/remove-icon.png" style="width: 18px; height: 18px;"/></a></div>';
    //New input field html 

    var x = 1; //Initial field counter is size of items
      $(addButton).click(function(){ //Once add button is clicked
      if(x < maxField){ //Check maximum number of input fields
      x++; //Increment field counter
      $(wrapper).append(fieldHTML); // Add field html
      }});
      $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
      }); });
  </script>

</head>
  <body style="tab-interval:21pt;text-justify-trim:punctuation;">
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top headroom" >
  <div class="navbar-header">

  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  <a class="navbar-brand" href="user_home.php"><img src="assets/images/logos.png" alt="Progressus HTML5 template"></img></a>
  </div>
    <?php require 'menu.php'; ?> 
  </div>
  </div>  

	<header id="head" class="secondary"></header> 
  <div class="container">      
  <div class="row">
				
  
  <!-- Sidebar -->
  <form action="php/purchasereq.php" method="POST">
  <aside id="activerSide" class="col-md-4 sidebar sidebar-left">

  <div class="row widget">
  <div  id="activerRow" class="col-xs-12">
    <h4 class="labelbutton" id="activer"><a href="PR_Form1_Display.php">Purchase Request</a></a></h4>
  <p align="center">
    <input class="subbutton" type="submit" name="updatepr" width="100" value="UPDATE"/> &nbsp;
    <input class="subbutton" type="submit" name="cancelpr" width="100" value="CANCEL"/>
  </p>
  </div>
  </div>
  <div class="row widget">
  <div class="col-xs-12">
    <h4 class="labelbutton" id="activer"><a href="PR_Form2_Display.php">Obligation Request</a></h4>
  </div>
  </div>
  </aside>
  <!-- /Sidebar -->

  <p>&nbsp;</p>
  <p><!-- /Sidebar -->
    
    <article class="col-md-8 maincontent">
    <header class="page-header"></header>
  </p>
        <?php require 'pr1_edit.html'; ?>
  </article>
  <!-- /Article -->

  </div>
  <!-- end row -->
  </div>
  <!--Content-->

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>