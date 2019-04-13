<?php

require_once 'testing.php';

//inheritance
class people extends testing{

  public function hai(){
    echo "hai bro<br>";
  }

  //overriding
  public function get_bro(){
    return $this->text." => overriding bro<br>";
  }

  // self and parent
  public function selpar(){
    return $this->get_bro(); //get function on this class
    // return self::get_bro(); //get function on this class
    // return parent::get_bro(); //get function on parent class
  }

}
?>
