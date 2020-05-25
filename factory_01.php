<!DOCTYPE html>
<html>
<body>
  <?php

  class LoggerManager{
    public $type;

    public function __construct($type){
      $this->type = $type;
    }

    public function log($msg){
      if ($this->type == "file") {
        echo $this->type . " logger: " . $msg;
        echo "<br>";
      } elseif ($this->type == "std") {
        echo $this->type . " logger: " . $msg;
        echo "<br>";
      }
    }
  }

  // Implement your classes here

  $outputMsg = "This is a error message";
  $logger = new LoggerManager('file');
  $logger->log($outputMsg);

  $logger = new LoggerManager('std');
  $logger->log($outputMsg);
  ?>
</body>
</html>