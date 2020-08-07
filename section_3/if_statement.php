<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
    $number = 10;
    if ($number < 10) {
      echo $number . ' is less than 10' . '<br>';
    } elseif ($number == 10) {
      echo $number . ' is equal to 10' . '<br>';
    } else {
      echo $number . ' is greater than 10' . '<br>';
    }
    ?>
  </body>
</html>
