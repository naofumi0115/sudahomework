<!DOCTYPE html>
<html>

<body>
  <?php

  class shape{

    public $vertical;
    public $width;

    public function __construct($vertical, $width){
      $this->vertical = $vertical;
      $this->width = $width;
    }

  }


  class triangle extends shape{
    public function area()
    {
      $triangle = $this->vertical * $this->width / 2;
      echo $triangle;
      echo "<br>";
    }
  }

  class rectangle extends shape{
    public function area()
    {
      $rectangle = $this->vertical * $this->width;
      echo $rectangle;
      echo "<br>";
    }
  }

  $triangle = new triangle(10, 10);
  $triangle->area();

  $rectangle = new rectangle(10, 10);
  $rectangle->area();
  ?>
</body>
</html>
