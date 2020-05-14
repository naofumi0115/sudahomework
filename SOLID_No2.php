<!DOCTYPE html>
<html>
<body>
  <?php
  interface WorkAbleInterface{
      public  function work();
  }

  interface SleepAbleInterface{
      public  function  sleep();
  }

  interface Electricity{
    public function hasPower();
  }

  class Workers implements WorkAbleInterface{

    public  function work(){
    var_dump('works');
  }
  }

  class HumanWorker extends Workers implements SleepAbleInterface{

      public  function  sleep(){
          var_dump('sleep');
      }

  }

  class RobotWorker extends Workers implements Electricity{
      public  function work(){
          if ($this->hasPower()) {
            parent::work();
          }
      }

      public  function hasPower()
      {

          // return true if robot have power, otherwise false.
    }

  }

?>
</body>
</html>
