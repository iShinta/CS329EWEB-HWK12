<?php
  $name3 = $_POST["name3"];
  echo "Try ".$name3;

  $fh = fopen("signup.txt", "a");
  fwrite($fh, $name3."<br />");
  fclose($fh);
?>
<h1>Thank you for registering</h1>
