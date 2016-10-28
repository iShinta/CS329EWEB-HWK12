<!DOCTYPE html>

<html>
  <head>
    <title>Sign-Up Sheet</title>
    <meta name="author" content="mh47723 and mh47727" >
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body>
    <?php
      $listSignUp = array(
        1 => "Test1",
        2 => "Test2",
        3 => "Test3",
        4 => "",
        5 => "",
        6 => "",
        7 => "",
        8 => "",
        9 => ""
      );

      echo $listSignUp[1];

      function getName($i){
        return $listSignUp[1];
      }
    ?>
    <form>
      <table border="1">
        <tr>
          <th>Time</th><th>Name</th>
        </tr>
        <tr>
          <td>8:00 am </td><td><?php echo(getName(1)); ?></td>
        </tr>
        <tr>
          <td>10:00 am </td><td><?php echo("Hello"); ?></td>
        </tr>
        <tr>
          <td>11:00 am </td><td></td>
        </tr>
        <tr>
          <td>12:00 pm </td><td></td>
        </tr>
        <tr>
          <td>1:00 pm </td><td></td>
        </tr>
        <tr>
          <td>2:00 pm </td><td></td>
        </tr>
        <tr>
          <td>3:00 pm </td><td></td>
        </tr>
        <tr>
          <td>4:00 pm </td><td></td>
        </tr>
        <tr>
          <td>5:00 pm </td><td></td>
        </tr>
      </table>
      <input type="submit" name="submit" value="Register" />
    </form>
  </body>
</html>
