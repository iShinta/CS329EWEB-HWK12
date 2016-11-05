<h1>Thank you for registering</h1>
<?php
  $n1 = "";
  $n2 = "";
  $n3 = "";
  $n4 = "";
  $n5 = "";
  $n6 = "";
  $n7 = "";
  $n8 = "";
  $n9 = "";

  if(isset($_POST["name1"])){
    $n1 = $_POST["name1"];
  }
  if(isset($_POST["name2"])){
    $n2 = $_POST["name2"];
  }
  if(isset($_POST["name3"])){
    $n3 = $_POST["name3"];
  }
  if(isset($_POST["name4"])){
    $n4 = $_POST["name4"];
  }
  if(isset($_POST["name5"])){
    $n5 = $_POST["name5"];
  }
  if(isset($_POST["name6"])){
    $n6 = $_POST["name6"];
  }
  if(isset($_POST["name7"])){
    $n7 = $_POST["name7"];
  }
  if(isset($_POST["name8"])){
    $n8 = $_POST["name8"];
  }
  if(isset($_POST["name9"])){
    $n9 = $_POST["name9"];
  }

  $fh = fopen("signup.txt", "r");
  $slotTaken = Array();
  while(!feof($fh)){
    //Read line
    $lineNb = (int)(fgets($fh));

    //Read Name
    $line = fgets($fh);

    $slotTaken[$lineNb] = $line;
  }
  //print_r($slotTaken);
  fclose($fh);

  $fh = fopen("signup.txt", "a");

  if(!array_key_exists ("1" , $slotTaken) && $n1 != ""){
    fwrite($fh, "1\n");
    fwrite($fh, $n1."\n");
  }else if($n1 != ""){
    echo("Slot already taken by ".$slotTaken["1"]);
  }
  if(!array_key_exists ("2" , $slotTaken) && $n2 != ""){
    fwrite($fh, "2\n");
    fwrite($fh, $n2."\n");
  }else if($n2 != ""){
    echo("Slot already taken by ".$slotTaken["2"]);
  }
  if(!array_key_exists ("3" , $slotTaken) && $n3 != ""){
    fwrite($fh, "3\n");
    fwrite($fh, $n3."\n");
  }else if($n3 != ""){
    echo("Slot already taken by ".$slotTaken["3"]);
  }
  if(!array_key_exists ("4" , $slotTaken) && $n4 != ""){
    fwrite($fh, "4\n");
    fwrite($fh, $n4."\n");
  }else if($n4 != ""){
    echo("Slot already taken by ".$slotTaken["4"]);
  }
  if(!array_key_exists ("5" , $slotTaken) && $n5 != ""){
    fwrite($fh, "5\n");
    fwrite($fh, $n5."\n");
  }else if($n5 != ""){
    echo("Slot already taken by ".$slotTaken["5"]);
  }
  if(!array_key_exists ("6" , $slotTaken) && $n6 != ""){
    fwrite($fh, "6\n");
    fwrite($fh, $n6."\n");
  }else if($n6 != ""){
    echo("Slot already taken by ".$slotTaken["6"]);
  }
  if(!array_key_exists ("7" , $slotTaken) && $n7 != ""){
    fwrite($fh, "7\n");
    fwrite($fh, $n7."\n");
  }else if($n7 != ""){
    echo("Slot already taken by ".$slotTaken["7"]);
  }
  if(!array_key_exists ("8" , $slotTaken) && $n8 != ""){
    fwrite($fh, "8\n");
    fwrite($fh, $n8."\n");
  }else if($n8 != ""){
    echo("Slot already taken by ".$slotTaken["8"]);
  }
  if(!array_key_exists ("9" , $slotTaken) && $n9 != ""){
    fwrite($fh, "9\n");
    fwrite($fh, $n9."\n");
  }else if($n9 != ""){
    echo("Slot already taken by ".$slotTaken["9"]);
  }
  fclose($fh);
?>
<a href="index.php">Back to the Registration Form</a>
