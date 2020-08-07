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
    print_r($array);
    echo '<br>';
    foreach ($array as $key => $value) {
      echo 'key: ' . $key . ', ' . 'value: ' . $value . '<br>';
    }
    foreach ($array as $value) {
      echo $value . '<br>';
    }
    ?>
</body>
</html>