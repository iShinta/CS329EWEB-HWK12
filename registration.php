<?php
  $name3 = $_POST["name3"];
  echo $name3;

  $fh = fopen("signup.txt", "a");
  fwrite($fh, "Hello");
  fclose($fh);
?>
