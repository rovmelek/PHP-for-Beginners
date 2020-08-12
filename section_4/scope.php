<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 'outside';
    echo 'before convert: ' . $x . '<br>';
    function convertX()
    {
      echo 'trying to convert $x to "inside" by using $x = "inside"<br>';
      $x = 'inside';
    }
    convertX();
    echo 'after convert: ' . $x . '<br>';

    $y = 'outside';
    echo 'before convert: ' . $y . '<br>';
    function convertY()
    {
      global $y;
      echo 'trying to convert $y to "inside" by using $y = "inside"<br>';
      $y = 'inside';
    }
    convertY();
    echo 'after convert: ' . $y . '<br>';
    ?>
</body>
</html>