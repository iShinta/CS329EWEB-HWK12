<?php
  if(isset($_POST["name1"])){
    $n1 = $_POST["name1"];
    echo $n1;
  }
  //$name2 = $_POST["name2"];
  //$name3 = $_POST["name3"];
  /*$name4 = $_POST["name4"];
  $name5 = $_POST["name5"];
  $name6 = $_POST["name6"];
  $name7 = $_POST["name7"];
  $name8 = $_POST["name8"];
  $name9 = $_POST["name9"];*/

  $fh = fopen("signup.txt", "a");
  /*if($n1 != ""){
    fwrite($fh, 1."\n");
    fwrite($fh, $name1."\n");
  }
  /*if($name2 != ""){
    fwrite($fh, 2."\n");
    fwrite($fh, $name2."\n");
  }
  if($name3 != ""){
    fwrite($fh, 3."\n");
    fwrite($fh, $name3."\n");
  }
  if($name4 != ""){
    fwrite($fh, 4."\n");
    fwrite($fh, $name4."\n");
  }
  if($name5 != ""){
    fwrite($fh, 5."\n");
    fwrite($fh, $name5."\n");
  }
  if($name6 != ""){
    fwrite($fh, 6."\n");
    fwrite($fh, $name6."\n");
  }
  if($name7 != ""){
    fwrite($fh, 7."\n");
    fwrite($fh, $name7."\n");
  }
  if($name8 != ""){
    fwrite($fh, 8."\n");
    fwrite($fh, $name8."\n");
  }
  if($name9 != ""){
    fwrite($fh, 9."\n");
    fwrite($fh, $name9."\n");
  }*/
  fclose($fh);
?>
<h1>Thank you for registering</h1>
