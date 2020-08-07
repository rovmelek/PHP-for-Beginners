<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$number = [10, 20, 49];
// echo $number[2] . '<br>';
print_r($number);

echo '<br>';

// similar to dict in Python, or object in JavaScript?
$names = array('first_name' => 'John');
print_r($names);

echo '<br>';

echo $names['first_name'];

$names['last_name'] = 'Doe';

echo '<br>';

echo $names['last_name'];

?>
</body>
</html>