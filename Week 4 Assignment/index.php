<?php


/*
Multiple inheritance is the process where a subclass can be derived from more than one super-class.
The advantage of this is it can use more than one base class. 
The disadvantage is it can be quite confusing.
*/

trait Index {
    public function helloWorld() {
        echo "Hello World!";
    }
}
  

trait Alert {
    public function alertMess() {
        echo "\nThis is my PHP Program.";
    }
}
  
class Ex {
    use Index;
    use Alert;
    public function Message() {
      echo "\nHope this program didn't take two hours to write.";
    } 
}
  
$test = new Ex();
$test-> helloWorld();
$test-> alertMess();
$test-> Message();

?>
