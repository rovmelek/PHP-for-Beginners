<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = [1, 2, 3, 4, 5];
    for ($i = 0; $i < count($array); $i++) {
      echo $array[$i] . '<br>';
    }
    ?>
</body>
</html>