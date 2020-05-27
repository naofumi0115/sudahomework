<!DOCTYPE html>
<html>
<body>
  <?php

  function Pair($arr,$num){

    $bool = FALSE;

    for ($i = 0;$i < count($arr);$i++){
      for($n = $i;$n < count($arr);$n++){
        if($num == $arr[$i] + $arr[$n]){
          echo "There is a pair " . $arr[$i] . " " . $arr[$n] . "with sum" . $num;
          echo "<br>";
          $bool = TRUE;
        break;
        }
      }
      if ($bool){
      break;
      }
    }
  }

  $arr = array(11,15,6,8,9,10);
  Pair($arr , 16);
  ?>
</body>
</html>