<?php

require_once 'testing.php';

//inheritance
class people extends testing{

  public function hai(){
    echo "hai bro";
  }

  //overriding
  public function get_bro(){
    return $this->text." overriding bro";
  }

}
?>
