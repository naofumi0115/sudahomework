<!DOCTYPE html>
<html>
<body>
  <?php
  
interface move{
  public function go();
}

class Vehicle implements move{
  public function go(){
    echo "Bike is moving";
  }
}

class Car implements move {
  public function go(){
    echo "Car is moving";
  }
}

class User{
  private $vehicle_Name;

  public function __construct($vehicle_Name)
  {
    $this->vehicle_Name = $vehicle_Name;
  }

  public function getMove()
  {
    return $this->vehicle_Name;
  }
}

$user = new User("car");

$vehicle_Name = $user->getMove();
switch ($vehicle_Name) {
  case "vehicle":
    $objVehicle = new Vehicle();
    break;
  case "car":
    $objVehicle = new Car();
    break;
}
$objVehicle->go();

?>
</body>
</html>