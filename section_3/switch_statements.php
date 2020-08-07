<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 4;
    switch (true) {
      case $number < 5:
        echo $number . ' is less than 5' . '<br>';
        break;
      default:
        echo $number . ' is not less than 5' . '<br>';
        break;
    }
    ?>
</body>
</html>