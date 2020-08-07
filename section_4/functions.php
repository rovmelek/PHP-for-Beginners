<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function init()
    {
      helloWorld();
      addNumbers(1, 2);
    }

    function helloWorld()
    {
      echo 'Hello World!<br>';
    }

    function addNumbers($a, $b)
    {
      echo $a + $b . '<br>';
    }

    init();
    ?>
</body>
</html>