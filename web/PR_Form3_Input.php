<?php
  require 'php/startsess.php';
  require 'php/connectdb.php';

  $q = "SELECT * FROM tracking WHERE track_prnum1 = " . $_SESSION['pr1'] . " AND track_prnum2 = " . $_SESSION['pr2'];
  $r = pg_query($dbconn, $q);
  if(!$r) {
      $errormessage = pg_last_error();
      echo "Error with query form 3: ". $errormessage;
      echo '<br>pr1: ' . $_SESSION['pr1'] . ' pr2:' . $_SESSION['pr2'];
      exit();
  }

  $row = pg_num_rows($r);
  $arr = pg_fetch_array($r);
  if($row == 0) {
    header('Location: err_form3gen.php');
  }else {
    if($arr[6] != 'PR Completed') {
      header('Location: err_form3gen.php');
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
  
  <title>iBugs - PR Request Form 3</title>
     <style>
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

</head>
  <body style="tab-interval:21pt;text-justify-trim:punctuation;">
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top headroom" >
  <div class="navbar-header">

  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  <a class="navbar-brand" href="index.php"><img src="assets/images/logos.png" alt="Progressus HTML5 template"></img></a>
  </div>
    <?php require 'menu.php'; ?> 
  </div>
  </div>  

  <header id="head" class="secondary"></header> 
  <div class="container">      
  <div class="row">
        
      <form action="php/disbursementreq.php" method="POST">
        <!-- Sidebar -->
      <aside id="activerSide" class="col-md-4 sidebar sidebar-left">

      <!--  <div class="row widget">
          <div  class="col-xs-12">
              <h4 class="labelbutton" id="activer"><a href="PR_Form1_Display.php">Purchase Request</a></a></h4>
          </div>
        </div> -->
        <div class="row widget">
          <div id="activerRow" class="col-xs-12" style="border-bottom:2px solid black;">
                        <h4 class="labelbutton" id="activer"><a href="PR_Form2_Display.php">Disbursement Voucher</a></a></h4>
            <p align="center">
                        <!-- <input type="image"name="newpr" width="100" value="submit" src="button.png" /> -->
                        <input class="subbutton" type="submit" name="newdv" width="100" value="CREATE"/>
                        </p>
          </div>
        </div>
      <!--  <div class="row widget">
          <div class="col-xs-12">
            <h4 class="labelbutton" id="activer"><a href="PR_Form3_Display.php">Obligation Request</a></h4>
          </div>
        </div>
         -->
    </aside>
        <!-- /Sidebar -->
  <p>&nbsp;</p>
  <p><!-- /Sidebar -->
    
    <article class="col-md-8 maincontent">
    <header class="page-header"></header>
  </p>
        <?php require 'pr3_input.html'; ?>
  </article>
  <!-- /Article -->

  </div>
  <!-- end row -->
  </div>
</form>
  <!--Content-->

  <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="assets/js/headroom.min.js"></script>
  <script src="assets/js/jQuery.headroom.min.js"></script>
  <script src="assets/js/template.js"></script>
</body>
</html>