<!DOCTYPE html>
<html>
<body>
  <?php

  function sort_Array($arr){

    $change = 0;

    for ($i = count($arr) - 1;0 < $i ;$i--){
      for ($n = 0; $n < $i; $n++){
        if($arr[$n + 1] < $arr[$n]){
          $change = $arr[$n + 1];
          $arr[$n + 1] = $arr[$n];
          $arr[$n] = $change;
        }
      }
    }
    return $arr;
  }

  function missing_Num($arr, $max){
      for ($i= 0; $i < $max; $i++) {
        if ($arr[$i] != $i){
          echo $i;
          echo "<br>";
        break;
        }
      }
  }


  $arr = array(0,2,1,9,7);
  $sort = sort_Array($arr);
  missing_Num($sort,10);

  $arr = array(4, 11, 13, 6);
  $sort = sort_Array($arr);
  missing_Num($sort,12);

  $arr = array(5,1,6,3,7,0,2,4,10);
  $sort = sort_Array($arr);
  missing_Num($sort,11);

  ?>
</body>
</html>