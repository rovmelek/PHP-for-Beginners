<?php

class Car
{
  public string $manufacturer;

  // public function __construct(string $manufacturer)
  // {
  //   $this->manufacturer = $manufacturer;
  // }

  public function setManufacturer(string $manufacturer): void
  {
    $this->manufacturer = $manufacturer;
  }

  public function MoveWheels(): void
  {
    echo "$this->manufacturer wheels are moving<br>";
  }
}

$benz = new Car();
$benz->setManufacturer('benz');

$bmw = new Car();
$bmw->setManufacturer('bmw');

if (method_exists('Car', 'MoveWheels')) {
  $benz->MoveWheels();
  $bmw->MoveWheels();
} else {
  echo "Class method 'MoveWheels' does not exist<br>";
}
?>
