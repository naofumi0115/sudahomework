<!DOCTYPE html>
<html>
<body>
  <?php


  function arrs_calc($arrs){

    $sum = 0;
    $min = $arrs[0][0];
    $max = $arrs[0][0];

    for ($line = 0 ; $line <  count($arrs) ; $line++){
      for($row = 0; $row < count($arrs[0]); $row++){
        $sum = $sum + $arrs[$line][$row];
        if ($min < $arrs[$line][$row]){
          $min = $arrs[$line][$row];
        }
        if($arrs[$line][$row] < $max){
          $max = $arrs[$line][$row];
        }
      }
      $arrs_sum = $arrs_sum + $row;
    }

    echo ("Average"  . $sum /$arrs_sum . "  Sum". $sum . "  Min" . $min . "  Max" . $max . "<br>");

  }

  $arrs = array(
    array(5,12,17,9,13) ,
    array(13,4,8,14,1) ,
    array(9,5,3,17,21),
  );

  arrs_calc($arrs);



?>
</body>
</html>
