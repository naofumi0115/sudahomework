<!DOCTYPE html>
<html>

<body>
  <?php
  interface WorkAbleInterface
  {
    public  function work();
  }

  interface SleepAbleInterface
  {
    public  function  sleep();
  }

  interface Electricity
  {
    public function hasPower();
  }



  class HumanWorker  implements SleepAbleInterface , WorkAbleInterface{
    
    public  function work(){
      var_dump("works");
    }

    public function  sleep()
    {
      var_dump('sleep');
    }
  }

  class RobotWorker  implements Electricity , WorkAbleInterface{

    public  function work(){
      if ($this->hasPower()) {
        var_dump("works");
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
