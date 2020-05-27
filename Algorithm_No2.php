<!DOCTYPE html>
<html>
<body>
  <?php
function sort_Array($arr){

  $change = 0;

  for ($i = count($arr) - 1; 0 < $i; $i--) {
    for ($n = 0; $n < $i; $n++) {
      if ($arr[$n + 1] < $arr[$n]) {
        $change = $arr[$n + 1];
        $arr[$n + 1] = $arr[$n];
        $arr[$n] = $change;
      }
    }
  }
  return $arr;
}

function min_Pair($arr_1,$arr_2,$k){

  $index_1 = 0;
  $index_2 = 0;

  $next_Pair_1 = 0;
  $next_Pair_2 = 0;

  echo $arr_1[$index_1] . " " . $arr_2[$index_2];
  echo "<br>";

  for ($i = 0; $i < $k - 1; $i++){

    $next_Pair_1 = $arr_1[$index_1] + $arr_2[$index_2 + 1];
    $next_Pair_2 = $arr_1[$index_1 + 1] + $arr_2[$index_2];

    if ($next_Pair_1 < $next_Pair_2){

      $index_2++;

      echo $arr_1[$index_1] . " " . $arr_2[$index_2];
      echo "<br>";
    }else{

      $index_1++;

      echo $arr_1[$index_1] . " " . $arr_2[$index_2];
      echo "<br>";
    }
  }
}

$arr_1 = array(11,7,1);
$arr_2 = array(4,6,2);

$arr_1 = sort_Array($arr_1);
$arr_2 = sort_Array($arr_2);

min_Pair($arr_1,$arr_2,3);

$arr_1 = array(10, 20, 30);
$arr_2 = array(2, 10, 12);

$arr_1 = sort_Array($arr_1);
$arr_2 = sort_Array($arr_2);

min_Pair($arr_1, $arr_2, 3);
  ?>
</body>
</html>