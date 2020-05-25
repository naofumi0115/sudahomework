<!DOCTYPE html>
<html>
<body>
  <?php

  function list_game ($list){

    $list_b = $list;
    $index_b = count($list_b) - 1;
    $list_a = array_reverse($list);
    $index_a = $index_b;
    $result = array();

    while( 0 <= $index_a and 0 <= $index_b){
      if ($list_b[$index_b] < $list_a[$index_a]){
        array_push($result,1);
        $index_b = $index_b - 1;
      }
      elseif($list_a[$index_a] < $list_b[$index_b]){
        array_push($result,2);
        $index_a = $index_a - 1;
      }
      else{
        array_push($result,0);
        $index_a = $index_a - 1;
        $index_b = $index_b - 1;
      }
    }

    for ($i = 0; $i < count($result); $i++){
      echo $result[$i];
    }

    echo "<br>";
  }



  $list = array(1,2,3);
  list_game($list);
  $list = array(2,1,3,2);
  list_game($list);

?>
</body>
</html>
