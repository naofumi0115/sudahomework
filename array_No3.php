<!DOCTYPE html>
<html>
<body>

  <?php


  function calc($arr){

    $min = null;

    for ($i = 0; $i < count($arr); $i++){
      for ($j = $i; $j < count($arr) and $i <= $j ; $j++){

        $right_side = $j - $i +1;

        $z = $i;

        for ($z; $z <= $j; $z++){
        $sum = $sum + $arr[$z];
      }


      $sum = $sum  - $right_side;
      if ($sum < $min or $min == null){
        $min = $sum;
      }
      $sum = 0;
     }
    }

    echo $min;

  }

  $arr = array(1,0,0,0,4);
  calc($arr);
  $arr = array(0,1,-4,0,4);
  calc($arr);
  $arr = array(-3,0,-1,0,-4);
  calc($arr);

  ?>

</body>
</html>
