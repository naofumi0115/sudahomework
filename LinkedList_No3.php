<!DOCTYPE html>
<html>
<body>
  <?php
  class Node
  {

    private $data;

    private $next;

    public function __construct($data = 0, $next = null)  // default value of $data is 0, $next is null
    {
      $this->data = $data; // initial $data
      $this->next = $next;  // initial $next
    }

    public function getData()
    {
      return $this->data;
    }

    public function setData($data)
    {
      $this->data = $data;
    }

    public function getNext()
    {
      return $this->next;
    }


    public function setNext($next)
    {
      $this->next = $next;
    }
  }

  class LinkedList
  {

    private $head;

    public function insert($name, $age)
    {

      $name_age = array($name, $age);

      $newNode = new Node($name_age); // create a Node
      if ($this->head == null) {
        // if the head is null, that mean linked list is empty, so the first node is head
        $this->head = $newNode;
      } else {
        // if linked list is not null, new node will be add to end of list
        // find the last node
        $last = $this->head;
        while ($last->getNext() != null) {
          $last = $last->getNext();
        }
        // insert new node to at last node
        $last->setNext($newNode);
      }
    }


    public function follower($foll_num, $my)
    {
      $i = 0;
      $currNode = $this->head; // start from head node

      while ($currNode != null and $i <= $foll_num) {
        $pasonal = $currNode->getData();
        if ($my != $pasonal[0]) {
          echo $pasonal[0] . " ";
          echo $pasonal[1];
          echo "<br>";
        }
        $i++;
        $currNode = $currNode->getNext();
      }
    }
  }

  $list = new LinkedList();
  $list->insert("suda", "20");
  $list->insert("Shinzou Abe", "65");
  $list->insert("Donald Trump", "73");


  $list->follower(2, "suda");
  ?>
</body>
</html>
