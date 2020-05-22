<!DOCTYPE html>
<html>

<body>
  <?php

  interface AreaInterface
  {
    public  function calculateArea();
  }

  class Rectangle implements AreaInterface
  {
    protected $width;
    protected $height;

    public function setWidth($width)
    {
      $this->width = $width;
    }

    public function setHeight($height)
    {
      $this->height = $height;
    }

    public  function calculateArea()
    {
      $area = $this->width * $this->height;
      echo $area;
    }
  }

  class Square implements AreaInterface{

    public $width;

    public function set_width($width){
      $this->width = $width;
    }

    public function calculateArea(){
      $area = $this->width * $this->width;
      return $area;
    }


  }

  class Circle implements AreaInterface
  {
    public $radius;
    public function setRadius($radius)
    {
      $this->radius = $radius;
    }

    public  function calculateArea()
    {
      $area = $this->radius * $this->radius;
      return $area;
    }
  }

  class CostManager
  {
    public function calculate($shape)
    {
      $costPerUnit = 1.5;
      $totalCost = $costPerUnit * $shape->calculateArea();
      return $totalCost;
    }
  }

$circle = new Circle();
$circle->setRadius(5);

$rect = new Rectangle();
$rect->setWidth(8);
$rect->setHeight(5);

$sqr = new Square();
$sqr->set_width(5);

$obj = new CostManager();
echo $obj->calculate($sqr);
  ?>
</body>

</html>
