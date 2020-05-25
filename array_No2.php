<!DOCTYPE html>
<html>
<body>
  <?php

  function arr_calc($arr_1, $arr_2)
  {

    $arr_sum = array();

    for ($index = 0; $index <  count($arr_1); $index++) {
      $sum = $arr_1[$index] + $arr_2[$index];
      echo $sum . " ";
    }

  }

  $arr_1 = array(1, 2, 3, 4, 5);
  $arr_2 = array(4, 5, 3, 2, 10);
  arr_calc($arr_1, $arr_2);

  ?>
</body>
</html>
