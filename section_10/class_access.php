<?php

class Person
{
  public string $name;
  protected string $birthday;
  private string $phone;

  public function __construct(string $name, string $birthday, string $phone)
  {
    $this->name = $name;
    $this->birthday = $birthday;
    $this->phone = $phone;
  }

  public function showProperties(): void
  {
    echo "$this->name<br>";
    echo "$this->birthday<br>";
    echo "$this->phone<br>";
  }
}

$student1 = new Person('John Doe', '2000-01-01', '123-4567');
echo "$student1->name<br>";
echo "$student1->birthday<br>"; // Fatal Error (can not access protected from outside of the class)
echo "$student1->phone<br>"; // Fatal Error (can not access private from outside of the class)
$student1->showProperties(); // Show public, protected and private because showProperties is within the class so it can access all properties

?>
