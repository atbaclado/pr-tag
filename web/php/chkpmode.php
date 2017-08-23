<?php

  function chkPmode() {
    if($_SESSION['prmode'] == "MDS Check") {
      return "TextBox: X";
    }else if($_SESSION['prmode'] == "Commercial Check") {
      return "TextBox: X";
    }else if($_SESSION['prmode'] == "ADA") {
      return "TextBox: X";
    }else if($_SESSION['prmode'] == "Others") {
      return "TextBox: X";
    }else {
      return "TextBox: ";
    }
  }

?>