<?php

class Vehicle
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

class Car extends Vehicle
{
  public string $type;
  public function setType(string $type)
  {
    $this->type = $type;
  }
}

$benz = new Car();
$benz->setManufacturer('benz');
$benz->setType('car');

if (method_exists('Car', 'MoveWheels')) {
  echo "Vehicle type is $benz->type<br>";
  $benz->MoveWheels();
} else {
  echo "Class method 'MoveWheels' does not exist<br>";
}
?>
