<?php
  function longdate($timestamp)
  {
    $temp = date("l F jS Y", $timestamp);
    return "Today's date is: $temp";
  }

  echo longdate(time());
?>
