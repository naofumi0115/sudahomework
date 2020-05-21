<!DOCTYPE html>
<html>
<body>
  <?php
  function task_processing($n,$priority,$dependence){

    while ($dependence != null){

      if($priority[0] == $dependence[0]){
        $time = $time + 2;
        array_shift($priority);
        array_shift($dependence);
      }
      else{
        $time = $time + 1;
        $work = $priority[0];
        array_shift($priority);
        array_push($priority,$work);
      }
    }

    echo $time;

  }


  $n = 3;
  $priority = array(2,1,3);
  $dependence = array(1,2,3);

  task_processing($n,$priority,$dependence);
?>
</body>
</html>
