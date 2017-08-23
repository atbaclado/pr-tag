<?php
    require_once "php/startsess.php";
    require_once "php/connectdb.php";
    require_once "php/Mail.php";

    $q = "SELECT office_email FROM office, tracking WHERE track_office = office_num AND track_prid = " . $_SESSION['prid'];
    $r = pg_query($dbconn, $q);
    if(!$r) {
        $errormessage = pg_last_error();
        $_SESSION['errormsg'] = 'Email notif. ' . $errormessage;
        header('Location: ../err_unexpected.php');
    }
    $ofc_email = pg_fetch_result($r, 0, 'office_email');

    $from = "<upc.prtracker@gmail.com>";
    $to = $ofc_email;
    $host = "ssl://smtp.gmail.com";
    $port = "465";
    $username = "upc.prtracker";
    $password = "ibugs123";
    $subject = "UPC-PRTAG NOTIFICATION";
    
    if(!empty(isset($_SESSION[prnum]))) {
        $body = "Purchase Request No. " . $_SESSION['prnum'] . " needs your attention";
    }else {
        $body = "A new Purchase Request needs your attention";
    }

    $headers = array ('From' => $from,
      'To' => $to,
      'Subject' => $subject);
    $smtp = Mail::factory('smtp',
      array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        $_SESSION['errormsg'] = 'Email notif. ' . $mail->getMessage();
        header('Location: ../err_unexpected.php');
    }

	header('Location: track_table.php');
?>
