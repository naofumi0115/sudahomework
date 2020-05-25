<!DOCTYPE html>
<html>
<body>
  <?php
class Node{
  private $data;
  private $next;

  public function __construct($data = 0, $next = null){
    $this->data = $data; // initial $data
    $this->next = $next;  // initial $next
  }

  public function getData(){
    return $this->data;
  }


  public function setData($data){
    $this->data = $data;
  }


  public function getNext(){
    return $this->next;
  }


  public function setNext($next){
    $this->next = $next;
  }
}

class LinkedList{
  private $head;

  public function insert($data){
    $newNode = new Node($data); // create a Node
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

  public function visit(){
    $currNode = $this->head; // start from head node

    echo "Linked List: ";

    while ($currNode != null) {
      echo $currNode->getData() . " ";
      $currNode = $currNode->getNext();
    }
    echo "<br>";
  }

    public function delete_number($data){
      if ($this->head == null) { // linked list is empty
        echo "List is empty.";
        return;
      }
      if ($this->head->getData() == $data) { //found node is head
        $this->head = $this->head->getNext();
      } else {
        $current = $this->head;
        while ($current->getNext() != null) {
          if ($current->getNext()->getData() == $data) { // found node
            $current->setNext($current->getNext()->getNext());
          }
          else{
            $current = $current->getNext();
          }
        }
      }
    }
}

$list_1 = new LinkedList(); // init linked list: $head = null
$list_1->insert(10);
$list_1->insert(4);
$list_1->insert(1);
$list_1->insert(2);
$list_1->insert(5);
$list_1->insert(2);
$list_1->insert(3);
$list_1->insert(10);

$list_1->delete_number(10);

$list_1->visit();

$list_2 = new LinkedList(); // init linked list: $head = null
$list_2->insert(10);
$list_2->insert(4);
$list_2->insert(1);
$list_2->insert(2);
$list_2->insert(5);
$list_2->insert(2);
$list_2->insert(3);

$list_2->delete_number(2);

$list_2->visit();

?>
</body>
</html>
