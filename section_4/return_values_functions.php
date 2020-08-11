<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function addNumbers($num1, $num2)
    {
      return $num1 + $num2;
    }
    $sum = addNumbers(1, 2);
    echo $sum . '<br>';
    ?>
</body>
</html>