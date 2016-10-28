<?php
  $name3 = $_POST["name3"];
  echo $name3;

  $fh = fopen("info.txt", "a");
  fwrite($fh, "Hello");
  fclose($fh);
?>
