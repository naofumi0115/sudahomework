<!DOCTYPE html>
<html>

<body>
  <?php

  function Pair($arr , $num)
  {
    $max = 0;
    $min = 0;
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i + 1] < $arr[$i]) {
        $max = $i;
        $min = $i + 1;
        break;
      }
    }

    for($i = 0 ; $max != $min ; $i++){
      $sum = $arr[$max] + $arr[$min];
       if($sum == $num){
        echo "There is a pair " . $arr[$max] . " " . $arr[$min] . "with sum" . $num;
        echo "<br>";
       break;
       }else{
         if($sum < $num){
           if($min  != count($arr) - 1 ){
            $min = $min + 1;
           }else{
             $min = 0;
           }
         }else{
           if($max != 0){
            $max = $max - 1;
           }else{
            $max = count($arr) - 1;
           }
         }
       }
    }


  }

  $arr = array(11, 15, 6, 8, 9, 10);
  Pair($arr,21);

  $arr = array(11, 15, 26, 38, 9, 10);
  Pair($arr,35);
  ?>
</body>

</html>
