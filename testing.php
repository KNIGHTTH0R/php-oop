<?php

// class
class testing{

  // property
  // public $text = 'Welcome to the OOP';
  // public $int = 123;
  public $text;
  public $int;

  //metode
  public function home(){
    echo $this->text;
  }

  public function count(){
    return $this->int;
  }

  //constructor
  public function __construct(){
    echo 'This is come from construct<br>';
  }

  // metode set and metode get
  public function set_bro($param){
    $this->text = $param;
  }

  public function get_bro(){
    return $this->text;
  }

}

class people extends testing{

  public function hai(){
    echo "hai bro";
  }
  
}

?>
