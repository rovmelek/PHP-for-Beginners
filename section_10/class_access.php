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

class Employee extends Person
{
  public string $employee_id;
  protected string $manager;
  private string $spouse;

  public function __construct(
    string $name,
    string $birthday,
    string $phone,
    string $employee_id,
    string $manager,
    string $spouse
  ) {
    parent::__construct($name, $birthday, $phone);
    $this->employee_id = $employee_id;
    $this->manager = $manager;
    $this->spouse = $spouse;
  }

  public function showEmployee(): void
  {
    echo "$this->name<br>";
    echo "$this->birthday<br>";
    echo "$this->phone<br>";
    echo "$this->employee_id<br>";
    echo "$this->manager<br>";
    echo "$this->spouse<br>";
  }
}

$student1 = new Person('John Doe', '2000-01-01', '123-4567');
echo "$student1->name<br>";
// echo "$student1->birthday<br>"; // Fatal Error (can not access protected from outside of the class)
// echo "$student1->phone<br>"; // Fatal Error (can not access private from outside of the class)
$student1->showProperties(); // Show public, protected and private because showProperties is within the class so it can access all properties

$employee1 = new Employee(
  'Jane Doe',
  '2000-02-02',
  '765-4321',
  '00001',
  'John Doe',
  'John Doe'
);

echo "$employee1->name<br>";
// echo "$employee1->birthday<br>"; // Fatal Error (can not access protected from outside of the class)
// echo "$employee1->phone<br>"; // Fatal Error (can not access private from outside of the class)
echo "$employee1->employee_id<br>";
// echo "$employee1->manager<br>"; // Fatal Error (can not access protected from outside of the class)
// echo "$employee1->spouse<br>"; // Fatal Error (can not access private from outside of the class)
$employee1->showEmployee(); // Show name, birthday, employee_id, manager and spouse because an inherited class has the access of its own properties, and the public/protected properties of its parents. However, it doesn't have the access to the private properties of its parents so it can't show the phone number

?>
