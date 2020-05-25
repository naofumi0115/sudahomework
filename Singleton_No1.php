<!DOCTYPE html>
<html>

<body>
  <?php
  class Logger
  {
    // Define a private static property to store the instance.
    private static $instance = null;
    // Declaring constructor of the class to be private.
    private function __construct()
    {
    }

    // Providing a static method that returns a reference to the instance.
    public static function log()
    {
      if (null === self::$instance) {
        self::$instance = new Logger();
      }

      return self::$instance;
    }

    public function view_num($num)
    {
      echo $num;
    }
  }


  $view = Logger::log();
  $view->view_num("pascalia");

  ?>
</body>

</html>