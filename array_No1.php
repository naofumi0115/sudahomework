<!DOCTYPE html>
<html>

<body>
  <?php

  function calc($arr){
    if (!empty($arr)){
    $sum = $arr[0];
    $min = $arr[0];
    $max = $arr[0];

    for ($index = 1; $index <=  count($arr) - 1; $index++) {
      $sum = $sum + $arr[$index];

      if ($max < $arr[$index]) {
        $max = $arr[$index];
      }
      if ($arr[$index] < $min)
        $min = $arr[$index];
    }

    echo ("Average"  . $sum / count($arr) . "  Sum" . $sum . "  Min" . $min . "  Max" . $max . "<br>");
   }
  }
  $arr = array(5, 12, 17, 9, 3);
  calc($arr);
  $arr = array(13, 4, 8, 14, 1);
  calc($arr);
  $arr = array(9, 5, 3, 7, 21);
  calc($arr);

  ?>
</body>

</html>
