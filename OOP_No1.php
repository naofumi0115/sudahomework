<!DOCTYPE html>
<html>
<body>
  <?php

  interface calc {

    public function area();

  }

  class calc_square implements calc {

    public $vertical;
    public $width;

    public function __construct($vertical,$width){
      $this->vertical = $vertical;
      $this->width = $width;
    }

    public function area(){
    }

  }


  class calc_triangle extends calc_square{
    public function area(){
      $triangle = $this->vertical * $this->width / 2;
      echo $triangle;
      echo "<br>";
    }
  }

  class calc_rectangle extends calc_square{
    public function area(){
      $rectangle = $this->vertical * $this->width;
      echo $rectangle;
      echo "<br>";
    }
  }

  $triangle = new calc_triangle(10,10);
  $triangle->area();

  $rectangle = new calc_rectangle(10,10);
  $rectangle->area();
?>
</body>
</html>
