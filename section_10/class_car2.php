<?php

class Car
{
  function MoveWheels()
  {
    echo 'Wheels are moving<br>';
  }
}

$newCar = new Car();

if (method_exists('Car', 'MoveWheels')) {
  $newCar->MoveWheels();
} else {
  echo "Class method 'MoveWheels' does not exist<br>";
}
?>
