<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 5;
    if ($number < 5) {
      echo $number . ' is less than 5<br>';
    } elseif ($number > 5) {
      echo $number . ' is greater than 5<br>';
    } else {
      echo 'I love PHP<br>';
    }

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    for ($i = 0; $i < count($array); $i++) {
      echo $array[$i] . '<br>';
    }

    switch ($number) {
      case 1:
        echo $number . ' is equal to 1<br>';
        break;
      case 2:
        echo $number . ' is equal to 2<br>';
        break;
      case 3:
        echo $number . ' is equal to 3<br>';
        break;
      case 4:
        echo $number . ' is equal to 4<br>';
        break;
      case 5:
        echo $number . ' is equal to 5<br>';
        break;
      default:
        echo $number . ' is not between 1 and 5<br>';
        break;
    }
    ?>
</body>
</html>