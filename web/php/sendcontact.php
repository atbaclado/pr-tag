<?php
    require_once "startsess.php";
    require_once "connectdb.php";
    require_once "Mail.php";

    $user = $_SESSION['username'];

    $from = "<upc.prtracker@gmail.com>";
    $to = "<upc.prtracker@gmail.com>";

    $val1 = $_POST['Name'];
    $val2 = $_POST['Email'];
    $val3 = $_POST['Phone'];
    $host = "ssl://smtp.gmail.com";
    $port = "465";
    $username = "upc.prtracker";
    $password = "ibugs123";
    $subject = "PR CONTACT[ '" . $val1 ."', '". $val2 . "', ". $_POST['Phone']."]";
    $body = $_POST['Body'];

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
      echo("<p>" . $mail->getMessage() . "</p>");
      echo "<br>" . $username;
    } else {
      echo("<p>Message successfully sent! to $user</p>");
    }

	header('Location: ./../loading.php');
?>
